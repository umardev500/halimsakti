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


class C_HalimSaktiPratamaAdmin extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $slider = Slider::count();
        $product = Product::count();
        $news = News::count();
        $ebrochure = Ebrochure::count();
        $ebrochuredata = Ebrochuredata::count();
        $contact = Contact::count();
        return view('halimsaktiadmin.dashboard', compact('slider', 'product', 'news', 'ebrochure', 'ebrochuredata', 'contact'));
    }

    // SLIDER ##

    public function slider()
    {
        $slide = Slider::OrderByDesc('updated_at')->get();
        return view('halimsaktiadmin.slider.slider', compact('slide'));
    }

    public function slider_add()
    {
        return view('halimsaktiadmin.slider.slider_add');
    }

    public function slider_store(request $request)
    {
        $file = $request->file('image');
        $images = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'image/slider';
        $file->move($tujuan_upload,$images);

        Slider::create([
            'image' => $images,
            'judul' => $request->judul,
            'judul_eng' => $request->judul_eng,
            'judul_slug' => Str::slug($request->judul, '-'),
            'judul_slug_eng' => Str::slug($request->judul_eng, '-'),
            'description_sub' => $request->description_sub,
            'description_sub_eng' => $request->description_sub_eng,
            'description' => $request->description,
            'description_eng' => $request->description_eng,
        ]);
        return redirect('/CMS/slider');
    }

    public function slider_edit($id)
    {
        $slider = Slider::where('id_slide', $id)->get();
        return view('halimsaktiadmin.slider.slider_edit', compact('slider'));
    }

    public function slider_update(request $request)
    {
        if($request->file('image') == null){
            $images = $request->images;
        }
        else{
            $file = $request->file('image');
            $images = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'image/slider';
            $file->move($tujuan_upload,$images);
        }
        Slider::where('id_slide', $request->id_slide)->update([
            'image' => $images,
            'judul' => $request->judul,
            'judul_eng' => $request->judul_eng,
            'judul_slug' => Str::slug($request->judul, '-'),
            'judul_slug_eng' => Str::slug($request->judul_eng, '-'),
            'description_sub' => $request->description_sub,
            'description_sub_eng' => $request->description_sub_eng,
            'description' => $request->description,
            'description_eng' => $request->description_eng,
        ]);

        return redirect('/CMS/slider');
    }

    public function slider_delete($id)
    {
        Slider::where('id_slide', $id)->delete();
        return redirect('/CMS/slider');
    }

    // PRODUCT ##

    public function product()
    {
        $product = Product::OrderByDesc('updated_at')->get();
        return view('halimsaktiadmin.product.product', compact('product'));
    }

    public function product_add()
    {
        return view('halimsaktiadmin.product.product_add');
    }

    public function product_store(request $request)
    {
        $file = $request->file('image');
        $images = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'image/product';
        $file->move($tujuan_upload,$images);

        Product::create([
            'image' => $images,
            'product_nama' => $request->product_nama,
            'product_nama_eng' => $request->product_nama_eng,
            'product_slug' => Str::slug($request->product_nama, '-'),
            'description_sub' => $request->description_sub,
            'description_sub_eng' => $request->description_sub_eng,
            'description' => $request->description,
            'description_eng' => $request->description_eng,
        ]);
        return redirect('/CMS/product');
    }

    public function product_edit($id)
    {
        $product = Product::where('id_product', $id)->get();
        return view('halimsaktiadmin.product.product_edit', compact('product'));
    }

    public function product_update(request $request)
    {
        if($request->file('image') == null){
            $images = $request->images;
        }
        else{
            $file = $request->file('image');

            $images = time()."_".$file->getClientOriginalName();
                // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'image/product';
            $file->move($tujuan_upload,$images);
        }
        Product::where('id_product', $request->id_product)->update([
            'image' => $images,
            'product_nama' => $request->product_nama,
            'product_nama_eng' => $request->product_nama_eng,
            'product_slug' => Str::slug($request->product_nama, '-'),
            'description_sub' => $request->description_sub,
            'description_sub_eng' => $request->description_sub_eng,
            'description' => $request->description,
            'description_eng' => $request->description_eng,
        ]);

        return redirect('/CMS/product');
    }

    public function product_delete($id)
    {
        Product::where('id_product', $id)->delete();
        return redirect('/CMS/product');
    }

    // NEWS ##

    public function news()
    {
        $news = News::OrderByDesc('updated_at')->get();
        return view('halimsaktiadmin.news.news', compact('news'));
    }

    public function news_add()
    {
        return view('halimsaktiadmin.news.news_add');
    }

    public function news_store(request $request)
    {
        $file = $request->file('image');
        $images = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'image/news';
        $file->move($tujuan_upload,$images);

        News::create([
            'image' => $images,
            'news_nama' => $request->news_nama,
            'news_nama_slug' => Str::slug($request->news_nama, '-'),
            'news_nama_eng' => $request->news_nama_eng,
            'news_nama_eng_slug' => Str::slug($request->news_nama_eng, '-'),
            'description' => $request->description,
            'description_eng' => $request->description_eng,
            'description_sub' => $request->description_sub,
            'description_sub_eng' => $request->description_sub_eng,
        ]);
        return redirect('/CMS/news');
    }

    public function news_edit($id)
    {
        $news = News::where('id_news', $id)->get();
        return view('halimsaktiadmin.news.news_edit', compact('news'));
    }

    public function news_update(request $request)
    {
        if($request->file('image') == null){
            $images = $request->images;
        }
        else{
            $file = $request->file('image');

            $images = time()."_".$file->getClientOriginalName();
                // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'image/news';
            $file->move($tujuan_upload,$images);
        }
        News::where('id_news', $request->id_news)->update([
            'image' => $images,
            'news_nama' => $request->news_nama,
            'news_nama_slug' => Str::slug($request->news_nama, '-'),
            'news_nama_eng' => $request->news_nama_eng,
            'news_nama_eng_slug' => Str::slug($request->news_nama_eng, '-'),
            'description' => $request->description,
            'description_eng' => $request->description_eng,
            'description_sub' => $request->description_sub,
            'description_sub_eng' => $request->description_sub_eng,
        ]);

        return redirect('/CMS/news');
    }

    public function news_delete($id)
    {
        News::where('id_news', $id)->delete();
        return redirect('/CMS/news');
    }

    // E-BROCHURE ##

    public function ebrochure()
    {
        $ebrochure = Ebrochure::all();
        return view('halimsaktiadmin.ebrochure.ebrochure', compact('ebrochure'));
    }

    public function ebrochure_add()
    {
        return view('halimsaktiadmin.ebrochure.ebrochure_add');
    }

    public function ebrochure_store(request $request)
    {
        $filepdf = $request->file('pdfebrochure');
        $pdfs = time()."_".$filepdf->getClientOriginalName();
        $tujuan_upload = 'image/pdfebrochure';
        $filepdf->move($tujuan_upload,$pdfs);

        Ebrochure::create([
            'link' => $pdfs,
        ]);
        return redirect('/CMS/ebrochure');
    }

    public function ebrochure_edit($id)
    {
        $ebrochure = Ebrochure::where('id_ebrochure', $id)->get();
        return view('halimsaktiadmin.ebrochure.ebrochure_edit', compact('ebrochure'));
    }

    public function ebrochure_update(request $request)
    {
        $filepdf = $request->file('pdfebrochure');
        $pdfs = time()."_".$filepdf->getClientOriginalName();
        $tujuan_upload = 'image/pdfebrochure';
        $filepdf->move($tujuan_upload,$pdfs);

        Ebrochure::where('id_ebrochure', $request->id_ebrochure)->update([
            'link' => $pdfs,
        ]);

        return redirect('/CMS/ebrochure');
    }

    public function ebrochure_delete($id)
    {
        Ebrochure::where('id_ebrochure', $id)->delete();
        return redirect('/CMS/ebrochure');
    }

    // E-BROCHURE DATA ##

    public function ebrochuredata()
    {
        $ebrochure = Ebrochuredata::OrderByDesc('created_at')->get();
        return view('halimsaktiadmin.ebrochuredata.ebrochuredata', compact('ebrochure'));
    }

    public function ebrochuredata_add()
    {
        return view('halimsaktiadmin.ebrochuredata.ebrochuredata_add');
    }

    public function ebrochuredata_edit()
    {
        return view('halimsaktiadmin.ebrochuredata.ebrochuredata_edit');
    }

    public function contactemail()
    {
        $contact = Contact::OrderByDesc('created_at')->get();
        return view('halimsaktiadmin.contactemail.contactemail', compact('contact'));
    }
}
