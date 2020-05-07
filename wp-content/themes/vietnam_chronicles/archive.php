  <?php get_header() ?>
  <div class="container-main main-section">
    <div class="w-container">
      <div class="div-block-7"><img class='category_image' src=<?php echo get_template_directory_uri() . "/images/post_big_dummy.jpg" ?> width="1062" srcset='<?php echo get_template_directory_uri() . "/images/post_big_dummy-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/post_big_dummy.jpg" ?> 789w'' sizes="(max-width: 767px) 100vw, (max-width: 991px) 728px, 940px" alt="" class="image">
        <h2 class="heading-blog">Blog</h2>
      </div>
      <p class="mds-plr-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
      <div class="html-embed-5 w-embed">
        <hr>
      </div>
      <?php 
        $args =array('post_type' => 'post');
        $loop = new WP_Query( $args );
        ?>
        <div class='postcard_grid'>
        <?php
        while( $loop->have_posts() ):
          $loop->the_post();
          ?>
          <div class="archive-post-card p-10">
            <img src='<?php echo get_template_directory_uri() . "/images/post-card_dummy_00.jpg" ?>' width="300" alt="" class="link-image">
            <h4 class="link-heading"><?php the_title() ?></h4>
            <p><?php the_excerpt() ?></p>
            <p class="link-read-more">Read more &gt;</p>
          </div>
        <?php         
        endwhile;
      ?>
      </div>
      </div>
    </div>
  </div>
  <?php get_footer() ?>
