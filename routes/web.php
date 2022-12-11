<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_HalimSaktiPratama;
use App\Http\Controllers\C_HalimSaktiPratamaAdmin;
use App\Http\Controllers\Auth\LoginController;

//FITUR CLEAR
Route::get('/clear', function () {
    $exitcode = Artisan::call('cache:clear');
    $exitcode = Artisan::call('config:cache');
    $exitcode = Artisan::call('view:cache');
    $exitcode = Artisan::call('route:clear');
    return 'DONE';
});

Route::get('sitemapp.xml', [C_HalimSaktiPratama::class, 'sitemapproduct'])->withoutMiddleware('auth');
Route::get('sitemapn.xml', [C_HalimSaktiPratama::class, 'sitemapnews'])->withoutMiddleware('auth');


// Search All Product
Route::get('search', [C_HalimSaktiPratama::class, 'search'])->name('search')->withoutMiddleware('auth');
Route::get('en/search', [C_HalimSaktiPratama::class, 'search_en'])->name('search_en')->withoutMiddleware('auth');

// Halaman Halim Sakti Pratama ______
// INDONESIA ###
Route::get('i', [C_HalimSaktiPratama::class, 'homepage'])->name('homepage')->withoutMiddleware('auth');
Route::get('perusahaan', [C_HalimSaktiPratama::class, 'company'])->name('company')->withoutMiddleware('auth');
Route::get('perusahaaan', [C_HalimSaktiPratama::class, 'company'])->name('companyab')->withoutMiddleware('auth');
Route::get('kontak', [C_HalimSaktiPratama::class, 'contact'])->name('contact')->withoutMiddleware('auth');
Route::get('berita', [C_HalimSaktiPratama::class, 'news'])->name('wnews')->withoutMiddleware('auth');
Route::get('berita/{news_nama_slug}', [C_HalimSaktiPratama::class, 'newsdetail'])->name('newsdetail')->withoutMiddleware('auth');
Route::get('produk', [C_HalimSaktiPratama::class, 'product'])->name('wproduct')->withoutMiddleware('auth');
Route::get('produk/{product_slug}', [C_HalimSaktiPratama::class, 'productdetail'])->name('productdetail')->withoutMiddleware('auth');
// ENGLISH ###
Route::get('', [C_HalimSaktiPratama::class, 'homepage_en'])->name('homepage_en')->withoutMiddleware('auth');
Route::get('about', [C_HalimSaktiPratama::class, 'company_en'])->name('company_en')->withoutMiddleware('auth');
Route::get('contact', [C_HalimSaktiPratama::class, 'contact_en'])->name('contact_en')->withoutMiddleware('auth');
Route::get('news', [C_HalimSaktiPratama::class, 'news_en'])->name('wnews_en')->withoutMiddleware('auth');
Route::get('news/{news_nama_slug}', [C_HalimSaktiPratama::class, 'newsdetail_en'])->name('newsdetail_en')->withoutMiddleware('auth');
Route::get('products', [C_HalimSaktiPratama::class, 'product_en'])->name('wproduct_en')->withoutMiddleware('auth');
Route::get('products/{product_slug}', [C_HalimSaktiPratama::class, 'productdetail_en'])->name('productdetail_en')->withoutMiddleware('auth');

Route::post('contactsave', [C_HalimSaktiPratama::class, 'contactsave'])->name('contactsave')->withoutMiddleware('auth');
Route::post('contactsaveeng', [C_HalimSaktiPratama::class, 'contactsaveeng'])->name('contactsaveeng')->withoutMiddleware('auth');

Route::post('ebrochuredatasave', [C_HalimSaktiPratama::class, 'ebrochuredatasave'])->name('ebrochuredatasave')->withoutMiddleware('auth');
Route::post('ebrochuredatasaveen', [C_HalimSaktiPratama::class, 'ebrochuredatasaveen'])->name('ebrochuredatasaven')->withoutMiddleware('auth');



// Halaman CMS

Route::get('CMS', [LoginController::class, 'showLoginForm'])->name('showLoginForm');

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('CMS/dashboard', [C_HalimSaktiPratamaAdmin::class, 'dashboard'])->name('dashboard')->middleware('auth');

// SLIDER ##
Route::get('CMS/slider', [C_HalimSaktiPratamaAdmin::class, 'slider'])->name('admslider')->middleware('auth');
Route::get('CMS/slider/add', [C_HalimSaktiPratamaAdmin::class, 'slider_add'])->name('admslider_add')->middleware('auth');
Route::post('CMS/slider/store', [C_HalimSaktiPratamaAdmin::class, 'slider_store'])->name('admslider_store')->middleware('auth');
Route::get('CMS/slider/edit/{id}', [C_HalimSaktiPratamaAdmin::class, 'slider_edit'])->name('admslider_edit')->middleware('auth');
Route::post('CMS/slider/update', [C_HalimSaktiPratamaAdmin::class, 'slider_update'])->name('admslider_update')->middleware('auth');
Route::get('CMS/slider/delete/{id}', [C_HalimSaktiPratamaAdmin::class, 'slider_delete'])->name('admslider_delete')->middleware('auth');

