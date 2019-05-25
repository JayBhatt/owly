<div id="search-form-container" class="search-form-container hidden-node"></div>
<script id="searchForm" type="text/x-jsrender">
    <div class="search-form">
        <input id="search-field" type="search" class="search-field" value="" name="s"
               title="<?php esc_attr_e( 'Search', 'mission-news' ); ?>" placeholder="<?php esc_attr_e( ' Search for...', 'mission-news' ); ?>" />
        <button id="submit-search" type="button" class="search-submit">
            <i class="fas fa-search"></i>
        </button>
        <button type="button" id="close-search-btn" class="search-submit">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div id="search-results" class="search-results hidden-node"></div>
</script>

<script id="interestResults" type="text/x-jsrender">
    <div id="search-results" class="search-results" style="margin-top: 0px;"></div>
</script>

<script id="searchResults" type="text/x-jsrender">
  {{for articles}}
       <div class="box">
           <span class="search-result-title">
              <a href="{{>url}}" target="_blank">{{>title}}</a>
           </span>
           <span class="search-result-image">
               {{if urlToImage}}
                  <img src="{{:urlToImage}}" width="200" height="150" />
               {{else}}
                  <img src="https://via.placeholder.com/200" width="200" height="150" />
               {{/if}}
           </span>
           <span class="search-result-description">
                {{>description}}
           </span>
       </div>
  {{/for}}
</script>

<script id="tooptipResult" type="text/x-jsrender">
  <div class="tooltip-container-content">
      <h1>Word: {{>word}}</h1>
      <p>Definition: {{>definition}}</p>
      <p>Example: {{>example}}</p>
  </div>
</script>