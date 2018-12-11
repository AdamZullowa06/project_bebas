@extends('welcome')

@section('title')
    /  Tabel Barang
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="table-responsive col-12 col-md-9 py-4">
                <table class="table table-striped shadow rounded">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Alamat Gudang</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Berat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->gudang->alamat }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->berat }} Kg</td>
                                <td>
                                    <form action="{{ route('destroy_barang', $row->id) }}" method="POST">
                                    <a href="{{ route('edit_barang', ['id' => $row->id]) }}" class="btn btn-warning btn-sm">Ubah</a>
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>        
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE')}}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row justify-content-center">
                    {{ $barang->links() }}    
                </div>    
            </div>
        </div>
    </div>
@endsection