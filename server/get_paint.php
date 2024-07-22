<?php

include('connect.php');

$statement = $connect->prepare("SELECT * FROM products WHERE product_category='painting' LIMIT 4 ");

$statement->execute();

$paint = $statement->get_result();

?>