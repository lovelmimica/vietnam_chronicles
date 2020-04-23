window.onload = function(){

    jQuery(".postcard-card").on("click", function(){
        var id = jQuery(this).find(".postcard-container").attr("data-postcard-id");
        var title = jQuery(this).find(".link-heading").text();
        var img_src = jQuery(this).find("img").attr("src");
        var img_srcset = jQuery(this).find("img").attr("srcset");
        var content = jQuery(this).find(".postcard-content p").text();
        var postcard_parts = jQuery(this).find(".postcard-parts").text();

        jQuery(".postcard-modal .postcard-title").text(title);
        jQuery(".postcard-modal img").attr("src", img_src);
        jQuery(".postcard-modal img").attr("srcset", img_srcset);
        jQuery(".postcard-modal .modal-postcard-content").text(content);
        jQuery(".postcard-modal .modal-postcard-parts").text(postcard_parts);        
    });
    //try to use promises in form submiting
    
    jQuery(".do-search-posts").on("click", function(){
        jQuery(".form-search-posts").ajaxSubmit();
    });

    jQuery(".join-newsletter").on("click", function(){
        input_email = jQuery("#email-form #name-2").val();
        if(input_email.includes("@")){
            jQuery("#email-form").ajaxSubmit();
            jQuery("#email-form")[0].reset();

            jQuery(".footer-form-success").css("display", "block");
            jQuery(".footer-form-fail").css("display", "none");
        }else{
            jQuery(".footer-form-fail").css("display", "block");
            jQuery(".footer-form-success").css("display", "none");
        }
    });

    jQuery(".form-subscription").on("click", function(){
        input_email = jQuery("#email").val();
        if(input_email.includes("@")){
            jQuery("#email-form-2").ajaxSubmit();
            jQuery("#email-form-2")[0].reset();

            jQuery(".newsletter-form-success").css("display", "block");
            jQuery(".newsletter-form-fail").css("display", "none");
        }else{
            jQuery(".newsletter-form-fail").css("display", "block");
            jQuery(".newsletter-form-success").css("display", "none");
        }       
    });

    jQuery(".comment-form-submit").on('click', function(){
        input_email = jQuery("#email-3").val();

        if(input_email.includes("@")){
            jQuery("#comment-form").ajaxSubmit();
            jQuery("#comment-form")[0].reset();

            jQuery(".comment-form-success").css("display", "block");
            jQuery(".comment-form-fail").css("display", "none");
        }else{
            jQuery(".comment-form-fail").css("display", "block");
            jQuery(".comment-form-success").css("display", "none");
        }
    });

    jQuery(".contact-us-submit").on("click", function(){
 
        input_email = jQuery("#contact_us_email").val();
        console.log("klik 2");

        if(input_email.includes("@")){
            console.log("klik");
            jQuery("#contact-us-form").ajaxSubmit();
            jQuery("#contact-us-form")[0].reset();

            jQuery(".contact-us-success").css("display", "block");
            jQuery(".contact-us-fail").css("display", "none");
        }else{
            jQuery(".contact-us-fail").css("display", "block");
            jQuery(".contact-us-success").css("display", "none");
        }
    });

    search_results = new Array();

    function present_results(search_results, query){
        jQuery(".search_result_container").empty();
        for(i = 0; i < search_results.length; i++){
            jQuery(".search_result_container").append(`<div class="cetered-vertical w-col w-col-4">
            <div class="archive-post-card p-10 search_result_post_card">
              <img src="http://localhost/vietnam_chronicles/wp-content/themes/vietnam_chronicles/images/post-card_dummy_00.jpg" width="300" alt="" class="link-image">
              <h4 class="link-heading">${search_results[i].title}</h4>
              <p>${search_results[i].excerpt}</p>
              <p class="link-read-more">Read more &gt;</p>
            </div>`);
        }
        jQuery(".search_results_heading").text("Search resutlts for: " + query);            
     }

    if(document.title == "» Search Results"){
        urlParams = new this.URLSearchParams(window.location.search);
        query = urlParams.get('query');

        jQuery.ajax({
            url: "http://localhost/vietnam_chronicles/wp-json/vnc/v1/search-posts?query=" + query,       
        }).done(function(res){
            search_results = res;
            present_results(search_results, query);
        });
    } 
    jQuery('#input_search_query').on('input', function(){
        let query = jQuery(this).val();
        if( query.length >= 3 ) {

            jQuery.ajax({
                url: "http://localhost/vietnam_chronicles/wp-json/vnc/v1/search-posts?query=" + query,       
            }).done(function(res){
                search_results = res;
                present_results(search_results, query);
            });
        }
    });

    if(document.title == "Vietnam Chronicles"){
        jQuery(".main_slider_left").on("click", function(){
            console.log("Main slider goes left");
            //TODO
          });
  
          jQuery(".main_slider_right").on("click", function(){
            console.log("Main slider goes right");
            //TODO
          });
  
          jQuery(".ig_slider_left").on("click", function(){
            console.log("IG slider goes left");
            ig_image_urls.push(ig_image_urls.shift());
            jQuery(".link-instagram-1").attr("src", ig_image_urls[5]);
            jQuery(".link-instagram-2").attr("src", ig_image_urls[6]);
            jQuery(".link-instagram-3").attr("src", ig_image_urls[7]);
            
            });
  
          jQuery(".ig_slider_right").on("click", function(){
            console.log("IG slider goes right");
            ig_image_urls.unshift(ig_image_urls.pop());
            jQuery(".link-instagram-1").attr("src", ig_image_urls[5]);
            jQuery(".link-instagram-2").attr("src", ig_image_urls[6]);
            jQuery(".link-instagram-3").attr("src", ig_image_urls[7]);
          });

          this.setInterval(function(){
              console.log("Changing main slider image");
          }, 3000);
    }

    if(jQuery("meta[name='single'").attr("content")){
        console.log("Single post is loaded");
        jQuery(window).scroll(function(){
            if(jQuery(window).scrollTop() > 300) {
                console.log("Showing to top button");
                jQuery(".div-to-top").css("opacity", 100);
            }else{
                console.log("Hiding to top button");
                jQuery(".div-to-top").css("opacity", 0);
            }
        });

        jQuery(".button-to-top").on("click", function(){
            //jQuery('.body ').scrollTop();
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        });
    }

    jQuery(".vnc-navigtion-btn").on("click", function(){
        jQuery(".navigation-menu").toggle();
    });

    jQuery("body").on("click", function(){
        if( jQuery(".vnc-navigtion-btn").hasClass("w--open") ){
            jQuery(".navigation-menu").hide();
        };

        jQuery(".navigation-submenu-vietnam").css("display", "none");
        jQuery(".navigation-subsubmenu-destinations").css("display", "none");
    });

    jQuery(".expandable-item-vietnam").hover(function(){
        jQuery(".navigation-submenu-vietnam").css("display", "flex");
    });

    jQuery(".expandable-item-destinations").hover(function(){
        jQuery(".navigation-subsubmenu-destinations").css("display", "flex");
    });

    jQuery(".main-section").mouseenter(function(){
        jQuery(".navigation-submenu-vietnam").css("display", "none");
        jQuery(".navigation-subsubmenu-destinations").css("display", "none");
    });

    jQuery(".expand-mobile-menu-vietnam").on('click', function(){
        jQuery(".menu-subitem").toggleClass("hidden");
    });

    jQuery(".expand-mobile-menu-vietnam-dest").on('click', function(){
        jQuery(".menu-subsubitem").toggleClass("hidden");
    });

    jQuery(".header_item-menu_icon").on('click', function(){
        jQuery(".mobile-navigation-menu").toggleClass("hidden");
    });

}