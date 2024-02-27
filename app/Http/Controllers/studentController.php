<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\order;

class studentController extends Controller
{
         public function applicationForm(Request $cont)
  {
  	  //validation
    $cont->validate([
        'categories'=>'required',
        'courseId'=>'required',
        'additionalInfo'=>'required',
        'session'=>'required',
    ]);

    $student = new order();
    $student->categories = $cont->categories;
    $student->courseId = $cont->courseId;
    $student->studentId = $cont->studentId;
    $student->additionalInfo = $cont->additionalInfo;
    $student->session = $cont->session;
    $res = $student->save();

    if ($res) {
        Session::flash('success', 'Application submitted Successfully'); 
        return redirect()->back(); 
      
    }else{
      Session::flash('fail', 'Something went Wrong'); 
        return redirect()->back(); 
    } 
  }

}
