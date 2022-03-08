<?php require_once('../../config.php'); ?>
<?php include('../../portfolio-header.php'); ?>

    <!-- Home -->
	
    <div id="portfolio" class="portfolio-inner-img gymsource">
        <section class="banner">
			<img class="responsive-img" src="images/shuttle rydez_banner.jpg" alt="Shuttle Rydez">
		</section>
        <!-- The Story -->
		<section class="theStory">
			<div class="container-block">
				<h2>ABOUT</h2>
				<p>When customers drop off their cars for service they will likely need a ride somewhere, and the service department staff typically can only provide a “guesstimate” as to when one will be available. This is because many dealerships still use a manual, ‘sticky-note’ or phone call based process, instead of an automated one to schedule these rides. Shuttle Rydez will provide a productized solution to any dealership which will allow them to dramatically improve this situation through a combination of customer / driver facing mobile apps and workflows for the service writers and backend admin staff via a custom web-based solution.</p>
			</div>
		</section>
		
		<!-- The Client Info -->
		<section class="clientInfo">
			<div class="container-block">
				<div class="col-md-4">
					<img class="default" src="images/location.png" alt="location icon">
					<img class="hover" src="images/location-hover.png" alt="location icon">
					<h4>Client Location</h4>
					<p>Vancouver, Canada</p>
				</div>
				<div class="col-md-4 margin-left-right-30">
					<img class="default" src="images/dedicated-team.png" alt="deicated team">
					<img class="hover" src="images/dedicated-team-hover.png" alt="deicated team">
					<h4>Dedicated Team</h4>
					<div class="smallbox" style="max-width:180px;">
						<p>UX Designer</p>
						<p>UI Designer</p>
						<p>Project Manager</p>
						<p>iOS Developer</p>
						<p>Android Developer</p>
					</div>
				</div>
				<div class="col-md-4">
					<img class="default" src="images/timeline.png" alt="timeline">
					<img class="hover" src="images/timeline-hover.png" alt="timeline">
					<h4>Timeline</h4>
					<div class="smallbox1">
						<img class="default" src="images/down-arw.png" alt="down-arrow">
						<img class="hover" src="images/down-arw-hover.png" alt="down-arrow">
						<p>June 2019</p>
						<p>Ongoing</p>
					</div>
				</div>
			</div>
        </section>
		<!-- Client Speak -->
		<section class="clientSpeak">
			<div class="max-container">
				<div class="left">
					<img src="images/kate.png" alt="Kate">
					<h5>Kate Mitchell<span>Founder of Shuttle Rydez</span></h5>
				</div>
				<div class="right">
					<p><img class="quote-position" src="images/top-quote.png" alt="quote mark" />They not only improved on our original app concept, they clearly laid out exactly how the app would work, how it would look and gave us an MVP that we are taking to development quicker than we thought. Great Company, Great Team, Great Results.<img src="images/btm-quote.png" alt="quote mark" /></p>
				 
				</div>
			</div>
				

		
		</section>
		
		<!-- Involvement -->
		<section class="involvement">
			<div class="container-block">
				<h2>Involvement</h2>
				 <p>We analyzed, refined, and executed on the client’s vision for two mobile apps and a desktop administration console. A thorough analysis of the competitive landscape revealed key improvement areas. We developed wireframes that enhanced the app functionality and clarified the ideal user flow. We developed a clickable MVP that allowed the client to complete the product development quickly and with confidence.</p> 

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
						
						<li><img src="images/photoshop.png " alt="Photoshop" width="85"><p>Photoshop</p></li>
						<li><img src="images/ai.png" alt="Adobe Illustrator"><p>Adobe Illustrator</p></li>
                        <li><img src="images/Invisionapp.png" alt="InVision" /><p>InVision</p></li>
						<li><img src="images/keynote.png" alt=">Apple Keynote"><p>Apple Keynote</p></li>
        
						
					</ul>
				</div>
				<div class="right">					
					<ul>
						<h3>Integrations</h3>
						<li><img src="images/mandrill-ico.png" alt="Mandrill" /><p>Mandrill</p></li>
						<li><img src="images/amazon-aws-ico.png" alt="Amazon AWS" /><p>Amazon AWS</p></li>
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
					<a href="<?php echo PORTFOLIO_URL ?>/<?php echo $previous_portfolio; ?>"><img src="images/left-arw.png" alt="Next"/><h4>Trick It Out Lacrosse</h4></a>
				</div>
				<div class="threecolumn border-lr">
					<a href="<?php echo PORTFOLIO_URL ?>/"><img src="images/grid-icon.png" alt="All Works"/>
					<h4>All Works</h4></a>
				</div>
				<div class="threecolumn">
					<a href="<?php echo PORTFOLIO_URL ?>/<?php echo $next_portfolio; ?>"><img src="images/right-arw.png" alt="Previous"/><h4>Gorilla ® Glass</h4></a></div>
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
 