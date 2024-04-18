<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function profile()
    {
        $user = \Auth::user(); 
        
        
        return view('pages.profile', ['user' => $user]);
    }

    public function notify_list()
    {
        $user = \Auth::user();
        
        
        return view('pages.notify-list', ['user' => $user]);
    }

    public function email_inbox()
    {
        $user = \Auth::user();
        
        
        return view('pages.email-inbox', ['user' => $user]);
    }

    public function gallery()
    {
        $user = \Auth::user();
        
        
        return view('pages.gallery', ['user' => $user]);
    }

    public function about()
    {
        $user = \Auth::user();
        
        
        return view('pages.about', ['user' => $user]);
    }

    public function faq()
    {
        $user = \Auth::user();
        
        
        return view('pages.faq', ['user' => $user]);
    }

    public function terms()
    {
        $user = \Auth::user();
        
        
        return view('pages.terms', ['user' => $user]);
    }

    public function invoice()
    {
        $user = \Auth::user();
        
        
        return view('pages.invoice', ['user' => $user]);
    }

    public function pricing()
    {
        $user = \Auth::user();
        
        
        return view('pages.pricing', ['user' => $user]);
    }

    public function settings()
    {
        $user = \Auth::user();
        
        
        return view('pages.settings', ['user' => $user]);
    }

    public function blog()
    {
        $user = \Auth::user();
        
        
        return view('pages.blog', ['user' => $user]);
    }

    public function blog_details()
    {
        $user = \Auth::user();
        
        
        return view('pages.blog-details', ['user' => $user]);
    }

    public function blog_post()
    {
        $user = \Auth::user();
        
        
        return view('pages.blog-post', ['user' => $user]);
    }

    public function emptypage()
    {
        $user = \Auth::user();
        
        
        return view('pages.emptypage', ['user' => $user]);
    }

    public function file_manager()
    {
        $user = \Auth::user();
        
        
        return view('pages.file-manager', ['user' => $user]);
    }

    public function filemanager_list()
    {
        $user = \Auth::user();
        
        
        return view('pages.filemanager-list', ['user' => $user]);
    }

    public function shop()
    {
        $user = \Auth::user();
        
        
        return view('pages.shop', ['user' => $user]);
    }

    public function shop_description()
    {
        $user = \Auth::user();
        
        
        return view('pages.shop-description', ['user' => $user]);
    }

    public function cart()
    {
        $user = \Auth::user();
        
        
        return view('pages.cart', ['user' => $user]);
    }

    public function add_product()
    {
        $user = \Auth::user();
        
        
        return view('pages.add-product', ['user' => $user]);
    }

    public function wishlist()
    {
        $user = \Auth::user();
        
        
        return view('pages.wishlist', ['user' => $user]);
    }

    public function checkout()
    {
        $user = \Auth::user();
        
        
        return view('pages.checkout', ['user' => $user]);
    }

}
