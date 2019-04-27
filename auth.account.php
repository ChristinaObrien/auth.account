<?php
    // WePay PHP SDK - http://git.io/mY7iQQ
    require 'wepay.php';
    // application settings
    $client_id = 112874;
    $client_secret = "1a3b5c8d9";
    $access_token = "1a3b5c8d9";
    // change to useProduction for live environments
    Wepay::useStaging($client_id, $client_secret);
    $wepay = new WePay($access_token);
    // create an account for a user
    $response = $wepay->request('account/create/', array(
        'name'          => 'Account Name',
        'description'   => 'A description for your account.'
    ));
    // display the response
    print_r($response);
?>
view raw
