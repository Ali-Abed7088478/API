<?php




header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: *");

include '../newdp/datadp.php';
include '../model/user.php';

$database = new DatabaseUser();
$db = $database->getConnection();

$item = new User($db);

$data = json_decode(file_get_contents("php://input"));

$item->id = (int) $_POST['id'] ;

$item->name = $_POST['name'];
$item->text = $_POST['text'];
$item->date = date('Y-m-d H:i:s');


if($item->updateUser()){
    echo json_encode("User data updated.");
} else{
    echo json_encode("Data could not be updated");
}

?>