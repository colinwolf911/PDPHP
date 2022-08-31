<?php
//http content 
$payload=json_encode([
   "title"=>"update title"
]);

//array for string 
$options=[
   "http"=>[
      "method"=>"PATCH",
      "header"=>"Content-type: application/json;charset=UTF-8\r\n"."Accept-language: en",
      "content"=>$payload
   ]
   ];
   $context=stream_context_create($options);
   $data=file_get_contents("https://jsonplaceholder.typicode.com/todos/1",false,$context);
   var_dump($data);
   print_r($http_response_header);


//'https://jsonplaceholder.typicode.com/todos/1'
//$data=file_get_contents(
 //  "https://jsonplaceholder.typicode.com/todos/1"
//);


//var_dump($data);

?>