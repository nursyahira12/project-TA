@extends('landing.layouts.app')

@section('content')

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


<style>

/* ==========================================
   RESET
========================================== */

html,
body{
    margin:0;
    padding:0;
    width:100%;
    min-height:100vh;
    overflow-x:hidden;
    overflow-y:auto;
    font-family:'Comic Sans MS',sans-serif;
}

body{

    background:linear-gradient(
        180deg,
        #9be8ff 0%,
        #bdefff 35%,
        #dff8ff 70%,
        #f6fdff 100%
    );

}

/* ==========================================
   BACKGROUND
========================================== */

.day-bg{

    position:fixed;
    inset:0;
    z-index:-5;
    overflow:hidden;

}

/* ==========================================
   SUN
========================================== */

.sun{

    position:absolute;

    top:45px;
    right:80px;

    width:120px;
    height:120px;

    border-radius:50%;

    background:#FFD84D;

    box-shadow:
        0 0 30px #FFE66D,
        0 0 70px #FFE66D,
        0 0 120px rgba(255,235,120,.8);

    animation:sunGlow 3s ease-in-out infinite;

}

.sun::before{

    content:"";

    position:absolute;

    inset:-18px;

    border:4px dashed rgba(255,255,255,.45);

    border-radius:50%;

    animation:rotateSun 18s linear infinite;

}

@keyframes rotateSun{

    from{
        transform:rotate(0deg);
    }

    to{
        transform:rotate(360deg);
    }

}

@keyframes sunGlow{

    0%,100%{

        transform:scale(1);

    }

    50%{

        transform:scale(1.06);

    }

}

/* ==========================================
   CLOUD
========================================== */

.cloud{

    position:absolute;

    background:#ffffff;

    border-radius:100px;

    opacity:.92;

    filter:drop-shadow(0 8px 15px rgba(0,0,0,.08));

}

.cloud::before,
.cloud::after{

    content:"";

    position:absolute;

    background:inherit;

    border-radius:50%;

}

/* Cloud 1 */

.cloud1{

    width:180px;
    height:55px;

    left:-220px;
    top:90px;

    animation:cloudMove1 38s linear infinite;

}

.cloud1::before{

    width:75px;
    height:75px;

    left:18px;
    top:-30px;

}

.cloud1::after{

    width:85px;
    height:85px;

    right:20px;
    top:-35px;

}

/* Cloud 2 */

.cloud2{

    width:230px;
    height:60px;

    right:-260px;
    top:210px;

    animation:cloudMove2 50s linear infinite;

}

.cloud2::before{

    width:80px;
    height:80px;

    left:35px;
    top:-28px;

}

.cloud2::after{

    width:90px;
    height:90px;

    right:30px;
    top:-35px;

}

/* Cloud 3 */

.cloud3{

    width:170px;
    height:50px;

    left:-200px;
    top:330px;

    animation:cloudMove1 55s linear infinite;

}

.cloud3::before{

    width:65px;
    height:65px;

    left:20px;
    top:-22px;

}

.cloud3::after{

    width:70px;
    height:70px;

    right:20px;
    top:-28px;

}

/* Cloud 4 */

.cloud4{

    width:140px;
    height:45px;

    right:-180px;
    top:140px;

    animation:cloudMove2 42s linear infinite;

}

.cloud4::before{

    width:55px;
    height:55px;

    left:18px;
    top:-20px;

}

.cloud4::after{

    width:60px;
    height:60px;

    right:18px;
    top:-22px;

}

/* ==========================================
   CLOUD ANIMATION
========================================== */

@keyframes cloudMove1{

    from{

        transform:translateX(0);

    }

    to{

        transform:translateX(calc(100vw + 450px));

    }

}

@keyframes cloudMove2{

    from{

        transform:translateX(0);

    }

    to{

        transform:translateX(calc(-100vw - 450px));

    }

}

/* ==========================================
   GRASS
========================================== */

.grass{

    position:absolute;

    bottom:0;
    left:0;

    width:100%;
    height:130px;

    background:linear-gradient(
        to top,
        #48b04b 0%,
        #69c85a 55%,
        #86d66d 100%
    );

    border-top-left-radius:50% 25px;
    border-top-right-radius:50% 25px;

}

