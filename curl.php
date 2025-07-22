<?php
$ch = curl_init(); // Initialize cURL

curl_setopt($ch, CURLOPT_URL, "https://www.youtube.com/watch?v=rNqoRk7fPWw");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch); // Execute
curl_close($ch); // Close

echo $response; // Output response
?>
