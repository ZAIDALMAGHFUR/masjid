@extends('layout.mainlyout')
@section('title', 'Add Kas');

@section('content')
<h1 style="margin: 5rem">Add kas</h1>
<div class="m-5">
    <form action="add-kas" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="tanggal">Tanggal</label>

            <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="Text">
        </div>
        <div class="mt-3">
            <div class="form-group">
                <label for="jenis_transaksi">Jenis transaksi</label>
                <input type="text" name="jenis_transaksi" id="jenis_transaksi" class="form-control" placeholder="jenis transaksi">
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="jumlah">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="keterangan">
            </div>
            <button type="submit" class="btn btn-primary mt-5" >Submit</button>
        </div>
    </form>
    <div>
        <h1 style="font-size: 1rem; margin-top: 7rem">1. Jenis Transaksi hanya bisa di isi dengan <span>uang masuk</span> dan <span>uang keluar</span></h1>
        <h1 style="font-size: 1rem;">2. Jumlah di tulis tampa ada titik</h1>
    </div>
</div>
@endsection