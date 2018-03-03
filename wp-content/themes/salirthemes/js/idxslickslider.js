$(function() {
$('.idxslider').slick({
fade:true,
initialSlide: 0,
autoplaySpeed: 7000,
accessibility: true,
infinite: true,
dots:false,
slidesToShow: 1,
centerMode: true,
centerPadding:'100px',
autoplay:true,
responsive: [{
breakpoint: 787,
settings: {
fade:true,
centerMode: false,
dots:false,
draggable: false,
arrows: false
}
}]
});
});