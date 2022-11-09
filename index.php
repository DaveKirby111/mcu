<?php get_header(); ?>

<div class="content">

<main>

<?php

the_post_thumbnail();

?>

<?php

   if( have_posts() ) {

        while( have_posts() ) {
            the_post();
            the_content();
        }


   }


?>



</main>

</div>

<?php get_footer(); ?>