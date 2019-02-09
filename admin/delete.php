<?php
	session_start();
    require_once('../db_connect.php');
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }
    else{
        header('Location: login');
    }
    $did = $_GET['did'];
    $qx = mysqli_query($con, "SELECT * from contents WHERE id='$did'");
    $row = mysqli_fetch_array($qx);
    $file = $row['file_name'];
    $path = '../posts/'.$file;
    $qr = mysqli_query($con, "DELETE from contents WHERE id='$did'");
    unlink($path);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>
	<a href="index.php"><button class="btn btn-primary">Go back</button></a>
</body>
</html>