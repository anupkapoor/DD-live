<?php require_once('../../config.php'); ?>
<?php include('../../portfolio-header.php'); ?>

    <!-- Home -->
	
    <div id="portfolio" class="portfolio-inner-img his-every-action">
        <section class="banner">
			<img class="responsive-img" src="images/his-every-action.jpg" alt="wild kitchen">
		</section>
        <!-- The Story -->
		<section class="theStory">
			<div class="container-block">
				<h2>ABOUT</h2>
				<p>His Every Action is an online web portal that is re-establishing the spiritual connection with nature and the divine – focused on men. It helps men realize their true potential and from within, that helps them enhance their positive characteristics such a care, protection, love, capability.</p>
			</div>
		</section>
		
		<!-- The Client Info -->
		<section class="clientInfo">
			<div class="container-block">
				<div class="col-md-4">
					<img class="default" src="images/location.png" alt="location icon">
					<img class="hover" src="images/location-hover.png" alt="location icon">
					<h4>Client Location</h4>
					<p>Seattle, WA</p>
				</div>
				<div class="col-md-4 margin-left-right-30">
					<img class="default" src="images/dedicated-team.png" alt="deicated team">
					<img class="hover" src="images/dedicated-team-hover.png" alt="deicated team">
					<h4>Dedicated Team</h4>
					<div class="smallbox">
						<p>1 Graphic Designer</p>
						<p>1 WordPress Developer</p>
						<p>1 Project Manager</p>
						<p>1 Infusionsoft Expert</p>
					</div>
				</div>
				<div class="col-md-4">
					<img class="default" src="images/timeline.png" alt="timeline">
					<img class="hover" src="images/timeline-hover.png" alt="timeline">
					<h4>Timeline</h4>
					<div class="smallbox1">
						<img class="default" src="images/down-arw.png" alt="down-arrow">
						<img class="hover" src="images/down-arw-hover.png" alt="down-arrow">
						<p>Oct 2014</p>
						<p>Ongoing</p>
					</div>
				</div>
			</div>
        </section>
		<!-- Client Speak -->
		<section class="clientSpeak">
			<div class="max-container">
				<div class="left">
					<img src="images/christel-hughes.png" alt="Christel Hughes">
					<h5>Christel Hughes<span>Spiritual Trainer to the Stars,Inspiration coach</span></h5>
				</div>
				<div class="right">
					<p><img class="quote-position" src="images/top-quote.png" alt="quote mark" />Our requirements were to reflect our idea onto our web portal and that’s what Dedicated Developers created for us, in their expert development and creative designing.<img src="images/btm-quote.png" alt="quote mark" /></p>
				</div>
			</div>
		</section>
		
		<!-- Involvement -->
		<section class="involvement">
			<div class="container-block">
				<h2>Involvement</h2>
				<p>Dedicated Developers became a part of this spiritual journey by building a visually stunning web portal with high-functionality, well aligned features and awe-inspiring graphics. With the help of expert developers and creative designers Dedicated Developers was able to deliver His Every Action a Web portal that reflects their core beliefs, built on technology such as CodeIgniter, jQuery, CSS, Firebase.</p>
				

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
						<li><img src="images/codeigniter-ico.png" alt="CodeIgniter" /><p>CodeIgniter</p></li>
						<li><img src="images/firebase-ico.png" alt="Firebase" /><p>Firebase</p></li>
						<li><img src="images/jquery.png" alt="jQuery" /><p>jQuery</p></li>
						<li><img src="images/html5.png" alt="HTML5" /><p>HTML5</p></li>
						<li><img src="images/css3.png" alt="CSS3" /><p>CSS3</p></li>
					</ul>
				</div>
				<div class="right">					
					<ul>
						<h3>Integrations</h3>
						<li><img src="images/google-analytics-ico.png" alt="Google Analytics" /><p>Google Analytics</p></li>
						<li><img src="images/hotjar-ico.png" alt="Hotjar" /><p>Hotjar</p></li>
						<li><img src="images/trustpilot-ico.png" alt="Trustpilot" /><p>Trustpilot</p></li>
						<li><img src="images/stripe.png" alt="Stripe" /><p>Stripe</p></li>
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
					<a href="<?php echo PORTFOLIO_URL ?>/<?php echo $previous_portfolio; ?>"><img src="images/left-arw.png" alt="next"/><h4>Get Momentum</h4></a>
				</div>
				<div class="threecolumn border-lr">
					<a href="<?php echo PORTFOLIO_URL ?>/"><img src="images/grid-icon.png" alt="All Works"/>
					<h4>All Works</h4></a>
				</div>
				<div class="threecolumn">
					<a href="<?php echo PORTFOLIO_URL ?>/<?php echo $next_portfolio; ?>"><img src="images/right-arw.png" alt="Previous"/><h4>Gym Source</h4></a></div>
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
 