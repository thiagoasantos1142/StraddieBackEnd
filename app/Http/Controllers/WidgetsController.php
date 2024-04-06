<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WidgetsController extends Controller
{
    public function widgets()
    {
        $user = \Auth::user();        
        
        return view('pages.widgets', ['user' => $user]);
        
    }

}
