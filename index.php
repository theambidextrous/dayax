
<?php 
require_once('server/conf.dayax.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<base href="<?=SYS_URL?>" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?=KEY_WORDS?>" />
<meta name="description" content="<?=DESCRIPTION?>" />
<meta name="generator" content="<?=DEV?>" />
<title><?=SYS_NAME?></title>
<link href="<?=SYS_URL?>" rel="canonical" />
<link href="<?=SYS_ICON?>" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<link href="<?=SYS_URL?>?search" rel="search" title="Search DCL Logistics" type="application/opensearchdescription+xml" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?=SYS_URL?>wpthemes/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?=SYS_URL?>wpthemes/css/djmenu.css" type="text/css" />
<link rel="stylesheet" href="<?=SYS_URL?>wpthemes/css/djmenu_fx.css" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    .dj-select {display: none;  padding:5px; font-size:1.5em; max-width:95%;height:auto;}
    @media (max-width: 800px) {
    #dj-main87.allowHide { display: none; }
    #dj-main87select { display: inline-block; }
    }
</style>
<script src="<?=SYS_URL?>wpthemes/js/mootools-core.js" type="text/javascript"></script>
<script src="<?=SYS_URL?>wpthemes/js/core.js" type="text/javascript"></script>
<script src="<?=SYS_URL?>wpthemes/js/caption.js" type="text/javascript"></script>
<script src="<?=SYS_URL?>wpthemes/js/jquery.min.js" type="text/javascript"></script>
<script src="<?=SYS_URL?>wpthemes/js/jquery-noconflict.js" type="text/javascript"></script>
<script src="<?=SYS_URL?>wpthemes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=SYS_URL?>wpthemes/js/dropline-helper.js" type="text/javascript"></script>
<script src="<?=SYS_URL?>wpthemes/js/djselect.js" type="text/javascript"></script>
<script src="<?=SYS_URL?>wpthemes/js/djmenu.js" type="text/javascript"></script>
<script type="text/javascript">
    window.addEvent('load', function() {
        new JCaption('img.caption');
    });
    window.addEvent('domready',function(){document.id('dj-main87').addClass('allowHide')});
    window.addEvent('domready',function(){ this.djmenu87 = new DJMenus(document.id('dj-main87'), {wrapper: document.id(''), transition: 'cubic:out', duration: 200, delay: 1200,
    height_fx: true, width_fx: true, opacity_fx: true,
    height_fx_sub: true, width_fx_sub: true, opacity_fx_sub: true }); });
</script>
<style type="text/css">
body.site
{
background-color: #ffffff		}
a
{
color: #498f2d;
}
.r2, .r2, .r4 {
    margin: 3px 0px !important;
}
.navbar-inner, .nav-list > .active > a, .nav-list > .active > a:hover, .dropdown-menu li > a:hover, .dropdown-menu .active > a, .dropdown-menu .active > a:hover, .nav-pills > .active > a, .nav-pills > .active > a:hover,
.btn-primary
{
background: #498f2d;
}
.clear-div {
    clear: both;
}
.navbar-inner
{
-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
}
.dj-main li.hover a.dj-up_a span, .dj-main li.active a.dj-up_a span {
    background: #1AB61E!important;
}

.dj-main li a.dj-up_a span {
    float: left;
    display: block;
    padding: 0 15px 0 0;
    height: 35px;
    background: #214cda!important;
}
.dj-main li a.dj-up_a {
    display: block;
    float: left;
    height: 35px;
    line-height: 33px;
    color: #eee;
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
    padding: 0 0 0 15px;
    cursor: pointer;
	background: #214cda!important;
}
.dj-main {
    padding: 0 !important;
    margin: 0 !important;
    list-style: none;
    height: 35px;
	background: #214cda!important;
    position: relative;
    z-index: 500;
    font-family: arial, verdana, sans-serif;
    width: auto;
}
h1, h2, h3, h4, h5, h6 {
    color: #0ba92d;
    margin: 5px 0;
    font-family: inherit;
}
.signup a {
    color: #fff;
    padding: 3px 5px;
    border-radius: 0.3em;
    background: #214cda;
    border: 1px solid #214cda;
}
.track_btn {
    color: #fff;
    padding: 5px;
    background: #1AB61E;
    border-radius: 0.3em;
    border: 1px solid #1AB61E;
    font-weight: bold;
}
.container {
    padding-right: 2px;
    padding-left: 2px;
    margin-right: auto;
    margin-left: auto;
}

.container {
    max-width: 1160px;
}
.r2 h1 {
    text-align: left!important;
    font-weight: normal;
    font-size: 40px;
    margin: 10px 0px;
    line-height: 45px;
}
.serv{
	color: #214cda !important;
}
</style>
<!--[if lt IE 9]>
<script src="/media/jui/js/html5.js"></script>
<![endif]-->


<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-33601895-1', 'auto');
ga('send', 'pageview');

</script>
<style>
.logo img {
    height: auto;
    width: 60%!important;
}
</style>
</head>

<body class="site com_content view-article no-layout no-task itemid-101">
	<!-- Body -->
	<div class="body">
<div class="container">
	<div class="clear-div"></div>
	<!-- Header -->
	<div class="newheader">
	<div class="logo"> <img src="<?=SYS_LOGO?>" width="100px"> </div>
	<div class="box2">
		<div class="signup">
			<a class="btn" href="#">Sign in</a>
			<a class="btn" href="#">Register </a>
			<div class="clear-div"></div>
			<span class="staff_mail">eMail: <a target="_blank" href="#">Internal</a> 
			| <a target="_blank" href="#">System </a></span>
		</div>
		<div class="track">
			<div class="loop-image">
			<img src="#" alt="" width="" height="" /></div>
			<?=showTracker()?>
			</div>
		</div>
		<div class="clear-div"> </div>
	</div>
	<div class="clear-div"> </div>
	<?php include_once('layouts/header.php');?>
	<div class="clear-div"> </div>

<div class="row-fluid">
<div id="content" class="span9">
<?php 
$e = !empty($_REQUEST['page'])?$_REQUEST['page']:'';
switch($e){
	case 'about-us':
	break;

	case 'our-services':
	break;

	case 'branches':
	break;

	case 'faqs':
	break;

	case 'resources':
	break;

	case 'media':
	break;

	case 'contact-us':
	break;

	case 'cost-calculator':
	break;

	case 'support':
	break;

	default:
	require_once('layouts/home.php');
}

?>
</div>
<?php 
require_once('layouts/sidebar.php');
?>
</div>
</div>
	</div>
	<!-- Footer -->
	<div class="clear-div"></div>
	<div class="footer3_box">
		<div id="footer3"> 
	
<div class="random-image">
	<img src="//." alt="" width="" height="" /></div>
<style> 

.footer3 { 
color: #fff;
width: 100%;
text-align: justify;
background: #232323;
}

.footer3:after {
content: "";
width: 100%;
text-align: justify;
display: inline-block;
}

.footer3_item { 
width: 20%;
display: inline-block;
vertical-align: top;
}

.footer3_item a { 
display:  block;
color: #fff;
margin-bottom: 10px;
text-decoration: none;
}

.footer3_title { 
font-weight: bold;
margin-bottom: 15px;
}

</style>
<?php 
require_once('layouts/footer.php');
?>