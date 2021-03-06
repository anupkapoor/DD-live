<?php 
	/* 
 * Verify YouTube video status
 */
    $videoID = isset($_REQUEST["ytcode"])?$_REQUEST["ytcode"]:"MyqURHSF1Ts";
     $headers = get_headers("https://gdata.youtube.com/feeds/api/videos/". $videoID);
	$response=substr($headers[0], 9, 3);
	$message="";
	
    switch($response) {
    case '200':
    // video valid

	$message="";
    break;

    case '403':
	$message="This Youtube video is private";
    break;

    case '404':
	$message="Youtube Video not found";
    // video not found
    break;

    default:
	$message="Invalid Youtube Video";	
    // nothing  above
    break;
    } 
	
	if(($message!="")||($videoID==""))
	$videoID="MyqURHSF1Ts";
	
?>

<!DOCTYPE html> 
<html>
<head>
<title>Interactive Page</title>
<link href="css/style.css" rel="stylesheet" media="screen" type="text/css" />
</head>
<body>
	<div id="wrap">
		<div id="mid-box">
			<div id="layout">
				<img id="base-image" src="images/layout.jpg" alt="" usemap="#map"  />
				<h2 id="desk-name">Vishal Bhatia</h2>
				<h2 id="paper-date"></h2>
				<div id="yt-video">
					<div class="video-wrapper ">
					<div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_k26gw8zjlb videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
					
					
					
					
					
					
					
					
					
					
					
					<!--<iframe width="560" height="315" src="//www.youtube.com/embed/MyqURHSF1Ts" frameborder="0" allowfullscreen></iframe> -->
					<!--<iframe id="yt-video" width="345" height="194" src="//www.youtube.com/embed/<?php echo $videoID; ?>?rel=0&amp;controls=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
					<!-- <iframe src="https://player.vimeo.com/video/225268433?title=0&byline=0&portrait=0" width="345" height="194" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
					</div>
				</div>
				<a id="AudioLink" class="map-link" href="javascript:;" >&nbsp;</a>
				<a id="BusinessCard" class="map-link" href="javascript:;" >&nbsp;</a>
				<a id="LeftReport" class="map-link" href="javascript:;" >&nbsp;</a>
				<a id="Letter" class="map-link" href="javascript:;" >&nbsp;</a>
				<a id="RightBook" class="map-link" href="javascript:;" >&nbsp;</a>
				<a id="Folder1" class="map-link" href="javascript:;" >&nbsp;</a>
				<a id="Folder2" class="map-link" href="javascript:;" >&nbsp;</a>
				<a id="Folder3" class="map-link" href="javascript:;" >&nbsp;</a>
				<a id="Folder4" class="map-link" href="javascript:;" >&nbsp;</a>
			</div>
			<div id="SpiralViewer">
				<img width="1240" height="1105" src="images/SpiralViewer.png" id="SpiralViewer_Image">
				<div id="SpiralViewer_Paper">
					<img src="">
				</div>
				<a title="Download PDF" href="javascript:;" class="DownloadButton" ><img border="0" src="images/DownloadButton.png" id="SpiralViewer_DownloadButton"></a>
				<a title="Close" href="javascript:;"><img border="0" src="images/CloseButton.png" alt="Close" id="SpiralViewer_CloseButton"></a>
				<a title="Back" href="javascript:;"><img border="0" src="images/BackButton.png" id="SpiralViewer_BackButton"></a>
				<a title="Forward" href="javascript:;"><img border="0" src="images/ForwardButton.png" id="SpiralViewer_ForwardButton"></a>
			</div>
			<div id="BCViewer">
			 	<div class="flip-container">
					<div class="flipper">
						<div class="front">
							<!-- front content -->
							<img src="images/card.png" alt="Card Front" />
						</div>
						<div class="center">
							<div class="inside-top"><img src="images/inside-top.png" alt="Card Front" /></div>
							<div class="inside_bot">
								<div class="inside-inner">
									<img src="images/inside-bot.png" alt="Card Front">
								</div>
							</div>
						</div>
						
						
					</div>
					<div class="back">
						<div class="inner-back"><img src="images/card-back.png" alt="Card back" /></div>
					</div>		
					<img class="card-nav" id="card-Back" src="images/BackButton.png" border="0" />					
					<img class="card-nav" id="card-Back1" src="images/BackButton.png" border="0" />					
				</div>
			  <a title="Download contact information as vcard" href=""><img border="0" alt="Download contact information as vcard" src="images/DownloadButton.png" class="DownloadButton" id="BCViewer_DownloadButton"></a>
				 <a title="Close" href="javascript:;"><img border="0" alt="Close" src="images/CloseButton.png" id="BCViewer_CloseButton"></a>
			<!--  <a title="Click to send email to mailto:Vishal@DedicatedDevelopers.com" href="mailto:Vishal@DedicatedDevelopers.com"><img border="0" alt="Click to send email to mailto:Vishal@DedicatedDevelopers.com" src="images/EmailButton.png" id="BCViewer_EmailButton"></a>
			  <a title="Download contact information as vcard" href=""><img border="0" alt="Download contact information as vcard" src="images/DownloadButton.png" class="DownloadButton" id="BCViewer_DownloadButton"></a>
			  <a title="Close" href="javascript:;"><img border="0" alt="Close" src="images/CloseButton.png" id="BCViewer_CloseButton"></a>
			-->
			</div>
			<div id="LetterViewer">
				<!-- <img width="1240" height="1105" border="0" src="images/LetterViewer.png" id="LetterViewer_Image"> -->
				<div id="LetterViewer_Paper">
				  <img border="0" id="LetterViewer_Paper_Image" src="">
				</div>
				<a title="Download PDF" href="javascript:;"><img border="0" src="images/DownloadButton.png" class="DownloadButton" id="LetterViewer_DownloadButton"></a>
				<a title="Close" href="javascript:;"><img border="0" src="images/CloseButton.png" alt="Close" id="LetterViewer_CloseButton"></a>
				
			</div>
			<div id="BookViewer">
				<div id="book-open-v"><iframe width="1260" height="1200" src="book.html" frameborder="0" allowfullscreen></iframe></div>
				<div id="book-wrapper-v" style="display:none;">
					<img id="BookViewer_Image" src="images/BookViewer.png" width="" height="" border="0" />
					<div id="BookViewer_PageLeft" ></div>
					<div id="BookViewer_PageRight"></div>
					<img id="BookViewer_Shadow" src="images/BookViewer_Shadow.png" width="" height="" border="0" />
					<a href="javascript:;" title="Back"><img id="BookViewer_BackButton" src="images/BackButton.png" border="0" /></a>
					<a href="javascript:;" title="Forward"><img id="BookViewer_ForwardButton" src="images/ForwardButton.png" border="0" /></a>
					<a href="javascript:;" title="Download PDF"><img id="BookViewer_DownloadButton" class="DownloadButton" src="images/DownloadButton.png" border="0" /></a>
					<a href="javascript:;" title="Close"><img id="BookViewer_CloseButton" alt="Close" src="images/CloseButton.png" border="0" /></a>
					<a href="javascript:;" title="Table of Content" id="BookViewer_toi" ><img src="images/toi.png" border="0" /></a>
				</div>
				<div style="display:none;" id="book-close-v"><a title="Close" id="book-close-but" ><img border="0" src="images/CloseButton.png" alt="Close"></a><iframe width="1260" height="1200" src="book-close.html" frameborder="0" allowfullscreen></iframe></div>
			</div>
			<div id="flipbook">
				<div id="flipbook-base">
					<iframe src="flipbook/index.html"></iframe> 
					<a title="Download PDF" href="javascript:;"><img border="0" src="images/DownloadButton.png" class="DownloadButton" id="flipbook_DownloadButton"></a>
					<a title="Close" href="javascript:;"><img border="0" src="images/CloseButton.png" alt="Close" id="flipbook_CloseButton"></a>
				</div>
			</div>  
			<div id="Cloak"></div>
		</div>
		<!-- <?php // if($message!=""): ?>
				<div id="errorMessageVideo">
				<p><?php // echo $message; ?></p>
				</div>
		<?php // endif;?> -->
		<div id="table-of-index-block" class="content-style">
		<a href="javascript:;" title="Close" id="ToiClose"><img  alt="Close" src="images/CloseButton.png" border="0" /></a>
<h1>CONTENTS</h1>
<ul>
<li><a href="#" onclick="UpdateBookPage(3)" class="ch1"><em>&nbsp;</em> <span>Is this book for you?</span> <strong>i</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(5)" class="ch2"><em>&nbsp;</em> <span>Introduction </span><strong>iv</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(7)" class="ch3"><em>&nbsp;</em> <span>Why Listen To Us? </span> <strong>Xii</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(11)" class="ch4"><em>1</em><span>When and WHY you should consider outsourcing web and mobile projects</span>  <strong>1</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(15)" class="ch5"><em>2</em><span>Where should you outsource your web and mobile projects?</span>  <strong>8</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(18)" class="ch6"><em>3</em><span>How do you choose a web mobile outsourcing vendor?</span>  <strong>14</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(24)" class="ch7"><em>4</em><span>How do you keep control of your outsourced software development</span>  <strong>26</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(31)" class="ch8"> <em>5</em><span>How do you measure the success of outsourcing?</span>  <strong>40</strong></a></li>
<li><a href="#"  onclick="UpdateBookPage(36)" class="ch9"> <em>6</em><span>How do you protect your intellectual property</span>  <strong>50</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(41)" class="ch10"><em>7</em><span>Which situations are best for outsourcing web and mobile projects? How do you know it will work for you? </span> <strong>60</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(50)" class="ch11"> <em>8</em><span>What is the future of outsourcing? How do you future proof your projects?</span>  <strong>78</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(54)" class="ch12"> <em>9</em><span>What are the biggest mistakes to avoid</span>  <strong>86</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(58)" class="ch13"> <em>10</em><span>Bonus Quiz: "Should I outsource my next projects?"</span>  <strong>94</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(59)" class="ch14"> <em>&nbsp;</em> <span>Encore Bonus Quiz: Are you a good fit to work with Dedicated Developers?</span>  <strong>96</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(60)" class="ch15"> <em>&nbsp;</em> <span>Real Life Case Studies - What is like to work with Dedicated Developers?</span><strong>98</strong></a></li>
</ul>
</div>
	</div>
	 <script>
    var LoadData = {};
    LoadData.ShockBox_ESID    = "jackson-county-utility-authority-beverly-dennis";
    LoadData.AudioURI         = "images/480245";
    LoadData.BusinessCardURI  = "images/vcard.jpg";
    LoadData.BusinessCardSrc  = "Business-Card.pdf";
    LoadData.LeftReportURIs   = ["images/Insiders-Guide/1.png", "images/Insiders-Guide/2.png", "images/Insiders-Guide/3.png", "images/Insiders-Guide/4.png", "images/Insiders-Guide/5.png", "images/Insiders-Guide/6.png", "images/Insiders-Guide/7.png", "images/Insiders-Guide/8.png", "images/Insiders-Guide/9.png", "images/Insiders-Guide/10.png", "images/Insiders-Guide/11.png", "images/Insiders-Guide/12.png", "images/Insiders-Guide/13.png", "images/Insiders-Guide/14.png", "images/Insiders-Guide/15.png", "images/Insiders-Guide/16.png", "images/Insiders-Guide/17.png", "images/Insiders-Guide/18.png", "images/Insiders-Guide/19.png", "images/Insiders-Guide/20.png", "images/Insiders-Guide/21.png", "images/Insiders-Guide/22.png", "images/Insiders-Guide/23.png", "images/Insiders-Guide/24.png"];
    LoadData.LeftReportSrc    = "Insiders-Guide-and-Case-Studies.pdf";
    LoadData.LetterURI        = ["images/cover-letter/1.png", "images/cover-letter/2.png"];
	LoadData.LetterSrc     = "Cover_Letter_Before_Consultation_Call.pdf";
    LoadData.RightBookURIs    = ["images/ultimate-plan/0.png","images/ultimate-plan/1.png", "images/ultimate-plan/2.png", "images/ultimate-plan/3.png", "images/ultimate-plan/4.png", "images/ultimate-plan/5.png", "images/ultimate-plan/6.png", "images/ultimate-plan/7.png", "images/ultimate-plan/8.png", "images/ultimate-plan/9.png", "images/ultimate-plan/10.png", "images/ultimate-plan/11.png", "images/ultimate-plan/12.png", "images/ultimate-plan/13.png", "images/ultimate-plan/14.png", "images/ultimate-plan/15.png", "images/ultimate-plan/16.png", "images/ultimate-plan/17.png", "images/ultimate-plan/18.png", "images/ultimate-plan/19.png", "images/ultimate-plan/20.png", "images/ultimate-plan/21.png", "images/ultimate-plan/22.png", "images/ultimate-plan/23.png", "images/ultimate-plan/24.png", "images/ultimate-plan/25.png","images/ultimate-plan/26.png", "images/ultimate-plan/27.png", "images/ultimate-plan/28.png", "images/ultimate-plan/29.png", "images/ultimate-plan/30.png", "images/ultimate-plan/31.png", "images/ultimate-plan/32.png", "images/ultimate-plan/33.png", "images/ultimate-plan/34.png", "images/ultimate-plan/35.png", "images/ultimate-plan/36.png", "images/ultimate-plan/37.png", "images/ultimate-plan/38.png", "images/ultimate-plan/39.png", "images/ultimate-plan/40.png", "images/ultimate-plan/41.png", "images/ultimate-plan/42.png", "images/ultimate-plan/43.png", "images/ultimate-plan/44.png", "images/ultimate-plan/45.png", "images/ultimate-plan/46.png", "images/ultimate-plan/47.png", "images/ultimate-plan/48.png", "images/ultimate-plan/49.png", "images/ultimate-plan/50.png","images/ultimate-plan/51.png", "images/ultimate-plan/52.png", "images/ultimate-plan/53.png", "images/ultimate-plan/54.png", "images/ultimate-plan/55.png", "images/ultimate-plan/56.png", "images/ultimate-plan/57.png", "images/ultimate-plan/58.png", "images/ultimate-plan/59.png", "images/ultimate-plan/60.png", "images/ultimate-plan/61.png", "images/ultimate-plan/62.png", "images/ultimate-plan/63.png", "images/ultimate-plan/64.png", "images/ultimate-plan/65.png", "images/ultimate-plan/66.png", "images/ultimate-plan/67.png", "images/ultimate-plan/68.png", "images/ultimate-plan/69.png", "images/ultimate-plan/70.png", "images/ultimate-plan/71.png", "images/ultimate-plan/72.png", "images/ultimate-plan/73.png", "images/ultimate-plan/74.png", "images/ultimate-plan/75.png","images/ultimate-plan/76.png", "images/ultimate-plan/77.png", "images/ultimate-plan/78.png", "images/ultimate-plan/79.png", "images/ultimate-plan/80.png", "images/ultimate-plan/81.png", "images/ultimate-plan/82.png", "images/ultimate-plan/83.png", "images/ultimate-plan/84.png", "images/ultimate-plan/85.png", "images/ultimate-plan/86.png", "images/ultimate-plan/87.png", "images/ultimate-plan/88.png", "images/ultimate-plan/89.png", "images/ultimate-plan/90.png", "images/ultimate-plan/91.png", "images/ultimate-plan/92.png", "images/ultimate-plan/93.png", "images/ultimate-plan/94.png", "images/ultimate-plan/95.png", "images/ultimate-plan/96.png", "images/ultimate-plan/97.png", "images/ultimate-plan/98.png", "images/ultimate-plan/99.png", "images/ultimate-plan/100.png","images/ultimate-plan/101.png", "images/ultimate-plan/102.png", "images/ultimate-plan/103.png", "images/ultimate-plan/104.png", "images/ultimate-plan/105.png", "images/ultimate-plan/106.png", "images/ultimate-plan/107.png", "images/ultimate-plan/108.png", "images/ultimate-plan/109.png", "images/ultimate-plan/110.png", "images/ultimate-plan/111.png", "images/ultimate-plan/112.png", "images/ultimate-plan/113.png", "images/ultimate-plan/114.png", "images/ultimate-plan/115.png", "images/ultimate-plan/116.png", "images/ultimate-plan/117.png", "images/ultimate-plan/118.png", "images/ultimate-plan/119.png", "images/ultimate-plan/120.png", "images/ultimate-plan/121.png", "images/ultimate-plan/122.png", "images/ultimate-plan/123.png", "images/ultimate-plan/124.png", "images/ultimate-plan/125.png","images/ultimate-plan/126.png", "images/ultimate-plan/127.png", "images/ultimate-plan/128.png", "images/ultimate-plan/129.png", "images/ultimate-plan/130.png", "images/ultimate-plan/131.png", "images/ultimate-plan/132.png", "images/ultimate-plan/133.png", "images/ultimate-plan/134.png", "images/ultimate-plan/135.png", "images/ultimate-plan/136.png", "images/ultimate-plan/137.png", "images/ultimate-plan/138.png", "images/ultimate-plan/139.png", "images/ultimate-plan/140.png", "images/ultimate-plan/141.png", "images/ultimate-plan/142.png", "images/ultimate-plan/143.png", "images/ultimate-plan/144.png", "images/ultimate-plan/145.png", "images/ultimate-plan/146.png", "images/ultimate-plan/147.png", "images/ultimate-plan/148.png", "images/ultimate-plan/149.png", "images/ultimate-plan/150.png", "images/ultimate-plan/151.png", "images/ultimate-plan/152.png", "images/ultimate-plan/153.png", "images/ultimate-plan/154.png", "images/ultimate-plan/155.png", "images/ultimate-plan/156.png", "images/ultimate-plan/157.png", "images/ultimate-plan/158.png", "images/ultimate-plan/159.png", "images/ultimate-plan/160.png", "images/ultimate-plan/161.png"];
    LoadData.RightBookSrc     = "Ultimate-Plan-for-Outsourcing.pdf";
    LoadData.Folder1URIs      = ["images/case-studies/1.png", "images/case-studies/2.png", "images/case-studies/3.png", "images/case-studies/4.png", "images/case-studies/5.png", "images/case-studies/6.png", "images/case-studies/7.png", "images/case-studies/8.png", "images/case-studies/9.png", "images/case-studies/10.png", "images/case-studies/11.png", "images/case-studies/12.png", "images/case-studies/13.png", "images/case-studies/14.png", "images/case-studies/15.png", "images/case-studies/16.png", "images/case-studies/17.png", "images/case-studies/18.png", "images/case-studies/19.png", "images/case-studies/20.png", "images/case-studies/21.png", "images/case-studies/22.png", "images/case-studies/23.png", "images/case-studies/24.png", "images/case-studies/25.png", "images/case-studies/26.png", "images/case-studies/27.png", "images/case-studies/28.png", "images/case-studies/29.png", "images/case-studies/30.png", "images/case-studies/31.png", "images/case-studies/32.png", "images/case-studies/33.png", "images/case-studies/34.png", "images/case-studies/35.png", "images/case-studies/36.png", "images/case-studies/37.png", "images/case-studies/38.png", "images/case-studies/39.png", "images/case-studies/40.png", "images/case-studies/41.png", "images/case-studies/42.png", "images/case-studies/43.png", "images/case-studies/44.png"];
    LoadData.Folder2URIs      = ["images/client-bill/1.png", "images/client-bill/2.png"];
    LoadData.Folder3URIs      = ["images/Services/1.png", "images/Services/2.png"];
    LoadData.Folder4URIs      = ["images/certificate.png"];
    LoadData.Folder1Src       = "Case_Studies_Book_DD_2013_V2.23_Internet.pdf";
    LoadData.Folder2Src       = "Client-Bill-of-Rights_v3.9.pdf";
    LoadData.Folder3Src       = "DD-Services-Brochure.pdf";
    LoadData.Folder4Src       = "Guarantee_Certificate_v1.10_Final.pdf";

  </script>
  
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.7.2.js"></script>

<script src="script/custom.js"></script>

 <script>
$(".flipper").click(function(){
  $(".flipper").addClass("rotate");
  $('#card-Back').fadeIn();
  // $('#card-Back1').hide();
});
$("#card-Back").click(function(){
  $(".flipper").removeClass("rotate");
  $(this).fadeOut();
  $(".center").removeClass("rotateback2");
  // $('#card-Back1').hide();
}); 
</script>
<script>
$(".center").click(function(){
  $(".center").addClass("rotateback");
  $(".back").addClass("cardback");
  $('#card-Back').hide();
  $('#card-Back1').show();
  $(".center").removeClass("rotateback2");
 // $(".inside-inner").slideUp("slow");
}); 
$("#card-Back1").click(function(){
  $(".back").removeClass("cardback");
  //setTimeout(function(){$(".center").removeClass("rotateback");}, 600);
  $(".center").removeClass("rotateback");
  $(".center").addClass("rotateback2");
  //$(".inside-inner").delay(500).slideDown( 2200, "swing");
  $('#card-Back').show();
  $(this).hide();
}); 
</script>
<script type ="text/javascript">
	$('#book-close-but').click(function(){
	$('#Cloak').hide();
	$('#Video').show();
    document.location.reload(true);
});
</script>
<div id="table-of-index" style="display:none;" class="content-style">
<h1>CONTENTS</h1>
<ul>
<li><a href="#" onclick="UpdateBookPage(3)" class="ch1"><em>&nbsp;</em> <span>Is this book for you?</span> <strong>i</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(5)" class="ch2"><em>&nbsp;</em> <span>Introduction </span><strong>iv</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(7)" class="ch3"><em>&nbsp;</em> <span>Why Listen To Us? </span> <strong>Xii</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(11)" class="ch4"><em>1</em><span>When and WHY you should consider outsourcing web and mobile projects</span>  <strong>1</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(15)" class="ch5"><em>2</em><span>Where should you outsource your web and mobile projects?</span>  <strong>8</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(18)" class="ch6"><em>3</em><span>How do you choose a web mobile outsourcing vendor?</span>  <strong>14</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(24)" class="ch7"><em>4</em><span>How do you keep control of your outsourced software development</span>  <strong>26</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(31)" class="ch8"> <em>5</em><span>How do you measure the success of outsourcing?</span>  <strong>40</strong></a></li>
<li><a href="#"  onclick="UpdateBookPage(36)" class="ch9"> <em>6</em><span>How do you protect your intellectual property</span>  <strong>50</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(41)" class="ch10"><em>7</em><span>Which situations are best for outsourcing web and mobile projects? How do you know it will work for you? </span> <strong>60</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(50)" class="ch11"> <em>8</em><span>What is the future of outsourcing? How do you future proof your projects?</span>  <strong>78</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(54)" class="ch12"> <em>9</em><span>What are the biggest mistakes to avoid</span>  <strong>86</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(58)" class="ch13"> <em>10</em><span>Bonus Quiz: "Should I outsource my next projects?"</span>  <strong>94</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(59)" class="ch14"> <em>&nbsp;</em> <span>Encore Bonus Quiz: Are you a good fit to work with Dedicated Developers?</span>  <strong>96</strong></a></li>
<li><a href="#" onclick="UpdateBookPage(60)" class="ch15"> <em>&nbsp;</em> <span>Real Life Case Studies - What is like to work with Dedicated Developers?</span><strong>98</strong></a></li>
</ul>
</div>
<script src="https://fast.wistia.com/embed/medias/k26gw8zjlb.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
</body>
</html> 