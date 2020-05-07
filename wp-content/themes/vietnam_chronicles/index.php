<h2>INDEX.PHP</h2>
<?php
    $content = file("http://localhost/vietnam_chronicles/wp-content/themes/vietnam_chronicles/csv_import/test_sample.txt");

    foreach($content as $line){
        $post = new stdClass();

        $values = explode("\\", $line);
        
        $post->title = $values[1];
        $post->categories = $values[2];
        $post->tags = $values[3];
        $post->author = $values[4];
        $post->featured_image = $values[5];
        $post->date = $values[6];
        $post->content = $values[7];
        $post->excerpt = $values[8];

        $postarr = array(
            'post_author' => get_user_by('email', $post->author)->ID,
            'post_date' => $post->date,
            'post_content' => strval($post->content),
            'post_title' => $post->title,
            'post_excerpt' => $post->excerpt,
            'meta_input' => array(
                'featured_image' => $post->featured_image
            )
        );
        wp_insert_post( $postarr ); 

        echo "<h1>Insertan novi post " . $post->title . "</h1>";
    }
?>