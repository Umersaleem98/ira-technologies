<!-- shop-section -->
<section class="shop-section">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Our Top Collection</h2>
            <p>There are some product that we featured for choose your best</p>
            <span class="separator" style="background-image: url(assets/images/icons/separator-1.png);"></span>
        </div>

        <div class="sortable-masonry">
            <div class="items-container row clearfix">

                @foreach($products as $product)
                    @php
                        // Fetch the first image from the directory, fallback to default
                        $imagePath = !empty($product->images) && file_exists(public_path('templates/products/' . $product->images))
                            ? asset('templates/products/'. $product->images)
                            : asset('templates/products/default.jpg');
                    @endphp

                    <div class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column">
                        <div class="shop-block-one">
                            <div class="inner-box">

                                <!-- Image -->
                                <figure class="image-box">
                                    <img src="{{ $imagePath }}" alt="{{ $product->name }}">

                                    <!-- Actions -->
                                    <ul class="info-list clearfix">
                                        <li>
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                        </li>

                                        <li>
                                            <a href="{{ route('product.details', $product->id) }}">
                                                Add to cart
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ $imagePath }}" class="lightbox-image" data-fancybox="gallery">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </figure>

                                <!-- Content -->
                                <div class="lower-content">
                                    <a href="{{ route('product.details', $product->id) }}">
                                        {{ $product->name }}
                                    </a>

                                    <span class="price">
                                        ${{ number_format($product->rating, 2) }}
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>

        <!-- Button -->
        <div class="more-btn centred">
            <a href="{{ route('products') }}" class="theme-btn-one">
                View All Products<i class="flaticon-right-1"></i>
            </a>
        </div>

    </div>
</section>
<!-- shop-section end -->