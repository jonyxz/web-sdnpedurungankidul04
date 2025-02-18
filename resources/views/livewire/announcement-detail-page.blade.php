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
                <div class="row items-center mt-20 pt-20">
                    <div class="col-md-10">
                        <h2 class="mb-2 font-bold text-black">{{ $announcement->title }}</h2>
                        <span class="text-lg font-education text-black">{{ $announcement->content }}</span>
                        <img src="{{ asset('storage/' . $announcement->image) }}" alt="{{ $announcement->title }}" class="img-fluid w-96 h-96 pt-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>