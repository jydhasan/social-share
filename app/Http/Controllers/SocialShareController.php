<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Share;

class SocialShareController extends Controller
{
    public function index(){
        $SocialShare=Share::currentPage()->facebook()
        ->whatsapp()
        ->twitter()->getRawLinks();
        // dd($SocialShare);
        return view('welcome', compact('SocialShare'));
    }
}
