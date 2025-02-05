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

        <!-- hero -->
        <div class="ftco-blocks-cover-1">
            <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('{{ asset('assets/images/sdn/bg_asli.png') }}')">
                <div class="container">
                    <div class="row align-items-center ">

                        <div class="col-md-5 mt-5 pt-5">
                            <span class="text-cursive h5 text-light">Berita</span>
                            <h1 class="mb-3 font-weight-bold text-teal">Berita Terkait</h1>
                            <p><a href="{{ url('/') }}" class="text-white">Beranda</a> <span class="mx-3">/</span> <strong>Berita</strong></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Berita -->
        <div class="site-section bg-info">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <span class="text-cursive h5 text-black d-block">Berita Sekolah</span>
                        <h3 class="text-white text-center font-bold">SDN PEDURUNGAN KIDUL 04</h3>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-5">
                    <div href="#" class="flex flex-col items-center bg-white rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100">
                        <div class="h-full w-full"><img src="{{ asset('assets/images/post_2.jpg') }}" alt="Image" class="h-full w-full"></div>
                        <div class="flex flex-col justify-between px-5 py-3 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>