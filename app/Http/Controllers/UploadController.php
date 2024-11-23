<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(){
        return view("upload");

    }

    public function file(Request $request){
        // echo "<pre>";
        // print_r($request->all());

        $filename = time()."tp.". $request->file('images')->getClientOriginalExtension();

        echo $request->file('images')->storeAs('uploads',$filename);

        return redirect('customer/view');

    }
}
