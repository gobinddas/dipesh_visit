$ = jQuery.noConflict()
$(document).ready(function () {

    // Header Fixed on Scroll
    $(window).on("load resize scroll", function () {
        var sticky = $(".header"),
            scroll = $(window).scrollTop();

        if (scroll >= 50) sticky.addClass("fixed-header");
        else sticky.removeClass("fixed-header");
    });

    // Scroll Event (Go to Top on Click)
    //To scroll top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $(".scrollToTop").fadeIn().addClass("d-block");
        } else {
            $(".scrollToTop").fadeOut().removeClass("d-block");
        }
    });
    //Click event to scroll to top
    $(".scrollToTop").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
    // baner slider 
    $(".hero-banner-slider, .banner-front-img").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        animateOut: 'fadeOut'
    });



    // destination row 
    $('.destination-row').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })



    // package slect 
    $(document).ready(function () {
        // Set the default active category
        $('.button.adventure').addClass('active');
        $('.package-row.adventure').addClass('active');

        // Handle button click events
        $('.package-buttons .button').click(function (e) {
            e.preventDefault();

            // Remove 'active' class from all buttons and rows
            $('.package-buttons .button').removeClass('active');
            $('.package-row').removeClass('active');

            // Add 'active' class to the clicked button
            $(this).addClass('active');

            // Get the category from the button's class
            var category = $(this).attr('data-category');

            // Show the package row corresponding to the clicked button
            $('.package-row.' + category).addClass('active');
        });
    });


    // testimonial 

    $('.testimonial-row').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 2
            }
        }
    })



    // index faq 
    $('.faq-question').click(function () {
        const isActive = $(this).hasClass('active');
        $('.faq-question').removeClass('active');
        $('.faq-answer').slideUp();

        if (!isActive) {
            $(this).addClass('active');
            $(this).next('.faq-answer').slideDown();
        }
    });



    // magnefic popup 

    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function (item) {
                return item.el.attr('title') + ' by Marsel Van Oosten';
            }
        }
    });






    // iternary 


    document.querySelectorAll('.question').forEach(question => {
        question.addEventListener('click', () => {
            const currentlyActive = document.querySelector('.question.active');

            if (currentlyActive && currentlyActive !== question) {
                currentlyActive.classList.remove('active');
                currentlyActive.querySelector('i').classList.replace('fa-circle-minus', 'fa-circle-plus');
                currentlyActive.nextElementSibling.style.display = 'none';
            }

            question.classList.toggle('active');
            const icon = question.querySelector('i');
            icon.classList.toggle('fa-circle-plus');
            icon.classList.toggle('fa-circle-minus');

            const answer = question.nextElementSibling;
            answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
        });
    });






});
