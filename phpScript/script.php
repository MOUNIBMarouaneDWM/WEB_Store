<?php

include 'connection.php';

$filename = "products.json";
$data = file_get_contents($filename);
$array = json_decode($data, true);

foreach ($array as $rows) {

  foreach ($rows["category"] as $value) {
    $sqlcat = " INSERT INTO category (id_cat,first_name)  VALUES ( '" . $value["id"] . "', '" . $value["name"] . "') ";
  }
  mysqli_query($connect, $sqlcat);
}
$array = json_decode($data, true);
foreach ($array as $rows) {
  $sql = " INSERT INTO produit (ref,first_name,type,price,shipping,description,manufacturer,image) VALUES 
      ( '"
    . $rows["ref"] . "','"
    . $rows["name"] . "', '"
    . $rows["type"] . "', '"
    . $rows["price"] . "', '"
    . $rows["shipping"] . "', '"
    . $rows["description"] . "','"
    . $rows["manufacturer"] . "','"
    . $rows["image"] . "') ";
  mysqli_query($connect, $sql);;
}
foreach ($array as $rows) {
  foreach ($rows["category"] as $value) {
    $sqlcat_prod = " INSERT INTO product_categor(ref,id) VALUES('" . $rows["ref"] . "','" . $value["id"] . "')";
  }
  mysqli_query($connect, $sqlcat_prod);
}