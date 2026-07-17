@extends('landing.layouts.app')

@section('content')

<style>

.sc-employee .box-feature img{
    width: 80%;
    height: 100%;
    object-fit: cover;
    display: block;
    margin: 0 auto;
}

.sc-employee{
    margin-bottom: 50px;
}

.box-feature{
    cursor:pointer;
}

/* ==========================
   BACKGROUND KUPU-KUPU
========================== */

.butterfly-bg{
    position: absolute;
    z-index: 1;
    pointer-events: none;
    opacity: 1;
}

.butterfly-bg > div{
    width: 180px;
    height: 180px;
}

.butterfly-1{ top:200px; left:2%; }
.butterfly-2{ top:350px; right:3%; }
.butterfly-3{ top:650px; left:15%; }
.butterfly-4{ top:850px; right:15%; }
.butterfly-5{ top:1100px; left:40%; }
.butterfly-6{ top:450px; left:45%; }
.butterfly-7{ top:1400px; right:5%; }
.butterfly-8{ top:2000px; left:5%; }
.butterfly-9{ top:2500px; left:35%; }
.butterfly-10{ top:3000px; right:25%; }
.butterfly-11{ top:250px; left:25%; }
.butterfly-12{ top:500px; right:25%; }
.butterfly-13{ top:750px; left:60%; }
.butterfly-14{ top:950px; right:40%; }
.butterfly-15{ top:1200px; left:75%; }

/* Card tetap di atas kupu-kupu */

.sc-employee{
    position: relative;
    z-index: 5;
}

/* ==========================
   PELANGI LOTTIE
========================== */

.pelangi-wrapper{
    display:flex;
    justify-content:center;
    align-items:center;
    margin-top:-80px;
    margin-bottom:50px;
    position:relative;
    z-index:2;
}

#pelangi-animation{
    width:650px;
    height:220px;
}

.top-buttons{
    position: fixed;
    top: 25px;
    left: 25px;
    display: flex;
    gap: 20px;
    z-index: 99999;
}

.top-btn{
    width:100px;
    height:100px;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:0;
    margin:0;
    border:none;
    background:transparent;
    box-shadow:none;
}

.top-btn img{
    width:100px;
    height:100px;
    object-fit:contain;
}

</style>

<section class="tf-section tf-about" style="padding-top:50px;">

    <!-- Background Kupu-Kupu -->

    <!-- KUPU-KUPU 1 -->
    <div class="butterfly-bg butterfly-1">
        <div id="butterfly-1"></div>
    </div>

    <!-- KUPU-KUPU 2 -->
    <div class="butterfly-bg butterfly-2">
        <div id="butterfly-2"></div>
    </div>

    <!-- KUPU-KUPU 3 -->
    <div class="butterfly-bg butterfly-3">
        <div id="butterfly-3"></div>
    </div>

    <!-- KUPU-KUPU 4 -->
    <div class="butterfly-bg butterfly-4">
        <div id="butterfly-4"></div>
    </div>

    <!-- KUPU-KUPU 5 -->
    <div class="butterfly-bg butterfly-5">
        <div id="butterfly-5"></div>
    </div>

    <!-- KUPU-KUPU 6 -->
    <div class="butterfly-bg butterfly-6">
        <div id="butterfly-6"></div>
    </div>

    <!-- KUPU-KUPU 7 -->
    <div class="butterfly-bg butterfly-7">
        <div id="butterfly-7"></div>
    </div>

    <!-- KUPU-KUPU 8 -->
    <div class="butterfly-bg butterfly-8">
        <div id="butterfly-8"></div>
    </div>

    <!-- KUPU-KUPU 9 -->
    <div class="butterfly-bg butterfly-9">
        <div id="butterfly-9"></div>
    </div>

    <!-- KUPU-KUPU 10 -->
    <div class="butterfly-bg butterfly-10">
        <div id="butterfly-10"></div>
    </div>

    <!-- KUPU-KUPU 11 -->
    <div class="butterfly-bg butterfly-11">
        <div id="butterfly-11"></div>
    </div>

    <!-- KUPU-KUPU 12 -->
    <div class="butterfly-bg butterfly-12">
        <div id="butterfly-12"></div>
    </div>

    <!-- KUPU-KUPU 13 -->
    <div class="butterfly-bg butterfly-13">
        <div id="butterfly-13"></div>
    </div>

    <!-- KUPU-KUPU 14 -->
    <div class="butterfly-bg butterfly-14">
        <div id="butterfly-14"></div>
    </div>

    <!-- KUPU-KUPU 15 -->
    <div class="butterfly-bg butterfly-15">
        <div id="butterfly-15"></div>
    </div>

    <div class="pelangi-wrapper">

    <div id="pelangi-animation"></div>

    </div>
    
    <div class="container">

        <div class="top-buttons">

            <!-- Home -->
            <button class="top-btn" onclick="window.location='{{ route('landing') }}'">
                <img loading="lazy" src="{{ asset('assets/landing/images/icon/home.png') }}" alt="Home">
            </button>

            <!-- Kembali -->
            <button class="top-btn" onclick="window.location='{{ url('/#belajar') }}'">
                <img loading="lazy" src="{{ asset('assets/landing/images/icon/back.png') }}" alt="Back">
            </button>

        </div>

        <div class="row justify-content-center">

            @foreach($materi as $item)

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

                <div class="sc-employee wow fadeInUp animated active"
                    data-wow-delay="0.3ms"
                    data-wow-duration="800ms">

                    <div class="box-feature"
                         onclick="document.getElementById('audio{{ $item->id }}').play()">

                        <img loading="lazy" src="{{ asset($item->gambar) }}" alt="Image">

                    </div>

                    <div class="box-content st-{{ ($loop->index % 8) + 1 }}">

                        <h4 class="name">

                            <a href="#" class="clr-pri-1">
                                {{ $item->judul }}
                            </a>

                        </h4>

                        <p class="sub f-mulish clr-pri-1">
                            {{ $item->deskripsi }}
                        </p>

                        <div class="social">

                            <a href="#">
                                <i class="fas fa-star"></i>
                            </a>

                            <a href="#">
                                <i class="fas fa-heart"></i>
                            </a>

                            <a href="#">
                                <i class="fas fa-play"></i>
                            </a>

                            <a href="#">
                                <i class="fas fa-smile"></i>
                            </a>

                        </div>

                    </div>

                    @if($item->audio)
                    <audio id="audio{{ $item->id }}">
                        <source src="{{ asset($item->audio) }}" type="audio/mpeg">
                    </audio>
                    @endif

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

<audio id="audioChico" autoplay>
    <source src="{{ asset('assets/landing/images/icon/Ayo_Berhitung_Bareng_Chico.mp3') }}" type="audio/mpeg">
</audio>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js"></script>

<script>
lottie.loadAnimation({
    container: document.getElementById('pelangi-animation'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: "{{ asset('assets/landing/images/icon/pelangi.json') }}"
});

const butterflyPath = "{{ asset('assets/landing/images/icon/kupukupu.json') }}";

for (let i = 1; i <= 15; i++) {
    lottie.loadAnimation({
        container: document.getElementById('butterfly-' + i),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: butterflyPath
    });
}

</script>

@endsection