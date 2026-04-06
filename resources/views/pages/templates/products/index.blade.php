@include('layouts.templates.head')
<title>Our Products</title>
<body>
<div class="boxed_wrapper">
    @include('layouts.templates.preloader')
    @include('layouts.templates.header')

    <!-- page-title -->
   <section class="page-title centred mb-3">
            <div class="pattern-layer"
                style="background-image: url('{{ asset('templates/assets/images/background/page-title.jpg') }}');"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Our Products</h1>
                    <ul class="bread-crumb clearfix">
                        <li><i class="flaticon-home-1"></i><a href="{{ route('home') }}">Home</a></li>
                        <li>{{ $product->brand->name ?? 'N/A' }}</li>
                    </ul>
                </div>
            </div>
        </section>

    <!-- shop-page-section -->
    <section class="shop-page-section sidebar-page-container shop-page-5">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Sidebar Start -->
                <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                    <div class="sidebar shop-sidebar">

                        <!-- Brands -->
                        <div class="sidebar-widget categories-widget">
                            <div class="widget-title"><h3>Manufacturers</h3></div>
                            <div class="widget-content">
                                <ul class="categories-list clearfix">
                                    @foreach($brands as $brand)
                                        <li>
                                            <a href="{{ route('products', ['brand' => $brand->id]) }}">
                                                {{ $brand->name }} ({{ $brand->products_count }})
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Sidebar End -->

                <!-- Content Start -->
                <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                    <div class="sidebar-content">

                        <!-- Sorting & Grid/List -->
                        <div class="item-shorting clearfix mb-4">
                            <div class="left-column pull-left clearfix">
                                <div class="text">
                                    <p>Showing {{ $products->firstItem() }}–{{ $products->lastItem() }} of {{ $products->total() }} Results</p>
                                </div>
                            </div>
                            <div class="right-column pull-right clearfix">
                                <div class="view-toggle">
                                    <button id="gridView" class="active"><i class="flaticon-menu"></i></button>
                                    <button id="listView"><i class="flaticon-list"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Products -->
                        <div class="our-shop grid-view row clearfix">
                            @foreach($products as $product)
                                @php
                                    $productImage = !empty($product->images) && file_exists(public_path('templates/products/' . $product->images))
                                        ? asset('templates/products/' . $product->images)
                                        : asset('templates/products/default.jpg');

                                    // Limit description to 10 words
                                    $words = explode(' ', strip_tags($product->description));
                                    $shortDescription = count($words) > 10 ? implode(' ', array_slice($words, 0, 10)) . '...' : $product->description;
                                @endphp

                                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <div class="shop-card h-100 d-flex flex-column border rounded shadow-sm p-3">
                                        <!-- Image -->
                                        <div class="shop-card-image mb-3 text-center">
                                            <a href="{{ route('product.details', $product->id) }}">
                                                <img src="{{ $productImage }}" alt="{{ $product->name }}" class="img-fluid" style="max-height:200px; object-fit:contain;">
                                            </a>
                                        </div>

                                        <!-- Content -->
                                        <div class="shop-card-content flex-grow-1 d-flex flex-column">
                                            <span class="category text-muted mb-1">{{ $product->brand->name ?? 'N/A' }}</span>
                                            <h5 class="product-title mb-2">
                                                <a href="{{ route('product.details', $product->id) }}" class="text-dark">
                                                    {{ $product->name }}
                                                </a>
                                            </h5>
                                            <p class="product-description mb-2" style="flex-grow:1;">
                                                {{ $shortDescription }}
                                            </p>

                                            <!-- Rating -->
                                            <div class="product-rating mb-2">
                                                @for($i = 1; $i <= 5; $i++)
                                                    @if($i <= round($product->rating ?? 0))
                                                        <i class="fas fa-star text-warning"></i>
                                                    @else
                                                        <i class="far fa-star text-warning"></i>
                                                    @endif
                                                @endfor
                                                <span class="text-muted ms-2">({{ number_format($product->rating ?? 0, 1) }}/5)</span>
                                            </div>

                                            <!-- Button -->
                                            <a href="{{ route('product.details', $product->id) }}" class="btn btn-primary mt-auto">
                                                View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="pagination-wrapper centred mt-4">
                            {{ $products->links() }}
                        </div>

                    </div>
                </div>
                <!-- Content End -->

            </div>
        </div>
    </section>
    <!-- shop-page-section end -->

    @include('layouts.templates.footer')
</div>

@include('layouts.templates.script')

<!-- Grid/List JS -->
<script>
document.getElementById('gridView').addEventListener('click', function() {
    document.querySelector('.our-shop').classList.add('grid-view');
    document.querySelector('.our-shop').classList.remove('list-view');
});
document.getElementById('listView').addEventListener('click', function() {
    document.querySelector('.our-shop').classList.add('list-view');
    document.querySelector('.our-shop').classList.remove('grid-view');
});
</script>

<style>
/* Professional card styling */
.shop-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.shop-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
.product-title {
    font-size: 1.1rem;
    font-weight: 600;
}
.product-description {
    font-size: 0.9rem;
    color: #555;
}
.product-rating i {
    margin-right: 2px;
}
</style>