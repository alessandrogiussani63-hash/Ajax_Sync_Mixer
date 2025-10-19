<?php
header('Content-Type: application/json; charset=utf-8');
$synk   = isset($_POST['synk'])   ? (string)$_POST['synk']   : '1';
$screen = isset($_POST['screen']) ? (string)$_POST['screen'] : 'main';
$switch = isset($_POST['switch']) ? (string)$_POST['switch'] : '2';
$data = array(array('synk'=>$synk,'screen'=>$screen,'switch'=>$switch));
file_put_contents(__DIR__ . '/synk.json', json_encode($data));
echo json_encode(array('ok'=>true,'data'=>$data));
