<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    //
     public function createpromo()
    {
        return view('components.create_promo');
    }
    //
         public function all_promo()
    {
        return view('components.all_promo');
    }
    //
          public function detail_promo()
    {
        return view('components.detail_promo');
    }

}
