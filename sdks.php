<?php
// reference :https://stripe.com/docs/development
//api curl https://stripe.com/docs/api/customers
//https://api.stripe.com/v1/customers create a customer
//your secret keys

$api_key="sk_test_51LcNCjKwrP2uPo8XEpePCGYwmsORxteJTEl8qaoGeZ2IJhNHGWbbkHDX6XOdiB3lKE8SBg7nZJopDkTODmYmaWMu000MbQ2zgG";

$data=[
    'name'=>'Alice',
    'email'=>'Alice@example.com'
    

];

//curl code for api base
$ch=curl_init();

curl_setopt_array($ch,[
    CURLOPT_URL=>'https://api.stripe.com/v1/customers',//request 
    CURLOPT_RETURNTRANSFER=>true,
    CURLOPT_POSTFIELDS=>http_build_query($data), //encode the payload need an auth which need api key
    CURLOPT_USERPWD=>$api_key

]);


$data=curl_exec($ch);

curl_close($ch);

var_dump($data);



?>