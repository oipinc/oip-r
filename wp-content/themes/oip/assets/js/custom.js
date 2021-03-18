const loadingScreen = document.querySelector('.loading-screen')
const mainNavigation = document.querySelector('.main-navigation')

function delay(n) {
    n = n || 2000
    // Keep official documentation wording, done -> resolve
    // and make it more concise
    return new Promise(resolve => {
        setTimeout(resolve, n)
    })
}

// Function to add and remove the page transition screen
function pageTransitionIn() {
    // GSAP methods can be chained and return directly a promise
    // but here, a simple tween is enough
    return gsap
        // .timeline()
        // .set(loadingScreen, { transformOrigin: 'bottom left'})
        // .to(loadingScreen, { duration: .5, scaleY: 1 })
        .to(loadingScreen, { duration: .5, scaleY: 1, transformOrigin: 'bottom left'})
}
// Function to add and remove the page transition screen
function pageTransitionOut(container) {
    // GSAP methods can be chained and return directly a promise
    return gsap
        .timeline({ delay: 1}) // More readable to put it here
        .add('start') // Use a label to sync screen and content animation
        .to(loadingScreen, {
            duration: 0.5,
            scaleY: 0,
            skewX: 0,
            transformOrigin: 'top left',
            ease: 'power1.out'
        }, 'start')
        .call(contentAnimation, [container], 'start')
}

// Function to animate the content of each page
function contentAnimation(container) {
    // Query from container
    jQuery(container.querySelector('.green-heading-bg')).addClass('show')
    // GSAP methods can be chained and return directly a promise
    return gsap
        .timeline()
        .from(container.querySelector('.is-animated'), {
            duration: 0.5,
            translateY: 10,
            opacity: 0,
            stagger: 0.4
        })
        .from(mainNavigation, { duration: .5, translateY: -10, opacity: 0})
}

function initSlickSlider() {
    jQuery('.case-study-slider').slick({
        centerMode: true,
        centerPadding: '250px',
        slidesToShow: 1,
        prevArrow:"<img class='prev-arrow' src='/wp-content/themes/oip/assets/images/left-arrow-small.svg' />",
        nextArrow:"<img class='next-arrow' src='/wp-content/themes/oip/assets/images/right-arrow-small.svg' />",
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
}

function initProductSlickSlider() {
    jQuery('.product-stories-slider').slick({
        centerMode: true,
        centerPadding: '95px',
        slidesToShow: 1,
        prevArrow:"<img class='prev-arrow' src='/wp-content/themes/oip/assets/images/left-arrow-small.svg' />",
        nextArrow:"<img class='next-arrow' src='/wp-content/themes/oip/assets/images/right-arrow-small.svg' />",
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '15px',
                    slidesToShow: 1
                }
            }
        ]
    });
}

function initProductSlider() {
    jQuery('.product-slider').slick({
        centerMode: true,
        centerPadding: '240px',
        slidesToShow: 1,
        prevArrow:"<img class='prev-arrow' src='/wp-content/themes/oip/assets/images/left-arrow-small.svg' />",
        nextArrow:"<img class='next-arrow' src='/wp-content/themes/oip/assets/images/right-arrow-small.svg' />",
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '15px',
                    slidesToShow: 1
                }
            }
        ]
    });
}

function swipeSliderInit() {
    const aosSelector = jQuery('.swiper-wrapper h3, .swiper-wrapper p, .swiper-wrapper img');

    new Swiper('.swiper-container', {
        slidesPerView: 1,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        on: {
            slideChangeTransitionStart: function () {
                aosSelector.css("visibility", "hidden");
                aosSelector.removeClass('aos-init').removeClass('aos-animate');
            },
            slideChangeTransitionEnd: function () {
                aosSelector.css("visibility", "visible");
                AOS.init();
            },
        }
    });
}

function getMaxHeight(domEl) {
    let maxHeight = 0;
    jQuery(domEl).each(function(){
        if (jQuery(this).outerHeight() > maxHeight) { maxHeight = jQuery(this).outerHeight(); }
    });

    return maxHeight;
}

jQuery(function() {
    barba.init({
        // We don't want "synced transition"
        // because both content are not visible at the same time
        // and we don't need next content is available to start the page transition
        // sync: true,
        transitions: [{
            // NB: `data` was not used.
            // But usually, it's safer (and more efficient)
            // to pass the right container as a paramater to the function
            // and get DOM elements directly from it
            async leave(data) {
                // Not needed with async/await or promises
                // const done = this.async();

                await pageTransitionIn()
                jQuery("html, body, .menu").removeClass("open");
                // No more needed as we "await" for pageTransition
                // And i we change the transition duration, no need to update the delay…
                // await delay(1000)

                // Not needed with async/await or promises
                // done()
                // Loading screen is hiding everything, time to remove old content!
                data.current.container.remove()
            },

            async enter(data) {
                await pageTransitionOut(data.next.container);
                jQuery(window).scrollTop(0);
                AOS.init();

                initSlickSlider();
                initProductSlickSlider();
                swipeSliderInit();
                initProductSlider();

                const vid = document.getElementById("background_animation");
                if (vid) {
                    vid.autoplay = true;
                    vid.loop = true;
                    vid.load();
                }
                jQuery('.case-study-slide-item, .product-story-item, .product-item').matchHeight({ property: 'min-height' });
                jQuery('.product-values-box').matchHeight({ property: 'min-height' });

                const el = jQuery('.service-benefits.view-2 ul li');
                const caseStudy = jQuery('.case h4');

                el.css("height", getMaxHeight('.service-benefits.view-2 ul li'));
                caseStudy.css("height", getMaxHeight('.case h4'));

                const url = window.location.pathname.split('/');
                if (url[1] !== "product") {
                    jQuery("body").removeClass("bg-dark-blue");
                } else {
                    jQuery("body").addClass("bg-dark-blue");
                }
            },
            // Variations for didactical purpose…
            // Better browser support than async/await
            // enter({ next }) {
            //   return pageTransitionOut(next.container);
            // },
            // More concise way
            // enter: ({ next }) => pageTransitionOut(next.container),

            async once(data) {
                await contentAnimation(data.next.container);

                initSlickSlider();
                initProductSlickSlider();
                swipeSliderInit();
                initProductSlider();

                jQuery('.case-study-slide-item, .product-story-item, .product-item').matchHeight({ property: 'min-height' });
                jQuery('.product-values-box').matchHeight({ property: 'min-height' });

                const url = window.location.pathname.split('/');
                if (url[1] !== "product") {
                    jQuery("body").removeClass("bg-dark-blue");
                } else {
                    jQuery("body").addClass("bg-dark-blue");
                }
            }
        }]
    });

    const el = jQuery('.service-benefits.view-2 ul li');
    const caseStudy = jQuery('.case h4');

    el.css("height", getMaxHeight('.service-benefits.view-2 ul li'));
    caseStudy.css("height", getMaxHeight('.case h4'));

    setTimeout(function () {
        jQuery("html, body").removeClass("init");
        setTimeout(function () {
            AOS.init();

        },200)
    }, 2000);
});

jQuery(".btn-menu").on("click", function () {
    jQuery("html, body, .menu").toggleClass("open");
});
jQuery(".menu-navigation a").on("click", function () {
    const href = jQuery(this).attr("href");
    if (href === "#") {
        jQuery(this).siblings().slideToggle(300);
    } else {
        jQuery(".menu-navigation li").removeClass("current_page_item");
        jQuery(this).parent().addClass("current_page_item");
    }
});
jQuery(".home-service-box a").hover(function () {
    jQuery(this).parent().toggleClass("hovered");
});
