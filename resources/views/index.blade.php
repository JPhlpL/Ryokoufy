<!DOCTYPE html>
<html lang="zxx" class="no-js">
@include('includes.header')

<body>
    <div class="protfolio-wrap">

        <!-- Header Area -->
        <header class="default-header">
            <nav class="navbar navbar-expand-lg  navbar-light">
                <div class="container">
                    {{-- <a class="navbar-brand">
                        <img id="logo" src="img/logo.png" alt="ryokoufy">
                    </a> --}}
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="text-white lnr lnr-menu"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end align-items-center"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#portfolio">Places</a></li>
                            <li><a href="#service">Services</a></li>
                            <li><a href="#about">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- End Header Area -->

        <!-- start banner Area -->
        <section class="banner-area relative" id="home">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-center">
                    <div class="banner-content col-lg-10">
                        <h5 class="text-uppercase">Be the part of this Wonderful Journey</h5>
                        <h1>
                            <img id="logo" src="img/logo.png" alt="ryokoufy">
                        </h1>
                        <a href="#" class="primary-btn text-uppercase">Explore Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start portfolio-area Area -->
        <section class="portfolio-area section-gap" id="portfolio">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10">Visit Top 6 Cities in Japan</h1>
                            <p>You will be guided by the location and check current weather condition.</p>
                        </div>
                    </div>
                </div>

                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".north">Hokkaido (North)</li>
                        <li data-filter=".east">Kanto (East)</li>
                        <li data-filter=".central">Chubu (Central)</li>
                        <li data-filter=".south-central">Kinki (South-Central)</li>
                    </ul>
                </div>

                <div class="filters-content">
                    <div class="row grid">
                        <div class="single-portfolio col-sm-4 all north">
                            <div class="item">
                                <img src="{{ URL::asset('img/main/sapporo.jpg')}}" alt="Sapporo">
                                <div class="p-inner">
                                    <h4>Sapporo</a></h4>
                                    <div class="cat">Hokkaido (North)</div>
                                </div>
                            </div>
                        </div>

                        <div class="single-portfolio col-sm-4 all east">
                            <div class="item">
                                <img src="{{ URL::asset('img/main/tokyo.jpg')}}" alt="tokyo">
                                <div class="p-inner">
                                    <h4>Tokyo</h4>
                                    <div class="cat">Kanto (East)</div>
                                </div>
                            </div>
                        </div>
                        <div class="single-portfolio col-sm-4 all east">
                            <div class="item">
                                <img src="{{ URL::asset('img/main/yokohama.jpg')}}" alt="yokohama">
                                <div class="p-inner">
                                    <h5>Yokohama</h5>
                                    <div class="cat">Kanto (East)</div>
                                </div>
                            </div>
                        </div>
                        <div class="single-portfolio col-sm-4 all central">
                            <div class="item">
                                <img src="{{ URL::asset('img/main/nagoya.jpg')}}" alt="Nagoya">
                                <div class="p-inner">
                                    <h5>Nagoya</h5>
                                    <div class="cat">Chubu (Central)</div>
                                </div>
                            </div>
                        </div>

                        <div class="single-portfolio col-sm-4 all south-central">
                            <div class="item">
                                <img src="{{ URL::asset('img/main/kyoto.jpg')}}" alt="Kyoto">
                                <div class="p-inner">
                                    <h4>Kyoto</h4>
                                    <div class="cat">Kinki (South-Central)</div>
                                </div>
                            </div>
                        </div>

                        <div class="single-portfolio col-sm-4 all south-central">
                            <div class="item">
                                <img src="{{ URL::asset('img/main/osaka.jpg')}}" alt="Osaka">
                                <div class="p-inner">
                                    <h4>Osaka</h4>
                                    <div class="cat">Kinki (South-Central)</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- End portfolio-area Area -->


        <!-- Start service Area -->
        <section class="service-area section-gap relative" id="service">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10 text-white">Always in our customer Favour</h1>
                            <p>Who are always with tight Budget</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End service Area -->

        <!-- Start services Area -->
        <section class="services-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-service">
                            <img class="img-fluid" src="img/s1.png" alt="">
                            <h4>Ammenties Selection</h4>
                            <p>
                                It's totaly on you what you want and what you want to let it go on Hotel Selection
                                process.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-service">
                            <img class="img-fluid" src="img/s2.png" alt="">
                            <h4>Visa Ready</h4>
                            <p>
                                Just 32 Hours - What it takes get your Visa Ready and other documentation necessary for
                                travel.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-service">
                            <img class="img-fluid" src="img/s3.png" alt="">
                            <h4>Personalized Travel Plans</h4>
                            <p>
                                We have wide Varieties of Hotel &amp; Resorts to accomodate you. 3D4N or 15D16N totally
                                upto you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End services Area -->

        <!-- Start review Area -->
        <section class="review-area section-gap" id="testimonial">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10">How Our Customers felt for Us</h1>
                            <p>Who are in extreme love with friendly &amp; inviting people</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-review">
                            <img src="img/c1.png" alt="">
                            <div class="title d-flex flex-row">
                                <a href="#">
                                    <h4>Fannie Rowe</h4>
                                </a>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                            <p>
                                It was a life Experience to visit such a beautiful cultural country.
                            </p>
                        </div>
                        <div class="single-review">
                            <img src="img/c3.png" alt="">
                            <div class="title d-flex flex-row">
                                <a href="#">
                                    <h4>Lillie Summers</h4>
                                </a>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                            <p>
                                Just one Word - Incredible!
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-review">
                            <img src="img/c2.png" alt="">
                            <div class="title d-flex flex-row">
                                <a href="#">
                                    <h4>Bob Marley</h4>
                                </a>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-starchecked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                            <p>
                                Damm! I'm thinking of staying here in this World.
                            </p>
                        </div>
                        <div class="single-review">
                            <img src="img/c4.png" alt="">
                            <div class="title d-flex flex-row">
                                <a href="#">
                                    <h4>Jackie Chan</h4>
                                </a>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                            <p>
                                Now, I am big fan of Power Yoga. Thanks for such a gift to this world.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End review Area -->


        <!-- start footer Area -->
        <section class="banner-area relative" id="about">
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6>About Us</h6>
                                <p class="footer-p">
                                    We Provide Tour Plans for your most comfortable travel ever. Let yourself dive into the
                                    Beauty, Culture &amp; festivals of India. Have You're Good time at India.
                                </p>
                                <p class="footer-text">
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5  col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6>Newsletter</h6>
                                <p class="footer-p">Stay update with our latest</p>
                                <div class="" id="mc_embed_signup">
                                    <form target="_blank" action="" method="get" class="form-inline">
                                        <input class="form-control" name="EMAIL" placeholder="Enter Email"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter Your Email Here '" required=""
                                            type="email">
                                        <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                                aria-hidden="true"></i></button>

                                        <div class="info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                            <div class="single-footer-widget">
                                <h6>Follow Us</h6>
                                <p class="footer-p">Let us be social</p>
                                <div class="footer-social d-flex align-items-center">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-snapchat"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </section>
        <!-- End footer Area -->
    </div>
</body>
@include('includes.footer')

</html>
