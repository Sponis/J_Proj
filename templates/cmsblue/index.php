<?php
/**
 * Author       Luis Posselt
 * Website      CMSTeachings.com
 * @license		GNU/GPL
**/
defined('_JEXEC') or die;
define( 'YOURBASEPATH', dirname(__FILE__) );
/* The following line gets the application object for things like displaying the site name */

$app                    = JFactory::getApplication();
$templateparams     	= $app->getTemplate(true)->params;
$generator              = $this->params->get('generator');
$mootools_core_enabled  = ($this->params->get("mootools_core_enabled", 1)  == 0)?"false":"true";
$mootools_more_enabled  = ($this->params->get("mootools_more_enabled", 1)  == 0)?"false":"true";
$caption_enabled        = ($this->params->get("caption_enabled", 1)  == 0)?"false":"true";
$cmstraining			= "http://cmsteachings.com/joomla-tutorials-beginners";
$cmsteachings			= "Joomla Tutorials for Beginners";
$cmsbeginners			= "Beginners";
$evengrid				= "4";
$oddgrid				= "2";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<html lang="<?php echo $this->language; ?>">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
 <jdoc:include type="head" />
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Joomla Project</title>
 <meta name="description" content="My First Joomla Site">
 <meta name="author" content="Vassilis Sponis">

 <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

 <link rel="stylesheet" href="/templates/cmsblue/css/normalize.css">
 <link rel="stylesheet" href="/templates/cmsblue/css/main.css">
 <link rel="stylesheet" href="/templates/cmsblue/css/lightbox.css">
 <script src="/templates/cmsblue/js/vendor/modernizr-2.6.2.min.js"></script>
 <link href='http://fonts.googleapis.com/css?family=Trykker|Share+Tech' rel='stylesheet' type='text/css'>
 <?php if ($generator): ?>
 <?php $this->setGenerator($templateparams->get('generator'));?>
