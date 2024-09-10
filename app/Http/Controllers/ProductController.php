<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catall = category::all();
        //
        return view('addproduct',['category' => $catall]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $product = new product;

        $product->p_name = $request->name;
        $product->	p_description = $request->description;
        $product->	p_price = $request->price;
        $product->	cat_id = $request->type;

        $product->save();

        return to_route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $productes = product::findOrFail($id);
        // dd($productes);
        return view('editproduct', ['productes' => $productes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $productes)
    {
        //
        $productes =[
            'p_name' => $request->name,
            'p_description' => $request->description,
            'p_price' => $request->price,
            'cat_type'=> $request->type
        ];

         dd($productes);

         $prooductes->save();

         return to_route('product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}
