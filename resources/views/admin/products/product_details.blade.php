@extends('layouts.home_layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{ url('/product/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <!-- Single Products -->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="{{ asset('storage/'.$product->image)}}" width="100%" id="ProductImg">
            </div>
            <div class="col-2">
                <p>{{$product->category->category_name}}</p>
                <h1>{{$product->name}}</h1>
                <h4>Price : {{$product->price}}৳</h4>
                <form action="/add-to-cart" method="POST">
                    @csrf
                    <select name="size">
                        <option value="">Select Colour</option>
                        <option value="Red">Red</option>
                        <option value="Green">Green</option>
                        <option value="Blue">Blue</option>
                        <option value="Black">Black</option>
                    </select>
                    <input type="hidden" name="pid" value="{{$product->id}}">
                    <input type="hidden" name="price" value="{{$product->price}}">
                    <input type="hidden" name="name" value="{{$product->name}}">
                    <label>Amount</label><input type="number" name="quantity" value="1">
                    <button type="submit" class="btn">Add To Cart</button>
                </form>
                    <h3>Product Details <i class="fa fa-indent"></i></h3>
                    <br>
                    <p>{{$product->details}}</p>
            </div>
        </div>
    </div>
    <!-- title -->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
        </div>
    </div>
    <!-- Products -->
    <div class="small-container">
        <div class="row">
            @foreach ($related_products as $rel_product)
            <div class="col-4">
                <a href="{{url('/products/'.$rel_product->id)}}"><img src="{{ asset('storage/'.$rel_product->image)}}">
                <h4>{{$rel_product->name}}</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Price : {{$rel_product->price}}৳</p>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
@endsection