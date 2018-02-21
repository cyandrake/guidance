<?php
session_start();
include_once 'con.php';

if(isset($_POST)) 
{   
	$error = false;
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)) 
    {
      $error = true;
    }

    if ((bool)$error == false) 
    {
        $password = md5($password);
        $stmt = $con->prepare("SELECT * FROM users WHERE email=? AND password=?");
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);
        $stmt->execute();
        $row = $stmt->fetch();
        
        if ((bool) $row == true) 
        {
            $memberType = $row['superuser'];
            $_SESSION['user'] = $memberType;

            echo "<script>window.location='/index.php'</script>";
        }
        else 
        {
            echo "<script>alert('Invalid Email or Password! Please try again.'); window.location='/login.php'</script>";
        }
    }
    else
    {
    	echo "<script>alert('Invalid Email or Password! Please try again.'); window.location='/login.php'</script>";
    }
}