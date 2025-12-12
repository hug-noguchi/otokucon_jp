jQuery(function($){
  if(window.location.pathname === "/" || window.location.pathname === "") {
    // === 二重 submit 防止 ===
    $(document).on('submit', '.mw_wp_form form', function(e){
      var form = this;
      if($(form).data('submitted')){
        e.preventDefault();
        console.log('二重 submit 防止');
        return false;
      }
      $(form).data('submitted', true);
    });

    // === location.assign / replace によるトップページ再読み込み防止 ===
    const blockReload = () => {
      const originalAssign = window.location.assign;
      window.location.assign = function(url){
        const u = new URL(url, window.location.origin);
        if(u.pathname === '/' || u.pathname === '') return;
        return originalAssign.apply(this, arguments);
      };
      const originalReplace = window.location.replace;
      window.location.replace = function(url){
        const u = new URL(url, window.location.origin);
        if(u.pathname === '/' || u.pathname === '') return;
        return originalReplace.apply(this, arguments);
      };
    };
    blockReload();
  }
});
