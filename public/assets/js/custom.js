$(document).ready(function () {

    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");

    $('[href="#"]').attr("href", "javascript:;");
    $('.menu-Bar').click(function () {
        $(this).toggleClass('open');
        $('.menuWrap').toggleClass('open');
        $('body').toggleClass('ovr-hiddn');
        $('body').toggleClass('overflw');
    });

    $(".cart-btn").children("button").click(function () {
        $(".cart").addClass("active")
    })
    $(".cart-close-btn").children("a").click(function () {
        $(".cart").removeClass("active")
    })

    $(".popular-product-cart-star").children("i").click(function () {
        $(this).toggleClass("active")
    })

    $(".close-costomize-btn").click(function () {
        $("#pickerContainer").fadeOut()
        $(".costomize-btn").fadeIn()
        $(this).fadeOut()
    })
    $(".costomize-btn").click(function () {
        $("#pickerContainer").fadeIn()
        $(".close-costomize-btn").fadeIn()
        $(this).fadeOut()
    })

    $('.option-btn').click(function (e) {
        e.stopPropagation();
        $(this).siblings('.card-option-list').addClass('active');
    });

    $(document).click(function (e) {
        if (!$(e.target).closest('.card-option-list').length) {
            $('.card-option-list').removeClass('active');
        }
    });

    $('.user-btn').click(function (e) {
        e.stopPropagation();
        $('.user-profile-list').toggleClass('active');
    });

    $(document).click(function (e) {
        if (!$(e.target).closest('.user-profile-list').length) {
            $('.user-profile-list').removeClass('active');
        }
    });

    $(".rating-star").click(function () {
        $(this).parent().find(".rating-star i").css({ "font-weight": "700" });
        // $(this).find(".rating-star i").css({ "font-weight": "300" });
        $(this).nextAll().find("i").css({ "font-weight": "400" });
    });

    $('.review-main-box').css('display', 'none');
    $('.add-review').click(function () {
        $(this).closest('li').find('.review-main-box').slideToggle();
        $(this).closest('li').find('.cancel-main-box').slideUp()
    });

    $('.cancel-main-box').css('display', 'none');
    $('.cancel-btn').click(function () {
        $(this).closest('li').find('.cancel-main-box').slideToggle();
        $(this).closest('li').find('.review-main-box').slideUp()
    });

    $('.dispute-btn').click(function () {
        $('.dispute-modal-overlay').addClass('active').fadeIn();
        $('.dispute-modal').addClass('active');
        $('body').addClass('overflw');
    });

    var fullText = $('.userchat-para').text();
    var words = fullText.split(' ').slice(0, 4); // Change 4 to the desired number of words
    var shortText = words.join(' ');
    $('.short-text').text(shortText + '...');

    $('.alert-tabs').click(function () {
        $('.chat-box-3').addClass('active').fadeIn();
        $('.chat-box-2').addClass('active').fadeOut();
    });

    $('.chat-tabs').click(function () {
        $('.chat-box-2').addClass('active').fadeIn();
        $('.chat-box-3').addClass('active').fadeOut();
    });

    $('.serach-sports-btn').click(function () {
        $('.searched-sports').addClass('active').fadeIn();
        $('.previous-sports').addClass('active').fadeOut();
    });

    var maxHeight = 0;

    // Find the maximum height among .box elements
    $(".client-slider li").each(function () {
        maxHeight = Math.max(maxHeight, $(this).height());
    });

    // Set the height of all .box elements to match the maximum height
    $(".testimonial-box").height(maxHeight);

    $(".step-form-next").click(function () {
        var sectionID = "#registration-section-id";
        $('.registration-list li.active').next('li').addClass('active');
        $('.registration-list li.active').prev('li').removeClass('active');
        $('.register-tabbing-list li.active').next('li').addClass('active');
        $('.register-tabbing-list li.active').prev('li').removeClass('active');
        if ($(sectionID).length) {
            $('html, body').animate({
                scrollTop: $(sectionID).offset().top
            }, 500);
        }
    })

    $(".step-form-prev").click(function () {
        var sectionID = "#registration-section-id";
        $('.registration-list li.active').prev('li').addClass('active');
        $('.registration-list li.active').next('li').removeClass('active');
        $('.register-tabbing-list li.active').prev('li').addClass('active');
        $('.register-tabbing-list li.active').next('li').removeClass('active');
        if ($(sectionID).length) {
            $('html, body').animate({
                scrollTop: $(sectionID).offset().top
            }, 500);
        }
    })

    $(".step-form-prev-custom").click(function () {
        var sectionID = "#registration-section-id";
        $('.registration-list li.active').prev('li').addClass('active');
        $('.registration-list li.active').next('li').removeClass('active');
        if ($(sectionID).length) {
            $('html, body').animate({
                scrollTop: $(sectionID).offset().top
            }, 500);
        }
    })

    $('#example1').calendar({
        type: 'date'
    });
    $('#example2').calendar({
        type: 'date'
    });
    $('#example3').calendar({
        type: 'time'
    });
    $('#example4').calendar({
        type: 'time'
    });
    $('#example5').calendar({
        type: 'date'
    });

    const inputElements = [...document.querySelectorAll('input.code-input')]

    inputElements.forEach((ele, index) => {
        ele.addEventListener('keydown', (e) => {
            // if the keycode is backspace & the current field is empty
            // focus the input before the current. Then the event happens
            // which will clear the "before" input box.
            if (e.keyCode === 8 && e.target.value === '') inputElements[Math.max(0, index - 1)].focus()
        })
        ele.addEventListener('input', (e) => {
            // take the first character of the input
            // this actually breaks if you input an emoji like 👨‍👩‍👧‍👦....
            // but I'm willing to overlook insane security code practices.
            const [first, ...rest] = e.target.value
            e.target.value = first ?? '' // first will be undefined when backspace was entered, so set the input to ""
            const lastInputBox = index === inputElements.length - 1
            const didInsertContent = first !== undefined
            if (didInsertContent && !lastInputBox) {
                // continue to input the rest of the string
                inputElements[index + 1].focus()
                inputElements[index + 1].value = rest.join('')
                inputElements[index + 1].dispatchEvent(new Event('input'))
            }
        })
    })


    // mini example on how to pull the data on submit of the form
    function onSubmit(e) {
        e.preventDefault()
        const code = inputElements.map(({ value }) => value).join('')
        console.log(code)
    }

    $(document).ready(function () {
        const minus = $('.quantity__minus');
        const plus = $('.quantity__plus');
        const input = $('.quantity__input');
        minus.click(function (e) {
            e.preventDefault();
            var value = input.val();
            if (value > 1) {
                value--;
            }
            input.val(value);
        });

        plus.click(function (e) {
            e.preventDefault();
            var value = input.val();
            value++;
            input.val(value);
        })
    });

    $('.index-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 825,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    arrows: false
                }
            },
        ]
    });


    $('.m-silder').slick({
        dots: false,
        // arrows: true,
        prevArrow: '<button class="tabbing-arrow tabbing-prev-arrow"><i class="fas fa-angle-left"></i></button>',
        nextArrow: '<button class="tabbing-arrow tabbing-next-arrow"><i class="fas fa-angle-right"></i></button>',
        infinite: true,
        fade: false,
        speed: 1000,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 1023,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
        ]
    });

    $('.product-slid').slick({
        dots: false,
        // arrows: true,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-angle-left"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-angle-right"></i></button>',
        infinite: true,
        fade: false,
        speed: 1000,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });

    $('.client-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 1000,
        slidesToShow: 3,
        slidesToScroll: 1,
        // autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });

    $('.event-slider').slick({
        dots: false,
        arrows: false,
        speed: 1000,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1023,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false

                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false

                }
            },
            {
                breakpoint: 300,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false

                }
            },
        ]
    });


    // counter javascript start


    $('.count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

    // counter javascript end



    // $('.our-faq li.active p').slideDown();
    // $('ul.our-faq li h4').click(function () {
    //     $('.our-faq li').removeClass('active');
    //     $(this).parent('li').addClass('active');
    //     $('.our-faq li p').slideUp();
    //     $(this).parent('li').find('p').slideDown();
    // });

    // $('.our-faq>li').click(function () {
    //     $(this).addClass('active');
    //     $(this).siblings().removeClass('active');
    // });

    $('.fancybox-media').fancybox({
        openEffect: 'none',
        closeEffect: 'none',
        helpers: {
            media: {}
        }
    });

    $('.searchBtn').click(function () {
        $('.searchWrap').addClass('active');
        $('.overlay').fadeIn('active');
        $('.searchWrap input').focus();
        $('.searchWrap input').focusout(function (e) {
            $(this).parents().removeClass('active');
            $('.overlay').fadeOut('active');
            $('body').removeClass('ovr-hiddn');

        });
    });

});


