<?php
/*
 * Site index and Journal template
 *
*/
?>

<?php get_header(); ?>

    <main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog" data-responsive-background-image>
        
        <div class="grid">
           
            <?php 

                $id = get_option('page_for_posts');
                $img = get_the_post_thumbnail($id,'full', array( 'class' => 'bg' ));  
                echo $img;

            ?>

            <section id="posts" class="posts">
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">

                        <header class="article-header">
                            
                            <span class="posted-on"><?php echo get_the_date(); ?></span>
                            <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>                            

                        </header> <?php // end article header ?>

                        <section class="entry-content" itemprop="articleBody">

                            <?php the_excerpt(); ?>

                        </section> <?php // end article section ?>

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
            
            </section>
            
            <aside id="aside" class="aside">

                <?php get_sidebar(); ?>

            </aside>

        </div>
    </main>

    

<?php get_footer(); ?>
