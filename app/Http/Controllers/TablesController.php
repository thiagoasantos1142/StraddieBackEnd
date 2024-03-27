<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablesController extends Controller
{
    public function tables()
    {
        return view('pages.tables');
    }

    public function datatable()
    {
        return view('pages.datatable');
    }

    public function grid_tables()
    {
        return view('pages.grid-tables');
    }

}
