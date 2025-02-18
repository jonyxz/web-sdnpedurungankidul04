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
        <div class="site-section bg-gray-200">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <span class="font-education h5 text-red d-block">Berita Terkini</span>
                        <h3 class="text-black text-center font-bold">SDN PEDURUNGAN KIDUL 04</h3>
                    </div>
                </div>

                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 d-flex align-items-stretch mb-4 mb-lg-0">
                            <div class="bg-white rounded-lg shadow-sm d-flex flex-column w-100">
                                <a class="mb-2" href="#">
                                    <div class="img-wrap w-100 h-64 overflow-hidden">
                                        <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('assets/images/default-news.jpeg') }}" 
                                            alt="{{ $post->title }}" 
                                            class="w-100 h-100 object-cover">
                                    </div>
                                </a>
                                <div class="px-4 py-4 flex-grow">
                                    <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('d F Y') }}</p>
                                    <a href="#">
                                        <h5 class="mb-2 font-bold tracking-tight text-gray-900">{{ $post->title }}</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 text-justify">
                                        {{ Str::limit($post->content, 150) }}
                                    </p>
                                </div>
                                <div class="px-4 pb-4">
                                    <a href="{{ url('/news/' . $post->id) }}" 
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none">
                                        Read more
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>                                                                    

            </div>
        </div>

        @if (!isset($hideHero))
        @endif
    </div>
</body>