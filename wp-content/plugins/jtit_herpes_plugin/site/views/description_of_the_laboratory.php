        <?php $url = 'https://www.stdaware.com/api/v1/labs/';
		$url.= $_REQUEST['zip']; 
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($curl);
        curl_close($curl);
        $parsed=json_decode($json,true);
        $labs = str_replace('\"', '"', $parsed['labs']);
        $labs_decoded = json_decode($labs,true);

       foreach ($labs_decoded as $key => $value) {
				$value['zip'];
			if($value['zip'] == $_REQUEST['zip']){
            echo '
                <span><h1>'.(string)$value['site_name'].'</h1></span><span class="label21"><p style="margin-bottom: 0px"> '.(string)$value['address'].', '.(string)$value['address2'].'<br> '.(string)$value['city'].', '.(string)$value['state'].' '.(string)$value['zip'].'<br><br></p></span><span class="label333"><p><strong>Phone:</strong> '.(string)$value['routing_lab_phone']. '</p></span><span class="label31"><p><strong>Hours:</strong> '.(string)$value['operation_hours'].'</p></span>
				<p><button name="button" type="submit" class="select-test-center1 btn btn-primary" id="981">Choose This Location</button>
					</p>';
                    }
		}
?>