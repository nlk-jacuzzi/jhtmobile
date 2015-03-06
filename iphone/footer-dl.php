				</div><!-- #content -->
<?php /* <div id="promo"><img src="<?php bloginfo('template_url'); ?>/images/jht-spring-sale-mobile.jpg" alt="Current Promotion" /></div> */ ?>
					<?php
					/* add Dealer Loc + Hot Tubs + Request + Donwload links here... */
					?>
                    

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
		<?php // include_once('web-app-bubble.php'); ?>
		<!-- <?php echo 'Built with WPtouch Pro ' . WPTOUCH_VERSION; ?> -->
	</body>
</html>