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

        <!-- Hero Section -->
        <div class="ftco-blocks-cover-1">
            <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image:url('{{ asset("assets/images/sdn/bg_asli.png") }}');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5 mt-5 pt-5">
                            <h1 class="mb-3 font-weight-bold text-teal">Pengumuman Sekolah</h1>
                            <p>
                                <a href="{{ url('/') }}" class="text-white">Beranda</a> 
                                <span class="mx-3">/</span> 
                                <a href="{{ url('/announcement') }}" class="text-white">Pengumuman</a> 
                                <span class="mx-3">/</span> 
                                <strong>Detail Pengumuman</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Details -->
        <div class="site-section bg-gray-200 py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 mb-4">
                        <h2 class="mb-3 font-bold text-black">{{ $announcement->title }}</h2>
                        <p class="text-lg font-education text-gray-700" style="text-align: justify;">
                            {{ $announcement->content }}
                        </p>
                    </div>
                    
                    <div class="col-lg-6 col-md-12 text-center">
                        <img src="{{ asset('storage/' . $announcement->image) }}" 
                            alt="{{ $announcement->title }}" 
                            class="img-fluid rounded shadow-sm" 
                            style="max-width: 450px; height: auto; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>        
    </div>
</body>