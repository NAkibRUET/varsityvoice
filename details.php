<?php
  require_once('db_connect.php');
  
  $newsid = $_GET['id'];
  $qr = "SELECT * FROM contents WHERE id = '$newsid'";
    $rn = mysqli_query($con, $qr);
  if(mysqli_num_rows($rn)>0){
      $row = mysqli_fetch_array($rn);
      //$newsid = $row['id'];
      $heading = $row['heading'];
      $file = $row['file_name'];
      $content = mb_substr($row['content'], 0, 200);
      $content2 = mb_substr($row['content'], 0, 159);
      $arr = explode(' ', trim($content)); 
      $arr2 = explode(' ', trim($heading)); 
  }
   
?>
<?php
  require_once('db_connect.php');
  
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $heading; ?></title>


<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="<?php echo $arr[0]; ?>,<?php echo $arr[1]; ?>, <?php echo $arr[2]; ?>, <?php echo $arr[3]; ?>, <?php if(!empty($arr[4]))echo $arr[4]; ?>, <?php echo $arr2[0]; ?>, <?php echo $arr2[1]; ?>, <?php echo $arr2[2]; ?>, <?php echo $arr2[3]; ?>, <?php if(!empty($arr2[4]))echo $arr2[4]; ?>, <?php if(!empty($arr2[5])) echo $arr2[5]; ?>">

<meta name="description" content="<?php echo $content2; ?>"/>
<meta name="robots" content="index, follow" />

<meta property="og:type"          content="website" />
<meta property="og:title"         content="<?php echo $heading; ?>" />
<meta property="og:description"   content="<?php echo $content; ?>" />
<meta property="og:image"         content="https://www.varsityvoice.net/posts/<?php echo $file;?>" />
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<!-- Bootstrap CSS -->

    
<link rel="canonical" href="https://www.varsityvoice.net/details.php?id=<?php echo $newsid; ?>" />
<link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<!--<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- Colors CSS -->
<link href="css/one.css" id="style_theme" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="logoxxx.jpg">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  <!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-9176548633574786",
              enable_page_level_ads: true
         });
    </script>-->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-6757398403735844",
        enable_page_level_ads: true
      });
    </script>
  <style type="text/css">
    
    .scroll{
      color: #fff;
      margin-right: 15px;
    }
    .scroll:hover{
      color:#000;
    }
    .keyCategory{
      color: #000;
    }
    .keyCategory:hover{
      color:#D23136;
    }
    

  </style>
</head>
<body>
<!-- Pre Loader -->
<div id="dvLoading"></div>
<!-- Top Wrapper Start -->
<div class="top-wrapper">
  <div class="container">
    <div class="row"> 
      <!-- TOP LEFT -->
      <div class="col-md-8 col-sm-9">
        <div class="top-address">
        </div>
      </div>
      <!-- TOP RIGHT -->
      <div class="col-md-4 col-sm-3">
        <div class="top-right-menu">
          <ul class="social-icons text-right">
            <li><a style="font-size: 19px;" class="facebook social-icon" href="https://www.facebook.com/varsityvoicebd/" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            
            <li><a style="font-size: 19px;" class="pinterest social-icon" href="https://www.youtube.com/channel/UCQy7cC-WxjYMinesebMKykw" target="_blank" title="youtube"><i class="fa fa-youtube"></i></a></li>
            <li><a style="font-size: 19px;" class="twitter social-icon" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a style="font-size: 19px;" class="linkedin social-icon" href="javascript:void(0)" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a style="font-size: 19px;" class="dribbble social-icon" href="javascript:void(0)" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Top Wrapper End -->
<!-- Header Logo Area Start -->
<div class="header-logo-area">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-4">
        <div class="logo-design"> 
          <img src="logoxxx.jpg" width="90%">
        </div>
      </div>
      <div class="col-xl-10 col-lg-10 col-md-8 d-none d-lg-block d-md-block">
        <div class="row">
          <div class="col-md-9 col-sm-9">
              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Horizontal ad -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:710px;height:100px"
                 data-ad-client="ca-pub-6757398403735844"
                 data-ad-slot="5028647704"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
             <!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        
            <ins class="adsbygoogle"
                 style="display:inline-block;width:710px;height:100px"
                 data-ad-client="ca-pub-6757398403735844"
                 data-ad-slot="6098655014"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script> -->
            <!--<div class="header-logo-address">
              <div class="header-logo-icon"> <i class="fa fa-envelope"></i> </div>
              <div class="header-logo-text">
                <p>info@varsityvoice.net</p>
                <p>admin@varsityvoice.net</p>
              </div>
            </div>-->
          </div>
          <div class="col-md-3 col-sm-3">
              <br>
            <h6 style="font-family:Bangla,sans-serif; font-weight:bold;margin-left:32px;"><script type="text/javascript" src="https://bangladate.appspot.com/index2.php"></script></h6>
            <h6 id="showdate" style="font-family:Bangla,sans-serif; font-weight:bold;margin-left:32px;"></h6>
            <script type="text/javascript">
              var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
              var today  = new Date();

              
              document.getElementById("showdate").innerHTML = today.toLocaleDateString("bn-BD", options);
            </script>
            <!--<div class="header-logo-address last-child">
              <div class="header-logo-icon"> <i class="fa fa-envelope"></i> </div>
              <div class="header-logo-text">
                <p> info@varsityvoice.net</p>
                <p> admin@varsityvoice.net</p>
                
              </div>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Header Logo Area End -->
