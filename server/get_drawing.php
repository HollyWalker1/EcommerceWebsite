<?php

include('connect.php');

$statement = $connect->prepare("SELECT * FROM products WHERE product_category='drawing' LIMIT 4 ");

$statement->execute();

$drawing = $statement->get_result();

?>