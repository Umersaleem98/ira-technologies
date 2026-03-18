 <div class="row">

     <!-- Start Trending Product Area -->
     <section class="trending-product section" style="margin-top: 12px;">
         <div class="container">

             <div class="row">
                <div class="col-12">
                     <div class="section-title">
                         <h2>Trending Product</h2>
                         <p>Products loaded dynamically from database</p>
                     </div>
                 </div>
             </div>

             <div class="row">

                 @forelse($products as $product)
                     <div class="col-lg-3 col-md-6 col-12">

                         <!-- Start Single Product -->
                         <div class="single-product">

                             <div class="product-image">

                                 {{-- Product Image --}}
                                 <img src="{{ asset($product->image ?? 'templates/assets/images/products/product-1.jpg') }}"
                                     alt="{{ $product->name }}">

                                 {{-- Optional Tags --}}
                                 @if ($loop->first)
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
                                     {{ $product->category->name ?? 'General' }}
                                 </span>

                                 {{-- Product Name --}}
                                 <h4 class="title">
                                     <a href="#">{{ $product->name }}</a>
                                 </h4>

                                 {{-- Static Rating --}}
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
