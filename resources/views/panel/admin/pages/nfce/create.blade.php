@extends('panel.admin.layouts.app', ['activePage' => 'admin.nfce'])
@section('title', 'Emitir NF-e')
@section('content')
<div class="content-wrapper" style="min-height: 255px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Emitir NF-e</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('panel.admin.includes.alerts')
                    <div class="card card-primary">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Emitir NF-e</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('panel.admin.pages.nfce._form.form')
                        </div>
                        <div class="card-footer">
                            <button type="button" data-toggle="modal" data-target="#nfe"
                                class="btn btn-lg btn-primary">Emitir NF-e</button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

{{-- modal --}}
<div class="modal fade" id="nfe" tabindex="-1" role="dialog" aria-labelledby="nfe" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalLabel">
                    Escolha o tipo da Nf-e (CFOP)
                </h5>
            </div>
            <div class="modal-body">
                <form action="" class="navbar-form" method="post">
                    @csrf
                    @method('post')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>{{ __('Selecione') }}</label>
                                <div class="form-group">
                                    {!! Form::select('cfop', [
                                    '5915' => '5915',
                                    '6915' => '6915',
                                    '5102' => '5102'
                                    ], old('cfop'), ['class'=>'form-control']) !!}
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-info">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection