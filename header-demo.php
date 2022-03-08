<?php require_once('config.php'); ?>
<?php require_once('metatags.php'); ?>
<!doctype html>
    <html lang="en">
    <head>
		<meta name="robots" content="noindex, nofollow" />
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
			<!-- Testly Tracking Code -->
				<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "Organization",
		  "url": "https://dedicateddevelopers.com/",
		  "logo": "https://dedicateddevelopers.com/images/dd-logo.png",
		  "contactPoint": [{
			"@type": "ContactPoint",
			"telephone": "+1-770-274-4482",
			 "contactType": "customer service"
		  }]
		}
		</script>
		<script type="application/ld+json">
		{ "@context": "http://schema.org",
		  "@type": "Thing",
		  "name": "Dedicated Developers",
		  "aggregateRating":
			{"@type": "AggregateRating",
			 "ratingValue": "5",
			 "reviewCount": "100"
			}
		}
		</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3608639567632144",
    enable_page_level_ads: true
  });
</script>


 <!-- Facebook Pixel Code -->
<script>
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
</script>
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
 </head>
    <body class="loading">
        <header>
            <?php require_once('main-top-nav-demo.php'); ?>
        </header>