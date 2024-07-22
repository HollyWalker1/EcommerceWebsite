<?php

include('connect.php');

$statement = $connect->prepare("SELECT * FROM products WHERE product_category='knitting' OR product_category='sewing' OR product_category='crochet' LIMIT 4 ");

$statement->execute();

$kcs = $statement->get_result();

?>