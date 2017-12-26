<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	return view('page/trangchu');
    }

    public function getCategory(){
    	return view('page.loai_san_pham');
    }

     public function getDetailProduct(){
    	return view('page.chi_tiet_san_pham');
    }

     public function getContact(){
    	return view('page.lien_he');
    }

    
}
