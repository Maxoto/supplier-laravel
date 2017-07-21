<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Suppliermodel;

class Supplier_controller extends Controller
{

    public function supplier(){

    	$supp=Suppliermodel::all();
    	return view('supplier',compact('supp'));

    }



}
