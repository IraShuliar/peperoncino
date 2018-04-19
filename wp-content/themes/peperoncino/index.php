<?php get_header(); ?>
		<div class="wrapper">

			 <div class="breadcrumbs">
				 <ul>
					 <li><a href="#">Homepage </a><span>//</span></li>
					 <li>What we think</li>
				 </ul>
			 </div>

			 <div class="page-filter">
				 <div class="page-filter__searching-form">
					 <form>
						 <input type="text" placeholder="Search…" class="page-filter__searching-form_search-field">
						 <button type="submit" class="search-img"></button>
					 </form>
				 </div>

				 <div class="page-filter__select-category">
					<p>Category:</p>
					<form>
						<div class="checkbox-wrp">
							<input type="checkbox" id="digital-category" name="digital">
							<label for="digital-category"><span></span>Digital</label>
						</div>
						<div class="checkbox-wrp">
							<input type="checkbox" id="events-category" name="events">
							<label for="events-category"><span></span>Events</label>
						</div>
					</form>
				 </div>

				 <div class="page-filter__sorting">
					 <p>Sorted by:</p>
					 <div class="page-filter__sorting-type">
						<p>Date</p>
						<a href="#"><img src="<?=get_template_directory_uri()?>/img/icon_arrow down dropdown.png"></a>
					 </div>
					<ul>
						<li>
							<a href="#">Name</a>
						</li>
						<li>
							<a href="#">Popular</a>
						</li>
					</ul>
				 </div>
			 </div>

			 <div class="featured-posts">
				 <div class="featured-posts__block-left">
				 <?php $mediumPost = get_field('medium_post_banner', 'options'); ?>
				 
					<div class="post-preview">
						<a href="#"><img src="<?php echo get_the_post_thumbnail_url($mediumPost->ID, 'full'); ?>"></a>
						
						<?php the_time_view($mediumPost->ID); ?>
						<a href="#" class="post-preview__title"><span><?php echo $mediumPost->post_title ; ?></span></a>
					</div>

				 </div>

				 <div class="featured-posts__block-right">
					 <?php $miniPost = get_field('mini_post_banners', 'options'); 
					 
						foreach($miniPost as $postElement) : ?>
							<div class="post-preview">
								<a href="#">
									<img src="<?php echo get_the_post_thumbnail_url($postElement->ID, 'full');?>">
								</a>
								
								<?php the_time_view($postElement['mini_post']->ID); ?>
								<a href="#" class="post-preview__title mini"><span><?php echo $postElement['mini_post']->post_title; ?></span></a>
							</div>

						<?php endforeach; ?>
				</div>
			 </div>

			 <div class="main-post">
				 <?php $mainPost = get_field('main_post_banner', 'options'); ?>
				<div class="post-preview">
					<a href="#">
						<img src="<?php echo get_the_post_thumbnail_url($mediumPost->ID, 'full'); ?>">
					</a>

					<?php the_time_view($mainPost->ID); ?>

					<a href="#" class="post-preview__title">
						<span><?php echo $mainPost->post_title; ?></span>
					</a>
				</div>
			</div>

			<div class="posts-list">

			<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<div class="post-preview">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('full'); ?>
					</a>

					<?php the_time_view(); ?>
						
					<a href="<?php the_permalink(); ?>" class="post-preview__title mini">
						<span><?php the_title(); ?></span>
					</a>
				</div>
			<?php endwhile;	else:?>
				<p><?php echo __('Sorry, no results found', 'peperoncino'); ?></p>
			<?php endif; ?>
		</div>

			<a href="#" class="more-articles-btn">Load more articles…
				<span class="loading-container">
					<span class="cssload-speeding-wheel"></span>
				</span>	
			</a>
		</div>
	
	<?php get_footer(); ?>