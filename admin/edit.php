<?php
    session_start();
    require_once('../db_connect.php');
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }
    else{
        header('Location: login');
    }

    $eid = $_GET['eid'];
    $qr = mysqli_query($con, "SELECT * FROM contents WHERE id = '$eid'");
    $row = mysqli_fetch_array($qr);
    $category = $row['category'];
    $content = mysqli_real_escape_string($con,$row['content']);
    $heading = mysqli_real_escape_string($con,$row['heading']);
    $mainNews = $row['mainNews'];
    $scrollNews = $row['scrollNews'];
    $writer = mysqli_real_escape_string($con,$row['writer']);
    $time = $row['time'];

    if(isset($_POST['submit'])){
        
        
        $category = $_POST['category'];
        $heading = $_POST['heading'];
        $writer = $_POST['writer'];
        $file_name = $_FILES['contentImage']['name'];
        $file_size =$_FILES['contentImage']['size'];
        $file_tmp =$_FILES['contentImage']['tmp_name'];
        $content = $_POST['content'];
        $mainNews = $_POST['mainNews'];
        $scrollNews = $_POST['scrollNews'];
        $error = "";
        $success = "";
        if($file_size < 209710){
            $qr = "UPDATE `contents` SET `category` = '$category', `heading` = '$heading', `writer` = '$writer', `file_name` = '$file_name', `content` = '$content', `mainNews` = '$mainNews', `scrollNews` = '$scrollNews', `time` = '$time' WHERE `contents`.`id` = '$eid';";
            $rn = mysqli_query($con,$qr);  
            $up = move_uploaded_file($file_tmp,"../posts/".$file_name);   
            if($rn && $up){
                $success = "<h5 style='color:green;'>Successfully Updated.</h5>";
            }
            else{
                $error = "<h5 style='color:red;'>Something Went Wrong, Try again.</h5>";
            }
        }
        else{
            $error = "<h5 style='color:red;'>File size must be less than 200 KB</h5>";
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
    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
    <title>Admin Panel</title>
  </head>
  <body style="background: #f9f9f9;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="https://www.varsityvoice.net" target="_blank">VarsityVoice.net</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/admin" tabindex="-1"  style="color: green">Go Back</a>
          </li>
        </ul>
        <form action="logout.php">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
        </form>
      </div>
    </nav>

    <div style="background: #fff; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); margin-top: 30px; padding: 20px;" class="container">
        <h4>Post News Here:</h4>
        <br/>
        <?php
            if(!empty($error)){
                echo $error;
            }
            if(!empty($success)){
                echo $success;
            }
        ?>
        <form method="post" action=""  enctype="multipart/form-data">
            <label><b>Category:</b>*</label>
            <select required class="form-control" name="category">
                <option value="Public University"<?php if(isset($category) && $category=="Public University")echo "selected";?>>Public University</option>

                <option value="Private University"<?php if(isset($category) && $category=="Private University")echo "selected";?>>Private University</option>

                <option value="National"<?php if(isset($category) && $category=="National")echo "selected";?>>National</option>

                <option value="International"<?php if(isset($category) && $category=="International")echo "selected";?>>International</option>

                <option value="Scholarship"<?php if(isset($category) && $category=="Scholarship")echo "selected";?>>Scholarship</option>

                <option value="Job News"<?php if(isset($category) && $category=="Job News")echo "selected";?>>Job News</option>

                <option value="Student Politics"<?php if(isset($category) && $category=="Student Politics")echo "selected";?>>Student Politics</option>

                <option value="Success Story"<?php if(isset($category) && $category=="Success Story")echo "selected";?>>Success Story</option>

                <option value="Interview"<?php if(isset($category) && $category=="Interview")echo "selected";?>>Interview</option>

                <option value="Science and Technology"<?php if(isset($category) && $category=="Science and Technology")echo "selected";?>>Science and Technology</option>

                <option value="Innovations"<?php if(isset($category) && $category=="Innovations")echo "selected";?>>Innovations</option>

                <option value="Sports"<?php if(isset($category) && $category=="Sports")echo "selected";?>>Sports</option>

                <option value="Entertainment"<?php if(isset($category) && $category=="Entertainment")echo "selected";?>>Entertainment</option>

                <option value="Economy"<?php if(isset($category) && $category=="Economy")echo "selected";?>>Economy</option>

                <option value="Religion"<?php if(isset($category) && $category=="Religion")echo "selected";?>>Religion</option>

                <option value="Health"<?php if(isset($category) && $category=="Health")echo "selected";?>>Health</option>

                <option value="Literature"<?php if(isset($category) && $category=="Literature")echo "selected";?>>Literature</option>
                
                
            </select>
            <label><b>Content Headline:</b>*</label>
            <input required class="form-control" type="text" name="heading" placeholder="Write a headline for your news post" value="<?php if(isset($heading))echo $heading?>">

            <label><b>Writer:</b></label>
            <input class="form-control" type="text" name="writer" placeholder="Author name" value="<?php if(isset($writer))echo $writer?>">

            <label><b>Image:</b>* (700px x 368px and less than 200 KB)</label>
            <br/>
            <a href="http://www.picresize.com" target="_blank">Resize and crop here.</a>
            <input required class="form-control" type="file" name="contentImage">
            
            <label><b>Content:</b>*</label>
            <textarea required class="form-control" name="content" rows="16">
                <?php if(isset($content))echo $content?>
                
            </textarea>
            <label>Show as Main News?</label>
            <select class="form-control" name="mainNews">
                <option value="Yes"<?php if(isset($mainNews) && $mainNews=="Yes")echo "selected";?>>Yes</option>
                <option value="No"<?php if(isset($mainNews) && $mainNews=="No")echo "selected";?>>No</option>
            </select>
            <label>Show as Scroll?</label>
            <select class="form-control" name="scrollNews">
                <option value="Yes"<?php if(isset($scrollNews) && $scrollNews=="Yes")echo "selected";?>>Yes</option>
                <option value="No"<?php if(isset($scrollNews) && $scrollNews=="No")echo "selected";?>>No</option>
            </select>
            <br/>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
    <br/>
    <br/>
    <script type="text/javascript">
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>