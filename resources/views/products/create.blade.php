<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Create Product</h1>
   <div>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error )
            <li style="color: red">{{$error}}</li>
        @endforeach
    </ul>
        
    @endif
   </div>
    <form method="POST" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Name:</label>
            <input type="text" name="name" placeholder="Product Name" />
        </div>
        <div>
            <label>Description:</label>
            <input type="text" name="description" placeholder="Product Details" />
        </div>
        <div>
            <label>Quantity:</label>
            <input type="text" name="quantity" placeholder="Number of Items" />
        </div>
        <div>
            <label>Price:</label>
            <input type="text" name="price" placeholder="Product Price" />
        </div>
        <div>
            <input type="submit" value="Save" />
        </div>
    </form>
</body>

</html>
