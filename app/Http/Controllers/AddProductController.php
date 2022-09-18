<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
    public function addProduct()
    {
        $products = Product::all();
        return view('admin.products.add_product', compact('products'));
    }
    public function addToCart(Request $request)
    {
        $id = $request->pid;
        $name = $request->name;
        $quantity = $request->quantity;
        $size = $request->size;
        $price = $request->price;
        $image = Product::find($id);
        $cart = Cart::content()->where('id', $id)->first();

        if (isset($cart) && $cart != null) {
            $quantity = ((int)$quantity + (int)$cart->qty);
            $total = ((int)$quantity * (int)$price);
            Cart::update($cart->rowId, ['qty' => $quantity, 'options' => ['size' => $size, 'image' => $image, 'total' => $total]]);
        } else {
            $total = ((int)$quantity * (int)$price);
            Cart::add($id, $name, $quantity, $price, ['size' => $size, 'image' => $image, 'total' => $total]);
        }
        return redirect('/products')->with('success', 'Product Added to Your Cart!');
    }
    public function viewCart()
    {
        $carts = Cart::content();
        $subTotal = Cart::subtotal();

        return view('admin.products.cart', compact('carts', 'subTotal'));
    }
    public function removeItem($rowId)
    {
        Cart::remove($rowId);
        return redirect('/cart')->with('success', 'Product Remove Success');
    }
    public function home()
    {
        $latest_products = Product::orderBy('price', 'desc')->limit(4)->get();

        return view('home', compact('latest_products'));
    }
}