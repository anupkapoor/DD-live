<?php require_once('../../config.php'); ?>
<?php include('../../portfolio-header.php'); ?>

    <!-- Home -->
	
    <div id="portfolio" class="portfolio-inner-img every-day-pets">
        <section class="banner">
			<img class="responsive-img" src="images/every-day-pets.jpg" alt="Every Day Pets">
		</section>
        <!-- The Story -->
		<section class="theStory">
			<div class="container-block">
				<h2>ABOUT</h2>
				<p>Every Day Pets is an amazing blog and website for pet lovers by Melissa O’Bryan. The website focuses on helping everyday people with their everyday pets. The site offers high quality pet food, pet training, pet care, and general pet related fun. Every Day Pets is your go to authority to get the most of your life with your pet.</p>
			</div>
		</section>
		
		<!-- The Client Info -->
		<section class="clientInfo">
			<div class="container-block">
				<div class="col-md-4">
					<img class="default" src="images/location.png" alt="location icon">
					<img class="hover" src="images/location-hover.png" alt="location icon">
					<h4>Client Location</h4>
					<p>Atlanta, GA</p>
				</div>
				<div class="col-md-4 margin-left-right-30">
					<img class="default" src="images/dedicated-team.png" alt="deicated team">
					<img class="hover" src="images/dedicated-team-hover.png" alt="deicated team">
					<h4>Dedicated Team</h4>
					<div class="smallbox">
						<p>1 Graphic Designer</p>
						<p>1 WordPress Developer</p>
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
						<p>May 23</p>
						<p>June 23</p>
					</div>
				</div>
			</div>
        </section>
		<!-- Client Speak -->
		<section class="clientSpeak">
			<div class="max-container">
				<div class="left">
					<img src="images/melissa.png" alt="MELISSA O'BRYAN">
					<h5>MELISSA O'BRYAN<span>Everyday-pets</span></h5>
				</div>
				<div class="right">
					<p><img class="quote-position" src="images/top-quote.png" alt="quote mark" />I haven't found anything else in the market that competes with my blog from a quality standpoint. I truly feel that each person that comes to the blog is going to feel that it is an authority. I feel confident that it's a win, and the market's going to love it ... confident that if I need you to do any more work for me, that it's going to get done, and done right.<img src="images/btm-quote.png" alt="quote mark" /></p>
				</div>
			</div>
		</section>
		
		<!-- Involvement -->
		<section class="involvement">
			<div class="container-block">
				<h2>Involvement</h2>
				<p>Dedicated Developers partnered with Melissa O’Bryan as a technology partner on building a website. She was unsatisfied with the previous generic development delivered to her by two other companies. At Dedicated Developers we built her a beautiful website that was built on breakthrough technology such as ASP.net, MySQL, Node.JS, jQuery, HTML5, CSS, Backbone.JS.  The website is skillfully integrated with WordPress, PayPal, Google Analytics, Microsoft Azure to meet her online business requirements.</p>
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
						<li><img src="images/dot-net-ico.png" alt="PHP7" /><p>ASP.net</p></li>
						<li><img src="images/mysql-ico.png" alt="MySQL" /><p>MySQL</p></li>
						<li><img src="images/nodejs-ico.png" alt="Node.JS" /><p>Node.JS</p></li>
						<li><img src="images/jquery.png" alt="jQuery" /><p>jQuery</p></li>
						<li><img src="images/html5.png" alt="HTML5" /><p>HTML5</p></li>
						<li><img src="images/css3.png" alt="CSS3" /><p>CSS3</p></li>
						<li><img src="images/backbone.png" alt="Backbone.JS" /><p>Backbone.JS</p></li>

					</ul>
				</div>
				<div class="right">					
					<ul>
						<h3>Integrations</h3>
						<li><img src="images/wordpress-ico.png" alt="WordPress" /><p>WordPress</p></li>
						<li><img src="images/paypal-ico.png" alt="PayPal" /><p>PayPal</p></li>
						<li><img src="images/google-analytics-ico.png" alt="Google Analytics" /><p>Google Analytics</p></li>
						<li><img src="images/microsoft-azure-ico.png" alt="Microsoft Azure" /><p>Microsoft Azure</p></li>
 					</ul>
				</div>
			<div>
		</section>
<?php include(BASE_URL . '/testimonials.php'); ?>
<?php //include(BASE_URL . '/blog-section.php'); ?>
		<section class="pagination">
			<div class="container-block">
				<div class="threecolumn">
					<a href="<?php echo PORTFOLIO_URL ?>/<?php echo $previous_portfolio; ?>"><img src="images/left-arw.png" alt="next"/><h4>Get Momentum</h4></a>
				</div>
				<div class="threecolumn border-lr">
					<a href="<?php echo PORTFOLIO_URL ?>/"><img src="images/grid-icon.png" alt="All Works"/>
					<h4>All Works</h4></a>
				</div>
				<div class="threecolumn">
					<a href="<?php echo PORTFOLIO_URL ?>/<?php echo $next_portfolio; ?>"><img src="images/right-arw.png" alt="Paddle Partner"/><h4>Montessori Scholars</h4></a></div>
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
 