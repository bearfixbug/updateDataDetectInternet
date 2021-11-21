<?php
    include('root.php');

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        try {
            $data_arr["result"] = array();

            $dataInfo = json_decode($_POST['dataInfo']);
            $dataLength = $_POST['dataLength'];
    
            for($i=0; $i<$dataLength; $i++) {
                // $query = "UPDATE tbl_product SET productQyt = ?, updated_at = '?' WHERE id = ? ";
                $query = "UPDATE tbl_product SET productQyt = ".intval($dataInfo[$i]->productQyt).", updated_at = '".$dataInfo[$i]->updated_at."' WHERE id = ".intval($dataInfo[$i]->id)." ";
                $select_stmt = $pdo->prepare($query);
                $select_stmt->execute();

                // $select_stmt->execute([
                //     intval($dataInfo[$i]->productQyt), $dataInfo[$i]->updated_at, intval($dataInfo[$i]->id)
                // ]);
            }
            $items = array(
                "code" => 200,
                "msg" => "success"
            );
               
            array_push($data_arr["result"], $items);
    
            echo json_encode($data_arr);
            http_response_code(200);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
        

    }
    else if($_SERVER['REQUEST_METHOD'] == "GET") {
        echo 'Reject';
    }
    else {
        http_response_code(405);
    }
?>