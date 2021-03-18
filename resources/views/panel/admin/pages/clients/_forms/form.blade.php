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
    <div class="col-md-5">
        <label>{{ __('CPF') }}</label>
        <div class="form-group{{ $errors->has('cpf') ? ' has-danger' : '' }}">
            <input class="form-control cpf{{ $errors->has('qtd') ? ' has-danger' : '' }}" name="cpf" type="text"
                value="{{$data->cpf ?? old('cpf')}}" />
            @if ($errors->has('cpf'))
            <span id="email-error" class="error text-danger">{{ $errors->first('cpf') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-7">
        <label>{{ __('CNPJ') }}</label>
        <div class="form-group{{ $errors->has('cnpj') ? ' has-danger' : '' }}">
            <input class="form-control cnpj{{ $errors->has('cnpj') ? ' has-danger' : '' }}" name="cnpj" type="text"
                value="{{$data->cnpj ?? old('cnpj')}}" />
            @if ($errors->has('cnpj'))
            <span id="email-error" class="error text-danger">{{ $errors->first('cnpj') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
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
        <label>{{ __('Complemento') }}</label>
        <div class="form-group{{ $errors->has('complemento') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('complemento') ? ' has-danger' : '' }}" name="complemento"
                type="text" value="{{$data->complemento ?? old('complemento')}}" />
            @if ($errors->has('complemento'))
            <span id="complemento-error" class="error text-danger">{{ $errors->first('complemento') }}</span>
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