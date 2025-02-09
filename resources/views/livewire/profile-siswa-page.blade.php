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
            <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
                style="background-image: url('{{ asset("assets/images/sdn/bg_asli.png") }}')">
                <div class="container">
                    <div class="row align-items-center ">

                        <div class="col-md-5 mt-5 pt-5">
                            <span class="text-cursive h5 text-light">Proflie</span>
                            <h1 class="mb-3 font-weight-bold text-teal">Profile Siswa</h1>
                            <p><a href="{{ url('/') }}" class="text-white">Beranda</a> <span class="mx-3">/</span>
                                <strong>Profile Siswa</strong></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Kelas Section -->
        <div class="site-section bg-teal">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <span class="text-cursive h5 text-black d-block">Profile Kelas Siswa</span>
                        <h3 class="text-white text-center font-bold">SDN PEDURUNGAN KIDUL 04</h3>
                    </div>
                </div>

                <div class="row">
                    <!-- Siswa Items -->
                    <div class="col-lg-4 mb-4 mb-lg-0 pb-3 justify-center">
                        <div class="bg-white rounded-lg shadow-sm">
                            <a class="mb-2" href="{{ url('/profile-siswa/2') }}">
                                <span class="img-fluid d-flex justify-content-center"><img
                                        src="{{ asset('assets/images/sdn/kelas.png') }}" alt="Image" class=""></span>
                            </a>
                            <div class="px-4 py-4">
                                <h5 class="mb-2 font-bold tracking-tight text-gray-900">Kelas 1</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0 pb-3 justify-center">
                        <div class="bg-white rounded-lg shadow-sm">
                            <a class="mb-2" href="{{ url('/profile-siswa/1') }}">
                                <span class="img-fluid d-flex justify-content-center"><img
                                        src="{{ asset('assets/images/sdn/kelas.png') }}" alt="Image" class=""></span>
                            </a>
                            <div class="px-4 py-4">
                                <h5 class="mb-2 font-bold tracking-tight text-gray-900">Kelas 2</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0 pb-3 justify-center">
                        <div class="bg-white rounded-lg shadow-sm">
                            <a class="mb-2" href="{{ url('/profile-siswa/2') }}">
                                <span class="img-fluid d-flex justify-content-center"><img
                                        src="{{ asset('assets/images/sdn/kelas.png') }}" alt="Image" class=""></span>
                            </a>
                            <div class="px-4 py-4">
                                <h5 class="mb-2 font-bold tracking-tight text-gray-900">Kelas 3</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>