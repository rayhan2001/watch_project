<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(4);
        return view('watch', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->p_name;
        $product->price = $request->p_price;
        $product->amount = $request->p_amount;
        $product->is_active = 1;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
            $filePath = 'upload/' . 'product/' . $fileName;
            $image->storeAs('public', $filePath);
            $product->image = $filePath;
        }
        $product->save();
        return back()->with('success', 'Prosuct Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $related_products = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->limit(3)->get();
        return view('admin.products.product_details', compact('product', 'related_products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}