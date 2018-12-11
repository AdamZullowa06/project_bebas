@extends('welcome')

@section('title')
    / Tambah Gudang
@endsection

@section('content')
    <div class="container justify-content-center col-md-9 mt-5">
        <div class="card shadow">
            <div class="card-header">Menambahkan Data Gudang</div>

            <div class="card-body">
                <form action="{{ route('save_gudang') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="label" class="col-sm-3 col-form-label">Alamat Gudang</label>
                        <div class="col-sm-4">
                            <textarea name="alamat" id="" cols="60" rows="5" placeholder="Isi dengan benar" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="label" class="col-sm-3 col-form-label">Kapasitas</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="kapasitas" placeholder="(Unit)" required>
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