<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: *");

include '../newdp/datadp.php';
include '../model/user.php';

$database = new DatabaseUser();
$db = $database->getConnection();
$item = new User($db);
$data = json_decode(file_get_contents("php://input"));

// echo $data->name;
// echo $data->text;

$item->name = $_POST['name'];
$item->text = $_POST['text'];
$item->date = date('Y-m-d');

if($item->createUser()){
    echo 'User created successfully.';
} else{
    echo 'User could not be created.';
}













?>