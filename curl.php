<?php
$ch = curl_init(); 

curl_setopt($ch, CURLOPT_URL, "https://www.youtube.com/watch?v=rNqoRk7fPWw");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch); 
curl_close($ch); 

echo $response; 
?>
