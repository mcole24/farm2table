<?php
?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php include 'views/header.php' ?>
        <br/><br/>
        <div class="container backgroundWhite roundedCorners">
            <br/>
            <?php include 'views/tables/fooditemstable.php' ?>
            <br/>
        </div>
    </body>
</html>