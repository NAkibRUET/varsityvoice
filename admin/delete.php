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
    $qr = mysqli_query($con, "DELETE from contents WHERE id='$did'");
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