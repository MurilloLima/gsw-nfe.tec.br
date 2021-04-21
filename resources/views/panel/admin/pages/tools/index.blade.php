@extends('panel.admin.layouts.app', ['activePage' => 'admin.tools'])
@section('title', 'Configurações')
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
                        <li class="breadcrumb-item active">Configurações</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    @include('panel.admin.includes.alerts')
                    <div class="card card-primary">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Configurações</h3>
                            </div>
                        </div>
                        <form action="{{ route('admin.tools.update') }}" method="post">
                            @method('post')
                            @csrf
                            <div class="card-body">
                                @include('panel.admin.pages.tools._form.form')
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Gravar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div><!-- /.container-fluid -->

@endsection