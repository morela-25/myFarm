<?php 
include("link.php");
 
$id = $_POST['index'];
$typ = $_POST['crop'];
$cow = $_POST['cyc'];
$lact = $_POST['stage'];
$stg = $_POST['H'];
$ftyp = $_POST['day'];
$fqty = $_POST['nutr'];
$mlk = $_POST['method'];
 $feedtyp = $_POST['moist'];
 $feedqty = $_POST['ill'];
 $mlkqty = $_POST['chem'];

$sql = "UPDATE `field` SET `crp`='$typ', `cycle`='$cow', `stage`='$lact', `ht`='$stg', `DN`='$ftyp', `AN`='$fqty', `AM`='$mlk', `MS`='$feedtyp', `Dss`='$feedqty', `Trt`='$mlkqty' WHERE `field`.`id` = '$id'";

if(mysqli_query($conn, $sql)){
    header('location: amendg.php?accept=success');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
 ?> 
