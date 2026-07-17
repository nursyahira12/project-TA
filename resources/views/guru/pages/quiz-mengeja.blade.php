@extends('guru.layouts.app')

@section('content')

<style>

.card{
    border:none;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.card-header{
    background:linear-gradient(90deg,#4facfe,#00c6fb) !important;
    border:none;
    padding:22px 28px;
}

.card-header h3{
    font-weight:700;
}

.card-header small{
    opacity:.95;
    font-size:14px;
}

.card-body{
    padding:35px !important;
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

hr{
    margin:35px 0;
    border-top:2px dashed #dfe6ee;
}

h5{
    font-weight:700;
    color:#34495e;
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

.btn-primary{
    border-radius:12px;
    padding:12px 30px;
    font-weight:600;
}

.btn-light{
    border-radius:12px;
    font-weight:600;
    padding:10px 18px;
}

.alert{
    border-radius:12px;
}

</style>

<div class="container py-4">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow border-0 rounded-4">

                <div class="card-header bg-primary text-white py-3 rounded-top-4">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <h3 class="mb-0">
                                📚 Quiz Mengeja
                            </h3>

                            <small>
                                Tambahkan soal quiz mengeja untuk anak PAUD
                            </small>

                        </div>

                        <a href="{{ route('quiz.mengeja.data') }}"
                        class="btn btn-light rounded-pill px-4">

                            📋 Lihat Data

                        </a>

                    </div>

                </div>

                <div class="card-body p-4">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('quiz.store') }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf

                        <input type="hidden"
                               name="jenis_quiz"
                               value="huruf">

                        <!-- Pertanyaan -->
                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                Pertanyaan
                            </label>

                            <textarea
                                name="pertanyaan"
                                class="form-control"
                                rows="3"
                                placeholder="Contoh : Pilih huruf awal dari gambar berikut..."
                                required></textarea>

                        </div>

                        <!-- Gambar Soal -->
                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                Gambar Soal
                            </label>

                            <input type="file"
                                   name="gambar_soal"
                                   class="form-control"
                                   accept="image/*">

                        </div>

                        <!-- Audio Soal -->
                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                Audio Soal
                            </label>

                            <input type="file"
                                   name="audio_soal"
                                   class="form-control"
                                   accept=".mp3,.wav">

                        </div>

                        <hr>

                        <h5 class="mb-3">
                            Pilihan Jawaban
                        </h5>

                        <!-- Opsi A -->
                        <div class="mb-3">

                            <label class="form-label fw-bold">
                                Gambar Opsi A
                            </label>

                            <input type="file"
                                   name="gambar_opsi_a"
                                   class="form-control"
                                   accept="image/*">

                        </div>

                        <!-- Opsi B -->
                        <div class="mb-3">

                            <label class="form-label fw-bold">
                                Gambar Opsi B
                            </label>

                            <input type="file"
                                   name="gambar_opsi_b"
                                   class="form-control"
                                   accept="image/*">

                        </div>

                        <!-- Opsi C -->
                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                Gambar Opsi C
                            </label>

                            <input type="file"
                                   name="gambar_opsi_c"
                                   class="form-control"
                                   accept="image/*">

                        </div>

                        <hr>

                        <!-- Jawaban Benar -->
                        <div class="mb-4">

                            <label class="form-label fw-bold d-block mb-3">
                                Jawaban Benar
                            </label>

                            <div class="form-check form-check-inline">

                                <input class="form-check-input"
                                       type="radio"
                                       name="jawaban_benar"
                                       value="A"
                                       required>

                                <label class="form-check-label">
                                    Opsi A
                                </label>

                            </div>

                            <div class="form-check form-check-inline">

                                <input class="form-check-input"
                                       type="radio"
                                       name="jawaban_benar"
                                       value="B">

                                <label class="form-check-label">
                                    Opsi B
                                </label>

                            </div>

                            <div class="form-check form-check-inline">

                                <input class="form-check-input"
                                       type="radio"
                                       name="jawaban_benar"
                                       value="C">

                                <label class="form-check-label">
                                    Opsi C
                                </label>

                            </div>

                        </div>

                        <div class="text-center">

                            <button type="submit"
                                    class="btn btn-primary px-5 py-2 rounded-pill">

                                💾 Simpan Quiz

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection