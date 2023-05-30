<?php


header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: *");

include '../newdp/datadp.php';
include '../model/user.php';

$database = new DatabaseUser();
$db = $database->getConnection();

$item = new User($db);


$item->id = (int) $_GET['id'];

if($item->deleteUser()){
    echo json_encode("User data Delete.");
} else{
    echo json_encode("Data could not be Delete");

}




?>