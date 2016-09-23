<?php get_header(); ?>
<section>
    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
    <?php $featuredImageUrl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); ?>
    <?php $url = $featuredImageUrl['0']; ?>
    <?php echo '<header class="content-header" style="background-image:url('.$url.')">' ?>
        <div class="caption"><h1><?php the_title(); ?></h1></div>
    <header>
    <?php endif; ?>
</section>

                
                
                