<?php
session_start();
$_SESSION['zip'] = $_REQUEST['zip'];


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

        foreach ($labs_decoded as $key => $value) {
            if($value['zip'] == $_REQUEST['zip']){
            $laboratory = '
                <h6 style="margin-bottom: 7px">Chosen Location</h6>
                <span><p style="margin-bottom: 15px">'.(string)$value['site_name'].'</p></span><span class="label21"><p style="margin-bottom: 5px"> '.(string)$value['address'].', '.(string)$value['address2'].'<br/> '.(string)$value['city'].', '.(string)$value['state'].' '.(string)$value['zip'].'</p></span><span class="label333"><p> '.(string)$value['fax']. '</p></span><span class="label31"><p> '.(string)$value['operation_hours'].'</p></span>
                <a type="button" class="button" href="/find_a_lab">Change Location</a>
                <input type="hidden" name="order[lab_id]" value="'.(string)$value['lab_id'].'">
                ';
                    }
        }

        echo $laboratory;