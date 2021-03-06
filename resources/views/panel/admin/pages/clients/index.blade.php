@extends('panel.admin.layouts.app', ['activePage' => 'admin.clients'])
@section('title', 'Clientes')
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
                        <li class="breadcrumb-item active">Clientes</li>
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
                <div class="col-lg-12">
                    @include('panel.admin.includes.alerts')
                    <div class="row">
                        <div class="col-md-12 text-right" style="margin-bottom: 10px;">
                            <a href="{{ route('admin.client.create') }}" class="btn btn-primary">
                                Adicionar
                            </a>
                        </div>
                    </div>
                    <div class="card card-primary">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Clientes</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th>CPF/CNPJ</th>
                                            <th>Cidade/UF</th>
                                            <th></th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data as $item)
                                        <tr>
                                            <td><a href="">{{$item->id}}</a></td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->cpf}}{{$item->cnpj}}</td>
                                            <td>{{$item->cidade}}/{{$item->uf}}</td>
                                            <td>{{$item->uni_medida}}</td>
                                            <td>
                                                <a href="{{ route('admin.client.edit', ['id'=>$item->id]) }}"
                                                    class="btn btn-xs btn-default" title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="{{ route('admin.client.delete', ['id'=>$item->id]) }}"
                                                    class="btn btn-xs btn-default" title="Deletar">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Nenhum encontrado no momento!</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                <div class="d-flex flex-row justify-content-end">
                                    {{ $data->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection