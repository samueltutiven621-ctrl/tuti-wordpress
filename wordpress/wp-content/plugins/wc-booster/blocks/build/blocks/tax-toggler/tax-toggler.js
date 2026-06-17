/******/ (() => { // webpackBootstrap
/*!***********************************************!*\
  !*** ./src/blocks/tax-toggler/tax-toggler.js ***!
  \***********************************************/
(function ($) {
  function removeUrlParameter(paramKey) {
    const url = window.location.href;
    var r = new URL(url);
    r.searchParams.delete(paramKey);
    const newUrl = r.href;
    window.history.pushState({
      path: newUrl
    }, '', newUrl);
  }
  $(document).ready(function () {
    removeUrlParameter("mode");
  });
})(jQuery);
/******/ })()
;
//# sourceMappingURL=tax-toggler.js.map