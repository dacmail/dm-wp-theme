(function($) {
	$(document).ready(function() {
        $(".gallery").lightGallery({
            selector: '.gallery-icon a'
        });
	});
	$(window).load(function() {
		$('.tag-carousel').owlCarousel({
            items:7,
            margin:30,
            loop: true,
            autoWidth: true,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
        });
	});
})(jQuery);
