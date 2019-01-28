$(function () {
  $("#quote-button").on("click", function (event) {
    event.preventDefault();

    $.ajax({
      method: "GET",
      url: pro_quotes.rest_url + "wp/v2/posts?filter[orderby]=rand&[posts_per_page]=1",

      beforeSend: function (xhr) {
        xhr.setRequestHeader("X-WP-Nonce", pro_quotes.wpapi_nonce);
      }
    }).done(function (data) {

      $("#authorQuote").html(data[0].content.rendered);
      $("#authorDev").html('- ' + data[0].title.rendered);


      const sourceUrl = data[0]._qod_quote_source_url;
      const source = data[0]._qod_quote_source;

      if (sourceUrl) {

        $(".source").html(`, <a class="sourceLink" href=${sourceUrl}>${source}</a></span >`);
      } else if (source) {

        $(".source").html(`, <span class="source">${source}</span>`);
      } else {

        $(".source").html('');
      }

      history.pushState(null, null, "/Project_5/" + data[0].slug);

    }).fail(function (err) {
      alert("Unable to collect data");
    });
  });



  const author = $('#author-name');
  const quote = $('#newQuote');
  const findQuote = $('#findQuote');
  const quoteSource = $('#quoteSource');

  $("#submitButton").on("click", function (event) {
    event.preventDefault();

    $.ajax({
      method: "POST",
      url: pro_quotes.rest_url + "wp/v2/posts",

      beforeSend: function (xhr) {
        xhr.setRequestHeader("X-WP-Nonce", pro_quotes.wpapi_nonce);
      },
      data: {
        title: author.val(),
        content: quote.val(),
        _qod_quote_source: findQuote.val(),
        _qod_quote_source_url: quoteSource.val(),
        post_status: "draft"
      }
    }).done(function (data) {
      alert("Quote sucessfully submitted to database");
      $("#quote-form")[0].reset();
     
    }).fail(function (err) {
     
      alert("Quote submission unsuccessful");
    });



  });
});













