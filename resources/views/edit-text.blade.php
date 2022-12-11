@extends('layout.mainlyout')
@section('title', 'edit nama masjid')

@section('content')
<h1 style="margin: 5rem">Edit Text Berjalan</h1>

    <div class="m-5">
        <form action="" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="Text">Text</label>
                <input type="text" name="text" id="text" class="form-control" placeholder="Text">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary" >Update</button>
            </div>
        </form>
    </div>
@endsection