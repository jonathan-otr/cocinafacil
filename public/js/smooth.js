$(document).ready(function(){
  h = $('#nav').height();
  // Add smooth scrolling to all links
  $(".smooth").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top + (-h)
      }, 1000, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        // window.location.hash = hash;
      });
    } // End if
  });
});

var x = 0;
$(window).scroll(function() {
  x+=1;
  if (x>=15) {
    console.log('hola');
    if ($('#navbarSupportedContent').hasClass("show")) {
      $('#navbarSupportedContent').removeClass("show");
    }
    x=0;
  }
});
