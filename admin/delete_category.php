<?php
include '../config/constants.php';

$id = $_GET['id'];

$sql = "DELETE FROM category WHERE id=$id";
$result = mysqli_query($conn, $sql);

if ($result == true) {
  header("Location:category");
} else {
  echo "Error .. fail to delete to data";
}
