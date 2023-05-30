<?php
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Headers: *");

    include '../newdp/datadp.php';
    include '../model/user.php';
    
    
    
    $database = new DatabaseUser();
    $db = $database->getConnection();
    $items = new User($db);
    $stmt = $items->getUser();
    $itemCount = $stmt->num_rows;
    

    if($itemCount > 0){
        
        $employeeArr = array();
        $employeeArr["body"] = array();
        $employeeArr["itemCount"] = $itemCount;
        while ($row = $stmt->fetch_assoc()){
            $e = array(
                "idus" => $row["idus"],
                "nameus" => $row["nameus"],
                "textus" => $row["textus"],
                "dateus" => $row["dateus"],
                "favus" => $row["favus"],
            );
            array_push($employeeArr["body"], $e);
        }
        echo json_encode($employeeArr);
    }
    else{
        http_response_code(404);
        echo json_encode(
            array("message" => "No record found.")
        );
    }
    
    
    ?>