<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php

	get_template_part( 'template-parts/entry-header' );

	if ( ! is_search() ) {
		get_template_part( 'template-parts/featured-image' );
	}

	?>

	<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content">

			<?php
			if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
				the_excerpt();
			} else {
				the_content( __( 'Continue reading', 'twentytwenty' ) );
			}
			?>

		</div><!-- .entry-content -->

	</div><!-- .post-inner -->

	<div class="section-inner">
		<?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		edit_post_link();

		// Single bottom post meta.
		twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );

		if ( is_single() ) {

			get_template_part( 'template-parts/entry-author-bio' );

		}

		if (is_single() && get_post_type() == "post") {
					$social = teachen_social_meta_data();
					$url = urlencode($social['url']);
					$title = urlencode($social['title']);
				?>

				<div class="heateor_sss_sharing_container heateor_sss_horizontal_sharing" style="margin: 3em 0 -2em 0em;" heateor-sss-data-href="<?php echo $social['url'] ?><div class="widget widget_heateor_sss_sharing">
				<ul class="heateor_sss_sharing_ul">
					<li class="heateorSssSharingRound"><i style="width:40px;height:40px;border-radius:999px;" alt="Facebook" title="Facebook" class="heateorSssSharing heateorSssFacebookBackground" onclick="socialPop(&quot;https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>&quot;)"><ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssFacebookSvg"></ss></i></li>
					<li class="heateorSssSharingRound"><i style="width:40px;height:40px;border-radius:999px;" alt="Twitter" title="Twitter" class="heateorSssSharing heateorSssTwitterBackground" onclick="socialPop(&quot;http://twitter.com/intent/tweet?via=teachen&amp;text=<?php echo $title; ?>&amp;url=<?php echo $url; ?>&quot;)"><ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssTwitterSvg"></ss></i></li>
					<li class="heateorSssSharingRound"><i style="width:40px;height:40px;border-radius:999px;" alt="Linkedin" title="Linkedin" class="heateorSssSharing heateorSssLinkedinBackground" onclick="socialPop(&quot;http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $url; ?>&amp;title=<?php echo $title; ?>&quot;)"><ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssLinkedinSvg"></ss></i></li>
					<!-- <li class="heateorSssSharingRound"><i style="width:40px;height:40px;border-radius:999px;" alt="Whatsapp" title="Whatsapp" class="heateorSssSharing heateorSssWhatsappBackground"><a href="https://web.whatsapp.com/send?text=<?php echo $title; ?> <?php echo $url ?>" rel="nofollow noopener" target="_blank"><ss style="display:block" class="heateorSssSharingSvg heateorSssWhatsappSvg"></ss></a></i></li>
					<li class="heateorSssSharingRound"><i style="width:40px;height:40px;border-radius:999px;" alt="Pinterest" title="Pinterest" class="heateorSssSharing heateorSssPinterestBackground" onclick="javascript:void( (function() {var e=document.createElement('script' );e.setAttribute('type','text/javascript' );e.setAttribute('charset','UTF-8' );e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)})());"><ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssPinterestSvg"></ss></i></li>-->
				</ul>
				<div class="heateorSssClear"></div></div></div></div>
		<?php } ?>

	</div><!-- .section-inner -->

	<?php

	if ( is_single() ) {

		get_template_part( 'template-parts/navigation' );

	}

	/**
	 *  Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 * */
	if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
		?>

		<div class="comments-wrapper section-inner">

			<?php comments_template(); ?>

		</div><!-- .comments-wrapper -->

		<?php
	}
	?>

</article><!-- .post -->
