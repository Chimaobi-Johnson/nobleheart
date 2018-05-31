<?php
include('../includes/data.counselling.php');
?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/pages-template.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="keywords" content="relationships, love, nobleheart, heart, clinic, loveclinic, relationship talk, relationship counselling">
    <meta name="description" content="Hello! We specially welcome you to our LOVE CLINIC!
Nobleheart love clinic is an online rehabilitation, healing and illumination centre born of love. At our Love Clinic, we help young people enjoy a healthy relationship; also, provide counsel for healthy marriages, parenting and teenage mentoring. We offer services such as Rehabilitations, Counselling Direct coaching">
    <meta name="author" content="Noble-Heart">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>NobleHeart-counselling</title>
    <!-- InstanceEndEditable -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <link href="../css/w3.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="file:///C|/wamp64/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/pagestyles.css" rel="stylesheet">
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
  </head>

  <body>
<div id="myModal2" class="modal fade">

  <!-- Modal content -->
  <div class="modal-content2">
    <span class="close">&times;</span>
        <form method="post" action="devotionals.php" name="myform" onsubmit="return(validate());">
                <h2>Your Email</h2>
                <p>In order to access Daily Love Devotionals Your Email is Required</p>
                <label>Email</label>
                <input type="email" name="modalemail" class="changeemail" required>
                <input class="btn btn-success btn-sm" type="submit" name="submitmodalemail" value="submit" />
            </form>
  </div>

</div>
<header>
    <div class="container-fluid">
        <div class="row">
             <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 top-social-media">
                <p style="color: #fff; padding-top: 11px; font-size: 10px"><a href="https://www.facebook.com/healthyselfcampaign" target="_blank" style="text-decoration: none;">Like on Facebook</a> |<a href="https://www.instagram.com/jefferymartins8" target="_blank" style="text-decoration: none;"> Follow on Instagram</a></p>
             </div>
             <div class="col-xs-6 col-sm-6 col-md-5 col-lg-4 top-empty"></div>
             <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 top-number">
                <table>
                    <tr>
                        <td><a href="#" data-toggle="tooltip" data-placement="left" title="contact"><img src="../img/png/contactlight.png" style="margin-bottom: 0px" width="30px" height="20px"></a></td>
                        <td>
                 <p style="padding-top: 10px; color: #fff; font-size: 12px;">+2348064987314
</p></td>
             </tr>
             </table>
             </div>
             <div class="col-xs-6 col-sm-6 col-md-2 col-lg-3 top-email">
                <table>
                    <tr>
                        <td><a href="#" data-toggle="tooltip" data-placement="left" title="gmail"><img src="../img/png/gmaillight.png" style="margin-bottom: 0px" width="30px" height="20px"></a></td>
                        <td> <p style="padding-top: 10px; color: #fff; font-size: 12px">NOBLEHEARTLOVECLINIC@GMAIL.COM</p></td>
                    </tr>
                </table>

             </div>
        </div>
    </div>
</header>



<div id="topnavbar">

    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
        data-target="#example-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../index.php"><img src="../img/png/nblogo.jpg" width="100%" ></a>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <!-- InstanceBeginEditable name="navmenu" -->
        <ul class="nav navbar-nav">
                            <li><a href="../index.php">HOME</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                <li><a href="about_jeffery.html">About Jeffery Martins</a></li>
                <li><a href="about_nobleheart.html">About Noble-Heart</a></li>
                <li class="divider"></li>
                <li><a href="about_health_esteem.html">About Healthy Self-Esteem</a></li>
          </ul>
                </li>
                <li><a data-toggle="modal" data-target="#myModal2" href="#">LOVE DEVOTIONALS</a></li>
                <li><a href="online_courses.html">ONLINE COURSES</a></li>
                <li><a href="healthy_self_esteem.php">HEALTHY SELF-ESTEEM</a></li>
                <li><a href="events.html">EVENTS</a></li>
                <li class="dropdown">
                <a href="others.html">OTHERS</a></li>
        </ul>
        <!-- InstanceEndEditable -->
            <div class="social-menu">
              <ul>
                <li><a href="http://www.facebook.com/nobleheartloveclinic" style="text-decoration: none;" target="blank"><img src="../img/png/facebook.png" width="20px" height="20px" alt="facebook"></a></li>
                <li><a href="https://www.instagram.com/jefferymartins8" style="text-decoration: none;" target="blank"><img src="../img/png/instagram.png" width="20px" height="20px" alt="facebook"></a></li>
                <li><a href="http://www.twitter.com/nobleheart11" style="text-decoration: none;" target="blank"><img src="../img/png/twitter.png" width="20px" height="20px" alt="twitter"></a></li>
                <li><a href="" style="text-decoration: none;" target="blank"><img src="../img/png/pinterest.png" width="20px" height="20px" alt="pinterest"></a></li>
                <li><a href="https://www.youtube.com/channel/UCUo-qdDa5KqUywpL3nuyJWw" style="text-decoration: none;" target="blank"><img src="../img/png/youtube.png" width="20px" height="20px" alt="youtube"></a></li>
                <li><a href="https://chat.whatsapp.com/AZPE8I9b3Z93ouIb4C519l" target="_blank" style="text-decoration: none;"><img src="../img/png/whatsapp.png" width="20px" height="20px" alt="whatsapp"></a></li>
                <li><a href="" style="text-decoration: none;" target="blank"><img src="../img/png/linkedin.png" width="20px" height="20px" alt="linkedIn"></a></li>
              </ul>
            </div>
        </div>
