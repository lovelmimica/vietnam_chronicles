<?php get_header() ?>
  <div class="container-main main-section">
    <div class="w-container">
      <div class="div-block-7"><img class='category_image' src=<?php echo get_template_directory_uri() . "/images/post_big_dummy.jpg" ?> width="1062" srcset='<?php echo get_template_directory_uri() . "/images/post_big_dummy-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/post_big_dummy.jpg" ?> 789w'' sizes="(max-width: 767px) 100vw, (max-width: 991px) 728px, 940px" alt="" class="image">
        <h2 class="heading-blog">Posty by <?php echo get_the_author_meta( 'first_name' ) . " " . get_the_author_meta( 'last_name' );  ?></h2>
      </div>
      <p class="mds-plr-10"><?php echo get_the_author_meta( 'description' )?></p>
      <div class="html-embed-5 w-embed">
        <hr>
      </div>
      <?php 
        $args =array('post_type' => 'post', 'cat' => the_category_ID(false) );
        $loop = new WP_Query( $args );
        ?>
        <div class='postcard_grid'>
        <?php
        while( have_posts() ):
          the_post();
          ?>
          <div class="archive-post-card p-10">
            <a href=<?php the_permalink() ?>>
            <img src='<?php echo get_template_directory_uri() . "/images/post-card_dummy_00.jpg" ?>' width="300" alt="" class="link-image">
            <h4 class="link-heading"><?php the_title() ?></h4></a>
            <p><?php the_excerpt() ?></p>
            <a href=<?php the_permalink() ?> class="link-read-more">Read more &gt;</a>
          </div>
        <?php         
        endwhile;
      ?>
      </div>
      </div>
    </div>
  </div>
  <?php get_footer() ?>
