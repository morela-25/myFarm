<?php
include('link.php');

$id = $_POST['index'];

// sql to delete a record
$sql = "DELETE FROM `dairy` WHERE `dairy`.`id` = '$id'";

if ($conn->query($sql) === TRUE) {
  header('location: amendair.php?accept=yes');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>