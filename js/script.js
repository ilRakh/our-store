
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, options);
  });

$(document).ready(function(){
    $('.sidenav').sidenav();
});

$(document).ready(function(){
    $('.carousel').carousel();
});
$('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
});