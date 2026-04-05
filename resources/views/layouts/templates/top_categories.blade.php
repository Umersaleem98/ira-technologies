<!-- topcategory-section -->
<section class="topcategory-section centred">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Top Menufacturs</h2>
            <p>Follow the most popular trends and get exclusive items from castro shop</p>
            <span class="separator" style="background-image: url(assets/images/icons/separator-1.png);"></span>
        </div>

        <div class="row clearfix">

            @foreach($brands as $key => $brand)
                <div class="col-lg-3 col-md-6 col-sm-12 category-block">
                    <div class="category-block-one wow fadeInUp animated animated" 
                        data-wow-delay="{{ $key * 200 }}ms" 
                        data-wow-duration="1500ms">

                       <figure class="image-box">
                                        <img src="{{ !empty($logo[0]) 
                                        ? asset('templates/assets/images/products/'.$logo[0]) 
                                        : asset('templates/assets/images/products/default.jpg') 
                                    }}" alt="{{ $brand->name }}">
</figure>

                        <h5>
                            <a href="{{ route('products', ['brand' => $brand->id]) }}">
                                {{ $brand->name }} ({{ $brand->products_count }})
                            </a>
                        </h5>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- topcategory-section end -->