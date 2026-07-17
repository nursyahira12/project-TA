@extends('landing.layouts.app')

@section('content')

<style>

html,
body{
    margin:0;
    padding:0;
    width:100%;
    min-height:100vh;
    overflow-x:hidden;
}

.rocket-bg{
    position:fixed;
    top:0;
    left:0;
    width:100vw;
    height:100vh;
    z-index:-1;
    overflow:hidden;
    pointer-events:none;
}

#rocket-background{
    width:100%;
    height:100%;
    transform:scale(1.2);
    transform-origin:center center;
}


#wrapper,
#page{
    width:100% !important;
    max-width:100% !important;
    margin:0 !important;
    padding:0 !important;
}

body.main{
    width:100%;
    min-height:100vh;
}

.container,
.container-fluid{
    max-width:100% !important;
}



.quiz-card{
    background:transparent;
    padding:0;
    box-shadow:none;
}

.container-fluid{
    position:relative;
    z-index:10;
}

.judul-wrap{
    text-align:center;
    margin-bottom:8px;
}

.judul-anak{
    font-size:26px;
    font-weight:800;
    color:white;
    margin-bottom:5px;
}

.subjudul{
    font-size:16px;
    color:#f1f1f1;
    margin-bottom:0;
}

.soal-box{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:18px;
    max-width:900px;
    margin:0 auto;
}

.nomor-soal{
    position:absolute;
    top:20px;
    left:20px;
    width:70px;
    height:70px;
    background:white;
    border-radius:20px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:28px;
    font-weight:800;
    color:#4f8cff;
    box-shadow:0 5px 15px rgba(0,0,0,.1);
}

.gambar-soal{
    width:700px;
    height:auto;
    display:block;
}

.audio-wrapper{
    display:flex;
    align-items:center;
    justify-content:center;
}

.audio-btn{
    width:90px;
    height:90px;
    border:none;
    border-radius:50%;
    background:#3d7bfd;
    cursor:pointer;
    display:flex;
    align-items:center;
    justify-content:center;
    box-shadow:0 8px 20px rgba(0,0,0,.25);
    transition:.3s;
}

.audio-btn:hover{
    transform:scale(1.1);
}

.audio-btn img{
    width:45px;
    height:45px;
}

.opsi-card{
    position: relative;
    border-radius: 26px;
    padding: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,.15);
    transition: .3s;
    cursor: pointer;
    border: none;
    overflow: visible;   /* <-- jangan hidden */
}

.opsi-card:hover{
    transform:translateY(-6px) scale(1.02);
}

.opsi-card:active{
    transform:scale(.95);
}

.btn-audio:hover{
    transform:scale(1.05);
}

.opsi-label{
    position:absolute;
    top:-18px;
    left:50%;
    transform:translateX(-50%);
    width:55px;
    height:55px;
    border-radius:50%;
    background:#4f8cff;
    color:white;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:26px;
    font-weight:800;
    box-shadow:0 5px 15px rgba(0,0,0,.15);
}

.opsi-img{
    width:100%;
    height:auto;
    display:block;
    border-radius:16px;
}

.opsi-img-wrap{
    overflow: hidden;
    border-radius: 18px;
}

.opsi-img{
    width:100%;
    display:block;
}

.pilih-link{
    text-decoration:none;
}

.pertanyaan-box{
    display:block;
    width:fit-content;
    margin:0 auto 10px;
    background:#fff;
    padding:8px 20px;
    border-radius:40px;
    font-size:18px;
    font-weight:700;
    color:#1e3a5f;
}

.opsi-a{
    background:#4f8cff;
}

.opsi-b{
    background:#ffb400;
}

.opsi-c{
    background:#52c41a;
}

.card-a{
    background:#86202c;
}

.card-b{
    background:#ff4492;
}

.card-c{
    background:#9B5DE5;
}

/* ================= POPUP ================= */

.popup-result{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,.5);
    display:none;
    justify-content:center;
    align-items:center;
    z-index:9999;
}

.popup-box{
    position:relative;
    width:520px;
    max-width:90vw;

    animation:zoom .35s;

    background:transparent;

    overflow:visible;
}

.popup-box img{

    width:100%;

    height:auto;

    display:block;

    position:relative;

    pointer-events:none;

}

.popup-box h2{
    font-size:32px;
    font-weight:bold;
    color:#ff9800;
}

.popup-box p{
    font-size:22px;
    color:#444;
}

.popup-box button{
    margin-top:20px;
    border:none;
    background:#4CAF50;
    color:white;
    padding:12px 35px;
    border-radius:40px;
    font-size:20px;
    cursor:pointer;
}

.popup-content{

    position:absolute;

    left:0;
    right:0;

    bottom:7%;

    text-align:center;

    z-index:999;

}

