/******/ (() => { // webpackBootstrap
/*!************************************************************!*\
  !*** ./src/blocks/product-image-gallery/gallery-slider.js ***!
  \************************************************************/
(function ($) {
  // Initialize Slick sliders
  function initializeSliders() {
    $('.wc-booster-thumbnail').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      infinite: false,
      vertical: true,
      focusOnSelect: true,
      verticalSwiping: true,
      centerMode: false,
      arrows: false,
      swipeToSlide: true,
      asNavFor: '.wc-booster-main-image'
    });
    $('.wc-booster-main-image').slick({
      infinite: false,
      asNavFor: '.wc-booster-thumbnail',
      nextArrow: '<button class="slick-next"><i class="fa fa-angle-right"></i></button>',
      prevArrow: '<button class="slick-prev"><i class="fa fa-angle-left"></i></button>',
      responsive: [{
        breakpoint: 767,
        settings: {
          dots: true
        }
      }]
    });
  }

  // Handle WooCommerce variation change
  function handleVariationChange() {
    $('form.variations_form').on('woocommerce_variation_has_changed', function () {
      var $form = $(this);
      var selectedVariationId = $form.find('input[name="variation_id"]').val();
      var $thumbnailWrapper = $('.wc-booster-thumbnail');
      var $mainImageWrapper = $('.wc-booster-main-image');
      var av = WC_BOOSTER_PIGB.available_variations;
      var variation = av.find(function (v) {
        return v.variation_id == selectedVariationId;
      });
      var variationImage = variation ? variation.image : null;

      // Update the image sources for the selected variation
      $mainImageWrapper.find('div[data-index="0"]').attr('data-variation-id', selectedVariationId);
      if (variationImage && variationImage.src) {
        $thumbnailWrapper.find('[data-index="0"] img').attr('src', variationImage.src);
        $mainImageWrapper.find('[data-index="0"] img').attr('src', variationImage.src);
      }

      // Navigate to the selected variation in the main image slider
      var $selectedVariationIdElement = $mainImageWrapper.find('[data-variation-id="' + selectedVariationId + '"]');
      if ($selectedVariationIdElement.length) {
        var index = $selectedVariationIdElement.data('index');
        $mainImageWrapper.slick('slickGoTo', index);
      }
    });
  }
  function initialize() {
    initializeSliders();
    handleVariationChange();
  }
  $(document).ready(function () {
    initialize();
    $('.wc-booster-main-image').magnificPopup({
      delegate: '.wc-booster-image-gallery-wrapper',
      // Target the div containing the image
      type: 'image',
      gallery: {
        enabled: true // Enable gallery mode for multiple images
      },
      callbacks: {
        elementParse: function (item) {
          // Use the 'data-zoom-image' attribute as the image source
          item.src = $(item.el).attr('data-zoom-image');
        }
      },
      closeBtnInside: false,
      closeOnContentClick: true
    });
    $('.wc-booster-single-main-image').magnificPopup({
      delegate: '.wc-booster-single-main-image-wrapper',
      // Target the div containing the image
      type: 'image',
      gallery: {
        enabled: true // Enable gallery mode for multiple images
      },
      callbacks: {
        elementParse: function (item) {
          // Use the 'data-zoom-image' attribute as the image source
          item.src = $(item.el).attr('data-zoom-image');
        }
      },
      closeBtnInside: false,
      closeOnContentClick: true
    });
  });
})(jQuery);
/******/ })()
;
//# sourceMappingURL=gallery-slider.js.map