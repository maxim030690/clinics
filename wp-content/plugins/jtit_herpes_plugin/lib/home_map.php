<?php

//header("Location: http://herpes.jointoit.com/find-a-lab");
// die();

function Map_home(){

    $url = JTIT_URL."resources/cityzip.csv";
    $csv = file_get_contents($url);
    $data = str_getcsv($csv);

    $str = '<script type="text/javascript">
        function initialize() {
            var latlng = new google.maps.LatLng(25.763067, -80.193679);
            var myOptions = {
                zoom: 10,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"),
        myOptions);';
    $row = 0;
    $coord_array = [];
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
            if((string)$coord_array[$i]['city'] == 'Miami' && (string)$coord_array[$i]['state'] == 'FL'){
                $str.= 'var coords = [ '.(float)$coord_array[$i]['latitude'].' , '.(float)$coord_array[$i]['longitude'].'];
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
        $str.= '}';
    }
    $str.='
        
        var myKey = "AIzaSyCH41rA4F_17yMiZD_VoiwEHUZwmVnHQqI";
        function loadScript() {
            var script = document.createElement(\'script\');
            script.type = \'text/javascript\';
            script.src = "https://maps.googleapis.com/maps/api/js?key=" + myKey + "&sensor=false&callback=initialize";
            document.body.appendChild(script);
			
        }
    </script>';
    echo $str;
}
?>