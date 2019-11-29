<?php
/*
 Template Name: Promotion
 * 
 * 
 * Copied from contact template
 * 
*/
?>

<?php get_header(); ?>

<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog" data-responsive-background-image>

    <?php echo get_the_post_thumbnail($post, 'full', array('class' => 'bg-swap'));  ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">

                <header class="article-header">

                    <?php $image = get_field('featured_image'); ?>

                    <?php if (!empty($image)) : ?>               
                        <div class="featured-image" style="background-image: url(<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>);">

                        </div>

                    <?php endif; ?>

                    <div class="headings">
                        <?php
                        $pre_title = get_field('pre_title');
                        $title = get_field('title');
                        $sub_title = get_field('sub_title');
                        ?>
                        <div class="pre-title"><?php echo $pre_title; ?></div>
                        <h1 class="page-title" itemprop="headline"><?php echo $title; ?></h1>
                        <div class="sub-title"><?php the_field('sub-title'); ?></div>
                    </div>
                </header>

                <div class="copy">
                    <?php the_field('copy'); ?>
                </div>

                <div class="gallery">

                    <?php $gallery = get_field('gallery'); ?>

                    <?php if (isset($gallery)) : ?>
                        <?php $imageCount = 1; ?>
                        <?php foreach ($gallery as $image) : ?>

                            <a class="anchor" href="#img<?php echo $imageCount; ?>" style="background-image: url(<?php echo esc_url($image['sizes']['large']); ?>);">
                                <!-- <img class="thumbnail" src=""> -->
                            </a>
                            <?php $imageCount++; ?>
                        <?php endforeach; ?>

                        <?php $imageCount = 1; ?>

                        <?php foreach ($gallery as $image) : ?>

                            <div class="lightbox" id="img<?php echo $imageCount; ?>">
                                <a href="#_" class="btn btn--close"></a>
                                <!-- <a href="#img1" class="btn btn--left"></a> -->
                                <?php $imageNext = $imageCount + 1;
                                                if ($imageNext == 4) {
                                                    $imageNext = 1;
                                                } ?>
                                <a href="#img<?php echo $imageNext; ?>" class="btn btn--right"></a>
                                <img src="<?php echo esc_url($image['sizes']['large']); ?>">
                            </div>

                            <?php $imageCount++; ?>
                        <?php endforeach; ?>

                    <?php endif; ?>

                </div>

                <div class="tabs">
                    <div class="tab what active">WHAT</div>
                    <div class="tab when">WHEN</div>
                    <div class="tab where">WHERE</div>
                </div>

                <div class="panels">
                    <div class="panel what">
                        <?php the_field('what'); ?>
                    </div>
                    <div class="panel when hide">
                        <?php the_field('when'); ?>
                    </div>
                    <div class="panel where hide">
                        <?php the_field('where'); ?>
                    </div>
                </div>

                <div class="call-to-action">
                    <?php $copy = get_field('sign_up_copy'); ?>
                    <?php if ($copy) { ?>
                        <div class="cta-copy"><?php echo $copy; ?></div>
                    <?php } ?>
                    <button><?php the_field('call_to_action'); ?></button>
                    <div class="form hide"><?php the_field('call_to_action_form'); ?></div>
                </div>

                <?php $promotions = get_field('more_promotions'); ?>

                <?php if ($promotions) : ?>
                    <footer class="more-promotions">
                        <div class="title">More Charters</div>
                        <?php foreach ($promotions as $promo) : ?>
                            <div class="promotion">
                                <a href="<?php echo esc_url($promo->guid); ?>">
                                    <?php echo esc_html($promo->post_title); ?>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </footer>
                <?php endif; ?>
            </article>

        <?php endwhile; ?>

        <?php // Restore original Post Data 
            ?>
        <?php wp_reset_postdata(); ?>

        <?php plate_page_navi($wp_query); ?>

    <?php else : ?>

        <?php get_template_part('templates/404'); ?>

    <?php endif; ?>

</main>

<?php get_footer(); ?>