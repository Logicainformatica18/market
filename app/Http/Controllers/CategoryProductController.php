<?php

namespace App\Http\Controllers;

use App\category_product;
use App\Product;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_product=category_product::where('product_id',"like",'1');
        return view('category_producttable',compact('category_product'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category_product  $category_product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
     //   $show="%".$request["show"]."%";
        return "hola";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category_product  $category_product
     * @return \Illuminate\Http\Response
     */
    public function edit(category_product $category_product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category_product  $category_product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category_product $category_product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category_product  $category_product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        category_product::find($request->id)->delete();

    }
}
