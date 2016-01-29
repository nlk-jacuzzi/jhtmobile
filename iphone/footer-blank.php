				</div><!-- #content --><?php
					/* add Dealer Loc + Hot Tubs + Request + Donwload links here... */
					/* CURRENT PROMO?? */
?>
<?php /* <div id="promo"><img src="<?php bloginfo('template_url'); ?>/images/mobile-promo.jpg" alt="Current Promotion" /></div> */ ?>

				<?php do_action( 'wptouch_body_bottom' ); ?>
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