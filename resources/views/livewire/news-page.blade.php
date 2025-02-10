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

        @if (!isset($hideHero))
            <!-- hero -->
            <div class="ftco-blocks-cover-1">
                <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
                    style="background-image: url('{{ asset("assets/images/sdn/bg_asli.png") }}')">
                    <div class="container">
                        <div class="row align-items-center ">

                            <div class="col-md-5 mt-5 pt-5">
                                <span class="text-cursive h5 text-light">Berita</span>
                                <h1 class="mb-3 font-weight-bold text-teal">Berita Terkait</h1>
                                <p><a href="{{ url('/') }}" class="text-white">Beranda</a> <span class="mx-3">/</span>
                                    <strong>Berita</strong>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!-- Berita -->
        <div class="site-section bg-info">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <span class="text-cursive h5 text-black d-block">Berita Terkini</span>
                        <h3 class="text-white text-center font-bold">SDN PEDURUNGAN KIDUL 04</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0 pb-5 justify-center">
                        <div class="bg-white rounded-lg shadow-sm">
                            <a class="mb-2" href="#">
                                <span class="img-wrap"><img src="{{ asset('assets/images/sdn/berita1.jpeg') }}"
                                        alt="Image"></span>
                            </a>
                            <div class="px-4 py-4">
                                <a href="#">
                                    <h5 class="mb-2 font-bold tracking-tight text-gray-900">Pelatihan Batik Jumputan
                                        Kelas IV</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">PPG Prajabatan merupakan
                                    program yang menghasilkan guru inovatif dan profesional di Indonesia. Program PPG
                                    prajabatan tahun 2023 berlangsung selama dua semester.
                                </p>
                                <a href="https://www.kompasiana.com/linda12246/66003dd714709323d04d8fb2/pelatihan-batik-jumputan-siswa-kelas-iv-sdn-pedurungan-kidul-04-semarang"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0 pb-5 justify-center">
                        <div class="bg-white rounded-lg shadow-sm">
                            <a class="mb-2" href="#">
                                <span class="img-wrap"><img src="{{ asset('assets/images/post_2.jpg') }}"
                                        alt="Image"></span>
                            </a>
                            <div class="px-4 py-4">
                                <a href="#">
                                    <h5 class="mb-2 font-bold tracking-tight text-gray-900">Noteworthy technology
                                        acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                    enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                </p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0 pb-5 justify-center">
                        <div class="bg-white rounded-lg shadow-sm">
                            <a class="mb-2" href="#">
                                <span class="img-wrap"><img src="{{ asset('assets/images/post_2.jpg') }}"
                                        alt="Image"></span>
                            </a>
                            <div class="px-4 py-4">
                                <a href="#">
                                    <h5 class="mb-2 font-bold tracking-tight text-gray-900">Noteworthy technology
                                        acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                    enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                </p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0 pb-5 justify-center">
                        <div class="bg-white rounded-lg shadow-sm">
                            <a class="mb-2" href="#">
                                <span class="img-wrap"><img src="{{ asset('assets/images/post_2.jpg') }}"
                                        alt="Image"></span>
                            </a>
                            <div class="px-4 py-4">
                                <a href="#">
                                    <h5 class="mb-2 font-bold tracking-tight text-gray-900">Noteworthy technology
                                        acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                    enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                </p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if (!isset($hideHero))
        @endif
    </div>
</body>