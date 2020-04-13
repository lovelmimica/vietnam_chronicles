  <?php get_header() ?>
  <div class="container-5 w-container container-main main-section">
    <div class="part-container"><img src=<?php echo get_template_directory_uri() . "/images/dummy_2.jpg" ?> srcset='<?php echo get_template_directory_uri() . "/images/dummy_2-p-500.jpeg" ?> 500w, <?php echo get_template_directory_uri() . "/images/dummy_2-p-1080.jpeg" ?> 1080w, <?php echo get_template_directory_uri() . "/images/dummy_2.jpg" ?> 1275w' sizes="(max-width: 767px) 95vw, (max-width: 991px) 728px, 940px" alt="" class="image-11">
      <h3 class="heading-41"><?php the_title() ?></h3>
      <p><?php echo get_post()->post_content ?></p>
      <h5 class="heading-63">Pictures From Top Clockwise:</h5>
      <p class="list-3">
        <?php echo get_post_custom()['postcard_parts'][0]  ?>
      </p>
    </div>
  </div>
  <?php get_footer() ?>