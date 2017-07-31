$(document).ready(function() {
$('.grid-item:nth-child(3)').clone().addClass('hidden-last').appendTo( "#project-grid" );

  $(".modal-fullscreen").on('show.bs.modal', function () {
  setTimeout( function() {
    $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
  }, 0);
});
$(".modal-fullscreen").on('hidden.bs.modal', function () {
  $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
});

$('#nav-icon1').click(function(){
    $(this).toggleClass('open');
  });

$('#myModal').on('hidden.bs.modal', function () {
    if($('#nav-icon1').hasClass('open')) {
      $('#nav-icon1').toggleClass('open');
    }
    
  });
  
  $('.main-slider').slick({
  dots: true,
    customPaging: function(slider, i) {
      // this example would render "tabs" with titles
      return '<a href="#"><span class="dot"></span></a>';
    },
  infinite: true,
  nextArrow: '<a class="next" href="#"><img src="http://nina-day.wmgdev001.com/wp-content/uploads/2017/07/next.png" alt="Next" class="img-responsive" /></i>',
  prevArrow: '<a class="prev" href="#"><img src="http://nina-day.wmgdev001.com/wp-content/uploads/2017/07/prev.png" alt="Back" class="img-responsive" /></i>',
  speed: 500,
  fade: true,
  cssEase: 'linear'
});
      

      $('.small-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  nextArrow: '<a class="next small" href="#"><img src="http://nina-day.wmgdev001.com/wp-content/uploads/2017/07/next.png" alt="Next" class="img-responsive" /></i>',
  prevArrow: '<a class="prev small" href="#"><img src="http://nina-day.wmgdev001.com/wp-content/uploads/2017/07/prev.png" alt="Back" class="img-responsive" /></i>',
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


      $(window).on('load resize', function () {
       changepos();
      });

      function changepos() {
        var toppos = ($('.main-slider .slick-active').height()/2);
        $('.main-slider  .slick-arrow').css('top',toppos+'px');
      }

  

  

});


