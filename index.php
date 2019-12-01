<?php
/*
 * Site index and Journal template
 *
*/
?>

<?php get_header(); ?>

    <main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog" data-responsive-background-image>
        
        <?php 

        $id = get_option('page_for_posts');
        $img = get_the_post_thumbnail($id,'full', array( 'class' => 'bg-swap' ));  
        echo $img;

        // WP_Query arguments
        $args = array('post_type' => array( 'post' ),'posts_per_page' => -1);

        // The Query
        $query = new WP_Query( $args );

        ?>      

        <header class="page-header">
            
            <h1><?php the_field('title_tagline',$id); ?></h1>

        </header>

        <div class="grid">                                       

            <section id="posts" class="posts">
           
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">

                        <div class="container">
                            <header class="article-header">
                                                        
                                <!-- <span class="posted-on"><?php echo get_the_date(); ?></span> -->
                                <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>                            

                            </header> <?php // end article header ?>

                            <section class="entry-content" itemprop="articleBody">

                                <?php the_excerpt(); ?>

                            </section> <?php // end article section ?>
                        </div>

                        <?php $featuredImage = get_the_post_thumbnail($query->id,'large', array( 'class' => 'featured' )); ?>                       
                           
                        <?php if ( $featuredImage ){ ?>
                            
                            <footer class="article-footer">
                                <?php echo $featuredImage; ?>
                            </footer>   
                        
                        <?php } ?>                                    

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