<!-- Menu Area Start -->
<div class="mainmenu-area header-sticky bg-dark-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 d-none d-md-block d-lg-block">
          <div class="main-menu-area">
            <nav>
              <ul>
                <li><a href="https://www.varsityvoice.net"><i class="fa fa-home"></i> হোম</a></li>
                <li><a href="#">ভার্সিটি</a>
                  <ul class="dropdown_menu">
                    <li><a href="/Public-University">পাবলিক ভার্সিটি</a></li>
                    <li><a href="/Private-University">প্রাইভেট ভার্সিটি</a></li>
                    
                    
                  </ul>
                </li>
                <li><a href="/National">জাতীয়</a></li>
                <li><a href="/International">আন্তর্জাতিক</a></li>
                
                <li><a href="/Student-Politics">ছাত্র রাজনীতি</a>
                </li>       
                <li ><a href="/Science-and-Technology">বিজ্ঞান ও প্রযুক্তি</i></a>
                </li>
                <li><a href="/Scholarship">স্কলারশিপ</a></li>
                        
                <li><a href="/Admission">এডমিশন</a></li>
                <li><a href="#">ক্যারিয়ার <i class="fa fa-angle-down"></i></a><ul class="dropdown_menu">
                        <li><a href="/Success-Story">সফলতার গল্প</a>
                        </li>
                        <li><a href="/Interview">সাক্ষাতকার</a></li>
                        <li><a href="/Job News">চাকরির খবর</a></li>

                  </ul></li>
                <li><a href="/Sports">খেলাধুলা</a></li>
                <li><a href="#">অন্যান্য</a>
                  <ul class="dropdown_menu">
                    <li><a href="/Entertainment">বিনোদন</a></li>
                    <li><a href="/Economy">অর্থনীতি</a></li>
                    <li><a href="/Religion">ধর্ম</a></li>
                    <li><a href="/Health">স্বাস্থ্য</a></li>
                    <li><a href="/Literature">সাহিত্য</a></li>
                    <li><a href="/Innovations">উদ্ভাবন</a>
                    </li>
                  </ul>
                </li>
              </ul>
      <!--<div class="search-form d-sm-none d-md-none d-xl-block">
              <form method="post" action="contact-us.html">
                <div class="form-group clearfix">
                  <input name="email" value="" placeholder="Search" required="" type="email">
                  <button type="submit" class="theme-btn subscribe-btn"><span class="fa fa-search"></span></button>
                </div>
              </form>
            </div>    -->
            </nav>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 d-block d-md-none d-lg-none"> 
          <!-- Mobile Menu Area Start -->
          <div class="mobile-menu-area">
            <div class="mobile-menu">
              <nav id="mobile-menu-active">
                <ul>
                <li><a href="index.php"><i class="fa fa-home"></i> হোম</a></li>
                <li><a href="#">ভার্সিটি</a>
                  <ul class="dropdown_menu">
                    <li><a href="category.php?name=Public University">পাবলিক ভার্সিটি</a></li>
                    <li><a href="category.php?name=Private University">প্রাইভেট ভার্সিটি</a></li>
                    
                    
                  </ul>
                </li>
                <li><a href="category.php?name=National">জাতীয়</a></li>
                <li><a href="category.php?name=International">আন্তর্জাতিক</a></li>
                
                <li><a href="category.php?name=Student Politics">ছাত্র রাজনীতি</a>
                </li>       
                <li ><a href="category.php?name=Science and Technology">বিজ্ঞান ও প্রযুক্তি</i></a>
                </li>
                <li><a href="category.php?name=Scholarship">স্কলারশিপ</a></li>
                        
                <li><a href="category.php?name=Admission">এডমিশন</a></li>
                <li><a href="#">ক্যারিয়ার <i class="fa fa-angle-down"></i></a><ul class="dropdown_menu">
                        <li><a href="category.php?name=Success Story">সফলতার গল্প</a>
                        </li>
                        <li><a href="category.php?name=Interview">সাক্ষাতকার</a></li>
                        <li><a href="category.php?name=Job News">চাকরির খবর</a></li>

                  </ul></li>
                <li><a href="category.php?name=Sports">খেলাধুলা</a></li>
                <li><a href="#">অন্যান্য</a>
                  <ul class="dropdown_menu">
                    <li><a href="category.php?name=Entertainment">বিনোদন</a></li>
                    <li><a href="category.php?name=Economy">অর্থনীতি</a></li>
                    <li><a href="category.php?name=Religion">ধর্ম</a></li>
                    <li><a href="category.php?name=Health">স্বাস্থ্য</a></li>
                    <li><a href="category.php?name=Literature">সাহিত্য</a></li>
                    <li><a href="category.php?name=Innovations">উদ্ভাবন</a>
                    </li>
                  </ul>
                </li>
              </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Mobile Menu Area End --> 
  <div style="background: #f9f9f9; border-bottom: 1px solid #f2f2f2;">
    <div style="background: #D23136; border-radius: 2px;" class="container">
      <div class="row">
      <div class=" col-sm-2 col-md-1 col-lg-1" style=" background: #fff; border: .5px solid #D23136">
        <h5 style="margin-bottom: -3px; color: #D23136; font-family: 'Bangla', sans-serif; text-align: center; ">ব্রেকিংঃ </h5>
      </div>
      <div class=" col-sm-10 col-md-11 col-lg-11" style="">
        <marquee behavior="scroll" direction="left" 
          onmouseover="this.stop();" 
          onmouseout="this.start();" style="margin-bottom: -3px; color:#fff; font-weight: bold;">
          <?php
          $qr = "SELECT * FROM contents WHERE scrollNews = 'YES' ORDER BY time DESC Limit 8";
          $rn = mysqli_query($con, $qr);
          if(mysqli_num_rows($rn)>0){
            while($row = mysqli_fetch_array($rn)){
              //$content = mb_substr($row['content'], 0, 200);
              $idx = $row['id'];
              $heading = $row['heading'];
              //$main = $row['mainNews'];
              //$file = $row['file_name'];
         ?>
          <i class="fa fa-angle-double-right" ></i> <a href="details.php?id=<?php echo $idx;?>" class="scroll"><?php echo $heading; ?> </a>
          <?php
             }
          } 
          ?>
        </marquee>
      </div>
      </div>
    </div>
  </div>
  <!--<marquee behavior="scroll" direction="up" 
      onmouseover="this.stop();" 
      onmouseout="this.start();">
      <ul>
        <li><a href="#">Nakib</a></li>
        <li><a href="#">is</a></li>
        <li><a href="#">a</a></li>
        <li><a href="#">good</a></li>
        <li><a href="#">boy</a></li>
      </ul>
    </marquee>-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=849170395414923&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="inner-page-wrapper blog-wrapper"  style="margin-top: -40px;">
