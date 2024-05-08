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
                            <li><a title='links' href="#home">Home</a></li>
                            <li><a title='links' href="#portfolio">Places</a></li>
                            <li><a title='links' href="#about">About Us</a></li>
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
                        <a title='links' href="#" class="primary-btn text-uppercase">Explore Now</a>
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

                        <a title='links' href="#" class="text-dark btn-modal" value="Sapporo">
                            <div class="single-portfolio col-sm-4 all north">

                                <div class="item">
                                    <img src="{{ URL::asset('img/main/sapporo.jpg') }}" alt="Sapporo">
                                    <div class="p-inner">
                                        <h4>Sapporo
                        </a></h4>
                        <div class="cat">Hokkaido (North)</div>
                        {{-- <article class="widget">
                                                <div class="weatherIcon"><i class="wi wi-day-cloudy"></i></div>
                                                <div class="weatherInfo">
                                                  <div class="temperature"><span>25&deg;</span></div>
                                                  <div class="description">
                                                    <div class="weatherCondition">CLOUDY</div>
                                                    <div class="place">New York, New York</div>
                                                  </div>
                                                </div>
                                                <div class="date">1st Jan</div>
                                            </article> --}}
                    </div>

                </div>
                {{--  --}}



            </div>
            </a>

            <a title='links' href="#" class="text-dark btn-modal"value="Tokyo">
                <div class="single-portfolio col-sm-4 all east">

                    <div class="item">
                        <img src="{{ URL::asset('img/main/tokyo.jpg') }}" alt="tokyo">
                        <div class="p-inner">
                            <h4>Tokyo</h4>
                            <div class="cat">Kanto (East)</div>
                        </div>
                    </div>
                </div>

            </a>

            <a title='links' href="#" class="text-dark btn-modal"value="Yokohama">
                <div class="single-portfolio col-sm-4 all east">

                    <div class="item">
                        <img src="{{ URL::asset('img/main/yokohama.jpg') }}" alt="yokohama">
                        <div class="p-inner">
                            <h5>Yokohama</h5>
                            <div class="cat">Kanto (East)</div>
                        </div>
                    </div>
                </div>

            </a>

            <a title='links' href="#" class="text-dark btn-modal"value="Nagoya">
                <div class="single-portfolio col-sm-4 all central">

                    <div class="item">
                        <img src="{{ URL::asset('img/main/nagoya.jpg') }}" alt="Nagoya">
                        <div class="p-inner">
                            <h5>Nagoya</h5>
                            <div class="cat">Chubu (Central)</div>
                        </div>
                    </div>
                </div>

            </a>

            <a title='links' href="#" class="text-dark btn-modal"value="Kyoto">
                <div class="single-portfolio col-sm-4 all south-central">

                    <div class="item">
                        <img src="{{ URL::asset('img/main/kyoto.jpg') }}" alt="Kyoto">
                        <div class="p-inner">
                            <h4>Kyoto</h4>
                            <div class="cat">Kinki (South-Central)</div>
                        </div>
                    </div>

                </div>
            </a>

            <a title='links' href="#" class="text-dark btn-modal" value="Osaka">
                <div class="single-portfolio col-sm-4 all south-central">

                    <div class="item">
                        <img src="{{ URL::asset('img/main/osaka.jpg') }}" alt="Osaka">
                        <div class="p-inner">
                            <h4>Osaka</h4>
                            <div class="cat">Kinki (South-Central)</div>
                        </div>
                    </div>

                </div>
            </a>

    </div>
    </div>

    </div>
    </section>
    <!-- End portfolio-area Area -->

    <!-- Start review Area -->
    <section class="review-area section-gap" id="testimonial">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Feedback from Our Tourists</h1>
                        <p>Who are enjoyed staying on those cities.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-review">
                        <div class="title d-flex flex-row">
                            <a title='links' href="#">
                                <h4>Dennis Ritchie</h4>
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
                        <div class="title d-flex flex-row">
                            <a title='links' href="#">
                                <h4>Ada Lovelace</h4>
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
                            My favorite city and my heart is in Nagoya!
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-review">
                        <div class="title d-flex flex-row">
                            <a title='links' href="#">
                                <h4>Mark Zuckerberg</h4>
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
                            Great culture and lovely people!
                        </p>
                    </div>
                    <div class="single-review">
                        <div class="title d-flex flex-row">
                            <a title='links' href="#">
                                <h4>Bjarn Stroustrup</h4>
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
                            I can feel the fresh air and great ambiance too in Yokohama.
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
                                Beauty, Culture &amp; festivals of Japan.
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
                                        onblur="this.placeholder = 'Enter Your Email Here '" required
                                        type="email">
                                    <button title="inquiry" class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
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
                                <a title='links' href="#"><i class="fa fa-facebook"></i></a>
                                <a title='links' href="#"><i class="fa fa-twitter"></i></a>
                                <a title='links' href="#"><i class="fa fa-snapchat"></i></a>
                                <a title='links' href="#"><i class="fa fa-instagram"></i></a>
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
