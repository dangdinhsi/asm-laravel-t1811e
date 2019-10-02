<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>List room</h1>
<?php $index=1;?>
<table border="1">
    <tr>
        <th>STT</th>
        <th>Code</th>
        <th>Type</th>
        <th>Floor</th>
        <th>Price</th>
    </tr>
    @foreach($list as $item)
        <tr>
            <td>{{$index++}}</td>
            <td>{{$item['code']}}</td>
            <td>{{$item['type']}}</td>
            <td>{{$item['floor']}}</td>
            <td>{{$item['price']}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
