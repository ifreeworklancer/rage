import jquery from 'jquery';
import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal';
import IMask from 'imask';

window.jQuery = window.$ = jquery;

let mapboxgl = require('mapbox-gl/dist/mapbox-gl.js');


(function () {

    /**
     * Burger-menu
     */
    let menu = $('.menu');
    let burgerMenu = $('.burger-menu');
    $(burgerMenu).click(function () {
        $(this).toggleClass('active');
        menu.slideToggle();
    });

    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 0) {
            $('#app-header').addClass('is-scroll');
        } else {
            $('#app-header').removeClass('is-scroll');
        }
    });

    /**
     * Scroll
     */
    $(".scroll-link").on("click", function (event) {
        event.preventDefault();
        let id = $(this).attr('href');
        if (id.length > 1) {
            let top = ($(id).offset().top - $('#app-header').height());

            $('body,html').animate({
                scrollTop: top
            }, 1500);
        }
        burgerMenu.removeClass('active');
        menu.slideUp();
    });

    /**
     * Form-label
     */

    $('.form-control').on('focus', function () {
        $(this).parents('.form-group').addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        if ($(this).val() !== "") {
            $(this).parents('.form-group').addClass('in-focus');
        } else {
            $(this).parents('.form-group').removeClass('in-focus');
        }
    });

    /**
     * Phone mask
     * @type {*|jQuery.fn.init|jQuery|HTMLElement}
     */
    const phones = $('[type="tel"]');
    Array.from(phones).forEach(phone => {
        new IMask(phone, {
            mask: '+{38} (000) 000-00-00'
        });
    });

    /**
     * Modal
     */
    let feedbackModal = $('.custom-modal--feedback');
    let closeModal = $('.close-modal');
    let modalMask = $('.modal-mask');

    $('.open-feedback').on('click', function (e) {
        e.preventDefault();
        $(feedbackModal).addClass('active');
        $(modalMask).addClass('active');
    });

    $(closeModal).on('click', function () {
        $(feedbackModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    $(modalMask).on('click', function () {
        $(feedbackModal).removeClass('active');
        $(modalMask).removeClass('active');
    });


    /**
     * Youtube video
     */
    $('[data-youtube]').on('click', function () {
        let id = $(this).data('youtube'),
            padding = $(window).innerWidth() > 768 ? 120 : 30,
            ratio = 9 / 16,
            width = $(window).innerWidth() > 768 ? $(window).innerWidth() - padding - 200 : $(window).innerWidth() - padding,
            height = width * ratio,
            html = '<iframe style="width: ' + width + 'px; height: ' + height + 'px;" ' +
                'src="' +
                id + '" frameborder="0" gesture="media" allowfullscreen></iframe>';
        console.log(height);

        $('body').append('<div class="outer">' + html + '</div>');
    });

    $(document).mouseup(function (e) {
        let container = $('.outer iframe');

        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.outer').remove();
        }
    });

    $(document).on('keyup', function (e) {
        if (e.keyCode === 27) {
            if ($(feedbackModal).lenght > 0) {
                $(feedbackModal).removeClass('active');
                $(modalMask).removeClass('active');
            }
        }
    });

    /**
     * Sliders
     */
    if ($('.cooperation-slider')) {

        let elem1 = document.querySelector('.cooperation-slider');
        if (elem1) {
            const flkty1 = new Flickity(elem1, {
                prevNextButtons: false,
                contain: true,
                draggable: false,
                wrapAround: false,
                cellAlign: 'left',
                cellSelector: '.cooperation-item'
            });

            let prevArrowIntro = document.querySelector('.slider-arrow--cooperation .slider-arrow-item--prev');

            prevArrowIntro.addEventListener('click', function () {
                flkty1.previous(false, false);
            });

            let nextArrowIntro = document.querySelector('.slider-arrow--cooperation .slider-arrow-item--next');

            nextArrowIntro.addEventListener('click', function () {
                flkty1.next(false, false);
            });
        }
    }


    /**
     * Animate scroll
     */
    ScrollReveal().reveal('.intro-item', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.about-item', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.about-image', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.package-item', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
        interval: 80
    });
    ScrollReveal().reveal('.package-description', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.trainer-item', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.trainer-image', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });


    /** Mobile check */
    window.mobilecheck = function () {
        let check = false;
        (function (a) {
            if (
                /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(
                    a
                ) ||
                /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
                    a.substr(0, 4)
                )
            )
                check = true;
        })(navigator.userAgent || navigator.vendor || window.opera);
        return check;
    };

    if (!mobilecheck()) {
        let $video = $('.video-container');
        const $link = $video.data('src');
        $video.html('<video src="' + $link + '" loop muted autoplay></video>')
    }

    /**
     * Map
     */
    if ($('#contacts-map').length > 0) {
        $('.map-mask').on('click', function () {
            $(this).addClass('is-disabled');
        });
        let mapLang = $('#contacts-map').data('lang');
        let mapLong = $('#contacts-map').data('long');
        let mapIocn = $('#contacts-map').data('icon');
        mapboxgl.accessToken = 'pk.eyJ1IjoibWFwYm94dXNlcm11c2V1bSIsImEiOiJjanRya2FoZXQwcjVlNDVtdTNlOWNoMzUyIn0.oMm4w0lY15eiIFOcl-gkIA';
        let map = new mapboxgl.Map({
            container: 'contacts-map',
            style: 'mapbox://styles/mapbox/dark-v10',
            center: [mapLong, mapLang],
            zoom: 16
        });

        map.on('load', function () {
            map.loadImage(`${mapIocn}`, function (error, image) {
                if (error) throw error;
                map.addImage('cat', image);
                map.addLayer({
                    "id": "points",
                    "type": "symbol",
                    "source": {
                        "type": "geojson",
                        "data": {
                            "type": "FeatureCollection",
                            "features": [{
                                "type": "Feature",
                                "geometry": {
                                    "type": "Point",
                                    "coordinates": [mapLong, mapLang],
                                }
                            }]
                        }
                    },
                    "layout": {
                        "icon-image": "cat",
                        "icon-size": 1
                    }
                });
            });
        });
    }
})(jQuery);