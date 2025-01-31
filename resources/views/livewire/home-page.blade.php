<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar site-navbar-target" role="banner">

            <div class="container mb-3">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto">
                        <a href="index.html">Kiddy<span class="text-primary">.</span></a>
                    </div>
                    <div class="site-quick-contact d-none d-lg-flex ml-auto ">
                        <div class="d-flex site-info align-items-center mr-5">
                            <span class="block-icon mr-3"><span class="icon-map-marker text-yellow"></span></span>
                            <span>34 Street Name, City Name Here, <br> United States</span>
                        </div>
                        <div class="d-flex site-info align-items-center">
                            <span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
                            <span>Sunday - Friday 8:00AM - 4:00PM <br> Saturday CLOSED</span>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="menu-wrap d-flex align-items-center">
                    <span class="d-inline-block d-lg-none"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black"></span></a></span>

                    <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto ">
                            <li class="active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                            <li><a href="{{ url('/news') }}" class="nav-link">News</a></li>
                            <li><a href="{{ url('/packages') }}" class="nav-link">Packages</a></li>
                            <li><a href="{{ url('/gallery') }}" class="nav-link">Gallery</a></li>
                            <li><a href="{{ url('/pricing') }}" class="nav-link">Pricing</a></li>
                            <li><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                        </ul>
                    </nav>

                    <div class="top-social ml-auto">
                        <a href="#"><span class="icon-facebook text-teal"></span></a>
                        <a href="#"><span class="icon-twitter text-success"></span></a>
                        <a href="#"><span class="icon-linkedin text-yellow"></span></a>
                    </div>
                </div>
            </div>



        </header>

        <div class="ftco-blocks-cover-1">

            <div class="site-section-cover overlay">
                <div class="container">
                    <div class="row align-items-center ">
                        <div class="col-md-5 mt-5 pt-5">
                            <span class="text-cursive h5 text-red">Welcome To Our Website</span>
                            <h1 class="mb-3 font-weight-bold text-teal">Bring Fun Life To Your Kids</h1>
                            <p>Amazing Playground for your kids</p>
                            <p class="mt-5"><a href="#" class="btn btn-primary py-4 btn-custom-1">Learn More</a></p>
                        </div>
                        <div class="col-md-6 ml-auto align-self-end">
                            <img src="{{ asset('assets/images/kid_transparent.png') }}" alt="Image" class="img-fluid">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="block-2 red">
                            <span class="wrap-icon">
                                <span class="icon-home"></span>
                            </span>
                            <h2>Indoor Games</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt, mollitia, hic enim id culpa.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="block-2 yellow">
                            <span class="wrap-icon">
                                <span class="icon-person"></span>
                            </span>
                            <h2>Outdoor Game And Event</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt, mollitia, hic enim id culpa.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="block-2 teal">
                            <span class="wrap-icon">
                                <span class="icon-cog"></span>
                            </span>
                            <h2>Camping for Kids</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt, mollitia, hic enim id culpa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <img src="{{ asset('assets/images/img_1.jpg') }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-md-5 ml-auto pl-md-5">
                        <span class="text-cursive h5 text-red">About Us</span>
                        <h3 class="text-black">Bring Fun Life To Your Kids</h3>
                        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et harum, magni sequi nostrum maxime enim.</span><span>Magnam id atque dicta deleniti, ipsam ipsum distinctio. Facilis praesentium voluptatem accusamus, earum veritatis, laudantium.</span></p>

                        <p class="mt-5"><a href="#" class="btn btn-warning py-4 btn-custom-1">More About Us</a></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section bg-info">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <span class="text-cursive h5 text-red d-block">Packages You Like</span>
                        <h2 class="text-white">Our Packages</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="package text-center bg-white">
                            <span class="img-wrap"><img src="{{ asset('assets/images/flaticon/svg/001-jigsaw.svg') }}" alt="Image" class="img-fluid"></span>
                            <h3 class="text-teal">Indoor Games</h3>
                            <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta recusandae?</p>
                            <p><a href="#" class="btn btn-primary btn-custom-1 mt-4">Learn More</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="package text-center bg-white">
                            <span class="img-wrap"><img src="{{ asset('assets/images/flaticon/svg/002-target.svg') }}" alt="Image" class="img-fluid"></span>
                            <h3 class="text-success">Outdoor Game and Event</h3>
                            <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta recusandae?</p>
                            <p><a href="#" class="btn btn-warning btn-custom-1 mt-4">Learn More</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="package text-center bg-white">
                            <span class="img-wrap"><img src="{{ asset('assets/images/flaticon/svg/003-mission.svg') }}" alt="Image" class="img-fluid"></span>
                            <h3 class="text-danger">Camping for Kids</h3>
                            <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta recusandae?</p>
                            <p><a href="#" class="btn btn-success btn-custom-1 mt-4">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span class="text-cursive h5 text-red d-block">Pricing Plan</span>
                        <h2 class="text-black">Our Pricing</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quis cupiditate fugit, voluptatibus ullam, non laboriosam alias veniam, ex inventore iure sed?</p>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing teal">
                            <span class="price">
                                <span>$30</span>
                            </span>
                            <h3>Silver Pack</h3>
                            <ul class="ul-check list-unstyled teal">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipisicing elit</li>
                                <li>Nemo quis cupiditate</li>
                            </ul>
                            <p><a href="#" class="btn btn-teal btn-custom-1 mt-4">Buy Now</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing danger">
                            <span class="price">
                                <span>$70</span>
                            </span>
                            <h3>Golden Pack</h3>
                            <ul class="ul-check list-unstyled danger">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipisicing elit</li>
                                <li>Nemo quis cupiditate</li>
                            </ul>
                            <p><a href="#" class="btn btn-danger btn-custom-1 mt-4">Buy Now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <span class="text-cursive h5 text-red d-block">Testimonial</span>
                        <h2 class="text-black">What Our Client Says About Us</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="testimonial-3-wrap">


                            <div class="owl-carousel nonloop-block-13">
                                <div class="testimonial-3 d-flex">
                                    <div class="vcard-wrap mr-5">
                                        <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image" class="vcard img-fluid">
                                    </div>
                                    <div class="text">
                                        <h3>Jeff Woodland</h3>
                                        <p class="position">Partner</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam earum libero rem maxime magnam. Similique esse ab earum, autem consectetur.</p>
                                    </div>
                                </div>

                                <div class="testimonial-3 d-flex">
                                    <div class="vcard-wrap mr-5">
                                        <img src="{{ asset('assets/images/person_3.jpg') }}" alt="Image" class="vcard img-fluid">
                                    </div>
                                    <div class="text">
                                        <h3>Jeff Woodland</h3>
                                        <p class="position">Partner</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam earum libero rem maxime magnam. Similique esse ab earum, autem consectetur.</p>
                                    </div>
                                </div>

                                <div class="testimonial-3 d-flex">
                                    <div class="vcard-wrap mr-5">
                                        <img src="{{ asset('assets/images/person_2.jpg') }}" alt="Image" class="vcard img-fluid">
                                    </div>
                                    <div class="text">
                                        <h3>Jeff Woodland</h3>
                                        <p class="position">Partner</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam earum libero rem maxime magnam. Similique esse ab earum, autem consectetur.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-lg-3 text-center">
                                <span class="text-teal h2 d-block">3423</span>
                                <span>Happy Client</span>
                            </div>
                            <div class="col-lg-3 text-center">
                                <span class="text-yellow h2 d-block">4398</span>
                                <span>Members</span>
                            </div>
                            <div class="col-lg-3 text-center">
                                <span class="text-success h2 d-block">50+</span>
                                <span>Staffs</span>
                            </div>
                            <div class="col-lg-3 text-center">
                                <span class="text-danger h2 d-block">2000+</span>
                                <span>Our Followers</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>