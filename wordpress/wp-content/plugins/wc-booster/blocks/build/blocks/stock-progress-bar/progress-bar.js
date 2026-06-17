/******/ (() => { // webpackBootstrap
/*!*******************************************************!*\
  !*** ./src/blocks/stock-progress-bar/progress-bar.js ***!
  \*******************************************************/
(function ($) {
  const VariationProductStockBar = {
    init: function () {
      $(document).on('click', '.wc-booster-swatches-selector a', this.onSwatchClick);
      $(document).on('change', 'select[data-attribute_name]', this.onSelectChange);
    },
    onSwatchClick: function (e) {
      e.preventDefault();
      VariationProductStockBar.updateStockBar($(this));
    },
    onSelectChange: function () {
      VariationProductStockBar.updateStockBar($(this));
    },
    updateStockBar: function (el) {
      var $wrapper = el.closest('.wc_booster_variations'),
        variation = JSON.parse($wrapper.attr('data-product_variations')),
        $productWrapper = $wrapper.closest('li.product');
      let matchingVariation = {};

      // Loop through all available variations
      for (const varData of variation) {
        let isMatching = true;
        for (const [attr_name, attr_value] of Object.entries(varData.attributes)) {
          const attributeName = attr_name.replace('attribute_', '');
          let selectedValue = $wrapper.find(`ul.wc-booster-swatches-selector[data-id="${attributeName}"] li.selected a`).data('value') || $wrapper.find(`select[data-attribute_name="attribute_${attributeName}"]`).val();
          if (attr_value !== selectedValue) {
            isMatching = false;
            break;
          }
        }
        if (isMatching) {
          matchingVariation = varData;
          break;
        }
      }
      var vId = matchingVariation.variation_id;
      if (vId) {
        $.ajax({
          url: WC_BOOSTER_SPB.ajaxurl,
          type: 'POST',
          data: {
            action: 'get_variation_stock_info',
            variation_id: vId
          },
          success: function (response) {
            if (response.success && matchingVariation.is_in_stock) {
              var totalStock = response.data.total_stock,
                soldStock = response.data.sold_stock;
              var progressPercentage = soldStock / (soldStock + totalStock) * 100;
              $productWrapper.find('.stock-progress-bar-fill').css('width', progressPercentage + '%');
              $productWrapper.find('.stock-progress-status').text('Sold: ' + soldStock + ' / ' + (soldStock + totalStock));
              $productWrapper.find('.wc-booster-stock-progress-bar-wrapper').attr('style', 'display: block');
            } else {
              $productWrapper.find('.wc-booster-stock-progress-bar-wrapper').attr('style', 'display: none');
              //$productWrapper.find( '.stock-progress-status' ).text('Stock information not available');
            }
          }
        });
      }
    }
  };
  $(document).ready(function () {
    VariationProductStockBar.init();
  });
})(jQuery);
/******/ })()
;
//# sourceMappingURL=progress-bar.js.map