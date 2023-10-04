<?php
$con = mysqli_connect('localhost','patienth_gup','smvM2-Teh5C@','patienth_gup');
if(!empty($_REQUEST))
{
$temp = @$_REQUEST['temp'];
$hbt = @$_REQUEST['hbt'];
$spo2 = @$_REQUEST['spo2'];
$hum = @$_REQUEST['hum'];

$query = "INSERT INTO `raj` (`temp`, `hbt`, `spo2`, `hum`)
 VALUES ('".$temp."', '".$hbt."', '".$spo2."', '".$hum."')";

//echo $query;
mysqli_query($con,$query);
///////////////////////////////////////////////////////////////////////////	
if($temp >= 50)
{

	$to      = 'aryankul2000@gmail.com';
$subject = ' BODY TEMPERATURE ALERT';
$message = 'Temp='.$temp;
$message .= "Deg      High TEMPERATURE Alert."."\r\n";
$message .= "http://www.patienthealth.co.in/iot_patient_rahul/index.php"."\r\n";
$headers = 'From: patienthealth786@gmail.com' . "\r\n" .
    'Reply-To: patienthealth786@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
    
    
	$to      = 'myakaprakash@gmail.com';
$subject = ' BODY TEMPERATURE ALERT';
$message = 'Temp='.$temp;
$message .= "Deg      High TEMPERATURE Alert."."\r\n";
$message .= "http://www.patienthealth.co.in/iot_patient_rahul/index.php"."\r\n";
$headers = 'From: patienthealth786@gmail.com' . "\r\n" .
    'Reply-To: patienthealth786@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
}
///////////////////////////////////////////////////////////////////////////	
if($hbt >= 95)
{

	$to      = 'aryankul2000@gmail.com';
$subject = ' HEART BEAT ALERT, High HEART BEAT';
$message = 'HEART BEAT='.$hbt;
$message .= "hbt      High HEART BEAT  Alert."."\r\n";
$message .= "http://www.patienthealth.co.in/iot_patient_rahul/index.php"."\r\n";
$headers = 'From: patienthealth786@gmail.com' . "\r\n" .
    'Reply-To: patienthealth786@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
    
	$to      = 'myakaprakash@gmail.com';
$subject = ' HEART BEAT ALERT, High HEART BEAT';
$message = 'HEART BEAT='.$hbt;
$message .= "hbt      High HEART BEAT  Alert."."\r\n";
$message .= "http://www.patienthealth.co.in/iot_patient_rahul/index.php"."\r\n";
$headers = 'From: patienthealth786@gmail.com' . "\r\n" .
    'Reply-To: patienthealth786@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);	
}
///////////////////////////////////////////////////////////////////////////	
if($hum >= 80)
{	
	$to      = 'aryankul2000@gmail.com';
$subject = ' HIGH HUMIDITY ALERT';
$message = 'HUMIDITY='.$hum;
$message .= "http://www.patienthealth.co.in/iot_patient_rahul/index.php"."\r\n";
$headers = 'From: patienthealth786@gmail.com' . "\r\n" .
    'Reply-To: patienthealth786@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
    
    	$to      = 'myakaprakash@gmail.com';
$subject = ' HIGH HUMIDITY ALERT';
$message = 'HUMIDITY='.$hum;
$message .= "http://www.patienthealth.co.in/iot_patient_rahul/index.php"."\r\n";
$headers = 'From: patienthealth786@gmail.com' . "\r\n" .
    'Reply-To: patienthealth786@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
    
}
///////////////////////////////////////////////////////////////////////////	
}
?>



