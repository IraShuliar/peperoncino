<?php get_header(); ?>

		<div class="wrapper">

			<div class="breadcrumbs">
				<ul>
					<li>
						<a href="#">Homepage
							<span>//</span>
						</a>
					</li>
					<li>
						<a>What we think<span>//</span></a>
					</li>
					<li>How To Boost Your Traffic Of Your Blog</li>
				</ul>
			</div>

			<div class="post-content">
				<h1 class="post-content__title"><?php the_field('post_title'); ?></h1>
				<ul class="post-content__meta">
					<li class="time-view">6 min read<span></span></li>
					<li>Tomasz Pisiński<span></span></li>
					<li>13 March 2018</li>
				</ul>
				<div class="post-content__main-img"><img src="<?=get_template_directory_uri()?>/img/post-img.jpg"></div>
				<div class="post-content__description">
					 <?php the_field('post_description'); ?>
				</div>

				<div class="about-optimization">
					<img src="<?php the_field('about_optimization_image'); ?>">
					<?php the_field('about_optimization_description'); ?>
				</div>

				<div>
					<?php the_field('post_text'); ?>
				</div>
				<span class="line"></span>
				<div class="post-content__share">
					<h4>Share this article</h4>
					<ul>
						<li><a href="#"><img src="<?=get_template_directory_uri()?>/img/linkedin_logo.png"></a></li>
						<li>
							<a href="#">
								<img src="<?=get_template_directory_uri()?>/img/facebook_logo.png">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?=get_template_directory_uri()?>/img/medium_logo.png">
							</a>
						</li>
					</ul>
				</div>
			</div>

<?php get_sidebar(); ?>
	
<?php get_footer(); ?>
