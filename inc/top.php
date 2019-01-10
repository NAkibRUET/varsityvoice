<?php
  require_once('db_connect.php');
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="Varsity, Varsity Voice, ভার্সিটি ভয়েস, ভার্সিটি, জাতীয়, আন্তর্জাতিক, ছাত্র রাজনীতি, বিজ্ঞান ও প্রযুক্তি, স্কলারশিপ, চাকরির খবর, ক্যারিয়ার, খেলাধুলা, বিনোদন, অর্থনীতি," />
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
    .newscategory{
      color:#000;
    }
    .newscategory:hover{
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
        <div class="logo-design" style="margin-top: -10px; margin-bottom:-6px;"> 
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
