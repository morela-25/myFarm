<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "myfarm";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with server: ". mysqli_connect_error());  
    }  
  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from user where username = '$username' and freepass = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            session_start();
            $_SESSION['username'] = $row['username'];
            header("location: index.php?login=success");
                    exit(); 
        }  
        else{  
             header("location: login.php?error=invalid");
          exit();
        }     




?>  