<?php endif;?>
<?php
require(YOURBASEPATH . DS . "optimizer.php");
?>
<?php
if ($this->countModules('left') == 0):?>
<?php $evengrid		= "0";?>
<?php endif; ?>
<?php
if ($this->countModules('right') == 0):?>
<?php $oddgrid		= "0";?>
<?php endif; ?>
<!--<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/blue.css" rel="stylesheet" type="text/css" />-->
   <!--[if lte IE 9]>
   <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/blue-ie9.css" rel="stylesheet" type="text/css" />
   <![endif]-->
   <!--[if lte IE 8]>
   <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
   <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/blue-ie8.css" rel="stylesheet" type="text/css" />
   <![endif]-->
   <!--[if lte IE 7]>
   <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
   <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/blue-ie7.css" rel="stylesheet" type="text/css" />
   <![endif]-->
   <!--[if lte IE 6]>
   <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-1.2.6.min.js"></script>
   <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.ie6blocker.js"></script>
   <![endif]-->
 </head>

 <body>
  <header>
    <div id="tophead">
      <div class="wrapper">
        <span id="sub">Subscribe to:</span>
        <ul id="sub_list">
          <li><a title="Posts" href="#">Posts</a></li>
          <li><a title="Comments" href="#">Comments</a></li>
          <li><a class="noborder" title="Email" href="#">Email</a></li>
        </ul>
        <div id="searchform">
          <jdoc:include type="modules" name="search" style="none" />
        </div>
        <div id="social">
          <jdoc:include type="modules" name="social" style="none" />
        </div>
      </div>
    </div>
    <div id="bothead">
      <div class="wrapper">
        <h1 id="logo">
          <jdoc:include type="modules" name="logo" style="none" />
        </h1>
        <nav>
          <ul>
            <li class="nav01"><a class="navi active" title="Home" href="/index.html">Home</a></li>
            <li class="nav02"><a class="navi" title="About" href="#">About</a></li>
            <li class="nav03"><a class="navi" title="Portfolio" href="#">Portfolio</a></li>
            <li class="nav04"><a class="navi" title="Blog" href="OurBlogs.html">Blog</a></li>
            <li class="nav05"><a class="navi" title="Contact" href="/contactpage.php">Contact</a></li>
          </ul>
        </nav>
      </div>  
    </div>  
  </header>
  <!--- END OF HEADER-->
  <div id="content"> 
    <div class="wrapper">
      <div id="slideshow">
        <img src="/templates/cmsblue/images/main.jpg" alt="mainpic">
        <img src="/templates/cmsblue/images/main2.jpg" alt="alt1pic">
        <img src="/templates/cmsblue/images/main3.jpg" alt="alt2pic">
        <img src="/templates/cmsblue/images/main4.jpg" alt="alt3pic">
      </div>
      <div id="slidenav">
        <a href="#"><span id="previousbutton"></span></a>
        <ul id="pagenavi"></ul>
        <a href="#"><span id="nextbutton"></span></a>
      </div>

      <div id="box">
        <div id="boxA" class="mainbox">
          <div class="boxhead">       
            <h3 class="boxhd boxAico">About iPadMasters</h3>
          </div>
          <div class="innerbox">
            <img class="boxpic" src="/templates/cmsblue/images/boxApic.jpg" alt="picA">
            <h4 class="subhead">All About iPadMasters</h4>    <p id="boxAtext" class="textbox">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
            <a id="buttonA" class="buttontext" title="Learn More" href="#">Learn More</a>
          </div>
        </div>
        <div id="boxB" class="mainbox">
          <div class="boxhead">
           <h3 class="boxhd boxBico">Our Blog Updates</h3>
         </div>
         <div class="innerbox">
          <img class="boxpic" src="/templates/cmsblue/images/boxBpic.jpg" alt="picB">
          <h4 id="MyFirst">
           <span class="subhead sechead">My First Website Creation</span>
           <span class="textbox secsub">Posted in <a title="Web Design" href="#">Web Design</a> on April 13,2010</span>
         </h4>
         <p id="boxBtext" class="textbox">Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
         <a id="buttonB" class="buttontext" title="Comments" href="#">23 Comments</a>
         <a id="buttonC" class="buttontext" title="Read More" href="#">Read More</a>
       </div>
     </div>
     <div id="boxC">
      <div class="boxhead">
        <h3 class="boxhd boxCico">Get In Touch</h3>
      </div>
      <div class="innerbox2">
        <ul>
          <li>
            <h4 class="phoneico">
              <span class="phoneinfo">
                <span class="subhead phonehead">PHONE</span>
                <span class="textbox phonetext">1+ (123)456.789</span>                        
              </span>
            </h4>
          </li>
          <li>
            <h4 class="emailico">
              <span class="phoneinfo">
                <span class="subhead phonehead">EMAIL</span>
                <span class="textbox phonetext">email@yourdomain.com</span>
              </span>      
            </h4>
          </li>
          <li>
            <h4 class="skypeico">
              <span class="phoneinfo">
                <span class="subhead phonehead">SKYPE</span>
                <span class="textbox phonetext">yourskypename</span>      
              </span>
            </h4>
          </li>
          <li>
           <h4 class="skypeico">
            <span class="phoneinfo">
              <span class="subhead phonehead">OTHER REQUEST</span>
              <span class="textbox phonetext">Try Our Contact Form</span>                    
            </span>
          </h4>
        </li>
      </ul>
    </div>
  </div>
  <div id="boxD">
    <ul>
      <li>
        <a class ="twitter_icon" title="twitter" href="#"></a>
      </li>
      <li>
        <a class ="facebook_icon" title="facebook" href="#"></a>
      </li>
      <li>
        <a class ="flickr_icon" title="flickr" href="#"></a>
      </li>
      <li>
        <a class ="linkedin_icon" title="linkedin" href="#"></a>
      </li>
      <li>
        <a class ="tumblr_icon" title="tumblr" href="#"></a>
      </li>
      <li>
        <a class ="youtube_icon" title="youtube" href="#"></a>
      </li>
    </ul>
  </div>

