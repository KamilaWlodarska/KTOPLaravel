<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homes;
use App\Models\UsersHomes;

class HomesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myHomes = Homes::all();
        return view('homes.list', ['homes' => $myHomes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homes.add');
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
            'home_name' => 'required',
        ]);

        if ($validated) {
            $mod_home = new Homes();
            $mod_home->home_name = $request->home_name;
            $mod_home->save();
            return redirect('/homes/list');
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
        $myHome = Homes::find($id);

        if ($myHome == null) {
            $error_message = "Home id=$id not find";
            return view('homes.message', ['message'=>$error_message, 'type_of_message'=>'Error']);
        }

        if ($myHome->count() > 0) return view('homes.show', ['homes' => $myHome,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myHome = Homes::find($id);

        if ($myHome == null) {
            $error_message = "Home id = ".$id." not find";
            return view('homes.message', ['message'=>$error_message, 'type_of_message'=>'Error']);
        }

        if($myHome->count() > 0) return view('homes.edit', ['homes' => $myHome,]);
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
            'home_name' => 'required',
        ]);

        if ($validated) {
            $mod_home = Homes::find($id);

            if ($mod_home != null) {
                $mod_home->home_name = $request->home_name;
                $mod_home->save();
                return redirect('homes/list');
            }
            else {
                $error_message = "Home id=$id not find";
                return view('homes.message', ['message'=>$error_message,'type_of_message'=>'Error']);
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
        $mod_home = Homes::find($id);

        if ($mod_home != null) {
            $mod_home->delete();
            return redirect('/homes/list');
        }
        else {
            $error_message = "Home id=$id not find";
                return view('homes.message', ['message'=>$error_message,'type_of_message'=>'Error']);
        }
    }

    public function usersList($id) {
        $usersHomes = UsersHomes::all()->where('home_id',$id);
        $homes = Homes::find($id);

        if($usersHomes != null)
            
            return view('homes.userslist',['usersHomes'=>$usersHomes, 'homes'=>$homes]);
        else{
            $msg = "Homes id = $id not find";
            return view('homes.message',['message'=>$msg, 'type_of_message'=>'Error']);
        }
    }
}
