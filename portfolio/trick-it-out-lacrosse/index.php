<?php require_once('../../config.php'); ?>
<?php include('../../portfolio-header.php'); ?>

    <!-- Home -->
	
    <div id="portfolio" class="portfolio-inner-img gymsource">
        <section class="banner">
			<img class="responsive-img" src="images/tios-banner.jpg" alt="Trick It Out Lacrosse">
		</section>
        <!-- The Story -->
		<section class="theStory">
			<div class="container-block">
				<h2>ABOUT</h2>
				<p>Trick It Out Lacrosse ™ is the fastest way to learn how the best LAX players perform. Trick It Out Lacrosse ™ is the proven new interactive instructional and innovative competition app that provides the opportunity to progress at learning pace and play, without premature judgments of potential skills and talent.</p>
			</div>
		</section>
		
		<!-- The Client Info -->
		<section class="clientInfo">
			<div class="container-block">
				<div class="col-md-4">
					<img class="default" src="images/location.png" alt="location icon">
					<img class="hover" src="images/location-hover.png" alt="location icon">
					<h4>Client Location</h4>
					<p>New York, NY</p>
				</div>
				<div class="col-md-4 margin-left-right-30">
					<img class="default" src="images/dedicated-team.png" alt="deicated team">
					<img class="hover" src="images/dedicated-team-hover.png" alt="deicated team">
					<h4>Dedicated Team</h4>
					<div class="smallbox" style="max-width:180px;">
						<p>iOS Developer</p>
						<p>Project Manager</p>
						<p>UI Designer</p> 
					</div>
				</div>
				<div class="col-md-4">
					<img class="default" src="images/timeline.png" alt="timeline">
					<img class="hover" src="images/timeline-hover.png" alt="timeline">
					<h4>Timeline</h4>
					<div class="smallbox1">
						<img class="default" src="images/down-arw.png" alt="down-arrow">
						<img class="hover" src="images/down-arw-hover.png" alt="down-arrow">
						<p>July 2019</p>
						<p>Ongoing</p>
					</div>
				</div>
			</div>
        </section>
		<!-- Client Speak -->
		<section class="clientSpeak">
			<div class="max-container">
				<div class="left">
					<img src="images/eva-lancaster.png" alt="Eva">
					<h5>Eva Lancaster<span>Co-Founder</span></h5>
				</div>
				<div class="right">
					<p><img class="quote-position" src="images/top-quote.png" alt="quote mark" />Working with the developers to create our mobile app has been a pleasure. They are great at answering all of our questions and have worked expertly through a complex project while helping us develop the most relevant features. We are very impressed by the designs they made for our app. Our app is more than we expected on multiple fronts and we are very happy.<img src="images/btm-quote.png" alt="quote mark" /></p>
				 
				</div>
			</div>
				

		
		</section>
		
		<!-- Involvement -->
		<section class="involvement">
			<div class="container-block">
				<h2>Involvement</h2>
				 <p>Trick It Out Lacrosse needed to create a sports app to help players improve their skills, compete with others, and compare where their skills rank. The app includes "how to tips" from the Pros, customized training, individual and small-group training and competitions, a proprietary interactive scoring system that records the results and ranks performance with other players, and enables users to learn Lacrosse specific skills in game like situations.</p> 

			</div>
			<div class="max-container">
				<div class="row">
					<div class="threecolumn">
						<img src="images/front-end.png" alt="Front End" />
						<h4>Front End</h4>
					</div>
					<div class="threecolumn">
						<img src="images/back-end.png" alt="Back End" />
						<h4>Back End</h4>
					</div>
					<div class="threecolumn">
						<img src="images/graphic-design.png" alt="Graphic Design" />
						<h4>Graphic Design</h4>
					</div>
				</div>
				<div class="row">
					<div class="threecolumn1">
						<img src="images/support.png" alt="Support" />
						<h4>Support</h4>
					</div>
					<div class="threecolumn1">
						<img src="images/interaction-design.png" alt="Interaction Design" />
						<h4>Interaction Design</h4>
					</div>
					<div class="threecolumn1">
						<img src="images/system-integration.png" alt="System Integration" />
						<h4>System Integration</h4>
					</div>
				</div>
				<div class="align-center">
					<h3>Ready To Make Your Vision A Reality?</h3>
					<a href="https://dedicateddevelopers.com/request-a-quote-form.php" class="btn-orange request-quote">Lets' Talk About Your Project</a>
				</div>
			</div>			
		</section>
		
		<section class="technology">
			<div class="container-block">
				<div class="left">					
					<ul>
						<h3>Technologies</h3>
						
					 
						<li><img src="images/ios-sdk-ico.png" alt="iOS SDK"><p>iOS SDK</p></li>
						<li><img src="images/swift2-ico.png" alt="Swift"><p>Swift</p></li>
						<li><img src="images/mongo-ico.png" alt="MongoDB"><p>MongoDB</p></li>
                        <li><img src="images/mysql-ico.png" alt="Mysql" /><p>Mysql</p></li>
                        <li><img src="images/html5.png" alt="HTML5" /><p>HTML5</p></li>
						<li><img src="images/css3.png" alt="CSS3"><p>CSS3</p></li>
						<li><img src="images/embeded-video.png" width="80" alt="CSS3"><p>Embedded video</p></li>
        
						
					</ul>
				</div>
				<div class="right">					
					<ul>
						<h3>Integrations</h3>
						<li><img src="images/paypal-ico.png" alt="Paypal" /><p>Paypal</p></li>
						<li><img src="images/stripe.png" alt="Stripe" /><p>Stripe</p></li>
     					<li><img src="images/google-analytics-ico.png" alt="Google Analytics" /><p>Google Analytics</p></li>
 					</ul>
				</div>
			<div>
		</section>
<?php include(BASE_URL . '/testimonials.php'); ?>
<?php //include(BASE_URL . '/blog-section.php'); ?>
		<section class="pagination">
			<div class="container-block">
				<div class="threecolumn">
					<a href="<?php echo PORTFOLIO_URL ?>/<?php echo $previous_portfolio; ?>"><img src="images/left-arw.png" alt="Next"/><h4>Doctors Beyond</h4></a>
				</div>
				<div class="threecolumn border-lr">
					<a href="<?php echo PORTFOLIO_URL ?>/"><img src="images/grid-icon.png" alt="All Works"/>
					<h4>All Works</h4></a>
				</div>
				<div class="threecolumn">
					<a href="<?php echo PORTFOLIO_URL ?>/<?php echo $next_portfolio; ?>"><img src="images/right-arw.png" alt="Previous"/><h4>Shuttle Rydez</h4></a></div>
				</div>
			</div>
		</section>
	</div>
	<script>
		$(window).load(function() {
			$('.top-bar-wrap .top-bar').addClass('expand');
		});
	</script>
<?php include(BASE_URLS . '/footer.php'); ?>
 