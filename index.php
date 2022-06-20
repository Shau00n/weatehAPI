<?php

// JSON データをリクエストする際のベースとなる URL 
$url = "https://weather.tsukumijima.net/api/forecast/$city";

// cityを選択する
$city = "city/400040";

$ch = curl_init();

// 返り値を文字列型で返す。
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

// cyrlのURLを指定
curl_setopt($ch, CURLOPT_URL, $url);

$OutPut = curl_exec($ch);



$json = json_decode($OutPut);
var_dump($json);



curl_close($ch);
