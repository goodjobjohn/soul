<?php
/*
 Template Name: FAQ's
 * 
 * 
 * Copied from contact template
 * 
*/
?>

<?php get_header(); ?>

    <main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog" data-responsive-background-image>        

    <?php echo get_the_post_thumbnail($post,'full', array( 'class' => 'bg-swap' ));  ?> 
    
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">


                <header class="article-header">                
                    <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
                </header>

                <section id="faqs" class="faqs" itemprop="articleBody">		            
                    
                    <!-- check if the repeater field has rows of data -->
                    <?php if( have_rows('section') ): ?>

                        <!-- loop through the rows of data -->
                        <?php while ( have_rows('section') ) : the_row(); ?>

                            <div class="section-title">
                                <!-- display a sub field value -->
                                <?php the_sub_field('title'); ?>
                            </div>

                            <?php if( have_rows('questions') ): ?>

                                <!--  loop through the rows of data -->
                                <?php while ( have_rows('questions') ) : the_row(); ?>

                                    <div class="question">                                    
                                        <?php the_sub_field('question'); ?>
                                    </div>
                                    <div class="answer">
                                        <?php the_sub_field('answer'); ?>
                                    </div>

                                <?php endwhile; ?>
            
                            <?php else : ?>
            
                                <!-- no rows found -->
            
                            <?php endif; ?>

                        <?php endwhile; ?>

                    <?php else : ?>

                        <!-- no rows found -->

                    <?php endif; ?>

                </section>

                <footer class="article-footer">
                
                </footer>                        

            </article>

        <?php endwhile; ?>
        
        <?php // Restore original Post Data ?>
        <?php wp_reset_postdata(); ?>

            <?php plate_page_navi( $wp_query ); ?>

        <?php else : ?>

            <?php get_template_part( 'templates/404'); ?>
                                        
        <?php endif; ?>           

    </main>

<?php get_footer(); ?>
