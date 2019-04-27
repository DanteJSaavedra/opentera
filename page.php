<?php get_header(); ?>
<div class="container">
 <?php while(have_posts()): the_post(); ?>
    <h1 class="text-center"><?php the_title(); ?></h1>
    <hr>
    <br>
    <main>
        <?php the_content(); ?>

    </main> 
<?php endwhile; ?>

</div>
<?php get_footer(); ?>
