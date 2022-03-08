<?php require_once('../../config.php'); ?>
<?php include('../../portfolio-header.php'); ?>

    <!-- Home -->
	    <div id="portfolio" class="portfolio-inner-img gorilla-glass">
        <section class="banner">
			<img class="responsive-img" src="images/gorilla-glass.jpg" alt="gorilla-glass">
		</section>
        <!-- The Story -->
		<section class="theStory">
			<div class="container-block">
				<h2>About</h2>
				<p>Corning® Gorilla® Glass was holding a big company event for guests from all over the world, and needed an Android and iOS app for all the attendees. They wanted the apps to be able to provide up to the minute articles, videos, surveys, real time event location notices, real time event updates, and to help with reservations and check ins.</p>
				<p>They had a very tight timeline and had approached a number of other companies, who couldn't meet the tight timeline. Dedicated Developers committed to the shorter timeline and delivered it on time with all the features they wanted.</p>
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
					<div class="smallbox">
						<p>iOS Developer</p>
						<p>PHP Developer</p>
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
						<p>May 2018</p>
						<p>August 2018</p>
					</div>
				</div>
			</div>
        </section>
		<!-- Client Speak -->
		<section class="clientSpeak">
			<div class="max-container">
				<div class="left">
					<img src="images/tres.png" alt="Tres McCullough">
					<h5>Tres McCullough<span></span></h5>
				</div>
				<div class="right">
					<p><img class="quote-position" src="images/top-quote.png" alt="quote mark" />This was a very important project for us, and we had a very tight deadline. A number of other companies we approached simply couldn't commit to delivering it on time. Dedicated Developers was able to commit to it, and delivered it on time. It was easy to schedule calls and talk to them, and they had a great development process. They provided excellent support throughout the whole project and throughout our event.<img src="images/btm-quote.png" alt="quote mark" /></p>
				</div>
			</div>
		</section>
		
		<!-- Involvement -->
		<section class="involvement">
			<div class="container-block">
				<h2>Involvement</h2>
				<p>Gorilla ® Glass was looking to create a customized Android and iOS mobile app for a very important large event. The apps needed to be able to provide their guests with real time updates on event happenings and included a robust admin panel to be able to easily manage all the notifications. The app was multi language in both English and Mandarin. They also needed a sleek design to match their branding that Dedicated Developers designed.</p>
				

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
						<li><img src="images/lamp.png" alt="LAMP" /><p>Lamp</p></li>
						<li><img src="images/php7-ico.png" width="85" alt="PHP7" /><p>PHP7</p></li>
						<li><img src="images/mysql-ico.png" alt="MySQL" /><p>MySQL</p></li>
						<li><img src="images/codeigniter-ico.png" alt="CodeIgniter" /><p>CodeIgniter</p></li>
						<li><img src="images/jquery.png" alt="jQuery" /><p>jQuery</p></li>
						<li><img src="images/html5.png" alt="HTML5" /><p>HTML5</p></li>
						<li><img src="images/css3.png" alt="CSS3" /><p>CSS3</p></li>
					</ul>
				</div>
				<div class="right">					
					<ul>
						<h3>Integrations</h3>
						<li><img src="images/google-analytics-ico.png" alt="Google Analytics" /><p>Google Analytics</p></li>
						<li><img src="images/amazon-aws-ico.png" alt="Amazon AWS" /><p>Amazon AWS</p></li>
 					</ul>
				</div>
			<div>
		</section>
<?php include(BASE_URL . '/testimonials.php'); ?>
<?php //include(BASE_URL . '/blog-section.php'); ?>
		<section class="pagination">
			<div class="container-block">
				<div class="threecolumn">
					<a href="<?php echo PORTFOLIO_URL ?>/<?php echo $previous_portfolio; ?>"><img src="images/left-arw.png" alt="next"/><h4>MayDay Alarm</h4></a>
				</div>
				<div class="threecolumn border-lr">
					<a href="<?php echo PORTFOLIO_URL ?>/"><img src="images/grid-icon.png" alt="All Works"/>
					<h4>All Works</h4></a>
				</div>
				<div class="threecolumn">
					<a href="<?php echo PORTFOLIO_URL ?>/<?php echo $next_portfolio; ?>"><img src="images/right-arw.png" alt="Previous"/><h4>Numinav</h4></a></div>
				</div>
			</div>
		</section>
	</div>
	<script>
		$(window).load(function() {
			$('.top-bar-wrap .top-bar').addClass('expand');
		});
	</script>
<?php include(BASE_URLS . '/footer.php');?>
 