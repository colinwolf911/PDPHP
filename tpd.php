<?php
// reference :https://stripe.com/docs/development
//api curl https://stripe.com/docs/api/customers
//https://api.stripe.com/v1/customers create a customer
//your secret keys

$api_key="ade0cbc8-32c5-5469-d915-ee8c62b98d12";


$data=[
    
    'name'=>'Alice',
    'email'=>'Alice@example.com'

];

//curl code for api base
$ch=curl_init();

curl_setopt_array($ch,[
    CURLOPT_URL=>'https://inventory.dearsystems.com/ExternalApi',//request 
    CURLOPT_RETURNTRANSFER=>true,
    CURLOPT_POSTFIELDS=>http_build_query($data), //encode the payload need an auth which need api key
    CURLOPT_USERPWD=>$api_key

]);


$data=curl_exec($ch);

curl_close($ch);

var_dump($data);



?>