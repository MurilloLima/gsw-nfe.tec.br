<div class="row">
    <div class="col-md-12" style="margin-bottom: 15px;">
        <h3>Dados Cliente</h3>
        <button data-toggle="modal" data-target="#client" class="btn btn-success">Selecione</button>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label>{{ __('Nome') }}</label>
        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('name') ? ' has-danger' : '' }}" name="name" type="text"
                value="{{$client->name ?? old('name')}}" required />
            @if ($errors->has('name'))
            <span id="email-error" class="error text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <label>{{ __('CPF') }}</label>
        <div class="form-group{{ $errors->has('cpf') ? ' has-danger' : '' }}">
            <input class="form-control cpf{{ $errors->has('qtd') ? ' has-danger' : '' }}" name="cpf" type="text"
                value="{{$client->cpf ?? old('cpf')}}" />
            @if ($errors->has('cpf'))
            <span id="email-error" class="error text-danger">{{ $errors->first('cpf') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <label>{{ __('CNPJ') }}</label>
        <div class="form-group{{ $errors->has('cnpj') ? ' has-danger' : '' }}">
            <input class="form-control cnpj{{ $errors->has('cnpj') ? ' has-danger' : '' }}" name="cnpj" type="text"
                value="{{$client->cnpj ?? old('cnpj')}}" />
            @if ($errors->has('cnpj'))
            <span id="email-error" class="error text-danger">{{ $errors->first('cnpj') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <label>{{ __('Telefone') }}</label>
        <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
            <input class="form-control phone_with_ddd {{ $errors->has('phone') ? ' has-danger' : '' }}" name="phone"
                type="text" value="{{$client->phone ?? old('phone')}}" />
            @if ($errors->has('phone'))
            <span id="complemento-error" class="error text-danger">{{ $errors->first('phone') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <label>{{ __('Endereço') }}</label>
        <div class="form-group{{ $errors->has('andress') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('andress') ? ' has-danger' : '' }}" name="andress" type="text"
                value="{{$client->andress ?? old('andress')}}" required />
            @if ($errors->has('andress'))
            <span id="andress-error" class="error text-danger">{{ $errors->first('andress') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <label>{{ __('Bairro') }}</label>
        <div class="form-group{{ $errors->has('bairro') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('bairro') ? ' has-danger' : '' }}" name="bairro" type="text"
                value="{{$client->bairro ?? old('bairro')}}" />
            @if ($errors->has('bairro'))
            <span id="complemento-error" class="error text-danger">{{ $errors->first('bairro') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-2">
        <label>{{ __('CEP') }}</label>
        <div class="form-group{{ $errors->has('cep') ? ' has-danger' : '' }}">
            <input class="form-control cep {{ $errors->has('cep') ? ' has-danger' : '' }}" name="cep" type="text"
                value="{{$client->cep ?? old('cep')}}" />
            @if ($errors->has('cep'))
            <span id="complemento-error" class="error text-danger">{{ $errors->first('cep') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <label>{{ __('Cidade') }}</label>
        <div class="form-group{{ $errors->has('cidade') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('cidade') ? ' has-danger' : '' }}" name="cidade" type="text"
                value="{{$client->cidade ?? old('cidade')}}" required />
            @if ($errors->has('cidade'))
            <span id="email-error" class="error text-danger">{{ $errors->first('cidade') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-3">
        <label>{{ __('UF') }}</label>
        <div class="form-group{{ $errors->has('uf') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('uf') ? ' has-danger' : '' }}" name="uf" type="text"
                value="{{$client->uf ?? old('uf')}}" required />
            @if ($errors->has('uf'))
            <span id="email-error" class="error text-danger">{{ $errors->first('uf') }}</span>
            @endif
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12" style="margin-bottom: 15px;">
        <h3>Produto(s)</h3>
        <button data-toggle="modal" data-target="#product" class="btn btn-success">Selecione</button>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>NCM</th>
                    <th>CFOP</th>
                    <th>Unidade medida</th>
                    <th>Qtd</th>
                    <th>Valor</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->ncm}}</td>
                    <td>{{$item->cfop}}</td>
                    <td>{{$item->uni_medida}}</td>
                    <td>{{$item->qtd}}</td>
                    <td>{{$item->valor}}</td>
                    <td>
                        <a href="{{ route('admin.select.delete', ['id'=>$item->id]) }}"><i class="fa fa-trash-alt"></i></a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center"><strong>Nenhum produto adicionado!</strong></td>
                </tr>
            </tbody>
            @endforelse
        </table>
    </div>
</div>

{{-- modal --}}
<div class="modal fade" id="client" tabindex="-1" role="dialog" aria-labelledby="client" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar
                </h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.select.client') }}" class="navbar-form" method="post">
                    @csrf
                    @method('post')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>{{ __('Selecione o cliente') }}</label>
                                <div class="form-group">
                                    {!! Form::select('client_id', $clients, old('client'), ['class'=>'form-control'])
                                    !!}
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-info">Selecionar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- modal add produto --}}
<div class="modal fade" id="product" tabindex="-1" role="dialog" aria-labelledby="product" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar
                </h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.select.product') }}" class="navbar-form" method="post">
                    @csrf
                    @method('post')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-9">
                                <label>{{ __('Selecione o produto') }}</label>
                                <div class="form-group">
                                    {!! Form::select('product_id', $products, null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>{{ __('Qtd') }}</label>
                                <div class="form-group">
                                    <input type="number" name="qtd" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-info">Selecionar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>