<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class indexController extends Controller
{
    public function insert(){
		return view('/insert');
	}
	 public function first(){
		return view('/first');
	}
	public function edit($id){
        $plan = User::find($id);
        return view('/edit')->with('plan',$plan);
    } 
	public function do_edit(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
		$image = $request->input('image');


        $UserModel = User::where('id',$id)->first();

         $UserModel->name =  $name;
         $UserModel->email =  $email;
         $UserModel->password =  $password;
         $UserModel->image =  $image;		 
         
           $UserModel->save();

        return back()->with('msg', 'Usergg updated successfully!');
    }
	
	public function show(){
         $plans=User::all();
		  return view('show')->with('plans',$plans);
		 }
		 
		public function delete_plan(Request $request){
		$plan_id = $request->input('plan_id');
		User::where('id', $plan_id)->delete();
			return redirect('/show');
		}

	public function do_insert(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
		$image = $request->input('image');
	

        $UserModel = new User;
         $UserModel->name =  $name;
         $UserModel->email =  $email;
         $UserModel->password =  $password;
         $UserModel->image =  $image;		 
         
           $UserModel->save();
		  
           return view('/insert');

    }
 
}
