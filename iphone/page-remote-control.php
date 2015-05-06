<?php get_header(); ?>	

<?php if ( wptouch_classic_is_custom_latest_posts_page() ) { ?>
	<?php wptouch_classic_custom_latest_posts_query(); ?>
	<?php locate_template( 'blog-loop.php', true ); ?>
<?php } else { ?>
	<?php if ( wptouch_have_posts() ) { ?>
	
		<?php wptouch_the_post(); ?>
		<div class="<?php wptouch_post_classes(); ?> page-title-area rounded-corners-8px">

			<h2 role="heading"><?php wptouch_the_title(); ?></h2>

			<?php wp_link_pages( __( 'Pages in the article:', 'wptouch-pro' ), '', 'number' ); ?>

		</div>	
		
		<!-- black video bar -->
		<div class="<?php wptouch_post_classes(); ?> rounded-corners-8px black-bg">
			
			<div class="<?php wptouch_content_classes(); ?>">

				<!-- video goes here -->
				<a href="#video-link">
					<img id="remote-video" src="/hot-tubs/wp-content/wptouch-data/themes/jhtmobile/iphone/images/remote-control-imag1.jpg" align="center" />
				</a>

				<h2><span class="white">JACUZZI&reg; BRAND HOT TUBS</span><br>
					<span class="gold">ANNOUNCES THE PROLINK&trade; APP</span></h2>

				<p>Jacuzzi&reg; Hot Tubs debuts a new way for spa owners to combine smartphone technology with tech-savvy J-500&trade; Collection hot tubs: the ProLink&trade; app.</p>

				<!-- connect img -->
				<a href="#connect-button">
					<img id="remote-button" src="/hot-tubs/wp-content/wptouch-data/themes/jhtmobile/iphone/images/remote-control-button.png" align="left" />
				</a>
				
			</div>
			
		</div>

		<div class="<?php wptouch_post_classes(); ?> rounded-corners-8px">
			
			<div class="<?php wptouch_content_classes(); ?>">
				
				<img src="/hot-tubs/wp-content/wptouch-data/themes/jhtmobile/iphone/images/remote-control-imag2.jpg" align="center" />

				<p><strong>ProLink&trade; puts the power to control your hot tub in the palm of your hand, whether in your living room or on the road.</strong> Using your smartphone device, you can operate and adjust the functions of your Jacuzzi&reg;  J-500&trade; Collection hot tub, including adjusting the water temperature, turning on jets and scheduling water care operations.</p>
				<p>Already using ProLink™? <a href="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2015/03/Jacuzzi-App-Troubleshoot-Rev-0.pdf">Find connection tips here.</a></p>
			</div>
			
		</div><!-- wptouch_posts_classes() -->

		<!-- black text gradient bar -->
		<div class="<?php wptouch_post_classes(); ?> rounded-corners-8px black-grad">
			
			<div class="<?php wptouch_content_classes(); ?>">
				
				<h2>OPERATE AND ADJUST THE FUNCTIONS OF YOUR JACUZZI&reg; J-500&trade; COLLECTION HOT TUB FROM THE PALM OF YOUR HAND.</h2>

			</div>
			
		</div>

		<div class="<?php wptouch_post_classes(); ?> rounded-corners-8px">
			
			<div class="<?php wptouch_content_classes(); ?>">
				
				<p><strong>Features: Using your smartphone-enabled device and a WiFi connection, ProLink&trade; allows you to:</strong></p>
				<ul><li>Adjust your water temperature</li>
					<li>Operate your jets</li>
					<li>Control your lights</li>
					<li>View your owner's manual</li>
					<li>Access Trouble Shooting and FAQs</li>
					<li>Receive water care reminders</li>
					<li>Set up filtration and heater programming</li>
					<li>Manage multiple hot tub</li>
					<li>Get maintenance alerts</li>
					<li>Alert your dealership of service needs</li>
				</ul>

				<!-- play store icon -->
				<a href="#google-play">
					<img src="/hot-tubs/wp-content/wptouch-data/themes/jhtmobile/iphone/images/en_app_rgb_wo_60.png" align="center" width="172"/>
				</a>
				<!-- app store icon -->
				<a href="#app-store">
					<img src="/hot-tubs/wp-content/wptouch-data/themes/jhtmobile/iphone/images/Download_on_the_App_Store_Badge_US-UK_135x40.svg" align="center" width="172"/>
				</a>

				<img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2015/03/J-500-daytime-app.jpg" align="center" />

				<h3>Control Your Hot Tub From Anywhere</h3>
				<p>Heat up your hot tub on your way home from work. Set your hot tub to vacation mode to reduce energy consumption when you are out of town. Or, schedule and adjust filter cycles based on hot tub usage. You can even manage multiple hot tubs, such as your home and vacation property models.</p>

				<img src="/hot-tubs/wp-content/wptouch-data/themes/jhtmobile/iphone/images/remote-control-img4.jpg" align="center" />

				<h3>Get Alerts</h3>
				<p>ProLink&reg;  is not only convenient, it can help keep your J-500&trade; Collection hot tub running newer longer. From alerting you and your local dealership when errors occur on your hot tub so you can respond with quick preventative services to reminding you when it's time for maintenance tasks such as changing your CLEARRAY&reg;  bulb or water, ProLink&trade; makes caring for your hot tub easy.</p>

				<img src="/hot-tubs/wp-content/wptouch-data/themes/jhtmobile/iphone/images/remote-control-img5.jpg" align="center" />

				<h3>J-500&trade; Collection Ready</h3>
				<p>The ProLink&trade; app is compatible with Jacuzzi&reg;  J-575&trade; and J-585&trade; hot tub models. ProLink&trade; is free for the first year and $25 per year after.</p>

			</div>
			
			<?php wp_link_pages( 'before=<div class="post-page-nav">' . __( "Pages", "wptouch-pro" ) . ':&after=</div>&next_or_number=number&pagelink=page %&previouspagelink=&raquo;&nextpagelink=&laquo;' ); ?>          

		</div><!-- wptouch_posts_classes() -->

	<?php } ?>
<?php } ?>

<?php get_footer(); ?>