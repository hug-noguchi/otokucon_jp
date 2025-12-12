(function() {
    const PARAM_STORAGE_KEY = "saved_url_params"; // URLパラメーター保持用
    const REFERRER_STORAGE_KEY = "original_referrer"; // 元リファラー保持用
    const PARAM_EXPIRE_MS = 15 * 1000; // URLパラメーターの保持時間 15秒

    /* ---------- URLパラメーター関連 ---------- */
    function getUrlParams(url) {
        const u = new URL(url, window.location.origin);
        const params = {};
        u.searchParams.forEach((v, k) => { params[k] = v; });
        return params;
    }

    function saveParams(params) {
        if (!params || Object.keys(params).length === 0) return;
        const data = { params: params, timestamp: Date.now() };
        localStorage.setItem(PARAM_STORAGE_KEY, JSON.stringify(data));
    }

    function loadParams() {
        const data = localStorage.getItem(PARAM_STORAGE_KEY);
        if (!data) return null;
        try {
            const obj = JSON.parse(data);
            if (Date.now() - obj.timestamp > PARAM_EXPIRE_MS) return null;
            return obj.params;
        } catch {
            return null;
        }
    }

    function applyParams(url) {
        const saved = loadParams();
        if (!saved) return url;
        const u = new URL(url, window.location.origin);
        Object.keys(saved).forEach(k => u.searchParams.set(k, saved[k]));
        return u.toString();
    }

    /* ---------- リファラー関連（セッションストレージ） ---------- */
    function saveReferrer(ref) {
        if (!ref) return;
        sessionStorage.setItem(REFERRER_STORAGE_KEY, ref);
    }

    function loadReferrer() {
        return sessionStorage.getItem(REFERRER_STORAGE_KEY) || document.referrer || "";
    }

    function getRestoredReferrer() {
        return loadReferrer();
    }

    /* ---------- History APIラップ ---------- */
    const originalReplaceState = history.replaceState;
    const originalPushState = history.pushState;

    function wrapHistoryMethod(original, methodName) {
        return function(state, title, url) {
            if (url) {
                const params = getUrlParams(url);
                if (Object.keys(params).length > 0) saveParams(params);
                const newUrl = applyParams(url);
                if (newUrl !== window.location.href) {
                    return original.call(history, state, title, newUrl);
                }
            }
            return original.apply(history, arguments);
        };
    }

    history.replaceState = wrapHistoryMethod(originalReplaceState, "replaceState");
    history.pushState = wrapHistoryMethod(originalPushState, "pushState");

    /* ---------- ページロード時 ---------- */
    const currentParams = getUrlParams(window.location.href);
    if (Object.keys(currentParams).length > 0) {
        saveParams(currentParams);
    } else {
        const newUrl = applyParams(window.location.href);
        if (newUrl !== window.location.href) {
            history.replaceState(history.state, document.title, newUrl);
        }
    }

    // リファラーを保持
    if (!sessionStorage.getItem(REFERRER_STORAGE_KEY)) {
        saveReferrer(document.referrer);
    }

    // GA4用のグローバル変数にセット
    window.originalReferrerForGA = getRestoredReferrer();

    // GA4に送信（gtagが存在する場合）
    if (typeof gtag === "function") {
        gtag('event', 'page_view', {
            'document_referrer': window.originalReferrerForGA
        });
    }

})();
