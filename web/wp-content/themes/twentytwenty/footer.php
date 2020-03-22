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

		<?php
			$social = teachen_social_meta_data();
			$url = urlencode($social['url']);
			$title = urlencode($social['title']);
		?>

			<footer id="site-footer" role="contentinfo" class="header-footer-group">
			<div class="heateor_sss_sharing_container heateor_sss_horizontal_sharing" heateor-sss-data-href="<?php echo $social['url'] ?><div class="widget widget_heateor_sss_sharing">
				<ul class="heateor_sss_sharing_ul">
					<li class="heateorSssSharingRound"><i style="width:40px;height:40px;border-radius:999px;" alt="Facebook" title="Facebook" class="heateorSssSharing heateorSssFacebookBackground" onclick="heateorSssPopup(&quot;https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>&quot;)"><ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssFacebookSvg"></ss></i></li>
					<li class="heateorSssSharingRound"><i style="width:40px;height:40px;border-radius:999px;" alt="Twitter" title="Twitter" class="heateorSssSharing heateorSssTwitterBackground" onclick="heateorSssPopup(&quot;http://twitter.com/intent/tweet?via=teachen&amp;text=Natur&amp;url=<?php echo $url; ?>&quot;)"><ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssTwitterSvg"></ss></i></li>
					<li class="heateorSssSharingRound"><i style="width:40px;height:40px;border-radius:999px;" alt="Linkedin" title="Linkedin" class="heateorSssSharing heateorSssLinkedinBackground" onclick="heateorSssPopup(&quot;http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $url; ?>&amp;title=<?php echo $title; ?>&quot;)"><ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssLinkedinSvg"></ss></i></li>
					<li class="heateorSssSharingRound"><i style="width:40px;height:40px;border-radius:999px;" alt="Whatsapp" title="Whatsapp" class="heateorSssSharing heateorSssWhatsappBackground"><a href="https://web.whatsapp.com/send?text=Natur <?php echo $url ?>" rel="nofollow noopener" target="_blank"><ss style="display:block" class="heateorSssSharingSvg heateorSssWhatsappSvg"></ss></a></i></li>
					<li class="heateorSssSharingRound"><i style="width:40px;height:40px;border-radius:999px;" alt="Pinterest" title="Pinterest" class="heateorSssSharing heateorSssPinterestBackground" onclick="javascript:void( (function() {var e=document.createElement('script' );e.setAttribute('type','text/javascript' );e.setAttribute('charset','UTF-8' );e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)})());"><ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssPinterestSvg"></ss></i></li>
				</ul>
				<div class="heateorSssClear"></div></div></div></div>


						<p class="powered-by-swisscom" style="text-align:center">supported with ❤️ by swisscom


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

