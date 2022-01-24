<?php
include('link.php');

$id = $_POST['index'];

// sql to delete a record
$sql = "DELETE FROM `field` WHERE `field`.`id` = '$id'";

if ($conn->query($sql) === TRUE) {
  header('location: amendg.php?accept=yes');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>