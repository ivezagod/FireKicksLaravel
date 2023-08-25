<?php

namespace App\Http\Controllers;

use App\Models\Number;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index',[
           'sneakers'=>Product::with('brand')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create',Product::class);

        return view('product.create',[
            'products'=>Product::paginate(3)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data =$request->validate([
           'title'=>'required|string',
           'description'=>'required|string',
           'price'=>'required|integer',
           'num_color'=>'required|integer',
           'gender'=>'required|string|in:Male,Female,Kids',
           'image'=>'required|image|mimes:jpeg,jpg,png,svg',
           'brand_id'=>'exists:brands,id'
        ]);

        $data['image'] =  $request->file('image')->store('image','public');

        $numbers = Number::all()->pluck('id')->toArray();
        $product = Product::create($data);

        $product->numbers()->attach($numbers);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('product.show',[
           'sneaker' => Product::with('brand')->find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product =  Product::find($id);
        $this->authorize('update',$product);

        return view('product.edit',[
           'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'num_color'=>$request->num_color,
            'gender'=>$request->gender,
            'brand_id'=>$request->brand_id,
        ]);

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $product = Product::find($id);
        $this->authorize('update',$product);

        $product->delete();

        return back();
    }
}
