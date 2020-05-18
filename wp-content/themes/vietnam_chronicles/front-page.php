  <?php get_header() ?>
  <div class="section-8 main-section main-section slider_section">
    <div class="slider-arrow left">
      <div class="icon-arrow w-embed main_slider_left"><i class="fa fa-angle-left fa-3x" aria-hidden="true"></i></div>
    </div>
    <div class='slider_image-wrapper'>
      <!--<img src=<?php echo get_template_directory_uri() . "/images/89027829_226427551874641_2734196362684923904_n.jpg" ?> srcset='<?php echo get_template_directory_uri() . "/images/89027829_226427551874641_2734196362684923904_n.jpg" ?> 500w, <?php echo get_template_directory_uri() . "/images/89027829_226427551874641_2734196362684923904_n.jpg" ?> 800w, <?php echo get_template_directory_uri() . "/images/89027829_226427551874641_2734196362684923904_n.jpg" ?> 1080w, <?php echo get_template_directory_uri() . "/images/89027829_226427551874641_2734196362684923904_n.jpg" ?> 2048w"' sizes="(max-width: 2048px) 100vw, 2048px" alt="" class="slider-image" />-->
      <!--<img class='w3-animate-right slider_prim-img' src='http://localhost/vietnam_chronicles/wp-content/themes/vietnam_chronicles/images/slider_00.jpg' />
      <img class='w3-animate-right slider_second-img' src='http://localhost/vietnam_chronicles/wp-content/themes/vietnam_chronicles/images/slider_01.jpg' />-->
      <img class='w3-animate-right slider_image' src='http://localhost/vietnam_chronicles/wp-content/themes/vietnam_chronicles/images/slider_00.jpg' />
    </div>
      <div class="slider-arrow right ">
      <div class="icon-arrow w-embed main_slider_right"><i class="fa fa-angle-right fa-3x" aria-hidden="true"></i></div>
    </div>
  </div>
  <div class="about_us">
    <h2>Hi, we're Antonio, David & Lovel!</h2>
    <p>Welcome to our adventure travel blog. We'we been travelling South East ASia since 2017, searching for the best destinations and adventures.</p>
    <p>Trough the art of storytelling and photography, we help our readers explore the globe with us, and aim to get you on the road as well. </p>
    <a href="http://localhost/vietnam_chronicles/about-us/" class="link-btn w-inline-block">
      <div class="text-button">ABOUT US</div>
    </a>
  </div>
  <div class="section container-main">
    <div class="container w-container">
      <div class="part-container">
        <div class="no-mp w-row">
          <div class="cetered-vertical w-col w-col-4"><a class="destination_image" href="http://localhost/vietnam_chronicles/category/laos/"><img src=<?php echo get_template_directory_uri() . "/images/laos.jpg" ?> srcset='<?php echo get_template_directory_uri() . "/images/laos-p-800.jpeg" ?> 800w, <?php echo get_template_directory_uri() . "/images/laos.jpg" ?> 960w' sizes="(max-width: 479px) 95vw, (max-width: 767px) 32vw, (max-width: 991px) 230.53125px, 297.6625061035156px" alt="" class="image-destination-left link-image"></a>
            <a class='country-link' href="http://localhost/vietnam_chronicles/category/laos/">Laos</a>
          </div>
          <div class="cetered-vertical w-col w-col-4"><a class="destination_image" href="http://localhost/vietnam_chronicles/category/vietnam/"><img src=<?php echo get_template_directory_uri() . "/images/vietnam.jpeg" ?> srcset='<?php echo get_template_directory_uri() . "/images/vietnam-p-1080.jpeg" ?> 1080w, <?php echo get_template_directory_uri() . "/images/vietnam-p-1600.jpeg" ?> 1600w, <?php echo get_template_directory_uri() . "/images/vietnam.jpeg" ?> 2000w' sizes="(max-width: 479px) 95vw, (max-width: 767px) 32vw, (max-width: 991px) 230.53125px, 297.6625061035156px" alt="" class="image-destination-center link-image"></a>
            <a class='country-link' href="http://localhost/vietnam_chronicles/category/vietnam/">Vietnam</a>
          </div>
          <div class="cetered-vertical w-col w-col-4"><a class="destination_image" href="http://localhost/vietnam_chronicles/category/cambodia/"><img src=<?php echo get_template_directory_uri() . "/images/cambodia.jpeg" ?> srcset='<?php echo get_template_directory_uri() . "/images/cambodia-p-800.jpeg" ?> 800w, <?php echo get_template_directory_uri() . "/images/cambodia.jpeg" ?>  960w' sizes="(max-width: 479px) 95vw, (max-width: 767px) 32vw, (max-width: 991px) 230.53125px, 297.6625061035156px" alt="" class="image-destination-right link-image"></a>
            <a class='country-link' href="http://localhost/vietnam_chronicles/category/cambodia/">Cambodia</a>
          </div>
        </div>
      </div>
      <div class="part-container">
        <div data-duration-in="300" data-duration-out="100" class="w-tabs">
          <div class="tabs-menu w-tab-menu">
            <a data-w-tab="latest" class="tab w-inline-block w-tab-link w--current">
              <div>LATEST</div>
            </a>
            <a data-w-tab="trending_now" class="tab w-inline-block w-tab-link">
              <div>TRENDING NOW</div>
            </a>
            <a data-w-tab="popular" class="tab w-inline-block w-tab-link">
              <div>POPULAR</div>
            </a>
          </div>
          <div class="w-tab-content">
            <div data-w-tab="latest" class="w-tab-pane w--tab-active">
              <div class='tab-pane-destinations tab_pane'>
            <?php 
              $args =array('post_type' => 'post', 'orderby' => 'publish_date', 'order' => 'DESC');
              $loop = new WP_Query( $args );
              $i = 0;
              while( $loop->have_posts() && $i < 3 ):
                $loop->the_post();
                ?>
                <div class="archive-post-card p-10">
                  <a href='<?php echo get_permalink(); ?>' ><img src='<?php echo get_template_directory_uri() . "/images/post-card_dummy_00.jpg" ?>' width="300" alt="" class="link-image">
                  <h4 class="link-heading"><?php the_title() ?></h4></a>
                  <p><?php the_excerpt() ?></p>
                  <a href=<?php the_permalink() ?> class="link-read-more">Read more &gt;</a>
                </div>
            <?php 
                $i++;
              endwhile;
            ?>
            </div>
            </div>
            <div data-w-tab="trending_now" class="w-tab-pane">
              <div class='tab-pane-destinations tab_pane'>
            <?php 
              $args =array('post_type' => 'post');
              //$loop = new WP_Query( $args );
              $i = 0;
              while( $loop->have_posts() && $i < 3 ):
                $loop->the_post();
                ?>
                <div class="archive-post-card p-10">
                <a href=<?php the_permalink() ?>><img src='<?php echo get_template_directory_uri() . "/images/post-card_dummy_00.jpg" ?>' width="300" alt="" class="link-image">
                  <h4 class="link-heading"><?php the_title() ?></h4></a>
                  <p><?php the_excerpt() ?></p>
                  <a href=<?php the_permalink() ?> class="link-read-more">Read more &gt;</a>
                </div>
            <?php 
                $i++;
              endwhile;
            ?>
              </div>
            </div>
            <div data-w-tab="popular" class="w-tab-pane">
              <div class='tab-pane-destinations tab_pane'>
            <?php 
              $args =array('post_type' => 'post');
              //$loop = new WP_Query( $args );
              $i = 0;
              while( $loop->have_posts() && $i < 3 ):
                $loop->the_post();
                ?>
                <div class="archive-post-card p-10">
                  <a href=<?php the_permalink() ?>><img src='<?php echo get_template_directory_uri() . "/images/post-card_dummy_00.jpg" ?>' width="300" alt="" class="link-image">
                  <h4 class="link-heading"><?php the_title() ?></h4></a>s
                  <p><?php the_excerpt() ?></p>
                  <a href=<?php the_permalink() ?> class="link-read-more">Read more &gt;</a>
                </div>
            <?php 
                $i++;
              endwhile;
            ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="meet_the_team">
        <div class="html-embed-5 w-embed">
          <hr>
        </div>
      <h2>Meet the Team</h2>
        <div class="no-mp w-row">
          <div data-w-id="d042aef2-057a-b411-a606-b0c6f763d96a" class="cetered-vertical no-mp w-col w-col-4" data-ix="new-interaction">
            <div class="position-relative">
              <a href="http://localhost/vietnam_chronicles/about-us/"><img src="http://localhost/vietnam_chronicles/wp-content/uploads/2020/04/front_page.lovel_.jpeg" alt="" class="link-image image-member-left">
            </a></div>
            <a class='country-link' href="http://localhost/vietnam_chronicles/about-us/">Lovel</a>
          </div>
          <div data-w-id="d042aef2-057a-b411-a606-b0c6f763d96b" class="cetered-vertical no-mp w-col w-col-4">
            <div class="position-relative">
              <a href="http://localhost/vietnam_chronicles/about-us/"><img src="http://localhost/vietnam_chronicles/wp-content/uploads/2020/04/front_page.antonio.jpeg" alt="" class="link-image image-member-center">
            </a></div>
            <a class='country-link' href="http://localhost/vietnam_chronicles/about-us/">Antonio</a>
          </div>
          <div data-w-id="55f194f8-d976-4dc5-bbea-c2fcb6e77dbb" class="cetered-vertical no-mp w-col w-col-4">
            <div class="position-relative">
              <a href="http://localhost/vietnam_chronicles/about-us/"><img src="http://localhost/vietnam_chronicles/wp-content/uploads/2020/04/front_page.david_.jpeg" alt="" class="link-image image-member-right">
            </a></div>
            <a class='country-link' href="http://localhost/vietnam_chronicles/about-us/">David</a>
          </div>
        </div>
      </div>

      <div class="html-embed-5 w-embed">
        <hr>
      </div>
      <div class="part-container">
        <h2 class="heading-28">Join our Weekly Newsletter</h2>
        <div class="no-mp w-row part_join_newsletter">
          <div class="column-25 w-col w-col-7">
            <p>Get the latest updates on our journey, motorbike routese, travel tips and everything in between!<br>‍<br>Let&#x27;s connect and share some interasting stories and experiences to inspire more people to travel around this stunning region!<br><br>Join our FREE weekly newsletter and get personalized itineraries and motorbike routes as well as countless travel tips!</p>
          </div>
          <div class="column-17 w-col w-col-5 join_newsletter_image"><img src="<?php echo get_template_directory_uri() . "/images/newsletter.JPG" ?> width="338" srcset='<?php echo get_template_directory_uri() . "/images/newsletter-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/newsletter-p-1080.jpeg 1080w" ?>, <?php echo get_template_directory_uri() . "/images/newsletter-p-1600.jpeg" ?> 1600w, <?php echo get_template_directory_uri() . "/images/newsletter-p-2000.jpeg" ?> 2000w, <?php echo get_template_directory_uri() . "/images/newsletter-p-2600.jpeg" ?> 2600w, <?php echo get_template_directory_uri() . "/images/newsletter.JPG" ?> 2992w' sizes="(max-width: 479px) 92vw, (max-width: 767px) 47vw, (max-width: 991px) 283.3312683105469px, 338px" alt=""></div>
        </div>
      </div>
      <div class="part-container">
        <div class="no-mp w-row">
          <div class="column-25 w-col w-col-7">
            <div class="form-block w-form">
              <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2" method="GET" action="http://localhost/vietnam_chronicles/wp-json/vnc/v1/create-subscriber">
                <input type="text" class="text-field-2 w-input" maxlength="256" name="subscriber_name" data-name="Name 3" placeholder="Name" id="name-3">
                <input type="email" class="text-field-3 w-input" maxlength="256" name="subscriber_email" data-name="Email" placeholder="Email" id="email" required="">
              </form>
            </div>
          </div>
          <div class="column-17 w-col w-col-5">
            <a href="#" class="link-btn w-inline-block form-subscription">
              <div class="text-button">Join Now!</div>
            </a>
          </div>
        </div>
        <div class="success-message w-form-done newsletter-form-success">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="error-message w-form-fail newsletter-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
      </div>
      <div class="html-embed-5 w-embed">
        <hr>
      </div>
      <?php 
        require 'vendor/autoload.php';

        $json_ig_photos = file_get_contents("https://www.instagram.com/vietnamchronicles/?__a=1");
        $ig_photos_object = json_decode($json_ig_photos);
        $ig_photos_list = $ig_photos_object->graphql->user->edge_owner_to_timeline_media->edges;
        $ig_photo_urls = array();
        foreach($ig_photos_list as $item ){
          array_push( $ig_photo_urls,$item->node->display_url );
        }
      ?>

      <div class="part-container">
        <h2 class="heading-29">See our Photography</h2>
        <div class="div-block-42 ig_images_flexbox">
          <div class="div-block-43 ">
            <div class="icon-arrow w-embed ig_slider_left"><i class="fa fa-angle-left fa-3x" aria-hidden="true"></i></div>
          </div>
          <div class="no-mp align-hor w-row ig_images_flexbox">
            <div class="p-10 cetered-vertical w-col w-col-4">
              <a href="https://www.instagram.com/vietnamchronicles/"><div class="position-relative"><img src=<?php echo $ig_photo_urls[0] ?> alt="" class="link-instagram link-instagram-1">
                <div class="image-text w-embed"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></div>
              </div></a>
            </div>
            <div class="p-10 cetered-vertical w-col w-col-4">
              <a href="https://www.instagram.com/vietnamchronicles/"><div class="position-relative"><img src=<?php echo $ig_photo_urls[1] ?> alt="" class="link-instagram link-instagram-2">
                <div class="image-text w-embed"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></div>
              </div></a>
            </div>
            <div class="p-10 cetered-vertical w-col w-col-4">
            <a href="https://www.instagram.com/vietnamchronicles/"><div class="position-relative"><img src=<?php echo $ig_photo_urls[3] ?> alt="" class="link-instagram link-instagram-3">
                <div class="image-text w-embed"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></div>
              </div></a>
            </div>
          </div>
          <div class="div-block-43 ">
            <div class="icon-arrow w-embed ig_slider_right"><i class="fa fa-angle-right fa-3x" aria-hidden="true"></i></div>
          </div>
        </div>
      </div>
      <div class="ig_images_grid">
        <?php 
        $i = 0;
          foreach( $ig_photo_urls as $photo ): ?>
            <a class='ig_images_grid_item' href="https://www.instagram.com/vietnamchronicles/"><img src=<?php echo $ig_photo_urls[$i] ?> alt="" class="link-instagram link-instagram-1"></a>
          <?php
            $i++;
          endforeach;
          ?>        
  </div>
    </div>
  </div>

  <script>
    ig_image_urls = <?php echo '["' . implode('", "', $ig_photo_urls) . '"]' ?>;
  </script>
  <?php get_footer() ?>

