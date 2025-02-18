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
                            <h1 class="mb-3 font-weight-bold text-teal">Gallery Foto</h1>
                            <p><a href="{{ url('/') }}" class="text-white">Beranda</a> <span class="mx-3">/</span>
                                <strong>Gallery Foto</strong>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Foto -->
        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <span class="font-education h5 text-red d-block">Gallery Foto</span>
                        <h2 class="text-black font-bold">SDN PEDURUNGAN KIDUL 04</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($galleries as $gallery)
                        <div class="col-lg-4 mb-4 mb-lg-0 pb-5 justify-center">
                            <div class="bg-white rounded-lg shadow-sm">
                                <a class="mb-2" href="{{ url('/foto/' . $gallery->id) }}">
                                    <span class="img-wrap">
                                        <img src="{{ $gallery->images->isNotEmpty() ? asset('storage/' . $gallery->images->first()->path) : asset('assets/images/default-news.jpeg') }}"
                                            alt="{{ $gallery->title }}" class="img-fluid">
                                    </span>
                                </a>
                                <div class="px-4 py-4">
                                    <h5 class="mb-2 font-bold tracking-tight text-gray-900">{{ $gallery->title }}</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        {{ Str::limit($gallery->description, 150) }}
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