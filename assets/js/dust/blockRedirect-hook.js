// パラメータ付きトップページのリダイレクト防止
(function() {
    if (window.location.pathname === '/' || window.location.pathname === '') {
        // history.replaceState 上書き
        const originalReplaceState = history.replaceState;
        history.replaceState = function(state, title, url) {
            if (url) {
                const currentParams = new URL(window.location).searchParams;
                const newUrl = new URL(url, window.location.origin);
                currentParams.forEach((value, key) => {
                    if (!newUrl.searchParams.has(key)) {
                        newUrl.searchParams.set(key, value);
                    }
                });
                url = newUrl.toString();
            }
            return originalReplaceState.apply(this, arguments);
        };

        // location.assign / replace 上書き
        const originalAssign = window.location.assign;
        window.location.assign = function(url) {
            const u = new URL(url, window.location.origin);
            if (u.pathname === '/' || u.pathname === '') {
                console.log('トップページ再読み込み防止 (assign):', url);
                return;
            }
            return originalAssign.apply(this, arguments);
        };

        const originalReplace = window.location.replace;
        window.location.replace = function(url) {
            const u = new URL(url, window.location.origin);
            if (u.pathname === '/' || u.pathname === '') {
                console.log('トップページ再読み込み防止 (replace):', url);
                return;
            }
            return originalReplace.apply(this, arguments);
        };
    }
})();
