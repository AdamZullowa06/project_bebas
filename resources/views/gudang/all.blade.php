@extends('welcome')

@section('title')
    /  Tabel Gudang
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 py-4">
                <div class="table-responsive">
                    <table class="table table-striped rounded shadow">
                        <thead class="thead-dark">
                            <tr class="rounded-top">
                                <th scope="col">No</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Kapasitas</th>
                                <th scope="col">Pic</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gudang as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->alamat }}</td>
                                    <td>{{ $row->kapasitas }} Unit</td>
                                    <td><img src="asset('upload/image/{{ $row->pic }}')" alt="{{ $row->pic }}" width="100px;" height="100px;"></td>
                                    <td>                        
                                        <form action="{{ route('destroy_gudang', $row) }}" method="POST">
                                            <a href="{{ route('edit_gudang', $row) }}" class="btn btn-warning btn-sm">Ubah</a>
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
                          {{ $gudang->links() }}
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection