<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Brand;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', [
            'products' => Product::paginate(2)
        ]);
        return redirect('#AllProducts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createproduct', [
            'brands' => Brand::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $this->validate($request, [
            'product_name' => 'required|string|max:155',
            'category' => 'required|string|max:155',
            'image' => 'required|image',
            'price' => 'required|string|max:155',
            'stock' => 'required|integer'
        ]);

        Product::create([
            'product_name' => $request->name,
            'category' => $request->category,
            'image' => $request->file('image')->store('images', 'public'),
            'price' => $request->price,
            'stock' => $request->stock,
            'brand_id' => $request->brand_id
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('showproduct', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('updateproduct', [
            'product'  => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        if ($request->file('image')) {
            unlink('storage/' . $product->image);
            $product->update([
                'product_name' => $request->name,
                'category' => $request->category,
                'price' => $request->price,
                'image' => $request->file('image')->store('images', 'public'),
            ]);
        } else {
            $product->update([
                'product_name' => $request->name,
                'category' => $request->category,
                'price' => $request->price,
            ]);
        }

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/');
    }
}
