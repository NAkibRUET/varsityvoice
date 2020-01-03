<?php
  require_once('db_connect.php');
  require_once('inc/top.php');
  if(isset($_REQUEST["name"])){
    $category = $_REQUEST["name"];
    $category = str_replace("-", " ", $category);
  }
  //$category = $_GET['name'];
  $qr = "SELECT * FROM contents WHERE category = '$category' ORDER BY time DESC LIMIT 20";
  $rn = mysqli_query($con, $qr);
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
<?php
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
?>
      <div class="col-lg-12 mb-5">
      <div class="blog_box_wrapper">
        <div class="blog_img_wraper"> <img alt="" src="https://www.varsityvoice.net/posts/<?php echo $file;?>"> </div>
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
      </div>
    </div>

<?php
  }
}
else{
    $qr = "SELECT * FROM contents ORDER BY time DESC LIMIT 10";
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
  ?>
  <div class="col-lg-12 mb-5">
      <div class="blog_box_wrapper">
        <div class="blog_img_wraper"> <img alt="" src="https://www.varsityvoice.net/posts/<?php echo $file;?>"> </div>
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
      </div>
    </div>
<?php
}
}
}
?>
</div>
</div>

<div class="col-md-12 col-lg-4">
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
  <div class="sidebar_widget">
    <h4 style="font-family:Bangla,sans-serif; border-bottom: 1px solid #7f7f7f;"> সর্বশেষ <span> খবর </span> </h4>
    <div class="latest_post_wrapper">
        <?php
              $qr = "SELECT * FROM contents ORDER BY time DESC LIMIT 5";
              $rn = mysqli_query($con, $qr);
              if(mysqli_num_rows($rn)>0){
                while($row = mysqli_fetch_array($rn)){
                  $ids = $row['id'];
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
            ?>
                  <div class="blog_wrapper2">
                    <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="https://www.varsityvoice.net/posts/<?php echo $file; ?>" width="80px"> </div>
                    <div class="sc_blog_text">
                      <h5><a href="/details/<?php echo $url; ?>/<?php echo $ids; ?>" style="font-family:Bangla,sans-serif;"><?php echo $heading; ?></a></h5>
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
  <div class="sidebar_widget">
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
<?php
  require_once('inc/footer.php');
?>