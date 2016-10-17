<?php

include('inc/Services/Twilio.php');

function index(){
   $response = new Services_Twilio_Twiml();
   $response->sms("Reply with the proper UID number");
   echo $response;
}
function manish(){ 
    $response = new Services_Twilio_Twiml();
    $response->sms("Maths = A, English = A, Science = A"); 
    echo $response;
}
function pratik(){ 
    $response = new Services_Twilio_Twiml();
    $response->sms("Maths = A, English = A, Science = A"); 
    echo $response;
}
function parag(){
    $response = new Services_Twilio_Twiml();
    $response->sms("Maths = A, English = A, Science = A"); 
    echo $response;
}

$body = $_REQUEST['Body'];  

$result = preg_replace("/[^A-Za-z0-9]/u", " ", $body); 
$result = trim($result); 
$result = strtolower($result); 

switch ($result) { 
    case 'manish': 
        manish(); 
        break; 
    case 'pratik': 
        pratik(); 
        break; 
    case 'parag': 
        parag(); 
        break; 
    default: 
        index();
}