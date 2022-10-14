@extends('layouts.app')

@section('content')

<div class="container">
  <h2>New Categoury </h2>
  <div class="row">
    <div class="col-sm-4">
    <form method="POST" action="/category-store" enctype="multipart/form-data">
        @csrf
<label>Title</label>
<input type="text" name="Title" class="form-control" value="{{old('Title')}}" />
@if($errors->has("Title"))
<p class="text-danger">{{ $errors->first("Title")}}</p>
@endif
<label>Price</label>
<input type="text" name="Price" class="form-control" />
@if($errors->has("Price"))
<p class="text-danger">{{ $errors->first("Price")}}</p>
@endif
<label>Image</label>
<input type="file" name="Image" class="form-control" />
<button class="btn btn-info mt-4" type="submit">Create</button>
</form>
</div>
</div>
</div>
@endsection