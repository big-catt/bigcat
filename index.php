<?php get_header();?>
    <!-- Main Content -->
    <div class="container">




      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
          <div class="post-preview">
          <a href="<?php the_permalink(); ?>">
              <h2 class="post-title">
                <?php the_title(); ?>
              </h2>
              <h3 class="post-subtitle">
                <?php the_content(); ?>
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="<?php get_the_author_link();?>"><?php get_the_author();?></a>
              on September 24, 2018</p>
          </div>
        <?php endwhile; ?>

        <?php endif; ?>
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

    <hr>
<?php get_footer();?>
