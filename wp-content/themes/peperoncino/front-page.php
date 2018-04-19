<?php get_header(); ?>

		<div class="wrapper">
			<div class="video-banner">
				<div class="video-banner__description">
					<div class="text-wrp">
						<h2><?php the_field('banner_title'); ?></h2>
						<p><?php echo get_field('banner_subtitle'); ?></p>
					</div>
				</div>

				<ul class="video-banner__social-icons">
					<li><a href="#"><img src="<?=get_template_directory_uri()?>/img/Instagram.png"></a></li>
					<li>
						<a href="#"><img src="<?=get_template_directory_uri()?>/img/LinkedIn.png"></a>
					</li>
					<li>
						<a href="#"><img src="<?=get_template_directory_uri()?>/img/Vimeo.png"></a>
					</li>
					<li>
						<a href="#"><img src="<?=get_template_directory_uri()?>/img/YouTube.png"></a>
					</li>
				</ul>
				<div class="bg-red">
					<div class="img-wrp"></div>
				</div>
			</div>

			<div class="services">
				<h3 class="block-title"><?php the_field('icons_block_title');?></h3>
				<p class="subtitle"><?php the_field('icons_block_subtitle'); ?></p>
				<div class="services__list">

				<?php $iconsList = get_field('icons_list'); 
					foreach($iconsList as $listElement) :
				?>
					<div class="service">
						<div class="img-wrp">
							<img src="<?php echo $listElement['image']['url']?>">
						</div>
						<p><?php echo $listElement['title']?></p>
					</div>

				<?php endforeach;?>

				</div>
			</div>
			
			<div class="about-us">
				<div class="about-us__left">
					<h3 class="block-title"><?php the_field('about_us_block_title'); ?></h3>
					<p class="subtitle"><?php the_field('about_us_block_subtitle'); ?></p>
				</div>
				<div class="about-us__right">
					<a href="#" class="about-us__video-wrp">
						<div class="about-us__video-wrp_img" style="background-image: url('<?=get_template_directory_uri()?>/img/video-img.png');"></div>
						<div class="about-us__video-wrp_bg">
							<span class="play-btn"></span>
						</div>
					</a>

					<div class="bg-grey">
				</div>
				
				</div>
			</div>

			<div class="our-clients">
				<h3 class="block-title"><?php the_field('our_clients_block_title'); ?></h3>
				<p class="subtitle"><?php the_field('out_clients_block_subtitle'); ?></p>
				<div class="our-clients__list">

				<?php $ourClientsList = get_field('our_clients_list'); 
					foreach($ourClientsList as $listElement) :
				?>
					<div class="our-clients__client">
						<div class="img-wrp">
							<img src="<?php echo $listElement['image']['url']?>">
						</div>
						<span class="criss-cross"></span>
					</div>
						
				<?php endforeach; ?>

				
				</div>
			</div>

			<div class="contact-inform">
				<div class="contact-inform__block-left">
					<div class="img-wrp">
						<img src="<?=get_template_directory_uri()?>/img/ilustration_desktop.png">
					</div>
					<div class="bg-grey"></div>
				</div>
				<div class="contact-inform__block-right">
					<div class="contact-inform__title">
						<?php the_field('contact_inform_block_title'); ?>
					</div>
					<?php the_field('contact_inform_content'); ?>
					
					<div>
						<?php $contactsList = get_field('contact_inform_contact_data'); 
							foreach($contactsList as $contactsElement):
						?>

							<div class="person-contact-data">
								<?php echo $contactsElement['contact_data'] ?>
							</div>

						<?php endforeach; ?>
					</div>
					<!-- <div class="contact-inform__title">
						<h3 class="block-title">Where we are?</h3>
						<p class="subtitle">We work smart! We work everywhere! <br><strong>We don’t let geography get in the way of talents!</strong></p>
					</div>

					<div class="main-email-address">
						<p>If You like our work as we do, drop us a line at</p>
						<a href="mailto:hello@peperoncinoagency.com">hello@peperoncinoagency.com</a>
					</div>
					<div class="person-contact-data">
						<p>Tomasz Pisiński</p> 
						<span>+48 602 214 217</span>
						<a href="mailto:tomasz@peperoncinoagency.com">tomasz@peperoncinoagency.com</a><br> 
						<a href="">linkedin.com/tomasz.pisinski</a>
					</div>
					<div class="person-contact-data">
						<p>Michał Podemski</p>
						<span>+48 519 520 040</span>
						<a href="mailto:michal@peperoncinoagency.com">michal@peperoncinoagency.com</a><br>
						<a href="">linkedin.com/michal.podemski</a>
					</div>
				</div> -->
			</div>

		</div>	

<?php get_footer(); ?>