<?php get_header(); ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
                    <h1 class="mb-4"><?php the_title(); ?></h1>
                    <div class="page-content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile;
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
