<?php
$number = $_POST['From'];
$body = $_POST['BODY'];
header('Content-Type: text/xml');
?>

<Response>
function index(){
   $response = new Services_Twilio_Twiml();
   $response->sms("Reply with the proper UID number");
   echo $response;
function U01233007(){ 
    $response = new Services_Twilio_Twiml();
    $response->sms("Maths = A, English = A, Science = A"); 
    echo $response;
function U01274412(){ 
    $response = new Services_Twilio_Twiml();
    $response->sms("Maths = A, English = A, Science = A"); 
    echo $response;
function U9080602(){ 
    $response = new Services_Twilio_Twiml();
    $response->sms("Maths = A, English = A, Science = A"); 
    echo $response;

$body = $_REQUEST['Body'];  

$result = preg_replace("/[^A-Za-z0-9]/u", " ", $body); 
$result = trim($result); 
$result = strtolower($result); 

switch ($result) { 
    case 'U01233007': 
        U01233007(); 
        break; 
    case 'U01274412': 
        U01274412(); 
        break; 
    case 'U9080602': 
        U9080602(); 
        break; 
    case 'owl': 
        owl(); 
        break; 
    default: 
        index();
} 
<Message>
Hello <?php echo $number ?>
</Message>
</Response>