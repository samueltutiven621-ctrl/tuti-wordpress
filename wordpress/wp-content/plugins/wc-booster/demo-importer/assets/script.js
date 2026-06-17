(function ($) {

	$(document).on('click', '.type a', function () {

		var type = $(this).data('type');

		$('.type').removeClass('active');
		$(this).closest('li').addClass('active');

		$('.wc-booster-demo-importer-content').removeClass(function (index, className) {
			return (className.match(/\bshow-\S+/g) || []).join(' ');
		});

		$('.wc-booster-demo-importer-content').addClass('show-' + type);

	});

	$(document).on('click', '.demo-importer-content .favourite-button', function () {

		var $this = $(this);
		var $wrapper = $this.closest('.wc-booster-demo-importer-item');
		var type = $this.hasClass('fav') ? 'remove' : 'add';
		var data = {
			'action': 'wc_booster_favourite',
			'security': WC_BOOSTER_DEMO_IMPORTER.nonce,
			'id': $this.data('id'),
			'type': type
		};

		$this.addClass('loading');

		var favCount = parseInt($('.wishlist-count').text());
		$.post(
			WC_BOOSTER_DEMO_IMPORTER.ajax_url,
			data,
			function (response, status) {
				if ('success' == status) {
					if (type == 'add') {
						$this.addClass('fav');
						$wrapper.addClass('fav');
						$('.wishlist-count').text(favCount + 1);
					} else {
						$this.removeClass('fav');
						$wrapper.removeClass('fav');
						$('.wishlist-count').text(favCount - 1);
					}
				}
			}
		)
			.always(function () {
				$this.removeClass('loading');
			})
			.fail(function (res) {
				alert(res.statusText);
			});
	});

	$(document).on('click', '.demo-importer-featured-image , .details-icon', function () {
		$('body').addClass('demo-item-popup');

		$( '.inserter' ).prop( 'disabled', false );

		var $wrapper = $(this).closest('.wc-booster-demo-importer-item');
		var site_id = $wrapper.data('id');
		var site_description = $wrapper.data('description');
		var site_name = $wrapper.data('name');
		var site_url = $wrapper.data('site-url');

		$('.inserter').data('id', site_id);
		$('.entry-description').html(site_description);
		$('.theme-name').html(site_name);
		$('.demo-link').attr('href', site_url);

		var screenshots = $wrapper.data('screenshots');
		var order = ['home', 'shop', 'product', 'product_variation', 'checkout', 'myaccount', 'thankyou'];
		for (var i = 0; i < order.length; i++) {
			$('.popup-content-sidebar li.' + order[i]).find('img').attr('src', screenshots[order[i]]);
		}

		$('.popup-content-sidebar li').first().addClass('active');

		var initialImage = $('.popup-content-sidebar li.active').find('img').attr('src');
		$('.popup-content-slider-item-wrapper').find('img').attr('src', initialImage);

		$('.popup-content-sidebar li').on('click', function () {
			$('.popup-content-sidebar li').removeClass('active');
			$(this).addClass('active');

			var image = $(this).find('img').attr('src');
			$('.popup-content-slider-item-wrapper').find('img').fadeOut(300, function () {
				$(this).attr('src', image).fadeIn(200);
			});
		});
	});

	$(document).on('click', '.pro-theme .demo-importer-featured-image , .pro-theme .details-icon', function () {
		$('body').addClass('demo-item-popup demo-item-popup-pro');
	});

	$(document).on('click', '.wc-booster-demo-importer-wrapper > .overlay , .close', function () {
		$('body').removeClass('demo-item-popup');
		$('body').removeClass('wc-booster-import-completed');
		$('body').removeClass('wc-booster-importing');
		$('.console').empty();
		$('body').removeClass('demo-item-popup-pro');
	});

	$(document).ready(function () {

		var countFav = 0;
		$('.wc-booster-demo-importer-item').each(function () {
			if ($(this).hasClass('fav')) {
				countFav++;
			}
		});

		$('.wishlist-count').text(countFav);

		var url = new URL(window.location.href);

		if (url.searchParams.has('refresh')) {
			url.searchParams.delete('refresh');
			window.history.replaceState({}, document.title, url.toString());
		}

		var allCheckbox = $("#all-checkbox");
		var itemCheckboxes = $(".item-checkbox");
		var importButton = $(".inserter");

		// Function to update the state of the "all" checkbox and the button
		function updateAllCheckboxAndButton() {
			var allChecked = itemCheckboxes.length === itemCheckboxes.filter(":checked").length;
			allCheckbox.prop("checked", allChecked);

			var anyChecked = itemCheckboxes.filter(":checked").length > 0;
			importButton.prop("disabled", !anyChecked);
		}

		// When the "all" checkbox is clicked
		allCheckbox.on("change", function () {
			var isChecked = $(this).is(":checked");
			$(".check-content").prop("checked", isChecked);
			importButton.prop("disabled", !isChecked);
		});

		// When any item checkbox is clicked
		itemCheckboxes.on("change", function () {
			updateAllCheckboxAndButton();
		});

		// Initial state
		updateAllCheckboxAndButton();
	});
})(jQuery)