<?php get_header(); ?>	

	<?php if ( wptouch_have_posts() ) { ?>
	
		<?php wptouch_the_post();
		global $post;
		
$custom = get_post_meta($post->ID,'jht_specs');
$jht_specs = $custom[0];


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
        <div class="moc">
			<div class="lbl">Monthly Cost 60&deg;F / 15&deg;C:</div>
            <div class="cost">$<?php esc_attr_e($jht_specs['emoc']); ?></div>
        </div>
        
        <div class="tubcolors">
        <h3>Acryllic Shell Colors</h3>
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

<?php
	}
get_footer(); ?>