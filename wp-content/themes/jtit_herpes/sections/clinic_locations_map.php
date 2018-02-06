<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.12.2016
 * Time: 16:00
 */
?>
<section class="homepage-section clinic-locations text-center" onload="loadScript()">
    <h3>54 Conveniently Located Testing Centers In <?php echo get_theme_mod('city')?></h3>
    <p>Find One Close To You</p>
    <div class="row home-baner">
        <div class="small-10 small-offset-1 columns">
            <div id="map" class="map">
                	[jtit_map_main]
                </div>
            
            <form class="zip-search" action="/find_a_lab/" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="&#x2713;" /><input type="text" name="zip" id="zip" placeholder="Zip Code" class="zipcode-input" /><input type="submit" name="commit" value="Find A Lab Near You" class="find-lab button j-submit-report" />
            </form>
            </div>
        </div>
    </div>
</section>