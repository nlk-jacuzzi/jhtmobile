<?php get_header(); ?>	
<script src="<?php wptouch_bloginfo( 'template_directory' ); ?>/js/readmore.min.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#readmorediv').readmore({
										  speed: 75,
										  collapsedHeight: 50,
										  moreLink: '<a href="#">Learn More</a>'
										});

	});	
</script>

	<?php if ( wptouch_have_posts() ) { ?>
	
		<?php wptouch_the_post();
		global $post;
		
$custom = get_post_meta($post->ID,'jht_specs');
$jht_specs = $custom[0];

$prod = esc_attr($jht_specs['product_id']);
$is_staging = jht_my_server() == 'live' ? FALSE : TRUE;

$bv = new BV(
    array(
        'deployment_zone_id' => 'Main_Site-en_US',
        'product_id' => $prod, // must match ExternalID in the BV product feed
        'cloud_key' => 'sundancespas-486bb392da92b7b9f1e1628eec33b8ae',
        'staging' => $is_staging
        )
    );


$custom = get_post_meta($post->ID,'jht_colors');
$jht_colors = $custom[0];
// array(66,68,70...) -> so process it
$o = array();

$args = array( 'numberposts' => -1, 'post_type'=>'jht_color', 'include' => $jht_colors, 'orderby' => 'menu_order', 'order' => 'ASC' );
$thesecolors = get_posts($args);

foreach ( $thesecolors as $c ) {
	$o[$c->ID] = $c->post_title;
}

$jht_colors = $o;

$custom = get_post_meta($post->ID,'jht_cabs');
$jht_cabs = $custom[0];
// array(66,68,70...) -> so process it
$o = array();

$args = array( 'numberposts' => -1, 'post_type'=>'jht_cabinetry', 'include' => $jht_cabs, 'orderby' => 'menu_order', 'order' => 'ASC' );
$thesecolors = get_posts($args);

foreach ( $thesecolors as $c ) {
	$o[$c->ID] = $c->post_title;
}
$jht_cabs = $o;

$custom = get_post_meta($post->ID,'jht_jets');
$jht_jets = $custom[0];
$jetcount = 0;
foreach ( $jht_jets as $v ) $jetcount += $v;
?>
<script>
dataLayer.push({ 
    'pageType':'productPage',
    'msrpStatus':<?php echo ( msrp_display() ? '"MSRP Available"' : '"MSRP Not Available"' ); ?>, // status if in test market or not - optional
    'event':'pageReady'
});
</script>
<script type="text/javascript">
    $BV.ui( 'rr', 'show_reviews', {
        doShowContent : function () {
            $('html, body').animate({
                scrollTop: $("#BVRRContainer").offset().top
            }, 500);
        }
    });
</script>

		<div class="post <?php //wptouch_post_classes(); ?> tubtop">

			<div class="tubnum"><?php wptouch_the_title(); ?></div>
            <?php			
			if (class_exists('MultiPostThumbnails')) {
				echo '<div class="tubslides"><div class="tubslide onn">';
				
				MultiPostThumbnails::the_post_thumbnail('jht_tub', 'overhead-large', $post->ID, 'overhead-large');
				
				echo '</div><div class="tubslide">';
				
				MultiPostThumbnails::the_post_thumbnail('jht_tub', 'three-quarter', $post->ID, 'three-quarter');
				
				echo '</div><div class="tubslide">';
				
				MultiPostThumbnails::the_post_thumbnail('jht_tub', 'background-image', $post->ID, 'background');
				
				echo '</div><ul id="mdots"><li class="onn"><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li></ul></div>';
			}
			?>
            <div class="content">
				<?php wptouch_the_content(); ?>
            </div>
		</div>
        <ul class="tubinfo">
            <li><strong>Seats:</strong> <?php esc_attr_e($jht_specs['seats']); ?></li>
            <li><strong>PowerPro Jets:</strong> <?php echo absint($jetcount); ?></li>
            <li><strong>Dimensions:</strong> <?php esc_attr_e($jht_specs['dim_us']); ?></li>
            <li><strong>Water Purification System:</strong> <?php echo $jht_specs['wps']; ?></li>
            <li><strong>Spa Volume:</strong> <?php esc_attr_e($jht_specs['vol_us']); ?></li>
        </ul>
        <?php if ( msrp_display() ) : ?>
            <?php
            $msrp = esc_attr($jht_specs['msrp']);
            $msrp = ( $msrp[0] == '$' ? $msrp : '$'.$msrp );
            ?>
            <div class="msrp-button">
                <a id="show-msrp" href="#" class="getpricing" rel="View MSRP">View MSRP</a>
            </div>
            <div class="msrp-container">
                <?php echo '<p class="msrp-price"><span>' . $msrp . '</span> MSRP</p>'; ?>
                <p class="msrp-disclaimer"><strong>Disclaimer: </strong>prices listed are Manufacturer's Suggested Retail Price (MSRP). Prices may not include additional fees, see authorized dealer for details.</p>
                <a class="msrp-pricing" href="<?php bloginfo('url'); ?>/get-a-quote/?tid=<?php echo $post->ID; ?>">Get Pricing</a>
                <a class="msrp-dealer" href="<?php bloginfo('url'); ?>/dealer-locator/">Find A Dealer</a>
            </div>
        <?php endif; ?>
        <div class="moc">
			<div class="lbl">Monthly Cost 60&deg;F / 15&deg;C:</div>
            <div class="cost">$<?php esc_attr_e($jht_specs['emoc']); ?></div>
        </div>
        <ul class="tubinfo">
            <li>Monthly energy costs are estimates based on the results of the California Energy Commissions Portable Hot Tub Testing Protocol. Ambient temperature of 60° F / 15° C and national average of 10 cents per kWh. Actual monthly costs may vary depending on temperature, electricity costs, and usage.</li>
        </ul>
        <?php
        // if the SPECS has a "YouTube Video ID" 'yt_video' then insert it here..
        if ( isset($jht_specs['yt_video']) && !empty($jht_specs['yt_video']) ) {
          // #todo : sanitization? error checking?
          echo '<div class="mvid"><iframe width="320" height="180" src="https://www.youtube.com/embed/'. $jht_specs['yt_video'] .'?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>';
        } ?>
        <div class="tubcolors">
        <h3>Acrylic Shell Colors</h3>
        <p>The Jacuzzi TriFusion&trade; System produces a durable acrylic spa shell that is eight times stronger than conventional fiberglass shells and rich in color and texture.</p>
            <ul>
                <?php
                foreach ( $jht_colors as $i => $t ) {
                    echo '<li><span>'. get_the_post_thumbnail( $i, 'right-thumbs') .'</span>';
                    echo $t;
                    echo '</li>';
                }
                ?>
            </ul>
            <div class="hr"></div>
            <h3>Cabinetry</h3>
            <p>Our cabinetry is durable and UV-resistant.</p>
            <ul>
                <?php
                foreach ( $jht_cabs as $i => $t ) {
                    echo '<li><span>'. get_the_post_thumbnail( $i, 'right-thumbs') .'</span>';
                    echo $t;
                    echo '</li>';
                }
                ?>
            </ul>
            <h3 class="color-selector-link">
                <a href="<?php echo get_bloginfo('url'); ?>/color-selector/">View Color Selector</a>
            </h3>
        </div>
        <ul class="tubinfo">
            <li><div id="BVRRContainer"><?php echo $bv->reviews->getContent();?></div></li>
        </ul>

<?php
	}
get_footer(); ?>
