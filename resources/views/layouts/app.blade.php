@include('layouts.head')
<body>

@include('layouts.header')

    @include('layouts.sidemenu')
        <div id="content-wrapper">
            <div class="container-fluid">
                @yield('content')

    @include('layouts.footer')

