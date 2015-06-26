<?php

wp_enqueue_script('jquery-ui-accordion');
//wp_enqueue_style('jquery-ui', get_bloginfo('stylesheet_directory') .'/jquery-ui/custom.min.css');

get_header(); ?>	

	<?php if ( wptouch_have_posts() ) { ?>
	
		<?php wptouch_the_post(); ?>
		
        <div class="cathdr">
        <div class="txt"><h2>Discover your perfect<br />Jacuzzi&reg; Hot Tub</h2></div>
        </div>
        
		<div class="<?php wptouch_post_classes(); ?> rounded-corners-8px cats">
			
			<div class="<?php wptouch_content_classes(); ?>">
				<?php //wptouch_the_content(); ?>
                    	<?php
						global $post;
						global $tubcats;
						if ( $post->ID == 8 ) { // HOT TUBS landing page
						//echo '<pre>'. print_r($tubcats[44]['subcats'],true) .'</pre>';
							// only loop through main cats (for now?)
							foreach ( $tubcats[44]['subcats'] as $k => $c ) {
									?>
                            <h3 role="heading"><?php echo '<strong>'. str_replace(' Collection', '</strong> Collection', $c['fullname']); ?></h3>
                            <div><ul class="tubs">
                            <?php
								$tubs = $c['tubs'];
							
							if ( count($tubs) > 0 ) {
								foreach ( $tubs as $t ) {
									echo '<li class="tub">';
									if (class_exists('MultiPostThumbnails')) {
										echo '<a href="'.get_permalink($t['id']).'">';
										MultiPostThumbnails::the_post_thumbnail('jht_tub', 'three-quarter', $t['id'], 'three-quarter-nav');
										echo '</a>';
									}
							?>
								
									<a class="btn" href="<?php echo get_permalink($t['id']); ?>"><?php esc_attr_e($t['name']); ?></a>
                                    <div class="spx">
                                    Seats: <?php esc_attr_e($t['seats']) ?><br />
									Jets: <?php echo absint($t['jets']) ?>
                                    </div>
							<?php
								echo '</li>';
								}
							}
							echo '</ul></div>';
						}
						} else {
							?>
                            <h3 role="heading"><?php wptouch_the_title(); ?></h3>
                            <div><ul class="tubs">
                            <?php
							if ( $post->post_parent ) {
								$tubs = $tubcats[$post->post_parent]['subcats'][$post->ID]['tubs'];
							} else {
								$tubs = $tubcats[$post->ID]['tubs'];
							}
							
							if ( count($tubs) > 0 ) {
								foreach ( $tubs as $t ) {
									echo '<li class="tub">';
									if (class_exists('MultiPostThumbnails')) {
										MultiPostThumbnails::the_post_thumbnail('jht_tub', 'three-quarter', $t['id'], 'three-quarter-nav');
									}
							?>
								
									<a href="<?php echo get_permalink($t['id']); ?>"><?php esc_attr_e($t['name']); ?></a>
                                    <div class="spx">
                                    Seats: <?php esc_attr_e($t['seats']) ?><br />
									Jets: <?php echo absint($t['jets']) ?>
                                    </div>
							<?php
								echo '</li>';
								}
							}
							echo '</ul></div>';
						} ?>

			</div>
		</div><!-- wptouch_posts_classes() -->

		<?php } ?>

<?php get_footer(); ?>