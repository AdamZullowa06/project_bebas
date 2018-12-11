@extends('welcome')

@section('title')
    / Ubah Gudang
@endsection

@section('content')
    <div class="container justify-content-center col-md-9 mt-5">
        <div class="card shadow">
            <div class="card-header">Mengubah Data Gudang</div>

            <div class="card-body">
                <form action="{{ route('update_gudang', ['id' => $gudang->id]) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH')}}
                    <div class="form-group row">
                        <label for="label" class="col-sm-3 col-form-label">Alamat Gudang</label>
                        <div class="col-sm-4">
                            <textarea name="alamat" id="alamat" cols="60" rows="5" placeholder="Isi dengan benar" required>{{ $gudang->alamat}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="label" class="col-sm-3 col-form-label">Kapasitas</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="kapasitas" id="kapasitas" value="{{ $gudang->kapasitas }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="label" class="col-sm-3 col-form-label">Pic</label>
                        <div class="col-sm-7">
                            <input type="file" name="image" required>
                            <input type="submit" value="simpan" class="btn btn-success col-md-4 mt-3">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection