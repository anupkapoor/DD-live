<?php require_once('../../config.php'); ?>
<?php include('../../portfolio-header.php'); ?>

    <!-- Home -->
	
    <div id="portfolio" class="portfolio-inner-img getmomentum">
        <section class="banner">
			<img class="responsive-img" src="images/getmomentum.jpg" alt="getmomentum">
		</section>
        <!-- The Story -->
		<section class="theStory">
			<div class="container-block">
				<h2>ABOUT</h2>
				<p>Get Momentum is an online coaching program that helps tomorrows leaders harness their extraordinary qualities and get successful in their professional as well as their personal life. Owner of Get Momentum - Jason Womack - wanted to allow people to engineer themselves from within, while personalizing their learning experience. Jason’s program is crafted to suit the contemporary lifestyle while encouraging leadership qualities.</p>
			</div>
		</section>
		
		<!-- The Client Info -->
		<section class="clientInfo">
			<div class="container-block">
				<div class="col-md-4">
					<img class="default" src="images/location.png" alt="location icon">
					<img class="hover" src="images/location-hover.png" alt="location icon">
					<h4>Client Location</h4>
					<p>Ojai, CA</p>
				</div>
				<div class="col-md-4 margin-left-right-30">
					<img class="default" src="images/dedicated-team.png" alt="deicated team">
					<img class="hover" src="images/dedicated-team-hover.png" alt="deicated team">
					<h4>Dedicated Team</h4>
					<div class="smallbox">
						<p>1 Graphic Designer</p>
						<p>1 PHP Developer</p>
						<p>1 Infusionsoft Expert</p>
						<p>1 Project Manager</p>
					</div>
				</div>
				<div class="col-md-4">
					<img class="default" src="images/timeline.png" alt="timeline">
					<img class="hover" src="images/timeline-hover.png" alt="timeline">
					<h4>Timeline</h4>
					<div class="smallbox1">
						<img class="default" src="images/down-arw.png" alt="down-arrow">
						<img class="hover" src="images/down-arw-hover.png" alt="down-arrow">
						<p>Dec 2014</p>
						<p>Ongoing</p>
					</div>
				</div>
			</div>
        </section>
		<!-- Client Speak -->
		<section class="clientSpeak">
			<div class="max-container">
				<div class="left">
					<img src="images/jason.png" alt="JASON WOMACK">
					<h5>JASON WOMACK<span>Get Momentum Coaching</span></h5>
				</div>
				<div class="right">
					<p><img class="quote-position" src="images/top-quote.png" alt="quote mark" />Dedicated Developers haven’t just given me peace of mind, they have also saved me time and boosted my productivity.<img src="images/btm-quote.png" alt="quote mark" /></p>
				</div>
			</div>
		</section>
		
		<!-- Involvement -->
		<section class="involvement">
			<div class="container-block">
				<h2>Involvement</h2>
				<p>Having bad experiences with 3 other Software Development Companies, Dedicated Developers helps Jason Womack get the development he desired. Using high-end technology (PHP7, CakePHP, JavaScript, MySQL, SaaS) and multiple 3rd party integration (WordPress, Infusionsoft, Mailtrap, Google Analytics, AWS) Dedicated Developers was able to deliver a high-functioning website that made the journey much easier for Jason.</p>
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
						<li><img src="images/php7-ico.png" alt="PHP7" /><p>PHP7</p></li>
						<li><img src="images/cake-ico.png" alt="CakePHP" /><p>CakePHP</p></li>
						<li><img src="images/javascript.png" alt="JavaScript" /><p>JavaScript</p></li>
						<li><img src="images/jquery.png" alt="jQuery" /><p>jQuery</p></li>
						<li><img src="images/mysql-ico.png" alt="MySQL" /><p>MySQL</p></li>
						<li><img src="images/sass.png" alt="CSS3" /><p>sass</p></li>
					</ul>
				</div>
				<div class="right">					
					<ul>
						<h3>Integrations</h3>
						<li><img src="images/wordpress-ico.png" alt="WordPress" /><p>WordPress</p></li>
						<li><img src="images/mail-chimp-ico.png" alt="Mailchimp" /><p>Mailchimp</p></li>
						<li><img src="images/infusion-ico.png" alt="Infusionsoft" /><p>Infusionsoft</p></li>
						<li><img src="images/mail-trap.png" alt="Mailtrap" /><p>Mailtrap</p></li>
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
					<a href="<?php echo PORTFOLIO_URL ?>/<?php echo $previous_portfolio; ?>"><img src="images/left-arw.png" alt="next"/><h4>Here To Gamble</h4></a>
				</div>
				<div class="threecolumn border-lr">
					<a href="<?php echo PORTFOLIO_URL ?>/"><img src="images/grid-icon.png" alt="All Works"/>
					<h4>All Works</h4></a>
				</div>
				<div class="threecolumn">
					<a href="<?php echo PORTFOLIO_URL ?>/<?php echo $next_portfolio; ?>"><img src="images/right-arw.png" alt="Paddle Partner"/><h4>His Every Action</h4></a>
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
 