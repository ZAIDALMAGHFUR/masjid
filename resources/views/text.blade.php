@extends('layout.mainlyout')
@section('title', 'Text Berjalan')

@section('content')
<h1 style="margin: 5rem">Edit Text Berjalan</h1>
<div class="m-5">
    
<div class="d-flex justify-content-end">
    <a href="add-text" class="btn btn-primary mt-3 me-5">Add Text</a>
</div>

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
                    <th>Text</th>
                    <th>Action</th>
            </thead>
            <tbody>
                @foreach ($text as $t)
                    <tr>
                        <td>
                            {{ $t->text }}
                        </td>
                        <td>
                            <a href="edit-text/{{ $t->id }}" style="text-decoration: none;" class="btn btn-info me-2">Edit</a>
                            @method('destroy')
                            <a href="destroy/{{ $t->id }}" style="text-decoration: none;" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection