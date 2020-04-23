  <?php get_header() ?>
  <div class="section-8 main-section main-section slider_section">
    <div class="slider-arrow left">
      <div class="icon-arrow w-embed main_slider_left"><i class="fa fa-angle-left fa-3x" aria-hidden="true"></i></div>
    </div><img src=<?php echo get_template_directory_uri() . "/images/89027829_226427551874641_2734196362684923904_n.jpg" ?> srcset='<?php echo get_template_directory_uri() . "/images/89027829_226427551874641_2734196362684923904_n.jpg" ?> 500w, <?php echo get_template_directory_uri() . "/images/89027829_226427551874641_2734196362684923904_n.jpg" ?> 800w, <?php echo get_template_directory_uri() . "/images/89027829_226427551874641_2734196362684923904_n.jpg" ?> 1080w, <?php echo get_template_directory_uri() . "/images/89027829_226427551874641_2734196362684923904_n.jpg" ?> 2048w"' sizes="(max-width: 2048px) 100vw, 2048px" alt="" class="slider-image">
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
            <a href="http://localhost/vietnam_chronicles/category/laos/"><h3 class="mt-5 mb-10 country-link">Laos</h3></a>
          </div>
          <div class="cetered-vertical w-col w-col-4"><a class="destination_image" href="http://localhost/vietnam_chronicles/category/vietnam/"><img src=<?php echo get_template_directory_uri() . "/images/vietnam.jpeg" ?> srcset='<?php echo get_template_directory_uri() . "/images/vietnam-p-1080.jpeg" ?> 1080w, <?php echo get_template_directory_uri() . "/images/vietnam-p-1600.jpeg" ?> 1600w, <?php echo get_template_directory_uri() . "/images/vietnam.jpeg" ?> 2000w' sizes="(max-width: 479px) 95vw, (max-width: 767px) 32vw, (max-width: 991px) 230.53125px, 297.6625061035156px" alt="" class="image-destination-center link-image"></a>
            <a href="http://localhost/vietnam_chronicles/category/vietnam/"><h3 class="mt-5 mb-10 country-link">Vietnam</h3></a>
          </div>
          <div class="cetered-vertical w-col w-col-4"><a class="destination_image" href="http://localhost/vietnam_chronicles/category/cambodia/"><img src=<?php echo get_template_directory_uri() . "/images/cambodia.jpeg" ?> srcset='<?php echo get_template_directory_uri() . "/images/cambodia-p-800.jpeg" ?> 800w, <?php echo get_template_directory_uri() . "/images/cambodia.jpeg" ?>  960w' sizes="(max-width: 479px) 95vw, (max-width: 767px) 32vw, (max-width: 991px) 230.53125px, 297.6625061035156px" alt="" class="image-destination-right link-image"></a>
            <a href="http://localhost/vietnam_chronicles/category/cambodia/"><h3 class="mt-5 mb-10 country-link">Cambodia</h3></a>
          </div>
        </div>
      </div>
      <div class="part-container">
        <div data-duration-in="300" data-duration-out="100" class="w-tabs">
          <div class="tabs-menu w-tab-menu">
            <a data-w-tab="Culture" class="tab w-inline-block w-tab-link w--current">
              <div>Culture</div>
            </a>
            <a data-w-tab="TravelTips" class="tab w-inline-block w-tab-link">
              <div>Travel Tips</div>
            </a>
            <a data-w-tab="Living" class="tab w-inline-block w-tab-link">
              <div>Living</div>
            </a>
            <a data-w-tab="Destinations" class="tab w-inline-block w-tab-link">
              <div>Destinations</div>
            </a>
          </div>
          <div class="w-tab-content">
            <div data-w-tab="Culture" class="tab-pane-destinations w-tab-pane w--tab-active tab_pane">
            <div class="div-block-43 ">
            <div class="icon-arrow w-embed ig_slider_left"><i class="fa fa-angle-left fa-3x" aria-hidden="true"></i></div>
          </div>  
            <div class="archive-post-card p-10">
                <img src='<?php echo get_template_directory_uri() . "/images/post-card_dummy_00.jpg" ?>' width="300" alt="" class="link-image">
                <h4 class="link-heading"><?php the_title() ?></h4>
                <p><?php the_excerpt() ?></p>
                <p class="link-read-more">Read more &gt;</p>
              </div>
              <div class="archive-post-card p-10">
                <img src='<?php echo get_template_directory_uri() . "/images/post-card_dummy_00.jpg" ?>' width="300" alt="" class="link-image">
                <h4 class="link-heading"><?php the_title() ?></h4>
                <p><?php the_excerpt() ?></p>
                <p class="link-read-more">Read more &gt;</p>
              </div>
              <div class="archive-post-card p-10">
                <img src='<?php echo get_template_directory_uri() . "/images/post-card_dummy_00.jpg" ?>' width="300" alt="" class="link-image">
                <h4 class="link-heading"><?php the_title() ?></h4>
                <p><?php the_excerpt() ?></p>
                <p class="link-read-more">Read more &gt;</p>
              </div>
              <div class="div-block-43 ">
            <div class="icon-arrow w-embed ig_slider_left"><i class="fa fa-angle-right fa-3x" aria-hidden="true"></i></div>
          </div>
            </div>
            <div data-w-tab="TravelTips" class="w-tab-pane">
              <div class="no-mp align-vertical-centre w-row">
                <div class="cetered-vertical rp-10 lp-10 w-col w-col-6"><img src=<?php echo get_template_directory_uri() . "/images/post_big_dummy.jpg" ?> width="419" srcset='<?php echo get_template_directory_uri() . "/images/post_big_dummy-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/post_big_dummy.jpg" ?> 789w' sizes="(max-width: 479px) 92vw, (max-width: 767px) 48vw, (max-width: 991px) 349px, 419px" alt="" class="link-image">
                  <h5 class="heading-5 link-heading">2 Days in Hanoi Itinerary – What to Do and Where to Stay?</h5>
                  <p>Antonio Gabric | Oct, 15, 2019</p>
                  <p>Hanoi is an immensely vibrant and busy city that features a unique local atmosphere, colorful buildings...</p>
                  <div class="div-block-15">
                    <a href="#" class="link-btn w-inline-block">
                      <div class="text-button">Read More</div>
                    </a>
                  </div>
                </div>
                <div class="cetered-vertical lp-10 w-col w-col-6">
                  <div class="div-block-16"><img src=<?php echo get_template_directory_uri() . "/images/post_small_dummy_01.jpg" ?> width="200" srcset='<?php echo get_template_directory_uri() . "/images/post_small_dummy_01-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/post_small_dummy_01-p-800.jpeg" ?> 800w, <?php echo get_template_directory_uri() . "/images/post_small_dummy_01.jpg" ?> 960w' sizes="200px" alt="" class="link-image">
                    <div class="div-block-18">
                      <h5 class="heading-5 link-heading">Prao Loop – A Magnificent Trip From Da Nang</h5>
                      <p class="paragraph-14">Antonio Gabric | Oct, 15, 2019</p>
                      <div class="div-block-17">
                        <a href="#" class="link-btn w-inline-block">
                          <div class="text-button">Read More</div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="div-block-16"><img src=<?php echo get_template_directory_uri() . "/images/post_small_dummy_02.jpg" ?> width="200" srcset='<?php echo get_template_directory_uri() . "/images/post_small_dummy_02-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/post_small_dummy_02-p-800.jpeg" ?> 800w, <?php echo get_template_directory_uri() . "/images/post_small_dummy_02.jpg" ?> 960w' sizes="200px" alt="" class="link-image">
                    <div class="div-block-18">
                      <h5 class="heading-5 link-heading">Biker&#x27;s Ultimate Guide for Ha Giang Loop</h5>
                      <p class="paragraph-14">Antonio Gabric | Oct, 15, 2019</p>
                      <div class="div-block-17">
                        <a href="#" class="link-btn w-inline-block">
                          <div class="text-button">Read More</div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="div-block-16"><img src=<?php echo get_template_directory_uri() . "/images/post_small_dummy_03.jpg" ?> width="200" srcset='<?php echo get_template_directory_uri() . "/images/post_small_dummy_03-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/post_small_dummy_03-p-800.jpeg" ?> 800w, <?php echo get_template_directory_uri() . "/images/post_small_dummy_03.jpg" ?> 960w' sizes="200px" alt="" class="link-image">
                    <div class="div-block-18">
                      <h5 class="heading-5 link-heading">All You Have to Know About Phan Rang Kitesurfing</h5>
                      <p class="paragraph-14">Antonio Gabric | Oct, 15, 2019</p>
                      <div class="div-block-17">
                        <a href="#" class="link-btn w-inline-block">
                          <div class="text-button">Read More</div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div data-w-tab="Living" class="w-tab-pane">
              <div class="no-mp align-vertical-centre w-row">
                <div class="cetered-vertical rp-10 lp-10 w-col w-col-6"><img src=<?php echo get_template_directory_uri() . "/images/post_big_dummy.jpg" ?> width="419" srcset='<?php echo get_template_directory_uri() . "/images/post_big_dummy-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/post_big_dummy.jpg" ?> 789w' sizes="(max-width: 479px) 92vw, (max-width: 767px) 48vw, (max-width: 991px) 349px, 419px" alt="" class="link-image">
                  <h5 class="heading-5 link-heading">2 Days in Hanoi Itinerary – What to Do and Where to Stay?</h5>
                  <p>Antonio Gabric | Oct, 15, 2019</p>
                  <p>Hanoi is an immensely vibrant and busy city that features a unique local atmosphere, colorful buildings...</p>
                  <div class="div-block-15">
                    <a href="#" class="link-btn w-inline-block">
                      <div class="text-button">Read More</div>
                    </a>
                  </div>
                </div>
                <div class="cetered-vertical lp-10 w-col w-col-6">
                  <div class="div-block-16"><img src=<?php echo get_template_directory_uri() . "/images/post_small_dummy_01.jpg" ?> width="200" srcset='<?php echo get_template_directory_uri() . "/images/post_small_dummy_01-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/post_small_dummy_01-p-800.jpeg" ?> 800w, <?php echo get_template_directory_uri() . "/images/post_small_dummy_01.jpg" ?> 960w' sizes="200px" alt="" class="link-image">
                    <div class="div-block-18">
                      <h5 class="heading-5 link-heading">Prao Loop – A Magnificent Trip From Da Nang</h5>
                      <p class="paragraph-14">Antonio Gabric | Oct, 15, 2019</p>
                      <div class="div-block-17">
                        <a href="#" class="link-btn w-inline-block">
                          <div class="text-button">Read More</div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="div-block-16"><img src=<?php echo get_template_directory_uri() . "/images/post_small_dummy_02.jpg" ?> width="200" srcset='<?php echo get_template_directory_uri() . "/images/post_small_dummy_02-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/post_small_dummy_02-p-800.jpeg" ?> 800w, <?php echo get_template_directory_uri() . "/images/post_small_dummy_02.jpg" ?> 960w' sizes="200px" alt="" class="link-image">
                    <div class="div-block-18">
                      <h5 class="heading-5 link-heading">Biker&#x27;s Ultimate Guide for Ha Giang Loop</h5>
                      <p class="paragraph-14">Antonio Gabric | Oct, 15, 2019</p>
                      <div class="div-block-17">
                        <a href="#" class="link-btn w-inline-block">
                          <div class="text-button">Read More</div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="div-block-16"><img src=<?php echo get_template_directory_uri() . "/images/post_small_dummy_03.jpg" ?> width="200" srcset='<?php echo get_template_directory_uri() . "/images/post_small_dummy_03-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/post_small_dummy_03-p-800.jpeg" ?> 800w, <?php echo get_template_directory_uri() . "/images/post_small_dummy_03.jpg" ?> 960w' sizes="200px" alt="" class="link-image">
                    <div class="div-block-18">
                      <h5 class="heading-5 link-heading">DARIAN je JURAJ</h5>
                      <p class="paragraph-14">Antonio Gabric | Oct, 15, 2019</p>
                      <div class="div-block-17">
                        <a href="#" class="link-btn w-inline-block">
                          <div class="text-button">Read More</div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div data-w-tab="Destinations" class="w-tab-pane">
              <div class="no-mp align-vertical-centre w-row">
                <div class="cetered-vertical rp-10 lp-10 w-col w-col-6"><img src=<?php echo get_template_directory_uri() . "/images/post_big_dummy.jpg" ?> width="419" srcset='<?php echo get_template_directory_uri() . "/images/post_big_dummy-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/post_big_dummy.jpg" ?> 789w' sizes="(max-width: 479px) 92vw, (max-width: 767px) 48vw, (max-width: 991px) 349px, 419px" alt="" class="link-image">
                  <h5 class="heading-5 link-heading">2 Days in Hanoi Itinerary – What to Do and Where to Stay?</h5>
                  <p>Antonio Gabric | Oct, 15, 2019</p>
                  <p>Hanoi is an immensely vibrant and busy city that features a unique local atmosphere, colorful buildings...</p>
                  <div class="div-block-15">
                    <a href="#" class="link-btn w-inline-block">
                      <div class="text-button">Read More</div>
                    </a>
                  </div>
                </div>
                <div class="cetered-vertical lp-10 w-col w-col-6">
                  <div class="div-block-16"><img src=<?php echo get_template_directory_uri() . "/images/post_small_dummy_01.jpg" ?> width="200" srcset='<?php echo get_template_directory_uri() . "/images/post_small_dummy_01-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/post_small_dummy_01-p-800.jpeg" ?> 800w, <?php echo get_template_directory_uri() . "/images/post_small_dummy_01.jpg" ?> 960w' sizes="200px" alt="" class="link-image">
                    <div class="div-block-18">
                      <h5 class="heading-5 link-heading">Prao Loop – A Magnificent Trip From Da Nang</h5>
                      <p class="paragraph-14">Antonio Gabric | Oct, 15, 2019</p>
                      <div class="div-block-17">
                        <a href="#" class="link-btn w-inline-block">
                          <div class="text-button">Read More</div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="div-block-16"><img src=<?php echo get_template_directory_uri() . "/images/post_small_dummy_02.jpg" ?> width="200" srcset='<?php echo get_template_directory_uri() . "/images/post_small_dummy_02-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/post_small_dummy_02-p-800.jpeg" ?> 800w, <?php echo get_template_directory_uri() . "/images/post_small_dummy_02.jpg" ?> 960w' sizes="200px" alt="" class="link-image">
                    <div class="div-block-18">
                      <h5 class="heading-5 link-heading">Biker&#x27;s Ultimate Guide for Ha Giang Loop</h5>
                      <p class="paragraph-14">Antonio Gabric | Oct, 15, 2019</p>
                      <div class="div-block-17">
                        <a href="#" class="link-btn w-inline-block">
                          <div class="text-button">Read More</div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="div-block-16"><img src=<?php echo get_template_directory_uri() . "/images/post_small_dummy_03.jpg" ?> width="200" srcset='<?php echo get_template_directory_uri() . "/images/post_small_dummy_03-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/post_small_dummy_03-p-800.jpeg" ?> 800w, <?php echo get_template_directory_uri() . "/images/post_small_dummy_03.jpg" ?> 960w' sizes="200px" alt="" class="link-image">
                    <div class="div-block-18">
                      <h5 class="heading-5 link-heading">DARIAN je JURAJ</h5>
                      <p class="paragraph-14">Antonio Gabric | Oct, 15, 2019</p>
                      <div class="div-block-17">
                        <a href="#" class="link-btn w-inline-block">
                          <div class="text-button">Read More</div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
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
              <a href="http://localhost/vietnam_chronicles/about-us/"><img src=<?php echo get_template_directory_uri() . "/images/lovel.JPG" ?> srcset='<?php echo get_template_directory_uri() . "/images/lovel-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/lovel-p-800.jpeg" ?> 800w, <?php echo get_template_directory_uri() . "/images/lovel-p-1080.jpeg" ?> 1080w, <?php echo get_template_directory_uri() . "/images/lovel-p-1600.jpeg" ?> 1600w, <?php echo get_template_directory_uri() . "/images/lovel.JPG" ?> 1772w' sizes="(max-width: 479px) 100vw, (max-width: 767px) 33vw, (max-width: 991px) 242.6687469482422px, 313.3312683105469px" alt="" class="link-image image-member-left">
            </a></div>
            <h3 class="mt-5 mb-10 link-heading">Lovel</h3>
          </div>
          <div data-w-id="d042aef2-057a-b411-a606-b0c6f763d96b" class="cetered-vertical no-mp w-col w-col-4">
            <div class="position-relative">
              <a href="http://localhost/vietnam_chronicles/about-us/"><img src=<?php echo get_template_directory_uri() . "/images/antonio.JPG" ?> srcset='<?php echo get_template_directory_uri() . "/images/antonio-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/antonio-p-800.jpeg" ?> 800w, <?php echo get_template_directory_uri() . "/images/antonio.JPG" ?> 1768' sizes="(max-width: 479px) 100vw, (max-width: 767px) 33vw, (max-width: 991px) 242.6687469482422px, 313.3312683105469px" alt="" class="image-member-center link-image"> 
            </a></div>
            <h3 class="mt-5 mb-10 link-heading">Antonio</h3>
          </div>
          <div data-w-id="55f194f8-d976-4dc5-bbea-c2fcb6e77dbb" class="cetered-vertical no-mp w-col w-col-4">
            <div class="position-relative">
              <a href="http://localhost/vietnam_chronicles/about-us/"><img src=<?php echo get_template_directory_uri() . "/images/david.JPG" ?> srcset='<?php echo get_template_directory_uri() . "/images/david-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/david-p-800.jpeg" ?> 800w, <?php echo get_template_directory_uri() . "/images/david-p-1080.jpeg" ?> 1080w, <?php echo get_template_directory_uri() . "/images/david.JPG" ?> 2605w' sizes="(max-width: 479px) 100vw, (max-width: 767px) 33vw, (max-width: 991px) 242.6687469482422px, 313.3312683105469px" alt="" class="image-member-right link-image">
            </a></div>
            <h3 class="mt-5 mb-10 link-heading">David</h3>
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
          <div class="column-17 w-col w-col-5 join_newsletter_image"><img src=<?php echo get_template_directory_uri() . "/images/newsletter.JPG" ?> width="338" srcset='<?php echo get_template_directory_uri() . "/images/newsletter-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/newsletter-p-1080.jpeg 1080w" ?>, <?php echo get_template_directory_uri() . "/images/newsletter-p-1600.jpeg" ?> 1600w, <?php echo get_template_directory_uri() . "/images/newsletter-p-2000.jpeg" ?> 2000w, <?php echo get_template_directory_uri() . "/images/newsletter-p-2600.jpeg" ?> 2600w, <?php echo get_template_directory_uri() . "/images/newsletter.JPG" ?> 2992w' sizes="(max-width: 479px) 92vw, (max-width: 767px) 47vw, (max-width: 991px) 283.3312683105469px, 338px" alt=""></div>
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

