<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Provider;
use App\Warehouse;
use App\category_product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::paginate(6);
        $category = Category::all();
        $provider = Provider::all();
        return view("product", compact("product", "category",'provider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::paginate(6);
        return view("producttable", compact("product"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = new Product;
        $product->description = $request->description;
        $product->providers_id = $request->providers_id;
       $product->save();
        return $this->create();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $product = Product::find($request->id);
        return $product;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $product = Product::find($request->id);
        $product->description = $request->description;
        $product->providers_id = $request->providers_id;
        $product->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Product::find($request->id)->delete();
        return $this->create();
    }




    public function category_productStore(Request $request){
        $category_product = new category_product();
        $category_product->category_id = $request->category_id;
        $category_product->product_id = $request->product_id;
        $category_product->save();
        $this->create();
       return  $this->category_productTable($request->product_id);
    }
    public function category_productDestroy(Request $request){
        category_product::find($request->id)->delete();
      return  $this->category_productTable($request->product_id);

    }
    public function category_productTable($product_id){
        $product = Product::find($product_id);
       return view("category_producttable", compact("product"));
    }
    public function category_productEdit(Request $request){
       $product = Product::find($request->id);
       return view("category_producttable", compact("product"));
    }
}