<div class="container">
<div class="row">
<div class="col-md-12 col-lg-12 col-xl-8">
<?php
  $qr = "SELECT * FROM contents WHERE id = '$newsid'";
    $rn = mysqli_query($con, $qr);  
  if(mysqli_num_rows($rn)>0){
      $row = mysqli_fetch_array($rn);
      //$newsid = $row['id'];
      $content = nl2br($row['content']);
      $heading = $row['heading'];
      $writer = $row['writer'];
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
<div class="blog_box_wrapper blog_box_padding">
  <div class="blog_img_wraper blog_img_wraper_2"> 
    <img alt="" src="posts/<?php echo $file;?>"> 
  </div>
  <div class="blog_icon_overlay">
    <ul>
      <li> <?php echo $date;?> <span> <?php echo $mname; ?></span></li>
      <li style="font-size: 14px;"> <?php echo $ptime; ?> </li>
    </ul>
  </div>

  <div class="btc_blog_cate_cont_wrapper">
    
    <div class="fb-share-button tb_btm_link_right" data-href="https://www.varsityvoice.net/details.php?id=<?php echo $newsid;?>" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.varsityvoice.net%2Fdetails.php%3Fid%3D<?php echo $newsid;?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
    <h5 style="font-family: Bangla,sans-serif; font-size: 26px;"><?php echo $heading; ?></h5>
    <p style="font-size: 16px; font-family: Bangla,sans-serif; font-weight: bold;"><?php if(!empty($writer)){
        ?> <?php echo $writer; ?> <?php } ?> <span style="font-size: 12px;"><?php echo $date;?> <?php echo $mname; ?>, <?php echo $year; ?></span></p>
    
    <p  style="font-size: 20px; font-family: Bangla,sans-serif;"><?php echo $content; ?></p>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-gw-3+1f-3d+2z"
     data-ad-client="ca-pub-6757398403735844"
     data-ad-slot="7226880728"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br>
      <div class="tb_btm_link_right">
        <ul>
          <li><b>Share :</b></li>
          <li><a style="color:blue;" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.varsityvoice.net%2Fdetails.php%3Fid%3D<?php echo $newsid;?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#" style="color: #0A84FF;"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#" style="color: red;"><i class="fa fa-youtube-play"></i></a></li>
          <li><a href="#" style="color: blue;"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <br>
      <div class="fb-comments" data-href="https://www.varsityvoice.net/details.php?id=<?php echo $newsid;?>" data-width="" data-numposts="5"></div>
    </div>
  </div>
</div>
<?php
}
else{
    $qr = "SELECT * FROM contents ORDER BY time DESC LIMIT 1";
    $rn = mysqli_query($con, $qr);  
  if(mysqli_num_rows($rn)>0){
      $row = mysqli_fetch_array($rn);
      //$newsid = $row['id'];
      $content = nl2br($row['content']);
      $heading = $row['heading'];
      $writer = $row['writer'];
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
  <div class="blog_box_wrapper blog_box_padding">
  <div class="blog_img_wraper blog_img_wraper_2"> 
    <img alt="" src="posts/<?php echo $file;?>"> 
  </div>
  <div class="blog_icon_overlay">
    <ul>
      <li> <?php echo $date;?> <span> <?php echo $mname; ?></span></li>
      <li style="font-size: 14px;"> <?php echo $ptime; ?> </li>
    </ul>
  </div>

  <div class="btc_blog_cate_cont_wrapper">
    
    <div class="fb-share-button tb_btm_link_right" data-href="https://www.varsityvoice.net/details.php?id=<?php echo $newsid;?>" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.varsityvoice.net%2Fdetails.php%3Fid%3D<?php echo $newsid;?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
    <h5 style="font-family: Bangla,sans-serif; font-size: 26px;"><?php echo $heading; ?></h5>
        
    <p style="font-size: 16px; font-family: Bangla,sans-serif; font-weight: bold;"><?php if(!empty($writer)){
        ?> <?php echo $writer; ?> <?php } ?> <span style="font-size: 12px;"><?php echo $date;?> <?php echo $mname; ?>, <?php echo $year; ?></span></p>
        
    
    <p  style="font-size: 20px; font-family: Bangla,sans-serif;"><?php echo $content; ?></p>
        
      <div class="tb_btm_link_right">
        <ul>
          <li><b>Share :</b></li>
          <li><a style="color:blue;" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.varsityvoice.net%2Fdetails.php%3Fid%3D<?php echo $newsid;?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#" style="color: #0A84FF;"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#" style="color: red;"><i class="fa fa-youtube-play"></i></a></li>
          <li><a href="#" style="color: blue;"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php
}
}
?>

