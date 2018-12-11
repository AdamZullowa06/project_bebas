@if (session('success'))
    <div class="alert alert-success alert-dismissible">
        <button class="close" type="button" data-dismiss="alert">x</button>
        <strong>Sukses!</strong> Data berhasil ditambah.
        {{ session('sucess')}}
    </div>
@endif

@if (session('info'))
    <div class="alert alert-info alert-dismissible">
        <button class="close" type="button" data-dismiss="alert">x</button>
        <strong>Edit!</strong> Data berhasil telah diedit.
        {{ session('info') }}
    </div>
@endif

@if (session('danger'))
    <div class="alert alert-danger aler-dismissible">
        {{ session('success') }}
        <button class="close" type="button" data-dismiss="alert">x</button>
        <strong>Hapus!</strong> Data telah dihapus.
    </div>
@endif