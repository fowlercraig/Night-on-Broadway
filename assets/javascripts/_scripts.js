$(document).ready(function() {

  $('.pswp').appendTo('body'); 

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

  // Modals

  $('.popup').magnificPopup({
    type: 'inline',
    preloader: false,
    closeBtnInside: false,
    mainClass: 'mfp-fade',
    //focus: '#name',

    // When elemened is focused, some mobile browsers in some cases zoom in
    // It looks not nice, so we disable it:
    // callbacks: {
    //   beforeOpen: function() {
    //     if($(window).width() < 700) {
    //       this.st.focus = false;
    //     } else {
    //       this.st.focus = '#name';
    //     }
    //   }
    // }
  });

  // Isotope

  // var $container = $('#events-grid').imagesLoaded( function() {

  //   $container.isotope({
  //     itemSelector:   '.location',
  //     layoutMode:     'packery',
  //   });

  // }); 


});