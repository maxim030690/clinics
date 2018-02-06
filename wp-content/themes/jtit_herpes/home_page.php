<?php
$city = get_theme_mod('city')?get_theme_mod('city'):'Los Angeles';
$img = get_theme_mod('front_page_img')?get_theme_mod('front_page_img'): get_template_directory_uri().'assets/doctor3.jpg';
?>
<!-- cover image -->
<section class="cover-image-section">
    <div class="row home-baner">
        <div class="cover-image-container large-12 columns" style="background-image: url(<?php echo $img;?>);">
            <div class="cover-image-text">
                <h1 style='font-size:1.3em; font-family: "Noto Sans", Arial, sans-serif;'>Fast & Affordable STD Testing In <?php echo $city;?></h1>
                <ul class="fa-ul hide-for-small-only">
                    <li class="li-home"><i class="fa-li fa fa-check" area-hidden="true"></i><strong>100% Confidential</strong> STD Testing, Privacy Guaranteed</li>
                    <li class="li-home"><i class="fa-li fa fa-check" area-hidden="true"></i><strong>FDA Approved</strong> STD Tests using the Most Reliable Testing Available</li>
                    <li class="li-home"><i class="fa-li fa fa-check" area-hidden="true"></i><strong>Same Day</strong> Testing Available, Get Tested Today</li>
                    <li class="li-home"><i class="fa-li fa fa-check" area-hidden="true"></i><strong>Fast 5 Minute</strong> STD Tests, No Waiting Required</li>
                    <li class="li-home"><i class="fa-li fa fa-check" area-hidden="true"></i><strong>Most Affordable</strong> STD Tests on the Internet</li>
                    <li class="li-home"><i class="fa-li fa fa-check" area-hidden="true"></i><strong>54 labs</strong> in the <?php echo get_theme_mod('city')?> area</li>
                </ul>
                <ul class="fa-ul show-for-small-only">
                    <li class="li-home"><i class="fa-li fa fa-check" area-hidden="true"></i><strong>100% Confidential</strong> STD Testing</li>
                    <li class="li-home"><i class="fa-li fa fa-check" area-hidden="true"></i><strong>FDA Approved</strong> STD Tests</li>
                    <li class="li-home"><i class="fa-li fa fa-check" area-hidden="true"></i><strong>Same Day</strong> Testing Available</li>
                    <li class="li-home"><i class="fa-li fa fa-check" area-hidden="true"></i><strong>Fast 5 Minute</strong> STD Tests</li>
                    <li class="li-home"><i class="fa-li fa fa-check" area-hidden="true"></i><strong>Most Affordable</strong> STD Tests on the Internet</li>
                    <li class="li-home"><i class="fa-li fa fa-check" area-hidden="true"></i><strong>54 labs</strong> in the <?php echo get_theme_mod('city')?> area</li>
                </ul>
                <a href="/tests-and-pricing" class="button">View Our Tests and Prices</a>
            </div>
        </div>
    </div>
</section>
<?php
require_once 'sections/how_it_works_section.php';
require_once 'sections/doctor_recommended_panel.php';
require_once 'sections/patient_recommended_service.php';
require_once 'sections/clinic_locations_map.php';
require_once 'sections/city_description.php';
require_once 'sections/stats_section.php';
require_once 'sections/city_and_sexual_health_information.php';




