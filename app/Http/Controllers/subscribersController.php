<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class subscribersController extends Controller
{
  public function subscribers(Request $cont){
  	$cont->validate([
  		'email'=>'required',
  	]);

  	$query=DB::table('subscribers')->insert([
  		'email'=>$cont->input('email')
  	]);

 Session::flash('submsg', 'Subcribed Successfully');
 return redirect()->back(); 
  }
}
