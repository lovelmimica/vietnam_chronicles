  <?php get_header() ?>
  <div data-w-id="6061e404-14f7-89e6-4a4b-89c3d17c5b07" class="div-block-31 main-section">
    <div data-w-id="eb526739-0925-9d30-682a-07e009164873" class="postcard-modal">
      <h4 class="heading-62 postcard-title"><strong class="bold-text-3">Postcard of Hanoi</strong></h4>
      <img src=<?php echo get_template_directory_uri() . "/images/dummy_01.jpg" ?> width="724" srcset='<?php echo get_template_directory_uri() . "/images/dummy_01-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/dummy_01-p-1080.jpeg" ?> 1080w, <?php echo get_template_directory_uri() . "/images/dummy_01.jpg" ?> 1275w' sizes="100vw" alt="" class="image-10">
      <p class="paragraph-18 modal-postcard-content"></p>
      <h5 class="heading-63">Pictures From Top Clockwise:</h5>
      <p class="list-4 modal-postcard-parts">
      </p>
    </div>
  </div>
  <div class="container-main">
    <div class="container-2 w-container">
      <h1>Postcards</h1>
      <p class="mds-plr-10">In the Postcards section, you can find all the personalized postcards from our first Vietnam road trip. We started from the capital Hanoi, and slowly started making our way south to Saigon.<br></p>
      <p class="mds-plr-10">On the way to Saigon, there is a lot of natural and artificial beauty to observe and experience. Some places are spoiled by mass tourism, while some are literally untouched by us foreigners.<br></p>
      <p class="mds-plr-10">We wanted to pay justice to all the destinations we visited on our first road trip and created postcards for each of the stops we made. From the local, busy vibe of Hanoi, to the relaxing beach vibes of Da Nang to challenging, yet rewarding and authentic Central Highways, there are a lot of spices to taste in Vietnam.<br></p>
      <p class="mds-plr-10">Stay tuned for more postcards from our Cambodia road trip! Until then, we hope that you enjoy the current designs! Let us know what is your favorite one in the comment section below!<br></p>
      <div class="html-embed-5 w-embed">
        <hr>
      </div>
      <?php
        $args =array('post_type' => 'postcard');
        $loop = new WP_Query( $args );
        $i = 0;
        $count = wp_count_posts( "postcard" )->publish;
        ?> 
        <?php while( $loop->have_posts() ): 
          $loop->the_post();

          if( $i == 0): ?>
          <div class="no-mp w-row">
          <?php
          elseif ( $i % 3 == 0): ?>
            </div><div class="no-mp w-row">
          <?php 
          endif; 
          $i++; 
          ?>  
          <div class="cetered-vertical w-col w-col-4 postcard-card">
           <div class="m-10 postcard-container" data-postcard-id='<?php the_ID() ?>'>
              <img src=<?php echo get_template_directory_uri() . "/images/dummy_1.jpg" ?> srcset='<?php echo get_template_directory_uri() . "/images/dummy_1-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/dummy_1-p-800.jpeg" ?> 800w, <?php echo get_template_directory_uri() . "/images/dummy_1-p-1080.jpeg" ?> 1080w, <?php echo get_template_directory_uri() . "/images/dummy_1.jpg" ?> 1275w' sizes="(max-width: 479px) 96vw, (max-width: 767px) 29vw, (max-width: 991px) 222.671875px, 293.328125px" alt="" class="image-postcard link-image">
              <h4 class="link-heading"><?php the_title() ?></h4>
              <div class="postcard-content" hidden><?php the_content() ?></div>
              <p class="postcard-parts" hidden><?php echo get_post_custom()['postcard_parts'][0]  ?></p>
            </div>
          </div>
          <?php
          //print_r(get_post());
          endwhile; ?>
              
        </div>

    </div>
  </div>
  <?php get_footer(); ?>