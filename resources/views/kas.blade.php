@extends('layout.mainlyout')
@section('title', 'kas masjid')

@section('content')
<h1 style="margin: 5rem">Kas Masjid</h1>
<div class="d-flex justify-content-end">
    <a href="add-kass" class="btn btn-primary mt-3 me-5">Add Kas</a>
</div>
    <div class="m-5">
        <div class="mt-3">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        </div>
            <div class="my-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Jenis Transaksi</th>
                            <th>Jumlah</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($kas as $b)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $b->tanggal }}</td>
                                <td>{{ $b->jenis_transaksi }}</td>
                                <td>{{ $b->jumlah }}</td>
                                <td>{{ $b->keterangan }}</td>
                                <td>
                                    @method('destroy')
                                    <a href="destroy/{{ $b->id }}" style="text-decoration: none;" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                            <tr class="text-success">
                                <td  class="text-center">Total Pemasukan</td>
                                <td>Rp.{{ $total_pemasukan }}</td>
                            </tr>
                            <tr class="text-danger">
                                <td  class="text-center">Total pengeluan</td>
                                <td>Rp.{{ $total_pengeluan }}</td>
                            </tr>
                            <tr style="color: black">
                                <td  class="text-center">Jumblah Akhir</td>
                                <td>Rp.{{ $jumblah_akhir }}</td>
                            </tr>
                    </tfoot>
                </table>
            </div>
    </div>
@endsection