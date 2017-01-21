<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dojo
 */

?>

            </div><!-- #content -->
        </div>
    </div>

    <div class="footer-area full">
        <div class="main-page">
            <footer id="colophon" class="site-footer inner l-center" role="contentinfo">

                <h1 class="footer-title">
                    <?php echo bloginfo('name'); ?>
                </h1>

                <?php $primary_color = get_theme_mod('primary_color', '#DAB075'); ?>

                <i class="fa fa-map-marker fa-2x" style="color: <?php echo $primary_color ?>;" aria-hidden="true"></i>

                <?php
                /* The footer widget area is triggered if any of the areas
                 * have widgets. So let's check that first.
                 *
                 * If none of the sidebars have widgets, then let's bail early.
                 */
                if (   ! is_active_sidebar( 'first-footer-widget-area'  )
                )
                    return;

                if (   is_active_sidebar( 'first-footer-widget-area'  )
                ) : ?>

                <aside class="fatfooter l-flex align-hori-center" role="complementary">
                    <div class="widget-area">
                        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                    </div><!-- .first .widget-area -->
                </aside><!-- #fatfooter -->

                <?php
                //end of all sidebar checks.
                endif;?>

                <a class="l-space" href="<?php echo get_option('facebook_url') ?>">
                    <i class="fa fa-facebook fa-1x" style="color: <?php echo $primary_color ?>;" aria-hidden="true"></i>
                </a>
                <a class="l-space" href="<?php echo get_option('twitter_url') ?>">
                    <i class="fa fa-twitter fa-1x" style="color: <?php echo $primary_color ?>;" aria-hidden="true"></i>
                </a>
                <a class="l-space" href="<?php echo get_option('instagram_url') ?>">
                    <i class="fa fa-instagram fa-1x" style="color: <?php echo $primary_color ?>;" aria-hidden="true"></i>
                </a>
                <a class="l-space" href="<?php echo get_option('youtube_url') ?>">
                    <i class="fa fa-youtube-play fa-1x" style="color: <?php echo $primary_color ?>;" aria-hidden="true"></i>
                </a>
                <a class="l-space" href="<?php echo get_option('linkedin_url') ?>">
                    <i class="fa fa-linkedin fa-1x" style="color: <?php echo $primary_color ?>;" aria-hidden="true"></i>
                </a>
                <a class="l-space" href="<?php echo get_option('pinterest_url') ?>">
                    <i class="fa fa-pinterest-p fa-1x" style="color: <?php echo $primary_color ?>;" aria-hidden="true"></i>
                </a>


                <div class="site-info">
                    <?php printf( esc_html__( 'COPYRIGHT © %1$s %2$s', 'dojo' ), 'DOJO', '2017' ); ?>
                </div><!-- .site-info -->
            </footer><!-- #colophon -->
        </div>
    </div>

<?php wp_footer(); ?>

</body>
</html>
