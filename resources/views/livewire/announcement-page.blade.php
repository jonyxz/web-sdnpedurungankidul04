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
                                <strong>Pengumuman</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Announcement Section -->
        <div class="site-section bg-gray-200">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <span class="font-education h5 text-red d-block">Pengumuman Sekolah</span>
                        <h3 class="text-black text-center font-bold">SDN PEDURUNGAN KIDUL 04</h3>
                    </div>
                </div>

                <div class="row">
                    @foreach($announcements as $announcement)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="d-flex flex-column h-100 w-100 bg-white border-gray-200 rounded-lg shadow-sm p-4">
                            <h5 class="mb-2 text-black text-xl font-semibold">
                                {{ $announcement->title }}
                            </h5>
                            <p class="text-gray-600 leading-normal font-light flex-grow-1 text-justify">
                                {{ \Illuminate\Support\Str::limit($announcement->content, 100) }}
                            </p>
                            <div>
                                <a href="{{ url('/announcement/' . $announcement->id) }}" 
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
    </div>
</body>
