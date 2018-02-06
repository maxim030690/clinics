<footer class="footer">
    <!-- site map -->
    <div class="sitemap-container">
        <div class="row sitemap home-baner">

            <!-- links for homepage -->
            <div class="small-2 columns show-for-large">
                <h4>Home</h4>
                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'items_wrap' => '<ul id="%1$s" class="no-bullet">%3$s</ul>', 'depth' => 1) ); ?>
            </div>
            <!-- links to std tests -->
            <div class="small-2 columns show-for-large">
                <h4>Tests</h4>
                <?php wp_nav_menu( array( 'theme_location' => 'footer-tests-menu', 'items_wrap' => '<ul id="%1$s" class="no-bullet">%3$s</ul>', ) ); ?>
            </div>
            <!-- links to resources -->
            <div class="small-2 columns show-for-large">
                <h4>Resources</h4>
                <?php wp_nav_menu( array( 'theme_location' => 'footer-resources-menu',
                    'container' => 'ul',
                    'container_class' => 'no-bullet',
                    'items_wrap' => '<ul id="%1$s" class="no-bullet">%3$s</ul>',
                        'menu_class' => 'no-bullet'
                        )
                    );
                ?>
            </div>
            <!-- contact info -->
            <div class="f-contact text-center columns" >
                <h4>Contact Us</h4>
                <p>Need to speak to someone? Call or email us and speak to a professional now.</p>
                <ul class="no-bullet f-contact" >
                    <li itemprop="email"><span class="fa fa-envelope contact-icon"></span><?php echo get_theme_mod('email')?> </li>
                    <li itemprop="telephone"><span class="fa fa-phone contact-icon"></span><?php echo get_theme_mod('phone')?></li>
                    <li itemprop="streetAddress"><span class="fa fa-building contact-icon"></span><?php echo get_theme_mod('address')?></li>
                </ul>
                </div>
                <!-- Schema for Tests -->
                <div style='display:none;' itemscope itemprop='availableTest' itemtype="http://schema.org/MedicalTest">
                    <div itemprop='code' itemscope itemtype='http://schema.org/MedicalCode'>
                        <span itemprop='codeValue'>054.10</span>
                        <span itemprop='codingSystem'>ICD-9</span>
                    </div>
                    <div itemprop='usedToDiagnose' itemscope itemtype='http://schema.org/MedicalCondition'>
                        <span itemprop='subtype'>Herpes Simplex Virus 1 & 2</span>
                    </div>
                </div>

                <div style='display:none;' itemscope itemprop='availableTest' itemtype="http://schema.org/MedicalTest">
                    <div itemprop='code' itemscope itemtype='http://schema.org/MedicalCode'>
                        <span itemprop='codeValue'>098.0</span>
                        <span itemprop='codingSystem'>ICD-9</span>
                    </div>
                    <div itemprop='usedToDiagnose' itemscope itemtype='http://schema.org/MedicalCondition'>
                        <span itemprop='subtype'>Gonorrhea</span>
                    </div>
                </div>

                <div style='display:none;' itemscope itemprop='availableTest' itemtype="http://schema.org/MedicalTest">
                    <div itemprop='code' itemscope itemtype='http://schema.org/MedicalCode'>
                        <span itemprop='codeValue'>079.98</span>
                        <span itemprop='codingSystem'>ICD-9</span>
                    </div>
                    <div itemprop='usedToDiagnose' itemscope itemtype='http://schema.org/MedicalCondition'>
                        <span itemprop='subtype'>Chlamdyia</span>
                    </div>
                </div>

                <div style='display:none;' itemscope itemprop='availableTest' itemtype="http://schema.org/MedicalTest">
                    <div itemprop='code' itemscope itemtype='http://schema.org/MedicalCode'>
                        <span itemprop='codeValue'>097.9</span>
                        <span itemprop='codingSystem'>ICD-9</span>
                    </div>
                    <div itemprop='usedToDiagnose' itemscope itemtype='http://schema.org/MedicalCondition'>
                        <span itemprop='subtype'>Syphilis</span>
                    </div>
                </div>

                <div style='display:none;' itemscope itemprop='availableTest' itemtype="http://schema.org/MedicalTest">
                    <div itemprop='code' itemscope itemtype='http://schema.org/MedicalCode'>
                        <span itemprop='codeValue'>573.3</span>
                        <span itemprop='codingSystem'>ICD-9</span>
                    </div>
                    <div itemprop='usedToDiagnose' itemscope itemtype='http://schema.org/MedicalCondition'>
                        <span itemprop='subtype'>Hepatitis A B C</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='row home-baner' style='margin-top:1em;'>
        <div class='small-5 medium-3 medium-offset-1 columns' style="flex: 0 0 49%; margin: 0 auto; padding-top: 10px">
            <a id="bbblink" class="ruhzbum" href="http://www.bbb.org/southern-nevada/business-reviews/laboratories-testing/first-american-service-group-in-las-vegas-nv-90041758#bbbseal" title="First American Service Group, Inc, Laboratories  Testing, Las Vegas, NV" style="display: block;position: relative;overflow: hidden; width: 150px; height: 68px; margin: 0px; padding: 0px;"><img style="padding: 0px; border: none;" id="bbblinkimg" src="//seal-southernnevada.bbb.org/logo/ruhzbum/first-american-service-group-90041758.png" width="300" height="68" alt="First American Service Group, Inc, Laboratories  Testing, Las Vegas, NV" /></a><script type="text/javascript">var bbbprotocol = ( ("https:" == document.location.protocol) ? "https://" : "http://" ); document.write(unescape("%3Cscript src='" + bbbprotocol + 'seal-southernnevada.bbb.org' + unescape('%2Flogo%2Ffirst-american-service-group-90041758.js') + "' type='text/javascript'%3E%3C/script%3E"));</script>
        </div>
        <div class='small-5 medium-2 columns' style="flex: 0 0 49%; margin: 0 auto; padding-top: 10px">
            <a target="_blank" href="http://aidsinfo.nih.gov"><img alt="Aids Info Logo" style="display:block;margin:3px auto;" src="<?php echo get_template_directory_uri();?>/assets/assets/images/aids-info-logo.gif" /></a>
        </div>
        <div class='small-5 medium-2 columns' style="flex: 0 0 49%; margin: 0 auto; padding-top: 10px">
            <a target="_blank" href="http://www.cdc.gov/std/"><img alt="CDC Logo" style="display:block;margin:3px auto;" src="<?php echo get_template_directory_uri();?>/assets/assets/images/cdc-logo.png" /></a>
        </div>
        <div class='small-5 medium-2 columns' style="flex: 0 0 49%; margin: 0 auto; padding-top: 10px">
            <a target="_blank" href="http://www.nlm.nih.gov/medlineplus/"><img alt="Medline Plus Logo" style="display:block;margin:3px auto;" src="<?php echo get_template_directory_uri();?>/assets/assets/images/medline-plus-logo.png" /></a>
        </div>
    </div>
    <!-- footer bar -->
    <div class="row footer-bar text-center home-baner">
        <div class='small-12 columns'>
        </div>
        <div class="small-12 medium-4 columns">
            <a href="/terms-of-service">Terms of Service</a>
        </div>
        <div class="small-12 medium-4 columns">
            <?php echo get_theme_mod('footer_copyright')?>
        </div>
        <div class="small-12 medium-4 columns" style='margin-bottom:2em;'>
            <a href="https://www.facebook.com/stdawarelosangeles"><span class="fa fa-facebook social-media-icon"></span></a>
            <a href="https://twitter.com/stdlosangeles"><span class="fa fa-twitter social-media-icon"></span></a>
            <a href="https://plus.google.com/b/114285051847644653725/dashboard/overview/"><span class="fa fa-google-plus social-media-icon"></span></a>

        </div>
    </div>
    <div id="sent"></div>
