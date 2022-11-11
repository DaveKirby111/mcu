<?php get_header(); ?>

<div class="content">

<main>

<h2>Phase 1</h2>

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

        
        echo the_post_thumbnail('thumbnail');
        

        
        
        
    }

    endwhile;

    wp_reset_postdata();
    
    ?>


    <p><?php the_content(); ?></p>

    <h2>Phase 2</h2>

<?php 
    
    $args = array(

        'post_type' => 'phase2',
        'post_status' => 'publish',
        'posts_per_page' => 10,
        'order' => 'ASC',

    );

    $phase2 = new WP_Query( $args );

    while( $phase2->have_posts() ) : $phase2->the_post();
    if ( has_post_thumbnail() ) {
        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
        
        echo the_post_thumbnail('thumbnail');
        
    }

    endwhile;

    wp_reset_postdata();
    
    ?>


    <p><?php the_content(); ?></p>

    <h2>Phase 3</h2>

<?php 
    
    $args = array(

        'post_type' => 'phase3',
        'post_status' => 'publish',
        'posts_per_page' => 20,
        'order' => 'ASC',

    );

    $phase3 = new WP_Query( $args );

    while( $phase3->have_posts() ) : $phase3->the_post();
    if ( has_post_thumbnail() ) {
        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
        
        echo the_post_thumbnail('thumbnail');
        
    }

    endwhile;

    wp_reset_postdata();
    
    ?>


    <p><?php the_content(); ?></p>

    <h2>Phase 4</h2>

<?php 
    
    $args = array(

        'post_type' => 'phase4',
        'post_status' => 'publish',
        'posts_per_page' => 10,
        'order' => 'ASC',

    );

    $phase4 = new WP_Query( $args );

    while( $phase4->have_posts() ) : $phase4->the_post();
    if ( has_post_thumbnail() ) {
        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
        
        echo the_post_thumbnail('thumbnail');
        
    }

    endwhile;

    wp_reset_postdata();
    
    ?>


    <p><?php the_content(); ?></p>

    <h2>Shows</h2>

<?php 
    
    $args = array(

        'post_type' => 'shows',
        'post_status' => 'publish',
        'posts_per_page' => 10,
        'order' => 'ASC',

    );

    $shows = new WP_Query( $args );

    while( $shows->have_posts() ) : $shows->the_post();
    if ( has_post_thumbnail() ) {
        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
        
        echo the_post_thumbnail('thumbnail');
        
    }

    endwhile;

    wp_reset_postdata();
    
    ?>


    <p><?php the_content(); ?></p>

    



</main>

</div>

<?php get_footer(); ?>