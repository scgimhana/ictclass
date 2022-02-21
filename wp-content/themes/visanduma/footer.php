<?php if (!defined('ABSPATH')) exit; // Exit if accessed directly      ?>
<div id="footer">
    <footer>
        <div class="container footer-txt">
            &copy; <?php echo date('Y');?> <?php echo get_theme_mod('copyright_text', 'Default copyright message'); ?>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>
<script>
    $('.header .navbar-toggler').on("click", function(e){
        e.stopPropagation();
        e.preventDefault();
        $('.header .navbar-toggler .menu').toggle();
        $('.header .navbar-collapse').toggleClass('show');
        $('.header .navbar-toggler .close-menu').toggleClass('d-none');
        $('.header .sign-sec').toggle();
    });
    $(document).ready(function() {
        var headerHeight = $(this).find("header").outerHeight(true);
        var footerHeight = $(this).find("#footer").outerHeight(true);
        var windowHeight = $(window).height();
        var availableArea = windowHeight - (headerHeight + footerHeight);
        document.getElementById("mainwrapper").style.minHeight = availableArea + "px";

        AOS.init();

        var btn = $('#top');

        $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop:0}, '300');
        });

        $('.courses').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            dots: true,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 1
                }
            }]
        });

    });
</script>
</body>
</html>