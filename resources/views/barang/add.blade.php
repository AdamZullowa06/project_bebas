@extends('welcome')

@section('title')
    / Tambah Barang
@endsection

@section('content')
    <div class="container justify-content-center col-md-9 mt-5">
        <div class="card shadow">
            <div class="card-header">Menambahkan Data Barang</div>

            <div class="card-body">
                <form action="{{ route('save_barang') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="label" class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="nama" placeholder="nama barang" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="label" class="col-sm-3 col-form-label">Pilih Gudang</label>
                        <div class="col-sm-7">
                            <select name="gudang_id" id="" class="form-control">
                                @foreach ($gudang as $gudang)
                                    <option class="form-control" value="{{ $gudang->id }}">{{ $gudang->alamat }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="label" class="col-sm-3 col-form-label">Berat Barang</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" placeholder="(Kg)" name="berat" required>
                            <input type="submit" class="btn btn-success col-md-4 mt-3" value="simpan">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection