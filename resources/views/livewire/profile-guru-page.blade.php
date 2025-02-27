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
            <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('{{ asset("assets/images/sdn/bg_asli.png") }}')">
                <div class="container">
                    <div class="row align-items-center ">

                        <div class="col-md-5 mt-5 pt-5">
                            <h1 class="mb-3 font-weight-bold text-teal">Profile Guru</h1>
                            <p><a href="{{ url('/') }}" class="text-white">Beranda</a> <span class="mx-3">/</span> <strong>Profile Guru</strong></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Guru -->
        <div class="site-section bg-gray-200">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <span class="font-education h4 text-black d-block">Guru</span>
                        <h3 class="text-black text-center font-bold">SDN PEDURUNGAN KIDUL 04</h3>
                    </div>
                </div>

                <div class="row">
                    @foreach ($teachers as $teacher)
                        <div class="col-lg-4 mb-4 mb-lg-0 pb-3 justify-center">
                            <div class="bg-white rounded-lg shadow-sm">
                                <a class="mb-2" href="#">
                                    <span class="img-fluid d-flex justify-content-center">
                                        <img src="{{ $teacher->photo ? asset('storage/' . $teacher->photo) : asset('assets/images/sdn/guru.png') }}" 
                                            alt="{{ $teacher->name }}" class="h-46 w-40">
                                    </span>
                                </a>
                                <div class="px-4 py-4">
                                    <h5 class="mb-2 font-bold tracking-tight text-gray-900">{{ $teacher->name }}</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        {{ $teacher->position ?? 'Belum Ditentukan' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

    </div>
</body>