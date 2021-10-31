$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $('#navbar').removeClass('fixed-top');
  } else {
    $('#navbar').addClass('fixed-top');
  }
});

$(document).ready(function () {
  $('.slider').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }

    ]
  });
})

$(document).ready(function () {
$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
})
})

$(document).ready(function () {
$('.slider-nav').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  // asNavFor: '.slider-for',
  autoplay: true,
  dots: false,
  arrows: true,
  prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
  nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
  centerMode: true,
  focusOnSelect: true,
  centerPadding: 0,
  responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true
      }
    }]
})
})

function changeImage(image){
  document.getElementById('main-img').src = image;
}