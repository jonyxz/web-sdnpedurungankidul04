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

        <!-- Slider -->
        <div class="site-section-cover overlay bg-opacity-50" data-stellar-background-ratio="0.5" style="background-image: url('{{ asset("assets/images/sdn/bg_asli.png") }}')">
            <div class="site-section-cover overlay">
                <div class="container">
                    <div class="row items-center justify-center mt-20">
                        <div class="col-md-9">

                            <div class="owl-carousel nonloop-block-13">
                                <div class="testimonial-3 d-flex flex-col items-center">
                                    <div class="vcard-wrap mb-3">
                                        <img src="{{ asset('assets/images/sdn/slider_1.jpg') }}" alt="Image" class="vcard img-fluid w-64 h-64">
                                    </div>
                                    <div class="mb-1 text-center">
                                        <p class="">Poster Kota Semarang 1.</p>
                                    </div>
                                </div>

                                <div class="testimonial-3 d-flex flex-col items-center">
                                    <div class="vcard-wrap mb-3">
                                        <img src="{{ asset('assets/images/sdn/slider_1.jpg') }}" alt="Image" class="vcard img-fluid w-64 h-64">
                                    </div>
                                    <div class="mb-1 text-center">
                                        <p class="">Poster Kota Semarang 2.</p>
                                    </div>
                                </div>

                                <div class="testimonial-3 d-flex flex-col items-center">
                                    <div class="vcard-wrap mb-3">
                                        <img src="{{ asset('assets/images/sdn/slider_1.jpg') }}" alt="Image" class="vcard img-fluid w-64 h-64">
                                    </div>
                                    <div class="mb-1 text-center">
                                        <p class="">Poster Kota Semarang 3.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- profile -->
        <div class="site-section bg-gray-200">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0 transform transition duration-500 ease-in-out hover:scale-105">
                        <img src="{{ asset('assets/images/sdn/profile_sd.png') }}" alt="Image" class="img-fluid w-80 h-80">
                    </div>
                    <div class="col-md-6 ml-auto pl-md-0">
                        <span class="font-education h5 text-black">Kepala SDN Pedurungan Kidul 04</span><br>
                        <span class="font-education h4 text-red">HIRNOWO, S.Pd</span>
                        <h3 class="text-black">Sambutan Kepala Sekolah</h3>
                        <p class="text-justify">
                            <span>Assalamu'alaikum wr.wb.</span><br><br>
                            <span>Puji syukur kepada Allah SWT atas rahmat-Nya sehingga website SDN Pedurungan Kidul 04 dapat terbit. Website ini bertujuan untuk memenuhi kebutuhan informasi dengan memanfaatkan teknologi. Kami berupaya menyediakan sarana yang kondusif bagi siswa, guru, orang tua, dan masyarakat dalam menghadapi perkembangan teknologi informasi yang pesat.</span><br>
                            <span>Tuntutan mutu pendidikan semakin tinggi, sehingga sekolah harus terus berinovasi agar tetap relevan di era globalisasi. Website sekolah menjadi sarana penting dalam komunikasi serta pusat informasi bagi siswa, guru, dan wali murid.</span><br>
                            <span>Kami berharap website ini bermanfaat dalam penyebaran informasi terkait pendidikan dan SDN Pedurungan Kidul 04. Masukan dari berbagai pihak sangat kami harapkan demi pengembangan website yang lebih baik. Terima kasih atas dukungan semua pihak.</span><br><br>
                            <span>Wassalamu'alaikum wr.wb.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>        

        <!-- About -->
        <div class="site-section bg-gray-300">
            <div class="container">
                <div class="row justify-content-center text-center section-2-title">
                    <div class="col-md-10">
                        <span class="font-education h5 text-red">Sekilas Tentang</span>
                        <h3 class="text-black text-center font-bold">SDN PEDURUNGAN KIDUL 04</h3>
                        <div class="flex justify-center p-3 transform transition duration-500 ease-in-out hover:scale-105">
                            <img src="{{ asset('assets/images/sdn/sekolah.jpg') }}" alt="Image" class="max-w-full h-auto rounded-lg">
                        </div>
                        <p class="mb-0 p-4 text-justify">
                            Secara administrasi Sekolah Dasar (SD) Negeri Pedurungan Kidul 04 berada di Jalan Blancir Raya RT 06 RW 12 Kecamatan Pedurungan Kota Semarang. SD Negeri Pedurungan Kidul 04 terdiri dari beberapa bangunan utama, dengan rincian 8 (delapan) ruangan kelas, 1 (satu) ruangan Guru, 1 (satu) ruang Kepala Sekolah, 1 (satu) ruangan Perpustakaan, Mushola, Ruang UKS, halaman yang luas dan 1 (satu) kantin yang berada di dalam sekolah.
                        </p>
                    </div>
                </div>
            </div>
        </div>        

        <!-- Berita -->
        @include('livewire.news-page', ['hideHero' => true])
        
    </div>

</body>