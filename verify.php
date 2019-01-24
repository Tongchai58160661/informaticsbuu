<?php
$access_token = 'vYYM9d4BGclfwapsLTqiyLT8bhwQySe4t1hrAc0mZlYfrTY1hpIZkAZXL7z4vFMp4v9eBs0FpWyHOIRS3SA+lHu5Ru2eOBy1KmwFonQop9swi7QZFKt/GjW3GzYlOplv3e10NlyO4EGFzMMsd4p4PQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
