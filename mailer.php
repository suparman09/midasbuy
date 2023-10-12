<?php

/***
 * Coded by @SEWATT | SEWATTHoster.id
 * Please don't change this credit, respect me
 * All codes here are guaranteed security!
 */

// coded by @sewatt
function getClientIP(){
    foreach (array('HTTP_CLIENT_IP',
                'HTTP_X_FORWARDED_FOR',
                'HTTP_X_FORWARDED',
                'HTTP_X_CLUSTER_CLIENT_IP',
                'HTTP_FORWARDED_FOR',
                'HTTP_FORWARDED',
                'REMOTE_ADDR') as $key){
                        if (array_key_exists($key, $_SERVER) === true){
                            foreach (explode(',', $_SERVER[$key]) as $IP){
                                $IP = trim($IP);
                                if (filter_var($IP,
                                            FILTER_VALIDATE_IP,
                                            FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)
                                    !== false) {
                                        return $IP;
                                }
                            }
                        }
    }
};

// coded by @sewatt
$SWATcURL = curl_init();
curl_setopt($SWATcURL, CURLOPT_URL, "https://api.sewatthoster.id/api/?ip=".getClientIP()); 
curl_setopt($SWATcURL, CURLOPT_RETURNTRANSFER, true);
$HasilcURL = curl_exec($SWATcURL); 
             curl_close($SWATcURL);
$HasilcURL = json_decode($HasilcURL,true);

// coded by @sewatt
$json           =   file_get_contents('dash/config.json');
$json_data      =   json_decode($json, true);
$sewattemail    =   $json_data["sewatt_email"];
$sewattnama     =   $json_data["sewatt_nameress"];
$sewattsender   =   $json_data["sewatt_sender"];
$sewattbanner   =   $json_data["sewatt_banner"];

// coded by @sewatt
$ctn            =   $HasilcURL['continent']; // continent
$cn             =   $HasilcURL['country']; // country
$ccd            =   $HasilcURL['code']; // call code
$lat            =   $HasilcURL['latitude']; // latitude
$lon            =   $HasilcURL['longitude']; // longitude
$ipd            =   getClientIP(); // ip address
$flg            =   $HasilcURL['flag']; // flag with country code
$zne            =   $HasilcURL['timezone']; // timezone
$pvd            =   $HasilcURL['isp']; // provider isp

/***
 * Coded by @SEWATT | SEWATTHoster.id
 * Please don't change this credit, respect me
 * All codes here are guaranteed security!
 */

?>