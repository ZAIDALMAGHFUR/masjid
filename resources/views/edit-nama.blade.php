@extends('layout.mainlyout')
@section('title', 'edit nama masjid')

@section('content')
<h1 style="margin: 5rem">Edit Nama Masjid</h1>

    <div class="m-5">
        <form action="" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="Nama Masjid">Nama Masjid</label>
                <input type="text" name="nama_masjid" id="nama_masjid" class="form-control" placeholder="Nama Masjid">
            </div>
            <div class="form-group" style="margin-top: 20px;">
                <label for="Alamat Masjid">Alamat Masjid</label>
                <input type="text" name="alamat_masjid" id="alamat_masjid" class="form-control" placeholder="Alamat Masjid">
            </div>
            <div class="form-group" style="margin-top: 20px;">
                <label for="No Handphone">No Handphone</label>
                <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="No Handphone Masjid">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary" >Update</button>
            </div>
        </form>
    </div>
@endsection