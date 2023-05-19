<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsCategory;

class ProductsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myPcat = ProductsCategory::all();
        return view('products_category.list', ['products_category' => $myPcat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products_category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pcat_name' => 'required',
            'type' => 'required',
            'home_id' => 'required',
        ]);

        if ($validated) {
            $mod_pcat = new ProductsCategory();
            $mod_pcat->pcat_name = $request->pcat_name;
            $mod_pcat->type = $request->type;
            $mod_pcat->home_id = $request->home_id;
            $mod_pcat->save();
            return redirect('/products_category/list');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $myPCat = ProductsCategory::find($id);

        if ($myPCat == null) {
            $error_message = "Product category id=$id not find";
            return view('products_category.message', ['message'=>$error_message, 'type_of_message'=>'Error']);
        }

        if ($myPCat->count() > 0) return view('products_category.show', ['products_category' => $myPCat,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myPCat = ProductsCategory::find($id);

        if ($myPCat == null) {
            $error_message = "Product category id = ".$id." not find";
            return view('products_category.message', ['message'=>$error_message, 'type_of_message'=>'Error']);
        }

        if($myPCat->count() > 0) return view('products_category.edit', ['products_category' => $myPCat,]);
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
        $validated = $request->validate([
            'pcat_name' => 'required',
            'type' => 'required',
            'home_id' => 'required',
        ]);

        if ($validated) {
            $mod_pcat = ProductsCategory::find($id);

            if ($mod_pcat != null) {
                $mod_pcat->pcat_name = $request->pcat_name;
                $mod_pcat->type = $request->type;
                $mod_pcat->home_id = $request->home_id;
                $mod_pcat->save();
                return redirect('products_category/list');
            }
            else {
                $error_message = "Product category id=$id not find";
                return view('products_category.message', ['message'=>$error_message,'type_of_message'=>'Error']);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mod_pcat = ProductsCategory::find($id);

        if ($mod_pcat != null) {
            $mod_pcat->delete();
            return redirect('/products_category/list');
        }
        else {
            $error_message = "Product category id=$id not find";
                return view('products_category.message', ['message'=>$error_message,'type_of_message'=>'Error']);
        }
    }
}
