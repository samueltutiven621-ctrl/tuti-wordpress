(function ($){
	$(document).ready(function(){
		$( '.wc-block-product-gallery-large-image-next-previous--button' ).click(function(){
            setTimeout(function(){
                var src = $( '.wc-block-woocommerce-product-gallery-large-image__image--active-image-slide' ).attr( 'src' );

                $( '.wc-block-product-gallery-thumbnails__thumbnail' ).removeClass( 'selected' );
                $( '.wc-block-product-gallery-thumbnails__thumbnail' ).each( function(){
                    var ts = $( this ).find( 'img' ).attr( 'src' );
                    if( ts == src ){
                        $( this ).addClass( 'selected' );
                    }
                });

            }, 500);
        });
	});
})(jQuery);