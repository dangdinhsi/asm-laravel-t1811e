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
    @if($list ?? '' !=null)
    <div>
        <h3>STUDENT LIST</h3>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>FULLNAME</th>
                <th>AGE</th>
                <th>ADDRESS</th>
                <th width="30px"></th>
            </tr>
            @foreach($list as $item)

                <tr>
                    <td>{{$index++}}</td>
                    <td>{{$item->fullname}}</td>
                    <td>{{$item->age}}</td>
                    <td>{{$item->address}}</td>
                    <td><button class="btn btn-primary" onclick="deleteStudent({{$item->no}})">DELETE</button></td>
                </tr>
            @endforeach
        </table>
    </div>
    @endif
        <div class="panel panel-primary">
            <div class="panel-heading">
                STUDENT ADD FORM
            </div>
            <div class="panel-body">
                <form action="{{route('add-student')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="fullname">Fullname</label>
                        <input type="text" name="fullname" id="fullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" name="age" id="age" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>
                    <button class="btn btn-success">ADD</button>
                </form>
            </div>
        </div>
</div>
</body>
</html>
