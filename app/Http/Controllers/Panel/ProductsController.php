<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use PhpParser\Node\Stmt\TryCatch;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::orderby('created_at', 'desc')->paginate(20);
        return view('panel.admin.pages.products.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $source = array('.', ',');
        $replace = array('', '.');
        $valor = str_replace($source, $replace, $request->get('valor'));
        Product::create([
            'name' => $request->get('name'),
            'uni_medida' => $request->get('uni_medida'),
            'valor' => $valor,
            'cfop' => $request->get('cfop'),
            'ncm' => $request->get('ncm'),
            'descryption' => $request->get('descryption')
        ]);
        return redirect()->back()->with('success', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        return view('panel.admin.pages.products.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $data = Product::find($id);
        $source = array('.', ',');
        $replace = array('', '.');
        $valor = str_replace($source, $replace, $request->get('valor'));
        $data->update([
            'name' => $request->get('name'),
            'qtd' => $request->get('qtd'),
            'uni_medida' => $request->get('uni_medida'),
            'valor' => $valor
        ]);
        return redirect()->back()->with('success', 'Editado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        return redirect()->back()->with('success', 'Deletado com sucesso!');
    }
}
