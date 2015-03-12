				</div><!-- #content --><?php
					/* add Dealer Loc + Hot Tubs + Request + Donwload links here... */
					/* CURRENT PROMO?? */
?>
<?php /* <div id="promo"><img src="<?php bloginfo('template_url'); ?>/images/mobile-promo.jpg" alt="Current Promotion" /></div> */ ?>
<?php
					if ( !is_front_page()) {
					?>
<div class="mdloc">
    <div class="im"></div>
    <form action="<?php echo trailingslashit(get_bloginfo('url')) .'mobile-dealer-locator/'; ?>" method="get" id="dlfform">
        <div class="tx">Locate a Dealer</div>
        <input type="text" data-role="none" id="dlzip" name="dlzip" value="Zip/Postal Code" onblur="if(this.value=='') this.value='Zip/Postal Code';" onfocus="if(this.value=='Zip/Postal Code') this.value='';" />
        <input type="submit" value="VIEW" class="dlsub" data-role="none" />
	</form>
</div>
<?php } ?>
<a href="<?php bloginfo('url'); ?>/hot-tubs-collection/" data-role="none" class="mbtn hottubs"><span class="im"></span><span class="tx">View Hot Tubs</span><span class="ar"></span></a>
					<?php
if ( !is_page('get-a-quote')) {
?>
<a href="<?php bloginfo('url'); ?>/get-a-quote/" data-role="none" class="mbtn quo"><span class="im"></span><span class="tx">Request a Quote</span><span class="ar"></span></a>
<?php }
if ( !is_page('request-brochure')) { ?>
<a href="<?php bloginfo('url'); ?>/request-brochure/" data-role="none" class="mbtn bro"><span class="im"></span><span class="tx">Download Brochure</span><span class="ar"></span></a>
<?php } ?>

				<?php do_action( 'wptouch_body_bottom' ); ?>
						
				<div class="<?php wptouch_footer_classes(); ?>">
                <div>Copyright &copy; <?php echo date('Y'); ?> Jacuzzi, Inc., All rights reserved</div>
				<?php if ( wptouch_show_switch_link() ) { ?>
                <div><a href="<?php wptouch_the_mobile_switch_link(); ?>">View Full Website</a></div>
                <?php } ?>
					<?php wptouch_footer(); ?>
				</div>
	
				<?php do_action( 'wptouch_advertising_bottom' ); ?>
			</div> <!-- #inner-ajax -->
		</div> <!-- #outer-ajax -->
		<?php // include_once('../Library/Caches/TemporaryItems/web-app-bubble.php'); ?>
		<!-- <?php echo 'Built with WPtouch Pro ' . WPTOUCH_VERSION; ?> -->

<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
<?php if ( ! is_plugin_active('live-chat/live-chat.php') ) { ?>
	<div id="live_chat_status"></div>
	<script type='text/javascript' src='http://greeterware.com/Dashboard/cwgen/scripts/library.js?ver=2.0'></script>
	<script type='text/javascript' src='http://greeterware.com/Dashboard/cwgen/Company/LiveAdmins/jacuzzi.com/gvars.js?ver=2.0'></script>
	<script type='text/javascript' src='http://greeterware.com/Dashboard/cwgen/Company/LiveAdmins/jacuzzi.com/chatwindow.js?ver=2.0'></script>
	<script type='text/javascript' defer="defer" src='http://greeterware.com/Dashboard/cwgen/scripts/chatscriptyui.js?ver=2.0'></script>
<?php } ?>

	</body>
</html>