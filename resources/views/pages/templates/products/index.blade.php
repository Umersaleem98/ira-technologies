@include('layouts.templates.head')
<title>Our Products</title>
<body>
<div class="boxed_wrapper">
    @include('layouts.templates.preloader')
    @include('layouts.templates.search')
    @include('layouts.templates.header')


    <!-- page-title -->
    <section class="page-title centred">
        ...
    </section>

    <!-- shop-page-section -->
    <section class="shop-page-section sidebar-page-container shop-page-5">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Sidebar Start -->
                <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                    <div class="sidebar shop-sidebar">
                        
                        <!-- Search -->
                        <div class="sidebar-widget search-widget">
                            <form action="{{ route('products') }}" method="GET" class="search-form">
                                <div class="form-group">
                                    <input type="search" name="search" placeholder="Search Products..." value="{{ request('search') }}">
                                    <button type="submit"><i class="flaticon-search"></i></button>
                                </div>
                            </form>
                        </div>

                        <!-- Brands -->
                        <div class="sidebar-widget categories-widget">
                            <div class="widget-title"><h3>Menufechars</h3></div>
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
                        <div class="item-shorting clearfix">
                            <div class="left-column pull-left clearfix">
                                <div class="text">
                                    <p>Showing {{ $products->firstItem() }}–{{ $products->lastItem() }} of {{ $products->total() }} Results</p>
                                </div>
                            </div>
                            <div class="right-column pull-right clearfix">
                                <div class="short-box clearfix">
                                    <p>Sort by</p>
                                    <div class="select-box">
                                        <select class="wide" onchange="this.form.submit()">
                                           <option value="">Popularity</option>
                                           <option value="new">New Collection</option>
                                           <option value="top">Top Sell</option>
                                           <option value="rated">Top Rated</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Grid/List toggle -->
                                <div class="view-toggle">
                                    <button id="gridView" class="active"><i class="flaticon-menu"></i></button>
                                    <button id="listView"><i class="flaticon-list"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Products -->
                        <div class="our-shop grid-view">
                            @foreach($products as $product)
                                <div class="shop-block-five">
                                    <div class="inner-box">
                                        <figure class="image-box">
                                            <img src="{{ isset($product->images[0]) ? asset('templates/assets/images/products/'.$product->images[0]) : 'templates/assets/images/products/default.jpg' }}" alt="">
                                            <span class="category">{{ $product->brand->name }}</span>
                                        </figure>
                                        <div class="content-box">
                                            <div class="text">
                                                <a href="#">{{ $product->name }}</a>
                                                <span class="price">${{ number_format($product->rating,2) }}</span>
                                                <p>{{ \Illuminate\Support\Str::limit($product->description, 100) }}</p>
                                            </div>
                                            <ul class="info-list clearfix">
                                                <li><a href="#"><i class="flaticon-heart"></i></a></li>
                                               <li><a href="{{ route('product.details', $product->id) }}">About More</a></li>
                                                <li>
                                                    <a href="{{ isset($product->images[0]) ? asset('templates/assets/images/products/'.$product->images[0]) : '#' }}" class="lightbox-image" data-fancybox="gallery">
                                                        <i class="flaticon-search"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="pagination-wrapper centred">
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