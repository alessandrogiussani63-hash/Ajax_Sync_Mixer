<?php
header('Content-Type: application/json; charset=utf-8');
$file = __DIR__ . '/synk.json';
if (!file_exists($file)) {
    $seed = array(array('synk'=>'1','screen'=>'main','switch'=>'2'));
    file_put_contents($file, json_encode($seed));
}
$json = file_get_contents($file);
echo $json;
