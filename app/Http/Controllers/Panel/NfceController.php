<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Empresa;

class NfceController extends Controller
{
   public function index()
   {
       $empresa = Empresa::find(1);
       $data = [];
       return view('panel.admin.pages.nfce.index', compact('data', 'empresa'));
   }

   public function create()
   {
       return view('panel.admin.pages.nfce.create');
   }
}
