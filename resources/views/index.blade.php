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
   @include('layouts.templates.hero')
   @include('layouts.templates.products')
   {{-- @include('layouts.templates.content') --}}




  @include('layouts.templates.footer')

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>
@include('layouts.templates.script')
