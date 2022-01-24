<?php 
include("link.php");
 
$id = $_POST['index'];
$cow = $_POST['cow'];
$lact = $_POST['lac'];
$ftyp = $_POST['ftyp'];
$fqty = $_POST['fqty'];
$mlk = $_POST['mlk'];
 $feedtyp = $_POST['feedtyp'];
 $feedqty = $_POST['feedqty'];
 $mlkqty = $_POST['mlkqty'];
 $tot = $_POST['tot'];
 $inf = $_POST['inf'];
 $trt = $_POST['trt'];

$sql = "UPDATE `dairy` SET `CowID`='$cow', `Lactation`='$lact', `FTam`='$ftyp', `FQam`='$fqty', `MQam`='$mlk', `FTpm`='$feedtyp', `FQpm`='$feedqty', `MQpm`='$mlkqty', `TM`='$tot', `Infection`='$inf', `Treatment`='$trt'  WHERE `dairy`.`id` = '$id'";

if(mysqli_query($conn, $sql)){
    header('location: amendair.php?accept=success');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
 ?> 
