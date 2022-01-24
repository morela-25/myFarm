
 <?php

$link = mysqli_connect("localhost", "root", "", "myfarm");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
 
// Escape user inputs for security
$cow = mysqli_real_escape_string($link, $_REQUEST['cla']);
$lact = mysqli_real_escape_string($link, $_REQUEST['tot']);
$ftyp = mysqli_real_escape_string($link, $_REQUEST['stag']);
$fqty = mysqli_real_escape_string($link, $_REQUEST['ftyp']);
$mlk = mysqli_real_escape_string($link, $_REQUEST['fqty']);
 $feedtyp = mysqli_real_escape_string($link, $_REQUEST['feedtyp']);
 $feedqty = mysqli_real_escape_string($link, $_REQUEST['feedqty']);
 $mlkqty = mysqli_real_escape_string($link, $_REQUEST['inf']);
 $tot = mysqli_real_escape_string($link, $_REQUEST['trt']); 
 $die = mysqli_real_escape_string($link, $_REQUEST['death']); 
 $day = mysqli_real_escape_string($link, $_REQUEST['date']);
 $user = mysqli_real_escape_string($link, $_REQUEST['user']);
 $ec = mysqli_real_escape_string($link, $_REQUEST['ec']); 
 $iss = mysqli_real_escape_string($link, $_REQUEST['iss']);

// Attempt insert query execution
$sql = "INSERT INTO `poultryy` (`cls`, `tc`, `stage`, `FTam`, `FQam`, `FTpm`, `FQpm`, `infection`, `treat`, `Deaths`, `Date`, `user`, `EC`, `issue`) VALUES ('$cow', '$lact', '$ftyp', '$fqty', '$mlk', '$feedtyp', '$feedqty', '$mlkqty', '$tot', '$die', '$day', '$user', '$ec', '$iss')";

if(mysqli_query($link, $sql)){
    header('location: newpoultery.php?accept=success');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
 
