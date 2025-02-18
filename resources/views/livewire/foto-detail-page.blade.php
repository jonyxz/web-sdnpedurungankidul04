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
                            <h1 class="mb-3 font-weight-bold text-teal">Galeri Foto</h1>
                            <p>
                                <a href="{{ url('/') }}" class="text-white">Beranda</a> 
                                <span class="mx-3">/</span> 
                                <a href="{{ url('/foto') }}" class="text-white">Galeri Foto</a> 
                                <span class="mx-3">/</span> 
                                <strong>Detail Galeri</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Details -->
        <div class="site-section bg-gray-200">
            <div class="container mx-auto">
                <div class="row mb-5 text-center">
                    <div class="col-12">
                        <span class="font-education h5 text-red d-block">Galeri Foto</span>
                        <h2 class="text-black font-bold">{{ $gallery->title }}</h2>

                        @if (!empty($gallery->description))
                            <p class="mt-2 text-gray-600 text-lg max-w-3xl mx-auto">
                                {{ $gallery->description }}
                            </p>
                        @endif
                    </div>
                </div>

                @if($gallery->images && count($gallery->images) > 0)
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        @foreach ($gallery->images as $image)
                            <div class="overflow-hidden rounded-lg shadow-lg transform transition duration-300 hover:scale-105">
                                <a href="{{ asset('storage/' . $image) }}" data-fancybox="gal">
                                    <img src="{{ asset('storage/' . $image) }}" 
                                        alt="Gallery Image" 
                                        class="w-full h-56 object-cover">
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-center text-gray-500 mt-5">Tidak ada foto dalam galeri ini.</p>
                @endif
            </div>
        </div>

    </div>
</body>