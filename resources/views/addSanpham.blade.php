<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <form action="{{route('add-sp')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label>Discount</label>
            <input type="text" class="form-control" name="discount">
        </div>
        <div class="form-group">
            <label>URL image</label>
            <input type="text" class="form-control" name="image">
        </div>
        <button class="btn btn-primary">ADD</button>
    </form>
</div>
</body>
</html>
