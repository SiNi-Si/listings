<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\WebHost;
use App\Models\Company;
use App\Models\Trade;

class WebsiteController extends Controller{

    public function index(){
        $Company = 'Tec-Nut';
        $WebHosts = WebHost::with('Company')->all();
        //dd($WebHosts);
        return view('welcome', compact('Company', 'WebHosts')); 
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