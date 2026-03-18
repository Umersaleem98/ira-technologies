@include('layouts.templates.head')

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    @include('layouts.templates.header')

    <!-- Start Trending Product Area -->
    <section class="trending-product section" style="margin-top: 12px;">
        <div class="container">

            <!-- Section Title -->
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Products</h2>
                        <p>Products loaded dynamically from the database</p>
                    </div>
                </div>
            </div>

            <!-- Products -->
            <div class="row">

                @forelse($products as $product)
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Product -->
                        <div class="single-product">

                            <div class="product-image">
                                {{-- Product Image with fallback --}}
                                <img src="{{ asset($product->image ?? 'templates/assets/images/products/product-1.jpg') }}"
                                     alt="{{ $product->name }}">

                                {{-- New label for first item --}}
                                @if($loop->first)
                                    <span class="new-tag">New</span>
                                @endif

                                <div class="button">
                                    <a href="#" class="btn">
                                        <i class="lni lni-cart"></i> Add to Cart
                                    </a>
                                </div>
                            </div>

                            <div class="product-info">
                                {{-- Category --}}
                                <span class="category">
                                    {{ $product->category->name ?? 'Category' }}
                                </span>

                                {{-- Product Name --}}
                                <h4 class="title">
                                    <a href="#">{{ $product->name }}</a>
                                </h4>

                                {{-- Static Review --}}
                                <ul class="review">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star"></i></li>
                                    <li><span>4.0 Review(s)</span></li>
                                </ul>

                                {{-- Price --}}
                                <div class="price">
                                    <span>Rs {{ number_format($product->price) }}</span>
                                </div>

                            </div>
                        </div>
                        <!-- End Single Product -->
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No products found</p>
                    </div>
                @endforelse

            </div>
        </div>
    </section>
    <!-- End Trending Product Area -->

    @include('layouts.templates.footer')

    <!-- Scroll Top -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    @include('layouts.templates.script')
</body>
