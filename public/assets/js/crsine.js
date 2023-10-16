function setCookie(name,value,seconds) {
    var expires = "";
    if (seconds) {
        var date = new Date();
        date.setTime(date.getTime() + (seconds * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function eraseCookie(name) {
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

(function($) {
    "use strict";

    //LightBox / Fancybox
    if($(".lightbox-image").length) {
        $(".lightbox-image").fancybox({
            openEffect: "fade",
            closeEffect: "fade",
            helpers: {
                media: {}
            }
        });
    }

    if($(".tab-box").length) {
        $(".tab-box").each(function() {
            let tabID = $(this).attr('id');
            let title = $('#'+tabID).find(".tab-box__title").find("li");
            title.on("click", function(e) {
                e.preventDefault();
                var self = $(this);
                var index = self.index();
                title.removeClass("active-item");
                self.addClass("active-item");
                $('#'+tabID).find(".tab-box__content").hide().removeClass('active-item');
                $('#'+tabID).find(".tab-box__content").eq(index).fadeIn(1000).addClass('active-item');
            });
        });
    }

    if($(".countdown-one__list").length) {
        let deadLine = new Date(Date.parse(new Date())+12 * 24 * 60 * 60 * 1000);
        $(".countdown-one__list").countdown({
            date: deadLine,
            render: function(date) {
                this.el.innerHTML =
                    "<li> <div class='days'> <i>"+
                    date.days+
                    "</i> <span>Days</span> </div> </li>"+
                    "<li> <div class='hours'> <i>"+
                    date.hours+
                    "</i> <span>Hours</span> </div> </li>"+
                    "<li> <div class='minutes'> <i>"+
                    date.min+
                    "</i> <span>Minutes</span> </div> </li>"+
                    "<li> <div class='seconds'> <i>"+
                    date.sec+
                    "</i> <span>Seconds</span> </div> </li>";
            },
        });
    }

    if($(".scroll-to-target").length) {
        $(".scroll-to-target").on("click", function() {
            var target = $(this).attr("data-target");
            // animate
            $("html, body").animate({
                    scrollTop: $(target).offset().top,
                },
                1000
            );

            return false;
        });
    }

    if($.validator) {
        $.extend($.validator.messages, {
            required: "Это обязательное поле.",
            remote: "Пожалуйста, исправьте это поле.",
            email: "Пожалуйста, введите корректный email",
            url: "Please enter a valid URL.",
            date: "Please enter a valid date.",
            dateISO: "Please enter a valid date (ISO).",
            number: "Please enter a valid number.",
            digits: "Please enter only digits.",
            creditcard: "Please enter a valid credit card number.",
            equalTo: "Please enter the same value again.",
            accept: "Please enter a value with a valid extension.",
            maxlength: $.validator.format("Please enter no more than {0} characters."),
            minlength: $.validator.format("Please enter at least {0} characters."),
            rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
            range: $.validator.format("Please enter a value between {0} and {1}."),
            max: $.validator.format("Please enter a value less than or equal to {0}."),
            min: $.validator.format("Please enter a value greater than or equal to {0}.")
        });
    }

    if($(".contact-form-validated").length) {
        $(".contact-form-validated").validate({
            // initialize the plugin
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                /*message: {
                    required: true,
                },*/
                subject: {
                    required: true,
                },
            },
            submitHandler: function(form) {
                // sending value with ajax request
                const result_success = document.querySelector('.contacts__result--success');
                const result_error = document.querySelector('.contacts__result--error');
                const $form = $(form);
                $.ajax({
                    url: $form.attr("action"),
                    type: 'post',
                    data: $form.serialize(),
                    dataType: 'json',
                    beforeSend: function() {
                        $(result_success).stop().slideUp(400);
                        $(result_error).stop().slideUp(400);
                        $form.addClass('contact-one__form--loading');
                    },
                    complete: function() {
                        $form.removeClass('contact-one__form--loading');
                    },
                    success: function(response) {
                        if(response.success) {
                            $form.find('.valid').removeClass('valid');
                            $form.parent().find(".result").append(response);
                            $form.find('input[type="text"]').val("");
                            $form.find('input[type="tel"]').val("");
                            $form.find('input[type="email"]').val("");
                            $form.find("textarea").val("");
                            $(result_success).stop().slideDown(400);
                        }
                        else
                            this.error();
                    },
                    error: function(e) {
                        $(result_error).stop().slideDown(400);
                    },
                });
                return false;
            },
        });
    }
    if(typeof $.mask != 'undefined')
        $('input[type="tel"]').mask('+7 (999) 999-99-99');

    // mailchimp form
    if($(".mc-form").length) {
        $(".mc-form").each(function() {
            var Self = $(this);
            var mcURL = Self.data("url");
            var mcResp = Self.parent().find(".mc-form__response");

            Self.ajaxChimp({
                url: mcURL,
                callback: function(resp) {
                    // appending response
                    mcResp.append(function() {
                        return '<p class="mc-message">'+resp.msg+"</p>";
                    });
                    // making things based on response
                    if(resp.result === "success") {
                        // Do stuff
                        Self.removeClass("errored").addClass("successed");
                        mcResp.removeClass("errored").addClass("successed");
                        Self.find("input").val("");

                        mcResp.find("p").fadeOut(10000);
                    }
                    if(resp.result === "error") {
                        Self.removeClass("successed").addClass("errored");
                        mcResp.removeClass("successed").addClass("errored");
                        Self.find("input").val("");

                        mcResp.find("p").fadeOut(10000);
                    }
                },
            });
        });
    }

    if($(".video-popup").length) {
        $(".video-popup").magnificPopup({
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: true,

            fixedContentPos: false,
        });
    }


    /*  function dynamicCurrentMenuClass(selector) {
        let FileName = window.location.href.split("/").reverse()[0];

        selector.find("li").each(function () {
          let anchor = $(this).find("a");
          if ($(anchor).attr("href") == FileName) {
            $(this).addClass("current");
          }
        });
        // if any li has .current elmnt add class
        selector.children("li").each(function () {
          if ($(this).find(".current").length) {
            $(this).addClass("current");
          }
        });
        // if no file name return
        if ("" == FileName) {
          selector.find("li").eq(0).addClass("current");
        }
      }

      if ($(".main-menu__list").length) {
        // dynamic current class
        let mainNavUL = $(".main-menu__list");
        dynamicCurrentMenuClass(mainNavUL);
      }*/

    if($(".main-menu__list").length && $(".mobile-nav__container").length) {
        let navContent = document.querySelector(".main-menu__list").outerHTML;
        let mobileNavContainer = document.querySelector(".mobile-nav__container");
        mobileNavContainer.innerHTML = navContent;
    }
    /*if($(".sticky-header__content").length) {
        let navContent = document.querySelector(".main-menu").innerHTML;
        let mobileNavContainer = document.querySelector(".sticky-header__content");
        mobileNavContainer.innerHTML = navContent;
    }*/

    if($(".mobile-nav__container .main-menu__list").length) {
        let dropdownAnchor = $(
            ".mobile-nav__container .main-menu__list .dropdown > a"
        );
        dropdownAnchor.each(function() {
            let self = $(this);
            let toggleBtn = document.createElement("BUTTON");
            toggleBtn.setAttribute("aria-label", "dropdown toggler");
            toggleBtn.innerHTML = "<i class='fa fa-angle-down'></i>";
            self.append(function() {
                return toggleBtn;
            });
            self.find("button").on("click", function(e) {
                e.preventDefault();
                let self = $(this);
                self.toggleClass("expanded");
                self.parent().toggleClass("expanded");
                self.parent().parent().children("ul").slideToggle();
            });
        });
    }

    if($(".mobile-nav__toggler").length) {
        $(".mobile-nav__toggler").on("click", function(e) {
            e.preventDefault();
            $(".mobile-nav__wrapper").toggleClass("expanded");
            $("body").toggleClass("locked");
        });
    }

    if($(".search-toggler").length) {
        $(".search-toggler").on("click", function(e) {
            e.preventDefault();
            $(".search-popup").toggleClass("active");
            $(".mobile-nav__wrapper").removeClass("expanded");
            $("body").toggleClass("locked");
        });
    }
    if($(".mini-cart__toggler").length) {
        $(".mini-cart__toggler").on("click", function(e) {
            e.preventDefault();
            $(".mini-cart").toggleClass("expanded");
            $(".mobile-nav__wrapper").removeClass("expanded");
            $("body").toggleClass("locked");
        });
    }
    if($(".odometer").length) {
        var odo = $(".odometer");
        odo.each(function() {
            $(this).appear(function() {
                var countNumber = $(this).attr("data-count");
                $(this).html(countNumber);
            });
        });
    }

    if($(".dynamic-year").length) {
        let date = new Date();
        $(".dynamic-year").html(date.getFullYear());
    }

    if($(".wow").length) {
        var wow = new WOW({
            boxClass: "wow", // animated element css class (default is wow)
            animateClass: "animated", // animation css class (default is animated)
            mobile: true, // trigger animations on mobile devices (default is true)
            live: true, // act on asynchronously loaded content (default is true)
        });
        wow.init();
    }

    if($("#donate-amount__predefined").length) {
        let donateInput = $("#donate-amount");
        $("#donate-amount__predefined")
            .find("li")
            .on("click", function(e) {
                e.preventDefault();
                let amount = $(this).find("a").text();
                donateInput.val(amount);
                $("#donate-amount__predefined").find("li").removeClass("active");
                $(this).addClass("active");
            });
    }

    if($('.thm-accordion').length) {
        let accordionWrapper = $('.thm-accordion');
        accordionWrapper.each(function() {
            let $this = $(this);
            let accordionID = $this.attr('id');
            let accordionTitle = $this.find('.thm-accordion__title');
            $this.addClass(accordionID);
            // default hide
            let mainAccordionContent = $this.find('.thm-accordion__content').hide();
            $this.find('.active-item .thm-accordion__content').show();
            // on title click
            accordionTitle.on('click', function(e) {
                e.preventDefault();
                let $this = $(this);
                let accordionItem = $(this).parent();
                if(false === accordionItem.hasClass('active-item')) {
                    $('#'+accordionID).find('.thm-accordion__item').removeClass('active-item');
                    accordionItem.addClass('active-item');
                    mainAccordionContent.slideUp();
                    accordionItem.find('.thm-accordion__content').slideDown();
                }
            });
        })
    }

    $(".add").on("click", function() {
        if($(this).prev().val() < 999) {
            $(this)
                .prev()
                .val(+$(this).prev().val()+1);
        }
    });
    $(".sub").on("click", function() {
        if($(this).next().val() > 1) {
            if($(this).next().val() > 1)
                $(this)
                    .next()
                    .val(+$(this).next().val()-1);
        }
    });

    if($(".tabs-box").length) {
        $(".tabs-box .tab-buttons .tab-btn").on("click", function(e) {
            e.preventDefault();
            var target = $($(this).attr("data-tab"));

            if($(target).is(":visible")) {
                return false;
            } else {
                target
                    .parents(".tabs-box")
                    .find(".tab-buttons")
                    .find(".tab-btn")
                    .removeClass("active-btn");
                $(this).addClass("active-btn");
                target
                    .parents(".tabs-box")
                    .find(".tabs-content")
                    .find(".tab")
                    .fadeOut(0);
                target
                    .parents(".tabs-box")
                    .find(".tabs-content")
                    .find(".tab")
                    .removeClass("active-tab");
                $(target).fadeIn(300);
                $(target).addClass("active-tab");
            }
        });
    }

    if($(".range-slider-price").length) {
        var priceRange = document.getElementById("range-slider-price");

        noUiSlider.create(priceRange, {
            start: [30, 150],
            limit: 200,
            behaviour: "drag",
            connect: true,
            range: {
                min: 10,
                max: 200,
            },
        });

        var limitFieldMin = document.getElementById("min-value-rangeslider");
        var limitFieldMax = document.getElementById("max-value-rangeslider");

        priceRange.noUiSlider.on("update", function(values, handle) {
            (handle ? $(limitFieldMax) : $(limitFieldMin)).text(values[handle]);
        });
    }

    function thmSwiperInit() {
        // swiper slider
        const swiperElm = document.querySelectorAll(".thm-swiper__slider");
        swiperElm.forEach(function(swiperelm) {
            const swiperOptions = JSON.parse(swiperelm.dataset.swiperOptions);
            let thmSwiperSlider = new Swiper(swiperelm, swiperOptions);
        });
    }

    function thmTinyInit() {
        // tiny slider
        const tinyElm = document.querySelectorAll(".thm-tiny__slider");
        tinyElm.forEach(function(tinyElm) {
            const tinyOptions = JSON.parse(tinyElm.dataset.tinyOptions);
            let thmTinySlider = tns(tinyOptions);
        });
    }

    function thmTestimonialsThumbCarousel() {
        if($("#testimonials-one__thumb").length) {
            let testimonialsThumb = new Swiper("#testimonials-one__thumb", {
                slidesPerView: 3,
                spaceBetween: 0,
                speed: 1400,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                autoplay: {
                    delay: 5000
                }
            });

            let testimonialsCarousel = new Swiper("#testimonials-one__carousel", {
                observer: true,
                observeParents: true,
                speed: 1400,
                mousewheel: true,
                slidesPerView: 1,
                autoplay: {
                    delay: 5000
                },
                thumbs: {
                    swiper: testimonialsThumb
                }
            });
        }
    }

    // window load event

    $(window).on("load", function() {
        /*if($(".preloader").length) {
            $(".preloader").fadeOut();
        }*/
        thmSwiperInit();
        thmTinyInit();
        thmTestimonialsThumbCarousel();

        if($(".circle-progress").length) {
            $(".circle-progress").appear(function() {
                let circleProgress = $(".circle-progress");
                circleProgress.each(function() {
                    let progress = $(this);
                    let progressOptions = progress.data("options");
                    progress.circleProgress(progressOptions);
                });
            });
        }
        if($(".post-filter").length) {
            var postFilterList = $(".post-filter li");
            // for first init
            $(".filter-layout").isotope({
                filter: ".filter-item",
                animationOptions: {
                    duration: 500,
                    easing: "linear",
                    queue: false,
                },
            });
            // on click filter links
            postFilterList.on("click", function() {
                var Self = $(this);
                var selector = Self.attr("data-filter");
                postFilterList.removeClass("active");
                Self.addClass("active");

                $(".filter-layout").isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 500,
                        easing: "linear",
                        queue: false,
                    },
                });
                return false;
            });
        }

        if($(".post-filter.has-dynamic-filter-counter").length) {
            // var allItem = $('.single-filter-item').length;

            var activeFilterItem = $(".post-filter.has-dynamic-filter-counter").find(
                "li"
            );

            activeFilterItem.each(function() {
                var filterElement = $(this).data("filter");
                var count = $(".filter-layout").find(filterElement).length;
                $(this).append("<sup>["+count+"]</sup>");
            });
        }
    });

    // window scroll event

    $(window).on("scroll", function() {
        /*if($(".stricked-menu").length) {
            const headerScrollPos = 130;
            var stricky = $(".stricked-menu");
            if($(window).scrollTop() > headerScrollPos) {
                stricky.addClass("stricky-fixed");
            } else if($(this).scrollTop() <= headerScrollPos) {
                stricky.removeClass("stricky-fixed");
            }
        }*/
        if($(".scroll-to-top").length) {
            const strickyScrollPos = 100;
            if($(window).scrollTop() > strickyScrollPos) {
                $('.scroll-to-top').addClass('active');
            } else if($(this).scrollTop() <= strickyScrollPos) {
                $('.scroll-to-top').removeClass('active');
            }
        }
    });

    // Hidden footer
    const pageWrapper = document.getElementById('page-wrapper');
    const footer = document.querySelector('.main-footer');

    const updatePageMargin = function() {
        pageWrapper.style.marginBottom = footer.getBoundingClientRect().height+'px';
    }

    const hiddenFooter_media_x = window.matchMedia('(max-width: 768px)');
    const hiddenFooter_media_y = window.matchMedia('(max-height: 700px)');

    const enableHiddenFooter = function() {
        updatePageMargin();
        window.addEventListener('resize', updatePageMargin);

        footer.classList.add('main-footer--hidden');
        pageWrapper.classList.add('page-content--fhidden')
    }
    const disableHiddenFooter = function() {
        pageWrapper.style.marginBottom = null;
        window.removeEventListener('resize', updatePageMargin);
        footer.classList.remove('main-footer--hidden');
        pageWrapper.classList.remove('page-content--fhidden')
    }
    const checkHiddenFooter = function() {
        if(hiddenFooter_media_x.matches || hiddenFooter_media_y.matches)
            disableHiddenFooter();
        else
            enableHiddenFooter();
    }

    checkHiddenFooter();
    hiddenFooter_media_x.addListener(checkHiddenFooter);
    hiddenFooter_media_y.addListener(checkHiddenFooter);


    // Sticky navs of main slider

    if($('.main-slider__nav').length) {
        function simulateSticky(elem, timeout = 0) {
            let $elem = $(elem);
            let $parent = $elem.parent();
            $elem.css('top', 0);

            let move = function() {
                let top_border = $parent.offset().top;

                let parent_height = $parent.outerHeight();
                let window_height = window.innerHeight;

                let scroll_top = $(window).scrollTop();
                let position = window_height+scroll_top-top_border-$elem.outerHeight();

                if(position < 0)
                    position = 0;
                if(position+$elem.outerHeight() > parent_height)
                    position = parent_height-$elem.outerHeight();

                $elem.css('margin-top', position);
            };

            let move_timeout;
            $(window).on('scroll resize', function() {
                clearTimeout(move_timeout);
                move_timeout = setTimeout(function() {
                    move();
                }, 10);
            });
            setTimeout(function() {
                move();
            }, timeout);
        }

        simulateSticky($('.main-slider__nav'))
    }

    // Hide header on scroll

    let last_page_scroll;
    const header = document.querySelector('.stricky-header');
    if(!header.classList.contains('stricky-header--static')) {
        const headerTrigger = document.querySelector('.stricky-trigger');
        const headerScrollPos = 130;
        window.addEventListener('scroll', function() {
            if(window.pageYOffset > headerScrollPos) {
                let delta = window.pageYOffset-last_page_scroll;

                headerTrigger.classList.add('active');

                if(delta != 0) {
                    if(delta > 0) {
                        if(window.pageYOffset > headerScrollPos)
                            header.classList.remove('stricky-fixed');
                    } else if((window.innerHeight+window.pageYOffset) < document.body.offsetHeight)
                        header.classList.add('stricky-fixed');
                }
                last_page_scroll = window.pageYOffset;
            } else {
                header.classList.remove('stricky-fixed');
                headerTrigger.classList.remove('active');
            }
        });

        headerTrigger.addEventListener('mouseover', function() {
            header.classList.add('stricky-fixed');
        });
    }


    if(document.querySelectorAll('.js-tilt').length) {
        $('.js-tilt').tilt({
            maxTilt: 20,
            perspective: 700,
            glare: true,
            maxGlare: 0
        });
    }

    const uniForm = document.querySelector('.unibot-form');
    if(uniForm) {
        const uniMessages = document.querySelector('.unibot-messages');
        const uniLoader = document.querySelector('.unibot-loading');
        const uniInput = document.querySelector('.unibot-form__input');

        uniForm.onsubmit = function(e) {
            e.preventDefault();

            if(uniInput.value.trim() == '')
                return;

            $.ajax({
                type: 'post',
                url: uniForm.action,
                data: $(uniForm).serialize(),
                beforeSend: function() {
                    uniMessages.innerHTML += '<div class="unibot-message unibot-message--user"><div class="unibot-message__text">'+uniInput.value.trim()+'</div></div>';
                    uniLoader.style.display = 'flex';
                    uniMessages.scrollTop = uniMessages.scrollHeight;
                },
                complete: function() {
                    uniInput.value = '';
                    uniLoader.style.display = 'none';
                    uniMessages.scrollTop = uniMessages.scrollHeight;
                },
                success: function(response) {
                    if(response.messages) {
                        response.messages.forEach(function(message) {
                            uniMessages.innerHTML += '<div class="unibot-message"><div class="unibot-message__text">'+message.text+'</div></div>';
                            uniMessages.scrollTop = uniMessages.scrollHeight;
                        });
                    }
                },
                error: function() {

                }
            })
        };
    }

    const main_news = document.querySelector('.main-news');
    if(main_news) {
        const mn_breakpoint = window.matchMedia('(min-width: 992px');

        const enableMNSwiper = function() {
            main_news.slider = new Swiper(main_news, {
                slidesPerView: 1,
                loop: false,
                observer: true,
                spaceBetween: 30,
                breakpoints: {
                    767: {
                        slidesPerView: 2,
                    },
                },
            });
        };

        const mnBreakpointChecker = function() {
            if(mn_breakpoint.matches) {
                if(main_news.slider !== undefined)
                    main_news.slider.destroy(true, true);
                return;
            } else {
                return enableMNSwiper();
            }
        };
        mn_breakpoint.addListener(mnBreakpointChecker);
        mnBreakpointChecker();
    }


    // Dark mode

    const dark_mode_toggle = document.getElementById('dark-mode-toggle');
    if(dark_mode_toggle) {
        let toggle_timeout2;

        let transition_timeout;

        const addTransitions = function() {
            document.body.querySelectorAll('*:not(script, .animate-theme)').forEach(function(elem) {
                if(elem.style.transition)
                    return;

                elem.classList.add('animate-theme');
                if(window.getComputedStyle(elem).transition != 'all 0s ease 0s')
                    elem.style.transition = window.getComputedStyle(elem).transition+', background-color .5s, color .5s, border-color .5s';
                else
                    elem.style.transition = 'background-color .5s, color .5s, border-color .5s';
            });

            clearTimeout(transition_timeout);
            transition_timeout = setTimeout(function() {
                document.body.querySelectorAll('.animate-theme').forEach(function(elem) {
                    elem.style.transition = null;
                    elem.classList.remove('animate-theme');
                    if(elem.attributes.style?.value == '')
                        elem.removeAttribute('style');
                });
            }, 500);

        }


        let change_by_program = false;

        window.addEventListener('storage', function(e) {
            if(e.key == 'theme') {
                addTransitions();
                document.body.className = document.body.className.replace(new RegExp(/\btheme-.+?\b/, 'g'), '');
                document.body.classList.add('theme-'+e.newValue);
                change_by_program = true;
                dark_mode_toggle.checked = e.newValue == 'dark';
            }
        });

        dark_mode_toggle.onchange = function() {
            clearTimeout(toggle_timeout2);

            addTransitions();

            let new_theme = 'light';
            if(this.checked) {
                document.body.classList.add('theme-dark');
                document.body.classList.remove('theme-light');
                new_theme = 'dark';
            }
            else {
                document.body.classList.remove('theme-dark');
                document.body.classList.add('theme-light');
            }

            localStorage.theme = new_theme;

            toggle_timeout2 = setTimeout(function() {
                setCookie('theme', new_theme, 365 * 24 * 60 * 60);
            }, 200);
        };
    }

    // Images carousel

    document.querySelectorAll('.images-carousel').forEach(function(carousel) {
        const slidesCount = carousel.querySelectorAll('.images-carousel__item').length;
        const slider = new Swiper(carousel, {
            slidesPerView: 'auto',
            centeredSlides: true,
            slideToClickedSlide: true,
            loopedSlides: slidesCount,
            loop: true,
            speed: 1500,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            on: {
                touchStart: function() {
                    carousel.querySelector('.swiper-wrapper').classList.add('touching');
                },
                touchEnd: function() {
                    carousel.querySelector('.swiper-wrapper').classList.remove('touching');
                },
                slideChange: function() {
                    $(".images-carousel .lightbox-image").fancybox({
                        openEffect: "fade",
                        closeEffect: "fade",
                        helpers: {
                            media: {}
                        }
                    });
                }
            }
        });
    });


    // Post pictures

    new Swiper('.post-pictures', {
        spaceBetween: 20,
        pagination: {
            el: '.post-pictures__paginate',
            clickable: true,
        }
    });

})(jQuery);