</nav> 
  
        </div>
<section class="page-content">
  <div class="container-fluid">
  <div class="row"><!-- InstanceBeginEditable name="content" -->
   <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 bluepage">
      <h2 style="color: #941212; font-size: 13px">Welcome to the counselling session, as a first timer to this site you have an opportunity to state your needs in our counselling form below</h2>
      <h3 style="font-weight: bold">Pro-Counselling Form</h3>
      <br />
         <form action="counselling.php" method="post" class="form-horizontal">
            <div class="form-group">
              <label class="control-label col-sm-2" for="name">Name:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="firstName" name="name" placeholder="Enter Name" max="15" min="2" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="location">Location:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="location" name="location" placeholder="Enter Your Location" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="state">State/Country:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="state" name="state" placeholder="Enter State/Country" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
              </div>
            </div>
             <div class="form-group">
              <label class="control-label col-sm-2" for="social">Social Media Contacts:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="social" name="social" placeholder="Enter social media links">
              </div>
            </div>
             <div class="form-group">
              <label class="control-label col-sm-2" for="occupation">Occupation:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Enter Your Occupation">
              </div>
            </div>
             <div class="form-group">
                <label class="control-label col-sm-2" for="description">Counselling Description:</label>
                <textarea class="form-control how" rows="5" cols="2" id="description" name="description" placeholder="Not more than 500 words" required></textarea>
                </div>
             <div class="form-group">
                <label class="control-label col-sm-2" for="description">Brief History of When/How it Began:</label>
                <textarea class="form-control how" rows="5" cols="2" id="description" name="history" placeholder="Not more than 500 words"></textarea>
                </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="submit" name="submitcounselling" class="btn btn-danger" />
              </div>
            </div>
          </form>
          <marquee><p style="color: red">Please note that this counselling session is pro-version and you need to suscribe for a sustained version to have contineous access to NobleHeart for counselling</p></marquee>
             <button style="margin-bottom: 20px; color: #000" data-toggle="collapse" data-target="#Sustained">For Sustained Counselling Version, Please Click Here</button>

              <div id="Sustained" class="collapse">
                <div class="Sustained-green">
                  <h3>Sustained Counselling Version</h3>
                  <h5 style="color: yellow">Welcome to sustained Counselling session!</h5>
                  <p>Please note that this session grants you access to a one on one counselling on any issue of concern via visual, audio or written method as you desire</p>
                </div>
                <div class="payment-options">
                  <h3>Payment Option</h3>
                  <table class="payment">
                    <tr>
                      <td><b>Outside Nigeria:</b></td>
                      <td><b>5 U.S Dollars</b> Monthly, <b>13 U.S Dollars</b> quarterly or <b>25 U.S Dollars</b> for 6 Months + 1 Month Free</td>
                    </tr>
                    <tr>
                      <td><b>Within Nigeria:</b></td>
                      <td><b>1,250 Naira</b> Monthly, <b>3,350 Naira</b> quarterly or <b>7,000 naira</b> for 6 Months + 1 MOnth free</td>
                    </tr>
                  </table>
                  <p>All payments are to be made to <b>(GT Bank PLC Nigeria)</b><br />Receipt of payment + choice of subscription details should be emailed to......</p>
                </div>
              </div>
    </div>
  
  <!-- InstanceEndEditable -->
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 page-sidebar">
      <div class="row">
        <div class="bar1">
          <h3>NobleHeart Counselling</h3>
          <a class="btn btn-primary" style="background-color: #000!important; margin-left: 30px !important; color: #fff !important; border: none !important; border-radius: 0px !important;" href="counselling.php" role="button" style="text-decoration: none;">Get Started</a>
        </div>
      <div class="bar2">
        <h3>Recent Articles</h3>
        <ul>
          <li><a href="lies_guys_tell.php">Some Lies Guys Often Tell</a></li>
          <li><a href="tips_to_starting_relationship.php">10 Tips to Starting a New Relationship</a></li>
          <li><a href="marrying_a_pastor.php">Few Things You Must Know Before You Marry a Pastor</a></li>
        </ul>
      </div>
      <div class="bar3">
        <h3 style="font-size: 18px; color: #fff; padding:10px; font-weight: bold; opacity: 0.9;">Have a Message for Us at NobleHeart?<br />
          <span style="color:#a60000"><a href="contactpage.php">Contact Us</a></span></h3>
      </div>
</div>
    </div>
  </div>
</div>
</section>

  <section class="cardrows">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 boxheader">
                    <h2>EXPLORE WHAT WE HAVE TO OFFER</h2>
                </div>
            </div>
