const loadingScreen = document.querySelector('.loading-screen')
const mainNavigation = document.querySelector('.main-navigation')
const rect = jQuery(".rect");

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
                breakpoint: 1200,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0',
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

function elMaxHeight() {
    const el = jQuery('.service-benefits.view-2 ul li');
    const caseStudy = jQuery('.case h4');

    el.css("height", getMaxHeight('.service-benefits.view-2 ul li'));
    caseStudy.css("height", getMaxHeight('.case h4'));
}

function playVideo(el) {
    let autoPlayVideo = document.getElementById(el);

    if (autoPlayVideo) {
        autoPlayVideo.oncanplaythrough = function() {
            autoPlayVideo.muted = true;
            autoPlayVideo.play();
            autoPlayVideo.pause();
            autoPlayVideo.play();
        }
    }
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
                jQuery(window).scrollTop(-50);
                AOS.init();

                initSlickSlider();
                initProductSlickSlider();
                swipeSliderInit();
                initProductSlider();
                elMaxHeight();

                jQuery('.case-study-slide-item, .product-story-item, .product-item').matchHeight({ property: 'min-height' });
                jQuery('.product-values-box').matchHeight({ property: 'min-height' });
                jQuery('.product .swiper-slide, .case-mob .swiper-slide').matchHeight();

                setTimeout(function () {
                    jQuery('.home-service-box h4').matchHeight();
                },500)

                const url = window.location.pathname.split('/');

                if (url[1] === "solution" || url[1] === "job") {
                    jQuery("body").addClass("recaptcha");
                } else {
                    jQuery("body").removeClass("recaptcha");
                }

                if (url[1] !== "solution") {
                    jQuery("body").removeClass("bg-dark-blue");
                } else {
                    jQuery("body").addClass("bg-dark-blue");
                }

                jQuery(".hero-info-box a").on('click', function (event) {
                    event.preventDefault();

                    jQuery('html, body').animate({
                        scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top
                    }, 1000);
                });

                let autoPlayVideo = document.getElementById("app_video");

                if (autoPlayVideo) {
                    document.getElementById("app_video").muted = true;
                    document.getElementById("app_video").play();
                    document.getElementById("app_video").pause();
                    document.getElementById("app_video").play();
                }

                jQuery(".rect").on("click", function (e) {
                    e.preventDefault();
                    const title = jQuery(this).attr("data-title");
                    const content = jQuery(this).attr("data-text");
                    const image = jQuery(this).attr("data-profile");
                    const el = jQuery(".profile-holder");

                    el.find(".profile-title").text(title);
                    el.find(".profile-content").html(content);
                    el.find(".profile-img-holder").addClass("active");

                    el.find(".profile-img").attr('src', image).load(function() {
                        el.find(".profile-img-holder").removeClass("active");
                    });
                    el.addClass("active");
                });
                jQuery(".rect").hover(function (e) {
                    const image = jQuery(this).attr("data-image");
                    jQuery(".img-persons").attr('src', image);
                });
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
                elMaxHeight();

                jQuery('.case-study-slide-item, .product-story-item, .product-item').matchHeight({ property: 'min-height' });
                jQuery('.product-values-box').matchHeight({ property: 'min-height' });
                jQuery('.product .swiper-slide, .case-mob .swiper-slide').matchHeight();

                setTimeout(function () {
                    jQuery('.home-service-box h4').matchHeight();
                },500)

                const url = window.location.pathname.split('/');

                if (url[1] === "solution" || url[1] === "job") {
                    jQuery("body").addClass("recaptcha");
                } else {
                    jQuery("body").removeClass("recaptcha");
                }

                if (url[1] !== "solution") {
                    jQuery("body").removeClass("bg-dark-blue");
                } else {
                    jQuery("body").addClass("bg-dark-blue");
                }
            }
        }]
    });

    elMaxHeight();

    setTimeout(function () {
        jQuery("html, body").removeClass("init");
        setTimeout(function () {
            AOS.init();
        },200)
    }, 1000);
});

jQuery(".btn-menu").on("click", function () {
    jQuery("html, body, .menu").toggleClass("open");
});
jQuery(".menu-navigation a").on("click", function () {
    const href = jQuery(this).attr("href");
    if (href === "#") {
        jQuery(".menu-navigation li .sub-menu").hide();
        jQuery(this).siblings().slideToggle(300);
    } else {
        jQuery(".menu-navigation li").removeClass("current_page_item");
        jQuery(this).parent().addClass("current_page_item");
    }
});
jQuery(".home-service-box a").hover(function () {
    jQuery(this).parent().toggleClass("hovered");
});

jQuery(window).resize(function() {
    elMaxHeight();
    jQuery('.service-benefits.view-2 ul li').matchHeight();
    jQuery('.product .swiper-slide, .case-mob .swiper-slide, .home-service-box h4').matchHeight();
});

jQuery(".hero-info-box a, .btn-demo").on('click', function (event) {
    event.preventDefault();

    jQuery('html, body').animate({
        scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top
    }, 1000);
});
jQuery(".upload-cv").on("change", function (e) {
    let fileName = e.target.files[0].name;
    jQuery(".fileName").text(fileName);
});
jQuery(document).ready(function () {
    playVideo("app_video");

    setTimeout(function () {
        if (jQuery(".wpcf7-response-output").length > 0) {
            jQuery(".wpcf7-response-output").remove();
        }
    }, 1500);
});

jQuery(document).on( 'scroll', function() {
    const height = jQuery(document).height();
    const scrolled = jQuery(document).scrollTop()

    if (scrolled > (height * 33) / 100) {
        jQuery(".back-to-top").addClass("active");
    } else {
        jQuery(".back-to-top").removeClass("active");
    }
});
jQuery(".back-to-top").on('click', function (event) {
    event.preventDefault();
    jQuery("html, body").animate({ scrollTop: 0 }, 1500);
    return false;
});

rect.on("click", function (e) {
    e.preventDefault();
    const title = jQuery(this).attr("data-title");
    const content = jQuery(this).attr("data-text");
    const image = jQuery(this).attr("data-profile");
    const el = jQuery(".profile-holder");

    el.find(".profile-title").text(title);
    el.find(".profile-content").html(content);
    el.find(".profile-img-holder").addClass("active");

    el.find(".profile-img").attr('src', image).load(function() {
        el.find(".profile-img-holder").removeClass("active");
    });
    el.addClass("active");
});
rect.hover(function (e) {
    const image = jQuery(this).attr("data-image");
    jQuery(".img-persons").attr('src', image);
});
rect.mouseleave(function () {
    const image = jQuery(".original-img").attr("src");
    jQuery(".img-persons").attr('src', image);
});
jQuery(".close-profile-holder").on("click", function (e) {
    e.preventDefault();
    jQuery(".profile-holder").removeClass("active")
});
