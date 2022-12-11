@extends('layout.mainlyout')
@section('title', 'Add Text Berjalan')

@section('content')
<h1 style="margin: 5rem">Add Text Berjalan</h1>
<div class="m-5">
    <form action="add-text" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="text">Text</label>
            <input type="text" name="text" id="text" class="form-control" placeholder="Text">
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary" >Submit</button>
        </div>
    </form>
</div>
@endsection