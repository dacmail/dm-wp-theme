import './lightgallery.min.js';
import './owl.carousel.min.js';
import './bootstrap.js';

(function($) {
	$(window).on('load', function() {
        $(".gallery").lightGallery({
            selector: '.gallery-icon a'
        });
        $('.share-over').on('click', function (event) {
            event.preventDefault();
        });
        $('.js-menu').on('click', function (event) {
            event.preventDefault();
            event.stopPropagation();
            $('.js-menu').toggleClass('is-active');
            $('body').toggleClass('is-open-menu');
            $('.nav-primary').toggleClass('is-open');
        });
        console.log('window loaded');
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
