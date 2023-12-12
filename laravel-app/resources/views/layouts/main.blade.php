@include('layouts.header')
<body class="sb-nav-fixed">
    @include('layouts.nav')
@include('layouts.sidebar')
<div id="layoutSidenav_content">
    {{-- <main> --}}
        @yield('body')
    {{-- </main> --}}
</div>
</div>

@include('layouts.footer')
</body>
