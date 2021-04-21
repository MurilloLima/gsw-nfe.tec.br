<div class="row">
    <div class="col-md-5">
        <label>{{ __('Razão Social') }}</label>
        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('name') ? ' has-danger' : '' }}" name="name" type="text"
                value="{{$empresa->name ?? old('name')}}" required />
            @if ($errors->has('name'))
            <span id="email-error" class="error text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <label>{{ __('Inscrição Estadual') }}</label>
        <div class="form-group{{ $errors->has('inscricao') ? ' has-danger' : '' }}">
            <input class="form-control {{ $errors->has('inscricao') ? ' has-danger' : '' }}" name="inscricao"
                type="text" value="{{$empresa->inscricao ?? old('inscricao')}}" required />
            @if ($errors->has('inscricao'))
            <span id="email-error" class="error text-danger">{{ $errors->first('inscricao') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-3">
        <label>{{ __('CNPJ') }}</label>
        <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
            <input class="form-control cnpj {{ $errors->has('phone') ? ' has-danger' : '' }}" name="cnpj"
                type="text" value="{{$empresa->cnpj ?? old('cnpj')}}" required />
            @if ($errors->has('cnpj'))cnpj
            <span id="email-error" class="error text-danger">{{ $errors->first('pcnpjhone') }}</span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <label>{{ __('Telefone') }}</label>
        <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
            <input class="form-control phone_with_ddd{{ $errors->has('email') ? ' has-danger' : '' }}" name="phone" type="text"
                value="{{$empresa->phone ?? old('phone')}}" />
            @if ($errors->has('phone'))
            <span id="email-error" class="error text-danger">{{ $errors->first('phone') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-9">
        <label>{{ __('Endereço') }}</label>
        <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('address') ? ' has-danger' : '' }}" name="address" type="text"
                value="{{$empresa->address ?? old('address')}}" required />
            @if ($errors->has('address'))
            <span id="email-error" class="error text-danger">{{ $errors->first('address') }}</span>
            @endif
        </div>
    </div>
    
</div>
<div class="row">
    <div class="col-md-10">
        <label>{{ __('Bairro') }}</label>
        <div class="form-group{{ $errors->has('bairro') ? ' has-danger' : '' }}">
            <input class="form-control {{ $errors->has('bairro') ? ' has-danger' : '' }}" name="bairro"
                type="text" value="{{$empresa->bairro ?? old('bairro')}}" required />
            @if ($errors->has('bairro'))
            <span id="email-error" class="error text-danger">{{ $errors->first('bairro') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-2">
        <label>{{ __('UF') }}</label>
        <div class="form-group{{ $errors->has('uf') ? ' has-danger' : '' }}">
            <input class="form-control {{ $errors->has('uf') ? ' has-danger' : '' }}" name="uf"
                type="text" value="{{$empresa->uf ?? old('uf')}}" required />
            @if ($errors->has('uf'))
            <span id="email-error" class="error text-danger">{{ $errors->first('uf') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <label>{{ __('Cidade') }}</label>
        <div class="form-group{{ $errors->has('cidade') ? ' has-danger' : '' }}">
            <input class="form-control {{ $errors->has('cidade') ? ' has-danger' : '' }}" name="cidade"
                type="text" value="{{$empresa->cidade ?? old('cidade')}}" required />
            @if ($errors->has('cidade'))
            <span id="email-error" class="error text-danger">{{ $errors->first('cidade') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-3">
        <label>{{ __('CEP') }}</label>
        <div class="form-group{{ $errors->has('cep') ? ' has-danger' : '' }}">
            <input class="form-control cep{{ $errors->has('cep') ? ' has-danger' : '' }}" name="cep"
                type="text" value="{{$empresa->cep ?? old('cep')}}" required />
            @if ($errors->has('cep'))
            <span id="email-error" class="error text-danger">{{ $errors->first('cep') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-5">
        <label>{{ __('E-mail') }}</label>
        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
            <input class="form-control {{ $errors->has('email') ? ' has-danger' : '' }}" name="email"
                type="text" value="{{$empresa->email ?? old('email')}}" required />
            @if ($errors->has('email'))
            <span id="email-error" class="error text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
    </div>
</div>
