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
 $tot = $_POST['death'];


$sql = "UPDATE `poultryy` SET `cls`='$cow', `tc`='$lact', `stage`='$stg', `FTam`='$ftyp', `FQam`='$fqty', `FTpm`='$mlk', `FQpm`='$feedtyp', `infection`='$feedqty', `treat`='$mlkqty', `Deaths`='$tot'  WHERE `poultryy`.`id` = '$id'";

if(mysqli_query($conn, $sql)){
    header('location: amendp.php?accept=success');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
 ?> 
 