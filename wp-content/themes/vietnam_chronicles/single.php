  <?php get_header() ?>
    <div class="section-6 container-main main-section">
    <div class="container w-container">
      <h1 class="heading-71 mds-plr-10 centered"><?php the_title(); ?></h1>       
      <?php 
        if(get_post_meta(get_post()->ID, 'featured_image')[0]): ?>
          <div class="part-container"><img class="single_post_featured_image" src=<?php echo get_post_meta(get_post()->ID, 'featured_image')[0]; ?> srcset='<?php echo get_post_meta(get_post()->ID, 'featured_image')[0] ?> 800w, <?php echo get_post_meta(get_post()->ID, 'featured_image')[0] ?> 1278w"' sizes="100vw" alt="" class="image-6"></div>
        <?php 
        else: ?>
          <div class="part-container">
            <p><?php the_excerpt(); ?></p>
          </div>
      <?php
        endif; ?>
      <div class="div-social-share-single">
        <div class="social-share-icons">
          <a href='http://facebook.com/sharer.php?u=https://vietnamchronicles.com/about' class="html-embed-8 icon-facebook w-embed"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
          <a href='http://twitter.com/share.php?text=https://vietnamchronicles.com/about' class="html-embed-8 icon-twitter w-embed"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
          <!--<a href='' class="html-embed-8 icon-pinterest w-embed"><i class="fa fa-pinterest-p fa-2x" aria-hidden="true"></i></a>-->
        </div>
      </div>
        <?php 
          $content = wpautop(get_post()->post_content); 

          preg_match_all( '@<h2.*?>(.*?)<\/h2>@', $content, $matches );
          $tag = $matches[1];
        ?>
      <div class="table_of_contents pl-10 pr-10">
        <div class='table_of_contents-heading'>
          <h3>Table of Contents</h3>
          <i class="button_expand-content fa fa-plus fa-lg" aria-hidden="true"></i>
        </div>
        <ol class='table_of_contents-body'>
        <?php 
          foreach($tag as $heading):
            echo "<li><a class='content_link'>". strip_tags( $heading ) . "</a></li>";
          endforeach;
        ?>
        </ol>
      </div>  
      <div class="part-container single_post_content pl-10 pr-10">
        <?php 
          echo $content;
        ?>
      </div>
      <?php 
        $author_id = get_post()->post_author;
        $author_field = get_the_author_meta( 'last_name', $author_id );
      ?>
      <div class="div-block-22 post_author_section">
        <h3 class="heading-22">ABOUT THE AUTHOR</h3>
        <div class="html-embed-3 w-embed">
          <hr>
        </div>
        <div class="columns-12 w-row">
          <div class="column-12 w-col w-col-3">
            <!--<img src=<?php echo get_template_directory_uri() . "/images/antonio.JPG" ?> srcset='<?php echo get_template_directory_uri() . "/images/antonio-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/antonio-p-800.jpeg" ?> 800w, <?php echo get_template_directory_uri() . "/images/antonio.JPG" ?> 1768w' sizes="(max-width: 479px) 87vw, (max-width: 767px) 88vw, (max-width: 991px) 157px, 210px" alt="">
            -->
            <?php echo get_avatar($author_id, 180); ?>
          </div>
          <div class="w-col w-col-9">
            <a class='author_name_link' href='http://localhost/vietnam_chronicles/author/<?php echo get_the_author_meta( 'user_nicename', $author_id ); ?>'><h4 class="heading-39"><?php echo get_the_author_meta( 'first_name', $author_id ) . " " . get_the_author_meta( 'last_name', $author_id );  ?></h4></a>
            <p class="paragraph-9"><?php echo get_the_author_meta( 'description', $author_id ); ?></p>
            <a href='http://localhost/vietnam_chronicles/author/<?php echo get_the_author_meta( 'user_nicename', $author_id ); ?>' class="link-read-more author-card">Read more of this author</a>
          </div>
        </div>
      </div>
      <h3 class="heading-12">Write Comment</h3>
      <div class="part-container">
        <div class="form-block-4 w-form">
          <form id="comment-form" name="email-form-2" data-name="Email Form 2" class="form-3" method="GET" action="http://localhost/vietnam_chronicles/wp-json/vnc/v1/create-comment">
            <input type="hidden" name="comment_post_ID" value=<?php the_ID() ?> >
            <label for="name-3">Nickname</label>
            <input type="text" class="text-field-4 w-input" maxlength="256" name="comment_author" data-name="Name 3" placeholder="Name or nickname" id="name-3">
            <label for="email-3">Email Address</label>
            <input type="email" class="text-field-5 w-input" maxlength="256" name="comment_author_email" data-name="Email 3" placeholder="Email" id="email-3" required="">
            <label for="name-3">Comment</label>
            <textarea data-name="Field" maxlength="5000" id="comment_content" name="comment_content" required="" placeholder="Comment" class="textarea w-input"></textarea>
            <div class="form-footer">
              <div class="g-recaptcha" data-sitekey="6LfeHx4UAAAAAAKUx5rO5nfKMtc9-syDTdFLftnm"></div>
                <a href="#" class="link-btn w-inline-block comment-form-submit">
                  <div class="text-button">Send</div>
                </a>
            </div>
          </form>
          <div class="success-message-3 w-form-done comment-form-success">
            <div>Thank you! Your comment has been sent!</div>
          </div>
          <div class="error-message-3 w-form-fail comment-form-fail">
            <div>Oops! Something went wrong while submitting the comment.</div>
          </div>
        </div>
      </div>
      <div class="html-embed-5 w-embed">
        <hr>
      </div>
      <?php 
        //$args = array( 'post_id' => get_the_ID() );
        $comments = get_approved_comments( get_the_ID() );
      ?>
      <h3 class="heading-12"><?php if($comments) echo count( $comments ) . " comments"; else echo "No comments so far" ?></h3>
      
      <?php
        foreach( $comments as $comment ):
          /*print_r( $comment );
          print_r( $comment->comment_author );
          print_r( $comment->comment_author_email );
          print_r( $comment->comment_date );
          print_r( $comment->comment_content );
          print_r( $comment->comment_parent );
          echo "<br><br>";*/
          if( $comment->comment_parent == 0):
          ?>
        <div class="part-container">
        <div class="no-mp w-row">
          <div class="p-10 w-col w-col-9">
            <h4 class="align-left link-heading"><?php echo $comment->comment_author ?></h4>
            <!--<p class="paragraph-16"><?php echo $comment->comment_date; ?></p>-->
            <p class="paragraph-16"><?php echo $comment->comment_content; ?> </p>
          </div>
        </div>
      </div>
        <?php        
          foreach( $comments as $reply ):
            if( $reply->comment_parent == $comment->comment_ID ): 
              ?>
              <div class="part-container comment-reply">
                <div class="no-mp w-row">
                  <div class="p-10 w-col w-col-3 comment-reply-avatar-box">
                    <?php echo get_avatar( $reply->comment_author_email, 100); ?>
                  </div>
                  <div class="p-10 w-col w-col-9">
                    <h4 class="align-left link-heading">Reply from <?php echo $reply->comment_author ?></h4>
                    <!--<p class="paragraph-16"><?php echo $reply->comment_date; ?></p>-->
                    <p class="paragraph-16"><?php echo $reply->comment_content; ?> </p>
                  </div>
                </div>
              </div>
            <?php
            endif;
          endforeach;
        endif;
        endforeach;        
      ?>     

      <div class="html-embed-5 w-embed">
        <hr>
      </div>

      <?php
        /*$related_posts = get_posts(array('category' => get_the_category(get_post())[0]->name));
        while( count( $related_posts ) < 3 ): 
          $all_posts = get_posts();
          foreach( $all_posts as $post ): 
            if( in_array( $post, $related_posts ) == false ):
              array_push( $related_posts, $post );
            endif;
          endforeach;
        endwhile;*/
      ?>

      <h3 class="heading-12">Related Posts</h3>
      <?php //print_r( $related_posts[0] ) ?> 
      <!--<div class="no-mp w-row">
          <div class="archive-post-card p-10"><img src=<?php echo get_template_directory_uri() . "/images/post-card_dummy_00.jpg" ?> width="300" alt="">
            <h4 class="heading-64"><?php echo $related_posts[0]->post_title ?></h4>
            <p><?php echo $related_posts[0]->post_excerpt ?></p>
            <p class="link-read-more">Read more &gt;</p>
          </div>
          <div class="archive-post-card p-10"><img src=<?php echo get_template_directory_uri() . "/images/post-card_dummy_02.jpg" ?> width="300" srcset='<?php echo get_template_directory_uri() . "/images/post-card_dummy_02-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/post-card_dummy_02-p-800.jpeg" ?> 800w, <?php echo get_template_directory_uri() . "/images/post-card_dummy_02.jpg" ?> 960w' sizes="(max-width: 479px) 92vw, (max-width: 767px) 29vw, (max-width: 991px) 222.671875px, 293.328125px" alt="">
            <h4 class="heading-65"><?php echo $related_posts[1]->post_title ?></h4>
            <p><?php echo $related_posts[1]->post_excerpt ?></p>
            <p class="link-read-more">Read more &gt;</p>
          </div>
          <div class="archive-post-card p-10"><img src=<?php echo get_template_directory_uri() . "/images/post-card_dummy_01.jpg" ?> width="300" srcset='<?php echo get_template_directory_uri() . "/images/post-card_dummy_01-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/post-card_dummy_01-p-1080.jpeg" ?> 1080w, <?php echo get_template_directory_uri() . "/images/post-card_dummy_01.jpg" ?> 1097w' sizes="(max-width: 479px) 92vw, (max-width: 767px) 29vw, (max-width: 991px) 222.671875px, 293.328125px" alt="">
            <h4 class="heading-66"><?php echo $related_posts[2]->post_title ?></h4>
            <p><?php echo $related_posts[2]->post_excerpt ?></p>
            <p class="link-read-more">Read more &gt;</p>
          </div>
      </div>-->
    </div>
  </div>
  <div data-w-id="eb73c041-6ea5-c96a-d171-564be81b92c3" class="div-to-top">
    <div class="icon-to-top w-embed"><i class="fa fa-chevron-circle-up fa-4x button-to-top" aria-hidden="true"></i></div>
  </div>
  <?php get_footer() ?>