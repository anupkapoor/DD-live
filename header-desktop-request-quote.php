<?php require_once('config.php'); ?>
<?php require_once('metatags.php'); ?>
<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $descriptionv; ?>" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/base.css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/custom-v.css" />
		<link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>/images/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>/images/favicon-16x16.png" sizes="16x16" />
		<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
		<link rel="canonical" href="<?php echo $actual_link; ?>" />
		<meta property="fb:admins" content="699303313458325"/>
		<meta property="og:url" content="<?php echo $actual_link; ?>"/>
		<meta property="og:title" content="<?php echo $ogtitle; ?>"/>
		<meta property="og:site_name" content="Dedicated Developers"/>
		<meta property="og:description" content="<?php echo $ogdescription; ?>"/>
		<meta property="og:type" content="<?php echo $actual_link; ?>"/>
		<meta property="og:image" content="<?php echo BASE_URL; ?>/images/og-image.jpg"/>
		<meta property="og:locale" content="en_us" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:creator" content="@DedicatedDevs" />
		<meta property="twitter:url" content="<?php echo $actual_link; ?>" />
		<meta property="twitter:title" content="<?php echo $twittertitle; ?>" />
		<meta property="twitter:description" content="<?php echo $twitterdescription; ?>" />
		<meta name="revisit-after" content="2 days" />
		<meta name="Googlebot" content="Index, Follow" />
		<meta name="rating" content="Safe For Kids" />
		<meta name="googlebot" content="noodp">
		<meta name="document-type" content="Public" />
		<meta name="language" content="English" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website" />
		<meta name="format-detection" content="telephone=no" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.js" data-cfasync="false"></script>
		<!-- Google Tag Manager -->
			<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-T237MD3');</script>
			<!-- End Google Tag Manager -->
		<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#252e39"
    },
    "button": {
      "background": "#14a7d0",
      "text": "#aacccc"
    }
  },
  "theme": "classic",
  "type": "opt-in",
  "content": {
    "message": "We have updated our Privacy Policy. You can accept it by clicking ???I accept??? button or you can continue to use our website without changing your browser settings. ",
    "allow": "Accept Cookies",
    "href": "https://dedicateddevelopers.com/privacy-policy/"
  }
})}); 
function myScripts() {

   // Paste here your scripts that use cookies requiring consent. See examples below

    !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1923448507666530');
  fbq('track', 'PageView');

}
</script>

<!-- Facebook Pixel Code -->
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1923448507666530&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Global site tag (gtag.js) - Google Ads: 965442346 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-965442346"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'AW-965442346');
	</script>
	
<!-- Event snippet for Request quote conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
	function gtag_report_conversion(url) {
	var callback = function () {
	if (typeof(url) != 'undefined') {
		window.location = url;
	}
	};
	gtag('event', 'conversion', {
	'send_to': 'AW-965442346/_z6wCNnIzdwBEKr2rcwD',
	'event_callback': callback
	});
	return false;
	}
</script>

    </head>
    <body class="loading">
	<!-- Google Tag Manager (noscript) -->
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T237MD3"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
			<!-- End Google Tag Manager (noscript) -->
        <header>
            <?php require_once('main-top-nav.php'); ?>
        </header>