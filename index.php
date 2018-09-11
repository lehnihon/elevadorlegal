<?php get_header(); ?>

<div id="content">
  <div class="container">
    <div class="row">
      <?php
      $query = new WP_Query( array(
        'posts_per_page' => 8,
      ));
      $i = 1;
      while ( $query->have_posts() ) : $query->the_post();
        if($i == 1 or $i == 3):
        ?>
          <div class="col-md-6">
            <article class="design-a">
              <a href="<?php the_permalink(); ?>" title="">
                <div class="cat">
                  <?php $category = get_the_category();
                  echo $category[0]->cat_name; ?>
                </div>
                <?php the_title("<h2>","</h2>"); ?>
                <p><?php the_excerpt_shortcode(); ?></p>
              </a>
            </article>
          </div>
        <?php elseif($i == 2 or $i == 4): ?>
          <div class="col-md-6">
            <article class="design-b">
              <a href="<?php the_permalink(); ?>" title="">
                <div class="cat">
                  <?php $category = get_the_category();
                  echo $category[0]->cat_name; ?>
                </div>
                <?php the_title("<h2>","</h2>"); ?>
                <p><?php the_excerpt_shortcode(); ?></p>
              </a>
            </article>
          </div>
        <?php endif; ?>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
