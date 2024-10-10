@extends('admin.layout')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Kategori</h1>
        <a href="{{ route('kategori-form') }}" class="btn btn-primary rounded">
            <i data-feather="plus"></i> Tambah
        </a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card p-3">
                <div class="table-responsive">
                    <table class="table table-strtiped table-hover">
                        <thead>
                            <tr>
                                <th width="50">No.</th>
                                <th>Kategori</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $key => $row)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>
                                    <form id="logout-form" action="{{ route('kategori-destroy') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $row->id }}">
                                        <a href="{{ url('kategori/form/'.$row->id) }}" class="btn btn-sm btn-info rounded mb-1"><i data-feather="edit"></i></a>
                                        <button type="submit" class="btn btn-sm btn-danger rounded mb-1"><i data-feather="trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection