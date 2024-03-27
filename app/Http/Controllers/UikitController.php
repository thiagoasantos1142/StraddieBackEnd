<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UikitController extends Controller
{
    
    public function alerts()
    {
        return view('pages.alerts');
    }

    public function buttons()
    {
        return view('pages.buttons');
    }

    public function colors()
    {
        return view('pages.colors');
    }

    public function avatars()
    {
        return view('pages.avatars');
    }

    public function dropdown()
    {
        return view('pages.dropdown');
    }

    public function listgroup()
    {
        return view('pages.listgroup');
    }

    public function tags()
    {
        return view('pages.tags');
    }

    public function pagination()
    {
        return view('pages.pagination');
    }

    public function navigation()
    {
        return view('pages.navigation');
    }

    public function typography()
    {
        return view('pages.typography');
    }

    public function breadcrumbs()
    {
        return view('pages.breadcrumbs');
    }

    public function badge()
    {
        return view('pages.badge');
    }

    public function offcanvas()
    {
        return view('pages.offcanvas');
    }

    public function toast()
    {
        return view('pages.toast');
    }

    public function scrollspy()
    {
        return view('pages.scrollspy');
    }

    public function mediaobject()
    {
        return view('pages.mediaobject');
    }

    public function accordion()
    {
        return view('pages.accordion');
    }

    public function tabs()
    {
        return view('pages.tabs');
    }

    public function modal()
    {
        return view('pages.modal');
    }

    public function tooltipandpopover()
    {
        return view('pages.tooltipandpopover');
    }

    public function progress()
    {
        return view('pages.progress');
    }

    public function carousel()
    {
        return view('pages.carousel');
    }

}
