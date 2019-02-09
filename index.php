<?php
  require_once('inc/top.php');
  require_once('db_connect.php');
  //$content = mb_substr($row['content'], 0, 60);
  $qr = "SELECT * FROM contents WHERE mainNews='YES' ORDER BY time DESC LIMIT 1";
  $rn = mysqli_query($con, $qr);
  if(mysqli_num_rows($rn)>0){
    while($row = mysqli_fetch_array($rn)){
      $newsid = $row['id'];
      $content = mb_substr(nl2br($row['content']), 0, 200);
      $heading = $row['heading'];
      $main = $row['mainNews'];
      $file = $row['file_name'];
      $pdate = $row['time'];
      $time = strtotime($pdate);
      $date = date('d', $time);
      $month = date('m', $time);
      $year = date('y', $time);
      $ptime = date('h:i A', $time);
      $mname="";
      if($month == 12){
        $mname = "Dec";
      }
      else if($month == 1){
        $mname = "Jan";
      }
      else if($month == 2){
        $mname = "Feb";
      }
      else if($month == 3){
        $mname = "Mar";
      }
      else if($month == 4){
        $mname = "Apr";
      }
      else if($month == 5){
        $mname = "May";
      }
      else if($month == 6){
        $mname = "June";
      }
      else if($month == 7){
        $mname = "July";
      }
      else if($month == 8){
        $mname = "Aug";
      }
      else if($month == 9){
        $mname = "Sept";
      }
      else if($month == 10){
        $mname = "Oct";
      }
      else if($month == 11){
        $mname = "Nov";
      }
    }
  } 
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="inner-page-wrapper blog-wrapper" style="margin-top: -40px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="row">
          <div class="col-lg-12 mb-5">
            <a style="text-decoration:none;" href="details.php?id=<?php echo $newsid; ?>"><div class="blog_box_wrapper">
              <div class="blog_img_wraper"> <img alt="" src="posts/<?php echo $file;?>" min-width="700px"> </div>
              <div class="blog_icon_overlay">
                <ul>
                  <li> <?php echo $date;?> <span> <?php echo $mname; ?></span></li>
                  <li style="font-size: 14px;"> <?php echo $ptime; ?> </li>
                </ul>
              </div>
              <div class="blog_btm_cntnt">
                <h2 style="font-family: Bangla,sans-serif; font-size: 24px;"><?php echo $heading; ?></h2>
                <p class="pad-b-10"><?php echo $content; ?>....</p>
                <a class="tb_toppadder20" href="details.php?id=<?php echo $newsid; ?>">আরও পড়ুন</a> 
              </div>
            </div></a>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <div class="fb-like" data-href="https://www.facebook.com/varsityvoicebd/" data-width="330" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
        <div class="sidebar_widget">
          <br>
          <div class="row">
            <div class="col-md-6">
              <a href="https://www.biye24.com.bd"><img src="biye24_add.gif" width="100%" alt="biye24.com Add" style="max-width: 300px;"></a>
              <br>
              <br>
            </div>
            <div class="col-md-6">
              <a href="https://www.facebook.com/DocenBD/"><img src="docen_add.png" width="100%" alt="biye24.com Add" style="max-width: 300px;"></a>
              <br>
              <br>
            </div>
          </div>
          
        
          <br>
          <h4 style="font-family:Bangla,sans-serif;border-bottom: 1px solid #7f7f7f;"> সর্বশেষ <span> খবর </span> </h4>
          <div class="latest_post_wrapper">
            <?php
              $qr = "SELECT * FROM contents ORDER BY time DESC LIMIT 5";
              $rn = mysqli_query($con, $qr);
              if(mysqli_num_rows($rn)>0){
                while($row = mysqli_fetch_array($rn)){
                  $ids = $row['id'];
                  $content = mb_substr(nl2br($row['content']), 0, 200);
                  $heading = $row['heading'];
                  $main = $row['mainNews'];
                  $file = $row['file_name'];
                  $pdate = $row['time'];
                  $time = strtotime($pdate);
                  $date = date('d', $time);
                  $month = date('m', $time);
                  $year = date('y', $time);
                  $ptime = date('h:i A', $time);
                  $mname="";
                  if($month == 12){
                    $mname = "Dec";
                  }
                  else if($month == 1){
                    $mname = "Jan";
                  }
                  else if($month == 2){
                    $mname = "Feb";
                  }
                  else if($month == 3){
                    $mname = "Mar";
                  }
                  else if($month == 4){
                    $mname = "Apr";
                  }
                  else if($month == 5){
                    $mname = "May";
                  }
                  else if($month == 6){
                    $mname = "June";
                  }
                  else if($month == 7){
                    $mname = "July";
                  }
                  else if($month == 8){
                    $mname = "Aug";
                  }
                  else if($month == 9){
                    $mname = "Sept";
                  }
                  else if($month == 10){
                    $mname = "Oct";
                  }
                  else if($month == 11){
                    $mname = "Nov";
                  }
            ?>
                  <div class="blog_wrapper2">
                    <div class="sc_blog_image"> <a href="details.php?id=<?php echo $ids; ?>" style="font-family: Bangla,sans-serif"><img alt="blog_img1" class="img-responsive" src="posts/<?php echo $file; ?>" width="80px"></a> </div>
                    <div class="sc_blog_text">
                      <h5 style="width: 80%;"><a href="details.php?id=<?php echo $ids; ?>" style="font-family: Bangla,sans-serif;"><?php echo $heading; ?></a></h5>
                      <div class="sc_blog_date"><span style="color: #7f7f7f"><?php echo $ptime; ?>,</span> <?php echo $date;?> <?php echo $mname; ?>'<?php echo $year;?></div>
                    </div>
                  </div>
            <?php
                }
              } 
            ?> 
          </div>
        </div>   
       </div>
    </div>
  </div>
