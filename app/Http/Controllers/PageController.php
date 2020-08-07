<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index()
   {
       return view('home');
   }
   public function pendaftaran()
   {
       return view('daftar');
   }
   public function profile()
   {
       return view('profile');
   }
   public function faq()
   {
       return view('faq');
   }
   public function layanan()
   {
       return view('layanan');
   }
 
}
