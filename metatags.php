<?php
	$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$title_folder = basename($actual_link);
	$title_set = rtrim($title_folder,"header.php");
	$ttitle=trim($title_set);
// echo $ttitle;
 //Solution Pages
if($ttitle =='android-app-development'){
	$title="Android App Development Company | Best Android Development Company";
	$descriptionv="Dedicated Developers is a Leading Android App Development Company provides Custom, Offshore Android Development Services with best quality and skilled developers.";
	$ogtitle="Android App Development Company | Best Android Development Company";
	$ogdescription="Dedicated Developers is a Leading Android App Development Company provides Custom, Offshore Android Development Services with best quality and skilled developers.";
	$twittertitle="Android App Development Company | Best Android Development Company";
	$twitterdescription="Dedicated Developers is a Leading Android App Development Company provides Custom, Offshore Android Development Services with best quality and skilled developers.";
	$pagecat="solution-android-app-development";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/android-app-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/android-app-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/android-app-development/images/portfolio-3.jpg" alt="Portfolio" /></div>';
	$industriesheading='We develop highly scalable and progressive android applications that provide instant business results across industries.';
}elseif($ttitle =='company'){	$title="Best Mobile app development Company USA - Dedicated Developers";	$descriptionv="Turn your idea into an attractive, high functioning, real world mobile app";	$ogtitle="Best Mobile app development Company USA - Dedicated Developers";	$ogdescription="Turn your idea into an attractive, high functioning, real world mobile app";	$twittertitle="Best Mobile app development Company USA - Dedicated Developers";	$twitterdescription="Turn your idea into an attractive, high functioning, real world mobile app";	$pagecat="solution-android-app-development";	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/iPhone-app-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/iPhone-app-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/iPhone-app-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';$industriesheading='We cater to a wide range of industry niches through our comprehensive digital solutions.';	$industriesheading='We develop highly scalable and progressive iPhone applications that provide instant business results across industries.';}

elseif($ttitle =='mobile-app-development'){	$title="Mobile app development - Dedicated Developers";	$descriptionv="Enjoy state-of-the-art features, engaging design and true ease of use – all in a mobile app that exceeds your expectations";	$ogtitle="Mobile app development - Dedicated Developers"; $ogdescription="Enjoy state-of-the-art features, engaging design and true ease of use – all in a mobile app that exceeds your expectations"; $twitterdescription="Enjoy state-of-the-art features, engaging design and true ease of use – all in a mobile app that exceeds your expectations"; $portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/iPhone-app-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/iPhone-app-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/iPhone-app-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';$industriesheading='We cater to a wide range of industry niches through our comprehensive digital solutions.';	$industriesheading='We develop highly scalable and progressive iPhone applications that provide instant business results across industries.';}

elseif($ttitle =='mobile-app-development-agency'){	$title="Mobile app development - Dedicated Developers";	$descriptionv="Enjoy state-of-the-art features, engaging design and true ease of use – all in a mobile app that exceeds your expectations";	$ogtitle="Mobile app development - Dedicated Developers"; $ogdescription="Enjoy state-of-the-art features, engaging design and true ease of use – all in a mobile app that exceeds your expectations"; $twitterdescription="Enjoy state-of-the-art features, engaging design and true ease of use – all in a mobile app that exceeds your expectations"; $portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/iPhone-app-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/iPhone-app-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/iPhone-app-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';$industriesheading='We cater to a wide range of industry niches through our comprehensive digital solutions.';	$industriesheading='We develop highly scalable and progressive iPhone applications that provide instant business results across industries.';}

elseif($ttitle =='privacy-policy'){
	$title="Privacy Policy – Dedicated Developers";
	$descriptionv="Your privacy is important to Dedicated Developers. We do not share Client information with any third party outside except to the necessary to complete that order.";
}
elseif($ttitle =='terms-conditions'){
	$title="Terms and Conditions – Dedicated Developers";
	$descriptionv="By using Dedicated Developers product and services you agree to be legally bound by these terms, which shall take effect immediately on your first use of Dedicated Developers product and services.";
}

elseif($ttitle =='error404'){
	$title="Page Not Found- Dedicated Developers";
	$descriptionv="Page which you are looking was not found. Search Dedicated Developers where you can get web and mobile app development services";
}


elseif($ttitle =='portfolio'){
	$title="Mobile App - Android, iOS | Web Development & Design | Portfolio";
	$descriptionv="Dedicated Developers Portfolio - Mobile Apps, Web Development, Software Development, Web Design, CMS Development, Magento, Wordpress Development etc.";
	$ogtitle="Mobile App - Android, iOS | Web Development & Design | Portfolio";
	$ogdescription="Dedicated Developers Portfolio - Mobile Apps, Web Development, Software Development, Web Design, CMS Development, Magento, Wordpress Development etc.";
	$twittertitle="Mobile App - Android, iOS | Web Development & Design | Portfolio";
	$twitterdescription="Dedicated Developers Portfolio - Mobile Apps, Web Development, Software Development, Web Design, CMS Development, Magento, Wordpress Development etc.";
	$pagecat="portfolio-page-cat";

}
elseif($ttitle =='request-a-quot'){
	$title="Request A Quote - Dedicated Developers";
	$descriptionv="Request a Quote for Top-notch Mobile and Web development services from Dedicated Developers. Please send a request for your web or mobile development needs at inquiry@DedicatedDevelopers.com or call us at (770) 274-4482, we will get back to you soon.";
	$ogtitle="Request A Quote - Dedicated Developers";
	$ogdescription="Request a Quote for Top-notch Mobile and Web development services from Dedicated Developers. Please send a request for your web or mobile development needs at inquiry@DedicatedDevelopers.com or call us at (770) 274-4482, we will get back to you soon.";
	$twittertitle="Request A Quote - Dedicated Developers";
	$twitterdescription="Request a Quote for Top-notch Mobile and Web development services from Dedicated Developers. Please send a request for your web or mobile development needs at inquiry@DedicatedDevelopers.com or call us at (770) 274-4482, we will get back to you soon.";
	$pagecat="request-a-quote-cat";

}
elseif($ttitle =='contact-us'){
	$title="Contact Us – Dedicated Developers";
	$descriptionv="Get in touch with Top-notch Mobile and Web development services provider company Dedicated Developers. Please send a request for your web or mobile development needs at inquiry@DedicatedDevelopers.com or call us at (770) 274-4482, we will get back to you soon.";
	$ogtitle="Contact Us – Dedicated Developers";
	$ogdescription="Get in touch with Top-notch Mobile and Web development services provider company Dedicated Developers. Please send a request for your web or mobile development needs at inquiry@DedicatedDevelopers.com or call us at (770) 274-4482, we will get back to you soon.";
	$twittertitle="Contact Us – Dedicated Developers";
	$twitterdescription="Get in touch with Top-notch Mobile and Web development services provider company Dedicated Developers. Please send a request for your web or mobile development needs at inquiry@DedicatedDevelopers.com or call us at (770) 274-4482, we will get back to you soon.";
	$pagecat="contact-us-cat";

}
elseif($ttitle =='angular-js-development'){
	$title="Angularjs Development Company | Angularjs Developers";
	$descriptionv="Dedicated Developers is a leading Angularjs Development Company, offers AngularJS development services for web & mobile apps development. ";
	$ogtitle="Angularjs Development Company | Angularjs Developers";
	$ogdescription="Dedicated Developers is a leading Angularjs Development Company, offers AngularJS development services for web & mobile apps development. ";
	$twittertitle="Angularjs Development Company | Angularjs Developers";
	$twitterdescription="Dedicated Developers is a leading Angularjs Development Company, offers AngularJS development services for web & mobile apps development. ";
	$pagecat="solution-angularjs-development";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/angular-js-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/angular-js-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/angular-js-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/angular-js-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
	$industriesheading='We develop highly responsive and feature-rich web applications built on the dependable AngularJS technology, that provides instant business results across industries.';
}
elseif($ttitle =='cake-php-development'){
	$title="CakePHP Development Company | CakePHP Development Services";
	$descriptionv="Dedicated Developers is a Top-notch CakePHP Development Company provides professional CakePHP Development services for excellent and customized web applications. We have skilled and experienced CakePHP developers.";
	$ogtitle="CakePHP Development Company | CakePHP Development Services";
	$ogdescription="Dedicated Developers is a Top-notch CakePHP Development Company provides professional CakePHP Development services for excellent and customized web applications. We have skilled and experienced CakePHP developers.";
	$twittertitle="CakePHP Development Company | CakePHP Development Services";
	$twitterdescription="Dedicated Developers is a Top-notch CakePHP Development Company provides professional CakePHP Development services for excellent and customized web applications. We have skilled and experienced CakePHP developers.";
	$pagecat="solution-cakephp-development";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/cake-php-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/cake-php-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/cake-php-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/cake-php-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
	$industriesheading='We develop faster, smoother and more reliable Cake PHP websites, portals and web applications, to make your business stay on the cutting edge, and deliver an enhanced customer experience.';
}
elseif($ttitle =='crm-development-solution'){
	$title="CRM Development Services | CRM Software Development";
	$descriptionv="Dedicated Developers offers custom CRM development services at cost effective price. We have expert CRM developers, available for onshore and offshore development. ";
	$ogtitle="CRM Development Services | CRM Software Development";
	$ogdescription="Dedicated Developers offers custom CRM development services at cost effective price. We have expert CRM developers, available for onshore and offshore development.";
	$twittertitle="CRM Development Services | CRM Software Development";
	$twitterdescription="Dedicated Developers offers custom CRM development services at cost effective price. We have expert CRM developers, available for onshore and offshore development.";
	$pagecat="solution-crm-development-solution";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/crm-development-solution/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/crm-development-solution/images/portfolio-2.jpg" alt="Portfolio" /></div>';
	$industriesheading='Our professional CRM development solutions helps businesses achieve enhanced customer relationships to drive immense online business success across industries.';
}
elseif($ttitle =='custom-software-development'){
	$title="Custom Software Development Company | Custom Software Services";
	$descriptionv="Dedicated Developers is top-notch Custom Software Development Company. We Offer custom design and development services according to your need with experts.";
	$ogtitle="Custom Software Development Company | Custom Software Services";
	$ogdescription="Dedicated Developers is top-notch Custom Software Development Company. We Offer custom design and development services according to your need with experts.";
	$twittertitle="Custom Software Development Company | Custom Software Services";
	$twitterdescription="Dedicated Developers is top-notch Custom Software Development Company. We Offer custom design and development services according to your need with experts.";
	$pagecat="solution-custom-software-development";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/custom-software-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/custom-software-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/custom-software-development/images/portfolio-3.jpg" alt="Portfolio" /></div>';
	$industriesheading='We develop highly scalable and progressive custom software solutions that provide instant business results across industries.';
}
elseif($ttitle =='enterprise-product-development'){
	$title="Enterprise Product Development Solutions - Dedicated Developers";
	$descriptionv="In the wake of consumerism, retaliate with high-end customised Enterprise Product Development Solutions that completes your B2B and B2C needs.";
	$ogtitle="Enterprise Product Development Solutions - Dedicated Developers";
	$ogdescription="In the wake of consumerism, retaliate with high-end customised Enterprise Product Development Solutions that completes your B2B and B2C needs.";
	$twittertitle="Enterprise Product Development Solutions - Dedicated Developers";
	$twitterdescription="In the wake of consumerism, retaliate with high-end customised Enterprise Product Development Solutions that completes your B2B and B2C needs.";
	$pagecat="solution-enterprise-product-development";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/enterprise-product-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/enterprise-product-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/enterprise-product-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/enterprise-product-development/images/portfolio-4.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/enterprise-product-development/images/portfolio-5.jpg" alt="Portfolio" /></div>';
	$industriesheading='Our best industry practices and couple it with our own innovative approach and industry expertise to help you stay at the top.';
}
elseif($ttitle =='hybrid-mobile-app-development'){
	$title="Hybrid Mobile App Development | Hybrid App Development";
	$descriptionv="We provides Hybrid Mobile App development services with expert app developers who use existing development skills to create hybrid applications that run on multiple platforms.";
	$ogtitle="Hybrid Mobile App Development | Hybrid App Development";
	$ogdescription="We provides Hybrid Mobile App development services with expert app developers who use existing development skills to create hybrid applications that run on multiple platforms.";
	$twittertitle="Hybrid Mobile App Development | Hybrid App Development";
	$twitterdescription="We provides Hybrid Mobile App development services with expert app developers who use existing development skills to create hybrid applications that run on multiple platforms.";
	$pagecat="solution-hybrid-mobile-app-development";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/hybrid-mobile-app-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/hybrid-mobile-app-development/images/portfolio-2.jpg" alt="Portfolio" /></div>';
	$industriesheading='We develop highly scalable and progressive hybrid applications that provide instant business results across industries.';
}
elseif($ttitle =='ipad-app-development'){
	$title="iPad App Development Services | iPad Development Company";
	$descriptionv="We are an iPad App Development Company offers custom iPad app development services such as iPad Games, Web & Enterprise Apps development for specific business needs.";
	$ogtitle="iPad App Development Services | iPad Development Company";
	$ogdescription="We are an iPad App Development Company offers custom iPad app development services such as iPad Games, Web & Enterprise Apps development for specific business needs.";
	$twittertitle="iPad App Development Services | iPad Development Company";
	$twitterdescription="We are an iPad App Development Company offers custom iPad app development services such as iPad Games, Web & Enterprise Apps development for specific business needs.";
	$pagecat="solution-ipad-app-development-cat";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/ipad-app-development/images/portfolio-1.jpg" alt="Portfolio" /></div>';
	$industriesheading='We develop highly scalable and progressive iPad applications that provide instant business results across industries.';
}
elseif($ttitle =='iPhone-app-development'){
	$title="iPhone App Development Company | iOS App Development Services";
	$descriptionv="Dedicated Developers is a top-notch iPhone App Development Company offers full-cycle iOS app development services. We specialize in custom iPhone app design and development from beginning.";
	$ogtitle="iPhone App Development Company | iOS App Development Services";
	$ogdescription="Dedicated Developers is a top-notch iPhone App Development Company offers full-cycle iOS app development services. We specialize in custom iPhone app design and development from beginning.";
	$twittertitle="iPhone App Development Company | iOS App Development Services";
	$twitterdescription="Dedicated Developers is a top-notch iPhone App Development Company offers full-cycle iOS app development services. We specialize in custom iPhone app design and development from beginning.";
	$pagecat="solution-iphone-app-development-cat";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/iPhone-app-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/iPhone-app-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/iPhone-app-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';$industriesheading='We cater to a wide range of industry niches through our comprehensive digital solutions.';
	$industriesheading='We develop highly scalable and progressive iPhone applications that provide instant business results across industries.';
}
elseif($ttitle =='java-development'){
	$title="Java Development Company | Java Development Services - DD";
	$descriptionv="Dedicated Developers is a Java development company with expertise in implementing cutting-edge and world class Java development solutions based on Java technologies and frameworks.";
	$ogtitle="Java Development Company | Java Development Services - DD";
	$ogdescription="Dedicated Developers is a Java development company with expertise in implementing cutting-edge and world class Java development solutions based on Java technologies and frameworks.";
	$twittertitle="Java Development Company | Java Development Services - DD";
	$twitterdescription="Dedicated Developers is a Java development company with expertise in implementing cutting-edge and world class Java development solutions based on Java technologies and frameworks.";
	$pagecat="solution-java-development";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/java-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/java-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/java-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/java-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
	$industriesheading='We develop customized, secure and efficient Java applications, working on diverse java-frameworks, to give you the unique enterprise solutions you need, that provides instant business results across industries.';
}
elseif($ttitle =='laravel-development'){
	$title="Laravel Application Development | Laravel Development Company";
	$descriptionv=" DD is a Top-notch Laravel Application Development Company. We provide Laravel Development Services for web application & ecommerce development worldwide. ";
	$ogtitle="Laravel Application Development | Laravel Development Company";
	$ogdescription=" DD is a Top-notch Laravel Application Development Company. We provide Laravel Development Services for web application & ecommerce development worldwide. ";
	$twittertitle="Laravel Application Development | Laravel Development Company";
	$twitterdescription=" DD is a Top-notch Laravel Application Development Company. We provide Laravel Development Services for web application & ecommerce development worldwide. ";
	$pagecat="solution-laravel-development";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/laravel-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/laravel-development/images/portfolio-2.jpg" alt="Portfolio" /></div>';
	$industriesheading='We develop feature-rich and highly functional Laravel websites, applications and portals, that are well aligned with modern business needs and the latest trends, to provide instant business success across industries. ';
}
elseif($ttitle =='microsoft-development'){
	$title="Microsoft Application Development | Microsoft Development Services";
	$descriptionv="Dedicated Developers is Microsoft Application Development Services Provider Company. We will help you to develop out-of-the-box desktop, web and mobile application solutions.";
	$ogtitle="Microsoft Application Development | Microsoft Development Services";
	$ogdescription="Dedicated Developers is Microsoft Application Development Services Provider Company. We will help you to develop out-of-the-box desktop, web and mobile application solutions.";
	$twittertitle="Microsoft Application Development | Microsoft Development Services";
	$twitterdescription="Dedicated Developers is Microsoft Application Development Services Provider Company. We will help you to develop out-of-the-box desktop, web and mobile application solutions.";
	$pagecat="solution-microsoft-development";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/microsoft-development/images/portfolio-1.jpg" alt="Portfolio" /></div>';
	$industriesheading='Our team of Microsoft experts offers a full range of the highly advanced ASP.Net development solutions ';
}
elseif($ttitle =='php-development'){
	$title="PHP Web Development | PHP Development Company";
	$descriptionv="DD provides excellent PHP Web Development services and have experience team of dedicated PHP developers. We deliver top notch PHP services to our clients worldwide.";
	$ogtitle="PHP Web Development | PHP Development Company";
	$ogdescription="DD provides excellent PHP Web Development services and have experience team of dedicated PHP developers. We deliver top notch PHP services to our clients worldwide.";
	$twittertitle="PHP Web Development | PHP Development Company";
	$twitterdescription="DD provides excellent PHP Web Development services and have experience team of dedicated PHP developers. We deliver top notch PHP services to our clients worldwide.";
	$pagecat="solution-php-development";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/php-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/php-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/php-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/php-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
	$industriesheading='We develop customized PHP websites and applications by offering cutting-edge functionality and performance and unbeatable solutions for your modern day needs while meeting your unique business needs.';
}
elseif($ttitle =='pos-development'){
	$title="POS Application Development | POS System Development";
	$descriptionv="Dedicated Developers Offer Web Based Point Of Sale Systems and Software, that integrate with business to  enhance the Business Operation and Edging the Business Process Navigation with excellent POS Application Development.";
	$ogtitle="POS Application Development | POS System Development";
	$ogdescription="Dedicated Developers Offer Web Based Point Of Sale Systems and Software, that integrate with business to  enhance the Business Operation and Edging the Business Process Navigation with excellent POS Application Development.";
	$twittertitle="POS Application Development | POS System Development";
	$twitterdescription="Dedicated Developers Offer Web Based Point Of Sale Systems and Software, that integrate with business to  enhance the Business Operation and Edging the Business Process Navigation with excellent POS Application Development.";
	$pagecat="solution-pos-development-solution";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/pos-development/images/portfolio-1.jpg" alt="Portfolio" /></div>';
	$industriesheading='we have employed an in-house team of POS experts which caters to all the specific Point of Sale requirements of any online business. ';
}
elseif($ttitle =='saas-application-development'){
	$title="SaaS Web Application Development | SaaS Development Company";
	$descriptionv="Dedicated Developers is the best SaaS Development Company holds expertise in Software and saas web application development. We offer custom SaaS App development service at affordable price.";
	$ogtitle="SaaS Web Application Development | SaaS Development Company";
	$ogdescription="Dedicated Developers is the best SaaS Development Company holds expertise in Software and saas web application development. We offer custom SaaS App development service at affordable price.";
	$twittertitle="SaaS Web Application Development | SaaS Development Company";
	$twitterdescription="Dedicated Developers is the best SaaS Development Company holds expertise in Software and saas web application development. We offer custom SaaS App development service at affordable price.";
	$pagecat="solution-saas-application-development";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/saas-application-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/saas-application-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/saas-application-development/images/portfolio-3.jpg" alt="Portfolio" /></div>';
	$industriesheading='Ensure higher profits for your e-commerce business through the implementation of SaaS-based e-commerce solutions offered by our professional team of SaaS application development specialists.';
}
elseif($ttitle =='wearable-app-development'){
	$title="Wearable App Development Services | Wearable App Developers";
	$descriptionv="We provide Wearable App Development Services with best-in-class user experience. We specialized in android wearable and smart watch app development.";
	$ogtitle="Wearable App Development Services | Wearable App Developers";
	$ogdescription="We provide Wearable App Development Services with best-in-class user experience. We specialized in android wearable and smart watch app development.";
	$twittertitle="Wearable App Development Services | Wearable App Developers";
	$twitterdescription="We provide Wearable App Development Services with best-in-class user experience. We specialized in android wearable and smart watch app development.";
	$pagecat="solution-wearable-app-development";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/wearable-app-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/wearable-app-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/wearable-app-development/images/portfolio-3.jpg" alt="Portfolio" /></div>';
	$industriesheading='We develop highly scalable and progressive wearable applications that provide instant business results across industries.';
}
elseif($ttitle =='food-ordering-solutions'){
	$title="Online Food Ordering Development | Restaurant Aggregator Solutions";
	$descriptionv="Dedicated Developers provides online food ordering Development solutions and food aggregation web portal development solutions for restaurants and hotels.";
	$ogtitle="Online Food Ordering Development | Restaurant Aggregator Solutions";
	$ogdescription="Dedicated Developers provides online food ordering Development solutions and food aggregation web portal development solutions for restaurants and hotels.";
	$twittertitle="Online Food Ordering Development | Restaurant Aggregator Solutions";
	$twitterdescription="Dedicated Developers provides online food ordering Development solutions and food aggregation web portal development solutions for restaurants and hotels.";
	$pagecat="solution-food-ordering-solutions";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/food-ordering-solutions/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/food-ordering-solutions/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/food-ordering-solutions/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/food-ordering-solutions/images/portfolio-4.jpg" alt="Portfolio" /></div>';
	$industriesheading='Our online food ordering solutions along with food delivery mobile applications, restaurant apps. ';
}
elseif($ttitle =='taxi-booking-solutions'){
	$title="Taxi Booking App Development Company - Dedicated Developers";
	$descriptionv="Dedicated Developers is a top-notch taxi booking app development company. Hire expert online cab booking app developers to get taxi dispatch software system.";
	$ogtitle="Taxi Booking App Development Company - Dedicated Developers";
	$ogdescription="Dedicated Developers is a top-notch taxi booking app development company. Hire expert online cab booking app developers to get taxi dispatch software system.";
	$twittertitle="Taxi Booking App Development Company - Dedicated Developers";
	$twitterdescription="Dedicated Developers is a top-notch taxi booking app development company. Hire expert online cab booking app developers to get taxi dispatch software system.";
	$pagecat="solution-taxi-booking-solutions";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/taxi-booking-solutions/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/taxi-booking-solutions/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/taxi-booking-solutions/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/taxi-booking-solutions/images/portfolio-4.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/taxi-booking-solutions/images/portfolio-5.jpg" alt="Portfolio" /></div>';
	$industriesheading='Our Taxi App developers help your business create highly customized apps that fulfill the unique needs of your Taxi and Cab business.';
}
elseif($ttitle =='meanstack-development'){
	$title="MEAN Stack Development | MEAN Stack Developer - DD";
	$descriptionv="Dedicated Developers is Mean Stack Development Company, with highly skilled qualified and experienced MEAN Stack programmers understand your development needs.";
	$ogtitle="MEAN Stack Development | MEAN Stack Developer - DD";
	$ogdescription="Dedicated Developers is Mean Stack Development Company, with highly skilled qualified and experienced MEAN Stack programmers understand your development needs.";
	$twittertitle="MEAN Stack Development | MEAN Stack Developer - DD";
	$twitterdescription="Dedicated Developers is Mean Stack Development Company, with highly skilled qualified and experienced MEAN Stack programmers understand your development needs.";
	$pagecat="solution-meanstack-development";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/meanstack-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/meanstack-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/meanstack-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/meanstack-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
	$industriesheading='We develop highly interactive and user-friendly web portals with the MEAN Stack collection of technologies, to provide instant business success across industries.';
}
elseif($ttitle =='nodeJs-development'){
	$title="Node.js Development Company | Node.JS Application Development";
	$descriptionv="Dedicated Developers is a leading Node.js Development Company, offers NodeJS development services for web & mobile apps development. Get best Nodejs services worldwide.";
	$ogtitle="Node.js Development Company | Node.JS Application Development";
	$ogdescription="Dedicated Developers is a leading Node.js Development Company, offers NodeJS development services for web & mobile apps development. Get best Nodejs services worldwide.";
	$twittertitle="Node.js Development Company | Node.JS Application Development";
	$twitterdescription="Dedicated Developers is a leading Node.js Development Company, offers NodeJS development services for web & mobile apps development. Get best Nodejs services worldwide.";
	$pagecat="solution-nodejs-development";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/nodeJs-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/nodeJs-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/nodeJs-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/nodeJs-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
	$industriesheading='We develop dependable and high-performing Node.JS server-side developments for web and mobile applications, for high-rated user-experiences, to provide instant business success across industries.';
}
elseif($ttitle =='custom-web-development'){
	$title="Web Development Company | Custom Web Development Services";
	$descriptionv="Dedicated Developers is a Web Development Company, offers all type of website development services worldwide. Our expert developers have expertise in building all web-based solutions.";
	$ogtitle="Web Development Company | Custom Web Development Services";
	$ogdescription="Dedicated Developers is a Web Development Company, offers all type of website development services worldwide. Our expert developers have expertise in building all web-based solutions.";
	$twittertitle="Web Development Company | Custom Web Development Services";
	$twitterdescription="Dedicated Developers is a Web Development Company, offers all type of website development services worldwide. Our expert developers have expertise in building all web-based solutions.";
	$pagecat="solution-custom-web-development";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/custom-web-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/custom-web-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/custom-web-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/custom-web-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
	$industriesheading='Our custom web developers have mastered the process of top-class customized web development solutions based on the unique needs of the online businesses. ';
}
elseif($ttitle =='cms-development'){
	$title="CMS Development Services | CMS Website Development Company";
	$descriptionv="Dedicated Developers is specializing in CMS Website Development Services. Hire opensource CMS developers for your CMS development needs with excellent professional support.";
	$ogtitle="CMS Development Services | CMS Website Development Company";
	$ogdescription="Dedicated Developers is specializing in CMS Website Development Services. Hire opensource CMS developers for your CMS development needs with excellent professional support.";
	$twittertitle="CMS Development Services | CMS Website Development Company";
	$twitterdescription="Dedicated Developers is specializing in CMS Website Development Services. Hire opensource CMS developers for your CMS development needs with excellent professional support.";
	$pagecat="solution-cms-development";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/cms-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/cms-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/cms-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/cms-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
	$industriesheading='we aim towards offering the best range of highly professional CMS development solutions through the expertise of our expert team.';
}
elseif($ttitle =='ecommerce-development'){
	$title="Ecommerce Development Company | Ecommerce development services";
	$descriptionv="Dedicated Developers is a leading eCommerce development services provider company offers quality theme development, eCommerce web design, plug-in and theme development.";
	$ogtitle="Ecommerce Development Company | Ecommerce development services";
	$ogdescription="Dedicated Developers is a leading eCommerce development services provider company offers quality theme development, eCommerce web design, plug-in and theme development.";
	$twittertitle="Ecommerce Development Company | Ecommerce development services";
	$twitterdescription="Dedicated Developers is a leading eCommerce development services provider company offers quality theme development, eCommerce web design, plug-in and theme development.";
	$pagecat="solution-ecommerce-development";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/ecommerce-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/ecommerce-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/ecommerce-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/ecommerce-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
	$industriesheading='Our team of highly qualified and competent ecommerce developers helps in creating customized e-commerce websites towards promoting your brand effectively.';
}
elseif($ttitle =='azure-development-services'){
	$title="Azure Development | Azure Application Development - DD";
	$descriptionv="Dedicated Developers is the leading Microsoft Azure development service provider company. We offer Microsoft Solutions to clients across the globe with expert Azure developers.";
	$ogtitle="Azure Development | Azure Application Development - DD";
	$ogdescription="Dedicated Developers is the leading Microsoft Azure development service provider company. We offer Microsoft Solutions to clients across the globe with expert Azure developers.";
	$twittertitle="Azure Development | Azure Application Development - DD";
	$twitterdescription="Dedicated Developers is the leading Microsoft Azure development service provider company. We offer Microsoft Solutions to clients across the globe with expert Azure developers.";
	$pagecat="solution-azure";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/azure-development-services/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/azure-development-services/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/azure-development-services/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/azure-development-services/images/portfolio-4.jpg" alt="Portfolio" /></div>';
	$industriesheading='Through our relevant expertise in the given field of the best-in-class Azure development services,';
}
elseif($ttitle =='aws-development'){
	$title="AWS Development Company | AWS App Development - DD";
	$descriptionv="Dedicated Developers is one of the best AWS development companies. We provide amazon cloud development and AWS consulting & support services worldwide.";
	$ogtitle="AWS Development Company | AWS App Development - DD";
	$ogdescription="Dedicated Developers is one of the best AWS development companies. We provide amazon cloud development and AWS consulting & support services worldwide.";
	$twittertitle="AWS Development Company | AWS App Development - DD";
	$twitterdescription="Dedicated Developers is one of the best AWS development companies. We provide amazon cloud development and AWS consulting & support services worldwide.";
	$pagecat="solution-aws";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/aws-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/aws-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/aws-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/aws-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
	$industriesheading='we are committed to offering high-end AWS development services to organizations worldwide and providing application development services on AWS.';
}
elseif($ttitle =='web-portal-development'){
	$title="Web Portal Development Services | Web Portal Design Solutions - DD";
	$descriptionv="Dedicated Developers is a top-notch web portal development company provides complete solution of website portal solution for B2B and B2C sector worldwide.";
	$ogtitle="Web Portal Development Services | Web Portal Design Solutions - DD";
	$ogdescription="Dedicated Developers is a top-notch web portal development company provides complete solution of website portal solution for B2B and B2C sector worldwide.";
	$twittertitle="Web Portal Development Services | Web Portal Design Solutions - DD";
	$twitterdescription="Dedicated Developers is a top-notch web portal development company provides complete solution of website portal solution for B2B and B2C sector worldwide.";
	$pagecat="solution-web-portal-development";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/web-portal-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/web-portal-development/images/portfolio-2.jpg" alt="Portfolio" /></div>';
	$industriesheading='Our web portal development expertise encompasses a wide range of inter-related web designing and development solutions –right from setting up web portals.';
}
elseif($ttitle =='application-maintenance-services'){
	$title="Application Maintenance Services - Dedicated Developers";
	$descriptionv="Dedicated Developer's application maintenance services help you get the best out of your existing IT applications and reducing the maintenance costs.";
	$ogtitle="Application Maintenance Services - Dedicated Developers";
	$ogdescription="Dedicated Developer's application maintenance services help you get the best out of your existing IT applications and reducing the maintenance costs.";
	$twittertitle="Application Maintenance Services - Dedicated Developers";
	$twitterdescription="Dedicated Developer's application maintenance services help you get the best out of your existing IT applications and reducing the maintenance costs.";
	$pagecat="solution-application-maintenance-services";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/application-maintenance-services/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/application-maintenance-services/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/application-maintenance-services/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/application-maintenance-services/images/portfolio-4.jpg" alt="Portfolio" /></div>';
	$industriesheading='our expert team also ensures the best-in-class application maintenance services to help you cope with the changing application trends in the tech-oriented era.';
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
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-android-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-android-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-android-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-android-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-angular-developers'){
	$title="AngularJS Developers | Hire Angular Developers";
	$descriptionv="Hire AngularJS developers and Programmers from Dedicated Developers for custom AngularJS development services. We have experienced & professional Angular JS developers who provide best outcome.";
	$ogtitle="AngularJS Developers | Hire Angular Developers";
	$ogdescription="Hire AngularJS developers and Programmers from Dedicated Developers for custom AngularJS development services. We have experienced & professional Angular JS developers who provide best outcome.";
	$twittertitle="AngularJS Developers | Hire Angular Developers";
	$twitterdescription="Hire AngularJS developers and Programmers from Dedicated Developers for custom AngularJS development services. We have experienced & professional Angular JS developers who provide best outcome.";
	$pagecat="hire-angular-developers-cat";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-angular-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-angular-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-angular-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-angular-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-cake-php-developers'){
	$title="Hire cakephp Programmer | Hire CakePHP Developer";
	$descriptionv="Hire CakePHP developer and programmers from Dedicated Developers. Get the most qualified CakePHP programmers at the hiring model that suits you the best.";
	$ogtitle="Hire cakephp Programmer | Hire CakePHP Developer";
	$ogdescription="Hire CakePHP developer and programmers from Dedicated Developers. Get the most qualified CakePHP programmers at the hiring model that suits you the best.";
	$twittertitle="Hire cakephp Programmer | Hire CakePHP Developer";
	$twitterdescription="Hire CakePHP developer and programmers from Dedicated Developers. Get the most qualified CakePHP programmers at the hiring model that suits you the best.";
	$pagecat="hire-cake-php-developers-cat";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-cake-php-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-cake-php-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-cake-php-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-cake-php-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-codeigniter-developers'){
	$title="Hire Codeigniter Developer | Hire Codeigniter Programmer";
	$descriptionv="Hire dedicated CodeIgniter developers and programmers in USA from Dedicated Developers. Hire developers for top-notch Codeigniter development services.";
	$ogtitle="Hire Codeigniter Developer | Hire Codeigniter Programmer";
	$ogdescription="Hire dedicated CodeIgniter developers and programmers in USA from Dedicated Developers. Hire developers for top-notch Codeigniter development services.";
	$twittertitle="Hire Codeigniter Developer | Hire Codeigniter Programmer";
	$twitterdescription="Hire dedicated CodeIgniter developers and programmers in USA from Dedicated Developers. Hire developers for top-notch Codeigniter development services.";
	$pagecat="hire-codeigniter-developers-cat";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-codeigniter-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-codeigniter-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-codeigniter-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-codeigniter-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-dot-net-developers'){
	$title="Asp.Net Developers | Hire dot net Programmers";
	$descriptionv="Dedicated Developers have experienced Asp.Net developers and Dot net programmers to get effective asp.net development solutions at affordable cost.";
	$ogtitle="Asp.Net Developers | Hire dot net Programmers";
	$ogdescription="Dedicated Developers have experienced Asp.Net developers and Dot net programmers to get effective asp.net development solutions at affordable cost.";
	$twittertitle="Asp.Net Developers | Hire dot net Programmers";
	$twitterdescription="Dedicated Developers have experienced Asp.Net developers and Dot net programmers to get effective asp.net development solutions at affordable cost.";
	$pagecat="hire-dot-net-developers-cat";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-dot-net-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-dot-net-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-dot-net-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-dot-net-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-iphone-developers'){
	$title="Hire iPhone App Developers | Hire ios App Developer";
	$descriptionv="Hire iPhone App Developers and Programmers from Dedicated Developers for Custom, Offshore iOS Application Development Services globally.";
	$ogtitle="Hire iPhone App Developers | Hire ios App Developer";
	$ogdescription="Hire iPhone App Developers and Programmers from Dedicated Developers for Custom, Offshore iOS Application Development Services globally.";
	$twittertitle="Hire iPhone App Developers | Hire ios App Developer";
	$twitterdescription="Hire iPhone App Developers and Programmers from Dedicated Developers for Custom, Offshore iOS Application Development Services globally.";
	$pagecat="hire-iphone-developers-cat";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-iphone-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-iphone-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-iphone-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-iphone-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-java-developers'){
	$title="Hire Java Developer | Hire Java Programmers";
	$descriptionv="Hire Java Developer for all Web and Software-development requirements from Dedicated Developers. Our Java programmer will provide you scalable and attractive Java-based solution according to your budget.";
	$ogtitle="Hire Java Developer | Hire Java Programmers";
	$ogdescription="Hire Java Developer for all Web and Software-development requirements from Dedicated Developers. Our Java programmer will provide you scalable and attractive Java-based solution according to your budget.";
	$twittertitle="Hire Java Developer | Hire Java Programmers";
	$twitterdescription="Hire Java Developer for all Web and Software-development requirements from Dedicated Developers. Our Java programmer will provide you scalable and attractive Java-based solution according to your budget.";
	$pagecat="hire-java-developers-cat";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-java-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-java-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-java-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-java-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-joomla-developers'){
	$title="Hire Joomla Developer | Joomla web developer
 - Dedicated Developers";
	$descriptionv="Hire Joomla Developer & Programmers for your custom Joomla website development projects. Our Joomla Experts provide you fast and reliable solutions.";
	$ogtitle="Hire Joomla Developer | Joomla web developer - Dedicated Developers";
	$ogdescription="Hire Joomla Developer & Programmers for your custom Joomla website development projects. Our Joomla Experts provide you fast and reliable solutions.";
	$twittertitle="Hire Joomla Developer | Joomla web developer - Dedicated Developers";
	$twitterdescription="Hire Joomla Developer & Programmers for your custom Joomla website development projects. Our Joomla Experts provide you fast and reliable solutions.";
	$pagecat="hire-joomla-developers-cat";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-joomla-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-joomla-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-joomla-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-joomla-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-laravel-developers'){
	$title="Hire Laravel developer | Laravel Expert - Dedicated Developers";
	$descriptionv="Hire Laravel developers for best laravel development. Dedicated Developers have a team of profesional and experienced Laravel developer with best environment for laravel projects.";
	$ogtitle="Hire Laravel developer | Laravel Expert - Dedicated Developers";
	$ogdescription="Hire Laravel developers for best laravel development. Dedicated Developers have a team of profesional and experienced Laravel developer with best environment for laravel projects.";
	$twittertitle="Hire Laravel developer | Laravel Expert - Dedicated Developers";
	$twitterdescription="Hire Laravel developers for best laravel development. Dedicated Developers have a team of profesional and experienced Laravel developer with best environment for laravel projects.";
	$pagecat="hire-laravel-developers-cat";	
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-laravel-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-laravel-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-laravel-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-laravel-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-magento-developers'){
	$title="Hire Magento Developer | Magento Programmers";
	$descriptionv="Hire Magento Developer & Programmers from Dedicated Developers. We offers Magento theme and ecommerce development with skilled Magento experts at affordable price worldwide.";
	$ogtitle="Hire Magento Developer | Magento Programmers";
	$ogdescription="Hire Magento Developer & Programmers from Dedicated Developers. We offers Magento theme and ecommerce development with skilled Magento experts at affordable price worldwide.";
	$twittertitle="Hire Magento Developer | Magento Programmers";
	$twitterdescription="Hire Magento Developer & Programmers from Dedicated Developers. We offers Magento theme and ecommerce development with skilled Magento experts at affordable price worldwide.";
	$pagecat="hire-magento-developers-cat";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-magento-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-magento-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-magento-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-magento-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-node-js-developers'){
	$title="Hire Node.Js Developer | NodeJS Expert - Dedicated Developers";
	$descriptionv="Hire Node.js developers from Dedicated Developers to build best web-apps at affordable rates. We have team of experienced & professional Node.JS programmers to provide best outcome.";
	$ogtitle="Hire Node.Js Developer | NodeJS Expert - Dedicated Developers";
	$ogdescription="Hire Node.js developers from Dedicated Developers to build best web-apps at affordable rates. We have team of experienced & professional Node.JS programmers to provide best outcome.";
	$twittertitle="Hire Node.Js Developer | NodeJS Expert - Dedicated Developers";
	$twitterdescription="Hire Node.js developers from Dedicated Developers to build best web-apps at affordable rates. We have team of experienced & professional Node.JS programmers to provide best outcome.";
	$pagecat="hire-node-js-developers-cat";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-node-js-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-node-js-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-node-js-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-node-js-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-phone-gap-developers'){
	$title="Hire Phonegap Developer | Hire Phonegap Programmer";
	$descriptionv="Hire Expert Phonegap developer for Phonegap apps development and to acquire Hybrid App Development services offered by Dedicated Developers.";
	$ogtitle="Hire Phonegap Developer | Hire Phonegap Programmer";
	$ogdescription="Hire Expert Phonegap developer for Phonegap apps development and to acquire Hybrid App Development services offered by Dedicated Developers.";
	$twittertitle="Hire Phonegap Developer | Hire Phonegap Programmer";
	$twitterdescription="Hire Expert Phonegap developer for Phonegap apps development and to acquire Hybrid App Development services offered by Dedicated Developers.";
	$pagecat="hire-phone-gap-developers-cat";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-phone-gap-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-phone-gap-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-phone-gap-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-phone-gap-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-php-developers'){
	$title="Hire PHP Developer | Hire PHP Programmer - Dedicated Developers";
	$descriptionv="Hire PHP Developers & Programmers from Dedicated Developers for custom PHP web development services. We provide php developer at affordable hourly rate, fixed time for onsite and offsite locations.";
	$ogtitle="Hire PHP Developer | Hire PHP Programmer - Dedicated Developers";
	$ogdescription="Hire PHP Developers & Programmers from Dedicated Developers for custom PHP web development services. We provide php developer at affordable hourly rate, fixed time for onsite and offsite locations.";
	$twittertitle="Hire PHP Developer | Hire PHP Programmer - Dedicated Developers";
	$twitterdescription="Hire PHP Developers & Programmers from Dedicated Developers for custom PHP web development services. We provide php developer at affordable hourly rate, fixed time for onsite and offsite locations.";
	$pagecat="hire-php-developers-cat";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-php-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-php-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-php-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-php-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-php-developers-old'){
	$title="Hire PHP Developer | Hire PHP Programmer - Dedicated Developers";
	$descriptionv="Hire PHP Developers & Programmers from Dedicated Developers for custom PHP web development services. We provide php developer at affordable hourly rate, fixed time for onsite and offsite locations.";
	$ogtitle="Hire PHP Developer | Hire PHP Programmer - Dedicated Developers";
	$ogdescription="Hire PHP Developers & Programmers from Dedicated Developers for custom PHP web development services. We provide php developer at affordable hourly rate, fixed time for onsite and offsite locations.";
	$twittertitle="Hire PHP Developer | Hire PHP Programmer - Dedicated Developers";
	$twitterdescription="Hire PHP Developers & Programmers from Dedicated Developers for custom PHP web development services. We provide php developer at affordable hourly rate, fixed time for onsite and offsite locations.";
	$pagecat="hire-php-developers-cat";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-php-developers-old/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-php-developers-old/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-php-developers-old/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-php-developers-old/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-webdesign'){
	$title="Hire Web Designer | Hire Website Designer";
	$descriptionv="Hire Web Designer & Developer at affordable cost on flexible hiring model. Dedicated Developer convert your web design ideas into reality. Contact us to hire a web designer now.";
	$ogtitle="Hire Web Designer | Hire Website Designer";
	$ogdescription="Hire Web Designer & Developer at affordable cost on flexible hiring model. Dedicated Developer convert your web design ideas into reality. Contact us to hire a web designer now.";
	$twittertitle="Hire Web Designer | Hire Website Designer";
	$twitterdescription="Hire Web Designer & Developer at affordable cost on flexible hiring model. Dedicated Developer convert your web design ideas into reality. Contact us to hire a web designer now.";
	$pagecat="hire-webdesign-cat";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-webdesigner/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-webdesigner/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-webdesigner/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-webdesigner/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-wordpress-developers'){
	$title="Hire Wordpress Developer | Hire Wordpress Experts";
	$descriptionv="Hire WordPress Developer from dedicated Developers for Custom Development requirement. Our WordPress developers are capable of developing custom plugins and themes.";
	$ogtitle="Hire Wordpress Developer | Hire Wordpress Experts";
	$ogdescription="Hire WordPress Developer from dedicated Developers for Custom Development requirement. Our WordPress developers are capable of developing custom plugins and themes.";
	$twittertitle="Hire Wordpress Developer | Hire Wordpress Experts";
	$twitterdescription="Hire WordPress Developer from dedicated Developers for Custom Development requirement. Our WordPress developers are capable of developing custom plugins and themes.";
	$pagecat="hire-wordpress-developers-cat";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-wordpress-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-wordpress-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-wordpress-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-wordpress-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-mean-stack-developers'){
	$title="MEAN stack developer | MEAN Stack Development - DD";
	$descriptionv="Hire expert MEAN Stack developers for custom MEAN Stack development services. Get affordable MEAN Stack development services at low cost worldwide.";
	$ogtitle="MEAN stack developer | Full Stack Development - DD";
	$ogdescription="Hire expert MEAN Stack developers for custom MEAN Stack development services. Get affordable MEAN Stack development services at low cost worldwide.";
	$twittertitle="MEAN stack developer | Full Stack Development - DD";
	$twitterdescription="Hire expert MEAN Stack developers for custom MEAN Stack development services. Get affordable MEAN Stack development services at low cost worldwide.";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-mean-stack-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-mean-stack-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-mean-stack-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-mean-stack-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-python-developers'){
	$title="Python Developer | Hire Python Programmer - DD";
	$descriptionv="Hire dedicated offshore Python developers and programmers from Dedicated Developers for your custom Python development projects.";
	$ogtitle="Python Developer | Hire Python Programmer - DD";
	$ogdescription="Hire dedicated offshore Python developers and programmers from Dedicated Developers for your custom Python development projects.";
	$twittertitle="Python Developer | Hire Python Programmer - DD";
	$twitterdescription="Hire dedicated offshore Python developers and programmers from Dedicated Developers for your custom Python development projects.";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-python-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-python-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-python-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-python-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}
elseif($ttitle =='hire-ruby-on-rails-developers'){
	$title="Hire Ruby on Rails Programmer | Hire ROR Developer";
	$descriptionv="Hire Ruby on Rails Programmer and developer from Dedicated Developers for your custom ROR web application development projects.";
	$ogtitle="Hire Ruby on Rails Programmer | Hire ROR Developer";
	$ogdescription="Hire Ruby on Rails Programmer and developer from Dedicated Developers for your custom ROR web application development projects.";
	$twittertitle="Hire Ruby on Rails Programmer | Hire ROR Developer";
	$twitterdescription="Hire Ruby on Rails Programmer and developer from Dedicated Developers for your custom ROR web application development projects.";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-ruby-on-rails-developers/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-ruby-on-rails-developers/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-ruby-on-rails-developers/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.developers.'/hire-ruby-on-rails-developers/images/portfolio-4.jpg" alt="Portfolio" /></div>';
}


//Our Solution Home Page boxes 
elseif($ttitle =='cloud-computing-services'){
	$title="Cloud Computing Services | Cloud App Development";
	$descriptionv="Dedicated Developers is a full service Cloud computing solutions company offering Cloud App Development, Cloud Configuration, Migration to Cloud. We pride ourselves in offering advisory to transformational support in building new IT assets or integrations";
	$ogtitle="Cloud Computing Services | Cloud App Development";
	$ogdescription="Dedicated Developers is a full service Cloud computing solutions company offering Cloud App Development, Cloud Configuration, Migration to Cloud. We pride ourselves in offering advisory to transformational support in building new IT assets or integrations";
	$twittertitle="Cloud Computing Services | Cloud App Development";
	$twitterdescription="Dedicated Developers is a full service Cloud computing solutions company offering Cloud App Development, Cloud Configuration, Migration to Cloud. We pride ourselves in offering advisory to transformational support in building new IT assets or integrations";
    $portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
	$industriesheading='We cater to a wide range of industry niches through our comprehensive digital solutions.';
}
elseif($ttitle =='enterprise-mobility-solutions'){
	$title="Enterprise Mobility Solution | Enterprise Mobility Services";
	$descriptionv="We offer End-to-end enterprise mobility solutions to empower business with scalability and security. We offer our mobility solutions to multiple industries.";
	$ogtitle="Enterprise Mobility Solution | Enterprise Mobility Services";
	$ogdescription="We offer End-to-end enterprise mobility solutions to empower business with scalability and security. We offer our mobility solutions to multiple industries.";
	$twittertitle="Enterprise Mobility Solution | Enterprise Mobility Services";
	$twitterdescription="We offer End-to-end enterprise mobility solutions to empower business with scalability and security. We offer our mobility solutions to multiple industries.";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/enterprise-mobility-solutions/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/enterprise-mobility-solutions/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/enterprise-mobility-solutions/images/portfolio-3.jpg" alt="Portfolio" /></div>';
	$industriesheading='We develop highly scalable and progressive enterprise mobility solutions that provide instant business results across industries.';

}
elseif($ttitle =='full-stack-development'){
	$title="Full Stack Development | Full Stack Web Development";
	$descriptionv="Dedicated Developers provide Full Stack development services focuses on building Enterprise-ready Mobile, Web and API solutions globally. Hire Full Stack Developer at best prices.";
	$ogtitle="Full Stack Development | Full Stack Web Development";
	$ogdescription="Dedicated Developers provide Full Stack development services focuses on building Enterprise-ready Mobile, Web and API solutions globally. Hire Full Stack Developer at best prices.";
	$twittertitle="Full Stack Development | Full Stack Web Development";
	$twitterdescription="Dedicated Developers provide Full Stack development services focuses on building Enterprise-ready Mobile, Web and API solutions globally. Hire Full Stack Developer at best prices.";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/full-stack-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/full-stack-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/full-stack-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/full-stack-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
	$industriesheading='With the concept of advanced full stack development gaining impetus in the recent business scenario,';
}
elseif($ttitle =='Iot-app-development'){
	$title="IoT Application Development | IoT Solutions and Services";
	$descriptionv="Dedicated Developers is a fully staffed IoT Application company. We have a proven track record of developing world class IoT solutions with intuitive user experience that connect smart devices, wearables, sensors, and more.";
	$ogtitle="IoT Application Development | IoT Solutions and Services";
	$ogdescription="Dedicated Developers is a fully staffed IoT Application company. We have a proven track record of developing world class IoT solutions with intuitive user experience that connect smart devices, wearables, sensors, and more.";
	$twittertitle="IoT Application Development | IoT Solutions and Services";
	$twitterdescription="Dedicated Developers is a fully staffed IoT Application company. We have a proven track record of developing world class IoT solutions with intuitive user experience that connect smart devices, wearables, sensors, and more.";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.solutions.'/Iot-app-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/Iot-app-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.solutions.'/Iot-app-development/images/portfolio-3.jpg" alt="Portfolio" /></div>';
	$industriesheading='Let our IoT services make application data management a seamless process for you through a highly scalable,';
}
elseif($ttitle =='mobile-application-development'){
	$title="Mobile App Development Company | Top App Developers USA";
	$descriptionv="Dedicated Developers is a top-notch mobile application development company among top app development companies in USA. We provide best mobile development services to clients that bring high efficiency for their businesses with top app developers USA.";
	$ogtitle="Mobile App Development Company | Top App Developers USA";
	$ogdescription="Dedicated Developers is a top-notch mobile application development company among top app development companies in USA. We provide best mobile development services to clients that bring high efficiency for their businesses with top app developers USA.";
	$twittertitle="Mobile App Development Company | Top App Developers USA";
	$twitterdescription="Dedicated Developers is a top-notch mobile application development company among top app development companies in USA. We provide best mobile development services to clients that bring high efficiency for their businesses with top app developers USA.";
    $portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
	$industriesheading='We develop highly scalable and progressive mobile applications that provide instant business results across industries.';
}
elseif($ttitle =='software-product-development'){
	$title="Software Product Development Company and Services";
	$descriptionv="Dedicated Developers is Top-notch Software product development company, having software product development experts, work with you to design and implement custom software and apps that are specific to your industry.";
	$ogtitle="Software Product Development Company and Services";
	$ogdescription="Dedicated Developers is Top-notch Software product development company, having software product development experts, work with you to design and implement custom software and apps that are specific to your industry.";
	$twittertitle="Software Product Development Company and Services";
	$twitterdescription="Dedicated Developers is Top-notch Software product development company, having software product development experts, work with you to design and implement custom software and apps that are specific to your industry.";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-2.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-3.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/software-product-development/images/portfolio-4.jpg" alt="Portfolio" /></div>';
	$industriesheading='Our highly qualified and experienced software developers have gained ample expertise towards building software products across diverse industry niches and domains. ';
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
//Privacy Policy and Terms & Conditions
elseif($ttitle =='technology-tips-for-startups'){
	$title="FREE Technology Tips for Startups Guide Reveals the Ideal Solution for Startups Looking to Get Their Technology Right for Today & the Future";
}

elseif($ttitle =='internet-of-things'){
	$title="Discover How the ‘Internet of Things’ is Rapidly Transforming 10 Growing Industries
Right Before Our Very Eyes!";
}


else{
	$title="Top Web and Mobile App Development Company, USA";
	$descriptionv="Dedicated Developers is one of the top web and mobile application development company in the USA. We offer custom mobile application and website development services.";
	$ogtitle="Top Web and Mobile App Development Company, USA ";
	$ogdescription="Dedicated Developers is one of the top web and mobile application development company in the USA. We offer custom mobile application and website development services.";
	$twittertitle="Top  Web and Mobile App Development Company, USA ";
	$twitterdescription="Dedicated Developers is one of the top web and mobile application development company in the USA. We offer custom mobile application and website development services.";
	$portfolioImgs='<div class="slide-content"><img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/images/portfolio-11.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/images/portfolio-12.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/images/portfolio-13.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/images/portfolio-1.jpg" alt="Portfolio" /></div><div class="slide-content"> <img width="auto" height="auto" class="responsive-img" src="'.BASE_URL.'/images/portfolio-1.jpg" alt="Portfolio" /></div>';
	$industriesheading='We cater to a wide range of industry niches through our comprehensive digital solutions.';
}
?>