</div>
</div>
</div>
<div id="info">
  <div class="wrapper">
    <div id="about">
      <h4 class="head">About Us</h4>
      <br>
      <ul>
        <li><a class="listlinks" href="#">Our Company</a></li>
        <li><a class="listlinks" href="#">Our Blog</a></li>
        <li><a class="listlinks" href="#">Submit A Site</a></li>
        <li><a class="listlinks" href="#">Contact Us</a></li>
        <li><a class="listlinks" href="#">Help & Terms</a></li>
        <li><a class="listlinks" href="#">Read Our FAQ</a></li>
      </ul>
    </div>
    <div id="Categories">
      <h4 class="head">Categories</h4>
      <br>
      <ul>
        <li><a class="listlinks" href="#">Trends & Technology</a></li>
        <li><a class="listlinks" href="#">Desigh Companies</a></li>
        <li><a class="listlinks" href="#">Design Freelancers</a></li>
        <li><a class="listlinks" href="#">Web Portfolios</a></li>
        <li><a class="listlinks" href="#">Web Development</a></li>
        <li><a class="listlinks" href="#">General Icons</a></li>
      </ul>
    </div>
    <div id="Gallery">
      <h4 class="head">From The Gallery</h4>
      <br>
      <table id="photos">
        <tr>
          <td><a href="/templates/cmsblue/images/gall01.jpg" data-lightbox="gallery" title="Image 01"><img src="/templates/cmsblue/images/gall01.jpg" alt="img01"></a></td>
          <td><a href="/templates/cmsblue/images/gall02.jpg" data-lightbox="gallery" title="Image 02"><img src="/templates/cmsblue/images/gall02.jpg" alt="img02"></a></td>
          <td><a href="/templates/cmsblue/images/gall03.jpg" data-lightbox="gallery" title="Image 03"><img src="/templates/cmsblue/images/gall03.jpg" alt="img03"></a></td>
          <td><a href="/templates/cmsblue/images/gall04.jpg" data-lightbox="gallery" title="Image 04"><img src="/templates/cmsblue/images/gall04.jpg" alt="img04"></a></td>
        </tr>
        <tr>
          <td><a href="/templates/cmsblue/images/gall05.jpg" data-lightbox="gallery" title="Image 05"><img src="/templates/cmsblue/images/gall05.jpg" alt="img05"></a></td>
          <td><a href="/templates/cmsblue/images/gall06.jpg" data-lightbox="gallery" title="Image 06"><img src="/templates/cmsblue/images/gall06.jpg" alt="img06"></a></td>
          <td><a href="/templates/cmsblue/images/gall07.jpg" data-lightbox="gallery" title="Image 07"><img src="/templates/cmsblue/images/gall07.jpg" alt="img07"></a></td>
          <td><a href="/templates/cmsblue/images/gall08.jpg" data-lightbox="gallery" title="Image 08"><img src="/templates/cmsblue/images/gall08.jpg" alt="img08"></a></td>
        </tr>
      </table>
    </div>
    <div id="twupdates">
      <h4 class="head">Twitter Updates</h4>
      <div id="example1"></div>
    </div>
  </div>
</div>
<footer>
  <div class="wrapper">
    <p id="copyright">© 2010 Copyright iPadMasters Theme. All Rights Reserved.</p>
    <div id="links">
      <ul>
        <li><a href="#">Log In</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms and Conditions</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a class="noborder" href="#">Back to Top</a></li>
      </ul>
    </div>
  </div>
</footer>
<script src="/templates/cmsblue/js/vendor/jquery-1.10.2.min.js"></script>
<script src="/templates/cmsblue/js/vendor/lightbox-2.6.min.js"></script>
<script src="/templates/cmsblue/js/vendor/twitterFetcher_v10_min.js"></script>
<script src="/templates/cmsblue/js/vendor/jquery.cycle.all.js"></script>
<script src="/templates/cmsblue/js/main.js"></script>    
</body>
</html>