/* ==========================================
   FLOWERS
========================================== */

.flower{

    position:absolute;

    bottom:90px;

    animation:flowerSwing 3s ease-in-out infinite;

}

.stem{

    position:absolute;

    width:4px;
    height:42px;

    background:#2e8b57;

    left:50%;
    transform:translateX(-50%);
    bottom:-36px;

    border-radius:10px;

}

.center{

    position:absolute;

    width:16px;
    height:16px;

    background:#ffd84d;

    border-radius:50%;

    left:50%;
    top:50%;

    transform:translate(-50%,-50%);

    z-index:3;

}

.petal{

    position:absolute;

    width:18px;
    height:18px;

    border-radius:50%;

}

/* Flower Colors */

.pink .petal{
    background:#ff6fa9;
}

.yellow .petal{
    background:#ffe14d;
}

.blue .petal{
    background:#66b8ff;
}

.purple .petal{
    background:#b678ff;
}

.orange .petal{
    background:#ff9d3f;
}

/* Petal Position */

.p1{
    top:-16px;
    left:50%;
    transform:translateX(-50%);
}

.p2{
    bottom:-16px;
    left:50%;
    transform:translateX(-50%);
}

.p3{
    left:-16px;
    top:50%;
    transform:translateY(-50%);
}

.p4{
    right:-16px;
    top:50%;
    transform:translateY(-50%);
}

.p5{
    top:-10px;
    left:-10px;
}

.p6{
    top:-10px;
    right:-10px;
}

.p7{
    bottom:-10px;
    left:-10px;
}

.p8{
    bottom:-10px;
    right:-10px;
}

@keyframes flowerSwing{

    0%,100%{

        transform:rotate(-2deg);

    }

    50%{

        transform:rotate(2deg);

    }

}

/* ==========================================
   BUTTERFLY
========================================== */

.butterfly{

    position:absolute;

    width:22px;
    height:22px;

}

.butterfly::before,
.butterfly::after{

    content:"";

    position:absolute;

    width:12px;
    height:18px;

    background:#ff69b4;

    border-radius:60% 60% 40% 40%;

    animation:wing .35s ease-in-out infinite alternate;

}

.butterfly::before{

    left:0;

    transform-origin:right center;

}

.butterfly::after{

    right:0;

    transform:scaleX(-1);

    transform-origin:left center;

}

.b1{

    left:-60px;
    top:120px;

    animation:fly1 16s linear infinite;

}

.b2{

    right:-60px;
    top:240px;

    animation:fly2 18s linear infinite;

}

.b3{

    left:15%;
    top:70%;

    animation:floatButterfly 5s ease-in-out infinite;

}

@keyframes wing{

    from{

        transform:rotate(-25deg);

    }

    to{

        transform:rotate(25deg);

    }

}

@keyframes fly1{

    from{

        transform:translateX(0);

    }

    to{

        transform:translateX(calc(100vw + 120px))
                  translateY(-80px);

    }

}

@keyframes fly2{

    from{

        transform:translateX(0);

    }

    to{

        transform:translateX(calc(-100vw - 120px))
                  translateY(60px);

    }

}

@keyframes floatButterfly{

    0%,100%{

        transform:translateY(0);

    }

    50%{

        transform:translateY(-20px);

    }

}

/* ==========================================
   CONFETTI
========================================== */

.confetti{

    position:fixed;
    inset:0;

    width:100%;
    height:100%;

    pointer-events:none;

    z-index:999;

}

.confetti lottie-player{

    width:100%;
    height:100%;

}

/* ==========================================
   FINISH WRAPPER
========================================== */

.finish-wrapper{

    min-height:100vh;

    display:flex;

    justify-content:center;

    align-items:center;

    padding:40px 20px;

    position:relative;

}

/* ==========================================
   FINISH CARD
========================================== */

