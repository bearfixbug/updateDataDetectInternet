<?php
    include('root.php');

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $data_arr["result"] = array();
        $select_stmt = $pdo->prepare("SELECT * FROM tbl_product ");
        $select_stmt->execute();

        while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            $items = array(
                "id" => $id,
                "name" => $name,
                "productQyt" => $productQyt,
                "updated_at" => $updated_at,
            );
           
            array_push($data_arr["result"], $items);

        }
        echo json_encode($data_arr);
        http_response_code(200);

    }
    else if($_SERVER['REQUEST_METHOD'] == "GET") {
        echo 'Reject';
    }
    else {
        http_response_code(405);
    }
?>