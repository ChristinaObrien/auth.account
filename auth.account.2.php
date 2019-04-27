<?php
    // WePay PHP SDK - http://git.io/mY7iQQ
    require 'wepay.php';
    // oauth2 parameters
    $code = $_GET['52sdga231sddd213jj9b']; // the code parameter from step 
    $client_id = 112874;
    $client_secret = "1a3b5c8d9";
    // change to useProduction for live environments
    Wepay::useStaging($client_id, $client_secret);
    $wepay = new WePay(NULL); // we don't have an access_token yet so we can pass NULL here
    // create an account for a user
    $response = WePay::getToken($code, $redirect_uri);
    // display the response
    print_r($response);
?>