<div class="row blocks">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 blue">
<a href="videos.html" style="text-decoration: none;"><div class="boxvideo">
    <img src="../img/png/vidblack.jpg" width="250px" height="200px">
    <h5 style="text-align: center; font-weight: bold; opacity: 0.8; padding-top: 8px">VIDEOS</h5>
</div></a>
            </div>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 yellow">
    <a href="relationship_talk.html" style="text-decoration: none;"><div class="boxdevotionals">
        <img src="../img/loved.jpg" width="250px" height="200px">
        <h5 style="text-align: center; font-weight: bold; opacity: 0.8; padding-top: 8px"><a href="relationship_talk.html" style="text-decoration: none;">RELATIONSHIP TALK</a></h5></a>
    </div>
</div>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 brown">
    <a href="counselling.php" style="text-decoration: none;"><div class="boxself-esteem">
        <img src="../img/png/relationships.png" width="250px" height="200px">
        <h5 style="text-align: center; font-weight: bold; opacity: 0.8; padding-top: 8px"><a href="counselling.php" style="text-decoration: none;">COUNSELLING</a></h5>
    </div></a>
</div>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 green">
   <a href="online_courses.html" style="text-decoration: none;"><div class="boxonlinecourses">
       <img src="../img/onlinecourses.jpg" width="250px" height="200px">
       <h5 style="text-align: center; font-weight: bold; opacity: 0.8; padding-top: 8px">ONLINE COURSES</h5>
   </div>
</div></a>
</div>
  </section>
  <section id="block_ads"><p id="ads_text" style="color:#000; text-align: center;padding-top: 35px; opacity: 0.8;">HOVER ME!!!!!</p>
<div id="block">
 <p id="blocktext">PLACE YOUR ADS HERE</p>
</div>
</section>
<footer>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 bottomnav">
            <ul>
               <li><a href="../index.php">Home</li>
               <li><a href="about_jeffery.html">About</li>
               <li><a href="videos.html">Videos</li>
               <li><a href="healthy_self_esteem">Healthy Self Esteem</li>
               <li><a href="..pages/relationship_talk.html">Relationship Talk</li>
               <li><a href="events.html">Events</li>
               <li><a href="online_courses">Online Courses</li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 foot-social-media">
              <h4>FOLLOW US</h4><br />
              <table class="mediatable">
                  <tr>
                    <td><img src="../img/png/facebook.png" width="30px" height="30px" alt="facebook"></td>
                    <td><a href="http://www.facebook.com/nobleheartloveclinic" target="_blank" style="text-decoration: none;">FACEBOOK</a></td>
                  </tr>
                  <tr>
                    <td><img src="../img/png/instagram.png" width="30px" height="30px" alt="facebook"></td>
                    <td><a href="https://www.instagram.com/jefferymartins8" target="_blank" style="text-decoration: none;">INSTAGRAM</a></td>
                  </tr>
                  <tr>
                    <td><img src="../img/png/twitter.png" width="30px" height="30px" alt="twitter"></td>
                    <td><a href="https://www.twitter.com/nobleheart11" target="_blank" style="text-decoration: none;">TWITTER</a></td>
                  </tr>
                  <tr>
                    <td><img src="../img/png/youtube.png" width="30px" height="30px" alt="youtube"></td>
                    <td><a href="https://www.youtube.com/channel/UCUo-qdDa5KqUywpL3nuyJWw" target="_blank" style="text-decoration: none;">YOUTUBE</a></td>
                  </tr>
                  <tr>
                    <td><img src="../img/png/whatsapp.png" width="30px" height="30px" alt="whatsapp"></td>
                    <td><a href="https://chat.whatsapp.com/AZPE8I9b3Z93ouIb4C519l" target="_blank" style="text-decoration: none;">WHATSAPP</a></td>
                  </tr>
                  <tr>
                    <td><img src="../img/png/linkedin.png" width="30px" height="30px" alt="linkedIn"></td>
                    <td>LINKEDIN</td>
                  </tr>
                  <tr>
                    <td><img src="../img/png/pinterest.png" width="30px" height="30px" alt="pinterest"></td>
                    <td>PINTEREST</td>
                  </tr>
              </table>

          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 copyright">
             <p class="copyright2">Copyright&copy;2018<span style="color: #c33a1f">NobleHeart</span>.All Rights Reserved<br /><br />
              Powered by <i><a href="https://web.facebook.com/MarvisConcepts-161953221188080" style="text-decoration:none;" target="_blank">MarvisConcepts</a></i></p>
          </div>

        </footer>




<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/javascript.js" type="text/javascript"></script>
 <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
          $("#block_ads").mouseenter(function(){
            $("#ads_text").hide();
          });
          $("#block_ads").mouseenter(function(){
            $("#block").fadeIn(3000);
          });
           $("#block_ads").mouseleave(function(){
            $("#block").fadeOut(3000);
          });
    });
    </script>
<script id="dsq-count-scr" src="//www-nobleheartloveclinic-com.disqus.com/count.js" async></script>
  </body>

  <!-- InstanceEnd --></html>
