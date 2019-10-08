<?php
/*
 Template Name: About
 * 
 * Use this template for a static home page. 
 * If you don't need the main loop, remove it
 * and get busy.
*/
?>

<?php get_header(); ?>

    <main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">

        <article id="intro" <?php post_class(); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">
			
			<?php $size = 'full'; // (thumbnail, medium, large, full or custom size) ?>
		
            <header class="article-header">				
				
				<h1 class="text-center drop-shadow sticky-20vh"><?php the_field('hero_text'); ?></h1>				
				<?php the_post_thumbnail('full'); ?>


            </header> <?php // end header ?>

            <section id="about" class="grid" itemprop="articleBody">
				
				<div class="text">
					<?php the_field('about_text'); ?>
				</div>
				
				<?php $image = get_field('about_image'); ?>
				<?php echo wp_get_attachment_image( $image['id'], $size,'', array( "class" => "image" )); ?>

            </section> <?php // end welcome section ?>

			<section id="leone" class="grid" itemprop="articleBody">
				
				<div class="text">
					<?php the_field('leone_text'); ?>
				</div>
				
				<?php $image = get_field('leone_image'); ?>
				<?php echo wp_get_attachment_image( $image['id'], $size,'', array( "class" => "image" )); ?>

            </section> <?php // end process section ?>

			<section id="athena" class="grid" itemprop="articleBody">
				
				<div class="text">
					<?php the_field('athena_text'); ?>
				</div>

				<?php $image = get_field('athena_image'); ?>
				<?php echo wp_get_attachment_image( $image['id'], $size,'', array( "class" => "image" )); ?>

            </section> <?php // end about section ?>

            <footer class="article-footer">

            </footer>

        </article>		

	</main>
	
<?php get_footer(); ?>
