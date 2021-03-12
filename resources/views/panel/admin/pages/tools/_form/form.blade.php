<div class="row">
    <div class="col-md-5">
        <label>{{ __('Razão Social') }}</label>
        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('name') ? ' has-danger' : '' }}" name="name" type="text"
                value="{{$data->name ?? old('name')}}" required />
            @if ($errors->has('name'))
            <span id="email-error" class="error text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <label>{{ __('Inscrição Estadual') }}</label>
        <div class="form-group{{ $errors->has('hours') ? ' has-danger' : '' }}">
            <input class="form-control time2 {{ $errors->has('hours') ? ' has-danger' : '' }}" name="hours"
                type="text" value="{{$data->hours ?? old('hours')}}" required />
            @if ($errors->has('hours'))
            <span id="email-error" class="error text-danger">{{ $errors->first('hours') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-3">
        <label>{{ __('CNPJ') }}</label>
        <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
            <input class="form-control phone_with_ddd {{ $errors->has('phone') ? ' has-danger' : '' }}" name="phone"
                type="text" value="{{$data->phone ?? old('phone')}}" required />
            @if ($errors->has('phone'))
            <span id="email-error" class="error text-danger">{{ $errors->first('phone') }}</span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <label>{{ __('Telefone') }}</label>
        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('email') ? ' has-danger' : '' }}" name="email" type="text"
                value="{{$data->email ?? old('email')}}" />
            @if ($errors->has('email'))
            <span id="email-error" class="error text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-9">
        <label>{{ __('Endereço') }}</label>
        <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('date') ? ' has-danger' : '' }}" name="date" type="text"
                value="{{$data->date ?? old('date')}}" required />
            @if ($errors->has('date'))
            <span id="email-error" class="error text-danger">{{ $errors->first('date') }}</span>
            @endif
        </div>
    </div>
    
</div>
<div class="row">
    <div class="col-md-10">
        <label>{{ __('Bairro') }}</label>
        <div class="form-group{{ $errors->has('hours') ? ' has-danger' : '' }}">
            <input class="form-control time2 {{ $errors->has('hours') ? ' has-danger' : '' }}" name="hours"
                type="text" value="{{$data->hours ?? old('hours')}}" required />
            @if ($errors->has('hours'))
            <span id="email-error" class="error text-danger">{{ $errors->first('hours') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-2">
        <label>{{ __('UF') }}</label>
        <div class="form-group{{ $errors->has('hours') ? ' has-danger' : '' }}">
            <input class="form-control time2 {{ $errors->has('hours') ? ' has-danger' : '' }}" name="hours"
                type="text" value="{{$data->hours ?? old('hours')}}" required />
            @if ($errors->has('hours'))
            <span id="email-error" class="error text-danger">{{ $errors->first('hours') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <label>{{ __('Cidade') }}</label>
        <div class="form-group{{ $errors->has('hours') ? ' has-danger' : '' }}">
            <input class="form-control time2 {{ $errors->has('hours') ? ' has-danger' : '' }}" name="hours"
                type="text" value="{{$data->hours ?? old('hours')}}" required />
            @if ($errors->has('hours'))
            <span id="email-error" class="error text-danger">{{ $errors->first('hours') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-3">
        <label>{{ __('CEP') }}</label>
        <div class="form-group{{ $errors->has('hours') ? ' has-danger' : '' }}">
            <input class="form-control time2 {{ $errors->has('hours') ? ' has-danger' : '' }}" name="hours"
                type="text" value="{{$data->hours ?? old('hours')}}" required />
            @if ($errors->has('hours'))
            <span id="email-error" class="error text-danger">{{ $errors->first('hours') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-5">
        <label>{{ __('E-mail') }}</label>
        <div class="form-group{{ $errors->has('hours') ? ' has-danger' : '' }}">
            <input class="form-control time2 {{ $errors->has('hours') ? ' has-danger' : '' }}" name="hours"
                type="text" value="{{$data->hours ?? old('hours')}}" required />
            @if ($errors->has('hours'))
            <span id="email-error" class="error text-danger">{{ $errors->first('hours') }}</span>
            @endif
        </div>
    </div>
</div>
