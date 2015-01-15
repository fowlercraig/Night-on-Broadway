$(document).ready(function() {

  // Parallax Headers

  $window = $(window);

  $('body.main').each(function(){
    var $bgobj = $(this);
    $(window).scroll(function() {
      var yPos = ($window.scrollTop() / $bgobj.data('speed')); 
      var coords = '50% '+ yPos + 'px';
      $bgobj.css({ backgroundPosition: coords });
    });
  }); 

  

  // Isotope

  // var $container = $('#events-grid').imagesLoaded( function() {

  //   $container.isotope({
  //     itemSelector:   '.location',
  //     layoutMode:     'packery',
  //   });

  // }); 


});