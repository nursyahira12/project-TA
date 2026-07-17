@extends('guru.layouts.app')

@section('content')

<style>

.page-card{
    max-width:800px;
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

.btn-modern{
    border-radius:12px;
    padding:12px;
    font-weight:600;
}

.alert{
    border-radius:12px;
}

</style>

<div class="container py-4">

    <div class="page-card">

        <div class="card form-card">

            <div class="card-header-custom d-flex justify-content-between align-items-center">

                <h4>📚 Form Materi Angka</h4>

                <a href="{{ route('materi.angka.data') }}"
                   class="btn btn-light fw-semibold">
                    📋 Lihat Data
                </a>

            </div>

            <div class="card-body">

                @if(session('success'))

                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>

                @endif

                <form action="{{ route('materi.angka.store') }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    <div class="mb-4">

                        <label class="form-label">
                            Judul Materi
                        </label>

                        <input
                            type="text"
                            name="judul"
                            class="form-control"
                            placeholder="Masukkan judul materi">

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Deskripsi
                        </label>

                        <textarea
                            name="deskripsi"
                            rows="5"
                            class="form-control"
                            placeholder="Masukkan deskripsi materi"></textarea>

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Upload Gambar
                        </label>

                        <input
                            type="file"
                            name="gambar"
                            class="form-control">

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Upload Audio
                        </label>

                        <input
                            type="file"
                            name="audio"
                            class="form-control">

                    </div>

                    <button
                        type="submit"
                        class="btn btn-success btn-modern w-100">

                        💾 Simpan Materi

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection