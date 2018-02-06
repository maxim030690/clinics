<?php




$check = true;

?>

<?php if(!$check) :?>

    <!-- std testing you can trust -->
    <div class="text-center light-grey-bg section-padding">
        <h3>STD Testing You Can Trust</h3>
        <div class="row test-pricing-icons text-center">
            <div class="small-12 medium-4 medium-offset-2 columns test-pricing-icons-col">
                <div class="icon-and-heading">
                    <img src="<?php echo get_template_directory_uri();?>/assets/icons/tests_pricing_icon1.svg" class="test-pricing-icon" alt="computer">
                    <p>The #1 online STD testing destination</p>
                </div>
                <div class="icon-and-heading">
                    <img src="<?php echo get_template_directory_uri();?>/assets/icons/tests_pricing_icon2.svg" class="test-pricing-icon" alt="file">
                    <p>Secure, confidential, and discreet</p>
                </div>
            </div>
            <div class="small-12 medium-4 columns test-pricing-icons-col">
                <div class="icon-and-heading">
                    <img src="<?php echo get_template_directory_uri();?>/assets/icons/tests_pricing_icon3.svg" class="test-pricing-icon" alt="phone">
                    <p>Contact us anytime at <strong>(323) 503-4597</strong></p>
                </div>
                <div class="icon-and-heading">
                    <img src="<?php echo get_template_directory_uri();?>/assets/icons/results.svg" class="test-pricing-icon" alt="test results">
                    <p>Quick results! Get yours within 2-3 business days</p>
                </div>
            </div>

        </div>
    </div>

    <!-- test options -->
    <div class="test-options-section text-center">
        <div class="row">

            <div class="small-12 columns">

                <!-- 10 test panel -->
                <div class="eight-test-panel">
                    <h4 class="text-left">10 Test Panel</h4>
                    <div class="bordered-box-content">
                        <div class="row">
                            <div class="small-12 medium-7 columns text-left">
                                <h5>Doctor Recommended Comprehensive 10-Test Panel</h5>
                                <p>Our 10-Test panel screens for the most common STDs in sexually active individuals.  Each test is FDA approved and utilizes the most state of the art testing techniques to ensure STD Aware <?php echo get_theme_mod('city')?> continues to provide the best STD testing experience for our patients.</p>
                                <p>We've got the STD testing process down to a science.  Choose the 10 Test Panel below, drop by a clinic minutes from your home or office for a quick, private test and receive the results discretely 1-2 days later.</p>
                                <div class="row disease-list">
                                    <div class="small-12 medium-6 text-left">
                                        <ul class="fa-ul">
                                            <li><i class="fa-li fa fa-check-circle-o" aria-hidden="true"></i>Chlamydia</li>
                                            <li><i class="fa-li fa fa-check-circle-o" aria-hidden="true"></i>Gonorrhea</li>
                                            <li><i class="fa-li fa fa-check-circle-o" aria-hidden="true"></i>Herpes 1</li>
                                            <li><i class="fa-li fa fa-check-circle-o" aria-hidden="true"></i>Herpes 2</li>
                                            <li><i class="fa-li fa fa-check-circle-o" aria-hidden="true"></i>HIV 1</li>
                                        </ul>
                                    </div>
                                    <div class="small-12 medium-6 text-left">
                                        <ul class="fa-ul">
                                            <li><i class="fa-li fa fa-check-circle-o" aria-hidden="true"></i>Hepatitis A</li>
                                            <li><i class="fa-li fa fa-check-circle-o" aria-hidden="true"></i>Hepatitis B</li>
                                            <li><i class="fa-li fa fa-check-circle-o" aria-hidden="true"></i>Hepatitis C</li>
                                            <li><i class="fa-li fa fa-check-circle-o" aria-hidden="true"></i>Syphilis</li>
                                            <li><i class="fa-li fa fa-check-circle-o" aria-hidden="true"></i>HIV 2</li>
                                        </ul>
                                    </div>
                                </div>

                                <br />

                                <div class="text-center">

                                    <div class="eight-test-panel-pricing">
                                        <div class="pricing-top">
                                            <h5>Sale Price</h5>
                                        </div>
                                        <div class="price-circle">
                                            <p class="dollar-sign-and-price">
                                                <span class="dollar-sign">$</span>
                                                <span class="price">220</span>
                                            </p>
                                        </div>
                                        <div class="pricing-tagline">
                                            <p>A $493 Value</p>
                                            <img src="<?php echo get_template_directory_uri();?>/assets/auth_seal.gif" alt="authorize.net">
                                        </div>
                                    </div>

                                    <a href="/add_test?product_id=3" class="button order-now-btn">Order Now</a>
                                </div>

                            </div>
                            <div class="small-12 medium-5 columns hide-for-small-only">


                                <div class="fda-approved-header">
                                    <div class="fda-approved-circle">
                                        <p class="fda-approved-text">
                                            <span class="fda">FDA</span><br>Approved
                                        </p>
                                    </div>
                                    <p class="fda-heading-text text-left">STD Testing<br>Satisfaction Guaranteed</p>
                                </div>



                                <div class="patient-reviews-container">
                                    <div class="orbit reviews text-center" role="region" aria-label="Patient Reviews" data-orbit>
                                        <h5>Overall Patient Rating: <br />4.8/5.0</h5>
                                        <img src="<?php echo get_template_directory_uri();?>/assets/icons/stars.svg" alt="rating">
                                        <ul class="orbit-container">
                                            <button class="orbit-previous">&#9664;&#xFE0E;</button>
                                            <button class="orbit-next">&#9654;&#xFE0E;</button>
                                            <li class="is-active orbit-slide">
                                                <p class="review">"STD aware had easy testing and a lot of locations to choose from. They really simplified a stressful experience for me.”</p>
                                            </li>
                                            <li class="orbit-slide">
                                                <p class="review">“Would order again. Website is easy to use and there were a lot of options near me for testing centers.”</p>
                                            </li>
                                        </ul><br>
                                        <a href="//www.shopperapproved.com/reviews/stdaware.com/" onclick="var nonwin=navigator.appName!='Microsoft Internet Explorer'?'yes':'no'; var certheight=screen.availHeight-90; window.open(this.href,'shopperapproved','location='+nonwin+',scrollbars=yes,width=620,height='+certheight+',menubar=no,toolbar=no'); return false;"><img src="https://c683207.ssl.cf2.rackcdn.com/14426-r.gif" style="border: 0" alt="" oncontextmenu="var d = new Date(); alert('Copying Prohibited by Law - This image and all included logos are copyrighted by Shopper Approved \251 '+d.getFullYear()+'.'); return false;"></a>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

                <!-- individual tests -->
                <div class="individual-tests">
                    <h4 class="text-left">Individual Tests</h4>
                    <div class="bordered-box-content text-left">
                        <p>We offer individual tests options for individuals only concerned with a single infection or retesting to check if a recent infection has cleared.</p>
                        <h5>Please Select Your Tests Below:</h5>

                        <form action="/add_test" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="D68HQaWmqjcyixIay5RRaidIAi+7qi5zE+G4FkFfrG13prtsS4AmIjTR+BNWkiL90M37q6zuzk3bZ/6PHWYiwg==" />
                            <ul class="individual-test-list no-bullet">
                                <li>
                                    <div class="individual-test-option">
                                        <input type="checkbox" name="product-ids[]" id="gonorrhea" value="29">
                                        <label for="gonorrhea">Gonorrhea <span class="price">$80</span></label>
                                    </div>
                                    <div class="individual-test-option">
                                        <input type="checkbox" name="product-ids[]" id="chlamydia" value="26">
                                        <label for="chlamydia">Chlamydia <span class="price">$80</span></label>
                                    </div>
                                    <div class="individual-test-option">
                                        <input type="checkbox" name="product-ids[]" id="herpes1" value="36">
                                        <label for="herpes1">Herpes 1 <span class="price">$70</span></label>
                                    </div>
                                    <div class="individual-test-option">
                                        <input type="checkbox" name="product-ids[]" id="herpes2" value="69">
                                        <label for="herpes2">Herpes 2 <span class="price">$70</span></label>
                                    </div>
                                    <div class="individual-test-option">
                                        <input type="checkbox" name="product-ids[]" id="syphilis" value="71">
                                        <label for="syphilis">Syphilis <span class="price">$70</span></label>
                                    </div>
                                    <div class="individual-test-option">
                                        <input type="checkbox" name="product-ids[]" id="hepatitis-a" value="33">
                                        <label for="hepatitis-a">Hepatitis A <span class="price">$20</span></label>
                                    </div>
                                    <div class="individual-test-option">
                                        <input type="checkbox" name="product-ids[]" id="hepatitis-b" value="34">
                                        <label for="hepatitis-b">Hepatitis B <span class="price">$20</span></label>
                                    </div>
                                    <div class="individual-test-option">
                                        <input type="checkbox" name="product-ids[]" id="hepatitis-c" value="35">
                                        <label for="hepatitis-c">Hepatitis C <span class="price">$20</span></label>
                                    </div>

                                    <div class="individual-test-option">
                                        <input type="checkbox" name="product-ids[]" id="hiv" value="1">
                                        <label for="hiv">HIV 1/2 Antibody <span class="price">$70</span></label>
                                    </div>

                                    <div class="individual-test-option">
                                        <input type="checkbox" name="product-ids[]" id="hiv-early" value="2">
                                        <label for="hiv-early">HIV Early Detection <span class="price">$150</span></label>
                                    </div>

                                </li>
                            </ul>
                            <div class="text-right">
                                <input type="submit" class="get-tested-now-btn button" value="Get Tested Now" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- online testing by stdaware -->
    <div class="test-pricing-questions text-center light-grey-bg">
        <h3>Online Testing by STDAware</h3>

        <div class="test-pricing-question">
            <div class="icon-container">
                <img src="<?php echo get_template_directory_uri();?>/assets/icons/tests_pricing_q1.svg" class="heading-icon" alt="location">
            </div>
            <h5>Why Use stdawarelosangeles.com?</h5>
            <p>We have worked hard to provide the #1 STD testing experience for the best price.  Our services are private and completely confidential.  STD Aware has over 4000 testing locations across the US so you never have to go far to get peace of mind.  We know how stressful waiting for testing results can be so you can rest assured results will be delivered in 1-2 days electronically and securely.  All positive test results are double checked and a doctor consultation is available to you, at no charge.  Our testing procedures have been developed by a team of physicians and experts and are all FDA approved.</p>
        </div>

        <div class="test-pricing-question">
            <div class="icon-container">
                <img src="<?php echo get_template_directory_uri();?>/assets/icons/tests_pricing_q2.svg" class="heading-icon" alt="computer">
            </div>
            <h5>How Does it Work?</h5>
            <p>We make testing fast, convenient and easy.  Simply select a test on the site and you will be directed to choose the lab location most convenient for you.  Submit your payment online and we'll immediately email you your documents with your required test code.  Bring this form into your chosen lab location at any time during business hours and testing takes less than 5 minutes.  Within 2 days your results will be securely emailed to you along with contact information for your free consultation should you test positive. </p>
        </div>

        <div class="test-pricing-question">
            <div class="icon-container">
                <img src="<?php echo get_template_directory_uri();?>/assets/icons/tests_pricing_q3.svg" class="heading-icon" alt="document">
            </div>
            <h5>What's Your Privacy Policy?</h5>
            <p>Our patient's privacy is our top priority.  We will never share, sell, or misuse your personal information.  STDAware  <?php echo get_theme_mod('city')?> collects address information for billing purposes only, your results are securely and privately emailed to the email address you order with.  Our lab locations process a wide variety of testing procedures so you can be sure that nobody will know why you're there.  All billing is handled discretely as well, your charge will show up as a non descript item.</p>
        </div>

        <div class="test-pricing-question">
            <div class="icon-container">
                <img src="<?php echo get_template_directory_uri();?>/assets/icons/tests_pricing_q4.svg" class="heading-icon" alt="clinics">
            </div>
            <h5>How Do I Set an Appointment?</h5>
            <p>There is absolutely no appointment necessary, simply order your test online, select the location you'd like to go into and go in with your printed out test form.</p>
        </div>
    </div>


