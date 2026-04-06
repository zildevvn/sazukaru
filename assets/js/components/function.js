

(function ($) {
    "use strict";

    function initIframeResize() {
        window.addEventListener('message', function (e) {
            // Adjust the height depending on the message format from the iframe
            if (e.data) {
                let newHeight = null;

                // Typical iframe resizer message format
                if (typeof e.data === 'string' && e.data.indexOf('iframeHeight') !== -1) {
                    try {
                        const parsed = JSON.parse(e.data);
                        newHeight = parsed.iframeHeight || parsed.height;
                    } catch (error) { }
                } else if (typeof e.data === 'object' && e.data.height) {
                    newHeight = e.data.height;
                } else if (typeof e.data === 'string' && !isNaN(e.data)) {
                    newHeight = e.data;
                } else if (e.data.type === 'setHeight' && e.data.height) {
                    newHeight = e.data.height;
                }

                if (newHeight) {
                    $('.event-list').css('height', newHeight + 'px');
                    $('.event-list iframe').css('height', newHeight + 'px');
                }
            }
        });
    }

    function initHeaderScroll() {
        let lastScrollTop = 0;
        const $headerMain = $('#site-header');
        const $headerScroll = $('#header-scroll');
        const scrollThreshold = $headerMain.outerHeight() || 100;

        $(window).on('scroll', function () {
            let scrollTop = $(this).scrollTop();

            // Detect scroll direction and prevent jitter
            if (Math.abs(lastScrollTop - scrollTop) <= 5) return;

            // Add is-scrolled when scrollY > threshold
            if (scrollTop > scrollThreshold) {
                $headerScroll.addClass('is-scrolled');
            } else {
                $headerScroll.removeClass('is-scrolled');
            }

            lastScrollTop = scrollTop;
        });
    }

    function initMarquee() {
        const $marquees = $('.partners-section__marquee, .logos-section__marquee, .text-marquee');
        $marquees.each(function () {
            const $this = $(this);
            // Duplicate the content to allow for a seamless infinite scroll loop
            const content = $this.html();
            $this.append(content);
        });
    }

    function initFaqAccordion() {
        $('.faq-item.is-active .faq-item__answer').show();

        $('.faq-item__question').on('click', function () {
            const $parent = $(this).parent();
            const $answer = $parent.find('.faq-item__answer');

            $('.faq-item').not($parent).removeClass('is-active').find('.faq-item__answer').slideUp();

            $parent.toggleClass('is-active');
            $answer.slideToggle();
        });
    }

    function initBackToTop() {
        const $btnTop = $('.btn-top');
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 100) {
                $btnTop.addClass('is-visible');
            } else {
                $btnTop.removeClass('is-visible');
            }
        });

        $btnTop.on('click', function (e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    $(document).ready(function () {
        initHeaderScroll();
        // initMarquee();
        // initFaqAccordion();
        // initIframeResize();
        initBackToTop();

        AOS.init({
            once: false
        });
    });
})(jQuery); 