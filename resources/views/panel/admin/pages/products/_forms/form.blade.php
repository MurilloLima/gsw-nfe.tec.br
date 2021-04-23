<div class="row">
    <div class="col-md-12">
        <label>{{ __('Produto') }}</label>
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
    <div class="col-md-12">
        <label>{{ __('Descrição') }}</label>
        <div class="form-group{{ $errors->has('descryption') ? ' has-danger' : '' }}">
            <textarea name="descryption" class="form-control{{ $errors->has('descryption') ? ' has-danger' : '' }}"
                cols="30" rows="5">{{$data->descryption ?? old('descryption')}}</textarea>
            @if ($errors->has('descryption'))
            <span id="email-error" class="error text-danger">{{ $errors->first('descryption') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <label>{{ __('CFOP') }}</label>
        <div class="form-group{{ $errors->has('descryption') ? ' has-danger' : '' }}">
            {!! Form::select('cfop', ['5102'=>'5102', '5915'=>'5915'], $data->cfop ?? old('cfop'),
            ['class'=>'form-control']) !!}
            @if ($errors->has('cfop'))
            <span id="email-error" class="error text-danger">{{ $errors->first('cfop') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-3">
        <label>{{ __('NCM') }}</label>
        <div class="form-group{{ $errors->has('ncm') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('ncm') ? ' has-danger' : '' }}" name="ncm" type="text"
                value="{{$data->ncm ?? old('ncm')}}" required />
            @if ($errors->has('ncm'))
            <span id="email-error" class="error text-danger">{{ $errors->first('ncm') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-3">
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
    <div class="col-md-3">
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