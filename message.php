<?php

include('inc/Services/Twilio.php');

function index(){
   $response = new Services_Twilio_Twiml();
   $response->sms("Reply with the proper UID number");
   echo $response;
}
function manish01(){ 
    $response = new Services_Twilio_Twiml();
    $response->sms("Maths = A, English = A, Science = A"); 
    echo $response;
}
function pratik02(){ 
    $response = new Services_Twilio_Twiml();
    $response->sms("Maths = A, English = A, Science = A"); 
    echo $response;
}
function parag03(){
    $response = new Services_Twilio_Twiml();
    $response->sms("Maths = A, English = A, Science = A"); 
    echo $response;
}

$body = $_REQUEST['Body'];  

$result = preg_replace("/[^A-Za-z0-9]/u", " ", $body); 
$result = trim($result); 
$result = strtolower($result); 

switch ($result) { 
    case 'manish01': 
        manish01(); 
        break; 
    case 'pratik02': 
        pratik02(); 
        break; 
    case 'parag03': 
        parag03(); 
        break; 
    default: 
        index();
}