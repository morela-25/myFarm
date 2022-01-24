 <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "fmreview");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 

// Escape user inputs for security
$cow = mysqli_real_escape_string($link, $_REQUEST['review']);
$lact = mysqli_real_escape_string($link, $_REQUEST['org']);
// Attempt insert query execution
$sql = "INSERT INTO `cmments` (`review`, `organisation`) VALUES ('$cow', '$lact')";

if(mysqli_query($link, $sql)){
    header('location: index.php?accept=success');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>