.popup-content h2{

    font-size:42px;

    color:#ffffff;

    font-weight:900;

    text-shadow:
    0 3px 8px rgba(0,0,0,.4);

}

.popup-content p{

    color:white;

    font-size:24px;

    font-weight:bold;

    text-shadow:
    0 2px 6px rgba(0,0,0,.4);

}

#popupButton{

    margin-top:18px;

    width:220px;

    height:65px;

    border-radius:40px;

    background:#4CAF50;

    color:white;

    font-size:24px;

    font-weight:bold;

    border:none;

    position:relative;

    z-index:1000;

}

@keyframes zoom{

from{
transform:scale(.5);
opacity:0;
}

to{
transform:scale(1);
opacity:1;
}

}

</style>

<div class="rocket-bg">
    <div id="rocket-background"></div>
</div>

<div class="container-fluid py-4">

    <div class="quiz-card">



        <div class="judul-wrap">

            <h2 class="judul-anak">
                👋 Hai {{ $murid->nama }}! 😊
            </h2>

        </div>

        <div class="pertanyaan-box">
            ✨ {{ $quiz->pertanyaan }}
        </div>

        <div class="soal-box">

            <img loading="lazy" src="{{ asset($quiz->gambar_soal) }}"
                class="gambar-soal">

            <div class="audio-wrapper">

                <audio id="audioSoal">
                    <source src="{{ asset($quiz->audio_soal) }}">
                </audio>

                <button
                    onclick="document.getElementById('audioSoal').play()"
                    class="audio-btn">

                    <img loading="lazy" src="{{ asset('assets/landing/images/icon/sound.png') }}">

                </button>

            </div>

        </div>

        <div class="row mt-2">

            {{-- OPSI A --}}
            <div class="col-md-4 mb-4">

                <a href="{{ route('quiz.berhitung.cek', [$murid->id, $nomor, 'A']) }}"
                   class="pilih-link">

                <div class="opsi-card card-a text-center">

                    <div class="opsi-label opsi-a">A</div>

                    @if($quiz->gambar_opsi_a)
                        <div class="opsi-img-wrap">
<img loading="lazy" src="{{ asset($quiz->gambar_opsi_a) }}" class="opsi-img">
                        </div>
                    @endif

                </div>

                </a>

            </div>

            {{-- OPSI B --}}
            <div class="col-md-4 mb-4">

                <a href="{{ route('quiz.berhitung.cek', [$murid->id, $nomor, 'B']) }}"
                   class="pilih-link">

                    <div class="opsi-card card-b text-center">

                        <div class="opsi-label opsi-b">B</div>

                        @if($quiz->gambar_opsi_b)

                            <div class="opsi-img-wrap">
<img loading="lazy" src="{{ asset($quiz->gambar_opsi_b) }}" class="opsi-img">
                            </div>

                        @endif

                    </div>

                </a>

            </div>

            {{-- OPSI C --}}
            <div class="col-md-4 mb-4">

                <a href="{{ route('quiz.berhitung.cek', [$murid->id, $nomor, 'C']) }}"
                   class="pilih-link">

                    <div class="opsi-card card-c text-center">

                        <div class="opsi-label opsi-c">C</div>

                        @if($quiz->gambar_opsi_c)

                            <div class="opsi-img-wrap">
<img loading="lazy" src="{{ asset($quiz->gambar_opsi_c) }}" class="opsi-img">
                            </div>

                        @endif

                    </div>

                </a>

            </div>

        </div>

    </div>

</div>

<div id="popupResult" class="popup-result">

    <div class="popup-box">

        <img id="popupImage">

        <div class="popup-content">

            <button id="popupButton">
                LANJUT
            </button>

        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js"></script>

<script>

lottie.loadAnimation({
    container: document.getElementById('rocket-background'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: "{{ asset('assets/landing/images/icon/bluesky.json') }}"
});

function showSuccess(){

    document.getElementById("popupResult").style.display="flex";

    document.getElementById("popupImage").src="{{ asset('assets/landing/images/icon/senang.png') }}";


    const audio = new Audio("{{ asset('assets/landing/images/icon/benar.mp3') }}");

    audio.play();

    document.getElementById("popupButton").onclick=function(){

        window.location="{{ session('next') }}";

    };

}

function showError(){

    document.getElementById("popupResult").style.display="flex";

    document.getElementById("popupImage").src="{{ asset('assets/landing/images/icon/sedih.png') }}";


    const audio = new Audio("{{ asset('assets/landing/images/icon/salah.mp3') }}");

    audio.play();

    document.getElementById("popupButton").onclick=function(){

        closePopup();

    };

}

function closePopup(){

document.getElementById("popupResult").style.display="none";

}

window.onload=function(){

    @if(session('success'))

        showSuccess();

    @endif

    @if(session('error'))

        showError();

    @endif

}

</script>

@endsection