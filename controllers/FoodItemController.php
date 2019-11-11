<?php
    require 'db.php';
    date_default_timezone_set("America/New_York");
    class FoodItemController {
        
        function getConnection() {
            $db = new dbConnection();
            $conn = $db->getConnection();

            return $conn;
        }

        function getAllFoodItems() {
            $conn = $this->getConnection();
            $sql = "SELECT item, quantity, expire_date FROM food_items";
            $result = $conn->query($sql) or die($conn->error);

            return $result;
        }

        function generateRow($row) {
            $item = "N/A";
            $quantity = "N/A";
            $expirationDate = "N/A";
    
            if (isset($row["item"])) {
                $item = $row["item"];
            }
    
            if (isset($row["quantity"])) {
                $quantity = $row["quantity"];
            }
    
            if (isset($row["expire_date"])) {
                $expirationDate = $row["expire_date"];
                $expirationDate = date("m-d-Y", strtotime($expirationDate));
            }
    
            $itemCell = '<td>' . $item . '</td>';
            $quantityCell = '<td>' . $quantity. '</td>';
            $expirationCell = '<td>' . $expirationDate . '</td>';
            $tr = '<tr>' . $itemCell . $quantityCell . $expirationCell . '</td>'; 

            return $tr;
        }

        function checkForExpiredItem($row) {
            if(isset($row["expire_date"]) && $this->isExpired($row["expire_date"])) {
                return;
            } else {
                return $this->generateRow($row);
            }
        }

        function getExpiredItems($row) {
            if(isset($row["expire_date"]) && $this->isExpired($row["expire_date"])) {
                return $this->generateRow($row);
            } else {
                return;
            }
        }

        function isExpired($date) {
            return date("m-d-Y", strtotime($date)) < date("h:i:sa") ;
        }
    }

?>