<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Empresa;

class ToolsController extends Controller
{
    public function index()
    {
        $empresa = Empresa::find(1);
        return view('panel.admin.pages.tools.index', compact('empresa'));
    }

    public function update(Request $request)
    {
        $data = Empresa::find(1);
        $data->update($request->all());
        return redirect()->back()->with('success', 'Dados atualizado com sucesso!');
    }
}
