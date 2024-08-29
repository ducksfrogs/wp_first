<?php
get_header(  );
?>
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(images/library-hero.jpg)"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="page-banner_title">
          <?php 
            the_archive_title(  );
            // if (is_category( )) {
            // single_cat_title(  );
            // } if (is_author(  ) ){
            // echo "Post by " ; the_author(  );
            // } 
         ?>
        </h1>
        <div class="page-banner__intro">
          <p><?php the_archive_description(  ); ?> </p>
        </div>
        <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
      </div>
    </div>

    <div class="container container--narrow page-section">
      <?php
        while(have_posts(  )) {
          the_post( ); ?>
          <div class="post-item">
            <h2><a href="<?php the_permalink(  ); ?>"><?php the_title(  ) ?></a></h2>
            <div class="meta-box">
              <p>Posted by <?php the_author_posts_link(  ); ?> on <?php the_time('Y'); ?> in <?php echo get_the_category_list( ', ' ); ?></p>
            </div>
            <div class="generic-content">
              <?php the_excerpt(  ); ?>
              <p><a class = "btn btn--blue" href="<?php the_permalink(); ?>">Contine readeng</a></p>
            </div>
          </div>

      <?php };
      echo paginate_links(  );
      ?>
    </div>

<?php
get_footer(  );
?>