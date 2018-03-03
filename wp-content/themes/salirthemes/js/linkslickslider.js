$(function() {
 $('.linkslider').slick({
infinite: false,
speed: 300,
arrows: true,
slidesToShow: 5,
slidesToScroll: 5,
responsive: [{
breakpoint: 787,
settings: {
arrows: true,
slidesToShow: 1,
slidesToScroll: 1,
}
}]
	});
});