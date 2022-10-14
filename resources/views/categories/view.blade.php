@extends('layouts.app')

@section('content')

<div class="container">
  <h2>View</h2>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Title</th>
        <th>Price</th>
        <th>Image</th>
       
      </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
      <tr>
        <td>{{ $loop->index+1}}</td>
        <td>{{ $category->Title}}</td>
        <td>{{$category->Price}}</td>
        <td><img src="images/{{$category->Image}}" alt="img" width="100px" height="100px"> </td>
        
</tr>
@endforeach
    </tbody>
  </table>
</div>

@endsection