<?php

$ch = curl_init("http://wwww.example.com/");
$fp = fopen("example_homepage.txt", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($cg, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);


?>
