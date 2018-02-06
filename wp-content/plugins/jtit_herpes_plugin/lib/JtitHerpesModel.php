<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 23.12.2016
 * Time: 15:26
 */
class JtitHerpesModel
{
    public function set_affiliate_ID($post){
        $option_name = 'affiliate_ID';
        $newvalue = $post['affiliate_ID'];
        if ( get_option($option_name) ) {
            update_option($option_name, $newvalue);
        } else {
            $deprecated=' ';
            $autoload='yes';
            add_option($option_name, $newvalue, $deprecated, $autoload);
        }
    }

    public function set_city_name($post){
        $option_name = 'city_name';
        $newvalue = $post['city_name'];
        if ( get_option($option_name) ) {
            update_option($option_name, $newvalue);
        } else {
            $deprecated=' ';
            $autoload='yes';
            add_option($option_name, $newvalue, $deprecated, $autoload);
        }
    }

    public function set_order_url($post){
        $option_name = 'order_url';
        $newvalue = $post['order_url'];
        if ( get_option($option_name) ) {
            update_option($option_name, $newvalue);
        } else {
            $deprecated=' ';
            $autoload='yes';
            add_option($option_name, $newvalue, $deprecated, $autoload);
        }
    }

    public function sent_order($post){

        if(!get_option('order_url')){
            $url = JTIT_URL."resources/responce.php";
        } else {
            $url = get_option('order_url');
        }

        $ch = curl_init( $url );

		/* Yura 22.02.2017 start */
        //$data = json_encode( array( "data"=> $post ) );
		//$post['affiliate'] = get_option('affiliate_ID');
		
		$data['affiliate'] = get_option('affiliate_ID');
		$data['testID'] = $post['product_id'];
	
		if (!session_id())
            session_start();
		
		if (isset($_SESSION['center']) && !empty($_SESSION['center'])) $data['labID'] = $_SESSION['center']; 
		
		$data = json_encode( array( "data"=> $data ) );
		//var_dump($url,$data);exit;
		
		/* Yura 22.02.2017 end */
		
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public function jtit_find_lab_sortzip(){
        $zip = $_REQUEST["zip"];
	//$sub = $_POST["submitform"];
	$zip = 36016;

	if(isset($zip)){

	$url = JTIT_URL."resources/cityzip.csv";
    $csv = file_get_contents($url);
    $data = str_getcsv($csv);

    $find = '<script type="text/javascript">
    	
        function initialize() {
            var latlng = new google.maps.LatLng(39.333510, -95.809389);
            var myOptions = {
                zoom: 4,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"),
        myOptions);';
        $row = 0;
        $coord_array = array();
	if (($handle = fopen(JTIT_URL."resources/cityzip.csv", "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $num = count($data);
		       // echo "<p> $num fields in line $row: <br /></p>\n";
		        $row++;
		        $arr = array();
		        for ($c=0; $c < $num; $c++) {
		            //echo $data[$c] . "<br />\n";
		            $arr[] = $data[$c];
		        }
		        $coord_array[] = array('state' => $arr[0], 'city' => $arr[1], 'postal' => $arr[2], 'latitude' => $arr[3], 'longitude' => $arr[4]);
		    	}
		    		fclose($handle);
				}
			$countc = count($coord_array);	//var_dump($arr);
		    if($countc > 1){
		    		//var_dump($coord_array);
            for ($i = 1; $i < $countc ; $i++){
            				if((float)$coord_array[$i]['postal'] == $zip){
                               $find.= 'var coords = [ '.(float)$coord_array[$i]['latitude'].' , '.(float)$coord_array[$i]['longitude'].'];
            					var marker = new google.maps.Marker({
                                        position: new google.maps.LatLng('.$coord_array[$i]['latitude'].' , '.(float)$coord_array[$i]['longitude'].'),
                                        map: map,
                                        zIndex: 10
                                });
            					 var contentString = " '.(string)$coord_array[$i]['state'].' , '.(string)$coord_array[$i]['city']. ' , '.(string)$coord_array[$i]['postal'].' ";
                                addInfoWindow(marker, contentString);
            
                               function addInfoWindow(marker, message) {
                                  var infoWindow = new google.maps.InfoWindow({
                                      content:  message
                                  });
                                  google.maps.event.addListener(marker, \'click\', function () {
                                      infoWindow.open(map, marker);
                                  });
                                
							}';
						}
						}
						$find.= '}';
					}
							$find.='
        
        var myKey = "AIzaSyCH41rA4F_17yMiZD_VoiwEHUZwmVnHQqI";
        function loadScript() {
            var script = document.createElement(\'script\');
            script.type = \'text/javascript\';
            script.src = "https://maps.googleapis.com/maps/api/js?key=" + myKey + "&sensor=false&callback=initialize";
            document.body.appendChild(script);
        }
    </script>';
	}
//	echo $find;
	return $find;
    }

    public function jtit_find_lab_table(){
		
		$url = 'https://www.stdaware.com/api/v1/labs/';
		if (isset($_REQUEST['city']) && $_REQUEST['city'] != ''){
		$url_extra = $_REQUEST['city']; //TODO: fetch from wp_options
		}else $url_extra = get_option('city_name');
		if (isset($_GET['zip']) && $_GET['zip'] != '') $url_extra = $_GET['zip'];
		
		
										
		$url.= $url_extra;
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json'));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$json = curl_exec($curl);
		curl_close($curl);
		$parsed=json_decode($json,true);
		$labs = str_replace('\"', '"', $parsed['labs']);
		$labs_decoded = json_decode($labs,true);
		$result = '';
	
		
		$locations_var = '[';

		foreach ($labs_decoded as $key=>$value) {
			
			$result .= '
			<li>
				<span class="label12"><a href="/description_of_the_lab?zip='.$value['zip'].'"><p style="margin-bottom: 0px">'.(string)$value['site_name'].'</p></a></span><span class="label21"><p style="margin-bottom: 5px"> '.(string)$value['address'].'  '.(string)$value['address2'].' '.(string)$value['city'].' '.(string)$value['state'].' '.(string)$value['zip'].' '.(string)$value['city']. '</p></span><span class="label31"><p> '.(string)$value['operation_hours'].'</p></span> 

				<button name="button" type="submit" class="select-test-center j-submit-report button" onclick="window.location.href=\'/tests-and-pricing/?center='.$value['zip'].'\'" id="1974">Select This Test Center</button>
				<button name="button" type="submit" class="view-on-map button" data-id="1974" onclick="showOnMap('.$key.');">Go To Map</button>
			</li>
			';

			$content_string = '<span class=\"label1\"><a href="/description_of_the_lab?zip='.$value['zip'].'"><p style=\"margin-bottom: 0px\">'.(string)$value['site_name'].'</p></a></span><span class=\"label2\"><p style=\"margin-bottom: 5px\"> '.(string)$value['address'].'  '.(string)$value['address2'].' '.(string)$value['city'].' '.(string)$value['state'].' '.(string)$value['zip'].' '.(string)$value['city']. '</p></span><span class=\"label3\"><p> '.(string)$value['operation_hours'].'</p></span><span class=\"label4\"><a href=\"/tests-and-pricing\?center='.$value['zip'].'">'.'Select This Test Center'.'</span>';
			$locations_var.= '[\''.$content_string.'\','.$value['latitude'].','.$value['longitude'].'],';
		}
		

		$locations_var = rtrim($locations_var,',');
		$locations_var.= ']';
		echo '<script> var locations = '.$locations_var.'</script>';

		return $result;

    }


    public function set_tests_prices($post){

        $option_name = 'jtit_tests' ;
        $newvalue['chlamydia'] = $post['chlamydia'];
        $newvalue['gonorrhea'] = $post['gonorrhea'];
        $newvalue['herpes_1'] = $post['herpes_1'];
        $newvalue['herpes_2'] = $post['herpes_2'];
        $newvalue['HIV_1'] = $post['HIV_1'];
        $newvalue['hepatitis_A'] = $post['hepatitis_A'];
        $newvalue['hepatitis_B'] = $post['hepatitis_B'];
        $newvalue['hepatitis_C'] = $post['hepatitis_C'];
        $newvalue['syphilis'] = $post['syphilis'];
        $newvalue['HIV_2'] = $post['HIV_2'];
        $newvalue['all_tests'] = $post['all_tests'];
        $newvalue['HIV_Antibody_Test'] = $post['HIV_Antibody_Test'];
        $newvalue['hiv-early'] = $post['hiv-early'];


        if ( get_option($option_name) ) {
            update_option($option_name, $newvalue);
        } else {
            $deprecated=' ';
            $autoload='yes';
            add_option($option_name, $newvalue, $deprecated, $autoload);
        }

    }

    public function add_test($post){


        if (!session_id()){
            session_start();
        }

        $prod_id = array();
        $prod_id = $_SESSION['product_id'];

        if ($prod_id == 'all_tests'){
            add_action( 'template_redirect', function() {
                wp_redirect( site_url().'/get_tested_now', 301 );
                exit;
            } );
            return;
        }

        if ($post['product_id'] == 'all_tests'){
            $_SESSION['product_id'] = $post['product_id'];
            add_action( 'template_redirect', function() {
                wp_redirect( site_url().'/get_tested_now', 301 );
                exit;
            } );
            return;
        }

        if ($post['product_array']){

            $test = get_option('jtit_tests');

            foreach ($post as $item){
                if ($test[$item]){
                    $prod_id[] = $item;
                }
            }
            $_SESSION['product_id'] = $prod_id;

//            $this->sent_order($post);

            add_action( 'template_redirect', function() {
                wp_redirect( site_url().'/get_tested_now', 301 );
                exit;
            } );
            return;
        }

        if(is_array($prod_id)){


            if(in_array($post['product_id'], $prod_id)){
                add_action( 'template_redirect', function() {
                    wp_redirect( site_url().'/get_tested_now', 301 );
                    exit;
                } );
                return;
            }
            $prod_id[] = $post['product_id'];
            $_SESSION['product_id'] = $prod_id;


            add_action( 'template_redirect', function() {
                wp_redirect( site_url().'/get_tested_now', 301 );
                exit;
            } );
            return;
        }


        $prod_id[] = $post['product_id'];
        $_SESSION['product_id'] = $prod_id;

        add_action( 'template_redirect', function() {
            wp_redirect( site_url().'/get_tested_now', 301 );
            exit;
        } );

    }
	
	/* Yura 22.02.2017 start */
	public function redirect_to(){
		add_action( 'template_redirect', function() {
            wp_redirect( site_url(), 301 );
            exit;
        } );
	}
	/* Yura 22.02.2017 end */

    public function search_zip_get_tested_now(){
        $url = 'https://www.stdaware.com/api/v1/labs/';
        $url.= $_SESSION['center']; 
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($curl);
        curl_close($curl);
        $parsed=json_decode($json,true);
        $labs = str_replace('\"', '"', $parsed['labs']);
        $labs_decoded = json_decode($labs,true);

        $laboratory = '';
        if ($labs_decoded){
            foreach ($labs_decoded as $key => $value) {
                $value['zip'];
                if($value['zip'] == $_SESSION['center']){
                    $laboratory = '
                <h6 style="margin-bottom: 7px">Chosen Location</h6>
                <span><p style="margin-bottom: 15px">'.(string)$value['site_name'].'</p></span><span class="label21"><p style="margin-bottom: 5px"> '.(string)$value['address'].', '.(string)$value['address2'].'<br/> '.(string)$value['city'].', '.(string)$value['state'].' '.(string)$value['zip'].'</p></span><span class="label333"><p> '.(string)$value['fax']. '</p></span><span class="label31"><p> '.(string)$value['operation_hours'].'</p></span>
                <a type="button" class="button" href="/find_a_lab">Change Location</a>
                <input type="hidden" name="order[lab_id]" value="'.(string)$value['id'].'">
                ';

                }
            }
        }


        return $laboratory;
    }

}