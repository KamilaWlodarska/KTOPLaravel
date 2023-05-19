<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\ProductsCategory;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myProducts = Products::all();
        return view('products.list', ['products' => $myProducts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.add');
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
            'pcat_id' => 'required',
            'purchase_date' => 'required',
            'deadline' => 'required',
        ]);

        if ($validated) {
            $mod_p = new Products();
            $mod_p->pcat_id = $request->pcat_id;
            $mod_p->purchase_date = $request->purchase_date;
            $mod_p->open_date = $request->open_date;
            $mod_p->deadline = $request->deadline;
            $mod_p->save();
            return redirect('/products/list');
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
        $myProduct = Products::find($id);

        if ($myProduct == null) {
            $error_message = "Product id=$id not find";
            return view('products.message', ['message'=>$error_message, 'type_of_message'=>'Error']);
        }

        if ($myProduct->count() > 0) return view('products.show', ['products' => $myProduct,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myProduct = Products::find($id);

        if ($myProduct == null) {
            $error_message = "Product id = ".$id." not find";
            return view('products.message', ['message'=>$error_message, 'type_of_message'=>'Error']);
        }

        if($myProduct->count() > 0) return view('products.edit', ['products' => $myProduct,]);
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
            'pcat_id' => 'required',
            'purchase_date' => 'required',
            'deadline' => 'required',
        ]);

        if ($validated) {
            $mod_p = Products::find($id);

            if ($mod_p != null) {
                $mod_p->pcat_id = $request->pcat_id;
                $mod_p->purchase_date = $request->purchase_date;
                $mod_p->open_date = $request->open_date;
                $mod_p->deadline = $request->deadline;
                $mod_p->save();
                return redirect('products/list');
            }
            else {
                $error_message = "Product id=$id not find";
                return view('products.message', ['message'=>$error_message,'type_of_message'=>'Error']);
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
        $mod_p = Products::find($id);

        if ($mod_p != null) {
            $mod_p->delete();
            return redirect('/products/list');
        }
        else {
            $error_message = "Product id=$id not find";
                return view('products.message', ['message'=>$error_message,'type_of_message'=>'Error']);
        }
    }

    public function pcatList($id) {
        $pcat = ProductsCategory::all()->where('pcat_id',$id);
        $products = Products::find($id);

        if($pcat != null)            
            return view('products.list',['pcat'=>$pcat, 'products'=>$products]);
        else{
            $msg = "Product id = $id not find";
            return view('products.message',['message'=>$msg, 'type_of_message'=>'Error']);
        }
    }
}
