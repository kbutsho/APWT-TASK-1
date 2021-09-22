<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductCOntroller extends Controller
{
    public function show(){
        $items = array('chair','table','laptop','mobile','desktop');
        return view('pages.products', ['products'=>$items]);
    }
}
