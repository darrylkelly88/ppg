$(document).ready(function () {
            
    // Initialize the relatedArticlesCarousel
    var relatedArticlesCarousel = new bootstrap.Carousel(document.querySelector('.rcc-4'), {
        interval: 3000
    });

    // Clone and append carousel items for responsive layout for relatedArticlesCarousel
    $('.rcc-4 .carousel-item').each(function () {
        var minPerSlide = 4;
        var next = $(this).next();

        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < minPerSlide; i++) {
            next = next.next();

            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
    });
});