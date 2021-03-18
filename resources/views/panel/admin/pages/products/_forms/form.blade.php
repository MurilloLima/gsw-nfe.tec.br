<div class="row">
    <div class="col-md-9">
        <label>{{ __('Produto') }}</label>
        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('name') ? ' has-danger' : '' }}" name="name" type="text"
                value="{{$data->name ?? old('name')}}" required />
            @if ($errors->has('name'))
            <span id="email-error" class="error text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-3">
        <label>{{ __('Quantidade') }}</label>
        <div class="form-group{{ $errors->has('qtd') ? ' has-danger' : '' }}">
            <input class="form-control {{ $errors->has('qtd') ? ' has-danger' : '' }}" name="qtd" type="text"
                value="{{$data->qtd ?? old('qtd')}}" required />
            @if ($errors->has('qtd'))
            <span id="email-error" class="error text-danger">{{ $errors->first('qtd') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <label>{{ __('Unid. Medida') }}</label>
        <div class="form-group{{ $errors->has('uni_medida') ? ' has-danger' : '' }}">
            {!! Form::select('uni_medida', [
            'Unidade' => 'Unidade',
            'Kg' => 'Kg',
            'Litro' => 'Litro'
            ], $data->uni_medida ?? old('uni_meidade'), ['class'=>'form-control']) !!}
            @if ($errors->has('uni_medida'))
            <span id="email-error" class="error text-danger">{{ $errors->first('uni_medida') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <label>{{ __('Valor') }}</label>
        <div class="form-group{{ $errors->has('valor') ? ' has-danger' : '' }}">
            <input class="form-control money2{{ $errors->has('valor') ? ' has-danger' : '' }}" name="valor" type="text"
                value="{{$data->valor ?? old('valor')}}" required />
            @if ($errors->has('valor'))
            <span id="email-error" class="error text-danger">{{ $errors->first('valor') }}</span>
            @endif
        </div>
    </div>
</div>