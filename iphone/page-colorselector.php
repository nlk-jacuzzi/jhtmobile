<?php get_header(); ?>	

<?php if ( wptouch_classic_is_custom_latest_posts_page() ) { ?>
	<?php wptouch_classic_custom_latest_posts_query(); ?>
	<?php locate_template( 'blog-loop.php', true ); ?>
<?php } else { ?>
	<?php if ( wptouch_have_posts() ) { ?>
	
		<?php wptouch_the_post(); ?>
		

		


<style>
.color-selector.color-selector-container h2[role="heading"] { font: 700 29px "GSL"; margin-top: 38px; text-align: center; }
.color-selector.color-selector-container { min-height: 750px; margin-top: 1px; width: 100%; }
.color-selector.color-selector-container .color-selector-wrapper { margin: auto; }
.color-selector.color-selector-container .color-selector-wrapper .left { box-sizing: border-box; padding: 0; text-align: center; width: 100%; }
.color-selector.color-selector-container .color-selector-wrapper .left .tub-container { height: 210px; margin: auto; overflow: visible; position: relative; width: 300px; }
.color-selector.color-selector-container .color-selector-wrapper .left .tub-container div { position: absolute; text-align: center; }
.color-selector.color-selector-container .color-selector-wrapper .left .tub-container img { height: auto; left: 0; opacity: 0; position: absolute; top: 0; width: 300px; -webkit-transition: opacity .25s; transition: opacity .25s; }
.color-selector.color-selector-container .color-selector-wrapper .left .tub-container img.active { opacity: 1; }
.color-selector.color-selector-container .color-selector-wrapper .left .tub-details {font-family: "GSL"; padding-left: 10px; text-align: left; }
.color-selector.color-selector-container .color-selector-wrapper .left .tub-details h3 { font-size: 13px; }
.color-selector.color-selector-container .color-selector-wrapper .left .tub-details h3 strong { font-family: "GSBQ"; font-weight: 700; }
.color-selector.color-selector-container .color-selector-wrapper .left .tub-details li { font-size: 10px; font-weight: 700; margin-left: 17px; }
.color-selector.color-selector-container .color-selector-wrapper .right { box-sizing: border-box; padding: 0 20px; }
.color-selector.color-selector-container .color-selector-wrapper .right h2 { font-size: 16px; letter-spacing: .75px; margin: 24px 5px 10px; text-transform: none; }
.color-selector.color-selector-container .color-selector-wrapper .right h2 span { font-family: "GSL"; font-weight: 700; }
.color-selector.color-selector-container .color-selector-wrapper .right .btn { margin-top: 34px; text-transform: uppercase; }
.color-selector.color-selector-container .color-selector-wrapper .right .pdf-download { color: #414141; font: 400 16px/66px "GSL"; text-decoration: underline; }
.color-selector.color-selector-container .color-selector-wrapper .thumb { border: 2px solid #fff; border-radius: 99px; cursor: pointer; display: inline-block; margin: 2px 3px; overflow: hidden; -webkit-transition: border-color .25s; transition: border-color .25s; }
.color-selector.color-selector-container .color-selector-wrapper .thumb.active,
.color-selector.color-selector-container .color-selector-wrapper .thumb:hover { border: 2px solid #666; box-shadow: 0px 0px 6px rgba(0,0,0,.25); }
.color-selector.color-selector-container .color-selector-wrapper .thumb img { border: 2px solid #fff; border-radius: 99px; display: block; height: 45px; width: 45px; }

div[timg="platinum"] img { background-color: #d4d7d7; }
div[timg="silverpearl"] img { background-color: #e5e4de; }
div[timg="monaco"] img { background-color: #887e78; }
div[timg="midnight"] img { background-color: #242426; }
div[timg="opal"] img { background-color: #d3d5d7; }
div[timg="sahara"] img { background-color: #c5c4c2; }
div[timg="sand"] img { background-color: #bca792; }
div[timg="desertsand"] img { background-color: #726151; }
div[timg="caribbeansurf"] img { background-color: #0090b8; }
div[timg="slategreen"] img { background-color: #39565a; }
div[timg="brazilianteak"] img { background-color: #be9969; }
div[timg="roastedchestnut"] img { background-color: #47312c; }
div[timg="silverwood"] img { background-color: #635e5f; }

</style>

<div class="color-selector color-selector-container">

	<h2 role="heading"><?php wptouch_the_title(); ?></h2>

	<div class="color-selector-wrapper">

		<div class="left">

			<div class="tub-container">
				<div class="tub-skirt">
					<img class="active" src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/skirts/skirt-brazilianteak.png" timg="brazilianteak" width="300" height="213" />
					<img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/skirts/skirt-roastedchestnut.png" timg="roastedchestnut" width="300" height="213" />
					<img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/skirts/skirt-silverwood.png" timg="silverwood" width="300" height="213" />
				</div>
				<div class="tub-shell">
					<img class="active" src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/platinum.png" timg="platinum" width="300" height="213" />
					<img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/silverpearl.png" timg="silverpearl" width="300" height="213" />
					<img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/monaco.png" timg="monaco" width="300" height="213" />
					<img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/midnight.png" timg="midnight" width="300" height="213" />
					<img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/opal.png" timg="opal" width="300" height="213" />
					<img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/sahara.png" timg="sahara" width="300" height="213" />
					<img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/sand.png" timg="sand" />
					<img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/desertsand.png" timg="desertsand" width="300" height="213" />
					<img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/caribbeansurf.png" timg="caribbeansurf" width="300" height="213" />
					<?php /*?><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/titanium.png" timg="titanium" width="300" height="213" />
					<!--img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/slategreen.png" timg="slategreen" width="300" height="213" /--><?php */?>
				</div>
			</div>
			<div class="tub-details">
				<?php /*
				<h3><strong>Shell:</strong> <span class="shell-name"></span></h3>
				<h3><strong>Cabinetry:</strong> <span class="skirt-name"></span></h3>
				*/ ?>
				<li><i>J-355<sup>&trade;</sup> model shown for visualization purposes only. Tub size and jet placement will vary by model.<br />Not all colors available in all models. See individual product pages for available colors.</i></li>
			</div>

		</div>
		
		<div class="right">

			<h2><strong>Shell:</strong> <span class="shell-name"></span></h2>
			<div class="shells">
				<div class="shell thumb active" timg="platinum" data-pdf="platinum" rel="Platinum" ><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/acrylic-thumb-platinum.png" width="49" height="49" /></div>
				<div class="shell thumb" timg="silverpearl" data-pdf="silverpearl" rel="Silver Pearl" ><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/acrylic-thumb-silverpearl.png" width="49" height="49" /></div>
				<div class="shell thumb" timg="monaco" data-pdf="monaco" rel="Monaco" ><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/acrylic-thumb-monaco.png" width="49" height="49" /></div>
				<div class="shell thumb" timg="midnight" data-pdf="midnight" rel="Midnight" ><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/acrylic-thumb-midnight.png" width="49" height="49" /></div>
				<div class="shell thumb" timg="opal" data-pdf="opal" rel="Opal" ><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/acrylic-thumb-opal.png" width="49" height="49" /></div>
				<div class="shell thumb" timg="sahara" data-pdf="sahara" rel="Sahara" ><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/acrylic-thumb-sahara.png" width="49" height="49" /></div>
				<div class="shell thumb" timg="sand" data-pdf="sand" rel="Sand" ><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/acrylic-thumb-sand.png" width="49" height="49" /></div>
				<div class="shell thumb" timg="desertsand" data-pdf="desertsand" rel="Desert Sand" ><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/acrylic-thumb-desertsand.png" width="49" height="49" /></div>
				<div class="shell thumb" timg="caribbeansurf" data-pdf="caribbeansurf" rel="Caribbean Surf" ><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/acrylic-thumb-caribbeansurf.png" width="49" height="49" /></div>
				<?php /* ?><div class="shell thumb" timg="titanium" data-pdf="titanium" rel="Titanium" ><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/acrylic-thumb-titanium.png" width="49" height="49" /></div>
				<!--div class="shell thumb" timg="slategreen" data-pdf="slategreen" rel="Slate Green" ><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/shells/acrylic-thumb-slategreen.png" width="49" height="49" /></div--><?php */?>
			</div>
			<h2><strong>Cabinetry:</strong> <span class="skirt-name"></span></h2>
			<div class="skirts">
				<div class="skirt thumb brazilianteak active" timg="brazilianteak" data-pdf="teak" rel="Brazilian Teak" ><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/skirts/skirt-thumb-brazilianteak.png" width="49" height="49" /></div>
				<div class="skirt thumb roastedchestnut" timg="roastedchestnut" data-pdf="chest" rel="Roasted Chestnut" ><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/skirts/skirt-thumb-roastedchestnut.png" width="49" height="49" /></div>
				<div class="skirt thumb silverwood" timg="silverwood" data-pdf="silver" rel="Silverwood" ><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/jht/images/lowres-colorselector/skirts/skirt-thumb-silverwood.png" width="49" height="49" /></div>
			</div>
			<a class="btn bigGoldBtn" href="/hot-tubs/get-a-quote/">Get Pricing</a>
			<a class="pdf-download" href="" download="">Download Your Selected Color PDF</a>

		</div>

	</div>

	<script type="text/javascript">
	jQuery(function($){

		function updatepdf() {
			var pdf1 = $('.color-selector div.shell.thumb.active').attr('data-pdf'),
				pdf2 = $('.color-selector div.skirt.thumb.active').attr('data-pdf'),
				pdfroot = "<?php echo network_site_url('/brochures/shellskirtoptions/'); ?>";
			if ( $(this).hasClass('shell') ) {
				pdf1 = $(this).attr('data-pdf');
			}
			if ( $(this).hasClass('skirt') ) {
				pdf1 = $(this).attr('data-pdf');
			}
			var pdfurl = pdfroot + pdf1 + '_' + pdf2;
			$('a.pdf-download').attr({
				'href': pdfurl + '.pdf',
				'download': pdf1 + '_' + pdf2
			});
		}
		// set default shell and skirt names
		var shellname = $('.color-selector div.shell.thumb.active').attr('rel');
		var skirtname = $('.color-selector div.skirt.thumb.active').attr('rel');
		$('.color-selector span.shell-name').html( shellname );
		$('.color-selector span.skirt-name').html( skirtname );
		updatepdf();

		// onclick update
		$('.color-selector div.shell.thumb').click(function(){
			var newshellname = $(this).attr('rel');
			var newshellimg = $(this).attr('timg');
			$('.color-selector div.shell.thumb.active').removeClass('active');
			$('.color-selector div.tub-shell img.active').removeClass('active');
			$(this).addClass('active');
			$('.color-selector div.tub-shell').find('img[timg="' + newshellimg + '"]').addClass('active');
			$('.color-selector span.shell-name').html( newshellname );
			updatepdf();
		});
		$('.color-selector div.skirt.thumb').click(function(){
			var newskirtname = $(this).attr('rel');
			var newskirtimg = $(this).attr('timg');
			$('.color-selector div.skirt.thumb.active').removeClass('active');
			$('.color-selector div.tub-skirt img.active').removeClass('active');
			$(this).addClass('active');
			$('.color-selector div.tub-skirt').find('img[timg="' + newskirtimg + '"]').addClass('active');
			$('.color-selector span.skirt-name').html( newskirtname );
			updatepdf();
		});
	});
	</script>

</div>        <?php get_template_part('block', 'cta_forms'); ?>
		
		<div class="<?php wptouch_post_classes(); ?> rounded-corners-8px">
			
			<div class="<?php wptouch_content_classes(); ?>">
				<?php wptouch_the_content(); ?>
			</div>
			
					<?php wp_link_pages( 'before=<div class="post-page-nav">' . __( "Pages", "wptouch-pro" ) . ':&after=</div>&next_or_number=number&pagelink=page %&previouspagelink=&raquo;&nextpagelink=&laquo;' ); ?>          

		</div><!-- wptouch_posts_classes() -->

	<?php } ?>
<?php } ?>

<?php get_footer(); ?>