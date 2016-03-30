<?php get_header(); ?>
<?php if ( wptouch_have_posts() ) { ?>

	<?php wptouch_the_post(); ?>
	<div class="<?php wptouch_post_classes(); ?> page-title-area rounded-corners-8px">

		<h2 role="heading">Your Local Dealer</h2>

	</div>	
	<form action="#" method="get" id="dltopform"<?php if (isset($_GET['dlzip'])) echo ' class="zipposted"'; ?>>
	<div id="dlbtn"></div>
	<input type="text" data-role="none" id="dlzip" name="dlzip" value="<?php echo (isset($_GET['dlzip']) ? $_GET['dlzip'] : 'Zip/Postal Code'); ?>" onblur="if(this.value=='') this.value='Zip/Postal Code';" onfocus="if(this.value=='Zip/Postal Code') this.value='';" />
	<input type="submit" data-role="none" value="SEARCH" class="dlsub" />
	</form>
	<div id="dlandimg">
		<?php
				global $post_ID;
				$banner_image = get_field('banner_image', $post_ID );
				if($banner_image):
					echo $banner_image;
				?>
					<style type="text/css">
						#dlandimg {
						    height: auto !important;
						    width: 100% !important;
						    background: none !important;
						}
						
						#dlandimg img
						{
							height: auto !important;
						    width: 100% !important;
						}
					</style>
				<?php
				endif;
		?>
	</div>
    <div id="dlrap"><div id="dlresult"></div></div>
<?php } ?>
<?php get_footer(); ?>