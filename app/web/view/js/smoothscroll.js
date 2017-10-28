$(document).ready(function(){

  // Add smooth scrolling to all links in navbar + footer link
  (".navbar a, footer a[href='#topPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;
      var winTop = $(window).scrollTop();
      if (pos < winTop + 600) {
        $(this).addClass("slide");
      }
    });
  });

})
$(document).on("click",".yamm .dropdown-menu",function(e){e.stopPropagation()})
$(window).on("load resize scroll",function()
{return $(window).width()<1270?($(".scrollup").hide(),!1):void($(this).scrollTop()>100?$(".scrollup").fadeIn():$(".scrollup").fadeOut());})
