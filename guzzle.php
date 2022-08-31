<?php
require __DIR__."/vendor/autoload.php";

$payload=json_encode([
    "title"=>"Updated title"
]);

$headers=[
    "Content-type"=>"application/json; charset=UTF-8"
];

$client = new GuzzleHttp\Client();

//$response=$client->request("GET","https://jsonplaceholder.typicode.com/todos/1");

$response=$client->patch("https://jsonplaceholder.typicode.com/todos/1",[
    "headers"=>$headers,
    "body"=>$payload
]);

//response to the object
var_dump($response->getStatusCode());

//acess header
var_dump($response->getHeader("Content-type"));
//the below is the array it could be 
var_dump((string)$response->getBody());




//payload
/*$payload=json_encode([
    "title"=>"Updated title"
    
]);
$headers=[
    "Content-type"=>"application/json; charset=UTF-8"
];



$res = $client->request('GET', "https://jsonplaceholder.typicode.com/todos/1"
);
echo $res->getStatusCode();
// "200"
echo $res->getHeader('content-type')[0];
// 'application/json; charset=utf8'
echo $res->getBody();


//$response=$client->request("GET","https://jsonplaceholder.typicode.com/todos/1");
//$response=$client->get("GET","https://jsonplaceholder.typicode.com/todos/1");
$response=$client->PATCH("GET","https://jsonplaceholder.typicode.com/todos/1",[
    "headers"=>$headers,
    "body"=>$payload
]);

var_dump($response->getStatusCode());
var_dump($response->getHeaders("Content-type"));

var_dump((string)$response->getBody());


*/


?>