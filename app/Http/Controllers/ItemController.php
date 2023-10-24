<?php

namespace App\Http\Controllers;
use App\Models\item;
class ItemController extends Controller
{
    public function index(){
        $Items =item::all();
        return view('CRUD', ['Items' => $Items]);
    }
}
