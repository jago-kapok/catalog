@extends('admin.layout')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Blog Post - Form</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" class="card-body" action="{{ route('post-store') }}">
                    @csrf

                    <input type="hidden" name="id" value="{{ $post ? $post->id : '' }}">
                    <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                    <div class="mb-3">
                        <label class="form-label">Judul <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="judul" value="{{ $post ? $post->judul : '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kategori <span class="text-danger">*</span></label>
                        <select class="form-select" name="kategori_id" required>
                            <option selected disabled>--- Pilih Kategori ---</option>
                            @foreach ($kategori as $row)
                            <option value="{{ $row->id }}" {{ $post && $post->kategori->id == $row->id ? 'selected' : '' }}>{{ $row->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi <span class="text-danger">*</span></label>
                        <textarea type="text" class="form-control" name="deskripsi" rows="10" required>{{ $post ? $post->deskripsi : '' }}</textarea>
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