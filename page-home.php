<?php
/*
 * Template Name: Home Page
 * 
 * Use this template for a static home page. 
 * If you don't need the main loop, remove it
 * and get busy.
*/
?>

<?php get_header(); ?>

    <main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">

        <article id="intro" <?php post_class(); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">

            <header class="article-header">
				
				<h1><?php bloginfo('name'); ?></h1>
				
				<?php 
				$cookie_name = "animation_cookie"; 
				// setcookie($cookie_name, "test", time() + 300, '/'); 
				?>
				<?php if(!isset($_COOKIE[$cookie_name])) { ?>
				<?php get_template_part( 'templates/animate-logo'); ?>
				<?php } ?>

            </header> <?php // end header ?>
			
			<section id="landing" class="landing" itemprop="articleBody" data-responsive-background-image>
				
				<span class="hero-text-1">
					<h2 class="text-center sticky-50vh"><?php the_field('landing_first_sentence'); ?></h2>
				</span>
				
				<img class="center-by-margin" src="<?php echo get_theme_file_uri(); ?>/library/images/boat.png">
				
				<span class="hero-text-2">
					<h2 class="text-center sticky-50vh"><?php the_field('landing_second_sentence'); ?></h2>
				</span>
				
				<?php				
					$image = get_field('landing_background');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
				?>
				<?php echo wp_get_attachment_image( $image['id'], $size,'', array( "class" => "bg-swap" )); ?>
			
			</section> <?php // end landing section ?>

            <section id="welcome" class="welcome" itemprop="articleBody" data-responsive-background-image>
				
				<div class="inner-container">
					<span class="section-title">Welcome</span>                                
					<?php the_field('welcome_text'); ?>
				</div>
				
				<?php 						
					$image = get_field('welcome_background');		
				?>
				<?php echo wp_get_attachment_image( $image['id'], $size,'', array( "class" => "bg-swap" )); ?>

            </section> <?php // end welcome section ?>

			<section id="process" class="process" itemprop="articleBody" data-responsive-background-image>
			
				<div class="inner-container">
					<span class="section-title">Process</span>
					<?php the_field('process_text'); ?>
				</div>
			
				<?php $image = get_field('process_background'); ?>
				<?php echo wp_get_attachment_image( $image['id'], $size,'', array( "class" => "bg-swap" )); ?>
			
			</section> <?php // end process section ?>

			<section id="about" class="about" itemprop="articleBody">
				
				<div class="about-grid">
					<div class="text dark">
						<span class="section-title">About</span>
						<?php the_field('about_text'); ?>
						<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'About' ) ) ); ?>"  class="read-more text-right">Read More ></a>						
					</div>

					<?php $image = get_field('about_image'); ?>
					<?php echo wp_get_attachment_image( $image['id'], $size,'', array( "class" => "image" )); ?>

				</div>	
				
			</section> <?php // end about section ?>

            <footer class="article-footer">

            </footer>

        </article>		

	</main>
	
<?php get_footer(); ?>
