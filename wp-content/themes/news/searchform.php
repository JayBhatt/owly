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

<script id="factsResult" type="text/x-jsrender">
  <div class="tooltip-container-content">
      <p>{{>value}}</p>
  </div>
</script>

<script id="share-widget" type="text/x-jsrender">
<div class="share-widget-container-content">
    <section id="comments" class="comments">
        <div class="comments-number">
            <h2 style="text-align: center;">Email it to a friend</h2>
        </div>
        <div id="respond" class="comment-respond">
                <p class="comment-form-comment">
                    <label for="comment">Message*</label>
                    <textarea required="" id="comment" name="comment" cols="45" rows="3" aria-required="true"></textarea>
                </p>
                <p class="comment-form-author">
                    <label for="author">Name*</label>
                    <input id="author" name="author" type="text" placeholder="Jane Doe" value="" size="30" aria-required="'true'">
                </p>
                <p class="comment-form-email">
                    <label for="email">Friends Email*</label>
                    <input id="email" name="email" type="email" placeholder="name@email.com" value="" size="30" aria-required="'true'">
                </p>
                <p class="form-submit">
                    <input name="submit" type="submit" id="share-submit" class="submit" value="Post Comment">
                </p>
        </div>
    </section>
    <section id="comments" class="comments">
        <div class="comments-number">
            <h2 style="text-align: center;">or share</h2>
        </div>
        <iframe src="http://localhost/share.html" width="100%" frameborder="0"></iframe>
    </section>
</div>
</script>

<script id="savedStoreisResult" type="text/x-jsrender">
  <div class="saved-story-container-content">
   <section id="comments" class="comments">
        <div class="comments-number">
            <h2 style="text-align: center;">Saved/Recently viewed stories</h2>
        </div>
      <table style="margin: 0 auto;">
        <tr>
            <td>
                Henry Hammond charged over Courtney Herron’s death
            </td>
            <td>
                <a href="http://news.localhost.com/2019/05/27/henry-hammond-charged-over-courtney-herrons-death/?scroll=800" target="_blank" data-post="1">Continue Reading</a>
            </td>
        </tr>
        <tr>
            <td>
                Verizon Selling iPads
            </td>
            <td>
                <a href="http://news.localhost.com/2010/11/26/verizon-selling-ipads/?scroll=300" target="_blank" data-post="2">Continue Reading</a>
            </td>
        </tr>
        <tr>
            <td>
                Hello world!
            </td>
            <td>
                <a href="http://news.localhost.com/2019/05/25/hello-world/" target="_blank">Pinned on 27th May, 2019</a>
            </td>
        </tr>

        <tr>
            <td>
                Apple Opens Store in China
            </td>
            <td>
                <a href="http://news.localhost.com/2010/11/16/apple-opens-store-in-china/" target="_blank" data-post="2">Saved on 22nd May, 2019</a>
            </td>
        </tr>
        <tr>
            <td>
                Prime Minister and Bloomberg
            </td>
            <td>
                <a href="http://news.localhost.com/2010/11/15/prime-minister-and-bloomberg-eat-a-hot-dog/" target="_blank">Saved on 21st March, 2017</a>
            </td>
        </tr>
      </table>
      </section>
  </div>
</script>
