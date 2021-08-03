<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_infos;
use App\Models\Phones;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index(){
        $user_datas = User_infos::all();
        return view('user.index', compact('user_datas'));
    }

    public function create(){
        return view('user.create');
    }
    public function store(Request $request){
        $validator = [
            'user_name'=> 'required',
            'city'=> 'required',
            'mobile'=> 'required'
        ];
        $this->validate($request, $validator);

        $user_data = User_infos::create($request->all());

        $user_data->phones()->create([
            'mobile' => $request->mobile
        ]);

        return Redirect()->route('user-index')->with('success', 'Uploaded Successfully');
    }

    public function edit($user_id){
        $user = User_infos::findOrFail($user_id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request){
        $user_id = $request->id;
        User_infos::findOrFail($user_id)->update([
            'user_name'=>$request->user_name,
            'city'=>$request->city,
        ]);
       Phones::findOrFail($user_id)->update([
           'mobile'=>$request->mobile
        ]);

        return Redirect()->route('user-index')->with('success', 'Updated Successfully');
    }

    public function delete($user_id){
        User_infos::findOrFail($user_id)->delete();
        return Redirect()->route('user-index')->with('destroy', "Deleted Successfully");
    }
    public function show($user_id){
        $user = User_infos::findOrFail($user_id);
        return view('user.show', compact('user'));
    }

}
