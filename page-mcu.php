<?php get_header(); ?>

<div class="content">

<main>

<?php 
    
    $args = array(

        'post_type' => 'phase1',
        'post_status' => 'publish',
        'posts_per_page' => 10,
        'order' => 'ASC',

    );

    $phase1 = new WP_Query( $args );

    while( $phase1->have_posts() ) : $phase1->the_post();
    if ( has_post_thumbnail() ) {
        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
        echo '';
        the_post_thumbnail('thumbnail');
        echo '';
    }

    echo '<p class="title">';
    echo get_the_title();
    echo '</p>';

    endwhile;

    wp_reset_postdata();
    
    ?>


    <p><?php the_content(); ?></p>



</main>

</div>

<?php get_footer(); ?>