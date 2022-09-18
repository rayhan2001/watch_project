@extends('layouts.home_layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products | RedStore</title>
    <style>
        /* Cart Items */
            .cart-page{
                margin: 80px auto;
            }
            table{
                width: 100%;
                border-collapse: collapse;
            }
            .cart-info{
                display: flex;
                flex-wrap: wrap;
            }
            th{
                text-align: left;
                padding: 5px;
                color: #fff;
                background: #ff523b;
                font-weight: normal;
            }
            td{
                padding: 10px 5px;
            }
            td input{
                width: 40px;
                height: 30px;
                padding: 5px;
            }
            td a{
                color: #ff523b;
                font-size: 12px;
            }
            td img{
                width: 80px;
                height: 80px;
                margin-right: 10px;
            }
            .total-price{
                display: flex;
                justify-content: flex-end;
            }
            .total-price table{
                border-top: 3px solid #ff523b;
                width: 100%;
                max-width: 400px;
            }
            td:last-child{
                text-align: right;
            }
            th:last-child{
                text-align: right;
            }
    </style>
</head>

<body>
    
    <!-- Cart items details -->
    <div class="container cart-page">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            @foreach ($carts as $cart)
                
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="{{ asset($cart->options['image'])}}">
                        <div>
                            <p>{{$cart->name}}</p>
                            <small>Price: {{$cart->price}}</small>
                            <br>
                            <a href="{{url('/remove-item/'.$cart->rowId)}}">Remove</a>
                        </div>
                    </div>
                </td>
                <td>{{$cart->qty}}</td>
                <td>{{$cart->options['total']}}</td>
            </tr>
            @endforeach
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>{{$subTotal}}</td>
                </tr>
                <tr>
                    <td><button class="btn btn-success">Checkout</button></td>
                </tr>
            </table>
        </div>
    </div>

</body>

</html>

@endsection