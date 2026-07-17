<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    @include('landing.components.style')
</head>

<body class="counter-scroll header-fixed main">

    <!-- Preloader -->
    <div id="preload" class="preload">
        <div class="preload-logo"></div>
    </div>

    <div id="wrapper">
        <div id="page" class="clearfix">

        {{-- Header hanya tampil selain halaman quiz --}}
        @if(
            !request()->is('ayo-berhitung') &&
            !request()->is('belajar-angka') &&
            !request()->is('belajar-huruf') &&
            !request()->is('quiz-berhitung/*') &&
            !request()->is('quiz-mengeja/*') &&
            !request()->is('ayo-mengeja') &&
            !request()->is('quiz-berhitung-selesai/*') &&
            !request()->is('quiz-selesai/*')

        )
            @include('landing.components.header')
        @endif

        {{-- Content --}}
        @yield('content')

        {{-- Footer hanya tampil selain halaman quiz --}}
        @if(
            !request()->is('ayo-berhitung') &&
            !request()->is('belajar-angka') &&
            !request()->is('belajar-huruf') &&
            !request()->is('quiz-berhitung/*') &&
            !request()->is('quiz-mengeja/*') &&
            !request()->is('ayo-mengeja') &&
            !request()->is('quiz-berhitung-selesai/*') &&
            !request()->is('quiz-selesai/*')
        )
            @include('landing.components.footer')
        @endif

        </div>
    </div>

    <a id="scroll-top"></a>

    <!-- Javascript -->
    @include('landing.components.script')

</body>

</html>