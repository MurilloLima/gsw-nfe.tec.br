<div class="row">
    <div class="col-md-12">
        <label>{{ __('Nome') }}</label>
        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('name') ? ' has-danger' : '' }}" name="name" type="text"
                value="{{$data->name ?? old('name')}}" required />
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
                value="{{$data->cpf ?? old('cpf')}}" />
            @if ($errors->has('cpf'))
            <span id="email-error" class="error text-danger">{{ $errors->first('cpf') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <label>{{ __('CNPJ') }}</label>
        <div class="form-group{{ $errors->has('cnpj') ? ' has-danger' : '' }}">
            <input class="form-control cnpj{{ $errors->has('cnpj') ? ' has-danger' : '' }}" name="cnpj" type="text"
                value="{{$data->cnpj ?? old('cnpj')}}" />
            @if ($errors->has('cnpj'))
            <span id="email-error" class="error text-danger">{{ $errors->first('cnpj') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <label>{{ __('Telefone') }}</label>
        <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
            <input class="form-control phone_with_ddd {{ $errors->has('phone') ? ' has-danger' : '' }}" name="phone"
                type="text" value="{{$data->phone ?? old('phone')}}" />
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
                value="{{$data->andress ?? old('andress')}}" required />
            @if ($errors->has('andress'))
            <span id="andress-error" class="error text-danger">{{ $errors->first('andress') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <label>{{ __('Bairro') }}</label>
        <div class="form-group{{ $errors->has('bairro') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('bairro') ? ' has-danger' : '' }}" name="bairro"
                type="text" value="{{$data->bairro ?? old('bairro')}}" />
            @if ($errors->has('bairro'))
            <span id="complemento-error" class="error text-danger">{{ $errors->first('bairro') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-2">
        <label>{{ __('CEP') }}</label>
        <div class="form-group{{ $errors->has('cep') ? ' has-danger' : '' }}">
            <input class="form-control cep {{ $errors->has('cep') ? ' has-danger' : '' }}" name="cep"
                type="text" value="{{$data->cep ?? old('cep')}}" />
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
                value="{{$data->cidade ?? old('cidade')}}" required />
            @if ($errors->has('cidade'))
            <span id="email-error" class="error text-danger">{{ $errors->first('cidade') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-3">
        <label>{{ __('UF') }}</label>
        <div class="form-group{{ $errors->has('uf') ? ' has-danger' : '' }}">
            {!! Form::select('uf', [
            ''=> 'Selecione',
            'AC'=>'Acre',
            'AL'=>'Alagoas',
            'AP'=>'Amapá',
            'AM'=>'Amazonas',
            'BA'=>'Bahia',
            'CE'=>'Ceará',
            'DF'=>'Distrito Federal',
            'ES'=>'Espirito Santo',
            'GO'=>'Goiás',
            'MA'=>'Maranhão',
            'MS'=>'Mato Grosso do Sul',
            'MT'=>'Mato Grosso',
            'MG'=>'Minas Gerais',
            'PA'=>'Pará',
            'PB'=>'Paraíba',
            'PR'=>'Paraná',
            'PE'=>'Pernambuco',
            'PI'=>'Piauí',
            'RJ'=>'Rio de Janeiro',
            'RN'=>'Rio Grande do Norte',
            'RS'=>'Rio Grande do Sul',
            'RO'=>'Rondônia',
            'RR'=>'Roraima',
            'SC'=>'Santa Catarina',
            'SP'=>'São Paulo',
            'SE'=>'Sergipe',
            'TO'=>'Tocantins',
            ], $data->uf ?? old('uf'), ['class'=>'form-control']) !!}
            @if ($errors->has('uf'))
            <span id="email-error" class="error text-danger">{{ $errors->first('uf') }}</span>
            @endif
        </div>
    </div>
</div>