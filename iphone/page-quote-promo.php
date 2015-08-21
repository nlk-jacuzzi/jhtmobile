<?php

wp_enqueue_style( 'jquery-mobile-css', 'http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css' );

get_header(); ?>	

	<?php if ( wptouch_have_posts() ) { ?>
	
		<?php wptouch_the_post(); ?>
		<div class="<?php wptouch_post_classes(); ?> page-title-area rounded-corners-8px">

			<h2 role="heading">Request Pricing</h2>

		</div>	
		
		<div class="<?php wptouch_post_classes(); ?> rounded-corners-8px">
			
			<div class="<?php wptouch_content_classes(); ?>">
<code><h1 class="title">Double Your Instant Rebate</h1>
In appreciation of your interest in Jacuzzi® Brand hot tubs, we would like to offer you a chance to double your rebate potential on the purchase of a Jacuzzi® hot tub, a value of up to $1,000 on select models. Fill out this quick form and enter the Promo code from our Jacuzzi® Facebook page.

Your local authorized Jacuzzi® Dealer will reach out to you with expert selection, advice and pricing.

*Indicates required fields.
[gravityform id="21" name="No-Obligation Price Quote" title="false" description="false"]
<p class="note"><a href="http://www.jacuzzi.com/hot-tubs/wp-content/uploads/2015/08/Terms__Conditions_Aug_Sep_Promotion__Consumer__FINAL_JHT.pdf" target="_blank">Terms and Conditions</a></p>
<p class="note"><a href="/hot-tubs/about/policies/" target="_blank">Privacy Policy</a></p>
			</div>
			

		</div><!-- wptouch_posts_classes() -->

	<?php } ?>

<?php get_footer(); ?>