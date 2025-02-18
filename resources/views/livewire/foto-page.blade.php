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
                        <div class="col-lg-4 mb-4 pb-5 d-flex justify-content-center">
                            <div class="bg-white rounded-lg shadow-sm overflow-hidden d-flex flex-column h-100 w-full max-w-xs 
                                group transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
                                
                                <a class="mb-2 d-block" href="{{ url('/foto/' . $gallery->id) }}">
                                    <div class="img-wrap d-block w-100 h-64 overflow-hidden">
                                        @php
                                            $firstImage = collect($gallery->images)->first();
                                        @endphp
                                        <img src="{{ $firstImage ? asset('storage/' . $firstImage) : asset('assets/images/default-news.jpeg') }}"
                                            alt="{{ $gallery->title }}" 
                                            class="img-fluid w-full h-full object-cover">
                                    </div>
                                </a>
                                <div class="px-4 py-4 text-center">
                                    <h5 class="mb-3 font-bold tracking-tight text-gray-900">{{ $gallery->title }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>                                                
                
            </div>
        </div>

    </div>
</body>