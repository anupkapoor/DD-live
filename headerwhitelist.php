<?php require_once('config.php'); ?>
<?php require_once('metatags.php'); ?>
<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<title>Dedicated Developers Email Whitelist Instructions</title>
        <meta name="description" content="<?php echo $descriptionv; ?>" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/base.css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/custom-v.css" />
		 
		
		<link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>/images/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>/images/favicon-16x16.png" sizes="16x16" />
		<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
		<meta name="description" content="Whitelist Dedicated Developers to be sure you get the email you requested...">

<meta property="og:title" content="Dedicated Developers Email Whitelist Instructions">
<meta property="og:description" content="Whitelist Dedicated Developers to be sure you get the email you requested...">
<meta property="og:type" content="article">
<meta property="og:image" content="https://s3.amazonaws.com/wlist-images/email-whitelist-screenshot-full.png">

<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">

@import 'https://fonts.googleapis.com/css?family=Roboto';
.whitelist h1 {font-size:32px; font-weight:bold; font-family: 'Roboto', sans-serif;}
.whitelist h2 {font-size: 27.2px; text-align:left; font-weight:bold; margin: 0; padding: 0;font-family: 'Roboto', sans-serif;}
.whitelist h3 {	font-family: 'Roboto', sans-serif;}
.whitelist h4 {
	font-size: 18px;
	font-weight: bold;
	font-family: 'Roboto', sans-serif;
	}
.whitelist p { margin:1em 0;font-family: 'Roboto', sans-serif; 	font-size: 18px;}
.whitelist li {
	font-size: 18px;
	font-family: 'Roboto', sans-serif;
	line-height: 30px;
	}
.whitelist a {
	text-decoration: none;
	color: #FFFFFF;
	}
.whitelist .mobileButton {
	margin: 2%;
	margin-bottom: 3%;
	padding: 2%;
	border: solid #adadba 1px;
	border-radius: 0px;
	text-align: center;
	font-family: verdana;
	font-weight: bold;
	}
.whitelist .wrapper {
	width: 800px;
	text-align: left;
}
.whitelist .container{
	margin: 0 auto;
	}
.whitelist ul{
    list-style:none;
}
.whitelist ul li{
    padding:10px 10px;
}

.whitelist a{
    color:white;
}
.whitelist ul li a{
    text-align:center;
    font-size: 21px;
    text-decoration:none;
}
.whitelist .columnHeading{
    width:25%;
    float:left;
}

.whitelist .headingBorder{
    padding:20px 0;
    text-align:center;
    border-top:2px solid gray;
    border-bottom:2px solid gray;
}
.whitelist .endRow{
    float:right;
}
.whitelist .clearRight{
    clear:left;
}
.whitelist .submenuPopularAppBtn,.submenuEmailClientBtn,.submenuSecuritySoftBtn,.submenuSpamFiltersBtn{
    text-align:center;
    width:75%;
    padding:10px;
    cursor:pointer;
}
.whitelist .submenuPopularAppBtn{
    background-color:#007abd;
}

.whitelist .submenuEmailClientBtn{
    background-color:#7ec324;
}

.whitelist .submenuSecuritySoftBtn{
    background-color:#fdab00;
}

.whitelist .submenuSpamFiltersBtn{
    background-color:#eb605a;
}

@media only screen and (min-width:600px) and (max-width: 879px){
.whitelist .columnHeading{
    width:50%;
}

.whitelist .headingBorder{
    padding:20px 0;
    text-align:center;
    border-top:2px solid gray;
    border-bottom:2px solid gray;
}

.whitelist #sSoftware{
	clear:left;
}
}

@media only screen 
and (min-width : 880px) and (max-width:1140px) {
.whitelist .columnHeading{
	width:33.33333%;
}

.whitelist #sFilters{
	clear:both;
}
}
/*fix margin*/
@media only screen
and (min-width:0) and (max-width:600px){
 
.whitelist .columnHeading{
	width:100%;
}
.clearFix {
	clear: both;
}
}

/*Instruction Icons*/
.whitelist .instruction-icon {
		float: left;
		margin: 10px;
		}

/* BEGIN Back to top button */
.whitelist a.backTop {
  padding: 10px;
}
.whitelist .backTop {
    color: #FFFFFF;
    font-weight: bold;
	font-family: roboto;
    display: inline-block; 
    position: fixed;
    bottom: 40px;
    right: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    overflow: hidden;
    white-space: nowrap;
    background: #CC0000;
}
.whitelist .backTop.backTopVisible, .whitelist .backTop.backTopFadeOut, .whitelist .no-touch .backTop:hover {
  -webkit-transition: opacity .3s 0s, visibility 0s 0s;
  -moz-transition: opacity .3s 0s, visibility 0s 0s;
  transition: opacity .3s 0s, visibility 0s 0s;
}
.whitelist .backTop.backTopIsVisible {
  /* the button becomes visible */
  visibility: visible;
  opacity: 1;
}
.whitelist .backTop.backTopFadeOut {
  /* if the user keeps scrolling down, the button is out of focus and becomes less visible */
  opacity: .5;
}
.whitelist .no-touch .backTop:hover {
  background-color: #e86256;
  opacity: 1;
}
@media only screen and (min-width: 768px) {
  .whitelist .backTop {
    right: 20px;
    bottom: 20px;
  }
}
@media only screen and (min-width: 1024px) {
  .whitelist .backTop {
	right: 30px;
    bottom: 30px;
  }
}
/* END Back to top button */
</style>
	
    </head>
    <body class="loading">
	    <header>
            <?php require_once('main-top-nav.php'); ?>
        </header>