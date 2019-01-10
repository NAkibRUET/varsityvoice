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
  }
   
?>
<?php
  require_once('db_connect.php');
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta property="og:type"          content="website" />
<meta property="og:title"         content="<?php echo $heading; ?>" />
<meta property="og:description"   content="<?php echo $content; ?>" />
<meta property="og:image"         content="https://www.varsityvoice.net/posts/<?php echo $file;?>" />
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Varsity Voice</title>
<!-- Bootstrap CSS -->

    

<link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<!--<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- Colors CSS -->
<link href="css/one.css" id="style_theme" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="logo.jpg">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
      color:#EA0107;
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
            <li><a style="font-size: 19px;" class="twitter social-icon" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a style="font-size: 19px;" class="pinterest social-icon" href="javascript:void(0)" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
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
      <div class="col-xl-5 col-lg-3 col-md-12">
        <div class="logo-design"> 
          <img src="logo.jpg" width="100%">
        </div>
      </div>
      <div class="col-xl-7 col-lg-9 col-md-12 d-none d-lg-block d-md-block">
        <div class="row">
          <div class="col-md-2 col-sm-2">
            <div class="header-logo-address">
              <!--<div class="header-logo-icon"> <i class="fa fa-phone-square"></i> </div>
              <div class="header-logo-text">
                <p>+01 666 777 999</p>
                <p>+01 555 222 457</p>
              </div>-->
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <!--<div class="header-logo-address">
              <div class="header-logo-icon"> <i class="fa fa-envelope"></i> </div>
              <div class="header-logo-text">
                <p>info@varsityvoice.net</p>
                <p>admin@varsityvoice.net</p>
              </div>
            </div>-->
          </div>
          <div class="col-md-4 col-sm-4">
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
                <li><a href="#">ভার্সিটি<i class="fa fa-angle-down"></i></a>
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
                        
                <li><a href="category.php?name=Job News">চাকরির খবর</a></li>
                <li><a href="#">ক্যারিয়ার <i class="fa fa-angle-down"></i></a><ul class="dropdown_menu">
                        <li><a href="category.php?name=Success Story">সফলতার গল্প</a>
                        </li>
                        <li><a href="category.php?name=Interview">সাক্ষাতকার</a></li>

                  </ul></li>
                <li><a href="category.php?name=Sports">খেলাধুলা</a></li>
                <li><a href="#">অন্যান্য<i class="fa fa-angle-down"></i></a>
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
                        
                <li><a href="category.php?name=Job News">চাকরির খবর</a></li>
                <li><a href="#">ক্যারিয়ার </a><ul class="dropdown_menu">
                        <li><a href="category.php?name=Success Story">সফলতার গল্প</a>
                        </li>
                        <li><a href="category.php?name=Interview">সাক্ষাতকার</a></li>

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
    <div style="background: #EA0107; border-radius: 2px;" class="container">
      <div class="row">
      <div class=" col-sm-2 col-md-1 col-lg-1" style=" background: #fff; border: .5px solid #EA0107">
        <h5 style="margin-bottom: -3px; color: #EA0107; font-family: 'Bangla', sans-serif; text-align: center; ">ব্রেকিংঃ </h5>
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
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
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
    
    <div class="fb-share-button tb_btm_link_right" data-href="https://www.varsityvoice.net/details.php?id=<?php echo $newsid;?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.varsityvoice.net%2Fdetails.php%3Fid%3D<?php echo $newsid;?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
    <h5 style="font-family: Bangla,sans-serif; font-size: 24px;"><?php echo $heading; ?></h5>
    <p style="font-size: 14px; font-family: Bangla,sans-serif; font-weight: bold;"><?php if(!empty($writer)){
        ?><span style="font-size: 15px">
      প্রতিবেদকঃ</span> <?php echo $writer; ?>, <?php } ?> <span style="font-size: 12px;"><?php echo $date;?> <?php echo $mname; ?>, <?php echo $year; ?></span></p>
    <p><?php echo $content; ?></p>
    <!--<div class="btc_blog_single_post_bottom_post_wrapper">
      <div class="btc_blog_single_post_quote_wrapper1"></div>
      <div class="btc_blog_single_post_quote_wrapper2"></div>
      <p>“Duis sed odio sit amet nibh vulputate cursus a sit mt mauris. Morbi accumsan ipsum velit. Nam nec tellus  odio tincidunt auctor a ornare.”</p>
      <div class="btc_testi_cont_bottom_line"></div>
      <h1>by <span>sunita due</span> (CEO,builder)</h1>
    </div>
    <div class="btc_blog_single_post_tittle_wrapper">
      <div class="btc_blog_single_tittle_img_wrapper d-none d-md-block"> <img src="http://via.placeholder.com/570x380/000/fff" class="img-responsive" alt=""> </div>
      <div class="btc_blog_single_tittle_img_cont_wrapper">
        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit at ipsum, nec sagittis sem nibh id elit. D, nisi elit at ipsum, nec sagittis sem nibh id elit. Duis sed odio sit ametbh vulputate cursus as Photoshop's veion of Lorem Ipsum. This is Photoshop'suis sed odio sit ametbh vulputate cursus a sit amet mauris.nisi elit at ipsum, nec sagittis sem nibh id elit.</p>
      </div>
    </div>
    <div class="btc_blog_single_post_tittle_wrapper">
      <div class="btc_blog_single_tittle_img_wrapper d-none d-md-block "> <img src="http://via.placeholder.com/570x380/000/fff" class="img-responsive" alt=""> </div>
      <div class="btc_blog_single_tittle_img_cont_wrapper btc_blog_single_tittle_img_cont_wrapper_right">
        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit at ipsum, nec sagittis sem nibh id elit. Duis sed odio sit ametbh vulputate cursus , nisi elit at ipsum, nec sagittis sem nibh id elit. Duis sed odio sit ametbh vulputate cursus as Photoshop's veion of Lorem Ipsum. This is Photoshop'sas Photoshop's veion of Lorem Ipsum.</p>
      </div>
    </div>
    <div class="tb_abt_bottom_link_wrapper">
      <!--<div class="tb_btm_link_left">
        <ul>
          <li>Tags:</li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Development</a></li>
          <li><a href="#">Testing</a></li>
        </ul>
      </div>-->
      
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
else{
?>
  <h5>Nothing Found</h5>
<?php
}
?>

<div class="col-md-12 col-lg-12 col-xl-4">
  <!--<div class="sidebar_widget">
    <h4> search <span> here </span> </h4>
    <form role="search" class="search_form">
      <div class="form-group">
        <input type="text" placeholder="Search here" class="form-control">
      </div>
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <div class="sidebar_widget">
    <h4> blog <span> categories </span> </h4>
    <div class="archives_wrapper">
      <ul>
        <li> <a href="#"> architecture<span>(02)</span> </a> </li>
        <li> <a href="#"> consulting<span>(25)</span> </a> </li>
        <li> <a href="#"> house <span>(35)</span> </a> </li>
        <li> <a href="#"> interior <span>(43)</span> </a> </li>
        <li> <a href="#"> Today News<span>(12)</span> </a> </li>
        <li> <a href="#"> renovation<span>(22)</span> </a> </li>
        <li> <a href="#"> transporting<span>(09)</span> </a> </li>
      </ul>
    </div>
  </div>-->
  <div class="sidebar_widget">
    <h4 style="font-family:Bangla,sans-serif;border-bottom: 1px solid #7f7f7f;"> সর্বশেষ <span> খবর </span> </h4>
    <div class="latest_post_wrapper">
        <?php
              $qr = "SELECT * FROM contents ORDER BY time DESC LIMIT 7";
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
                    <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="posts/<?php echo $file; ?>" width="80px"> </div>
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
  <!--<div class="sidebar_widget">
    <p class="para">Proin gravida nibh vel velit auctor uet. Aenean sollicitudin, lorem quis.</p>
    <div class="archives_wrapper">
      <ul>
        <li> <i aria-hidden="true" class="fa fa-phone"></i> +1 123 456 7890 </li>
        <li class="icon_ebsite"> <i aria-hidden="true" class="fa fa-envelope"></i> <a href="#">support@sbtechnosoft.com </a> </li>
        <li> <i class="fa fa-location-arrow"></i> <a href="#"> Timposn, Suite 247 USA, 222 </a> </li>
      </ul>
    </div>
  </div>
  <!--<div class="sidebar_widget">
    <h4> tags <span> cloud </span> </h4>
    <div class="gc_blog_cloud_side_menu">
      <ul>
        <li><a href="#">java srcipt</a> </li>
        <li><a href="#">Html</a> </li>
        <li><a href="#">dmax</a> </li>
        <li><a href="#">money</a> </li>
        <li><a href="#">plumber</a> </li>
        <li><a href="#">insta</a> </li>
        <li><a href="#">jquery</a> </li>
        <li><a href="#">Money</a> </li>
        <li><a href="#">update</a> </li>
      </ul>
    </div>
  </div>-->
</div>
</div>
</div>
</div>
<!-- Inner Page Wrapper End -->
<!-- Our CTA Wrapper Start --
<div class="our-cta-wrapper">
<div class="container">
<div class="cta-content">
<h2>Do you Need This Template. Please Download Now!</h2>
<a href="https://themeforest.net/user/sbtechnosoft/portfolio" class="bttn">Buy Now</a>
</div>
</div>
</div>
<!-- Our CTA Wrapper End -->
<!-- News Letter Wrapper End 
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
-->
<?php
  require_once('inc/footer.php');
?>