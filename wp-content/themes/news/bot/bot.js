jQuery(document).ready(function($){

  $('#search-btn').on('click', function () {
    $('body').addClass('display-search');
    var searchForm = $.templates("#searchForm");
    var templateContent = searchForm.render();
    $('#search-form-container').html(templateContent);
    $('#search-form-container').removeClass('hidden-node');
    setTimeout( function() {
      $('#search-form-popup').find('#search-field').focus();
    }, 250);
    $('body').css('overflow', 'hidden');
  });

  $('body').on('click', '#submit-search', function() {
    $.ajax({
      method: 'GET',
      url: 'https://newsapi.org/v2/everything?apiKey=9e70991b97784d2db757e83dd66674ba&pageSize=20&q=' + $('#search-field').val()
    }). error (function (response) {
      if (response && response.responseJSON && response.responseJSON.message) {
        $.notify(response.responseJSON.message, "warn");
      }
    })
    .success(function( response ) {
      if (response && response.articles && response.articles.length > 0) {
        var searchResults = $.templates("#searchResults");
        var templateContent = searchResults.render(response);
        var $container = $('#search-results');
        if ($container.data('masonry')) {
          $container.masonry('destroy');
          $container.removeData('masonry');
          $container.html('');
        }
        $container.html(templateContent);
        $container.removeClass('hidden-node');
        $container.imagesLoaded( function(){
          $container.masonry({
            itemSelector : '.box',
            isAnimated: true
          });
        });
      } else {
        $.notify("Sorry, we couldn't find any search results for " + $('#search-field').val(), "warn");
      }
    });
  });

  $('body').on('click', '#interest-btn', function() {
    $.ajax({
      method: 'GET',
      url: 'https://newsapi.org/v2/top-headlines?apiKey=9e70991b97784d2db757e83dd66674ba&pageSize=20&country=au'
    })
      .error (function (response) {
      if (response && response.responseJSON && response.responseJSON.message) {
        $.notify(response.responseJSON.message, "warn");
      }
    })
    .success(function( response ) {
      if (response && response.articles && response.articles.length > 0) {
        $('body').addClass('display-search');
        $('body').css('overflow', 'hidden');
        var searchResultContainer = $.templates("#interestResults");
        var searchResultContainerContent = searchResultContainer.render(response);
        $('#search-form-container').html(searchResultContainerContent).removeClass('hidden-node');
        $('#icon-cancel-btn').removeClass('hidden-node');
        var searchResults = $.templates("#searchResults");
        var templateContent = searchResults.render(response);
        var $container = $('#search-results');
        $container.html(templateContent);
        $container.removeClass('hidden-node');
        $container.imagesLoaded( function(){
          $container.masonry({
            itemSelector : '.box',
            isAnimated: true
          });
        });
      } else {
        $.notify("Sorry, we couldn't find any search results for " + $('#search-field').val(), "warn");
      }
    });
  });

  $('body').on('click', '#close-search-btn', function() {
    $('body').removeClass('display-search');
    $('body').css('overflow', 'auto');
    $('#search-form-container').html('');
    $('#search-form-container').addClass('hidden-node');
    $('#search-results').html('');
    $('#search-results').masonry('destroy');
    $('#search-results').removeData('masonry');
    $('#search-field').val('');
    $('#icon-cancel-btn').addClass('hidden-node');
  });

  $('body').on('click', '#icon-cancel-btn', function() {
    $('body').removeClass('display-search');
    $('body').css('overflow', 'auto');
    $('#search-form-container').html('');
    $('#search-form-container').addClass('hidden-node');
    $('#search-results').html('');
    $('#search-results').masonry('destroy');
    $('#search-results').removeData('masonry');
    $('#search-field').val('');
    $('#icon-cancel-btn').addClass('hidden-node');
  });

  $('body').on('click', '#word-search-btn', function() {
    var selection = window.getSelection().toString();
    $.ajax({
      method: 'GET',
      url: 'http://api.urbandictionary.com/v0/define?term=' + selection
    })
      .error (function () {
        $.notify('Oops...something went wrong, please try again after sometime.', "warn");
      })
      .success(function( response ) {
        if (response && response.list && response.list.length > 0) {
          var def = {
            word: selection,
            definition: response.list[0].definition,
            example: response.list[0].example
          }
          var tooptipContainer = $.templates("#tooptipResult");
          var tooptipContent = tooptipContainer.render(def);
          $('#word-search-btn')
            .tooltipster({interactive: true, trigger: 'custom', contentAsHTML: true, maxWidth: 500, theme: 'tooltipster-shadow', triggerClose: {
                click: true
              }})
            .tooltipster('content', tooptipContent)
            .tooltipster('open');
        } else {
          $.notify("Sorry, we couldn't find any definitions for " + selection, "warn");
        }
      });
  });

  $('body').on('click', '#fact-btn', function() {
    $.ajax({
      method: 'GET',
      url: 'https://api.chucknorris.io/jokes/random'
    })
      .error (function () {
        $.notify('Oops...something went wrong, please try again after sometime.', "warn");
      })
      .success(function( response ) {
        if (response && response.value) {
          var def = {
            icon_url: response.icon_url,
            value: response.value
          }
          var factContainer = $.templates("#factsResult");
          var factContent = factContainer.render(def);
          $('#fact-btn')
            .tooltipster({interactive: true, trigger: 'custom', contentAsHTML: true, maxWidth: 300, theme: 'tooltipster-shadow', triggerClose: {
                click: true
              }})
            .tooltipster('content', factContent)
            .tooltipster('open');
        } else {
          $.notify("Sorry, we couldn't find any facts.", "warn");
        }
      });
  });


  $('body').on('click', '#speach-btn', function() {
    if (talkify) {
      talkify.config.remoteService.host = 'https://talkify.net';
      talkify.config.remoteService.apiKey = '20959549-cb10-4086-90a7-40da2a165688';
      talkify.config.ui.audioControls = {
        enabled: false,
      };
      var player = new talkify.Html5Player().forceLanguage('en-US');
      player.playText($('#text-to-speech-content').html());
    }
  });

  $('body').on('click', '#share-widget-btn', function() {
    $('body').addClass('display-search');
    $('body').css('overflow', 'hidden');
    var shareContainer = $.templates("#share-widget");
    var shareContainerContent = shareContainer.render();
    $('#search-form-container').html(shareContainerContent).removeClass('hidden-node');
    $('#icon-cancel-btn').removeClass('hidden-node');
  });

  $('body').on('click', '#share-submit', function() {
    $('#comment').val('');
    $('#author').val('');
    $('#email').val('');
    $.notify("Email sent successfully!", "success");
  });

  $('body').on('click', '#drawer-btn', function() {
    $('body').addClass('display-search');
    $('body').css('overflow', 'hidden');
    var savedResultContainer = $.templates("#savedStoreisResult");
    var savedResultContainerContent = savedResultContainer.render();
    $('#search-form-container').html(savedResultContainerContent).removeClass('hidden-node');
    $('#icon-cancel-btn').removeClass('hidden-node');
  });

});