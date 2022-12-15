<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function index()
    {
        $products=Product::orderBy('id', 'desc')->get();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function show($id)
    {
        $products = Product::find($id);
        return view('product.edit', compact('product'));
    }

    public function edit($id)
    {
        $products = Product::find($id);
        return view('product.edit', compact('product'));
    }

    public function store(Request $request)
    {
        $imgName = $request->img_path->getClientOriginalName() . '-' . time() . '.' . $request->img_path->extension();
        $request->img_path->move(public_path('image'), $imgName);

        Product::create([
            'nama' => $request -> name,
            'harga' => $request -> price,
            'gambar' => $imgName,
        ]);

        return redirect('/product');
    }

    public function update(Request $request, $id)
    {
        $product = product::find($id);

        $imgName = $product->img_path;
        if ($request->img_path) {
            $imgName = $request->img_path->getClientOriginalName() . '.' . time() . '.' . $request->img_path->extension();
            $request->img_path->move(public_path('image'), $imgName);
        }

        Product::find($id)->update([
            'nama'=> $request -> name,
            'harga' => $request -> price,
            'gambar' => $imgName,
        ]);
            
        return redirect('/product');
    }

    public function destroy($id)
    {

        Product::find($id)->delete();
        return redirect('/product');
    }
}
