(function($) {
	$(document).ready(function() {
		//JS
        $('.tag-carousel').owlCarousel({
            items:7,
            margin:30,
            loop:true,
            autoWidth:true,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
        });
	});
	$(window).load(function() {
		//JS
	});
})(jQuery);
