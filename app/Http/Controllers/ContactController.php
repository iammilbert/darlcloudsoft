<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class contactController extends Controller
{
  public function userscontact(Request $cont)
  {
  	  //validation
    $cont->validate([
        'email'=>'required',
        'subject'=>'required',
        'name'=>'required',
        'message'=>'required',
    ]);

    $query = DB:: table('contact')->insert([
    	'email'=>$cont->input('email'),
       'timeContact'=>$cont->input('timeContact'),
       'dateContact'=>$cont->input('dateContact'),
       'subject'=>$cont->input('subject'),
       'name'=>$cont->input('name'),
       'message'=>$cont->input('message')

    ]);

     Session::flash('msg', 'Message sent Successfully');
 return redirect()->back(); 
  }

}
