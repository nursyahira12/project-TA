@extends('guru.layouts.app')

@section('content')

<style>

.page-card{
    max-width:850px;
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
    color:#fff;
    padding:20px 25px;
}

.card-header-custom h4{
    margin:0;
    font-weight:700;
}

.card-body{
    padding:30px;
}

.form-label{
    font-weight:600;
    color:#2c3e50;
    margin-bottom:8px;
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
    width:180px;
    height:180px;
    object-fit:contain;
    background:#f8f9fa;
    border-radius:15px;
    border:1px solid #e9ecef;
    padding:10px;
}

.audio-box{
    background:#f8fbff;
    border:1px solid #e8eef7;
    border-radius:12px;
    padding:15px;
}

.btn-modern{
    border-radius:12px;
    padding:12px;
    font-weight:600;
}

</style>

<div class="container py-4">

    <div class="page-card">

        <div class="card form-card">

            <div class="card-header-custom d-flex justify-content-between align-items-center">

                <h4>✏ Edit Materi Angka</h4>

                <a href="{{ route('materi.angka.data') }}"
                   class="btn btn-light fw-semibold">
                    📋 Kembali
                </a>

            </div>

            <div class="card-body">

                <form action="{{ route('materi.angka.update',$materi->id) }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    <div class="mb-4">

                        <label class="form-label">
                            Judul Materi
                        </label>

                        <input type="text"
                               name="judul"
                               class="form-control"
                               value="{{ $materi->judul }}">

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Deskripsi
                        </label>

                        <textarea
                            name="deskripsi"
                            rows="5"
                            class="form-control">{{ $materi->deskripsi }}</textarea>

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Gambar Saat Ini
                        </label>

                        <br>

                        <img src="{{ asset($materi->gambar) }}"
                             class="preview-img">

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Upload Gambar Baru
                        </label>

                        <input type="file"
                               name="gambar"
                               class="form-control">

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Audio Saat Ini
                        </label>

                        <div class="audio-box">

                            @if($materi->audio)

                                <audio controls style="width:100%;">
                                    <source src="{{ asset($materi->audio) }}" type="audio/mpeg">
                                </audio>

                            @else

                                <span class="text-muted">
                                    Belum ada audio.
                                </span>

                            @endif

                        </div>

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Upload Audio Baru
                        </label>

                        <input type="file"
                               name="audio"
                               class="form-control">

                    </div>

                    <button
                        type="submit"
                        class="btn btn-success btn-modern w-100">

                        💾 Update Materi

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection