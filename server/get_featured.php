<?php

include('connect.php');

$statement = $connect->prepare("SELECT * FROM products LIMIT 4 ");

$statement->execute();

$featured = $statement->get_result();

?>