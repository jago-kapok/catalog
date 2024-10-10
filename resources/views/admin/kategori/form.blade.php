@extends('admin.layout')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Kategori - Form</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" class="card-body" action="{{ route('kategori-store') }}">
                    @csrf

                    <input type="hidden" name="id" value="{{ $kategori ? $kategori->id : '' }}">
                    <div class="mb-3">
                        <label class="form-label">Nama Kategori <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nama" value="{{ $kategori ? $kategori->nama : '' }}" required>
                    </div>

                    <button
                        type="submit"
                        class="btn btn-primary">
                        Simpan Data
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection