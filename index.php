<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Website-teardown
 */

get_header(); ?>

		
	<div id="intro">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.2s">
					<h2>Get more conversions and customers in minutes</h2>
					<small>High converting websites and apps in minutes</small>
					<p>A library of website teardowns to help business owners make more money from their sites</p>
					<div class="dual-btns">
						<a href="#" class="btn btn-primary">Submit a website</a>
						<span>or</span>
						<a href="#" class="btn btn-text">Browse teardowns</a>
					</div>
				</div>
				<div class="col-sm-6 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.2s">
					<img src="<?php echo get_template_directory_uri(); ?>/img/mac.png" alt=""/>
				</div>
			</div>
		</div>
	</div>
	
	<div class="process">
		<div class="container">
			<h2 class="wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.2s">Boost your website traffic in 4 easy steps... <span class="highlight-green">All free!</span></h2>
			<div class="row">
				<div class="col-sm-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s">
					<div class="process-step process-step1 highlight-red">
						<span>01</span>
						<div class="process-info">Submit your website</div>
					</div>
				</div>
				<div class="col-sm-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s">
					<div class="process-step process-step2 highlight-orange">
						<span>02</span>
						<div class="process-info">Experts Critique Your Website</div>
					</div>
				</div>
				<div class="col-sm-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s">
					<div class="process-step process-step3 highlight-yellow">
						<span>03</span>
						<div class="process-info">We Post Publicly</div>
					</div>
				</div>
				<div class="col-sm-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s">
					<div class="process-step process-step4 highlight-green">
						<span>04</span>
						<div class="process-info">You Get your website teardown</div>
					</div>
				</div>
			</div>
			<div class="process-cta text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1s">
				<div class="dual-btns">
					<a href="#" class="btn btn-primary">Submit a website</a>
					<span></span>
					<a class="text">There's no obligation. No Cost. No B.S.</a>
				</div>
			</div>
		</div>
	</div>
	
	<hr>
	
	<div class="projects">
		<div class="container">
			<div class="project-head text-center">
				<h3 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".1s">Check out some website teardowns</h3>
				<p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".3s"><a href="#">Submit your website for a teardown</a></p>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".1s">
					<a href="./subpage.html">
						<div class="project-wrapper">
							<div class="project-client"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/medium/1.png" class="img-responsive" alt=""/></div>
							<div class="project-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/img/project/1.jpg" class="img-responsive" alt=""/>
							</div>
							<div class="overlay"></div>
							<p>Google.com teardown</p>
							<div class="members">
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/2.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/3.png" class="img-responsive" alt=""/></span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".3s">
					<a href="./subpage.html">
						<div class="project-wrapper">
							<div class="project-client"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/medium/2.png" class="img-responsive" alt=""/></div>
							<div class="project-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/img/project/2.jpg" class="img-responsive" alt=""/>
							</div>
							<div class="overlay"></div>
							<p>Google.com teardown</p>
							<div class="members">
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/2.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/3.png" class="img-responsive" alt=""/></span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".5s">
					<a href="./subpage.html">
						<div class="project-wrapper">
							<div class="project-client"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/medium/3.png" class="img-responsive" alt=""/></div>
							<div class="project-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/img/project/3.jpg" class="img-responsive" alt=""/>
							</div>
							<div class="overlay"></div>
							<div class="overlay overlay-video"></div>
							<p>Google.com teardown</p>
							<div class="members">
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/2.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/3.png" class="img-responsive" alt=""/></span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".7s">
					<a href="./subpage.html">
						<div class="project-wrapper">
							<div class="project-client"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/medium/4.png" class="img-responsive" alt=""/></div>
							<div class="project-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/img/project/4.jpg" class="img-responsive" alt=""/>
							</div>
							<div class="overlay"></div>
							<p>Google.com teardown</p>
							<div class="members">
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/2.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/3.png" class="img-responsive" alt=""/></span>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".1s">
					<a href="./subpage.html">
						<div class="project-wrapper">
							<div class="project-client"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/medium/5.png" class="img-responsive" alt=""/></div>
							<div class="project-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/img/project/5.jpg" class="img-responsive" alt=""/>
							</div>
							<div class="overlay"></div>
							<p>Google.com teardown</p>
							<div class="members">
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".3s">
					<a href="./subpage.html">
						<div class="project-wrapper">
							<div class="project-client"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/medium/6.png" class="img-responsive" alt=""/></div>
							<div class="project-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/img/project/6.jpg" class="img-responsive" alt=""/>
							</div>
							<div class="overlay"></div>
							<p>Google.com teardown</p>
							<div class="members">
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".5s">
					<a href="./subpage.html">
						<div class="project-wrapper">
							<div class="project-client"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/medium/7.png" class="img-responsive" alt=""/></div>
							<div class="project-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/img/project/7.jpg" class="img-responsive" alt=""/>
							</div>
							<div class="overlay"></div>
							<p>Google.com teardown</p>
							<div class="members">
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".7s">
					<a href="./subpage.html">
						<div class="project-wrapper">
							<div class="project-client"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/medium/8.png" class="img-responsive" alt=""/></div>
							<div class="project-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/img/project/8.jpg" class="img-responsive" alt=""/>
							</div>
							<div class="overlay"></div>
							<p>Google.com teardown</p>
							<div class="members">
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".1s">
					<a href="./subpage.html">
						<div class="project-wrapper">
							<div class="project-client"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/medium/1.png" class="img-responsive" alt=""/></div>
							<div class="project-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/img/project/9.jpg" class="img-responsive" alt=""/>
							</div>
							<div class="overlay"></div>
							<p>Google.com teardown</p>
							<div class="members">
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/2.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/3.png" class="img-responsive" alt=""/></span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".3s">
					<a href="./subpage.html">
						<div class="project-wrapper">
							<div class="project-client"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/medium/2.png" class="img-responsive" alt=""/></div>
							<div class="project-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/img/project/10.jpg" class="img-responsive" alt=""/>
							</div>
							<div class="overlay"></div>
							<p>Google.com teardown</p>
							<div class="members">
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/2.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/3.png" class="img-responsive" alt=""/></span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".5s">
					<a href="./subpage.html">
						<div class="project-wrapper">
							<div class="project-client"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/medium/3.png" class="img-responsive" alt=""/></div>
							<div class="project-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/img/project/11.jpg" class="img-responsive" alt=""/>
							</div>
							<div class="overlay"></div>
							<p>Google.com teardown</p>
							<div class="members">
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/2.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/3.png" class="img-responsive" alt=""/></span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".7s">
					<a href="<?php echo get_template_directory_uri(); ?>/subpage.html">
						<div class="project-wrapper">
							<div class="project-client"><img src="<?php echo get_template_directory_uri(); ?>/img/clients/medium/4.png" class="img-responsive" alt=""/></div>
							<div class="project-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/img/project/12.jpg" class="img-responsive" alt=""/>
							</div>
							<div class="overlay"></div>
							<p>Google.com teardown</p>
							<div class="members">
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/2.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/3.png" class="img-responsive" alt=""/></span>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".1s">
		<div class="text-sep">
			<p>...and here are some <b>featured</b> teardowns made by our team members</p>
		</div>
	</div>
	
	<div class="featured">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".1s">
					<a href="./subpage.html">
						<div class="featured-project">
							<div class="members">
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/2.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/3.png" class="img-responsive" alt=""/></span>
							</div>
							<div class="fp-client">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/big/1.png" class="img-responsive" alt=""/>
								Paypal.com teardown
							</div>
							<div class="fp-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/img/project/01/1.jpg" class="img-responsive" alt=""/>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".3s">
					<a href="./subpage.html">
						<div class="featured-project">
							<div class="members">
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/1.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/2.png" class="img-responsive" alt=""/></span>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/3.png" class="img-responsive" alt=""/></span>
							</div>
							<div class="fp-client">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/big/2.png" class="img-responsive" alt=""/>
								Studio.envato.com teardown
							</div>
							<div class="fp-thumb">
								<div class="overlay overlay-video"></div>
								<img src="<?php echo get_template_directory_uri(); ?>/img/project/01/2.jpg" class="img-responsive" alt=""/>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".1s">
		<div class="text-sep">
			<p>...and also teardowns made by third-party memebers</p>
		</div>
	</div>
	
	<div class="featured tp-featured">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".1s">
					<a href="./subpage.html">
						<div class="featured-project tp-project">
							<div class="members">
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/2.png" class="img-responsive" alt=""/></span>
							</div>
							<div class="fp-client">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/big/1.png" class="img-responsive" alt=""/>
								Paypal.com teardown
							</div>
							<div class="fp-thumb">
								<div class="overlay overlay-video"></div>
								<img src="<?php echo get_template_directory_uri(); ?>/img/project/02/1.jpg" class="img-responsive" alt=""/>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-4 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".3s">
					<a href="./subpage.html">
						<div class="featured-project tp-project">
							<div class="members">
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/2.png" class="img-responsive" alt=""/></span>
							</div>
							<div class="fp-client">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/big/1.png" class="img-responsive" alt=""/>
								Paypal.com teardown
							</div>
							<div class="fp-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/img/project/02/2.jpg" class="img-responsive" alt=""/>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-4 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".5s">
					<a href="./subpage.html">
						<div class="featured-project tp-project">
							<div class="members">
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/members/2.png" class="img-responsive" alt=""/></span>
							</div>
							<div class="fp-client">
								<img src="<?php echo get_template_directory_uri(); ?>/img/clients/big/1.png" class="img-responsive" alt=""/>
								Paypal.com teardown
							</div>
							<div class="fp-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/img/project/02/3.jpg" class="img-responsive" alt=""/>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<hr>
	
	<div class="our-features">
		<div class="container">
			<h2 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".1s"><b>Benefits</b> - Why Request a Website Teardown?</h2>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="row feature-info wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".1s">
						<div class="col-sm-6 col-sm-push-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/features/1.png" class="img-responsive pull-right" alt=""/>
						</div>
						<div class="col-sm-6 col-sm-pull-6">
							<p><b>Its absolutely free!</b> have experts analyze your site to identify how to increase conversions and get more customers.</p>
						</div>
					</div>
					<div class="row feature-info wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".1s">
						<div class="col-sm-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/features/2.png" class="img-responsive" alt=""/>
						</div>
						<div class="col-sm-6">
							<p><b>Learn from experts</b> By being a good sport, you are allowing us to share the knowledge with thousands of other business owners.</p>
						</div>
					</div>
					<div class="row feature-info wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".1s">
						<div class="col-sm-6 col-sm-push-6 ">
							<img src="<?php echo get_template_directory_uri(); ?>/img/features/3.png" class="img-responsive pull-right" alt=""/>
						</div>
						<div class="col-sm-6 col-sm-pull-6">
							<p><b>Focus on Your Business</b> Let you focus on running your business while digital marketing experts implement money making recommendations on your site or app.</p>
						</div>
					</div>
					<div class="row feature-info wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".1s">
						<div class="col-sm-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/features/4.png" class="img-responsive" alt=""/>
						</div>
						<div class="col-sm-6">
							<p><b>Grow your business</b> Get your website in front of a large audience that may potentially include future customers or partners.</p>
						</div>
					</div>
					<div class="process-cta text-center">
						<div class="dual-btns">
							<a href="#" class="btn btn-primary">Submit a website for a teardown</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<hr>
	
	<div class="quote">
		<div class="container">
			<h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"><b>Trusted</b> by thousands. And there is a good reason</h2>
		</div>
		<div class="quote-carousel">
			<div class="item">
				<div class="quote-info text-center wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
					<img src="<?php echo get_template_directory_uri(); ?>/img/quote/1.png" class="img-responsive center-block" alt=""/>
					<p>&ldquo; It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. &rdquo;</p>
				</div>
			</div>
			<div class="item">
				<div class="quote-info text-center wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
					<img src="<?php echo get_template_directory_uri(); ?>/img/quote/2.png" class="img-responsive center-block" alt=""/>
					<p>&ldquo; It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. &rdquo;</p>
				</div>
			</div>
			<div class="item">
				<div class="quote-info text-center wow fadeIn" data-wow-duration="1s" data-wow-delay=".7s">
					<img src="<?php echo get_template_directory_uri(); ?>/img/quote/3.png" class="img-responsive center-block" alt=""/>
					<p>&ldquo; It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. &rdquo;</p>
				</div>
			</div>
			<div class="item">
				<div class="quote-info text-center wow fadeIn" data-wow-duration="1s" data-wow-delay=".9s">
					<img src="<?php echo get_template_directory_uri(); ?>/img/quote/1.png" class="img-responsive center-block" alt=""/>
					<p>&ldquo; It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. &rdquo;</p>
				</div>
			</div>
			<div class="item">
				<div class="quote-info text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
					<img src="<?php echo get_template_directory_uri(); ?>/img/quote/2.png" class="img-responsive center-block" alt=""/>
					<p>&ldquo; It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. &rdquo;</p>
				</div>
			</div>
			<div class="item">
				<div class="quote-info text-center wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
					<img src="<?php echo get_template_directory_uri(); ?>/img/quote/3.png" class="img-responsive center-block" alt=""/>
					<p>&ldquo; It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. &rdquo;</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="partners text-center">
		<div class="container">
			<h5 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">We are also truested by some more websites</h5>
			<ul class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/partners/1.png" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/partners/2.png" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/partners/3.png" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/partners/4.png" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/partners/5.png" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/partners/6.png" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/partners/5.png" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/partners/4.png" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/partners/6.png" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/partners/2.png" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/partners/1.png" class="img-responsive" alt=""/></li>
				<li><a href="#"><span>and 737 more</span></a></li>
			</ul>
		</div>
	</div>
	
	<a href="https://www.youtube.com/watch?v=JVUtFZ7eS28" data-lity>
		<div class="cta wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 text-right">
						<p><span>Not sure how it works?</span>Check this explanation video to know more!</p>
					</div>
					<div class="col-sm-4">
						<div class="play-btn">
							<img src="<?php echo get_template_directory_uri(); ?>/img/play2.png" alt=""/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</a>
	
	<div class="share wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
		<div class="container">
			<div class="text-center">
				<h2>Are you a CRO or marketing expert who has a performed a teardown?</h2>
				<h5>Share it with us and we'll feature it on our website.</h5>
				<p>You will ask why should I'? Well, becuase</p>
			</div>
			<div class="share-wrap">
				<div class="share-info share-info1">You will get free exposure</div>
				<div class="share-info share-info2">You will be added to our directory of experts</div>
				<div class="share-info share-info3">You will promote your content to our audience</div>
				<div class="share-info share-info4">It's good karma!</div>
				<div class="share-info share-info5">You will be recognized for your skills</div>
				<div class="share-info share-info6">You will quality to collaborate on future teardowns with us</div>
			</div>
			<div class="process-cta text-center">
				<div class="dual-btns">
					<img src="<?php echo get_template_directory_uri(); ?>/img/arrow6.png" class="center-block" alt=""/>
					<br>
					<br>
					<br>
					<a href="#" class="btn btn-primary">Submit a Teardown</a>
				</div>
			</div>
		</div>
	</div>
	<hr>
	
	<div class="our-clients">
		<div class="container">
			<h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">We are featured in</h2>
			<ul class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/clients/01/1.png" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/clients/01/2.png" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/clients/01/3.png" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/clients/01/4.png" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/clients/01/5.png" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/clients/01/6.png" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/clients/01/7.png" class="img-responsive" alt=""/></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/clients/01/8.png" class="img-responsive" alt=""/></li>
			</ul>
		</div>
	</div>
	
	<div class="cta2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-5">
					<p><b>Custom</b> audit and conversion rate<br>optimization analysis for your website</p>
				</div>
				<div class="col-sm-3">
					<div class="price">only <span>$750</span></div>
				</div>
				<div class="col-md-3 col-sm-4">
					<div class="process-cta text-center">
						<div class="dual-btns">
							<a href="#" class="btn btn-primary">Get Started</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="newsletter wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
		<div class="container">
			<p>Never miss a teardown</p>
			<div class="row">
				<div class="col-md-9 col-sm-8">
					<form>
						<input type="text" placeholder="Sign up for website teardowns newsletter">
						<button type="submit">Sign Up</button>
					</form>
				</div>
				<div class="col-md-3 col-sm-4">
					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-slideshare"></i></a>
						<a href="#"><i class="fa fa-youtube-play"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
			</div>
			<hr>
		</div>
	</div>

<?php
// get_sidebar();
get_footer();
