@include('layouts.templates.head')
<title>Product Details</title>

<body>
    <div class="boxed_wrapper">
        @include('layouts.templates.preloader')
        @include('layouts.templates.header')

        <!-- page-title -->
        <section class="page-title centred mb-5">
            <div class="pattern-layer"
                style="background-image: url('{{ asset('templates/assets/images/background/page-title.jpg') }}');"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>{{ $product->name }}</h1>
                    <ul class="bread-crumb clearfix">
                        <li><i class="flaticon-home-1"></i><a href="{{ route('home') }}">Home</a></li>
                        <li>{{ $product->brand->name ?? 'N/A' }}</li>
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
                            $images = is_array($product->images)
                                ? collect($product->images)
                                : collect(json_decode($product->images ?? '[]'));
                        @endphp

                        @if ($images->count() > 0)
                            <div class="product-images">
                                @foreach ($images as $image)
                                    <figure class="image-box mb-3">
                                        <img src="{{ asset('templates/products/' . $image) }}"
                                            alt="{{ $product->name }}" class="img-fluid"
                                            style="max-height:400px; object-fit:contain;">
                                    </figure>
                                @endforeach
                            </div>
                        @else
                            <figure class="image-box">
                                <img src="{{ asset('templates/products/default.jpg') }}" alt="{{ $product->name }}"
                                    class="img-fluid">
                            </figure>
                        @endif
                    </div>

                    <!-- Details Column -->
                    <div class="col-lg-6 col-md-12 col-sm-12 details-column">
                        <div class="details-content">
                            <h3>{{ $product->name }}</h3>
                            <span class="category text-muted mb-2">{{ $product->brand->name ?? 'N/A' }}</span>

                            <!-- Rating -->
                            <div class="product-rating mb-3">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= round($product->rating ?? 0))
                                        <i class="fas fa-star text-warning"></i>
                                    @else
                                        <i class="far fa-star text-warning"></i>
                                    @endif
                                @endfor
                                <span class="text-muted ms-2">({{ number_format($product->rating ?? 0, 1) }}/5)</span>
                            </div>

                            <!-- Description -->
                            <div class="product-description mb-3">
                                <p style="line-height:1.6;">{{ $product->description }}</p>
                            </div>

                            <!-- Price -->
                            <div class="price mb-3 fs-5 fw-bold">
                                ${{ number_format($product->price ?? 0, 2) }}
                            </div>

                            <!-- Add to Cart -->
                            {{-- <a href="#" class="btn btn-primary btn-lg">Add to Cart</a> --}}
                        </div>
                    </div>

                </div>

                <!-- Related Products -->
                @if ($relatedProducts->count() > 0)
                    <div class="related-products mt-5">
                        <div class="sec-title text-center mb-4">
                            <h2>Related Products</h2>
                        </div>
                        <div class="row clearfix">
                            @foreach ($relatedProducts as $rel)
                                @php
                                    $relImages = is_array($rel->images)
                                        ? collect($rel->images)
                                        : collect(json_decode($rel->images ?? '[]'));
                                    $relImage = $relImages->count()
                                        ? asset('templates/products/' . $relImages[0])
                                        : asset('templates/products/default.jpg');
                                @endphp

                                <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                                    <div class="shop-card h-100 d-flex flex-column border rounded shadow-sm p-2">
                                        <div class="shop-card-image mb-2 text-center">
                                            <a href="{{ route('product.details', $rel->id) }}">
                                                <img src="{{ $relImage }}" alt="{{ $rel->name }}"
                                                    class="img-fluid" style="max-height:180px; object-fit:contain;">
                                            </a>
                                        </div>
                                        <div class="shop-card-content flex-grow-1 d-flex flex-column">
                                            <span
                                                class="category text-muted mb-1">{{ $rel->brand->name ?? 'N/A' }}</span>
                                            <h6 class="product-title mb-1">
                                                <a href="{{ route('product.details', $rel->id) }}"
                                                    class="text-dark">{{ $rel->name }}</a>
                                            </h6>
                                            <div class="product-rating mb-1">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= round($rel->rating ?? 0))
                                                        <i class="fas fa-star text-warning"></i>
                                                    @else
                                                        <i class="far fa-star text-warning"></i>
                                                    @endif
                                                @endfor
                                                <span
                                                    class="text-muted ms-1">({{ number_format($rel->rating ?? 0, 1) }}/5)</span>
                                            </div>
                                            <span
                                                class="price fw-bold">${{ number_format($rel->price ?? 0, 2) }}</span>
                                            <a href="{{ route('product.details', $rel->id) }}"
                                                class="btn btn-outline-primary mt-auto">View Details</a>
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

<style>
    /* Product Details Page Professional Styling */
    .details-content h3 {
        font-weight: 700;
        font-size: 1.8rem;
        margin-bottom: 0.5rem;
    }

    .product-description p {
        font-size: 0.95rem;
        color: #555;
    }

    .product-rating i {
        margin-right: 2px;
    }

    .related-products .shop-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .related-products .shop-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
</style>