<div class="col-md-12 col-lg-12 col-xl-4">
  
  <div class="sidebar_widget">
     <div class="fb-page" data-href="https://www.facebook.com/varsityvoicebd" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/varsityvoicebd" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/varsityvoicebd">Varsity Voice</a></blockquote></div>
        
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
    <h4 style="font-family:Bangla,sans-serif;border-bottom: 1px solid #7f7f7f;"> সর্বশেষ <span> খবর </span> </h4>
    <div class="latest_post_wrapper">
        
        <?php
              $qr = "SELECT * FROM contents ORDER BY time DESC LIMIT 5";
              $rn = mysqli_query($con, $qr);
              if(mysqli_num_rows($rn)>0){
                while($row = mysqli_fetch_array($rn)){
                  $ids = $row['id'];
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
                      <h5><a href="details.php?id=<?php echo $ids; ?>" style="font-family: Bangla,sans-serif"><?php echo $heading; ?></a></h5>
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
</div>




<div class="our-team-wrapper" style="margin-top: -130px;">
<div class="container">
<div class="row">
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="category.php?name=Success%20Story">সফলতার গল্প
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
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
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
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="category.php?name=Scholarship">স্কলারশিপ</a></h4>
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
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
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
    <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="category.php?name=Job%20News">চাকরির খবর</a></h4>
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
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
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
<div class="col-xl-3 col-md-3">
    <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="category.php?name=Public%20University">পাবলিক ভার্সিটি
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
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
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
</div>
</div>
</div>



<div class="our-team-wrapper" style="margin-top: -130px;">
<div class="container">
<div class="row">
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="category.php?name=Science%20and%20Technology">বিজ্ঞান ও প্রযুক্তি
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
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
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
    <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="category.php?name=Innovations">উদ্ভাবন</a></h4>
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
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
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
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="category.php?name=Entertainment">
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
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
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
<div class="col-xl-3 col-md-3">
  <h4 style="padding: 5px 6px; border-bottom: 1px solid #7f7f7f;font-family:Bangla,sans-serif;"><a class="keyCategory" href="category.php?name=Religion">ধর্ম</a></h4>
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
    box-shadow: 0 0 8px rgba(0,0,0,0.2); margin-bottom: 10px;min-height:450px;">
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
</div>
</div>
</div>
<?php
  require_once('inc/footer.php');
?>