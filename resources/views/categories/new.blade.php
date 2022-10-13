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
</body>
</html>