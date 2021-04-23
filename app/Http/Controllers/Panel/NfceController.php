<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Empresa;
use App\Models\Item;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class NfceController extends Controller
{
    public function index()
    {
        $data = [];
        return view('panel.admin.pages.nfce.index', compact('data'));
    }

    public function create()
    {
        $clients = Client::orderby('name', 'asc')->pluck('name', 'id');
        $products = Product::orderby('name', 'asc')->pluck('name', 'id');
        $client = Client::find(Cache::get('client_id'));

        //pega o item adicionado a nota
        $data = Item::orderby('created_at', 'desc')->get();
        return view('panel.admin.pages.nfce.create', compact('clients', 'client', 'products', 'data'));
    }

    public function selectClient(Request $request)
    {
        $expiresAt = Carbon::now()->addMinutes(120);
        Cache::put('client_id', $request->get('client_id'), $expiresAt);
        return redirect()->back()->with('success', 'Cliente selecionado!');
    }

    public function selectProduct(Request $request, Item $item)
    {
        $product = Product::find($request->get('product_id'));
        if (Cache::has('client_id')) {
            $item->create([
                'client_id' => Cache::get('client_id'),
                'product_id' => $product->id,
                'name' => $product->name,
                'cfop' => $product->cfop,
                'ncm' => $product->ncm,
                'uni_medida' => $product->uni_medida,
                'valor' => $product->valor,
                'qtd' => $request->get('qtd')
            ]);
        } else {
            return redirect()->back()->with('error', 'Escolha um cliente!');
        }
        return redirect()->back()->with('success', 'Produto selecionado!');
    }

    public function delete($id)
    {
        Item::destroy($id);
        return redirect()->back()->with('success', 'Item removido!');

        # code...
    }
}