.finish-card{

    position:relative;

    width:100%;
    max-width:360px;
    min-height:520px;

    padding:18px 20px 24px;

    background:linear-gradient(180deg,#d7ffd1,#eefcff);

    border-radius:35px;

    text-align:center;

    border:5px solid #ffffff;

    box-shadow:
        0 20px 45px rgba(0,0,0,.15);

    overflow:hidden;

    z-index:20;

}

.finish-card::before{

    content:"";

    position:absolute;

    width:180px;
    height:180px;

    top:-90px;
    right:-90px;

    background:rgba(255,255,255,.35);

    border-radius:50%;

}

.finish-card::after{

    content:"";

    position:absolute;

    width:120px;
    height:120px;

    bottom:-60px;
    left:-60px;

    background:rgba(173,233,255,.35);

    border-radius:50%;

}

/* ==========================================
   TROPHY
========================================== */

.trophy{

    width:230px;
    height:230px;

    margin:0 auto -20px;

    position:relative;

    z-index:10;

}

.trophy lottie-player{

    width:230px;
    height:230px;
    display:block;

}

/* ==========================================
   STAR LOTTIE
========================================== */

.star-top{

    position:absolute;

    top:5px;

    left:50%;

    transform:translateX(-50%);

    width:240px;

    height:90px;

    z-index:15;

}

.star-top lottie-player{

    width:240px;

    height:90px;

}

/* ==========================================
   TEXT
========================================== */

.finish-card h1{

    font-size:24px;


    margin-bottom:10px;

}

.finish-card span{

    color:#ff5b93;

    font-size:30px;

}

.subtitle{

    display:block;

    padding:10px 16px;

    background:#FFE866;

    color:#555;

    border-radius:40px;

    font-weight:bold;

    font-size:17px;

    margin:15px auto 0;

    box-shadow:0 8px 15px rgba(255,213,79,.35);

}

.desc{

    margin-top:18px;

    color:#666;

    font-size:18px;

}

/* ==========================================
   BUTTON
========================================== */

.play-btn{

    display:inline-block;

    margin-top:22px;

    padding:12px 28px;

    border-radius:50px;

    text-decoration:none;

    color:#fff;

    font-weight:bold;

    font-size:17px;

    background:linear-gradient(180deg,#57d65a,#2fae39);

    box-shadow:0 12px 25px rgba(46,170,60,.35);

    transition:.3s;

}

.play-btn:hover{

    transform:translateY(-4px) scale(1.05);

    color:#fff;

    text-decoration:none;

}

/* ==========================================
   RESPONSIVE
========================================== */

@media(max-width:768px){

    .finish-card{

        width:95%;

        padding:20px;

    }

    .finish-card h1{

        font-size:26px;

    }

    .finish-card span{

        font-size:30px;

    }

    .subtitle{

        font-size:16px;

    }

    .play-btn{

        width:100%;

        font-size:18px;

    }

    .sun{

        width:80px;
        height:80px;

        right:20px;

    }

}

</style>

<!-- =======================
SOUND
======================= -->

<audio id="finishSound" preload="auto">
    <source src="{{ asset('assets/landing/images/icon/finish.mp3') }}" type="audio/mpeg">
</audio>

<!-- =======================
BACKGROUND
======================= -->

<div class="day-bg">

    <!-- Matahari -->
    <div class="sun"></div>

    <!-- Awan -->
    <div class="cloud cloud1"></div>
    <div class="cloud cloud2"></div>
    <div class="cloud cloud3"></div>
    <div class="cloud cloud4"></div>

    <!-- Kupu-kupu -->
    <div class="butterfly b1"></div>
    <div class="butterfly b2"></div>
    <div class="butterfly b3"></div>

    <!-- Rumput -->
    <div class="grass"></div>

    <!-- Bunga -->
    <div class="flower pink" style="left:6%;">
        <div class="stem"></div>
        <div class="center"></div>
        <div class="petal p1"></div><div class="petal p2"></div>
        <div class="petal p3"></div><div class="petal p4"></div>
        <div class="petal p5"></div><div class="petal p6"></div>
        <div class="petal p7"></div><div class="petal p8"></div>
    </div>

    <div class="flower yellow" style="left:18%;">
        <div class="stem"></div>
        <div class="center"></div>
        <div class="petal p1"></div><div class="petal p2"></div>
        <div class="petal p3"></div><div class="petal p4"></div>
        <div class="petal p5"></div><div class="petal p6"></div>
        <div class="petal p7"></div><div class="petal p8"></div>
    </div>

    <div class="flower blue" style="left:32%;">
        <div class="stem"></div>
        <div class="center"></div>
        <div class="petal p1"></div><div class="petal p2"></div>
        <div class="petal p3"></div><div class="petal p4"></div>
        <div class="petal p5"></div><div class="petal p6"></div>
        <div class="petal p7"></div><div class="petal p8"></div>
    </div>

    <div class="flower orange" style="left:48%;">
        <div class="stem"></div>
        <div class="center"></div>
        <div class="petal p1"></div><div class="petal p2"></div>
        <div class="petal p3"></div><div class="petal p4"></div>
        <div class="petal p5"></div><div class="petal p6"></div>
        <div class="petal p7"></div><div class="petal p8"></div>
    </div>

    <div class="flower purple" style="left:64%;">
        <div class="stem"></div>
        <div class="center"></div>
        <div class="petal p1"></div><div class="petal p2"></div>
        <div class="petal p3"></div><div class="petal p4"></div>
        <div class="petal p5"></div><div class="petal p6"></div>
        <div class="petal p7"></div><div class="petal p8"></div>
    </div>

    <div class="flower pink" style="left:80%;">
        <div class="stem"></div>
        <div class="center"></div>
        <div class="petal p1"></div><div class="petal p2"></div>
        <div class="petal p3"></div><div class="petal p4"></div>
        <div class="petal p5"></div><div class="petal p6"></div>
        <div class="petal p7"></div><div class="petal p8"></div>
    </div>

    <div class="flower yellow" style="left:92%;">
        <div class="stem"></div>
        <div class="center"></div>
        <div class="petal p1"></div><div class="petal p2"></div>
        <div class="petal p3"></div><div class="petal p4"></div>
        <div class="petal p5"></div><div class="petal p6"></div>
        <div class="petal p7"></div><div class="petal p8"></div>
    </div>

</div>

<!-- =======================
CONFETTI
======================= -->

<div class="confetti">

    <lottie-player
        src="{{ asset('assets/landing/images/icon/Confetti.json') }}"
        background="transparent"
        speed="1"
        autoplay>
    </lottie-player>

</div>

<!-- =======================
CARD
======================= -->

<div class="finish-wrapper">

    <div class="finish-card">

        <div class="trophy">

            <lottie-player
                src="{{ asset('assets/landing/images/icon/Trophy.json') }}"
                background="transparent"
                speed="1"
                autoplay>
            </lottie-player>

        </div>

        <div class="star-top">

            <lottie-player
                src="{{ asset('assets/landing/images/icon/Celebrating Stars.json') }}"
                background="transparent"
                speed="1"
                loop
                autoplay>
            </lottie-player>

        </div>

        <h1>
            Selamat,
            <span>{{ $murid->nama }}</span>
        </h1>

        <p class="subtitle">
            🎉 Kamu berhasil 🎉
        </p>



        <a href="{{ route('ayo.berhitung') }}" class="play-btn">
            🎮 Main Lagi
        </a>

    </div>

</div>

<script>

// ===========================
// SOUND
// ===========================

window.onload = function () {

    const sound = document.getElementById("finishSound");

    if (sound) {
        sound.volume = 0.6;
        sound.play().catch(() => {});
    }

};

// ===========================
// CONFETTI HILANG
// ===========================

setTimeout(function(){

    const confetti = document.querySelector(".confetti");

    if(confetti){

        confetti.style.transition = "opacity .8s";
        confetti.style.opacity = "0";

    }

},4500);

// ===========================
// ANIMASI CARD
// ===========================

const card = document.querySelector(".finish-card");

card.style.opacity = "0";
card.style.transform = "translateY(60px) scale(.8)";

setTimeout(function(){

    card.style.transition = ".8s ease";

    card.style.opacity = "1";
    card.style.transform = "translateY(0) scale(1)";

},300);

// ===========================
// EFEK TOMBOL
// ===========================

const btn = document.querySelector(".play-btn");

btn.addEventListener("mouseenter",function(){

    this.style.transform="translateY(-5px) scale(1.05)";

});

btn.addEventListener("mouseleave",function(){

    this.style.transform="translateY(0) scale(1)";

});

</script>

@endsection