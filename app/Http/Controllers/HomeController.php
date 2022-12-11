<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Slider;
use App\Models\Product;
use App\Models\News;
use App\Models\Ebrochure;
use App\Models\Ebrochuredata;
use App\Models\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slider = Slider::count();
        $product = Product::count();
        $news = News::count();
        $ebrochure = Ebrochure::count();
        $ebrochuredata = Ebrochuredata::count();
        $contact = Contact::count();
        return view('home', compact('slider', 'product', 'news', 'ebrochure', 'ebrochuredata', 'contact'));
    }
}
