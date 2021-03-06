<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>

    <header>
        <?php
        include './views/components/nav.php';
        ?>
    </header>

    <div>
        <?php
        $mvc = new Controller();
        $mvc->get_page();
        ?>
    </div>

    <footer>
        <section class="w3l-footers-1">
            <div class="footer py-3">
                <div class="container">
                    <div class="footer-content">
                        <div class="row">
                            <div class="col-lg-8 footer-left">
                                <p class="m-0">&copy; 2020 Eccentric Portfolio. All Rights Reserved | Design by <a href="https://w3layouts.com">W3layouts</a></p>
                            </div>
                            <div class="col-lg-4 footer-right text-lg-right text-center mt-lg-0 mt-3">
                                <ul class="social m-0 p-0">
                                    <li><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#linkedin"><span class="fa fa-linkedin"></span></a></li>
                                    <li><a href="#instagram"><span class="fa fa-instagram"></span></a></li>
                                    <li><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- //Footer -->

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" class="editContent" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->

    <!-- common jquery -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->


    <!-- for blog carousel slider -->
    <script src="assets/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                stagePadding: 20,
                margin: 15,
                nav: false,
                loop: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        })
    </script>
    <!-- //for blog carousel slider -->


    <!-- stats number counter-->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats number counter -->

    <!-- jQuery-Photo-filter-lightbox-portfolio-plugin -->
    <script src="assets/js/jquery-1.7.2.js"></script>
    <script src="assets/js/jquery.quicksand.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->

    <!--  bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--  //bootstrap js -->

</body>

</html>