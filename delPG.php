<?php
include('link.php');

$id = $_POST['index'];

// sql to delete a record
$sql = "DELETE FROM `piggery` WHERE `piggery`.`id` = '$id'";

if ($conn->query($sql) === TRUE) {
  header('location: amendpg.php?accept=yes');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>