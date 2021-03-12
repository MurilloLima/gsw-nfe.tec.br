<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ToolsController extends Controller
{
    public function index()
    {
        return view('panel.admin.pages.tools.index');
    }
}
