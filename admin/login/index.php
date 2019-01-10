<?php
    session_start();
    require_once('../../db_connect.php');
    //$hashed_password = password_hash("tw2Gp6346yz3", PASSWORD_DEFAULT);
        
    if(isset($_POST['login'])){
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $one = test_input($_POST['one']);
        $two = test_input($_POST['two']);

        //$hashed_password = password_hash("tw2Gp6346yz3", PASSWORD_DEFAULT);
        //echo $hashed_password;
        
        $msg="";
        $error="";
        
        $qr = "SELECT * FROM rogouin;";
        $rn = mysqli_query($con,$qr);
        while($row = mysqli_fetch_array($rn)){

            $db_user = $row['one'];
            $db_pass = $row['two'];
            if($db_user===$one){
                if(password_verify($two, $db_pass)) {
                    echo "string";
                    $msg = "<br><h5 style='color:green;'>Username and Password Matched!</h5>";
                    $_SESSION['user']=$db_user;
                    header('Location: ../');
                }
                else{
                    $error = "<br><h5 style='color:red;'>Password doesn't Match!</h5>";
                    
                } 
            }
            else{
                $error = "<br><h5 style='color:red;'>Username doesn't Match!</h5>";
            }
        }
    }
?>
<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <title>Admin Panel</title>
    </head>
    <body>
        <div style="width: 300px; margin: 100px auto;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); background: #f7f7f7; border-radius: 5px; padding: 20px 25px;">
            <h5 style="color: #7f7f7f;">VarsityVoice Admin Login:</h5>
            <br/>
            <form method="post" action="">
                <label><b>Username:</b></label>
                <input type="text" placeholder="Username" class="form-control" name="one" autocomplete="off">
                <label><b>Password:</b></label>
                <input type="password" placeholder="**********" class="form-control" name="two">
                <br/>
                <button type="submit" class="btn btn-primary" name="login">Log in</button>
                <?php
                    if(!empty($msg)){
                        echo $msg;
                    }
                    if(!empty($error)){
                        echo $error;
                    }
                ?>

            </form>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>