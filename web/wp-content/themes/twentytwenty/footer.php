<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>

		<footer id="site-footer" role="contentinfo" class="header-footer-group">

			<h3>Einige Ideen</h3>
			<div class="footer-random">
				<?php echo wpb_rand_posts() ?>
			</div>
			<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true">

			<h3>Kategorien</h3>
			<ul class="footer-cats">
				<?php wp_list_categories(["feed" => "", 'style' => 'list', 'title_li' => '', 'use_desc_for_title' => false]) ?>
			</ul>
			<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true">

			<h3>Stichwörter</h3>
			<div class="tagcloud">
				<?php wp_tag_cloud() ?>
			</div>
			<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true">

			
			<?php get_search_form() ?> 
			<?php teachen_social_meta_icons();?>
			<?php wp_nav_menu(["menu" => 'TopNav', 'after' => '', 'container' => false]) ?>			
			<p class="powered-by-swisscom" style="text-align:center">supported with ❤️ by swisscom</p>
	
		</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
	<script>
		if (document.location.hostname === 'teachen.ch') {
			var _paq = window._paq || [];
			/* local analytics only. F$ck Google! */
			_paq.push(['trackPageView']);
			_paq.push(['enableLinkTracking']);
			(function() {
				var u="//stats.teachen.ch/";
				_paq.push(['setTrackerUrl', u+'matomo.php']);
				_paq.push(['setSiteId', '1']);
				var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
				g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
			})();
		}
	</script>
</html>

