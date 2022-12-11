<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\Slider;
use App\Models\Product;
use App\Models\News;
use App\Models\Ebrochure;
use App\Models\Ebrochuredata;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class C_HalimSaktiPratama extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sitemapproduct()
    {
        $product = Product::OrderByDesc('created_at')->get();
        return response()->view('sitemap.indexp', ['product' => $product])->header('Content-Type', 'text/xml');
    }

    public function sitemapnews()
    {
        $news = News::OrderByDesc('created_at')->get();
        return response()->view('sitemap.indexn', ['news' => $news])->header('Content-Type', 'text/xml');
    }

    public function search()
    {
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $product = Product::where('product_nama', 'like', "%" . $cari . "%")->get();
            return view('halimsakti.search', compact('product'));
        }
    }

    public function search_en()
    {
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $product = Product::where('product_nama_eng', 'like', "%" . $cari . "%")->get();
            return view('halimsakti.en.search', compact('product'));
        }
    }

    // ### INDONESIA ###

    public function homepage()
    {
        $slider = Slider::all();
        $ebrochure = Ebrochure::all();
        $product = Product::OrderByDesc('created_at')->get();
        $news = News::OrderByDesc('created_at')->get();
        return view('halimsakti.homepage_new', compact('slider', 'ebrochure', 'product', 'news'));
    }

    public function company()
    {
        return view('halimsakti.company');
    }

    public function contact()
    {
        return view('halimsakti.contact');
    }

    public function news()
    {
        $news = News::OrderByDesc('updated_at')->get();
        $news1 = News::first();
        $news2 = News::where('id_news', '3')->get();
        $news3 = News::where('id_news', '2')->get();
        $ebrochure = Ebrochure::all();
        return view('halimsakti.news', compact('news', 'news1', 'news2', 'news3', 'ebrochure'));
    }

    public function newsdetail($news_nama_slug)
    {
        $news = News::where('news_nama_slug', $news_nama_slug)->get();
        $newsall = News::orderBy('updated_at', 'desc')->get();
        return view('halimsakti.detail_news.detail', compact('news', 'newsall'));
    }

    public function product()
    {
        $product = Product::OrderByDesc('created_at')->get();
        return view('halimsakti.product', compact('product'));
    }

    public function productdetail($product_slug)
    {
        $product = Product::where('product_slug', $product_slug)->get();
        $product_all = Product::OrderByDesc('updated_at')->get();
        return view('halimsakti.detail_product.detail', compact('product', 'product_all'));
    }

    // ### ENGLISH ###

    public function homepage_en()
    {
        $slider = Slider::all();
        $ebrochure = Ebrochure::all();
        $product = Product::OrderByDesc('created_at')->get();
        $news = News::OrderByDesc('created_at')->get();
        return view('halimsakti.en.homepage_new', compact('slider', 'ebrochure', 'product', 'news'));
    }

    public function company_en()
    {
        return view('halimsakti.en.company');
    }

    public function contact_en()
    {
        return view('halimsakti.en.contact');
    }

    public function news_en()
    {
        $news = News::OrderByDesc('updated_at')->get();
        $news1 = News::first();
        $news2 = News::where('id_news', '3')->get();
        $news3 = News::where('id_news', '2')->get();
        $ebrochure = Ebrochure::all();
        return view('halimsakti.en.news', compact('news', 'news1', 'news2', 'news3', 'ebrochure'));
    }

    public function newsdetail_en($news_nama_slug)
    {
        $news = News::where('news_nama_eng_slug', $news_nama_slug)->get();
        $newsall = News::orderBy('updated_at', 'desc')->get();
        return view('halimsakti.en.detail_news.detail', compact('news', 'newsall'));
    }

    public function product_en(Request $request)
    {
        $product = Product::OrderByDesc('created_at')->get();
        $reqType = $request->header('accept');



        if ($reqType == 'application/json') {
            return response()->json($product);
        }


        return view('halimsakti.en.product', compact('product'));
    }

    public function productdetail_en($product_slug)
    {
        $product = Product::where('product_slug', $product_slug)->get();
        $product_all = Product::OrderByDesc('updated_at')->get();
        return view('halimsakti.en.detail_product.detail', compact('product', 'product_all'));
    }

    public function contactsave(request $request)
    {
        $this->contactPost('id', $request);
    }

    // post contact
    public function contactPost($language, Request $request)
    {
        $text = 'Terima kasih atas pesan anda, kami akan membalas pesan anda 3 x 24 jam.';
        if ($language == 'en') {
            $text = 'Thank you for your message, we will reply to your message 3 x 24 hours.';
        }

        $request->validate([

            'name' => 'required',

            'email' => 'required|email',

            'phone' => 'required',

            'messagez' => 'required',

            'g-recaptcha-response' => 'required|captcha'
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->messagez,
        ]);

        $input = $request->all();

        //  Send mail to admin
        Mail::send('emails/halimsakti', array(

            'name' => $input['name'],

            'email' => $input['email'],

            'phone' => $input['phone'],

            'messagez' => $input['messagez'],

        ), function ($message) use ($request) {

            $message->from($request->email);

            $message->to("umar.dev500@gmail.com", "Halim Sakti Website")->subject($request->get('name'));
        });



        return redirect()->back()->with(['success' => $text]);
    }

    public function contactsaveeng(request $request)
    {
        $this->contactPost('en', $request);
    }

    public function ebrochuredatasave(request $request)
    {
        Ebrochuredata::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $ebrochure = Ebrochure::first();

        return redirect('image/pdfebrochure/' . $ebrochure->link);
    }
}
