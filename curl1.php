<?php
$ch = curl_init("https://api.github.com/users/octocat");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'MyApp'); 
$response = curl_exec($ch);
curl_close($ch);
echo $response;
?>
