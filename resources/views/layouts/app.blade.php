@include('layouts.head')
<body>
@include('layouts.header')

<main class="cd-main-content">
    @include('layouts.sidemenu')
    <div class="content-wrapper">
       @yield('content')

    @include('layouts.footer')

