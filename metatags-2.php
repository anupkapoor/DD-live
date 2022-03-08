<?php
	$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$title_folder = basename($actual_link);
	$title_set = rtrim($title_folder,"header.php");
	$ttitle=trim($title_set);
 //Solution Pages
if($ttitle =='android-app-development'){
	$title="Android App Development | Best Android Development Company";
	$descriptionv="DD is a Leading Android App Development Company provides Custom, Offshore Android App Development Services with best quality and skilled developers. ";
	$ogtitle="Android App Development | Best Android Development Company";
	$ogdescription="DD is a Leading Android App Development Company provides Custom, Offshore Android App Development Services with best quality and skilled developers. ";
	$twittertitle="Android App Development | Best Android Development Company";
	$twitterdescription="DD is a Leading Android App Development Company provides Custom, Offshore Android App Development Services with best quality and skilled developers. ";
	$pagecat="solution-android-app-development";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/android-app-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/android-app-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/android-app-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/android-app-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';}
}
elseif($ttitle =='angular-js-development'){
	$title="Angularjs Development Company | Angularjs Developers";
	$descriptionv="Dedicated Developers is a leading Angularjs Development Company, offers AngularJS development services for web & mobile apps development. ";
	$ogtitle="Angularjs Development Company | Angularjs Developers";
	$ogdescription="Dedicated Developers is a leading Angularjs Development Company, offers AngularJS development services for web & mobile apps development. ";
	$twittertitle="Angularjs Development Company | Angularjs Developers";
	$twitterdescription="Dedicated Developers is a leading Angularjs Development Company, offers AngularJS development services for web & mobile apps development. ";
	$pagecat="solution-angularjs-development";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/angular-js-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/angular-js-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/angular-js-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/angular-js-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='cake-php-development'){
	$title="CakePHP Development Company | CakePHP Development Services";
	$descriptionv="DD is a Top-notch CakePHP Development Company provide professional CakePHP services for excellent and customized web applications. We have skilled and experienced CakePHP developers. ";
	$ogtitle="CakePHP Development Company | CakePHP Development Services";
	$ogdescription="DD is a Top-notch CakePHP Development Company provide professional CakePHP services for excellent and customized web applications. We have skilled and experienced CakePHP developers. ";
	$twittertitle="CakePHP Development Company | CakePHP Development Services";
	$twitterdescription="DD is a Top-notch CakePHP Development Company provide professional CakePHP services for excellent and customized web applications. We have skilled and experienced CakePHP developers. ";
	$pagecat="solution-cakephp-development";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/cake-php-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/cake-php-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/cake-php-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/cake-php-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='crm-development-solution'){
	$title="CRM Development Services | CRM Software Development";
	$descriptionv="Dedicated Developers offers custom CRM development services at cost effective price. We have expert CRM developers, available for onshore and offshore development. ";
	$ogtitle="CRM Development Services | CRM Software Development";
	$ogdescription="Dedicated Developers offers custom CRM development services at cost effective price. We have expert CRM developers, available for onshore and offshore development.";
	$twittertitle="CRM Development Services | CRM Software Development";
	$twitterdescription="Dedicated Developers offers custom CRM development services at cost effective price. We have expert CRM developers, available for onshore and offshore development.";
	$pagecat="solution-crm-development-solution";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/crm-development-solution/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/crm-development-solution/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/crm-development-solution/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/crm-development-solution/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='custom-software-development'){
	$title="Custom Software Development Company | Custom Software Services";
	$descriptionv="Dedicated Developers is top-notch Custom Software Development Company. We Offer custom design and development services according to your need with experts.";
	$ogtitle="Custom Software Development Company | Custom Software Services";
	$ogdescription="Dedicated Developers is top-notch Custom Software Development Company. We Offer custom design and development services according to your need with experts.";
	$twittertitle="Custom Software Development Company | Custom Software Services";
	$twitterdescription="Dedicated Developers is top-notch Custom Software Development Company. We Offer custom design and development services according to your need with experts.";
	$pagecat="solution-custom-software-development";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/custom-software-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/custom-software-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/custom-software-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/custom-software-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='enterprise-product-development'){
	$title="Enterprise Product Development Solutions - Dedicated Developers";
	$descriptionv="In the wake of consumerism, retaliate with high-end customised Enterprise Product Development Solutions that completes your B2B and B2C needs.";
	$ogtitle="Enterprise Product Development Solutions - Dedicated Developers";
	$ogdescription="In the wake of consumerism, retaliate with high-end customised Enterprise Product Development Solutions that completes your B2B and B2C needs.";
	$twittertitle="Enterprise Product Development Solutions - Dedicated Developers";
	$twitterdescription="In the wake of consumerism, retaliate with high-end customised Enterprise Product Development Solutions that completes your B2B and B2C needs.";
	$pagecat="solution-enterprise-product-development";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/enterprise-product-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/enterprise-product-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/enterprise-product-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/enterprise-product-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hybrid-mobile-app-development'){
	$title="Hybrid Mobile App Development | Hybrid App Development Company";
	$descriptionv="We provides Hybrid Mobile App development services with expert developers who use existing web development skills to create hybrid applications that run on multiple platforms.";
	$ogtitle="Hybrid Mobile App Development | Hybrid App Development Company";
	$ogdescription="We provides Hybrid Mobile App development services with expert developers who use existing web development skills to create hybrid applications that run on multiple platforms.";
	$twittertitle="Hybrid Mobile App Development | Hybrid App Development Company";
	$twitterdescription="We provides Hybrid Mobile App development services with expert developers who use existing web development skills to create hybrid applications that run on multiple platforms.";
	$pagecat="solution-hybrid-mobile-app-development";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/hybrid-mobile-app-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/hybrid-mobile-app-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/hybrid-mobile-app-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/hybrid-mobile-app-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='ipad-app-development'){
	$title="iPad App Development Services | iPad App Development Company";
	$descriptionv="We are an iPad App Development Company offers custom iPad app development services like iPad Games, Web & Enterprise Apps development for specific business needs.";
	$ogtitle="iPad App Development Services | iPad App Development Company";
	$ogdescription="We are an iPad App Development Company offers custom iPad app development services like iPad Games, Web & Enterprise Apps development for specific business needs.";
	$twittertitle="iPad App Development Services | iPad App Development Company";
	$twitterdescription="We are an iPad App Development Company offers custom iPad app development services like iPad Games, Web & Enterprise Apps development for specific business needs.";
	$pagecat="solution-ipad-app-development-cat";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/ipad-app-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/ipad-app-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/ipad-app-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/ipad-app-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
	
}
elseif($ttitle =='iPhone-app-development'){
	$title="iPhone Application development | Custom iPhone App Development";
	$descriptionv="Dedicated Developers offers full-cycle iPhone application development services. We specialize in custom iPhone app design and development from beginning.";
	$ogtitle="iPhone Application development | Custom iPhone App Development";
	$ogdescription="Dedicated Developers offers full-cycle iPhone application development services. We specialize in custom iPhone app design and development from beginning.";
	$twittertitle="iPhone Application development | Custom iPhone App Development";
	$twitterdescription="Dedicated Developers offers full-cycle iPhone application development services. We specialize in custom iPhone app design and development from beginning.";
	$pagecat="solution-iphone-app-development-cat";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/iPhone-app-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/iPhone-app-development/images/portfolio-2.jpg" alt="Portfolio" /></div>';}
elseif($ttitle =='java-development'){
	$title="Java Development Company | Java Development Services - DD";
	$descriptionv="Dedicated Developers is a Java development company with expertise in implementing cutting-edge and world class Java development solutions based on Java technologies and frameworks.";
	$ogtitle="Java Development Company | Java Development Services - DD";
	$ogdescription="Dedicated Developers is a Java development company with expertise in implementing cutting-edge and world class Java development solutions based on Java technologies and frameworks.";
	$twittertitle="Java Development Company | Java Development Services - DD";
	$twitterdescription="Dedicated Developers is a Java development company with expertise in implementing cutting-edge and world class Java development solutions based on Java technologies and frameworks.";
	$pagecat="solution-java-development";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/java-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/java-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/java-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/java-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='laravel-development'){
	$title="Laravel Application Development | Laravel Development Company";
	$descriptionv=" DD is a Top-notch Laravel Application Development Company. We provide Laravel Development Services for web application & ecommerce development worldwide. ";
	$ogtitle="Laravel Application Development | Laravel Development Company";
	$ogdescription=" DD is a Top-notch Laravel Application Development Company. We provide Laravel Development Services for web application & ecommerce development worldwide. ";
	$twittertitle="Laravel Application Development | Laravel Development Company";
	$twitterdescription=" DD is a Top-notch Laravel Application Development Company. We provide Laravel Development Services for web application & ecommerce development worldwide. ";
	$pagecat="solution-laravel-development";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/laravel-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/laravel-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/laravel-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/laravel-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='microsoft-development'){
	$title="Microsoft Application Development | Microsoft Development Services";
	$descriptionv="DD is Microsoft Application Development Services Provider Company. We will help you to develop out-of-the-box desktop, web and mobile application solutions.";
	$ogtitle="Microsoft Application Development | Microsoft Development Services";
	$ogdescription="DD is Microsoft Application Development Services Provider Company. We will help you to develop out-of-the-box desktop, web and mobile application solutions.";
	$twittertitle="Microsoft Application Development | Microsoft Development Services";
	$twitterdescription="DD is Microsoft Application Development Services Provider Company. We will help you to develop out-of-the-box desktop, web and mobile application solutions.";
	$pagecat="solution-microsoft-development";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/microsoft-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/microsoft-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/microsoft-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/microsoft-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='php-development'){
	$title="PHP Web Development | PHP Development Company";
	$descriptionv="DD provides excellent PHP Web Development services and have experience team of dedicated PHP developers. We deliver top notch PHP services to our clients worldwide.";
	$ogtitle="PHP Web Development | PHP Development Company";
	$ogdescription="DD provides excellent PHP Web Development services and have experience team of dedicated PHP developers. We deliver top notch PHP services to our clients worldwide.";
	$twittertitle="PHP Web Development | PHP Development Company";
	$twitterdescription="DD provides excellent PHP Web Development services and have experience team of dedicated PHP developers. We deliver top notch PHP services to our clients worldwide.";
	$pagecat="solution-php-development";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/php-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/php-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/php-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/php-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='pos-development'){
	$title="POS Software Development | POS System Development";
	$descriptionv="DD Offer Web Based Point Of Sales System /Software, that integrate with business to enhance the Business Operation and Edging the Business Process Navigation.";
	$ogtitle="POS Software Development | POS System Development";
	$ogdescription="DD Offer Web Based Point Of Sales System /Software, that integrate with business to enhance the Business Operation and Edging the Business Process Navigation.";
	$twittertitle="POS Software Development | POS System Development";
	$twitterdescription="DD Offer Web Based Point Of Sales System /Software, that integrate with business to enhance the Business Operation and Edging the Business Process Navigation.";
	$pagecat="solution-pos-development-solution";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/pos-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/pos-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/pos-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/pos-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='saas-application-development'){
	$title="SaaS Application Development | SaaS Development Company";
	$descriptionv="Dedicated Developers is the best SaaS Application Development Company holds expertise in SaaS Software and application development. We offer custom SaaS App development service at affordable price.";
	$ogtitle="SaaS Application Development | SaaS Development Company";
	$ogdescription="Dedicated Developers is the best SaaS Application Development Company holds expertise in SaaS Software and application development. We offer custom SaaS App development service at affordable price.";
	$twittertitle="SaaS Application Development | SaaS Development Company";
	$twitterdescription="Dedicated Developers is the best SaaS Application Development Company holds expertise in SaaS Software and application development. We offer custom SaaS App development service at affordable price.";
	$pagecat="solution-saas-application-development";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/saas-application-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/saas-application-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/saas-application-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/saas-application-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='wearable-app-development'){
	$title="Wearable App Development Services | Wearable App Developers";
	$descriptionv="We provide Wearable App Development Services with best-in-class user experience. We specialized in android wearable and smart watch app development.";
	$ogtitle="Wearable App Development Services | Wearable App Developers";
	$ogdescription="We provide Wearable App Development Services with best-in-class user experience. We specialized in android wearable and smart watch app development.";
	$twittertitle="Wearable App Development Services | Wearable App Developers";
	$twitterdescription="We provide Wearable App Development Services with best-in-class user experience. We specialized in android wearable and smart watch app development.";
	$pagecat="solution-wearable-app-development";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/wearable-app-developmen/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/wearable-app-developmen/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/wearable-app-developmen/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/wearable-app-developmen/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='food-ordering-solutions'){
	$title="Food Ordering App Development | Restaurant Management Solutions";
	$descriptionv="Dedicated Developers provides food ordering app development, restaurant booking portal, order management software and much more for food & restaurant industry.";
	$ogtitle="Food Ordering App Development | Restaurant Management Solutions";
	$ogdescription="Dedicated Developers provides food ordering app development, restaurant booking portal, order management software and much more for food & restaurant industry.";
	$twittertitle="Food Ordering App Development | Restaurant Management Solutions";
	$twitterdescription="Dedicated Developers provides food ordering app development, restaurant booking portal, order management software and much more for food & restaurant industry.";
	$pagecat="solution-food-ordering-solutions";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/food-ordering-solutions/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/food-ordering-solutions/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/food-ordering-solutions/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/food-ordering-solutions/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='taxi-booking-solutions'){
	$title="Taxi Booking App Development Company - Dedicated Developers";
	$descriptionv="Dedicated Developers is a top-notch taxi booking app development company. Hire expert online cab booking app developers to get taxi dispatch software system.";
	$ogtitle="Taxi Booking App Development Company - Dedicated Developers";
	$ogdescription="Dedicated Developers is a top-notch taxi booking app development company. Hire expert online cab booking app developers to get taxi dispatch software system.";
	$twittertitle="Taxi Booking App Development Company - Dedicated Developers";
	$twitterdescription="Dedicated Developers is a top-notch taxi booking app development company. Hire expert online cab booking app developers to get taxi dispatch software system.";
	$pagecat="solution-taxi-booking-solutions";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/taxi-booking-solutions/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/taxi-booking-solutions/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/taxi-booking-solutions/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/taxi-booking-solutions/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='meanstack-development'){
	$title="MEAN Stack Development | MEAN Stack Developer - DD";
	$descriptionv="Dedicated Developers is Mean Stack Development Company, with highly skilled qualified and experienced MEAN Stack programmers understand your development needs.";
	$ogtitle="MEAN Stack Development | MEAN Stack Developer - DD";
	$ogdescription="Dedicated Developers is Mean Stack Development Company, with highly skilled qualified and experienced MEAN Stack programmers understand your development needs.";
	$twittertitle="MEAN Stack Development | MEAN Stack Developer - DD";
	$twitterdescription="Dedicated Developers is Mean Stack Development Company, with highly skilled qualified and experienced MEAN Stack programmers understand your development needs.";
	$pagecat="solution-meanstack-development";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/meanstack-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/meanstack-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/meanstack-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/meanstack-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='nodeJs-development'){
	$title="Node.js Development Company | Node js Application Development";
	$descriptionv="Dedicated Developers is a leading Node.js Development Company, offers NodeJS development services for web & mobile apps development. Get best Nodejs services worldwide.";
	$ogtitle="Node.js Development Company | Node js Application Development";
	$ogdescription="Dedicated Developers is a leading Node.js Development Company, offers NodeJS development services for web & mobile apps development. Get best Nodejs services worldwide.";
	$twittertitle="Node.js Development Company | Node js Application Development";
	$twitterdescription="Dedicated Developers is a leading Node.js Development Company, offers NodeJS development services for web & mobile apps development. Get best Nodejs services worldwide.";
	$pagecat="solution-nodejs-development";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/nodeJs-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/nodeJs-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/nodeJs-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/nodeJs-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='custom-web-development'){
	$title="Web Development Company | Custom Web Development Services";
	$descriptionv="Dedicated Developers is a Web Development Company, offers all type of website development services worldwide. Our expert developers have expertise in building all web-based solutions.";
	$ogtitle="Web Development Company | Custom Web Development Services";
	$ogdescription="Dedicated Developers is a Web Development Company, offers all type of website development services worldwide. Our expert developers have expertise in building all web-based solutions.";
	$twittertitle="Web Development Company | Custom Web Development Services";
	$twitterdescription="Dedicated Developers is a Web Development Company, offers all type of website development services worldwide. Our expert developers have expertise in building all web-based solutions.";
	$pagecat="solution-custom-web-development";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/custom-web-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/custom-web-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/custom-web-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/custom-web-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='cms-development'){
	$title="CMS Development Services | CMS Website Development Company";
	$descriptionv="Dedicated Developers is specializing in CMS Website Development Services. Hire opensource CMS developers for your CMS development needs with excellent professional support.";
	$ogtitle="CMS Development Services | CMS Website Development Company";
	$ogdescription="Dedicated Developers is specializing in CMS Website Development Services. Hire opensource CMS developers for your CMS development needs with excellent professional support.";
	$twittertitle="CMS Development Services | CMS Website Development Company";
	$twitterdescription="Dedicated Developers is specializing in CMS Website Development Services. Hire opensource CMS developers for your CMS development needs with excellent professional support.";
	$pagecat="solution-cms-development";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/cms-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/cms-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/cms-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/cms-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='ecommerce-development'){
	$title="Ecommerce Development Company | Ecommerce development services";
	$descriptionv="Dedicated Developers is a leading eCommerce development services provider company offers quality theme development, eCommerce web design, plug-in and theme development.";
	$ogtitle="Ecommerce Development Company | Ecommerce development services";
	$ogdescription="Dedicated Developers is a leading eCommerce development services provider company offers quality theme development, eCommerce web design, plug-in and theme development.";
	$twittertitle="Ecommerce Development Company | Ecommerce development services";
	$twitterdescription="Dedicated Developers is a leading eCommerce development services provider company offers quality theme development, eCommerce web design, plug-in and theme development.";
	$pagecat="solution-ecommerce-development";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/ecommerce-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/ecommerce-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/ecommerce-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/ecommerce-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='azure-development-services'){
	$title="Azure Development | Azure Application Development - DD";
	$descriptionv="Dedicated Developers is the leading Microsoft Azure development service provider company. We offer Microsoft Solutions to clients across the globe with expert Azure developers.";
	$ogtitle="Azure Development | Azure Application Development - DD";
	$ogdescription="Dedicated Developers is the leading Microsoft Azure development service provider company. We offer Microsoft Solutions to clients across the globe with expert Azure developers.";
	$twittertitle="Azure Development | Azure Application Development - DD";
	$twitterdescription="Dedicated Developers is the leading Microsoft Azure development service provider company. We offer Microsoft Solutions to clients across the globe with expert Azure developers.";
	$pagecat="solution-azure";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/azure-development-services/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/azure-development-services/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/azure-development-services/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/azure-development-services/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='aws-development'){
	$title="AWS Development Company | AWS App Development - DD";
	$descriptionv="Dedicated Developers is one of the best AWS development companies. We provide amazon cloud development and AWS consulting & support services worldwide.";
	$ogtitle="AWS Development Company | AWS App Development - DD";
	$ogdescription="Dedicated Developers is one of the best AWS development companies. We provide amazon cloud development and AWS consulting & support services worldwide.";
	$twittertitle="AWS Development Company | AWS App Development - DD";
	$twitterdescription="Dedicated Developers is one of the best AWS development companies. We provide amazon cloud development and AWS consulting & support services worldwide.";
	$pagecat="solution-aws";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/aws-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/aws-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/aws-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/aws-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='web-portal-development'){
	$title="Web Portal Development Services | Web Portal Design Solutions - DD";
	$descriptionv="Dedicated Developers is a top-notch web portal development company provides complete solution of website portal solution for B2B and B2C sector worldwide.";
	$ogtitle="Web Portal Development Services | Web Portal Design Solutions - DD";
	$ogdescription="Dedicated Developers is a top-notch web portal development company provides complete solution of website portal solution for B2B and B2C sector worldwide.";
	$twittertitle="Web Portal Development Services | Web Portal Design Solutions - DD";
	$twitterdescription="Dedicated Developers is a top-notch web portal development company provides complete solution of website portal solution for B2B and B2C sector worldwide.";
	$pagecat="solution-web-portal-development";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/web-portal-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/web-portal-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/web-portal-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/web-portal-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='application-maintenance-services'){
	$title="Application Maintenance Services - Dedicated Developers";
	$descriptionv="Dedicated Developer's application maintenance services help you get the best out of your existing IT applications and reducing the maintenance costs.";
	$ogtitle="Application Maintenance Services - Dedicated Developers";
	$ogdescription="Dedicated Developer's application maintenance services help you get the best out of your existing IT applications and reducing the maintenance costs.";
	$twittertitle="Application Maintenance Services - Dedicated Developers";
	$twitterdescription="Dedicated Developer's application maintenance services help you get the best out of your existing IT applications and reducing the maintenance costs.";
	$pagecat="solution-application-maintenance-services";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.solutions.'/application-maintenance-services/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/application-maintenance-services/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/application-maintenance-services/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.solutions.'/application-maintenance-services/images/portfolio-4.jpg" alt="Portfolio" /></div>';
} 

//Developers Pages
elseif($ttitle =='hire-android-developers'){
	$title="Android App Developer | Hire Android App Developers";
	$descriptionv="Hire Android app developers and programmers from Dedicated Developers. We have best android app programmers for custom android apps as per your business needs.";
	$ogtitle="Android App Developer | Hire Android App Developers";
	$ogdescription="Hire Android app developers and programmers from Dedicated Developers. We have best android app programmers for custom android apps as per your business needs.";
	$twittertitle="Android App Developer | Hire Android App Developers";
	$twitterdescription="Hire Android app developers and programmers from Dedicated Developers. We have best android app programmers for custom android apps as per your business needs.";
	$pagecat="hire-android-developers-cat";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.developers.'/hire-android-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-android-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-android-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-android-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-angular-developers'){
	$title="AngularJS Developers | Hire Angular Developers";
	$descriptionv="Hire AngularJS developers and Programmers from Dedicated Developers for custom AngularJS development services. We have experienced & professional Angular JS developers who provide best outcome.";
	$ogtitle="AngularJS Developers | Hire Angular Developers";
	$ogdescription="Hire AngularJS developers and Programmers from Dedicated Developers for custom AngularJS development services. We have experienced & professional Angular JS developers who provide best outcome.";
	$twittertitle="AngularJS Developers | Hire Angular Developers";
	$twitterdescription="Hire AngularJS developers and Programmers from Dedicated Developers for custom AngularJS development services. We have experienced & professional Angular JS developers who provide best outcome.";
	$pagecat="hire-angular-developers-cat";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.developers.'/hire-angular-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-angular-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-angular-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-angular-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-cake-php-developers'){
	$title="Hire CakePHP Developer | Hire cakephp Programmer";
	$descriptionv="Hire dedicated CakePHP developers and programmers from USA. Get the most qualified CakePHP programmers at the hiring model that suits you the best.";
	$ogtitle="Hire CakePHP Developer | Hire cakephp Programmer";
	$ogdescription="Hire dedicated CakePHP developers and programmers from USA. Get the most qualified CakePHP programmers at the hiring model that suits you the best.";
	$twittertitle="Hire CakePHP Developer | Hire cakephp Programmer";
	$twitterdescription="Hire dedicated CakePHP developers and programmers from USA. Get the most qualified CakePHP programmers at the hiring model that suits you the best.";
	$pagecat="hire-cake-php-developers-cat";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.developers.'/hire-cake-php-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-cake-php-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-cake-php-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-cake-php-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-codeigniter-developers'){
	$title="Hire Codeigniter Developer | Hire Codeigniter Programmer";
	$descriptionv="Hire dedicated CodeIgniter developers and programmers in USA from Dedicated Developers. Hire developers for top-notch Codeigniter development services.";
	$ogtitle="Hire Codeigniter Developer | Hire Codeigniter Programmer";
	$ogdescription="Hire dedicated CodeIgniter developers and programmers in USA from Dedicated Developers. Hire developers for top-notch Codeigniter development services.";
	$twittertitle="Hire Codeigniter Developer | Hire Codeigniter Programmer";
	$twitterdescription="Hire dedicated CodeIgniter developers and programmers in USA from Dedicated Developers. Hire developers for top-notch Codeigniter development services.";
	$pagecat="hire-codeigniter-developers-cat";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.developers.'/hire-codeigniter-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-codeigniter-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-codeigniter-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-codeigniter-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-dot-net-developers'){
	$title="Asp.Net Developers | Hire dot net Programmers";
	$descriptionv="Dedicated Developers have experienced Asp.Net developers and Dot net programmers to get effective asp.net development solutions at affordable cost.";
	$ogtitle="Asp.Net Developers | Hire dot net Programmers";
	$ogdescription="Dedicated Developers have experienced Asp.Net developers and Dot net programmers to get effective asp.net development solutions at affordable cost.";
	$twittertitle="Asp.Net Developers | Hire dot net Programmers";
	$twitterdescription="Dedicated Developers have experienced Asp.Net developers and Dot net programmers to get effective asp.net development solutions at affordable cost.";
	$pagecat="hire-dot-net-developers-cat";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.developers.'/hire-dot-net-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-dot-net-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-dot-net-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-dot-net-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-iphone-developers'){
	$title="Hire iPhone App Developers | Hire ios App Developer";
	$descriptionv="Hire iPhone App Developers and Programmers from Dedicated Developers for Custom, Offshore iOS Application Development Services globally.";
	$ogtitle="Hire iPhone App Developers | Hire ios App Developer";
	$ogdescription="Hire iPhone App Developers and Programmers from Dedicated Developers for Custom, Offshore iOS Application Development Services globally.";
	$twittertitle="Hire iPhone App Developers | Hire ios App Developer";
	$twitterdescription="Hire iPhone App Developers and Programmers from Dedicated Developers for Custom, Offshore iOS Application Development Services globally.";
	$pagecat="hire-iphone-developers-cat";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.developers.'/hire-iphone-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-iphone-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-iphone-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-iphone-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-java-developers'){
	$title="Hire Java Programmer | Hire Java Developer - Dedicated Developers";
	$descriptionv="Hire Java Developer for all Web and Software-development requirements. Our Java programmer will provide you scalable and attractive Java-based solution according to your budget.";
	$ogtitle="Hire Java Programmer | Hire Java Developer - Dedicated Developers";
	$ogdescription="Hire Java Developer for all Web and Software-development requirements. Our Java programmer will provide you scalable and attractive Java-based solution according to your budget.";
	$twittertitle="Hire Java Programmer | Hire Java Developer - Dedicated Developers";
	$twitterdescription="Hire Java Developer for all Web and Software-development requirements. Our Java programmer will provide you scalable and attractive Java-based solution according to your budget.";
	$pagecat="hire-java-developers-cat";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.developers.'/hire-java-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-java-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-java-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-java-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-joomla-developers'){
	$title="Hire Joomla Developer | Hire Joomla Expert - Dedicated Developers";
	$descriptionv="Hire Joomla Developer & Programmers for your custom Joomla website development projects. Our Joomla Experts provide you fast and reliable solutions.";
	$ogtitle="Hire Joomla Developer | Hire Joomla Expert - Dedicated Developers";
	$ogdescription="Hire Joomla Developer & Programmers for your custom Joomla website development projects. Our Joomla Experts provide you fast and reliable solutions.";
	$twittertitle="Hire Joomla Developer | Hire Joomla Expert - Dedicated Developers";
	$twitterdescription="Hire Joomla Developer & Programmers for your custom Joomla website development projects. Our Joomla Experts provide you fast and reliable solutions.";
	$pagecat="hire-joomla-developers-cat";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.developers.'/hire-joomla-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-joomla-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-joomla-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-joomla-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-laravel-developers'){
	$title="Hire Laravel developer | Laravel Expert - Dedicated Developers";
	$descriptionv="Hire Laravel developers for best laravel development. Dedicated Developers have a team of profesional and experienced Laravel developer with best environment for laravel projects.";
	$ogtitle="Hire Laravel developer | Laravel Expert - Dedicated Developers";
	$ogdescription="Hire Laravel developers for best laravel development. Dedicated Developers have a team of profesional and experienced Laravel developer with best environment for laravel projects.";
	$twittertitle="Hire Laravel developer | Laravel Expert - Dedicated Developers";
	$twitterdescription="Hire Laravel developers for best laravel development. Dedicated Developers have a team of profesional and experienced Laravel developer with best environment for laravel projects.";
	$pagecat="hire-laravel-developers-cat";	
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.developers.'/hire-laravel-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-laravel-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-laravel-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-laravel-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-magento-developers'){
	$title="Hire Magento Developer | Magento Programmers";
	$descriptionv="Hire Magento Developer & Programmers from Dedicated Developers. We offers Magento theme and ecommerce development with skilled Magento experts at affordable price worldwide.";
	$ogtitle="Hire Magento Developer | Magento Programmers";
	$ogdescription="Hire Magento Developer & Programmers from Dedicated Developers. We offers Magento theme and ecommerce development with skilled Magento experts at affordable price worldwide.";
	$twittertitle="Hire Magento Developer | Magento Programmers";
	$twitterdescription="Hire Magento Developer & Programmers from Dedicated Developers. We offers Magento theme and ecommerce development with skilled Magento experts at affordable price worldwide.";
	$pagecat="hire-magento-developers-cat";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.developers.'/hire-magento-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-magento-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-magento-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-magento-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-node-js-developers'){
	$title="Hire Node.Js Developer | NodeJS Expert - Dedicated Developers";
	$descriptionv="Hire Node.js developers from Dedicated Developers to build best web-apps at affordable rates. We have team of experienced & professional Node JS programmers to provide best outcome.";
	$ogtitle="Hire Node.Js Developer | NodeJS Expert - Dedicated Developers";
	$ogdescription="Hire Node.js developers from Dedicated Developers to build best web-apps at affordable rates. We have team of experienced & professional Node JS programmers to provide best outcome.";
	$twittertitle="Hire Node.Js Developer | NodeJS Expert - Dedicated Developers";
	$twitterdescription="Hire Node.js developers from Dedicated Developers to build best web-apps at affordable rates. We have team of experienced & professional Node JS programmers to provide best outcome.";
	$pagecat="hire-node-js-developers-cat";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.developers.'/hire-node-js-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-node-js-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-node-js-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-node-js-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-phone-gap-developers'){
	$title="Hire Phonegap Developers | Hire Phonegap Expert";
	$descriptionv="Hire Expert Phonegap developers for Phonegap apps development and to acquire Hybrid App Development services offered by Dedicated Developers.";
	$ogtitle="Hire Phonegap Developers | Hire Phonegap Expert";
	$ogdescription="Hire Expert Phonegap developers for Phonegap apps development and to acquire Hybrid App Development services offered by Dedicated Developers.";
	$twittertitle="Hire Phonegap Developers | Hire Phonegap Expert";
	$twitterdescription="Hire Expert Phonegap developers for Phonegap apps development and to acquire Hybrid App Development services offered by Dedicated Developers.";
	$pagecat="hire-phone-gap-developers-cat";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.developers.'/hire-phone-gap-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-phone-gap-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-phone-gap-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-phone-gap-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-php-developers'){
	$title="Hire PHP Developer | Hire PHP Programmer - Dedicated Developers";
	$descriptionv="Hire PHP Developers & Programmers from Dedicated Developers for custom PHP web development services. We provide php developer at affordable hourly rate, fixed time for onsite and offsite locations.";
	$ogtitle="Hire PHP Developer | Hire PHP Programmer - Dedicated Developers";
	$ogdescription="Hire PHP Developers & Programmers from Dedicated Developers for custom PHP web development services. We provide php developer at affordable hourly rate, fixed time for onsite and offsite locations.";
	$twittertitle="Hire PHP Developer | Hire PHP Programmer - Dedicated Developers";
	$twitterdescription="Hire PHP Developers & Programmers from Dedicated Developers for custom PHP web development services. We provide php developer at affordable hourly rate, fixed time for onsite and offsite locations.";
	$pagecat="hire-php-developers-cat";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.developers.'/hire-php-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-php-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-php-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-php-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-php-developers-old'){
	$title="Hire PHP Developer | Hire PHP Programmer - Dedicated Developers";
	$descriptionv="Hire PHP Developers & Programmers from Dedicated Developers for custom PHP web development services. We provide php developer at affordable hourly rate, fixed time for onsite and offsite locations.";
	$ogtitle="Hire PHP Developer | Hire PHP Programmer - Dedicated Developers";
	$ogdescription="Hire PHP Developers & Programmers from Dedicated Developers for custom PHP web development services. We provide php developer at affordable hourly rate, fixed time for onsite and offsite locations.";
	$twittertitle="Hire PHP Developer | Hire PHP Programmer - Dedicated Developers";
	$twitterdescription="Hire PHP Developers & Programmers from Dedicated Developers for custom PHP web development services. We provide php developer at affordable hourly rate, fixed time for onsite and offsite locations.";
	$pagecat="hire-php-developers-cat";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.developers.'/hire-php-developers-old/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-php-developers-old/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-php-developers-old/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-php-developers-old/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-webdesign'){
	$title="Hire Web Designer | Hire Website Designer";
	$descriptionv="Hire Web Designer & Developer at affordable cost on flexible hiring model. Dedicated Developer convert your web design ideas into reality. Contact us to hire a web designer now.";
	$ogtitle="Hire Web Designer | Hire Website Designer";
	$ogdescription="Hire Web Designer & Developer at affordable cost on flexible hiring model. Dedicated Developer convert your web design ideas into reality. Contact us to hire a web designer now.";
	$twittertitle="Hire Web Designer | Hire Website Designer";
	$twitterdescription="Hire Web Designer & Developer at affordable cost on flexible hiring model. Dedicated Developer convert your web design ideas into reality. Contact us to hire a web designer now.";
	$pagecat="hire-webdesign-cat";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.developers.'/hire-webdesign/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-webdesign/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-webdesign/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-webdesign/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-wordpress-developers'){
	$title="Hire Wordpress Developer | Hire Wordpress Experts";
	$descriptionv="Hire WordPress Developer from dedicated Developers for Custom Development requirement. Our WordPress developers are capable of developing custom plugins and themes.";
	$ogtitle="Hire Wordpress Developer | Hire Wordpress Experts";
	$ogdescription="Hire WordPress Developer from dedicated Developers for Custom Development requirement. Our WordPress developers are capable of developing custom plugins and themes.";
	$twittertitle="Hire Wordpress Developer | Hire Wordpress Experts";
	$twitterdescription="Hire WordPress Developer from dedicated Developers for Custom Development requirement. Our WordPress developers are capable of developing custom plugins and themes.";
	$pagecat="hire-wordpress-developers-cat";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.developers.'/hire-wordpress-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-wordpress-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-wordpress-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-wordpress-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-mean-stack-developers'){
	$title="MEAN stack developer | MEAN Stack Development - DD";
	$descriptionv="Hire expert MEAN Stack developers for custom MEAN Stack development services. Get affordable MEAN Stack development services at low cost worldwide.";
	$ogtitle="MEAN stack developer | Full Stack Development - DD";
	$ogdescription="Hire expert MEAN Stack developers for custom MEAN Stack development services. Get affordable MEAN Stack development services at low cost worldwide.";
	$twittertitle="MEAN stack developer | Full Stack Development - DD";
	$twitterdescription="Hire expert MEAN Stack developers for custom MEAN Stack development services. Get affordable MEAN Stack development services at low cost worldwide.";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.developers.'/hire-mean-stack-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-mean-stack-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-mean-stack-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-mean-stack-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-python-developers'){
	$title="Python Developer | Hire Python Programmer - DD";
	$descriptionv="Hire dedicated offshore Python developers and programmers from Dedicated Developers for your custom Python development projects.";
	$ogtitle="Python Developer | Hire Python Programmer - DD";
	$ogdescription="Hire dedicated offshore Python developers and programmers from Dedicated Developers for your custom Python development projects.";
	$twittertitle="Python Developer | Hire Python Programmer - DD";
	$twitterdescription="Hire dedicated offshore Python developers and programmers from Dedicated Developers for your custom Python development projects.";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.developers.'/hire-python-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-python-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-python-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-python-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-ruby-on-rails-developers'){
	$title="Hire ROR Developer | Ruby on Rails Programmers";
	$descriptionv="Hire top-notch ROR developers and programmers from Dedicated Developers for your custom ROR web application development projects.";
	$ogtitle="Hire ROR Developer | Ruby on Rails Programmers";
	$ogdescription="Hire top-notch ROR developers and programmers from Dedicated Developers for your custom ROR web application development projects.";
	$twittertitle="Hire ROR Developer | Ruby on Rails Programmers";
	$twitterdescription="Hire top-notch ROR developers and programmers from Dedicated Developers for your custom ROR web application development projects.";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.developers.'/hire-ruby-on-rails-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-ruby-on-rails-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-ruby-on-rails-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.developers.'/hire-ruby-on-rails-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}


//Our Solution Home Page boxes 
elseif($ttitle =='cloud-computing-services'){
	$title="Cloud Computing Services | Cloud App Development";
	$descriptionv="Dedicated Developers is a full service Cloud computing solutions company offering Cloud App Development, Cloud Configuration, Migration to Cloud. We pride ourselves in offering advisory to transformational support in building new IT assets or integrations";
	$ogtitle="Cloud Computing Services | Cloud App Development";
	$ogdescription="Dedicated Developers is a full service Cloud computing solutions company offering Cloud App Development, Cloud Configuration, Migration to Cloud. We pride ourselves in offering advisory to transformational support in building new IT assets or integrations";
	$twittertitle="Cloud Computing Services | Cloud App Development";
	$twitterdescription="Dedicated Developers is a full service Cloud computing solutions company offering Cloud App Development, Cloud Configuration, Migration to Cloud. We pride ourselves in offering advisory to transformational support in building new IT assets or integrations";
    $portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-9.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-3.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='enterprise-mobility-solutions'){
	$title="Enterprise Mobility Solution | Enterprise Mobility Services";
	$descriptionv="We offer End-to-end enterprise mobility solutions to empower business with scalability and security. We offer our mobility solutions to multiple industries.";
	$ogtitle="Enterprise Mobility Solution | Enterprise Mobility Services";
	$ogdescription="We offer End-to-end enterprise mobility solutions to empower business with scalability and security. We offer our mobility solutions to multiple industries.";
	$twittertitle="Enterprise Mobility Solution | Enterprise Mobility Services";
	$twitterdescription="We offer End-to-end enterprise mobility solutions to empower business with scalability and security. We offer our mobility solutions to multiple industries.";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.BASE_URL.'/enterprise-mobility-solutions/images/portfolio-9.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/enterprise-mobility-solutions/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/enterprise-mobility-solutions/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/enterprise-mobility-solutions/images/portfolio-3.jpg" alt="Portfolio" /></div>';

}
elseif($ttitle =='full-stack-development'){
	$title="Full Stack Development | Full Stack Web Development";
	$descriptionv="Dedicated Developers provide Full Stack development services focuses on building Enterprise-ready Mobile, Web and API solutions globally. Hire Full Stack Developer at best prices.";
	$ogtitle="Full Stack Development | Full Stack Web Development";
	$ogdescription="Dedicated Developers provide Full Stack development services focuses on building Enterprise-ready Mobile, Web and API solutions globally. Hire Full Stack Developer at best prices.";
	$twittertitle="Full Stack Development | Full Stack Web Development";
	$twitterdescription="Dedicated Developers provide Full Stack development services focuses on building Enterprise-ready Mobile, Web and API solutions globally. Hire Full Stack Developer at best prices.";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.BASE_URL.'/full-stack-development/images/portfolio-9.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/full-stack-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/full-stack-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/full-stack-development/images/portfolio-3.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='Iot-app-development'){
	$title="IoT Application Development | IoT Solutions and Services";
	$descriptionv="Dedicated Developers is a fully staffed IoT Application company. We have a proven track record of developing world class IoT solutions with intuitive user experience that connect smart devices, wearables, sensors, and more.";
	$ogtitle="IoT Application Development | IoT Solutions and Services";
	$ogdescription="Dedicated Developers is a fully staffed IoT Application company. We have a proven track record of developing world class IoT solutions with intuitive user experience that connect smart devices, wearables, sensors, and more.";
	$twittertitle="IoT Application Development | IoT Solutions and Services";
	$twitterdescription="Dedicated Developers is a fully staffed IoT Application company. We have a proven track record of developing world class IoT solutions with intuitive user experience that connect smart devices, wearables, sensors, and more.";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.BASE_URL.'/Iot-app-development/images/portfolio-9.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/Iot-app-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/Iot-app-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/Iot-app-development/images/portfolio-3.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='mobile-application-development'){
	$title="Mobile App Development Company | Custom App Development Service";
	$descriptionv="Dedicated Developers is a top-notch mobile app development company provide best mobile development services to clients that bring high efficiency for their businesses worldwide.";
	$ogtitle="Mobile App Development Company | Custom App Development Service";
	$ogdescription="Dedicated Developers is a top-notch mobile app development company provide best mobile development services to clients that bring high efficiency for their businesses worldwide.";
	$twittertitle="Mobile App Development Company | Custom App Development Service";
	$twitterdescription="Dedicated Developers is a top-notch mobile app development company provide best mobile development services to clients that bring high efficiency for their businesses worldwide.";
    $portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-9.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-3.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='software-product-development'){
	$title="Software Product Development Company and Services";
	$descriptionv="Dedicated Developers have software product development experts, work with you to design and implement custom software and apps that are specific to your industry.";
	$ogtitle="Software Product Development Company and Services";
	$ogdescription="Dedicated Developers have software product development experts, work with you to design and implement custom software and apps that are specific to your industry.";
	$twittertitle="Software Product Development Company and Services";
	$twitterdescription="Dedicated Developers have software product development experts, work with you to design and implement custom software and apps that are specific to your industry.";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-9.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-3.jpg" alt="Portfolio" /></div>';
}

//Industries Pages
elseif($ttitle =='automotive-solution'){
	$title="Automotive Solutions | Automobile App Development";
	$descriptionv="Dedicated Developers offer automotive industry solutions that will short your development cycle, accelerate innovation and help you collaborate globally. ";
	$ogtitle="Automotive Solutions | Automobile App Development";
	$ogdescription="Dedicated Developers offer automotive industry solutions that will short your development cycle, accelerate innovation and help you collaborate globally. ";
	$twittertitle="Automotive Solutions | Automobile App Development";
	$twitterdescription="Dedicated Developers offer automotive industry solutions that will short your development cycle, accelerate innovation and help you collaborate globally. ";
}
elseif($ttitle =='beauty-and-wellness'){
	$title="Beauty and Wellness App Development |On Demand Solution for Salon Business";
	$descriptionv="Beauty and Wellness app development by Dedicated Developers which lets you starts your own Beauty and Wellness business. Let's discuss your requirements for readymade or best custom Beauty and Wellness on demand application development solution. ";
	$ogtitle="Beauty and Wellness App Development |On Demand Solution for Salon Business";
	$ogdescription="Beauty and Wellness app development by Dedicated Developers which lets you starts your own Beauty and Wellness business. Let's discuss your requirements for readymade or best custom Beauty and Wellness on demand application development solution. ";
	$twittertitle="Beauty and Wellness App Development |On Demand Solution for Salon Business";
	$twitterdescription="Beauty and Wellness app development by Dedicated Developers which lets you starts your own Beauty and Wellness business. Let's discuss your requirements for readymade or best custom Beauty and Wellness on demand application development solution.  ";
}
elseif($ttitle =='coupon-and-deal'){
	$title="Best Apps for Coupons and Deals | Shopping Coupon App";
	$descriptionv="Dedicated Developers provides coupon maker app, coupons apps for groceries, food coupons app, travel coupons app, shopping saving apps & restaurant coupon app development Services.";
	$ogtitle="Best Apps for Coupons and Deals | Shopping Coupon App";
	$ogdescription="Dedicated Developers provides coupon maker app, coupons apps for groceries, food coupons app, travel coupons app, shopping saving apps & restaurant coupon app development Services.";
	$twittertitle="Best Apps for Coupons and Deals | Shopping Coupon App";
	$twitterdescription="Dedicated Developers provides coupon maker app, coupons apps for groceries, food coupons app, travel coupons app, shopping saving apps & restaurant coupon app development Services.";
}

elseif($ttitle =='ecommerce-shopping'){
	$title="E-Commerce Solutions Company | Retail Mobility Solutions";
	$descriptionv="We provide  top-notch retail and ecommerce mobile app development services that help cost reductions, margin improvement & optimize processes in a better way.";
	$ogtitle="E-Commerce Solutions Company | Retail Mobility Solutions";
	$ogdescription="We provide  top-notch retail and ecommerce mobile app development services that help cost reductions, margin improvement & optimize processes in a better way.";
	$twittertitle="E-Commerce Solutions Company | Retail Mobility Solutions";
	$twitterdescription="We provide  top-notch retail and ecommerce mobile app development services that help cost reductions, margin improvement & optimize processes in a better way.";
}

elseif($ttitle =='education-elearning-apps'){
	$title="Best E-Learning Development | Education Mobile App Development";
	$descriptionv="Build Your Education Mobile App - We Offer best E-learning Development and Education Mobile App Development Solutions. Hire Education App Developer at best price from Dedicated Developers.";
	$ogtitle="Best E-Learning Development | Education Mobile App Development";
	$ogdescription="Build Your Education Mobile App - We Offer best E-learning Development and Education Mobile App Development Solutions. Hire Education App Developer at best price from Dedicated Developers.";
	$twittertitle="Best E-Learning Development | Education Mobile App Development";
	$twitterdescription="Build Your Education Mobile App - We Offer best E-learning Development and Education Mobile App Development Solutions. Hire Education App Developer at best price from Dedicated Developers.";
}

elseif($ttitle =='food-ordering-app-development'){
	$title="Food Ordering App Development | Restaurant Management Solutions";
	$descriptionv="Dedicated Developers provides food ordering app development, restaurant booking portal, order management software and much more for food & restaurant industry.";
	$ogtitle="Food Ordering App Development | Restaurant Management Solutions";
	$ogdescription="Dedicated Developers provides food ordering app development, restaurant booking portal, order management software and much more for food & restaurant industry.";
	$twittertitle="Food Ordering App Development | Restaurant Management Solutions";
	$twitterdescription="Dedicated Developers provides food ordering app development, restaurant booking portal, order management software and much more for food & restaurant industry.";
}

elseif($ttitle =='healthcare-app-development'){
	$title="Healthcare & Fitness App development| Appointment Booking App Solution";
	$descriptionv="Dedicated Developers provide best Industry solutions for Pharmacy & Healthcare. We provide Pharmacy & Healthcare solutions for better infrastructure management.";
	$ogtitle="Healthcare & Fitness App development| Appointment Booking App Solution";
	$ogdescription="Dedicated Developers provide best Industry solutions for Pharmacy & Healthcare. We provide Pharmacy & Healthcare solutions for better infrastructure management. ";
	$twittertitle="Healthcare & Fitness App development| Appointment Booking App Solution";
	$twitterdescription="Dedicated Developers provide best Industry solutions for Pharmacy & Healthcare. We provide Pharmacy & Healthcare solutions for better infrastructure management. ";
}

elseif($ttitle =='media-and-entertainment'){
	$title="Media & Entertainment app development Solutions- Dedicated Developers";
	$descriptionv="Dedicated Developers is a website design and development company USA specializes in Media & Entertainment app development solutions.";
	$ogtitle="Media & Entertainment app development Solutions- Dedicated Developers";
	$ogdescription="Dedicated Developers is a website design and development company USA specializes in Media & Entertainment app development solutions.";
	$twittertitle="Media & Entertainment app development Solutions- Dedicated Developers";
	$twitterdescription="Dedicated Developers is a website design and development company USA specializes in Media & Entertainment app development solutions.";
}

elseif($ttitle =='on-demand-solution'){
	$title="On Demand Apps Development | On Demand Services - Dedicated Developers";
	$descriptionv="Dedicated Developers is a leading on demand mobile application development company that help entrepreneurs and all size business with mobile technology. ";
	$ogtitle="On Demand Apps Development | On Demand Services - Dedicated Developers";
	$ogdescription="Dedicated Developers is a leading on demand mobile application development company that help entrepreneurs and all size business with mobile technology. ";
	$twittertitle="On Demand Apps Development | On Demand Services - Dedicated Developers";
	$twitterdescription="Dedicated Developers is a leading on demand mobile application development company that help entrepreneurs and all size business with mobile technology.  ";
}
elseif($ttitle =='realestate-industry'){
	$title="Real Estate App Developer | Real Estate Web Development Company";
	$descriptionv="We offer Real Estate Web Development Mobile App Development Services for Real Estate and Property Industries. Hire Real Estate App Developers at affordable prices.";
	$ogtitle="Real Estate App Developer | Real Estate Web Development Company";
	$ogdescription="We offer Real Estate Web Development Mobile App Development Services for Real Estate and Property Industries. Hire Real Estate App Developers at affordable prices. ";
	$twittertitle="Real Estate App Developer | Real Estate Web Development Company";
	$twitterdescription="We offer Real Estate Web Development Mobile App Development Services for Real Estate and Property Industries. Hire Real Estate App Developers at affordable prices. ";
} 
elseif($ttitle =='service-marketplaces'){
	$title="Online Marketplace Platform | Marketplace Development Softwares";
	$descriptionv="A Services Marketplace allows you to connect with your customers like never before. Dedicated Developers Marketplace for Services helps you to drive more customer value.";
	$ogtitle="Online Marketplace Platform | Marketplace Development Software";
	$ogdescription="A Services Marketplace allows you to connect with your customers like never before. Dedicated Developers Marketplace for Services helps you to drive more customer value.";
	$twittertitle="Online Marketplace Platform | Marketplace Development Software";
	$twitterdescription="A Services Marketplace allows you to connect with your customers like never before. Dedicated Developers Marketplace for Services helps you to drive more customer value.";
}
elseif($ttitle =='tours-and-transportation'){
	$title="Tour & Transportation app development | On Demand Delivery App";
	$descriptionv="Are you looking for best On Demand logistics App Development company? Here we are. Dedicated Developers provides the most proficient Delivery App. We develop Apps for managing logistics, trucking and transportation. Contact us right now. ";
	$ogtitle="Tour & Transportation app development | On Demand Delivery App";
	$ogdescription="Are you looking for best On Demand logistics App Development company? Here we are. Dedicated Developers provides the most proficient Delivery App. We develop Apps for managing logistics, trucking and transportation. Contact us right now.  ";
	$twittertitle="Tour & Transportation app development | On Demand Delivery App";
	$twitterdescription="Are you looking for best On Demand logistics App Development company? Here we are. Dedicated Developers provides the most proficient Delivery App. We develop Apps for managing logistics, trucking and transportation. Contact us right now. ";
} 
elseif($ttitle =='industries'){
	$title="Web & Mobility Industry Solutions – Dedicated Developers";
	$descriptionv="Dedicated Developers have the scale and expertise to create a complete solution for your organization. From front-end consulting and planning, to integrating and even managing your technology solutions.";
	$ogtitle="Web & Mobility Industry Solutions – Dedicated Developers";
	$ogdescription="Dedicated Developers have the scale and expertise to create a complete solution for your organization. From front-end consulting and planning, to integrating and even managing your technology solutions.";
	$twittertitle="Web & Mobility Industry Solutions – Dedicated Developers";
	$twitterdescription="Dedicated Developers have the scale and expertise to create a complete solution for your organization. From front-end consulting and planning, to integrating and even managing your technology solutions.";
} 


else{
	$title="Top Web and Mobile App Development Company, USA";
	$descriptionv="Dedicated Developers is one of the top web and mobile application development company in the USA. We offer custom mobile application and website development services.";
	$ogtitle="Top Web and Mobile App Development Company, USA ";
	$ogdescription="Dedicated Developers is one of the top web and mobile application development company in the USA. We offer custom mobile application and website development services.";
	$twittertitle="Top  Web and Mobile App Development Company, USA ";
	$twitterdescription="Dedicated Developers is one of the top web and mobile application development company in the USA. We offer custom mobile application and website development services.";
	$portfolioImgs='<div class="slide-content"><img class="responsive-img" src="'.BASE_URL.'/images/portfolio-9.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img class="responsive-img" src="'.BASE_URL.'/images/portfolio-3.jpg" alt="Portfolio" /></div>';
}
?>