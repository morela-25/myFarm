
 <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "myfarm");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
 
// Escape user inputs for security
$cow = mysqli_real_escape_string($link, $_REQUEST['cow']);
$lact = mysqli_real_escape_string($link, $_REQUEST['lac']);
$ftyp = mysqli_real_escape_string($link, $_REQUEST['ftyp']);
$fqty = mysqli_real_escape_string($link, $_REQUEST['fqty']);
$mlk = mysqli_real_escape_string($link, $_REQUEST['mlk']);
 $feedtyp = mysqli_real_escape_string($link, $_REQUEST['feedtyp']);
 $feedqty = mysqli_real_escape_string($link, $_REQUEST['feedqty']);
 $mlkqty = mysqli_real_escape_string($link, $_REQUEST['mlkqty']);
 $tot = mysqli_real_escape_string($link, $_REQUEST['tot']);
 $inf = mysqli_real_escape_string($link, $_REQUEST['inf']);
 $trt = mysqli_real_escape_string($link, $_REQUEST['trt']);
 $day = mysqli_real_escape_string($link, $_REQUEST['date']);
 $user = mysqli_real_escape_string($link, $_REQUEST['user']);
 $ec = mysqli_real_escape_string($link, $_REQUEST['ec']); 
 $iss = mysqli_real_escape_string($link, $_REQUEST['iss']);

// Attempt insert query execution
$sql = "INSERT INTO `dairy` (`CowID`, `Lactation`, `FTam`, `FQam`, `MQam`, `FTpm`, `FQpm`, `MQpm`, `TM`, `Infection`, `Treatment`, `Date`, `user`, `EC`, `issues` ) VALUES ('$cow', '$lact', '$ftyp', '$fqty', '$mlk', '$feedtyp', '$feedqty', '$mlkqty', '$tot', '$inf', '$trt', '$day', '$user', '$ec', '$iss')";

if(mysqli_query($link, $sql)){
    header('location: newdairy.php?accept=success');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
 
