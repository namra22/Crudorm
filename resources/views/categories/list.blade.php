@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Categories <a class="btn btn-info" href="/category-create">New Category</a></h2>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Title</th>
        <th>Price</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
      <tr>
        <td>{{ $loop->index+1}}</td>
        <td>{{ $category->Title}}</td>
        <td>{{$category->Price}}</td>
        <td><img src="images/{{$category->Image}}" alt="img" width="100px" height="100px"> </td>
        <td> <a href="/category-edit/{{ $category->id }}" class="btn btn-sm btn-info">Edit</a>
        <a href="/category-view" class="btn btn-sm btn-info">View</a>
         <a href="/category-delete/{{ $category->id }}" class="btn btn-sm btn-danger">Delete</a> 
        
    </td>
</tr>
@endforeach
    </tbody>
  </table>
</div>

@endsection