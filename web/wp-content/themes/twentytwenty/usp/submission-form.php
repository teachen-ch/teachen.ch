<?php // User Submitted Posts - Submission Form

if (!defined('ABSPATH')) die();

extract(usp_get_form_vars());
	
?>
<script>var usp_disable_chosen = true;</script>
<div id="user-submitted-posts">
	
	<form id="usp_form" method="post" enctype="multipart/form-data" action="">
		<div id="usp-error-message" class="usp-callout-failure usp-hidden"><?php esc_html_e('Bitte alle erforderlichen Felder ausfüllen.', 'usp'); ?></div>
		<?php echo usp_error_message();
		
		if (isset($_GET['success']) && $_GET['success'] == '1') :
			echo '<div id="usp-success-message">'. $usp_options['success-message'] .'</div>';
		else : ?>
		
		<fieldset class="usp-name">
			<label for="user-submitted-name"><?php esc_html_e('Dein Name', 'usp'); ?></label>
			<input id="user-submitted-name" name="user-submitted-name" type="text" value="" placeholder="<?php esc_attr_e('Vorname + Name', 'usp'); ?>"<?php if (usp_check_required('usp_name')) echo $usp_required; ?> class="usp-input">
		</fieldset>
		
		<fieldset class="usp-email">
			<label for="user-submitted-email"><?php esc_html_e('Deine Email', 'usp'); ?></label>
			<input id="user-submitted-email" name="user-submitted-email" type="email" data-parsley-type="email" value="" placeholder="<?php esc_attr_e('Email', 'usp'); ?>"<?php if (usp_check_required('usp_email')) echo $usp_required; ?> class="usp-input">
		</fieldset>
		
		<fieldset class="usp-title">
			<label for="user-submitted-title"><?php esc_html_e('Deine Idee (kurzer Titel)', 'usp'); ?></label>
			<input id="user-submitted-title" maxlength="30" name="user-submitted-title" type="text" value="" placeholder="<?php esc_attr_e('Titel der Idee…', 'usp'); ?>"<?php if (usp_check_required('usp_title')) echo $usp_required; ?> class="usp-input">
		</fieldset>
		
		<!--
		<fieldset class="usp-tags">
			<p><span class="wpcf7-form-control-wrap kategorie"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first"><input type="checkbox" name="kategorie[]" value="Natur"><span class="wpcf7-list-item-label">Natur</span></span><span class="wpcf7-list-item"><input type="checkbox" name="kategorie[]" value="Bewegung"><span class="wpcf7-list-item-label">Bewegung</span></span><span class="wpcf7-list-item"><input type="checkbox" name="kategorie[]" value="Technik"><span class="wpcf7-list-item-label">Technik</span></span><span class="wpcf7-list-item"><input type="checkbox" name="kategorie[]" value="Kreativ"><span class="wpcf7-list-item-label">Kreativ</span></span><span class="wpcf7-list-item last"><input type="checkbox" name="kategorie[]" value="Basteln"><span class="wpcf7-list-item-label">Basteln</span></span></span></span></p>
			<p><span class="wpcf7-form-control-wrap tags"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first"><input type="checkbox" name="tags[]" value="online"><span class="wpcf7-list-item-label">online</span></span><span class="wpcf7-list-item"><input type="checkbox" name="tags[]" value="draussen"><span class="wpcf7-list-item-label">draussen</span></span><span class="wpcf7-list-item"><input type="checkbox" name="tags[]" value="teamwork"><span class="wpcf7-list-item-label">teamwork</span></span><span class="wpcf7-list-item last"><input type="checkbox" name="tags[]" value="selbständig"><span class="wpcf7-list-item-label">selbständig</span></span></span></span></p>
			<input type="hidden" id="user-submitted-tags" name="user-submitted-tags" type="text" value="" placeholder="<?php esc_attr_e('Post Tags', 'usp'); ?>"<?php if (usp_check_required('usp_tags')) echo $usp_required; ?> class="usp-input">
		</fieldset>-->
		
		<!--<fieldset class="usp-custom">
			<p><label for="user-submitted-custom"><?php echo esc_html("Für welches Alter ist Deine Idee?"); ?></label></p>
			<p><span class="wpcf7-form-control-wrap alter"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first"><input type="checkbox" name="alter[]" value="Kindergarten"><span class="wpcf7-list-item-label">Kindergarten</span></span><span class="wpcf7-list-item"><input type="checkbox" name="alter[]" value="1./2. Kl"><span class="wpcf7-list-item-label">1./2. Kl</span></span><span class="wpcf7-list-item"><input type="checkbox" name="alter[]" value="3./4. Kl"><span class="wpcf7-list-item-label">3./4. Kl</span></span><span class="wpcf7-list-item"><input type="checkbox" name="alter[]" value="5./6. Kl"><span class="wpcf7-list-item-label">5./6. Kl</span></span><span class="wpcf7-list-item last"><input type="checkbox" name="alter[]" value="7.-9. Klasse"><span class="wpcf7-list-item-label">7.-9. Klasse</span></span></span></span></p>
			<input id="user-submitted-custom" name="<?php echo esc_attr($usp_custom_name); ?>" type="text" value="" placeholder="6-16 Jahre" class="usp-input">
		</fieldset>-->
		
		<fieldset class="usp-content">
			<div class="usp_text-editor">
			<?php $usp_rte_settings = array(
				    'wpautop'          => true,  // enable rich text editor
				    'media_buttons'    => false,  // enable add media button
				    'textarea_name'    => 'user-submitted-content', // name
				    'textarea_rows'    => '16',  // number of textarea rows
				    'tabindex'         => '',    // tabindex
				    'editor_css'       => '',    // extra CSS
				    'editor_class'     => 'usp-rich-textarea', // class
				    'teeny'            => false, // output minimal editor config
				    'dfw'              => false, // replace fullscreen with DFW
				    'tinymce'          => true,  // enable TinyMCE
				    'quicktags'        => true,  // enable quicktags
				    'drag_drop_upload' => false,  // enable drag-drop
				);
				$usp_rte_settings = apply_filters('usp_editor_settings', $usp_rte_settings);
				$usp_editor_content = apply_filters('usp_editor_content', '<p>Meine Idee ist…</p>
<p><strong>Zeit:</strong> 1-2 Stunden</p>
<p><strong>Alter</strong>: 6-16 Jahre</p>
<p><strong>Benötigt</strong>: Rezept, Zutaten, etwas Hilfe</p>
<h2>Anleitung</h2>
<ol>
	 <li>Erster Schritt…</li>
</ol>
				');
				wp_editor($usp_editor_content, 'uspcontent', $usp_rte_settings); ?>
			</div>
		</fieldset>

		<fieldset class="usp-url">
			<label for="user-submitted-url"><?php esc_html_e('Anleitung auf Website oder Youtube Video?', 'usp'); ?></label>
			<input id="user-submitted-url" name="user-submitted-url" type="url" data-parsley-type="url" value="" placeholder="<?php esc_attr_e('http://www.', 'usp'); ?>"<?php if (usp_check_required('usp_url')) echo $usp_required; ?> class="usp-input">
		</fieldset>
		
		<fieldset class="usp-images">
			<div id="usp-upload-message">Hast Du ein passended <a href="#lizenzfrei">lizenzfreies</a> Bild?</div>
			<div id="user-submitted-image">
			<?php // upload files
				
			$usp_minImages = intval($usp_options['min-images']);
			$usp_maxImages = intval($usp_options['max-images']);
			$usp_addAnother = $usp_options['usp_add_another'];
			
			if (empty($usp_addAnother)) $usp_addAnother = '<a href="#" id="usp_add-another" class="usp-no-js">'. esc_html__('Add another image', 'usp') .'</a>';
			
			if ($usp_minImages > 0) : ?>
				<?php for ($i = 0; $i < $usp_minImages; $i++) : ?>
						
				<input name="user-submitted-image[]" type="file" size="25"<?php echo $usp_required; ?> class="usp-input usp-clone">
				<?php endfor; ?>
				<?php if ($usp_minImages < $usp_maxImages) : echo $usp_addAnother; endif; ?>
			<?php else : ?>
				
				<input name="user-submitted-image[]" type="file" size="25" class="usp-input usp-clone" data-parsley-excluded="true">
				<?php echo $usp_addAnother; ?>
			<?php endif; ?>
				
			</div>
			<input type="hidden" class="usp-hidden" id="usp-min-images" name="usp-min-images" value="<?php echo $usp_options['min-images']; ?>">
			<input type="hidden" class="usp-hidden" id="usp-max-images" name="usp-max-images" value="<?php echo $usp_options['max-images']; ?>">
		</fieldset>

		<fieldset id="usp_verify" style="display:none;">
			<label for="user-submitted-verify"><?php esc_html_e('Human verification: leave this field empty.', 'usp'); ?></label>
			<input id="user-submitted-verify" name="user-submitted-verify" type="text" value="" data-parsley-excluded="true">
		</fieldset>

		<small  id="lizenzfrei">
		<?php echo usp_display_custom_checkbox(); ?></small>
		
		<div id="usp-submit">
			<?php if (!empty($usp_options['redirect-url'])) { ?>
			
			<input type="hidden" class="usp-hidden" name="redirect-override" value="<?php echo $usp_options['redirect-url']; ?>">
			<?php } ?>
			<?php if (!$usp_display_name) { ?>
			
			<input type="hidden" class="usp-hidden" name="user-submitted-name" value="<?php echo $usp_user_name; ?>">
			<?php } ?>
			<?php if (!$usp_display_url) { ?>
			
			<input type="hidden" class="usp-hidden" name="user-submitted-url" value="<?php echo $usp_user_url; ?>">
			<?php } ?>
			<?php if ($usp_options['usp_use_cat'] == true) { ?>
			
			<input type="hidden" class="usp-hidden" name="user-submitted-category" value="<?php echo $usp_options['usp_use_cat_id']; ?>">
			<?php } ?>
			
			<input type="submit" class="usp-submit" id="user-submitted-post" name="user-submitted-post" value="<?php esc_attr_e('Idee abschicken', 'usp'); ?>">
			<?php wp_nonce_field('usp-nonce', 'usp-nonce', false); ?>
			
		</div>
		<?php endif; ?>

	</form>
	<br/>
	<h5>Lizenzfreies Bildmaterial</h5>
	<small>Bitte achte darauf, dass Du nur Bilder einschickst, welche Du entweder selber gemacht hast oder welche explizit als lizenzfrei freigegeben sind. Solche Bilder findest Du auf Google (<a href="https://support.google.com/websearch/answer/29508?hl=de" target="_blank">siehe Anleitung</a>) oder beispielsweise auf <a href="http://unplash.com">unsplash.com</a>.</small>
</div>
<script>(function(){var e = document.getElementById('usp_verify'); if(e) e.parentNode.removeChild(e);})();</script>
