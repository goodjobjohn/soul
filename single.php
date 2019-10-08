<?php
/*
* Template Name: Single Full Width Template
* Template Post Type: post
* 
* This is a post template for full-width posts.
*/
?>

<?php get_header(); ?>

    <main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog" data-responsive-background-image>

        <?php
            $id = get_option('page_for_posts');
            $img = get_the_post_thumbnail($id,'full', array( 'class' => 'bg-swap' ));  
            echo $img;
        ?>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemprop="blogPost" itemtype="https://schema.org/BlogPosting">

                <header class="article-header entry-header">

                    <?php 

                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('full');
                        }                                
                    
                    ?>
                    
                    <div class="meta">
                        <!-- <span class="posted-on"><?php echo get_the_date(); ?></span>
                        <span class="tags">
                            <?php
                            $posttags = get_the_tags();
                                if ($posttags) {
                                foreach($posttags as $tag) {
                                    echo $tag->name . ' '; 
                                }
                            }
                            ?>
                        </span> -->
                    </div>

                    <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>

                </header> <?php // end article header ?>

                <section class="entry-content" itemprop="articleBody">

                    <?php if ( has_post_format()) { 
                        get_template_part( 'format', get_post_format() ); 
                    } ?>

                    <?php the_content(); ?>

                </section> <?php // end article section ?>

                <footer class="article-footer">
                
                    <a class="back-to-journal text-left" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">< Back to Journal</a>

                </footer> <?php // end article footer ?>

                <?php comments_template(); ?>

            </article> <?php // end article ?>

        <?php endwhile; ?>

        <?php else : ?>

            <?php get_template_part( 'templates/404'); ?>

        <?php endif; ?>

    </main>

<?php get_footer(); ?>
