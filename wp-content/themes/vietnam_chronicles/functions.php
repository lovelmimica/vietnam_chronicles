<?php
    function add_theme_style(){
        wp_enqueue_style('normalize', get_template_directory_uri() . "/style/normalize.css");
        wp_enqueue_style('webflow', get_template_directory_uri() . "/style/webflow.css");
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    add_action( 'wp_enqueue_scripts', 'add_theme_style' );

    /*function add_theme_scripts(){
        wp_enqueue_script('webflow', get_template_directory_uri() . "/scripts/webflow.js");
    }

    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );*/

    function add_custom_post_types(){
        register_post_type('postcard', array(
            'label' => 'Postcards',
            'public' => true,
            'menu_icon' => 'dashicons-format-gallery',
            'has_archive' => true
        ));

        register_post_type('message', array(
            'label' => 'Messages',
            'public' => true,
            'menu_icon' => 'dashicons-email-alt',
            'has_archive' => true
        ));

        register_post_type('subscriber', array(
            'label' => 'Subscribers',
            'public' => true,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'has_archive' => true
        ));
    }


    add_action( 'init', 'add_custom_post_types' );

    function create_message( WP_REST_Request $request ){
        $title = $request["sender_name"];
        $email = $request["sender_email"];
        $subject = $request["msg_subject"];
        $content = $request["msg_content"];

        $args = array(
            'post_type' => 'message',
            'post_title' => "Message from " . $email,
            'post_content' => $content,
            'post_status'  => 'publish',
            'meta_input' => array(
              'name' => $title,
              'email' => $email,
              'subject' => $subject
            )
        );
    
        $id = wp_insert_post($args);

        return $id;
    }

    function create_subscriber( WP_REST_Request $request ){
        $email = $request["subscriber_email"];
        if( $request["subscriber_name"] ) $name = $request["subscriber_name"];
        else $name = $email;
        
        $args = array(
            'post_type' => 'subscriber',
            'post_title' => "Subscriber " . $email,
            'post_status'  => 'publish',
            'meta_input' => array(
              'email' => $email,
              'name' => $name
            )
        );
    
        $id = wp_insert_post($args);
        return $id;
    }

    function create_comment( WP_REST_Request $request ){
        $comment_author = $request["comment_author"];
        $comment_author_email = $request["comment_author_email"];
        $comment_content = $request["comment_content"];
        $comment_post_ID = $request["comment_post_ID"];

        $args = array(
            "comment_author" => $comment_author,
            "comment_author_email" => $comment_author_email,
            "comment_content" => $comment_content,
            "comment_post_ID" => $comment_post_ID
        );

        $id =  wp_insert_comment( $args );

        print_r( get_comments() );

        return $id;
    }

    function search_posts( WP_REST_Request $request ){
        $results = array();
        $secondary_results = array();
        $query = $request["query"];
        /*$posts = get_posts(array(
            'numberposts' => -1
          ));

        foreach( $posts as $post ): 
        if( stripos( get_the_title( $post ), $query ) !== false ):
                //print_r($post->ID);
                //echo get_the_title( $post ) . " " . $query . " " . $post->the_ID . "<br>";
                array_push( $results, $post->ID);
            endif;
        endforeach;
        */

        $wp_query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            's' => $query
        ));

        while( $wp_query->have_posts()):
            $wp_query->the_post();
            $result_item = new stdClass();
            $result_item->ID = get_the_ID( $wp_query->get_post() );
            $result_item->excerpt = get_the_excerpt( $wp_query->get_post() );
            $result_item->permalink = get_permalink( $wp_query->get_post() );
            $result_item->title = get_the_title( $wp_query->get_post() );

            if( stripos( get_the_title( $post ), $query ) !== false ): 
                array_push( $results, $result_item);
            else: 
                array_push( $secondary_results, $result_item );
            endif;
        endwhile;
        
        $results = array_merge($results, $secondary_results);

        return $results;
    }

    function register_routes(){
        $args = array(
            'method' => 'POST',
            'callback' => 'create_message',
        );
        register_rest_route('vnc/v1', '/create-message', $args);
        
        $args = array(
            'method' => 'POST',
            'callback' => 'create_subscriber',
        );
        register_rest_route('vnc/v1', '/create-subscriber', $args);

        $args = array(
            'method' => 'POST',
            'callback' => 'create_comment',
        );
        register_rest_route('vnc/v1', '/create-comment', $args);

        $args = array(
            'method' => 'GET',
            'callback' => 'search_posts'
        );

        register_rest_route('vnc/v1', '/search-posts', $args);


    }

    add_action('rest_api_init', 'register_routes');

?>