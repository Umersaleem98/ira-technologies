@include('layouts.templates.head')
<title>Product Details</title>
<body>
    <div class="boxed_wrapper">
        @include('layouts.templates.preloader')
        @include('layouts.templates.search')
        @include('layouts.templates.header')

        <!-- page-title -->
        <section class="page-title centred">
            <div class="pattern-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>{{ $product->name }}</h1>
                    <ul class="bread-crumb clearfix">
                        <li><i class="flaticon-home-1"></i><a href="{{ route('home') }}">Home</a></li>
                        <li>{{ $product->brand->name }}</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->

        <!-- product-details -->
        <section class="product-details-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Images Column -->
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        @php
                            $images = is_array($product->images) ? collect($product->images) : collect(json_decode($product->images ?? '[]'));
                        @endphp

                        @if($images->count() > 0)
                            <div class="product-images">
                                @foreach($images as $image)
                                    <figure class="image-box">
                                        <img src="{{ asset('templates/assets/images/products/'.$image) }}" alt="{{ $product->name }}">
                                    </figure>
                                @endforeach
                            </div>
                        @else
                            <figure class="image-box">
                                <img src="templates/assets/images/resource/shop/default.jpg" alt="{{ $product->name }}">
                            </figure>
                        @endif
                    </div>

                    <!-- Details Column -->
                    <div class="col-lg-6 col-md-12 col-sm-12 details-column">
                        <div class="details-content">
                            <h3>{{ $product->name }}</h3>
                            <span class="category">{{ $product->brand->name }}</span>
                            <div class="price">${{ number_format($product->rating, 2) }}</div>
                            <p>{{ $product->description }}</p>

                            <ul class="info-list clearfix">
                                <li><a href="#"><i class="flaticon-heart"></i></a></li>
                                <li><a href="#">Add to Cart</a></li>
                                <li>
                                    @if($images->count() > 0)
                                        <a href="{{ asset('templates/assets/images/products/'.$images[0]) }}" class="lightbox-image" data-fancybox="gallery">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!-- Related Products -->
                @if($relatedProducts->count() > 0)
                    <div class="related-products">
                        <div class="sec-title text-center">
                            <h2>Related Products</h2>
                        </div>
                        <div class="row clearfix">
                            @foreach($relatedProducts as $rel)
                                @php
                                    $relImages = is_array($rel->images) ? collect($rel->images) : collect(json_decode($rel->images ?? '[]'));
                                @endphp
                                <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box">
                                                <img src="{{ $relImages->count() ? asset('templates/assets/images/products/'.$relImages[0]) : 'templates/assets/images/products/default.jpg' }}" alt="{{ $rel->name }}">
                                                <span class="category">{{ $rel->brand->name }}</span>
                                            </figure>
                                            <div class="content-box">
                                                <h5><a href="{{ route('product.details', $rel->id) }}">{{ $rel->name }}</a></h5>
                                                <span class="price">${{ number_format($rel->rating, 2) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>
        </section>
        <!-- product-details end -->

        @include('layouts.templates.footer')
        @include('layouts.templates.script')
    </div>
</body>