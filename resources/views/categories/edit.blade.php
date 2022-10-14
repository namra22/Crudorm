@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Edit Category </h2>
  <div class="row">
    <div class="col-sm-4">
        <FORM method="POST" action="/category-update/{{$category->id}}" enctype="multipart/form-data">
    <form method="POST" action="/category-store" >
        @csrf
        @method('put')
<label>Title</label>
<input type="text" name="Title" class="form-control" value="{{$category->Title}}" />
<input type="text" name="Price" class="form-control" value="{{$category->Price}}" />
<input type="file" name="Image" class="form-control" value="{{$category->Image}}" />
<input type="text" name='f' value="{{$category->Image}}" hidden >
<img src="/images/{{$category->Image}}" alt="img" width="100px" height="100px">

<button class="btn btn-info mt-4" type="submit">Update </button>
</form>
</div>
</div>
</div>
@endsection