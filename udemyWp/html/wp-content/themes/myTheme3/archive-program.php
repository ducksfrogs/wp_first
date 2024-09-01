<?php
get_header(  );
?>
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(images/library-hero.jpg)"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="page-banner_title">All Events </h1>
        <div class="page-banner__intro">
          <p>See what is going on</p>
        </div>
        <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
      </div>
    </div>

    <div class="container container--narrow page-section">
      <ul class="link-list min-list">
      <?php

        while(have_posts(  )) {
          the_post( ); ?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

      <?php };
      echo paginate_links(  );
      ?>
      </ul>

    </div>

<?php
get_footer(  );
?>