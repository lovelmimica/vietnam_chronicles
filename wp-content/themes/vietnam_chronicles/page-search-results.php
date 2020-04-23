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
      <h4 class="search-form-heading search_results_heading" <?php if($_GET["query"] == "") echo "hidden"?>>Search results for: <?php echo $_GET["query"] ?></h4>
      <div class="search_result_container">
              

      </div>
      </div>
     </div>
  <?php get_footer() ?>