<?php
$number = $_POST['From'];
$body = $_POST['BODY'];

header('Content-Type: text/xml');
?>

<Response>
<Message>
Hello <?php echo $number ?>
You said <?php echo $body ?>
</Message>
</Response>