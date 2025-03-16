<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item; 

class TestController extends Controller
{
    public function index()
    {
        $items = Item::all(); 
        return view('test', compact('items')); 
    }
}