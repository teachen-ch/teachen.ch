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
				<div class="tagcloud">
					<a href="/tag/kindergarten/" class="tag-cloud-link tag-link-9 tag-link-position-7" style="font-size: 12.468085106383pt;" aria-label="Kindergarten (7 Einträge)">Kindergarten</a>
					<a href="/tag/1-klasse-2-klasse/" class="tag-cloud-link tag-link-10 tag-link-position-1" style="font-size: 18.127659574468pt;" aria-label="1./2. Klasse (18 Einträge)">1./2. Klasse</a>
					<a href="/tag/3-klasse-4-klasse/" class="tag-cloud-link tag-link-11 tag-link-position-2" style="font-size: 21.553191489362pt;" aria-label="3./4. Klasse (31 Einträge)">3./4. Klasse</a>
					<a href="/tag/5-klasse-5-klasse/" class="tag-cloud-link tag-link-12 tag-link-position-3" style="font-size: 22pt;" aria-label="5./6. Klasse (34 Einträge)">5./6. Klasse</a>
					<a href="/tag/sekundarstufe-7-8-9-klasse/" class="tag-cloud-link tag-link-13 tag-link-position-4" style="font-size: 19.914893617021pt;" aria-label="7./8./9. Klasse (24 Einträge)">7./8./9. Klasse</a><br/>
					<a href="/tag/draussen/" class="tag-cloud-link tag-link-18 tag-link-position-5" style="font-size: 8pt;" aria-label="draussen (3 Einträge)">draussen</a>
					<a href="/tag/online-learning/" class="tag-cloud-link tag-link-16 tag-link-position-6" style="font-size: 11.723404255319pt;" aria-label="e-learning (6 Einträge)">e-learning</a>
					<a href="/tag/selbstaendig-lernen/" class="tag-cloud-link tag-link-15 tag-link-position-8" style="font-size: 20.659574468085pt;" aria-label="selbständig (27 Einträge)">selbständig</a>
					<a href="/tag/teamwork/" class="tag-cloud-link tag-link-22 tag-link-position-9" style="font-size: 15.148936170213pt;" aria-label="teamwork (11 Einträge)">teamwork</a>			</div>
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

