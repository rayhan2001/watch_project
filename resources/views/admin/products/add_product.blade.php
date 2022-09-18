@extends('layouts.home_layout')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{session()->get('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>                        
                @endif
            <div class="col-md-8">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-3">
                            <img src="{{asset('storage/'.$product->image)}}" height="200" width="200">
                            <h4>{{$product->name}}</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p>Price: {{$product->price}}৳</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 m-auto mt-3">
                <div class="card my-5">
                    <div class="card-header">
                        <h2>Add Product</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/products')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="p_name" class="form-label">Product Name:</label>
                                <input type="text" class="form-control" name="p_name" placeholder="Product Name">
                            </div>
                            <div class="mb-3">
                                <label for="p_price" class="form-label">Product Price:</label>
                                <input type="number" class="form-control" name="p_price" placeholder="Product Price">
                            </div>
                            <div class="mb-3">
                                <label for="p_amount" class="form-label">Product Amount:</label>
                                <input type="number" class="form-control" name="p_amount" placeholder="Product Amount">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Product Image:</label>
                                <input type="file" name="image" class="form-control requard" placeholder="" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit" style="font-size: 22px;">Add Product</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
@endsection