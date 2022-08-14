<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\PostController;
use Illuminate\View\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PostController::class,'index'])->name('post.index');
Route::get('/create',[PostController::class,'create'])->name('post.create');
Route::post('/store',[PostController::class,'store'])->name('post.store');
Route::get('/show/{id}',[PostController::class,'show'])->name('post.show');
Route::delete('/delete/{id}',[PostController::class,'delete'])->name('post.delete');
Route::get('/edit/{id}',[PostController::class,'edit'])->name("post.edit");
Route::put('/update/{id}',[PostController::class,'update'])->name('post.update');





















//Route::get('user/{name}',function ($name){
//    return "I'm ".$name;
//});
//
//Route::get("/about",function(){
//    return "I'm about";
//});
//
////No.<1>//
//
////Route::get('/products',function (){
////    $products = file_get_contents('https://fakestoreapi.com/products');
////    $products = json_decode($products);
//////    $products = array_filter($products,fn($product)=>$product->price <10);
//////    var_dump($products);
////    dd($products);
////
////});
//
//
////No.<2>//
//
//Route::get("/products",function (){
//   $products = Http::get("https://fakestoreapi.com/products")->object();
//   dd($products);
//});
//
////No.<3>//
//
//Route::get("/products/price-max/{amount}",function ($amount){
//    $products = Http::get("https://fakestoreapi.com/products")->object();
//    $products = collect($products)->where("price",'<',"$amount");
////    dd($products);
//    return $products;
//});
//
////NO<4>//
//
//Route::get("products/price-between/{min}/and/{max}",function ($min,$max){
//    $products = Http::get("https://fakestoreapi.com/products")->object();
//    $products = collect($products)->whereBetween("price",[$min,$max]);
//    dd($products);
//});
//
////No<5>//
//
//Route::get("/exchange-from/{amount}/{fromCurrency}/to/mmk",function ($amount,$fromCurrency){
//   $rates = Http::get("http://forex.cbm.gov.mm/api/latest")->object()->rates;
//   $ratesToflote = str_replace(",","",$rates->{strtoupper($fromCurrency)});
//   dd($amount * $ratesToflote);
//});
//
////No<6>//
//
//Route::get("/exchange-from/{amount}/mmk/to/{toCurrency}",function ($amount,$toCurrency){
//    $rates = Http::get("http://forex.cbm.gov.mm/api/latest")->object()->rates;
//    $ratesToflote = str_replace(",","",$rates->{strtoupper($toCurrency)});
//    dd(round($amount / $ratesToflote,2).strtoupper($toCurrency));
//});
//
//Route::post("/exchange-to-mmk",[FirstController::class,'exchangeToMMK'])->name('exchange-to-mmk');
//
//Route::view('exchange-calc','test');
//
//
//Route::post("/exchange-test",[FirstController::class,'exchangeTest'])->name('exchange-test');

