/******/ (() => { // webpackBootstrap
/*!*******************************************!*\
  !*** ./src/blocks/countdown/countdown.js ***!
  \*******************************************/
(function ($) {
  $(document).ready(function () {
    var $countdownContainers = $('.wc-booster-countdown-block');
    $countdownContainers.each(function () {
      var $countdownContainer = $(this),
        blockId = $countdownContainer.attr('id'),
        targetDate = new Date($(`#${blockId}`).data('target-date')),
        $expiredMessage = $countdownContainer.find('.expired-message'),
        $countdownWrapper = $countdownContainer.find('.wc-booster-countdown-wrapper');
      var updateCountdown = () => {
        var now = new Date();
        var distance = targetDate - now;
        if (distance < 0) {
          if ($expiredMessage.length) {
            $expiredMessage.show();
          }
          if ($countdownWrapper.length) {
            $countdownWrapper.hide();
          }
          clearInterval(timer);
          return;
        }
        var days = Math.floor(distance / (1000 * 60 * 60 * 24)),
          hours = Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60)),
          minutes = Math.floor(distance % (1000 * 60 * 60) / (1000 * 60)),
          seconds = Math.floor(distance % (1000 * 60) / 1000);
        var timeValues = {
          days,
          hours,
          minutes,
          seconds
        };
        $.each(timeValues, (key, value) => {
          $countdownContainer.find(`[data-time="${key}"]`).text(value);
        });
      };
      const timer = setInterval(updateCountdown, 1000);
      updateCountdown();
    });
  });
})(jQuery);
/******/ })()
;
//# sourceMappingURL=countdown.js.map