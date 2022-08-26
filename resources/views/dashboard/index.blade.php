@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="row p-2">
    <div class="col-sm-6">
        <h1 class="h5">
            Fornecedores 
            <small class="text-muted ">(Painel de Controle)</small>
        </h1>
    </div>
    
    <div class="col-sm-6">
        <div class="float-sm-right">
            <a href={{route('provider.create')}}>
                <button type="button" class="btn btn-block btn-success btn-sm"><i class="fa fa-plus fa-fw mr-1"></i>Cadastrar</button>
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DataTable with minimal features &amp; hover style</h3>
            </div>
            
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Razão Social/Nome: activate to sort column descending" aria-sort="ascending">Razão Social/Nome</th>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nome Fantasia/Apelido: activate to sort column descending" aria-sort="ascending">Nome Fantasia/Apelido</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nome Fantasia/Apelido: activate to sort column ascending">CNPJ/CPF</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Ativo: activate to sort column ascending">Ativo</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Ação: activate to sort column ascending">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>                
                                    <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                        <td class="">Mozilla 1.0</td>
                                        <td class="">Win 95+ / OSX.1+</td>
                                        <td class="">Win 95+ / OSX.1+</td>
                                        <td class="">Win 95+ / OSX.1+</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                        <td class="">Mozilla 1.1</td>
                                        <td class="">Win 95+ / OSX.1+</td>
                                        <td class="">Win 95+ / OSX.1+</td>
                                        <td class="">Win 95+ / OSX.1+</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">Razão Social/Nome</th>
                                        <th rowspan="1" colspan="1">Nome Fantasia/Apelido</th>
                                        <th rowspan="1" colspan="1">CNPJ/CPF</th>
                                        <th rowspan="1" colspan="1">Ativo</th>
                                        <th rowspan="1" colspan="1">Ação</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                                Showing 1 to 10 of 57 entries
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="example2_previous">
                                        <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">
                                            Previous
                                        </a>
                                    </li>
                                    <li class="paginate_button page-item next" id="example2_next">
                                        <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">
                                            Next
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="../css/app.css">
@stop
