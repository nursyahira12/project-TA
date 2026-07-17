@extends('landing.layouts.app')
@section('content')


    <section class="tf-slider-1">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="slider-1">
                        
                        <div class="themesflat-carousel clearfix" data-margin="30" data-item="1" data-item2="1" data-item3="1"
                            data-item4="1" data-auto="false">

                            <div class="rabbit-welcome">

                                <div id="rabbit-animation"></div>

                                <button onclick="playWelcomeAudio()" class="rabbit-sound-btn">
                                    <img src="{{ asset('assets/landing/images/icon/play.png') }}">
                                </button>

                                <audio id="welcomeAudio">
                                    <source src="{{ asset('assets/landing/images/icon/chico.mp3') }}" type="audio/mpeg">
                                </audio>

                            </div>

                        </div>

                    </div><!--/.slider-2-->
                </div>
            </div>
        </div>
    </section>

    <section id="belajar" class="tf-section tf-discovery-2">
        <div class="container">
            <div class="row jus-c-center">
                <div class="col-12">
                    <div class="title-heading st-2">
                        <div class="sub-heading clr-pri-1 f-mulish">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="77" height="30" viewBox="0 0 77 30">
                                <g>
                                    <image width="77" height="30"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAeCAYAAABpE5PpAAADvUlEQVRogeWaW4hVVRjHf6PjNbvbWGqaZKhRMl3ooYkeyrAoDKKQIrLoIQkqJAglqIdeuj4VCRbRS4IR0UuFqdEFu0lQRqRhZTWRMSpaltfmF6u+nYvDOdOxM+ecPTN/+Niw9z5r/dd/rW9937f26VCpguOBccDOag9HOkbVGP8nwMUjXZxaqCbahcBcYEs5KJYP1dxzV7oPnDLSxamFypXWHWK9Vx6K5UOlaI/Gdf1IF2Yg5O45AdgLjAHmHcOeloQ/J1bp2cAZEX0L7AF+Ab4GPge+BfpbOcjBRmfW3sIQrLcOwcYD14ctrNj/9gO/AodDvEnA6Ox5SmPWAa8DrwG/l1ee6shFuy6uGwZ4fzqwDLgTODEEeAt4G9gMfBWC5UgTMSMicg9wGbAYuBnYB6wBngC2tnDcjSG5Z9h2/8Ht2b3CTlafUg+pR9Q16tXq6Crv1mNd6t3ql9Fnv7panfk/22upFZ2d6VHMriBwo7pD/VN9Tp01iAQ7QvxPo/c/1OUNTEZLrOjk1iD9U9bpBPX5uP+BOr+JhJJ4S9Rd0d+76rSyi7YyyL7qUff5KFzxwRbO/OnqG9kEXlBm0TYF0eQa09Vt6h51QRtIpQl6PPj8pl5aRtE61QNB8pYQrE89v83klgenvWp32USbnwWBrerOEghW2IrgtSOCVTu5TI59/m/RFmeipZTi8jLNqvpscEsRdmIbeawOHp2dkXQWeDgqgu7sXsrYd8fpRztwLzAHuAJYCSxpA4lU1SwCtgFHcgX/CymH2qKui9m/Sz23RbN8mtob/Ja2YZUtjb7vK9xzVZ2i1UJviHhlk1OTHvWwelC9pIWCjVV/iLGPSfeKU46Z4ZId2ZKcGIX5CbE8k50KTAW6gGlxzYvx5NovAo8Ah5rgJvcDTwI/AhcBfU3ooxIPAI8B9wDPUOPk9liQjoUmR0E+C5gdoq6IYnywkSb1FeAGYCOwADjQRMHOAzbFocPYf4+02rA/NGqT1M3hLi83cUuYqn4f/fTkz4aiaMnOygLDS00QLpVzX0T76yufD1XRiMjdFwN7Uz1pkNqdo34X7aaJGTecREs2T/0mBpgi3KIG2hoVZ3z7or0k3Ixq7w510YjyZm2WDr2vXhUi1PP7tJJuytwxYYM6pdZvGo2eZcJtcWzeFZx+BtYCHwKfxced/jjinxKRMVUZ10ZaRaQwDwGrBvr4M5xEI76o3RE51dw63i+QyqMXgKfrSZWGm2g5kmjXRNKePkmmFXgccDBW3fb4z8o7wMd1twr8BQgaaKwD8SIIAAAAAElFTkSuQmCC" />
                                </g>
                            </svg>
                            <span class="inner-sub st-1">Pembelajaran Anak</span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="77" height="30" viewBox="0 0 77 30">
                                <g>
                                    <image width="77" height="30"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAeCAYAAABpE5PpAAADtUlEQVRoge2Za6iUVRSGH4/HvB3Ma16PmfcETaMSk6IfSYFwKFROhJQESghCPwyORCD+MBEEQalAQQ0yipD6USJYkKJIIkQqHkkxLS95I/V4ydsbK9+PPqaZOafOzJwZmxc2M/Pt/a299jtr7bXW3p0kUUVW9Af+AK5kdtZU+cqJJ4Dvs3VWScuNZmA88HjmiKp75sdFIAjqlx5VtbT82AH0BSanR1VJy4/t7l2RHnU/uGf88SOBx4CxwECgd6o/ot9p4CjwA/ATcLeNsmNPOwTcAh4ErlPBpPUEXgJmAjOcHiS4A7SYrC5AL6B7qj/2qW3Al243WpnrF2AY8DLwxV9PgrQKauMkrZd0RfdwR9IOScslzZQ0SlKXLOvpJWmqpPmSPpF0zu//LmmVpGF5ONjoseuTZ5VC2MOSNku66wUclLRQ0kP/UV5nSS9K+lTSbUk3TV6fLGPnec6fK4W0WFyTpGtWfJ8X26mAczwiaZ2t9oykWRn9o/U36sudtKGSvrO6FyS9XmCyMtskSbtTrtg91X/Sz+eWM2lTUop+LWlQieYNy37HLrsn5f5brMsH5Ura06mNfqUXUmodnneQOOIg0WR99pYjaZMlXbKCTR2sy0RH2SDuVet0XVJtMiD8t38HK1nvjTiwpEz+xCDuvKTDqWAwKTpq/WNzByrXw5Ex8H6ZEJa0Z52SJGhMKoIoLQYDg5xNlxqbgNeAb4EXgNsdoAM+zejriiPBZaARWO7fS2v9ZS2wGpgLfFhiRd80YSeBV0pE2ATgGderY4B6YHhGuZUL4xJLixrtpuus0f5eCjwF7HTR/Rywq0hzdrb8WUADMLQdstYllhZV/CJgDfAWsLJAyubDAOBz4AFgcZEIC9nvAvNcdCeIov6srTs+TwEXvDW12CWjkL+Wekc+JTmePuWosYUFgU8CB4qwiATdfFY1HdgCzLZShUYd8J5JOQIcA04A5//F8dA/kREppjtCHJc0pEjRKJLVzzzPj5LqyixattqyDdjuBe0vQvkShH1s+b9KGlFphOUirasXFDjmM6xCTNZb0lbLjUx7QiUSlou0aMNNWKDFZ1c17ZioQdIJyzsq6dFKJSwfadEGSvomlQmHu86xJbZFeJA8Q9LOlIxtZVCutbu1dkcQEXUBsMwpQiDC8VfO3iPC/uaEtMaXGnHdNc2Z/WC/E2H9beCjIkTIkqOtFyt1zuPecPLbVjQ799uQ3OT8n0hLY6qz68jmR9i6ugJXbVFx5RVJ4FaTdn8B+BNkBX8WFIKNUQAAAABJRU5ErkJggg==" />
                                </g>
                            </svg>
                        </div>
                        <h2 class="title clr-pri-1">Belajar Seru Bersama
                             Smart Kids Azifa</h2>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-5">
                    <div class="sc-discovery-2 wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="800ms">
                        <div class="box-feature">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="150" height="144" viewBox="0 0 150 144">
                                <g data-name="01">
                                    <image width="150" height="144"
                                    xlink:href="{{ asset('assets/landing/images/icon/123.png') }}" />
                                </g>
                            </svg>
                        </div>
                        <div class="box-content">
                            <h4 class="title"><a href="{{ route('belajar.angka') }}">Belajar Angka</a></h4>
                            <p class="wrap f-mulish"></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-5">
                    <div class="sc-discovery-2 wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                        <div class="box-feature">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="150" height="144" viewBox="0 0 150 144">
                                <g data-name="02">
                                    <image width="150" height="144"
                                    xlink:href="{{ asset('assets/landing/images/icon/berhitung.png') }}" />
                                </g>
                            </svg>
                        </div>
                        <div class="box-content">
                            <h4 class="title"><a href="{{ route('ayo.berhitung') }}">Ayo Berhitung</a></h4>
                            <p class="wrap f-mulish"></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-5">
                    <div class="sc-discovery-2 wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">
                        <div class="box-feature">
                            <svg xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="150" height="144"
                                viewBox="0 0 150 144">

                                <g data-name="03">
                                    <image width="150" height="144"
                                    xlink:href="{{ asset('assets/landing/images/icon/abc.png') }}" />
                                </g>
                            </svg>
                        </div>
                        <div class="box-content">
                            <h4 class="title"><a href="{{ route('belajar.huruf') }}">Belajar Huruf</a></h4>
                            <p class="wrap f-mulish"></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-5">
                    <div class="sc-discovery-2 wow fadeInUp animated" data-wow-delay="0.3ms" data-wow-duration="1400ms">
                        <div class="box-feature">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                    width="150"
                                    height="144"
                                    viewBox="0 0 150 144">

                                <image href="{{ asset('assets/landing/images/icon/mengeja.png') }}"
                                    width="150"
                                    height="144" />

                            </svg>
                        </div>
                        <div class="box-content">
                            <h4 class="title"><a href="{{ route('ayo.mengeja') }}">Ayo Mengeja</a></h4>
                            <p class="wrap f-mulish"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js"></script>