</footer>
</body>

<script>
    $("p").each(function() {
        var i=0;
        if($( this ).text().length == 0 && $(this).children().length == 0){
            $( this ).remove();
        }
    });
    $(' [title="GET TESTED NOW"]').parent().addClass('get-tested-link');
    

    $("#place_order").click(function() {
        if(form_validation() != 0){
            return false;
        }
        var post = $("#new_order").serialize();
        $.post("<?php echo site_url()?>/get_tested_now", post)
            .done(function(data) {
                if (data.trim().length <0)
                {
                    $('#validation_info').css('display', 'block');
                    $("#errors").children().html("error");
                }
                else {
                    $('#validation_info').css('display', 'block');
                    $("#errors").children().html("Order was send");
                    $("#errors").css('background-color', '#2074a8');
                    $("#place_order").prop("disabled", true);

                }
                console.log(data);
            });

        return false;
    });
    
    function form_validation() {
        var first_name = $('#order_first_name').val();
        var last_name = $('#order_last_name').val();
        var order_address1 = $('#order_address1').val();
        var order_city = $('#order_city').val();
        var order_state = $('#order_state').val();
        var order_zip = $('#order_zip').val();
        var order_email = $('#order_email').val();
        var order_phone = $('#order_phone').val();
        var order_date_of_birth = $('#order_date_of_birth').val();
        var gender = $('[name="order[gender]"]').val();

        $('input').css('border', '1px solid #cacaca');
        $('#order_state').css('border', '1px solid #cacaca');
        var errors =[];

        if(first_name.length < 3){
            $('#order_first_name').css('border','solid 1px red');
            errors[1] = "<strong>First Name</strong> is a required field.";
        }

        if(last_name.length < 3){
            $('#order_last_name').css('border','solid 1px red');
            errors[2] = "<strong>Last Name</strong> is a required field.";
        }

        if(order_address1.length < 3){
            $('#order_address1').css('border','solid 1px red');
            errors[3] = "<strong>Billing Address</strong> is a required field.";
        }

        if(order_city.length < 2){
            $('#order_city').css('border','solid 1px red');
            errors[4] = "<strong>Town / City</strong> is a required field.";
        }

        if(order_state.length < 2){
            $('#order_state').css('border','solid 1px red');
            errors[5] = "<strong>State</strong> is a required field.";
        }

        if(order_zip.length < 2){
            $('#order_zip').css('border','solid 1px red');
            errors[6] = "<strong>Zip</strong> is a required field.";
        }

        if(order_email.length < 3){
            $('#order_email').css('border','solid 1px red');
            errors[7] = "<strong>Email Address</strong> is a required field.";
        }

        if(order_phone.length != 10){
            $('#order_phone').css('border','solid 1px red');
            errors[8] = "<strong>Phone</strong> is a required field.";
            errors[9] = "Please enter a valid phone number, in 10 digit format.";
        }

        if(order_date_of_birth.length < 3){
            $('#order_date_of_birth').css('border','solid 1px red');
            errors[10] = "<strong>Date of Birth</strong> is a required field.";
        }

        if(errors.length>0){
            $('#validation_info').css('display', 'block');
            var ul = $('#errors').children().children();
            console.log(ul);
            ul.empty();
            for (var i=1; i<errors.length; i++){
                if(errors[i]){
                    ul.append('<li>'+errors[i]+'</li>');
                }

            }
            return 1;
        } else {
            return 0;
        }

    }

</script>

<?php wp_footer();?>
</html>