$(window).on('load', function () {
    var currentUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
    $('ul.menu li a').each(function () {
        var hrefVal = $(this).attr('href');
        if (hrefVal == currentUrl) {
            $(this).removeClass('active');
            $(this).closest('li').addClass('active')
            $('ul.menu li.first').removeClass('active');
        }
    })

});

// tabing

$('[data-targetit]').on('click', function (e) {
    $(this).addClass('current');
    $(this).siblings().removeClass('current');
    var target = $(this).data('targetit');
    $('.' + target).siblings('[class^="box-"]').hide();
    $('.' + target).fadeIn();
});


// sticky header

$(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
        $('').addClass("box-visable");
    }
    else {
        $('').removeClass("box-visable");
    }
});


// slider additional js for tabbing
$("[data-targetit]").on("click", function (e) {
    $(".test").slick("setPosition");
});

$(function () {

    $('#eye').click(function () {

        if ($(this).hasClass('fa-eye-slash')) {

            $(this).removeClass('fa-eye-slash');

            $(this).addClass('fa-eye');

            $('#password').attr('type', 'text');

        } else {

            $(this).removeClass('fa-eye');

            $(this).addClass('fa-eye-slash');

            $('#password').attr('type', 'password');
        }
    });
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function () {
    readURL(this);
});

// const boxes = document.querySelectorAll('.testimonial-box');
// let maxHeight = 0;

// boxes.forEach(box => {
//   const boxHeight = box.offsetHeight;
//   if (boxHeight > maxHeight) {
//     maxHeight = boxHeight;
//   }
// });

// boxes.forEach(box => {
//   box.style.height = `${maxHeight}px`;
// });