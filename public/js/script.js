// $(".slider").owlCarousel({
//   center: true,
//   dots: true,
//   loop: true,
//   margin: 20,
//   rtl: $("html").attr("lang") == "ar" ? true : false,
//   stagePadding: 150,
//   responsive:{
//     0:{
//         items:1,
//         stagePadding: 20,
//     },
//     600:{
//         items:2
//     }
//   }
// });
$(".slider1").owlCarousel({
  center: true,
  dots: true,
  loop: true,
  autoplay: true,
  autoplayTimeout: 1000,
  autoplayHoverPause: true,
  margin: 20,
  rtl: $("html").attr("lang") == "ar" ? true : false,
  stagePadding: 150,
  responsive:{
    0:{
        items:3,
        stagePadding: 20,
    },
    600:{
        items:3,
        stagePadding: 50,
    },
    1000:{
        items:5
    }
  }
});
function scrollValue() {
  var navbar = document.getElementsByClassName("main-header");
  var scroll = window.scrollY;
  if (scroll < 200) {
    navbar[0].classList.remove("BgColour");
  } else {
    navbar[0].classList.add("BgColour");
  }
}

window.addEventListener("scroll", scrollValue);

$("#delivery-type").change(function () {
  if ($("#delivery-type").val() == "شراء بتوصيل") {
    $(".delivery").removeClass("d-none");
    $(".no-delivery").addClass("d-none");
  } else {
    $(".delivery").addClass("d-none");
    $(".no-delivery").removeClass("d-none");
  }
});


var counted = 0;
$(window).scroll(function() {

  if($('#numbers').length > 0) {
    var oTop = $('#numbers').offset().top - window.innerHeight;
    if (counted == 0 && $(window).scrollTop() > oTop) {
      $('.count').each(function() {
        var $this = $(this),
          countTo = $this.attr('data-count');
        $({
          countNum: $this.text()
        }).animate({
            countNum: countTo
          },
  
          {
  
            duration: 3000,
            easing: 'swing',
            step: function() {
              $this.text(Math.floor(this.countNum));
            },
            complete: function() {
              $this.text(this.countNum);
              //alert('finished');
            }
  
          });
      });
      counted = 1;
    }
  }
  

});

let open_menu = document.querySelector('.menu-open')
let open_close = document.querySelector('.menu-close')
let menu = document.querySelector('.mobile-menu .menu-wrapper')

open_menu.onclick = () => menu.classList.toggle('open')
open_close.onclick = () => menu.classList.toggle('open')

$('.search').click(function() {
  $('.mobile-search-wrapper').slideToggle()
})

$('.go-top').click(function() {
  $('html, body').scrollTop(0)
})