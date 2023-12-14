@include('layouts.header')
<body class="sb-nav-fixed">
    @include('layouts.nav')
@include('layouts.sidebar')
<div id="layoutSidenav_content">
    {{-- <main> --}}
        @yield('body')
        <div style="margin: 30px">
            @if(isset($slot))
                {{$slot}}
            @endif
        </div>

    {{-- </main> --}}
</div>
</div>

@include('layouts.footer')
</body>
