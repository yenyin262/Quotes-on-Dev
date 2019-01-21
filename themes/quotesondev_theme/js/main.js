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
      console.log(data);
      $(".quotesbyauthor").html(data[0].content.rendered);
      $(".author_dev").html('- ' + data[0].title.rendered);

      history.pushState(null, null, "/Project_5/" + data[0].slug);
    });
    });


  
    $("#submitButton").on("click", function(event) {
      event.preventDefault();
      
      $.ajax({
        method: "POST",
        url: pro_quotes.rest_url + "wp/v2/posts?filter/wp-json/wp/v2/posts", 
      
        beforeSend: function(xhr) {
          xhr.setRequestHeader("X-WP-Nonce", pro_quotes.wpapi_nonce);
        }
      }).done(function(data) {
        console.log(data);
        $(".quotesbyauthor").html(data[0].content.rendered);
        $(".author_dev").html('- ' + data[0].title.rendered);
  
        history.pushState(null, null, "/Project_5/" + data[0].slug);
      });
      });
  
  
    

    // $('.showMeAnotherButton').on("change",  (event)  => {
    //   $('.showMeAnotherButton').css({
        
    //       'color': '#00cc00',
    //       'border': 'solid 2px #00cc00',
    //       'font-size': '16px',
    //       'font-weight': '700',
    //       'padding': '12px 37px',
    //       'background-color': '#222222',
    //       'box-shadow': 'none',
    //       'text-shadow': 'none',
    //       'display': 'block',
        
    //   });
        
    //   });

  


});



