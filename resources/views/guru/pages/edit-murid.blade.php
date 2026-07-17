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

.form-control,
.form-select{
    border-radius:12px;
    border:1px solid #dbe4ee;
    padding:12px;
    transition:.25s;
}

.form-control:focus,
.form-select:focus{
    border-color:#4facfe;
    box-shadow:0 0 0 .15rem rgba(79,172,254,.2);
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

                <div>

                    <h4>✏️ Edit Data Murid</h4>

                    <small>
                        Perbarui informasi murid PAUD
                    </small>

                </div>

                <a href="{{ route('murid.data') }}"
                   class="btn btn-light fw-semibold">

                    📋 Kembali

                </a>

            </div>

            <div class="card-body">

                @if(session('success'))

                    <div class="alert alert-success">

                        {{ session('success') }}

                    </div>

                @endif

                <form action="{{ route('murid.update',$murid->id) }}"
                      method="POST">

                    @csrf

                    <div class="mb-4">

                        <label class="form-label">
                            Nama Murid
                        </label>

                        <input
                            type="text"
                            name="nama"
                            class="form-control"
                            value="{{ $murid->nama }}"
                            required>

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Kelas
                        </label>

                        <input
                            type="text"
                            name="kelas"
                            class="form-control"
                            value="{{ $murid->kelas }}"
                            required>

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Jenis Kelamin
                        </label>

                        <select
                            name="jenis_kelamin"
                            class="form-select"
                            required>

                            <option value="Laki-laki"
                                {{ $murid->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>
                                👦 Laki-laki
                            </option>

                            <option value="Perempuan"
                                {{ $murid->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                                👧 Perempuan
                            </option>

                        </select>

                    </div>

                    <button
                        type="submit"
                        class="btn btn-success btn-modern w-100">

                        💾 Update Data Murid

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection