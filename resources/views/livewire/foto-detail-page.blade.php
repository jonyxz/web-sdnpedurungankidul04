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

        <!-- Foto -->
        <div class="site-section">
            <div class="container mx-auto mt-20 pt-20">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <span class="font-education h5 text-red d-block">Gallery Foto</span>
                        <h2 class="text-black font-bold">SDN PEDURUNGAN KIDUL 04</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($gallery->images as $image)
                        <div class="col-md-3 mb-4">
                            <a href="{{ asset('storage/' . $image->path) }}" data-fancybox="gal">
                                <img src="{{ asset('storage/' . $image->path) }}" alt="Image" class="img-fluid">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</body>