<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php wptouch_bloginfo('html_type'); ?>; charset=<?php wptouch_bloginfo('charset'); ?>" />
	<title><?php wptouch_title(); ?></title>
	<?php //if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wptouch_head(); ?>
</head>
<?php flush(); ?>
<body class="<?php wptouch_body_classes(); ?>">
<!-- New noscript check, we need js on always folks to do cool stuff -->
<noscript>
	<div id="noscript">
		<h2><?php _e( "Notice", "wptouch-pro" ); ?></h2>
		<p><?php _e( "JavaScript is currently off.", "wptouch-pro" ); ?></p>
		<p><?php _e( "Turn it on in browser settings to view this mobile website.", "wptouch" ); ?></p>
	</div>
</noscript>
	
	<div id="outer-ajax">
		<div id="inner-ajax">
			
			<!-- This brings in menu.php // remove it and the whole menu won't show at all -->
			
			<?php do_action( 'wptouch_body_top' ); ?>
		
			<div id="content">
				<div id="wptouch-ad">
					<?php do_action( 'wptouch_advertising_top' ); ?>
				</div>