@extends('guru.layouts.app')

@section('content')

<style>

.page-card{
    max-width:900px;
    margin:auto;
}

.form-card{
    border:none;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.card-header-custom{
    background:linear-gradient(90deg,#4facfe,#00c6fb);
    color:white;
    padding:20px 25px;
}

.card-header-custom h3{
    margin:0;
    font-weight:700;
}

.card-body{
    padding:35px;
}

.form-label{
    font-weight:600;
    color:#2c3e50;
}

.form-control{
    border-radius:12px;
    border:1px solid #dbe4ee;
    padding:12px;
    transition:.25s;
}

.form-control:focus{
    border-color:#4facfe;
    box-shadow:0 0 0 .15rem rgba(79,172,254,.2);
}

.form-control[type=file]{
    padding:10px;
}

.preview-img{
    width:120px;
    height:120px;
    object-fit:cover;
    background:#f8f9fa;
    border:1px solid #e9ecef;
    border-radius:15px;
    padding:6px;
}

.preview-box{
    background:#f8fbff;
    border:1px solid #e8eef7;
    border-radius:12px;
    padding:15px;
    margin-bottom:12px;
}

.form-check{
    display:inline-flex;
    align-items:center;
    background:#f8fbff;
    border:1px solid #e8eef7;
    border-radius:12px;
    padding:12px 18px;
    margin-right:12px;
    margin-bottom:10px;
}

.form-check-input{
    margin-right:8px;
}

.btn-modern{
    border-radius:12px;
    padding:12px;
    font-weight:600;
}

hr{
    margin:35px 0;
    border-top:2px dashed #dfe6ee;
}

h5{
    font-weight:700;
    color:#34495e;
}

.alert{
    border-radius:12px;
}

</style>

<div class="container py-4">

    <div class="page-card">

        <div class="card form-card">

            <div class="card-header-custom d-flex justify-content-between align-items-center">

                <div>

                    <h3>

                        @if($quiz->jenis_quiz == 'huruf')
                            📚 Edit Quiz Mengeja
                        @else
                            🔢 Edit Quiz Berhitung
                        @endif

                    </h3>

                    <small>

                        @if($quiz->jenis_quiz == 'huruf')
                            Ubah data quiz mengeja
                        @else
                            Ubah data quiz berhitung
                        @endif

                    </small>

                </div>

                @if($quiz->jenis_quiz == 'huruf')

                    <a href="{{ route('quiz.mengeja.data') }}"
                       class="btn btn-light fw-semibold">

                        📋 Kembali

                    </a>

                @else

                    <a href="{{ route('quiz.berhitung.data') }}"
                       class="btn btn-light fw-semibold">

                        📋 Kembali

                    </a>

                @endif

            </div>

            <div class="card-body">

                <form action="{{ route('quiz.update',$quiz->id) }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    <input type="hidden"
                           name="jenis_quiz"
                           value="{{ $quiz->jenis_quiz }}">

                    <div class="mb-4">

                        <label class="form-label">
                            Pertanyaan
                        </label>

                        <textarea
                            name="pertanyaan"
                            rows="3"
                            class="form-control"
                            required>{{ $quiz->pertanyaan }}</textarea>

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Gambar Soal
                        </label>

                        @if($quiz->gambar_soal)

                            <div class="preview-box">

                                <img src="{{ asset($quiz->gambar_soal) }}"
                                     class="preview-img">

                            </div>

                        @endif

                        <input type="file"
                               name="gambar_soal"
                               class="form-control">

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Audio Soal
                        </label>

                        @if($quiz->audio_soal)

                            <div class="preview-box">

                                <audio controls style="width:100%;">
                                    <source src="{{ asset($quiz->audio_soal) }}">
                                </audio>

                            </div>

                        @endif

                        <input type="file"
                               name="audio_soal"
                               class="form-control">

                    </div>

                    <hr>

                    <h5>🖼 Pilihan Jawaban</h5>

                    @foreach(['a','b','c'] as $opsi)

                        <div class="mb-4">

                            <label class="form-label">
                                Gambar Opsi {{ strtoupper($opsi) }}
                            </label>

                            @php
                                $field = 'gambar_opsi_'.$opsi;
                            @endphp

                            @if($quiz->$field)

                                <div class="preview-box">

                                    <img src="{{ asset($quiz->$field) }}"
                                         class="preview-img">

                                </div>

                            @endif

                            <input type="file"
                                   name="{{ $field }}"
                                   class="form-control">

                        </div>

                    @endforeach

                    <hr>

                    <div class="mb-4">

                        <label class="form-label d-block mb-3">
                            Jawaban Benar
                        </label>

                        @foreach(['A','B','C'] as $jawaban)

                            <div class="form-check">

                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="jawaban_benar"
                                    value="{{ $jawaban }}"
                                    {{ $quiz->jawaban_benar == $jawaban ? 'checked' : '' }}>

                                <label class="form-check-label">

                                    Opsi {{ $jawaban }}

                                </label>

                            </div>

                        @endforeach

                    </div>

                    <button
                        type="submit"
                        class="btn btn-success btn-modern w-100">

                        💾 Update Quiz

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection