<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All Products</h1>
    
    <div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product ->id}}</td>
                    <td>{{$product ->name}}</td>
                    <td>{{$product ->description}}</td>
                    <td>{{$product ->quantity}}</td>
                    <td>{{$product ->price}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>