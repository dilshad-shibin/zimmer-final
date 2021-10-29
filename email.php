<?php

if(isset($_POST['submit']) and !empty($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $place=$_POST['place'];
    $esource=$_POST['esource'];
    $emedium=$_POST['emedium'];

    $mail1_subject="Zimmer Enquiry from Google Ads, " . $name;
    $mail1_txt="Name :" . $name . "<br>" . "Mobile :" . $phone . "<br>" . "E-Mail :" . $email . "<br>" . "Place :" . $place . "<br>" . "Source :" . $esource . "<br>" . "Medium :" . $emedium . "<br>";


// More headers
$headers .= 'From: <info@zimmer.com>' . "\r\n";

$to = "viralmafiacs2@gmail.com, cyril.viralmafia@gmail.com, leads.viralmafia@gmail.com";
$url = 'http://viralmafia.com/demo/jsonmailerzimmer.php';
$ch = curl_init($url);
$data = array(
    'to' => $to,
    'subject' => $mail1_subject,
    'messagenew' => $mail1_txt,
    'headers' => $headers,
);
$payload = json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$complete = curl_exec($ch);
curl_close($ch);

    if($complete){
        header("location:sucess/index.html");
    }
}


?>