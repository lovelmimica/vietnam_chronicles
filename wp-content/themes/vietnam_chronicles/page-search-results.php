  <?php get_header() ?>
  <div class="section-9 main-section">
    <div class="w-container ">
      <h1 class="heading-68">Search Results</h1>
      <h3 class="search-form-heading">Insert search term:</h3>
      <div class="w-row">
        <div class="w-col w-col-10">
          <div class="form-block-6 w-form">
            <form id="email-form-4" name="email-form-4" data-name="Email Form 4" class="search-form search-results-searhc-form form-search-posts" method="GET" action="http://localhost/vietnam_chronicles/search-results/">
              <input type="text" class="search-box w-input" maxlength="256" name="query" data-name="Name 3" id="input_search_query">
            </form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div class="w-col w-col-2">
          <a href="#" class="link-btn w-inline-block do-search-posts">
            <div class="text-button">SEARCH</div>
          </a>
        </div>
      </div>
      <div class="html-embed-5 w-embed">
        <hr>
      </div>
      <h4 class="search-form-heading" <?php if($_GET["query"] == "") echo "hidden"?>>Search results for: <?php echo $_GET["query"] ?></h4>
      <div class="search_result_container">
              

      </div>
      <?php 
       /* function match_query_p1($post, $query){
          $match = false;
          if( stripos( get_the_title( $post ), $query ) !== false ){
            $match = true;
          }
          return $match;
        }

        /*function match_query_p2($post, $query){
          $match = false;
          if( stripos( get_the_content( $post ), $query ) !== false ){
            $match = true;
          }

          return $match;
        }

        $posts = get_posts(array(
          'numberposts' => -1
        ));      
        $query = $_GET["query"];
        $results = json_decode(file_get_contents("http://localhost/vietnam_chronicles/wp-json/vnc/v1/search-posts?query=" . $query));
        $i = 0;

        //print_r($results); 
        //echo gettype($results);

        foreach( $results as $result_id ):
          $result = get_post( $result_id ); 
          if( $i == 0 ): ?>
            <div class="no-mp w-row">
            <?php
            elseif ( $i % 3 == 0 ): ?>
              </div><div class="no-mp w-row">
            <?php 
            endif; 
            $i++;
            ?>
          <div class="cetered-vertical w-col w-col-4">
            <div class="archive-post-card p-10">
              <img src=<?php echo get_template_directory_uri() . "/images/post-card_dummy_00.jpg" ?> width="300" alt="" class="link-image">
              <h4 class="link-heading"><?php echo get_the_title($result); ?> </h4>
              <p><?php echo get_the_excerpt($result)?></p>
              <p class="link-read-more">Read more &gt;</p>
          </div>
        </div>
        <?php
          
        endforeach;

        if( $i > 0 ) echo "</div>";
     */ ?>
      </div>
     </div>
  <?php get_footer() ?>