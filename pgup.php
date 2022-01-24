<?php 
include("link.php");
 
$id = $_POST['index'];
$cow = $_POST['cla'];
$lact = $_POST['tot'];
$stg = $_POST['stag'];
$ftyp = $_POST['ftyp'];
$fqty = $_POST['fqty'];
$mlk = $_POST['feedtyp'];
 $feedtyp = $_POST['feedqty'];
 $feedqty = $_POST['inf'];
 $mlkqty = $_POST['trt'];


$sql = "UPDATE `piggery` SET `pgCls`='$cow', `TP`='$lact', `Devstage`='$stg', `FTam`='$ftyp', `FQam`='$fqty', `FTpm`='$mlk', `FQpm`='$feedtyp', `Infection`='$feedqty', `VertC`='$mlkqty'  WHERE `piggery`.`id` = '$id'";

if(mysqli_query($conn, $sql)){
    header('location: amendpg.php?accept=success');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
 ?> 
 

   