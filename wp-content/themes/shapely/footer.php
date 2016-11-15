<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?>

            </div><!-- row -->
		</div><!-- #main -->
	</section><!-- section -->

    <?php shapely_footer_callout(); ?>

	<footer id="colophon" class="site-footer footer bg-dark" role="contentinfo">
      <div class="container footer-inner">
        <div class="row">
          <?php get_sidebar( 'footer' ); ?>
        </div>

        <div class="row">
          <div class="site-info col-sm-6">
            <div class="copyright-text">Hermosa Cigars 2016</div>
            <div class="footer-credits"><a href="http://madebydiesel.com"">Made By Diesel</a></div>
          </div><!-- .site-info -->
          <div class="col-sm-6 text-right">
            <?php if( !get_theme_mod('footer_social') ) shapely_social_icons(); ?>
          </div>
        </div>
      </div>

      <a class="btn btn-sm fade-half back-to-top inner-link" href="#top"><i class="fa fa-angle-up"></i></a>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
