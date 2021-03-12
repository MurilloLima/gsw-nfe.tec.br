<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NfceController extends Controller
{
   public function index()
   {
       $data = [];
       return view('panel.admin.pages.nfce.index', compact('data'));
   }

   public function create()
   {
       return view('panel.admin.pages.nfce.create');
   }
}