</div>
<!-- Slider Wrapper End -->
<!-- Our Featured Wrapper Start -->
<!-- Our Featured Wrapper Start -->
<!-- Our Services Wrapper Start -->
<!-- Our Services Wrapper End -->
<!-- Our Team Wrapper Start -->
<div class="our-team-wrapper" style="margin-top: -130px;">
<div class="container">
<div class="row">
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="">জাতীয়</a></h4>

    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'National' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'National' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  <?php
        }
      
      }
    }
?>
</div>
<?php

  }
?>

</div>
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="">
আন্তর্জাতিক</a></h4>
  <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'International' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'International' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  <?php
        }
      
      }
    }
?>
</div>
<?php

  }
?>


</div>
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="">পাবলিক ভার্সিটি
</a></h4>
    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Public University' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Public University' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  <?php
        }
      
      }
    }
?>
</div>
<?php

  }
?>

</div>
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="">
প্রাইভেট ভার্সিটি</a></h4>
    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Private University' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Private University' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  <?php
        }
      
      }
    }
?>
</div>
<?php

  }
?>

</div>
</div>
</div>
</div>

<div class="our-team-wrapper" style="margin-top: -130px;">
<div class="container">
<div class="row">
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="">ছাত্র রাজনীতি
</a></h4>

    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Student Politics' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Student Politics' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  <?php
        }
      
      }
    }
?>
</div>
<?php

  }
?>

</div>
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="">বিজ্ঞান ও প্রযুক্তি
</a></h4>
  <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Science and Technology' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Science and Technology' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  <?php
        }
      
      }
    }
?>
</div>
<?php

  }
?>


</div>
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="">স্কলারশিপ</a></h4>
    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Scholarship' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Scholarship' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  <?php
        }
      
      }
    }
?>
</div>
<?php

  }
?>

</div>
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="">চাকরির খবর</a></h4>
    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Job News' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Job News' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  <?php
        }
      
      }
    }
?>
</div>
<?php

  }
?>

</div>
</div>
</div>
</div>

<div class="our-team-wrapper" style="margin-top: -130px;">
<div class="container">
<div class="row">
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="">সফলতার গল্প
</a></h4>

    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Success Story' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Success Story' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  <?php
        }
      
      }
    }
?>
</div>
<?php

  }
?>

</div>
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="">
সাক্ষাতকার
</a></h4>
  <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Interview' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Interview' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  <?php
        }
      
      }
    }
?>
</div>
<?php

  }
?>


</div>
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="">

খেলাধুলা</a></h4>
    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Sports' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Sports' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  <?php
        }
      
      }
    }
?>
</div>
<?php

  }
?>

</div>
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="">
বিনোদন</a></h4>
    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Entertainment' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Entertainment' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  <?php
        }
      
      }
    }
?>
</div>
<?php

  }
?>

</div>
</div>
</div>
</div>



<div class="our-team-wrapper" style="margin-top: -130px;">
<div class="container">
<div class="row">
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="">অর্থনীতি</a></h4>

    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Economy' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Economy' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  <?php
        }
      
      }
    }
?>
</div>
<?php

  }
?>

</div>
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="">ধর্ম</a></h4>
  <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Religion' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Religion' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  <?php
        }
      
      }
    }
?>
</div>
<?php

  }
?>


