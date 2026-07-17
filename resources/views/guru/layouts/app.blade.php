<!DOCTYPE html>
<html lang="en">

<head>
    @include('guru.components.style')
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--start header wrapper-->
        <div class="header-wrapper">
            <!--start header -->
            @include('guru.components.header')
            <!--end header -->
            <!--navigation-->
            @include('guru.components.navbar')
            <!--end navigation-->
        </div>
        <!--end header wrapper-->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            @include('guru.components.footer')
        </footer>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    @include('guru.components.script')
</body>

</html>
