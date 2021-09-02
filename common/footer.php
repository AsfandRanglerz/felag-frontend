        <footer class="footer">
            <div class="footer-inner-upper wow fadeInUp" data-wow-duration="2s">
                <div class="footer-logo">
<!--                    <img src="images/footer/footer-logo.svg" />-->
                    <span class="footer-logo-text">Logo</span>
                </div>
                <div>
                    <h5>Navigation</h5>
                    <ul class="mb-0 list-style-none">
                        <li><a href="#" class="link">See all features</a></li>
                        <li><a href="#" class="link">Prices</a></li>
                        <li><a href="#" class="link">Support</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Our solutions</h5>
                    <ul class="mb-0 list-style-none">
                        <li><a href="#" class="link">Management system</a></li>
                        <li><a href="#" class="link">Digital lease</a></li>
                        <li><a href="#" class="link">Collection of rent</a></li>
                        <li><a href="#" class="link">Deposit account and other security</a></li>
                        <li><a href="#" class="link">Rent guarantee from Aprila Bank</a></li>
                        <li><a href="#" class="link">Occupancy protocol and relocation protocol</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Resources</h5>
                    <ul class="mb-0 list-style-none">
                        <li><a href="#" class="link">front page</a></li>
                        <li><a href="#" class="link">sign in</a></li>
                        <li><a href="#" class="link">create user</a></li>
                        <li><a href="#" class="link">Terms of use</a></li>
                        <li><a href="#" class="link">Privacy statement</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Contact Us</h5>
                    <ul class="mb-0 list-style-none">
                        <li>Karenslyst Allé 56, 0277 Oslo</li>
                        <li>kundeservice@presisutleie.no</li>
                    </ul>
                </div>
            </div>
            <div class="footer-inner-below wow fadeInUp" data-wow-duration="2s">
                <p class="mb-0">Powered by Garantihuset AS</p>
                <p class="copyright-text">Copyright <span id="current-year"></span> Precise Rentals</p>
            </div>
        </footer>
    </body>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.5.0.min.js"></script>
    <script src="js/lightgallery-all.min.js"></script>
        <script src="plugins/WOW-master/js/wow.min.js"></script>
    <script src="js/main.js"></script>
        <script>
            $(function() {
                /*wow animation*/
                wow = new WOW(
                    {
                        boxClass:     'wow',      // default
                        animateClass: 'animated', // default
                        offset:       0,          // default
                        mobile:       true,       // default
                        live:         true        // default
                    }
                )
                wow.init();
                /*wow animation*/

                /*footer*/
                var currentYear = (new Date).getFullYear();
                $('.footer #current-year').text(currentYear);
                /*footer*/

                /*header view, if user not at page top*/
                if ($(window).scrollTop() != 0) {
                    $('.header-navbar').addClass('bg-white light-box-shadow');
                    if ($(window).width() >= 992) {
                        $('.sign-in-btn').css({'border': '2px solid #48a955', 'color': '#48a955'});
                    }
                    $('.header-navbar .navbar-links .nav-link').css({'color': '#000', 'text-shadow': 'unset'});
                    $('.header-navbar .navbar-brand .feelag-logo').css('filter', 'invert(1)');
                }
                /*header view, if user not at page top*/

                $(window).on('scroll', function () {
                    /*header view on scroll*/
                    $('.header-navbar').addClass('bg-white light-box-shadow');
                    if ($(window).width() >= 992) {
                        $('.sign-in-btn').css({'border': '2px solid #48a955', 'color': '#48a955'});
                        if ($(window).scrollTop() == 0) {
                            $('.sign-in-btn').css({'border': '2px solid #FFF', 'color': '#FFF'});
                        }
                    }
                    $('.header-navbar .navbar-links .nav-link').css({'color': '#000', 'text-shadow': 'unset'});
                    $('.header-navbar .navbar-brand .feelag-logo').css('filter', 'invert(1)');
                    if ($(window).scrollTop() == 0) {
                        $('.header-navbar').removeClass('bg-white light-box-shadow');
                        $('.header-navbar .navbar-links .nav-link').css({'color': '', 'text-shadow': ''});
                        $('.header-navbar .navbar-brand .feelag-logo').css('filter', '');
                    }
                    /*header view on scroll*/
                });

                if ($(window).width() >= 992) {
                    /*header navbar link hover effect*/
                    $(".header-navbar .navbar-nav .nav-item.dropdown").hover(function () {
                        $(this).addClass("show");
                        $(this).find(".dropdown-menu").addClass("show");
                    }, function () {
                        $(this).removeClass("show");
                        $(this).find(".dropdown-menu").removeClass("show");
                    });
                    /*header navbar link hover effect*/
                }

                $(window).resize(function () {
                    if ($(window).width() >= 992) {
                        /*header navbar link hover effect*/
                        $(".header-navbar .navbar-nav .nav-item.dropdown").hover(function () {
                            $(this).addClass("show");
                            $(this).find(".dropdown-menu").addClass("show");
                        }, function () {
                            $(this).removeClass("show");
                            $(this).find(".dropdown-menu").removeClass("show");
                        });
                        /*header navbar link hover effect*/
                    }
                });
            });
        </script>
</html>