// PRODUCT ##
Route::get('CMS/product', [C_HalimSaktiPratamaAdmin::class, 'product'])->name('admproduct')->middleware('auth');
Route::get('CMS/product/add', [C_HalimSaktiPratamaAdmin::class, 'product_add'])->name('admproduct_add')->middleware('auth');
Route::post('CMS/product/store', [C_HalimSaktiPratamaAdmin::class, 'product_store'])->name('admproduct_store')->middleware('auth');
Route::get('CMS/product/edit/{id}', [C_HalimSaktiPratamaAdmin::class, 'product_edit'])->name('admproduct_edit')->middleware('auth');
Route::post('CMS/product/update', [C_HalimSaktiPratamaAdmin::class, 'product_update'])->name('admproduct_update')->middleware('auth');
Route::get('CMS/product/delete/{id}', [C_HalimSaktiPratamaAdmin::class, 'product_delete'])->name('admproduct_delete')->middleware('auth');

// News ##
Route::get('CMS/news', [C_HalimSaktiPratamaAdmin::class, 'news'])->name('admnews')->middleware('auth');
Route::get('CMS/news/add', [C_HalimSaktiPratamaAdmin::class, 'news_add'])->name('admnews_add')->middleware('auth');
Route::post('CMS/news/store', [C_HalimSaktiPratamaAdmin::class, 'news_store'])->name('admnews_store')->middleware('auth');
Route::get('CMS/news/edit/{id}', [C_HalimSaktiPratamaAdmin::class, 'news_edit'])->name('admnews_edit')->middleware('auth');
Route::post('CMS/news/update', [C_HalimSaktiPratamaAdmin::class, 'news_update'])->name('admnews_update')->middleware('auth');
Route::get('CMS/news/delete/{id}', [C_HalimSaktiPratamaAdmin::class, 'news_delete'])->name('admnews_delete')->middleware('auth');

// E-Brochure File
Route::get('CMS/ebrochure', [C_HalimSaktiPratamaAdmin::class, 'ebrochure'])->name('ebrochure')->middleware('auth');
Route::get('CMS/ebrochure/add', [C_HalimSaktiPratamaAdmin::class, 'ebrochure_add'])->name('ebrochure_add')->middleware('auth');
Route::post('CMS/ebrochure/store', [C_HalimSaktiPratamaAdmin::class, 'ebrochure_store'])->name('admebrochure_store')->middleware('auth');
Route::get('CMS/ebrochure/edit/{id}', [C_HalimSaktiPratamaAdmin::class, 'ebrochure_edit'])->name('admebrochure_edit')->middleware('auth');
Route::post('CMS/ebrochure/update', [C_HalimSaktiPratamaAdmin::class, 'ebrochure_update'])->name('admebrochure_update')->middleware('auth');
Route::get('CMS/ebrochure/delete/{id}', [C_HalimSaktiPratamaAdmin::class, 'ebrochure_delete'])->name('admebrochure_delete')->middleware('auth');

// E-Brochure Name Email
Route::get('CMS/ebrochuredata', [C_HalimSaktiPratamaAdmin::class, 'ebrochuredata'])->name('ebrochuredata')->middleware('auth');
Route::get('CMS/ebrochuredata/add', [C_HalimSaktiPratamaAdmin::class, 'ebrochuredata_add'])->name('ebrochuredata_add')->middleware('auth');
Route::post('CMS/ebrochuredata/store', [C_HalimSaktiPratamaAdmin::class, 'ebrochuredata_store'])->name('admebrochuredata_store')->middleware('auth');
Route::get('CMS/ebrochuredata/edit/{id}', [C_HalimSaktiPratamaAdmin::class, 'ebrochuredata_edit'])->name('admebrochuredata_edit')->middleware('auth');
Route::post('CMS/ebrochuredata/update', [C_HalimSaktiPratamaAdmin::class, 'ebrochuredata_update'])->name('admebrochuredata_update')->middleware('auth');
Route::get('CMS/ebrochuredata/delete/{id}', [C_HalimSaktiPratamaAdmin::class, 'ebrochuredata_delete'])->name('admebrochuredata_delete')->middleware('auth');

//
Route::get('CMS/contactemail', [C_HalimSaktiPratamaAdmin::class, 'contactemail'])->name('contactemail')->middleware('auth');
