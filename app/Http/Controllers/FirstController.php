<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FirstController extends Controller
{
    public function exchangeToMMK(Request $msm){
//        $request->photo->store('images');
//        return $request;

        $rates = Http::get("http://forex.cbm.gov.mm/api/latest")->object()->rates;
        $ratesToFloat = str_replace(",","",$rates->{strtoupper($msm->currency)});
        return $msm->amount * $ratesToFloat.'mmk';
    }

    public function exchangeTest(Request $request){
        $rates = Http::get("http://forex.cbm.gov.mm/api/latest")->object()->rates;
        $fromCurrencyRate = str_replace(",","",$rates->{strtoupper($request->fromCurrency)});
        $toCurrencyRate = str_replace(",","",$rates->{strtoupper($request->toCurrency)});

        //change to mmk
        $mmk = $request->amount * $fromCurrencyRate;

        //change to what you want
       return round($mmk / $toCurrencyRate,2).strtoupper($request->toCurrency);
    }
}
