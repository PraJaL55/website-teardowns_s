<!-- The single teadowns page -->
<?php get_header('2'); ?>

	<div class="project-single" id="1">
		<div class="container">
			<div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
				<div class="col-sm-8">
					<h2>Teradown of <?php the_title();?></h2>
					<span class="meta">on <?php echo get_the_date(); ?></span>
				</div>
				<div class="col-sm-4">
					<div class="comment-meta">
						  <?php comments_number( '0 comment', '1 comment', '% comments' ); ?>
					</div>
				</div>
			</div>
			<?php	//Form the post-author name and post-content
					global $post;
					$author_id=$post->post_author;
					$content = $post->post_content;
					$formattedContent = apply_filters('the_content', $content);
					
					$website_url = get_field( 'wt-website-url' );
					$source_url = parse_url($website_url);
					$source_url_host = $source_url['host'];
					
					$fname = get_the_author_meta('first_name', $author_id);
					$lname = get_the_author_meta('last_name', $author_id);
					$dname = get_the_author_meta('display_name', $author_id);
					$full_name = '';

					if(empty($fname) && empty($lname)){
						$full_name = $dname;
					} elseif( empty($fname)){
						$full_name = $lname;
					} elseif( empty( $lname )){
						$full_name = $fname;
					} else {
						//both first name and last name are present
						$full_name = "{$fname} {$lname}";
					}
			?>
			<div class="project-single-frame wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".3s">
				<div class="meta-author">
					<?php echo get_avatar( $author_id, 64);  ?> Post written by <a href="#"><?php echo $full_name; ?></a>
				</div>
				<div class="frame-image active">
					<?php  $post_thumbnail_id = get_post_thumbnail_id();
						$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
					<img src="<?php echo $post_thumbnail_url; ?>" class="img-responsive featured-img" alt=""/>  <!--Get featured image-->
				<!--<img src="<?php echo get_template_directory_uri(); ?>/img/single/1.jpg" class="img-responsive" alt=""/>-->
				</div>
				<div class="frame-video">
					<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="<?php the_field( 'wt-website-video' ); ?>"></iframe>
					</div>
				</div>
				<div class="frame-slideshare">
					<div class="embed-responsive embed-responsive-16by9">
					<!--<iframe src="https://www.slidesharessss.net/slideshow/embed_code/key/ayHnvYxBx0L9FY" width="597" height="486" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" allowfullscreen> </iframe> -->
					</div>
				</div>
				<ul class="psf-nav">
					<li><a class="image-nav"><img src="<?php echo get_template_directory_uri(); ?>/img/single/ico1.png" class="img-responsive" alt=""/></a></li>
					<li><a class="video-nav"><img src="<?php echo get_template_directory_uri(); ?>/img/single/ico2.png" class="img-responsive" alt=""/></a></li>
					<li><a class="ss-nav"><img src="<?php echo get_template_directory_uri(); ?>/img/single/ico3.png" class="img-responsive" alt=""/></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<hr>
	
	<div class="shots" id="2">
		<div class="container">
			<div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
				<div class="col-sm-6">
					<h3>Teardown screenshots</h3>
				</div>
			</div>
			<div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
				
				<?php if ( have_rows( 'wt-website-screenshots' ) ) : ?>
					<?php while ( have_rows( 'wt-website-screenshots' ) ) : the_row(); ?>
						<?php if ( get_sub_field( 'wt-website-screenshot-url') ) { ?>
							<div class="col-md-2 screenshots">
								<a href="<?php the_sub_field( 'wt-website-screenshot-url' ); ?>" data-lity>
									<div class="shot-thumb">
										<img src="<?php the_sub_field( 'wt-website-screenshot-url' ); ?>" class="img-responsive" alt=""/>
										<div class="zoom"></div>
									</div>
									<h4><?php the_sub_field( 'wt-website-screenshot-caption' ); ?></h4>
								</a>
							</div>
						<?php } else { ?>
									<p style="padding-left:17px">No screenshots found</p>
						<? } ?>
					<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	
	<hr>
	
	<div class="data" id="3">
		<div class="container">
			<div class="row">
				<div class="col-md-7 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
					<h3>Teardown <b>Data</b></h3>
					<em><?php the_title();?><br>Teradown is prepeared by <b><?php echo $full_name; ?></b></em>
					<p><b><?php echo $formattedContent; ?></b></p> <!--Post content -->
				</div>
				<div class="col-md-5 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">
					<div class="site-info">
						<ul>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/img/single/1.png" alt=""/><!--Add client image here! -->
							</li>
							<li>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/single/ico4.png" alt=""/><a href="<?php echo $website_url; ?>"target="_blank"> <?php echo $source_url_host; ?></a></span>
							</li>
							<li>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/single/ico5.png" alt=""/> Video</span>
								<a href="<?php 
											if(!empty(get_field('wt-website-video'))){
												the_field( 'wt-website-video' );
												$flag=1;
											} else {
												echo '#';
												$flag=0;
											}
											 ?>" data-lity>
									<?php if($flag==1) {?>
										<div class="si-video">
											<img src="<?php echo get_template_directory_uri(); ?>/img/single/2.jpg" class="img-responsive" alt=""/>
										</div>
									<?php } else { ?>
										<p>No video provided.</p>
								<?php	} ?>
								</a>
							</li>
							<li>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/single/ico6.png" alt=""/> Target Audience</span>
								<?php if(!empty(get_field('wt-website-target-market'))){ ?>
										<p><?php the_field( 'wt-website-target-market' ); ?></p>
								<?php 	} else { ?>
											<p>No target audience provided.</p>
								<?php	} ?>
							</li>
							<li>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/single/ico7.png" alt=""/> Goals</span>
								<div class="list">
								<?php if ( have_rows( 'wt-website-goals' ) ) : ?>
									<?php while ( have_rows( 'wt-website-goals' ) ) : the_row(); ?>
										<?php if(get_sub_field('wt-website-goal')){ ?>
											<p><?php the_sub_field( 'wt-website-goal' ); ?></p>
										<?php } else { ?>
											<p>No goals provided.</p>
										<?php	} ?>
									<?php endwhile; ?>
								<?php else : ?>
									<?php // no rows found ?>
								<?php endif; ?>
								</div>
							</li>
							<li>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/single/ico8.png" alt=""/> Industry Classification</span>
								<p>Saas (b2b)</p>
							</li>
							<li>
								<span><img src="<?php echo get_template_directory_uri(); ?>/img/single/ico9.png" alt=""/> Employees</span>
								<?php if(!empty(get_field('wt-siteowner-numofemployees'))){ ?>
										<p><?php the_field( 'wt-siteowner-numofemployees' ); ?></p>
								<?php 	} else { ?>
											<p>No number provided.</p>
								<?php	} ?>
								</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php // Website Scores 
		
		$scoreFirstImpression =  get_field( 'wt-score-first-impression' );
		$scoreContent =  get_field( 'wt-score-content' );
		$scoreConversion =  get_field( 'wt-score-conversion' );
		$scoreDesign =  get_field( 'wt-score-design-ux' );
		$scoreSeo =  get_field( 'wt-score-seo' );
		$scoreIndustryInsights =  get_field( 'wt-score-industry' );
		
		$totalScore = $scoreFirstImpression + $scoreContent + $scoreConversion + $scoreDesign + $scoreSeo + $scoreIndustryInsights;
		$percentScore = round($totalScore*5/3,0);
		
		// Score Ratings
		$scoreRating = array(
			
			 1	=>	"ULTRA BAD",
			 2	=>	"ULTRA BAD",
			 3	=>	"BAD",
			 4	=>	"BAD",
			 5	=>	"AVERAGE",
			 6	=>	"AVERAGE",
			 7	=>	"GOOD",
			 8	=>	"GOOD",
			 9	=>	"SUPER",
			 10	=>	"SUPER"
			 
		);
		
		//Score Colors
		$scoreColor = array(
			
			 1	=>	"highlight-red",
			 2	=>	"highlight-red",
			 3	=>	"highlight-orange",
			 4	=>	"highlight-orange",
			 5	=>	"highlight-yellow",
			 6	=>	"highlight-yellow",
			 7	=>	"highlight-green",
			 8	=>	"highlight-green",
			 9	=>	"highlight-green2",
			 10	=>	"highlight-green2"
			 
		);
	?>
	
	<div class="score" id="4">
		<div class="container">
			<div class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
				<h3>Website <b>score</b> areas</h3>
				<h5>Your site scored <b><?php echo $percentScore; ?>%</b> on our review</h5>
				<div class="progress">
					<span class="progress-percentage load" style="left: <?php echo $percentScore; ?>%;"></span>
					<div class="progress-bar bg-color1" role="progressbar" style="width:20%"></div>
					<div class="progress-bar bg-color2" role="progressbar" style="width:20%"></div>
					<div class="progress-bar bg-color3" role="progressbar" style="width:20%"></div>
					<div class="progress-bar bg-color4" role="progressbar" style="width:20%"></div>
					<div class="progress-bar bg-color5" role="progressbar" style="width:20%"></div>
				</div>
				<p>We analyzed your site across these 6 criterias:</p>
			</div>
			<ul>
				<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
					<div class="score-info score-good score-item1">
						<h4>First Impressions - <span class="<?php echo $scoreColor[$scoreFirstImpression]; ?>"> <?php echo $scoreRating[$scoreFirstImpression]; ?></span></h4>
						<p>The immediate first reaction from a user</p>
					</div>
					<div class="score-body score-item1-info hide-desktop">
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
						<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
					</div>
				</li>
				<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
					<div class="score-info score-average score-item2">
						<h4>Website content - <span class="<?php echo $scoreColor[$scoreContent]; ?>"> <?php echo $scoreRating[$scoreContent]; ?></span></h4>
						<p>The immediate first reaction from a user</p>
					</div>
				</li>
			</ul>
			<div class="score-body score-item1-info hide-mobile">
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
				<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
			</div>
			<div class="score-body score-item2-info">
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
				<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
			</div>
			<ul>
				<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
					<div class="score-info score-super score-item3">
						<h4>Website conversion - <span class="<?php echo $scoreColor[$scoreConversion]; ?>"><?php echo $scoreRating[$scoreConversion]; ?></span></h4>
						<p>The immediate first reaction from a user</p>
					</div>
					<div class="score-body score-item3-info hide-desktop">
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
						<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
					</div>
				</li>
				<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
					<div class="score-info score-bad score-item4">
						<h4>Website design - <span class="<?php echo $scoreColor[$scoreDesign]; ?>"><?php echo $scoreRating[$scoreDesign]; ?></</span></h4>
						<p>The immediate first reaction from a user</p>
					</div>
				</li>
			</ul>
			<div class="score-body score-item3-info hide-mobile">
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
				<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
			</div>
			<div class="score-body score-item4-info">
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
				<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
			</div>
			<ul>
			<!--	<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
					<div class="score-info score-ultrabad score-item5">
						<h4>Website UX - <span class="highlight-red">ULTRA BAD</span></h4>
						<p>The immediate first reaction from a user</p>
					</div>
					<div class="score-body score-item5-info hide-desktop">
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
						<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
					</div>
				</li> -->
				<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
					<div class="score-info score-bad score-item6">
						<h4>Website SEO - <span class="<?php echo $scoreColor[$scoreSeo]; ?>"><?php echo $scoreRating[$scoreSeo]; ?></span></h4>
						<p>The immediate first reaction from a user</p>
					</div>
				</li>
			</ul>
			<div class="score-body score-item5-info hide-mobile">
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
				<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
			</div>
			<div class="score-body score-item6-info">
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
				<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
			</div>
			<ul>
				<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
					<div class="score-info score-good score-item7">
						<h4>Industry insights - <span class="<?php echo $scoreColor[$scoreIndustryInsights]; ?>"><?php echo $scoreRating[$scoreIndustryInsights]; ?></span></h4>
						<p>The immediate first reaction from a user</p>
					</div>
					<div class="score-body score-item7-info hide-desktop">
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
						<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
					</div>
				</li>
		<!--	<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
					<div class="score-info score-average score-item8">
						<h4>Cooywriting - <span class="highlight-yellow">AVERAGE</span></h4>
						<p>The immediate first reaction from a user</p>
					</div>
				</li> -->
			</ul>
	<!--	<div class="score-body score-item7-info hide-mobile">
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
				<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
			</div>
			<div class="score-body score-item8-info">
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
				<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
			</div>
			<ul>
				<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
					<div class="score-info score-good score-item9">
						<h4>Load Speed - <span class="highlight-red">GOOD</span></h4>
						<p>The immediate first reaction from a user</p>
					</div>
					<div class="score-body score-item9-info hide-desktop">
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
						<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
					</div>
				</li>
				<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
					<div class="score-info score-average score-item10">
						<h4>Website SEO - <span class="highlight-orange">BAD</span></h4>
						<p>The immediate first reaction from a user</p>
					</div>
				</li>
			</ul>
			<div class="score-body score-item9-info hide-mobile">
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
				<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
			</div>
			<div class="score-body score-item10-info">
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
				<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
			</div>
			</ul> -->
		</div>
	</div>
	
	<div class="participants" id="5">
		<div class="container">
			<h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">Teardown <b>participants</b></h3>
			<div class="row">
				<div class="col-sm-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
					<div class="participant">
						<img src="<?php echo get_template_directory_uri(); ?>/img/other/1.png" class="img-responsive" alt=""/>
						<h5>Paresh Katry</h5>
						<p><a href="mailto:paresh.khatri@webteardowns.com">paresh.khatri@webteardowns.com</a><br>+370615577544<br>Google Corp Ceo<br><a href="#">pareshkhatri.com</a></p>
						<div class="clearfix"></div>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is</p>
						<div class="social2">
							<a href="#"><i class="fa fa-facebook-square"></i></a>
							<a href="#"><i class="fa fa-twitter-square"></i></a>
							<a href="#"><i class="fa fa-linkedin-square"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">
					<div class="participant">
						<img src="<?php echo get_template_directory_uri(); ?>/img/other/1.png" class="img-responsive" alt=""/>
						<h5>Paresh Katry</h5>
						<p><a href="mailto:paresh.khatri@webteardowns.com">paresh.khatri@webteardowns.com</a><br>+370615577544<br>Google Corp Ceo<br><a href="#">pareshkhatri.com</a></p>
						<div class="clearfix"></div>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is</p>
						<div class="social2">
							<a href="#"><i class="fa fa-facebook-square"></i></a>
							<a href="#"><i class="fa fa-twitter-square"></i></a>
							<a href="#"><i class="fa fa-linkedin-square"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="sources">
		<div class="container">
			<h5 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">Third party sources</h5>
			<div class="row">
				<div class="col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
					<div class="source-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/other/2.png" class="img-responsive" alt=""/>
						<h4><a href="#">Section 1.10.32 of "de Finibus Bonorum et Malorum", written</a></h4>
						<span>https://dribbble.com/zeta-design</span>			
					</div>
					<div class="source-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/other/3.png" class="img-responsive" alt=""/>
						<h4><a href="#">Section 1.10.32 of "de Finibus Bonorum et Malorum", written</a></h4>
						<span>https://dribbble.com/zeta-design</span>			
					</div>
					<div class="source-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/other/2.png" class="img-responsive" alt=""/>
						<h4><a href="#">Section 1.10.32 of "de Finibus Bonorum et Malorum", written</a></h4>
						<span>https://dribbble.com/zeta-design</span>			
					</div>
				</div>
				<div class="col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
					<div class="source-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/other/4.png" class="img-responsive" alt=""/>
						<h4><a href="#">Section 1.10.32 of "de Finibus Bonorum et Malorum", written</a></h4>
						<span>https://dribbble.com/zeta-design</span>			
					</div>
					<div class="source-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/other/5.png" class="img-responsive" alt=""/>
						<h4><a href="#">Section 1.10.32 of "de Finibus Bonorum et Malorum", written</a></h4>
						<span>https://dribbble.com/zeta-design</span>			
					</div>
					<div class="source-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/other/2.png" class="img-responsive" alt=""/>
						<h4><a href="#">Section 1.10.32 of "de Finibus Bonorum et Malorum", written</a></h4>
						<span>https://dribbble.com/zeta-design</span>			
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<hr>
	
	<div class="comments-wrap wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" id="6">
		<div class="container">
			<h3>Comments <b>(15)</b></h3>
			<ul class="comment-list">
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/other/avatar.png" alt=""/>
					<date>15, Nov, 2016</date>
					<div class="comment-author">Username</div>
					<p>I spoke with some industry players to learn about the open source DevOps projects they like or use. (...) The participants included: Amit Nayar, VP of Engineering at Media.</p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/other/avatar.png" alt=""/>
					<date>15, Nov, 2016</date>
					<div class="comment-author">Username</div>
					<p>I spoke with some industry players to learn about the open source DevOps projects they like or use. (...) The participants included: Amit Nayar, VP of Engineering at Media.</p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/other/avatar.png" alt=""/>
					<date>15, Nov, 2016</date>
					<div class="comment-author">Username</div>
					<p>I spoke with some industry players to learn about the open source DevOps projects they like or use. (...) The participants included: Amit Nayar, VP of Engineering at Media.</p>
				</li>
			</ul>
			<form class="comment-form">
				<h4>Leave a comment</h4>
				<input type="text" placeholder="Your name">
				<input type="email" placeholder="Your email">
				<textarea placeholder="Enter your comment here"></textarea>
				<div class="process-cta">
					<div class="dual-btns">
						<a href="#" class="btn btn-primary">Submit Comment</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="mob-full">
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
	
	
<?php get_footer(); ?>