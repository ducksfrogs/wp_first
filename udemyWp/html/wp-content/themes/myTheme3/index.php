<h1>This is the header area.</h1>
<?php get_header(   ); ?>
<?php
    while(have_posts()) {
        the_post(); ?>
        <h2> <a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <?php the_content(); ?>
        <hr>
        <?php
    }
    ?>

<h3>footer area.</h3>
<?php get_footer(   ); ?>