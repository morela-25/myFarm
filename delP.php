<?php
include('link.php');

$id = $_POST['index'];

// sql to delete a record
$sql = "DELETE FROM `poultryy` WHERE `poultryy`.`id` = '$id'";

if ($conn->query($sql) === TRUE) {
  header('location: amendp.php?accept=yes');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>