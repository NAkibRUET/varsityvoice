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
      $url = str_replace(" ", "-", $heading);
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
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=849170395414923&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="inner-page-wrapper blog-wrapper" style="margin-top: -40px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="row">
          <div class="col-lg-12 mb-5">
            <a style="text-decoration:none;" href="/details/<?php echo $url;?>/<?php echo $newsid; ?>"><div class="blog_box_wrapper">
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
                <a class="tb_toppadder20" href="/details/<?php echo $url; ?>/<?php echo $newsid; ?>">আরও পড়ুন</a> 
              </div>
            </div></a>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <div class="fb-page" data-href="https://www.facebook.com/varsityvoicebd" data-height="Max. 50" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/varsityvoicebd" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/varsityvoicebd">Varsity Voice</a></blockquote></div>
        <br>
        <br>
          <div style="height:280px; width:100%">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Square -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-6757398403735844"
                 data-ad-slot="6773028119"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
          <br>
          <h4 style="font-family:Bangla,sans-serif;border-bottom: 1px solid #7f7f7f;"> সর্বশেষ <span> খবর </span> </h4>
          <div class="latest_post_wrapper">
            <?php
              $qr = "SELECT * FROM contents ORDER BY time DESC LIMIT 3";
              $rn = mysqli_query($con, $qr);
              if(mysqli_num_rows($rn)>0){
                while($row = mysqli_fetch_array($rn)){
                  $ids = $row['id'];
                  $content = mb_substr(nl2br($row['content']), 0, 200);
                  $heading = $row['heading'];
                  $urlx = str_replace(" ", "-", $heading);
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
                    
                    <div class="sc_blog_image"> <a href="/details/<?php echo $urlx; ?>/<?php echo $ids; ?>" style="font-family: Bangla,sans-serif"><img alt="blog_img1" class="img-responsive" src="posts/<?php echo $file; ?>" width="80px"></a> </div>
                    <div class="sc_blog_text">
                      <h5 style="width: 80%;"><a href="/details/<?php echo $urlx; ?>/<?php echo $ids; ?>" style="font-family: Bangla,sans-serif;"><?php echo $heading; ?></a></h5>
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
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="/category/National">জাতীয়</a></h4>

    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'National' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px; min-height:450px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'National' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
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
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="/category/International">
আন্তর্জাতিক</a></h4>
  <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'International' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px; min-height:450px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'International' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
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
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="/category/Public-University">পাবলিক ভার্সিটি
</a></h4>
    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Public University' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Public University' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
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
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="/category/Private-University">
প্রাইভেট ভার্সিটি</a></h4>
    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Private University' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Private University' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
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
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="/category/Student-Politics">ছাত্র রাজনীতি
</a></h4>

    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Student Politics' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Student Politics' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
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
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="/category/Science-and-Technology">বিজ্ঞান ও প্রযুক্তি
</a></h4>
  <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Science and Technology' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Science and Technology' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
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
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="/category/Scholarship">স্কলারশিপ</a></h4>
    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Scholarship' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Scholarship' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
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
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="/category/Job-News">চাকরির খবর</a></h4>
    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Job News' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Job News' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
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
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="/category/Success-Story">সফলতার গল্প
</a></h4>

    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Success Story' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Success Story' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
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
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="/category/Literature">
সাহিত্য
</a></h4>
  <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Literature' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Literature' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
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
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="/category/Sports">

খেলাধুলা</a></h4>
    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Sports' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Sports' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
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
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="/category/Entertainment">
বিনোদন</a></h4>
    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Entertainment' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Entertainment' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
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
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="/category/Economy">অর্থনীতি</a></h4>

    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Economy' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Economy' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
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
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="/category/Religion">ধর্ম</a></h4>
  <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Religion' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Religion' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
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
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="/category/Health">স্বাস্থ্য
</a></h4>
    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Health' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Health' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
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
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="/category/Innovations">উদ্ভাবন</a></h4>
    <?php
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Innovations' ORDER BY time DESC Limit 1");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    //for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  <div class="business-title-left" style="background: #f9f9f9; -moz-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 0 8px rgba(0,0,0,0.2);
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
  <?php
      //if($i==0){

    
  ?>
  <img alt="" src="posts/<?php echo $file; ?>" width="100%">
  <div style="padding: 0px 10px; padding-top: 10px;">
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
  </div>
  
  
  <?php
    
    $qr = mysqli_query($con,"SELECT * FROM contents WHERE category = 'Innovations' ORDER BY time DESC Limit 3");
    if(mysqli_num_rows($qr)>0){
    $ct = mysqli_num_rows($qr);
    for($i=0;$i<$ct;$i++){
      $row = mysqli_fetch_array($qr);
      $newsidx = $row['id'];
      $heading = mb_substr($row['heading'], 0, 140);
      $heading2 = $row['heading'];
      $urlz = str_replace(" ", "-", $heading2);
      $file = $row['file_name'];
      
  ?>
  
  <?php
      if($i>0){
    
  ?>
  
  <div style="padding: 0px 10px; ">
    <hr>
    <a class="newscategory" href="/details/<?php echo $urlz; ?>/<?php echo $newsidx; ?>"><h5 style="font-family: Bangla,sans-serif"><?php echo $heading; ?></h5></a>
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



<!
<!-- Footer Wrapper End -->
<?php
  require_once('inc/footer.php');
?>