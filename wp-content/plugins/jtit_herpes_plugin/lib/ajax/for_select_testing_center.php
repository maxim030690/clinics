<?php 

		$url = 'https://www.stdaware.com/api/v1/labs/';
        $url.= $_REQUEST['zip']; 
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($curl);
        curl_close($curl);
        $parsed=json_decode($json,true);
        $labs = str_replace('\"', '"', $parsed['labs']);
        $labs_decoded = json_decode($labs,true);
        if (is_array($labs_decoded) || is_object($valulabs_decodedes)){
		foreach ($labs_decoded as $key=>$value) {
			
			echo '
			<li>
				<span class="label12"><a href="/description_of_the_lab?zip='.$value['zip'].'"><p style="margin-bottom: 0px">'.(string)$value['site_name'].'</p></a></span><span class="label21"><p style="margin-bottom: 5px"> '.(string)$value['address'].'  '.(string)$value['address2'].' '.(string)$value['city'].' '.(string)$value['state'].' '.(string)$value['zip'].' '.(string)$value['city']. '</p></span><span class="label31"><p> '.(string)$value['operation_hours'].'</p></span> 
				<a type="button" class="selbutton select-test-center get_a_lab_zip button" onclick="get_a_lab_zip(\''.$value['zip'].'\')">Select This Test Center</a>
			</li>
			';
		}

	}
			
	