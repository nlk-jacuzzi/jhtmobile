<?php
avala_form_submit();

wp_enqueue_style( 'jquery-mobile-css', 'http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css' );

get_header(); ?>	

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
		
		<div class="<?php wptouch_post_classes(); ?> rounded-corners-8px">
			
			<div class="<?php wptouch_content_classes(); ?>">
            <img src="<?php bloginfo('template_url'); ?>/images/escape-hdr.png" alt="Escape with Jacuzzi&reg; - Enter to Win" width="551" height="131" class="eschdr" />
                    <h2 class="bigger">PLEASE FILL YOUR INFO TO BE ENTERED TO WIN</h2>
                    <p class="note">*Indicates required fields.</p>
                    <form action="<?php echo get_permalink(); ?>" method="post" id="leadForm">
                        <script type="text/javascript">
                            var invalidInputs = ["www", "http"];
                            var states = null;
                            var emailAddress = 'email'; // class for email address fields
                            var required = 'required';  // class for required fields
                            var error = 'err';          // class for displaying errors
                            $(document).ready(function () {
                                $("form#leadForm").submit(function (e) {
                                    var cancel = false;
                                    $("." + required).each(function () {
                                        if ($(this).val() === "") {
                                            //$(this).addClass("error");
                                            $(this).addClass(error);
                                            if (!cancel) {
                                                cancel = true;
                                                $(this).focus();
                                            }
                                        }
                                    })
                                    if (cancel) e.preventDefault();
                                });
                                $("form ." + required).blur(function() {
                                    if ($(this).val() === "") {
                                        $(this).addClass(error);
                                    } else {
                                        if ($(this).is(".email")) {
                                            return;
                                        }
                                        else {
                                            $(this).removeClass(error);
                                        }
                                    }
                                })
                                $("form ." + emailAddress).bind('blur keyup', function() {
                                    var a = $("form ." + emailAddress).val();
                                    var filter = new RegExp("\\b[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,4}\\b");
                                    if ($(this).val() === "") {
                                        $(this).addClass(error);
                                    }
                                    if (filter.test(a)) {
                                        $(this).removeClass(error);
                                        return true;
                                    }
                                    else {
                                        $(this).addClass(error);
                                        return false;
                                    }
                                });
                                $("form input[type=text]").bind('blur keyup', function() {
                                    var n = invalidInputs.length;
                                    for (var i = 0; i < n; i++) {
                                        if ($(this).val().toLowerCase().indexOf(invalidInputs[i]) > -1) {
                                            $(this).addClass(error);
                                            return false;
                                        }
                                    }
                                });
                                $("form .number").keydown(function (event) {
                                    if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 ||
                                    event.keyCode == 190 || event.keyCode == 110 ||
                                    (event.keyCode == 65 && event.ctrlKey === true) ||
                                    (event.keyCode >= 35 && event.keyCode <= 39)) {
                                        return;
                                    }
                                    else {
                                        if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
                                            event.preventDefault();
                                        }
                                    }
                                });
                            });
                        </script>

                        <?php 
                            $leadSourceId = 17;
                            $leadCategoryId = 8;

                            jht_avala_chunk_hidden('17', '8');
                        ?>
                        
                        <p>
                                    <label for="person_first_name">First Name*</label>
                                    <input id="person_first_name" name="FirstName" type="text" class="text w270 required" />
                                          
                                </p>
                            
                                <p>
                                    <label for="person_last_name">Last Name*</label>
                                    <input id="person_last_name" name="LastName" type="text" class="text w270 required" />
                                </p>
                                <p>
                                    <label for="person_email">Email*</label>
                                    <input id="person_email" name="EmailAddress" type="email" class="email text w270 required" placeholder="For prize notification"/>
                                </p>
                                <p>
                                    <label for="person_postal_code">Zip Code*</label>
                                    <input id="person_postal_code" name="PostalCode" type="text" maxlength="10" class="text w270 required" /> 
                                </p>
                                
                            
                                <fieldset data-role="controlgroup" data-type="horizontal">
                                    <legend>Do you own your home?</legend>
                                    <input type="radio" name="CustomData[HomeOwner]" id="homeowner-no" value="No" />
                                    <label for="homeowner-no">No</label>
                                    <input type="radio" name="CustomData[HomeOwner]" id="homeowner-yes" value="Yes" />
                                    <label for="homeowner-yes">Yes</label>
                                </fieldset>
                                
                                <fieldset data-role="controlgroup" data-type="horizontal">
                                    <legend>Are you interested in owning a Jacuzzi&nbsp;Hot&nbsp;Tub?*</legend>
                                    <input type="radio" name="CustomData[InterestedInOwning]" id="wantsown-no" value="No" class="wantsown" />
                                    <label for="wantsown-no">No</label>
                                    <input type="radio" name="CustomData[InterestedInOwning]" id="wantsown-yes" value="Yes" class="wantsown" />
                                    <label for="wantsown-yes">Yes</label>
                                </fieldset>
                                <script type="text/javascript">
								jQuery(function() {
									jQuery('.wantsown').bind('change',function() {
											if ( jQuery(this).val() == 'Yes') {
												jQuery('#reasons').slideDown();
											} else {
												jQuery('#reasons').slideUp();
											}
									});
								});
								</script>
                            <div id="reasons" style="display:none">
                                    <fieldset class="control large" data-role="controlgroup">
		                                    <legend>What is the primary reason you are considering the purchase of a hot tub?</legend>
                                            <label for="CustomData"><input name="CustomData[ProductUse]" value="Relaxation" type="radio"/>  Relaxation </label> 
                                            <label for="CustomData"><input name="CustomData[ProductUse]" value="Pain Relief/Therapy" type="radio"/>  Pain Relief/Therapy </label> 
                                            <label for="CustomData"><input name="CustomData[ProductUse]" value="Bonding/Family" type="radio"/>  Bonding/Family </label> 
                                            <label for="CustomData"><input name="CustomData[ProductUse]" value="Backyard Entertaining" type="radio"/>  Backyard Entertaining </label> 
                                    </fieldset>
                            
                                    <fieldset class="control large" data-role="controlgroup">
                                    		<legend>When do you plan to purchase a hot tub?</legend>
                                            <input name="CustomData[BuyTimeFrame]" id="buytimeframe-a" value="Not sure" type="radio"/>
                                            <label for="buytimeframe-a">Not sure</label> 
                                            <input name="CustomData[BuyTimeFrame]" id="buytimeframe-b" value="Within 1 month" type="radio"/>
                                            <label for="buytimeframe-b">Within 1 month</label> 
                                            <input name="CustomData[BuyTimeFrame]" id="buytimeframe-c" value="1-3 months" type="radio"/>
                                            <label for="buytimeframe-c">1-3 months</label> 
                                            <input name="CustomData[BuyTimeFrame]" id="buytimeframe-d" value="4-6 months" type="radio"/>
                                            <label for="buytimeframe-d">4-6 months</label> 
                                            <input name="CustomData[BuyTimeFrame]" id="buytimeframe-e" value="6+ months" type="radio"/>
                                            <label for="buytimeframe-e">6+ months</label> 
                                    </fieldset>
                            </div>
                            <p><br /></p>
                            <p>
                            <label for="ReceiveEmailCampaigns"><input class="editor choice" name="ReceiveEmailCampaigns" value="true" type="checkbox" checked="checked" />  Yes, I would like to receive email updates and specials from Jacuzzi Hot Tubs. </label>
                            <p><br /></p>
                             </p>
                                    <input type="hidden" name="LeadTypeId" value="2" />
                                    <input type="hidden" name="Brand" value="Jacuzzi Hot Tubs" />
                                    <input type="hidden" name="Event" value="Escape" />
                                    <input type="hidden" name="returnUrl" value="<?php bloginfo('url'); ?>/escape-with-jacuzzi/escape-thanks/" />
                                    <input type="hidden" name="sendApiTo" value="http://thermospasapi.aimbase.com/api/Lead" />
                                    <input type="hidden" name="ExactTargetOptInListIds" value="2754925" />
                                    <input type="hidden" name="LeadDate" value="<?php echo date('m/d/Y H:i:s e', time()); ?>" />
                                    <input type="hidden" name="Campaign" value="EWJ" />
                                    <input type="hidden" name="TriggeredSend" value="EWJCampaignDA" />
                                <p>
                                    <input type="submit" class="submit bigBtn" data-role="button" data-theme="b" value="Enter to Win!" />
                                </p>
                        <p class="note">
                        Your privacy is very important to us. See our <a href="<?php echo get_permalink(3987) ?>">Privacy Policy</a>.</p>
                    </form>
            
				<?php wptouch_the_content(); ?>
			</div>
			
					<?php wp_link_pages( 'before=<div class="post-page-nav">' . __( "Pages", "wptouch-pro" ) . ':&after=</div>&next_or_number=number&pagelink=page %&previouspagelink=&raquo;&nextpagelink=&laquo;' ); ?>          

		</div><!-- wptouch_posts_classes() -->

	<?php } ?>
<?php } ?>

<?php get_footer(); ?>