<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function adminAbout(){
        return view('admin.about') ;
    }
    public function adminService(){
        return view('admin.service') ;
    }
    public function adminProduct(){
        return view('admin.product') ;
    }


    public function clientAbout(){
        return view('client.about') ;
    }
    public function clientService(){
        return view('client.service') ;
    }
    public function clientProduct(){
        return view('client.product') ;
    }

    
}
