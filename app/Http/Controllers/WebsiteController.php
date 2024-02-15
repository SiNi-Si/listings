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
        $Businesses = Company::where('id', '>', 2)->get();
        //$WebHosts = WebHost::where('domain2', 'NOT LIKE', '%' . '.demo-tec-nut.com' . '%')->get();
        foreach ($Businesses as $Biz) {
            $WebHosts = WebHost::where('company_id', $Biz->id)->first();
            //dd($WebHosts->domain2);
            if($WebHosts != NULL)
                $Biz->link = $WebHosts->domain2;
            else
                $Biz->link = 'NONE';
        }
        //dd($WebHosts);
        return view('welcome', compact('Company', 'Businesses')); 
    }

    public function sitemap(){
        $WebSite = 'https:///';
        return response()->view('sitemap_single', compact('WebSite'))->header('Content-Type', 'text/xml');
    }

}