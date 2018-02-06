<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27.12.2016
 * Time: 12:21
 */
 

?>
 <div class="row home-baner">
            <div class="large-8 large-offset-2 columns">

                <h3 class="text-center">Find an STD Testing Lab Near You</h3>
                <p>Note that these test centers cannot accept payment for any tests.  Once you place an order online, we will send you a lab form which you can take into the lab for a quick test with complete privacy.</p>

                <form class="zip-search text-center" accept-charset="UTF-8" method="get">
                    <input name="utf8" type="hidden" value="&#x2713;" />
                    <input type="text" name="zip" id="zip" placeholder="Zip Code" class="zipcode-input" />
                    <input type="submit" name="commit" value="Search" class="search button" />
                </form>
            </div>
        </div>

        <div class="row home-baner">
            <div class="small-12 medium-6 large-5 columns">
				<ul class="test-centers-lab-list text-left no-bullet">
                <!-- lab list -->
					<?php //foreach($data['table'] as $value): ;?>
					<?php echo $data['table']?>
				</ul>
            </div>


            <div class="small-12 medium-6 large-7 columns">
                <!-- lab map -->
                <div id="map" class="test-centers-map">
                    <div id="geo-mashup">
                        <div id="map_canvas" style="width: 100%; height: 100%"></div>
                    </div>
                </div>
            </div>

        </div>


    </div>
	
	<script type="text/javascript" src="<?php echo JTIT_URL?>assets/js/map.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCH41rA4F_17yMiZD_VoiwEHUZwmVnHQqI&sensor=false&callback=initialize"></script>