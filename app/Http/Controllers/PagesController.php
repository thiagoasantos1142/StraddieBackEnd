<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function profile()
    {
        return view('pages.profile');
    }

    public function notify_list()
    {
        return view('pages.notify-list');
    }

    public function email_inbox()
    {
        return view('pages.email-inbox');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function terms()
    {
        return view('pages.terms');
    }

    public function invoice()
    {
        return view('pages.invoice');
    }

    public function pricing()
    {
        return view('pages.pricing');
    }

    public function settings()
    {
        return view('pages.settings');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function blog_details()
    {
        return view('pages.blog-details');
    }

    public function blog_post()
    {
        return view('pages.blog-post');
    }

    public function emptypage()
    {
        return view('pages.emptypage');
    }

    public function file_manager()
    {
        return view('pages.file-manager');
    }

    public function filemanager_list()
    {
        return view('pages.filemanager-list');
    }

    public function shop()
    {
        return view('pages.shop');
    }

    public function shop_description()
    {
        return view('pages.shop-description');
    }

    public function cart()
    {
        return view('pages.cart');
    }

    public function add_product()
    {
        return view('pages.add-product');
    }

    public function wishlist()
    {
        return view('pages.wishlist');
    }

    public function checkout()
    {
        return view('pages.checkout');
    }

}
