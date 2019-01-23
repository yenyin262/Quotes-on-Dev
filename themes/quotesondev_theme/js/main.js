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
      console.log(data);
      $(".quotesbyauthor").html(data[0].content.rendered);
      $(".author_dev").html('- ' + data[0].title.rendered);

    // }).done(function (data) {
      const url = data[0]._qod_quote_source_url;
      const source =   data[0]._qod_quote_source;

      if (url) {
        console.log('in url');
        $(".source").html (`, <a class="sourceLink" href=${url}>${source}</a></span >`); 
      }else if (source) {
        console.log('in source');
        $(".source").html(`, <span class="source">${source}</span>`);
      } else {
        console.log('in else');
        $(".source").html('');
        // $(".author_dev").html('- ' + data[0].title.rendered);
      }

      history.pushState(null, null, "/Project_5/" + data[0].slug);

    }).fail(function (err) {
      alert("Unable to collect data");
    });
  });


 

  
  
    $("#submitButton").on("click", function(event) {
      event.preventDefault();

       $.ajax({
         method: "POST",
         url: pro_quotes.rest_url + "wp/v2/posts", 

        beforeSend: function(xhr) {
           xhr.setRequestHeader("X-WP-Nonce", pro_quotes.wpapi_nonce);
     }, 
  data: {
  title: $('#author-name').val(),
  content:$('#newQuote').val(),
  _qod_quote_source:$('#findQuote').val(),
  _qod_quote_source_url: $('#quoteSource').val(),
  post_status: "draft"}
  }).done(function (data) {
    alert("Quote sucessfully submitted to database");
    console.log('done!')
  });




  });
});

  //      // success: function ( data ) 
 
  //      // $(".quotesbyauthor").html(data[0].content.rendered);
  //      // $(".author_dev").html('- ' + data[0].title.rendered);

  //    //   history.pushState(null, null, "/Project_5/" + data[0].slug);
  //   //  });
  //    // });
  //   }).fail(function (err) {
  //     throw err;
  // });










