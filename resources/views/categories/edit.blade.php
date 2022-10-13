<!DOCTYPE html>
<html lang="en">
<head>
  <title>Categories</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

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
</body>
</html>