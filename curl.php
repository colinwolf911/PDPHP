<?PHP
//curl_setopt setting the url 
//request the payload and updating the body

$payload=json_encode([
    "title"=>"updated title",

]);
//contanated the headers
$headers=[
    "Content-type:application/json; charaset=uft-8",
    "Accept-language:en"
];

$ch=curl_init();
/*
curl_setopt($ch,CURLOPT_URL,"https://jsonplaceholder.typicode.com/todos/1");

//RESPONSE AS STRING
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);*/

//part two  setting multiply function
curl_setopt_array($ch,[
    CURLOPT_URL=>"https://jsonplaceholder.typicode.com/todos/1",
    CURLOPT_RETURNTRANSFER=>true,
    //request method
    CURLOPT_CUSTOMREQUEST=>"PATCH",
    CURLOPT_POSTFIELDS=>$payload,
    CURLOPT_HTTPHEADER=>$headers,
    CURLOPT_HEADER=>true

]);

// pass to the handler to a string and assign it as valuable
$data=curl_exec($ch);

//part two getting info for request 
$status_code=curl_getinfo($ch,CURLINFO_HTTP_CODE);
curl_close($ch);
var_dump($status_code);
var_dump($data);
?>