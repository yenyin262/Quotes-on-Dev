$(function () {
 $("#quote-button").on("click", function(event) {
    event.preventDefault();
    
    $.ajax({
      method: "GET",
      url: pro_quotes.rest_url + "wp/v2/posts?filter[orderby]=rand&[posts_per_page]=1", 
    
      beforeSend: function(xhr) {
        xhr.setRequestHeader("X-WP-Nonce", pro_quotes.wpapi_nonce);
      }
    }).done(function(data) {
         console.log(data[0]);
        $(".quotesbyauthor").html(data[0].content.rendered);
      $(".author_dev").html(data[0].title.rendered);
    });
    });

});