<?php 
    require 'controllers/FoodItemController.php';

    $foodItemController = new FoodItemController();
    $result = $foodItemController->getAllFoodItems();
    $items = array();
    while($row = $result->fetch_assoc()) {
        array_push($items, $row);
    }
?>

<table class="table table-hover">
    <thead class="thead thead-dark">
        <tr>
            <th>Item</th>
            <th>Quantity</th>
            <th>Expiration Date</th>
        </tr>
    </thead>
    <tbody>
    <?php 
            for ($i = 0; $i < count($items); $i++) {
                echo $foodItemController->getExpiredItems($items[$i]);
            }
        ?>
    </tbody>
</table>