<script>

function playWelcomeAudio(){
    let audio = document.getElementById('welcomeAudio');
    audio.currentTime = 0;
    audio.play();
}

lottie.loadAnimation({
    container: document.getElementById('rabbit-animation'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: "{{ asset('assets/landing/images/icon/rabbit.json') }}"
});

</script>


@endsection


<style>
/* =========================
   SLIDER ATAS
========================= */
.tf-slider-1{
    background: linear-gradient(to bottom, #bfe6ff, #eaf6ff);
    position: relative;
    min-height: 400px;
    overflow: visible;
}

/* =========================
   AWAN
========================= */
.tf-slider-1::before,
.tf-slider-1::after{
    content: "";
    position: absolute;
    top: 40px;
    width: 200px;
    height: 60px;
    background: white;
    border-radius: 50px;
    opacity: 0.5;
    filter: blur(1px);
    pointer-events: none;
    z-index: 1;
    animation: cloudMove 25s linear infinite;
}

.tf-slider-1::before{
    left: -250px;
}

.tf-slider-1::after{
    top: 90px;
    left: -350px;
    animation-duration: 35s;
    opacity: 0.35;
}

@keyframes cloudMove{
    from { transform: translateX(0); }
    to { transform: translateX(150vw); }
}

/* =========================
   FIX SCROLL
========================= */
html, body {
    position: relative !important;
    height: auto !important;
    min-height: 100vh !important;
    overflow-y: auto !important;
    overflow-x: hidden !important;
}

#wrapper, #page {
    height: auto !important;
    min-height: 100vh !important;
    overflow: visible !important;
}

/* =========================
   SECTION BELAJAR
========================= */
#belajar{
    background-color: #eef8ff;
}

/* =========================
   CARD WARNA PASTEL
========================= */

#belajar .sc-discovery-2{
    border-radius: 30px;
    padding: 25px 15px;
    transition: 0.3s ease;
}

/* card 1 - pink soft */
#belajar .col-xl-3:nth-child(2) .sc-discovery-2{
    background: #ffe5ec;
}

/* card 2 - biru soft */
#belajar .col-xl-3:nth-child(3) .sc-discovery-2{
    background: #e3f2fd;
}

/* card 3 - ungu soft */
#belajar .col-xl-3:nth-child(4) .sc-discovery-2{
    background: #efe7ff;
}

/* card 4 - kuning soft */
#belajar .col-xl-3:nth-child(5) .sc-discovery-2{
    background: #fff4cc;
}

/* hover lucu */
#belajar .sc-discovery-2:hover{
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.08);
}



.rabbit-welcome{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:120px;
    min-height:100px;
}

#rabbit-animation{
    width:400px;
    height:400px;
}

.rabbit-sound-btn{
    background:none;
    border:none;
    cursor:pointer;
}

.rabbit-sound-btn img{
    width:140px;
}

.rabbit-welcome{
    margin-top:-80px;
}

</style>