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
        <div class="site-section bg-gray-300">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <span class="font-education h5 text-black d-block">Pengumuman Sekolah</span>
                        <h3 class="text-black text-center font-bold">SDN PEDURUNGAN KIDUL 04</h3>
                    </div>
                </div>

                <div class="row">
                    <!-- Announcement Items -->
                    <div class="col-lg-4 mb-4">
                        <div class="flex flex-col my-2 bg-white border-gray-200 rounded-lg">
                            <div class="p-4">
                                <h5 class="mb-2 text-black text-xl font-semibold">
                                    Libur Semester Ganjil 2024/2025
                                </h5>
                                <p class="text-gray-600 leading-normal font-light">
                                    Liburan Semester Ganjil 2024/2025 dimulai dari tanggal 20 Desember 2024 hingga 5 Januari 2025.
                                </p>
                                <a href="{{ url('/announcement/1') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 mb-4">
                        <div class="flex flex-col my-2 bg-white border-gray-200 rounded-lg">
                            <div class="p-4">
                                <h5 class="mb-2 text-black text-xl font-semibold">
                                    Pendaftaran Siswa Baru 2025/2026
                                </h5>
                                <p class="text-gray-600 leading-normal font-light">
                                    PPDB 2025/2026 akan segera dibuka pada tanggal 1 Februari 2025 hingga 30 April 2025.
                                </p>
                                <a href="{{ url('/announcement/2') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Announcement Items -->
                </div>
            </div>
        </div>
    </div>
</body>
