@extends('layout.mainlyout')
@section('title', 'nama masjid')

@section('content')
<h1 style="margin: 5rem">Edit Nama Masjid</h1>

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
                            <th>Nama Masjid</th>
                            <th>Alamat Masjid</th>
                            <th>No Handphone</th>
                            <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($masjids as $b)
                            <tr>
                                <td>{{ $b->nama_masjid }}</td>
                                <td>{{ $b->alamat_masjid }}</td>
                                <td>{{ $b->no_telp }}</td>
                                <td>
                                    <a href="edit-nama/{{ $b->id }}" style="text-decoration: none;" class="btn btn-info me-2">Edit</a>
                                    @method('destroy')
                                    <a href="destroy/{{ $b->id }}" style="text-decoration: none;" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection