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
                            <h1 class="mb-3 font-weight-bold text-teal">Berita Terkait</h1>
                            <p>
                                <a href="{{ url('/') }}" class="text-white">Beranda</a> 
                                <span class="mx-3">/</span> 
                                <a href="{{ url('/news') }}" class="text-white">Berita</a> 
                                <span class="mx-3">/</span> 
                                <strong>Detail Berita</strong>
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
                        <h2 class="mb-3 font-bold text-black">{{ $news->title }}</h2>
                        <p class="text-sm text-gray-500 mb-2">
                            {{ \Carbon\Carbon::parse($news->published_at)->format('d F Y') }}
                        </p>
                        <p class="text-lg font-education text-gray-700" style="text-align: justify;">
                            {{ $news->content }}
                        </p>
                        @if($news->link)
                        <p class="mt-4">
                            <a href="{{ $news->link }}" target="_blank"
                                class="inline-flex items-center gap-2 px-4 py-2 bg-red-500 text-white font-semibold rounded-lg shadow-md 
                                        hover:bg-red-700 hover:shadow-lg transition-all duration-300 ease-in-out">
                                <span>Sumber Berita</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" 
                                        stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" 
                                            d="M17.25 9.75L21 12m0 0l-3.75 2.25M21 12H3"/>
                                </svg>
                            </a>
                        </p>
                    @endif
                </div>
                    
                    <div class="col-lg-6 col-md-12 text-center">
                        <img src="{{ asset('storage/' . $news->image) }}" 
                            alt="{{ $news->title }}" 
                            class="img-fluid rounded shadow-sm w-full h-auto max-w-md object-cover">
                    </div>
                </div>
            </div>
        </div>                
    </div>
</body>