<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WebsiteController extends Controller{

    public function index(){
        $Company = 'Tec-Nut';
        return view('welcome', compact('Company')); 
    }

    public function form(Request $request){
        dd($request);

        return redirect(url('/User/Settings'));
    }

    public function ajax(Request $request){
        $isAvailable = true; // or false

        echo json_encode(array(
            'valid' => $isAvailable,
        ));
    }

}