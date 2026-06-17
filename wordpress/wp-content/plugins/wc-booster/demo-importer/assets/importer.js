(function( $ ){

	var actions = [
		{
			"action": "fetch_demo",
			"message": "Fetching demo...",
			"checkbox": false,
		},
		{
			"action": "install_theme",
			"message": "Installing theme...",
			"checkbox": false,
		},
		{
			"action": "import_posts",
			"message": "Importing posts...",
			"checkbox": "posts",
		},
		{
			"action": "import_product_categories",
			"message": "Importing product categories...",
			"checkbox": "products",
		},
		{
			"action": "import_product_attributes",
			"message": "Importing product attributes...",
			"checkbox": "products",
		},
		{
			"action": "import_products",
			"message": "Importing products...",
			"checkbox": "products",
		},
		{
			"action": "import_swatches",
			"message": "Importing swatches...",
			"checkbox": "products",
		},
		{
			"action": "import_pages",
			"message": "Importing pages...",
			"checkbox": "pages",
		},
		{
			"action": "clean_up",
			"message": "Cleaning up...",
			"checkbox": false,
		}
	];

	var i, page, total_page;
	var request = function( data ){

		var data = {
			'action': 'wc_booster_' + actions[ i ].action,
			'security': data.security,
			'id': data.id,
			'page': page
		};

		var permission = [];
		$('.item-checkbox' ).each(function(){
			var isChecked = $(this).is(":checked");
			if( isChecked ){
				var v = $(this).val();
				permission.push( v );
			}
		});
		
		var logger = function( type, message, status ){
			
			if( message.length == 0 ){
				return;
			}

			$e = $( '.console' );

			if( type == 'result' ){
				$e.append( '<p class="result ' + status + '">' + message + '</p>' );
			}

			if( type == 'info' ){
				$e.append( '<p class="info">' + message + '</p>' );
			}

			$e.scrollTop( $e[0].scrollHeight );
		}

		var onResponse = function( response, status ){

			if( data[ 'action' ] == 'wc_booster_import_products' ){
				total_page = response.data.total_page;

			}
			
			logger( 'result', response.data.message, response.data.status );

		};

		if( actions[ i ].checkbox == false || permission.includes( actions[ i ].checkbox ) ){

			if( data[ 'action' ] != 'wc_booster_import_products' || page == 0 ){
				logger( 'info', actions[ i ].message, '' );
			}

			$.post( WC_BOOSTER_DEMO_IMPORTER.ajax_url, data, onResponse ).always(function(){

				// make little delay so that fail callback will run first
				setTimeout(function(){

					if( data['action'] == 'wc_booster_import_products' && page < total_page ){
						page++;
						data[ 'page' ] = page;
					}else{
						i++;

						if( i == actions.length ){
							$( 'body' ).addClass( 'wc-booster-import-completed' );
						}
					}

					if( actions[ i ] ){
						request( data );
					}else{
						$( '.inserter' ).removeClass( 'loading' );
					}
				});
				
			}).fail(function( r ){
				logger( 'result', r.statusText, false );
			});
		}else{
			i++;
			request( data );
		}
	}
	
	$(document).on('click', '.inserter', function (e) {
		// RESET THESE VARIABLES BEFORE STARTING
		i = 0, page = 0, total_page = 0;
		$( this ).addClass( 'loading' );
		$( 'body' ).addClass( 'wc-booster-importing' );
		$( this ).prop( 'disabled', true );
		request({
			'security': WC_BOOSTER_DEMO_IMPORTER.nonce,
			'id': $(this).data('id')
		});

	});

})( jQuery )