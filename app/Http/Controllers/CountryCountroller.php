<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use PHPUnit\Util\Json;

class CountryCountroller extends Controller
{
    public function index(){
        $response = Http::get('https://restcountries.com/v2/all');
        // $response = Http::get('https://restcountries.com/v3.1/all');

        $jsonData = $response->json();

        // dd($jsonData);
return view('testing',compact('jsonData'));
    }
}
