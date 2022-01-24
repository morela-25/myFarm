
 <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "myfarm");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
 
// Escape user inputs for security
$cow = mysqli_real_escape_string($link, $_REQUEST['crop']);
$lact = mysqli_real_escape_string($link, $_REQUEST['cyc']);
$ftyp = mysqli_real_escape_string($link, $_REQUEST['stage']);
$fqty = mysqli_real_escape_string($link, $_REQUEST['H']);
$mlk = mysqli_real_escape_string($link, $_REQUEST['day']);
 $feedtyp = mysqli_real_escape_string($link, $_REQUEST['nutr']);
 $feedqty = mysqli_real_escape_string($link, $_REQUEST['method']);
 $mlkqty = mysqli_real_escape_string($link, $_REQUEST['moist']);
 $tot = mysqli_real_escape_string($link, $_REQUEST['ill']);
 $inf = mysqli_real_escape_string($link, $_REQUEST['chem']);
 $day = mysqli_real_escape_string($link, $_REQUEST['date']);
 $user = mysqli_real_escape_string($link, $_REQUEST['user']);
 $ec = mysqli_real_escape_string($link, $_REQUEST['ec']); 
 $iss = mysqli_real_escape_string($link, $_REQUEST['iss']);

// Attempt insert query execution
$sql = "INSERT INTO `field` (`crp`, `cycle`, `stage`, `ht`, `DN`, `AN`, `AM`, `MS`, `Dss`, `Trt`, `date`, `user`, `ec`, `issue`) VALUES ('$cow', '$lact', '$ftyp', '$fqty', '$mlk', '$feedtyp', '$feedqty', '$mlkqty', '$tot', '$inf', '$day', '$user', '$ec', '$iss')";

if(mysqli_query($link, $sql)){
    header('location: newgarden.php?accept=success');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
 
