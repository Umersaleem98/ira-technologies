@include('layouts.templates.head')
<!-- page wrapper -->
<title>Home</title>
<body>
    @include('layouts.templates.preloader')

    @include('layouts.templates.search')
    @include('layouts.templates.header')
    @include('layouts.templates.hero')
    @include('layouts.templates.top_categories')
    @include('layouts.templates.shop')


    @include('layouts.templates.footer')

    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-long-arrow-alt-up"></i>
    </button>
    </div>

    @include('layouts.templates.script')