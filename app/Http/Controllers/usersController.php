<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Hash;

class usersController extends Controller
{
     public function usersignup(Request $cont)
  {
  	  //validation
    $cont->validate([
        'email'=>'required|email|unique:users',
        'password'=>'required|min:4|max:8',
        'cpassword'=>'required',
        'name'=>'required',
        'address'=>'required',
        'tel' => 'required',
    ]);

    $user = new User();
    $user->email = $cont->email;
    $user->password = Hash::make($cont->password);
    $user->name = $cont->name;
    $user->address = $cont->address;
    $user->tel = $cont->tel;
    $res = $user->save();

    if ($res) {
        Session::flash('success', 'Account Created Successfully'); 
        return redirect()->back(); 
      
    }else{
      Session::flash('fail', 'Something went Wrong'); 
        return redirect()->back(); 
    } 
  }


  // Login

  public function loginUser(Request $request){

          //validation
    $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:4|max:8'
    ]);

    $user = User::where('email','=',$request->email)->first();
    if($user){
      if(Hash::check($request->password, $user->password)){
        $request->session()->put('loginId', $user->id);
        return redirect('student-dashboard');
      }else{
        Session::flash('errm', 'Password Incorrect, try again'); 
        return redirect()->back(); 
      }
    }else{
      Session::flash('fail', 'This Email is not registered!'); 
        return redirect()->back(); 
    }
  }
// logout
  public function dashboard(){
    $data = array();
    if(Session::has('loginId')){
      $data = User::where('id', '=', Session::get('longinId'))->first();
    }
    return view('student-dashboard', compact('data'));
  }

  public function logout(){
    if(Session::has('loginId')){
      Session::pull('loginId');
      return redirect('/');
    }
  }
}
