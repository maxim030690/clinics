<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26.12.2016
 * Time: 17:42
 */

?>
<div class="checkout-container">
        <div class="row">
            <div class="small-12 columns">
                <h3>Checkout</h3>
                <p>Please note that we only collect your address for credit card billing purposes - we will never send anything to your home address.</p>
                <p>When you submit your order, you'll receive an email with the paperwork you need to bring with you to the lab location you have chosen.</p>
            </div>
        </div>

        <form class="new_order" id="new_order" accept-charset="UTF-8" method="post">
            <input name="utf8" type="hidden" value="&#x2713;" />
            <input type="hidden" name="authenticity_token" value="GoZEFksfjrY6DkYLfPUlSC2lwVXSy6G+fpQWS6iDIWJij/g7pTkCozxUrALh81bf2iA40cWPQYC2ElDS9LqvzQ==" />



            <div class="row">
                <div class="small-12 large-7 columns">

                    <div class="checkout-section">
                        <h5>1. Select Testing Center</h5>

                        <div class="checkout-section-content find-lab-section">
                            <h6>Pick A Location <small><a href="/test-centers" style="background-color: transparent">View Map <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></small></h6>
                            <form accept-charset="UTF-8" method="get" action="/find_a_lab">
                                <input type="text" id="zip" placeholder="Zip Code" class="zipcode-input" autocomplete="off">
                                <button name="button" class="search-zip button j-submit-report" >Search</button>
                            </form>
                            <ul class="test-centers-lab-list text-left no-bullet" style="display: none;">

                            </ul>


                        </div>
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
                                        <label for="order_first_name">First Name<span class="required-field">*</span></label>
                                        <input type="text" name="order[first_name]" id="order_first_name" />
                                    </div>

                                    <!-- last name -->
                                    <div class="small-12 medium-6 columns">
                                        <label for="order_last_name">Last Name<span class="required-field">*</span></label>
                                        <input type="text" name="order[last_name]" id="order_last_name" />
                                    </div>
                                </div>


                                <!-- street address -->
                                <label for="order_address1">Billing Address<span class="required-field">*</span></label>
                                <input type="text" name="order[address1]" id="order_address1" />

                                <!-- city -->
                                <label for="order_city">City<span class="required-field">*</span></label>
                                <input type="text" name="order[city]" id="order_city" />

                                <div class="row">

                                    <!-- state -->
                                    <div class="small-12 medium-6 columns">
                                        <label for="order_state">State<span class="required-field">*</span></label>

                                        <select name="order[state]" id="order_state"><option value="">Select a state...</option>
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
                                        <label for="order_zip">Zip Code<span class="required-field">*</span></label>
                                        <input type="text" name="order[zip]" id="order_zip" />
                                    </div>
                                </div>



                            </fieldset>

                            <hr>

                            <fieldset>
                                <legend>Personal Information</legend>

                                <div class="row">
                                    <div class="small-12 medium-6 columns">

                                        <!-- email -->
                                        <label for="order_email">Email Address<span class="required-field">*</span></label>
                                        <input type="text" name="order[email]" id="order_email" />

                                        <!-- gender -->
                                        <label for="gender">Gender<span class="required-field">*</span></label>


                                        <input type="radio" value="true" name="order[gender]" id="order_gender_true" />
                                        <label for="order_gender_true">Male</label>

                                        <input type="radio" value="false" name="order[gender]" id="order_gender_false" />
                                        <label for="order_gender_false">Female</label>
                                    </div>

                                    <div class="small-12 medium-6 columns">

                                        <!-- phone number -->
                                        <label for="order_phone">Phone Number<span class="required-field">*</span></label>
                                        <input type="text" name="order[phone]" id="order_phone" />

                                        <!-- date of birth -->
                                        <label for="order_date_of_birth">Date of Birth<span class="required-field">*</span></label>
                                        <input type="date" name="order[date_of_birth]" id="order_date_of_birth" />

                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>


                    <!-- secure payment -->
                    <div class="checkout-section">
                        <h5>3. Secure Payment</h5>

                        <div class="checkout-section-content checkout-cc-info">
                            <fieldset>


                                <legend class="credit-card-legend">Credit Card</legend>
                                <ul class="credit-cards no-bullet">
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/card_visa.png"></li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/card_mastercard.png"></li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/card_amex.png"></li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/card_discover.png"></li>
                                </ul>

                                <!-- cc number -->
                                <label for="order_cc_number">Credit Card Number<span class="required-field">*</span></label>
                                <input maxlength="19" class="cc-number" size="19" type="text" name="order[cc_number]" id="order_cc_number" />

                                <div class="row">

                                    <!-- cc expiration date -->
                                    <div class="small-12 medium-6 columns">
                                        <label for="cc_expiration_month">Expiration Date<span class="required-field">*</span></label>

                                        <select class="cc-month" name="order[cc_exp_month]" id="order_cc_exp_month"><option value="">Month</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option></select>

                                        <select class="cc-year" name="order[cc_exp_year]" id="order_cc_exp_year"><option value="">Year</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option></select>

                                    </div>

                                    <!-- cvv number -->
                                    <div class="small-12 medium-6 columns">
                                        <label for="order_cc_cvv">CVV Number<span class="required-field">*</span></label>
                                        <input class="cc-cvv" maxlength="4" autocomplete="off" size="4" type="text" name="order[cc_cvv]" id="order_cc_cvv" />
                                    </div>

                                </div>



                                <!-- place order -->

                                <div class="terms-conditions">
                                    <input type="checkbox" name="terms" id="terms">
                                    <label for="terms">I have read and accept the <a href="/terms-of-service" target="_blank">Terms & Conditions</a>.</label>
                                </div>

                                <input type="submit" class="button place-order-btn" id="place_order" value="Place Order" />

                            </fieldset>
                        </div>
                    </div>


                </div>

                <!-- review order -->
                <div class="small-12 large-5 columns">
                    <div class="checkout-section">
                        <h5><i class="fa fa-shopping-cart" area-hidden="true"></i> Shopping Cart</h5>

                        <div class="checkout-section-content">

                            <!-- shopping cart items -->
                            <table class="checkout-shopping-cart-items">
                                <tbody>
                                <tr>
                                    <th><h6>Product</h6></th>
                                    <th><h6>Total</h6></th>
                                </tr>

                                <tr>
                                    <td>10 Test Panel <a class="remove-test-link" href="/remove_test?product_id=3"><i class="fa fa-times"></i></a></td>
                                    <td>$220.00</td>
                                    <input multiple="multiple" value="3" type="hidden" name="order[product_ids][]" id="order_product_ids" />
                                </tr>


                                <tr>
                                    <td><strong>Order Total</strong></td>
                                    <td><strong>$220.00</strong></td>
                                </tr>
                                <tbody>
                            </table>




                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>

    <script type="text/javascript">
        function createLabListItem(obj) {
            if (obj["address2"] == null) {
                obj["address2"] = "";
            }
            li = "<li class=\"lab_" + obj["id"] + "\">" +
                "<h6>" + obj["site_name"] + "</h6>" +
                obj["address"] + " " + obj["address2"] +
                "<br>" +
                obj["city"] + ", " + obj["state"] + " " + obj["zip"] + "<br>" +
                obj["operation_hours"] + "<br>" +
                '<button name="button" type="submit" class="select-test-center button" id="' + obj["id"] + '">Select This Test Center</button>' +
                "</li>";
            return li;
        }
        function searchZip() {
            zipcode = $(".zipcode-input")[0].value;
            $("ul.test-centers-lab-list").empty();
            $("ul.test-centers-lab-list").show();
            $.get("/labs.json?zip=" + zipcode, function(data) {
                $.each(data, function(i, obj) {
                    $("ul.test-centers-lab-list").append(createLabListItem(obj));
                });
            });
        }
        $(function() {
            $('.find-lab-section').on("click", ".select-test-center", function(event){
                event.preventDefault();
                var center_id = $(this).attr("id");
                $(this).remove();
                var labHtml = $(".lab_" + center_id).html();
                labHtml = '<h4>Chosen Location</h4>' + labHtml;
                labHtml = labHtml + '<a type="button" class="button" href="/test-centers">Change Location</a>';
                labHtml = labHtml + '<input type="hidden" name="order[lab_id]" value="' + center_id + '">';
                $(".find-lab-section").html(labHtml);
                //console.log(center_id);
            });
            $("#zipcode").keyup(function(e) {
                e.preventDefault();
                if (e.keyCode == 13) {
                    searchZip();
                }
            });
            $(".search-zip").click(function() {
                event.preventDefault();
                searchZip();
            });
        });
    </script>