<?php else:?>


    <div class="checkout-container">
        <div class="row">
            <div class="small-12 columns">
                <h3>Checkout</h3>
                <p>Please note that we only collect your address for credit card billing purposes - we will never send anything to your home address.</p>
                <p>When you submit your order, you'll receive an email with the paperwork you need to bring with you to the lab location you have chosen.</p>
            </div>
        </div>

        <form id="search" action=""></form>
        <form class="new_order" id="new_order" action="/checkout3" accept-charset="UTF-8" method="post">
            <div class="row" id="validation_info">
                <div class="small-12 large-12 columns">
                    <!-- billing details -->
                    <div id="errors" class="checkout-section">
                        <div class="checkout-section-content">
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="small-12 large-7 columns">

                    <div class="checkout-section">
                        <h5>1. Select Testing Center</h5>
[jtit_find_select_testing_center]
                    </div>
                    <!-- billing details -->
                    <div class="checkout-section">
                        <h5>2. Patient Information</h5>
                        <div class="checkout-section-content">
                            <fieldset>
                                <legend>Address</legend>
                                <div class="row">
                                    <!-- first name -->
                                    <div class="small-12 medium-6 columns">
                                        <label for="order_first_name">First Name<span class="required-field">*</span></label><input type="text" name="order[first_name]" id="order_first_name" />
                                    </div>
                                    <!-- last name -->
                                    <div class="small-12 medium-6 columns">
                                        <label for="order_last_name">Last Name<span class="required-field">*</span></label><input type="text" name="order[last_name]" id="order_last_name" />
                                    </div>
                                </div>
                                <div class="row">
                                <div class="small-12 medium-12 columns">
                                    <label for="order_address1">Billing Address<span class="required-field">*</span></label><input type="text" name="order[address1]" id="order_address1" />
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 medium-12 columns">
                                <label for="order_city">City<span class="required-field">*</span></label><input type="text" name="order[city]" id="order_city" />
                                        </div>
                                </div>
                                    <div class="row">
                                    <!-- state -->
                                    <div class="small-12 medium-6 columns">
                                        <label for="order_state">State<span class="required-field">*</span></label><select name="order[state]" id="order_state"><option value="">Select a state...</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                            <option value="PR">Puerto Rico</option></select>
                                    </div>
                                    <!-- zip code -->
                                    <div class="small-12 medium-6 columns">
                                        <label for="order_zip">Zip Code<span class="required-field">*</span></label><input type="text" name="order[zip]" id="order_zip" />
                                    </div>
                                </div>
                            </fieldset>
                            <hr>
                            <fieldset>
                                <legend>Personal Information</legend>
                                <div class="row">
                                    <div class="small-12 medium-6 columns">
                                        <!-- email -->
                                        <label for="order_email">Email Address<span class="required-field">*</span></label><input type="text" name="order[email]" id="order_email" />
                                        <!-- gender -->
                                        <label for="gender">Gender<span class="required-field">*</span></label><input type="radio" value="true" name="order[gender]" id="order_gender_true" /><label for="order_gender_true">Male</label><input type="radio" value="false" name="order[gender]" id="order_gender_false" /><label for="order_gender_false">Female</label>
                                    </div>
                                    <div class="small-12 medium-6 columns">
                                        <!-- phone number -->
                                        <label for="order_phone">Phone Number<span class="required-field">*</span></label><input type="text" name="order[phone]" id="order_phone" />
                                        <!-- date of birth -->
                                        <label for="order_date_of_birth">Date of Birth<span class="required-field">*</span></label><input type="date" name="order[date_of_birth]" id="order_date_of_birth" />
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <input type="submit" class="button place-order-btn order-now-btn" id="place_order" value="Place Order" />
                </div>
                <!-- review order -->
                [jtit_shopping_card]

            </div>
        </form>
    </div>


<?php endif;?>



