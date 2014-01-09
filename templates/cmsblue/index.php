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
      <?php if($this->countModules('sub')) : ?>
      <jdoc:include type="modules" name="sub" style="none" />
       <?php endif; ?>
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
      <jdoc:include type="modules" name="nav" style="none" />
    </div>  
  </div>  
</header>
<!--- END OF HEADER-->
<div id="content"> 
  <div class="wrapper">
    <jdoc:include type="message" />
    <jdoc:include type="component" />
 </div>
</div>
</div>
<div id="info">
  <div class="wrapper">
    <jdoc:include type="modules" name="info" style="none" />
  </div>
</div>
<?php if($this->countModules('footer')) : ?>
  <div id="footer">
    <jdoc:include type="modules" name="footer" style="none" />
  </div>
<?php endif; ?>
<script src="/templates/cmsblue/js/vendor/jquery-1.10.2.min.js"></script>
<script src="/templates/cmsblue/js/vendor/lightbox-2.6.min.js"></script>
<script src="/templates/cmsblue/js/vendor/twitterFetcher_v10_min.js"></script>
<script src="/templates/cmsblue/js/vendor/jquery.cycle.all.js"></script>
<script src="/templates/cmsblue/js/main.js"></script>    
</body>
</html>