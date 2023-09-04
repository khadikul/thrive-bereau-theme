<?php
/**
 * The template for displaying all single posts
 *
 * @package thrive-bureau
 */

get_header(); ?>

<!-- About Area Start -->
<div class="container my-2">
    <?php if(have_posts(  )) : while(have_posts()) : the_post(); ?>
            <div class="page-title">
            <h4><?php the_title(); ?></h4>
            </div>
            <p><?php the_content( ); ?></p>  
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer();