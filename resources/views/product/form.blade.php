<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div>
                @if($arr ?? '' !=null)
                    <table class="table table-bordered">
                        <tr>
                            <th>NAME</th>
                            <th>IMG</th>
                            <th>PRICE</th>
                            <th>DISCOUNT</th>
                            <th>DESCRIPTION</th>
                        </tr>
                        <tr>
                            <td>{{$arr['name']}}</td>
                            <td><img src="{{$arr['img']}}" alt="" width="100px"></td>
                            <td>{{$arr['price']}}</td>
                            <td>{{$arr['discount']}}</td>
                            <td>{{$arr['description']}}</td>
                        </tr>
                    </table>
                @endif
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1>ADD PRODUCT FORM</h1>
                </div>
                <div class="panel-body">
                    <form action="{{route('add-product')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="image">URL image</label>
                            <input type="text" class="form-control" name="image" id="image">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" name="price" id="price">
                        </div>
                        <div class="form-group">
                            <label for="discount">Discount</label>
                            <input type="text" class="form-control" name="discount" id="discount">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" name="description" id="description">
                        </div>
                        <button class="btn btn-primary">ADD</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
</body>
</html>
