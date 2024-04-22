<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>

<body>
    <h1>All Products</h1>

    <div>
        @if (@session()->has('success'))
            <div style="color: green">{{ session('success') }}</div>
        @endif
    </div>

    <div>
    <div style="margin-bottom: 20px;">
        <a href="{{route('product.create')}}">Add New Product</a>
    </div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td><a href="{{ route('product.edit', ['product' => $product]) }}">Edit</a></td>
                    <td>
                        <form method="POST" action="{{route('product.destroy', ['product'=>$product])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>