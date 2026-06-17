<?php
$demo = WC_Booster_Demo_Importer\Demo::get_instance();

$svg = WC_Booster_Demo_Importer\Svg::get_instance();
$fav = WC_Booster_Demo_Importer\Favourite::get_instance();
$demos = $demo->get();
$favourites = $fav->get();
$is_pro = class_exists( "WC_Booster_Pro_Blocks_Init" );
?>

<div class="wc-booster-demo-importer<?php echo !$is_pro ? ' free-user': ''; ?>">
    <div class="wc-booster-demo-importer-wrapper">
        <div class="overlay"></div>
        <div class="wc-booster-demo-importer-topbar">
            <h2 class="topbar-title">Site Demos</h2>
            <ul class="demo-importer-type">
                <li class="active type"><a href="#" data-type="all">All</a></li>
                <li class="type"><a href="#" data-type="pro">Pro</a></li>
                <li class="type"><a href="#" data-type="free">Free</a></li>
            </ul>
            <div class="topbar-button">
                <span class="favourite-button type">
                    <a href="#" data-type="fav">
                        <?php $svg->favourite(); ?>
                    </a>
                    <span class="wishlist-count">0</span>
                </span>

                <span class="refresh-button">
                    <a href="?page=wc_booster_demo_importer&&refresh=true">
                        <?php $svg->refresh(); ?>
                    </a>
                </span>
            </div>
        </div>
        <div class="wc-booster-demo-importer-content show-all">
            <div class="wc-booster-demo-importer-list">
                <?php if (is_array($demos)): ?>
                    <?php foreach ($demos as $demo): ?>
                        <div
                            class="wc-booster-demo-importer-item <?php echo $demo['is_pro'] != 1 ? 'free-theme' : 'pro-theme'; ?> <?php echo in_array($demo['id'], $favourites) ? 'fav' : ''; ?>"
                            data-screenshots="<?php echo esc_attr(json_encode($demo['screenshots'])); ?>"
                            data-id="<?php echo esc_attr($demo['id']); ?>"
                            data-description="<?php echo esc_attr($demo['description']); ?>"
                            data-site-url="<?php echo esc_url( $demo[ 'site_url' ] ); ?>"
                            data-name="<?php echo esc_attr($demo['name']); ?>">
                            <div class="demo-importer-featured-image">
                                <img src="<?php echo esc_url($demo['screenshots']['home']); ?>" alt="demo">
                                <div class="overlay"></div>
                                <span class="details-icon">
                                    <?php $svg->details(); ?>
                                </span>
                                <span class="card-wrapper"></span>
                            </div>
                            <div class="demo-importer-content">
                                <h2 class="entry-title"><?php echo esc_html($demo['name']); ?></h2>
                                <span
                                    class="favourite-button<?php echo in_array($demo['id'], $favourites) ? ' fav' : ''; ?>"
                                    data-id="<?php echo esc_attr($demo['id']); ?>">
                                    <?php $svg->favourite(); ?>
                                </span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                <div class="demo-item-popup-content">
                    <span class="close">
                        <?php $svg->close(); ?>
                    </span>
                    <span class="card-wrapper"></span>
                    <div class="demo-item-popup-content-wrapper">
                        <ul class="popup-content-sidebar">
                            <?php
                            $order = [
                                'home' => 'Front Page',
                                'shop' => 'Shop Page',
                                'product' => 'Product Page',
                                'product_variation' => 'Product Variation Page',
                                'checkout' => 'Checkout Page',
                                'myaccount' => 'Account Page',
                                'thankyou' => 'Thank You Page'
                            ];
                            $i = 0;
                            foreach ($order as $o => $label) {
                            ?>
                                <li class="popup-content-sidebar-item <?php echo esc_attr($o); ?>" data-index="<?php echo esc_attr($i); ?>">
                                    <div class="featured-image">
                                        <img src="#" alt="demo">
                                        <div class="overlay"></div>
                                    </div>
                                    <div class="page-name"><?php echo esc_html($label); ?></div>
                                </li>
                            <?php
                                $i++;
                            }
                            ?>
                        </ul>
                        <div class="popup-content-slider">
                            <div class="popup-content-slider-item active">
                                <div class="popup-content-slider-item-wrapper">
                                    <div class="entry-content">
                                        <h2 class="theme-name"></h2>
                                        <div class="entry-description"></div>
                                        <div class="console"></div>
                                        <div class="warning">
                                            <p>
                                                <strong>Warning:</strong> Importing will result in the following changes to your site:
                                            </p>
                                            <ul>
                                                <li>- The homepage will be updated with a new version.</li>
                                                <li>- The theme will be changed to the plugin's recommended one.</li>
                                                <li>- Sample posts, pages, and products will be imported based on your selection.</li>
                                            </ul>
                                            <p class="note"><strong>Note: </strong>Ensure you back up your site before proceeding with the demo import.</p>
                                        </div>
                                        <div class="checkbox-container">
                                            <label>
                                                <input type="checkbox" class="check-content" id="all-checkbox" value="all"> All
                                            </label>
                                            <label>
                                                <input type="checkbox" class="item-checkbox check-content" value="posts"> Posts
                                            </label>
                                            <label>
                                                <input type="checkbox" class="item-checkbox check-content" value="pages"> Pages
                                            </label>
                                            <label>
                                                <input type="checkbox" class="item-checkbox check-content" value="products"> Products
                                            </label>
                                        </div>
                                        <div class="slider-button">
                                            <div class="imported-text">Imported Successfully</div>
                                            <button href="#" class="inserter" data-id="" disabled>Import
                                                <span>
                                                    <?php $svg->import(); ?>
                                                </span>
                                            </button>
                                            <?php $site_url = get_site_url(); ?>
                                            <a href="<?php echo esc_url($site_url); ?>" target="_blank" class="visit-site">Visit Site
                                                <span>
                                                    <?php $svg->visit_site(); ?>
                                                </span>
                                            </a>
                                            <a href="https://www.eaglevisionit.com/downloads/wc-booster/" target="_blank" class="buy-now">Buy Now
                                                <span>
                                                    <?php $svg->visit_site(); ?>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="featured-image">
                                        <a href="#" class="demo-link" target="_blank">
                                            <img src="#" alt="demo">
                                            <div class="overlay"></div>
                                            <span class="view-demo">
                                                <?php $svg->view_demo(); ?>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>