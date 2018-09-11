<?php
get_header('page'); ?>
<div id="conteudo">
  <div id="blog-single">
    <div class="bx">
      <div class="container">
        <div class="row ">
          <div class="col-md-8">
          <?php
          // Start the loop.
          while ( have_posts() ) : the_post();

          ?>
            <article>
              <?php
              the_title('<h1>','</h1>');
              if(has_post_thumbnail(get_the_ID())):
                the_post_thumbnail('single-post', array(
                  'class' => "img-fluid",
                ));
              endif;
              ?>
              <div class="autor"><?php the_author()?> - <?php echo get_the_date('F j, Y') ?></div>
            <?php
            the_content();
            ?>
            </article>
          <?php
            // End of the loop.
          endwhile;
          ?>
          </div>
          <div class="col-md-4">
            <?php echo get_sidebar(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer('page'); ?>