</div>
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="">স্বাস্থ্য
</a></h4>
    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Health' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Health' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  <?php
        }
      
      }
    }
?>
</div>
<?php

  }
?>

</div>
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="">উদ্ভাবন</a></h4>
    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Innovations' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Innovations' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsid = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="details.php?id=<?php echo $newsid; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  <?php
        }
      
      }
    }
?>
</div>
<?php

  }
?>

</div>
</div>
</div>
</div>



<!-- Our Team Wrapper End -->
<!-- Numbering Wrapper Start 
  <div class="counter-wrapper">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="counter">
            <div class="counter-icon-box">
       <div class="counter-icon">
       <div class="icon"><a href="#"><i class="icon icon-clock"></i></a></div>
       </div>
            <div class="count-description">
        <div class="number animateNumber" data-num="6535"> <span>6535+</span></div>
            <p>Hours Worked</p>
          </div>
      </div>
        </div>
      </div>
        <div class="col-lg-3 col-md-6">
          <div class="counter">
            <div class="counter-icon-box">
       <div class="counter-icon">
       <div class="icon"><a href="#"><i class="icon icon-mobile"></i></a></div>
       </div>
            <div class="count-description">
        <div class="number animateNumber" data-num="585"> <span>585+</span></div>
            <p>Projects Completed</p>
          </div>
      </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="counter">
            <div class="counter-icon-box">
       <div class="counter-icon">
       <div class="icon"><a href="#"><i class="icon icon-presentation"></i></a></div>
       </div>
            <div class="count-description">
        <div class="number animateNumber" data-num="28"> <span>28+</span></div>
            <p>Theme Experts</p>
          </div>
      </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="counter">
            <div class="counter-icon-box">
       <div class="counter-icon">
       <div class="icon"><a href="#"><i class="icon icon-trophy"></i></a></div>
       </div>
            <div class="count-description">
        <div class="number animateNumber" data-num="775"> <span>6535+</span></div>
            <p>Awards Won</p>
          </div>
      </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Numbering Wrapper End -
  <!-- Our Blog Wrapper Start --
  <div class="blog-wrapper">
  <div class="container">
  <div class="section-title">
  <h2>Our Latest Blog</h2>
  <div class="separator"></div>
  </div>
  <div class="row">
  <div class="col-md-6">
  <div class="blog_box_wrapper">
    <div class="blog_img_wraper"> <img src="http://via.placeholder.com/570x380/000/fff" alt=""> </div>
    <div class="blog_icon_overlay">
      <ul>
        <li> 19 <span> JUNE</span> </li>
        <li> 02 <span> COM.</span> </li>
        <li> <img class="img-responsive" src="http://via.placeholder.com/65x69/000/fff" alt=""> </li>
      </ul>
    </div>
    <div class="blog_btm_cntnt">
      <h2>Where does it come from</h2>
      <p class="pad-b-10">Integer dignissim egestas est, id tristique eros pharetra sit amet. Duis et ipsum pellentesque, porta ante.</p>
      <a href="javascript:void(0)" class="tb_toppadder20">read more</a> </div>
  </div>
  </div>
  <div class="col-md-6">
  <div class="blog_box_wrapper">
    <div class="blog_img_wraper"> <img src="http://via.placeholder.com/570x380/000/fff" alt=""> </div>
    <div class="blog_icon_overlay">
      <ul>
        <li> 19 <span> JUNE</span> </li>
        <li> 02 <span> COM.</span> </li>
        <li> <img class="img-responsive" src="http://via.placeholder.com/65x69/000/fff" alt=""> </li>
      </ul>
    </div>
    <div class="blog_btm_cntnt">
      <h2>Duis ultricies aliquet mauris</h2>
      <p class="pad-b-10">Integer dignissim egestas est, id tristique eros pharetra sit amet. Duis et ipsum pellentesque, porta ante.</p>
      <a href="javascript:void(0)" class="tb_toppadder20">read more</a> </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <!-- Our Blog Wrapper End --
  <!-- Our CTA Wrapper Start --
  <div class="our-cta-wrapper">
  <div class="container">
  <div class="cta-content">
  <h2>Do you Need This Template. Please Download Now!</h2>
  <a href="https://themeforest.net/user/sbtechnosoft/portfolio" class="bttn">Buy Now</a>
  </div>
  </div>
  </div>
  <!-- Our CTA Wrapper End --
  <!-- Pricing Wrapper End --
  <section class="pricing-wrapper">
  <div class="container">
  <div class="section-title">
  <h2>Our Pricing Plan</h2>
  <div class="separator"></div>
  </div>
  <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-6">
  <div class="pricing_table">
    <div class="top_border_1"></div>
    <div class="price_table_icon"> <i class="icon icon-tools"></i> </div>
    <div class="price_table_title">
      <h5>Professional</h5>
    </div>
    <div class="price_table_list">
      <ul>
        <li>02 PSD File</li>
        <li>45 days free trial</li>
        <li>Sale after service</li>
        <li>Free Domain</li>
        <li>Free Support</li>
      </ul>
    </div>
    <div class="price_table_tag">
      <h6>$<span>10</span>/Month</h6>
    </div>
    <div class="price_table_btn"> <a href="javascript:void(0)">Purchase</a> </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-6">
  <div class="pricing_table">
    <div class="top_border_1"></div>
    <div class="price_table_icon"> <i class="icon icon-layers"></i> </div>
    <div class="price_table_title">
      <h5>Advance</h5>
    </div>
    <div class="price_table_list">
      <ul>
        <li>10 PSD File</li>
        <li>45 days free trial</li>
        <li>Sale after service</li>
        <li>Free Domain</li>
        <li>Free Support</li>
      </ul>
    </div>
    <div class="price_table_tag">
      <h6>$<span>20</span>/Month</h6>
    </div>
    <div class="price_table_btn"> <a href="javascript:void(0)">Purchase</a> </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-6">
  <div class="pricing_table">
    <div class="top_border_1"></div>
    <div class="price_table_icon"> <i class="icon icon-global"></i> </div>
    <div class="price_table_title">
      <h5>Premium</h5>
    </div>
    <div class="price_table_list">
      <ul>
        <li>50 PSD File</li>
        <li>45 days free trial</li>
        <li>Sale after service</li>
        <li>Free Domain</li>
        <li>Free Support</li>
      </ul>
    </div>
    <div class="price_table_tag">
      <h6>$<span>50</span>/Month</h6>
    </div>
    <div class="price_table_btn"> <a href="javascript:void(0)">Purchase</a> </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  <!-- Pricing Wrapper End --
  <!-- Testimonials Wrapper End --
  <section class="testimonials-wrapper">
  <div class="container">
  <div class="section-title">
  <h2>What Clients Says</h2>
  <div class="separator"></div>
  </div>
  <div class="two-item-carousel owl-carousel owl-theme">
  <!--Testimonial Block--
  <div class="testimonial-block">
    <div class="inner-box">
      <div class="image"> <img src="images/comments1.png" alt="" /> </div>
      <div class="content">
        <div class="quote-icon fa fa-quote-right"></div>
        <div class="author-info">Jeson Jons <span>/ CEO at Showroom Prohub</span></div>
        <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</div>
      </div>
    </div>
  </div>
  <!--Testimonial Block--
  <div class="testimonial-block">
    <div class="inner-box">
      <div class="image"> <img src="images/comments2.png" alt="" /> </div>
      <div class="content">
        <div class="quote-icon fa fa-quote-right"></div>
        <div class="author-info">Mark Warren <span>/ Managerment at Envato</span></div>
        <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</div>
      </div>
    </div>
  </div>
  <!--Testimonial Block--
  <div class="testimonial-block">
    <div class="inner-box">
      <div class="image"> <img src="images/comments3.png" alt="" /> </div>
      <div class="content">
        <div class="quote-icon fa fa-quote-right"></div>
        <div class="author-info">Les Stone <span>/ CEO at Showroom INC</span></div>
        <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</div>
      </div>
    </div>
  </div>
  <!--Testimonial Block--
  <div class="testimonial-block">
    <div class="inner-box">
      <div class="image"> <img src="images/comments2.png" alt="" /> </div>
      <div class="content">
        <div class="quote-icon fa fa-quote-right"></div>
        <div class="author-info">John Doe <span>/ Managerment at Envato</span></div>
        <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </section>
  <!-- News Letter Wrapper End --
  <section class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-12">
          <h4><span class="text-primary">Subscribe</span> <br>
            For Latest <span class="text-primary">Update</span></h4>
        </div>
        <div class="col-lg-9 col-12">
          <form>
            <div class="form-group">
              <input class="form-control" id="exampleInputName" placeholder="Your name" type="text">
            </div>
            <div class="form-group">
              <input class="form-control" id="exampleInputEmail" placeholder="Your email" type="email">
            </div>
            <button class="bttn">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </section>
<!-- News Letter Wrapper End -->
<!-- Testimonials Wrapper End -->
<!-- Footer Wrapper End -->
<?php
  require_once('inc/footer.php');
?>