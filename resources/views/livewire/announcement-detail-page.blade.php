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

        <!-- Details -->
        <div class="site-section bg-gray-400">
            <div class="container">
                @if($announcementId == 1)
                <div class="row items-center mt-20 pt-20">
                    <div class="col-md-10">
                        <h2 class="mb-2 font-bold text-white">Libur Semester Ganjil 2024/2025</h2>
                        <span class="text-lg text-cursive text-black">Liburan Semester Ganjil 2024/2025 dimulai dari tanggal 20 Desember 2024 hingga 5 Januari 2025.</span>
                        <img src="{{ asset('assets/images/sdn/pengumuman1.jpeg') }}" alt="Libur Semester Ganjil" class="img-fluid w-96 h-96 pt-3">
                    </div>
                </div>
                @elseif($announcementId == 2)
                <div class="row items-center mt-20 pt-20">
                    <div class="col-md-10">
                        <h2 class="mb-2 font-bold text-white">Pendaftaran Siswa Baru 2025/2026</h2>
                        <span class="text-lg text-cursive text-black">PPDB 2025/2026 akan segera dibuka pada tanggal 1 Februari 2025 hingga 30 April 2025.</span>
                        <img src="{{ asset('assets/images/sdn/pengumuman2.jpeg') }}" alt="Pendaftaran Siswa Baru" class="img-fluid w-96 h-96 pt-3">
                    </div>
                </div>
                @endif
            </div>
        </div>

    </div>
</body>