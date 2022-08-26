@extends('adminlte::page')
@section('title', 'Fornecedor')
@section('content')
    <section class='container p-2'>
        <h1 class='h5'>
            Fornecedor
            <small class='text-muted'>(criar)</small>
        </h1>
    </section>
    <section class='container'>
        <form action=' {{ route('provider.store') }}' method='post'>
            @csrf
                <div class='card card-default'>
                    <div class='card-header'>
                        <h3 class='card-title'>Dados do Fornecedor</h3>
                        <div class='card-tools'>
                            <button type='button' class='btn btn-tool' data-card-widget='collapse'>
                                <i class='fas fa-minus'></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class='card-body' style='display: block;'>
                            <div class='col-md-12' >
                                <div class='form-group' >
                                        <label for='pjperson' class='align-middle' style='cursor:pointer'>
                                            <input type='radio' id='pjperson' name='typeperson' checked='checked' class='typeperson' value='pj'>
                                            <small class='font-weight-bold'>Pessoa Jurídica</small>
                                        </label>
                                    
                                        <label for='pfperson' class='align-middle' style='cursor:pointer'>
                                            <input type='radio' id='pfperson' name='typeperson' class='typeperson' value='pf'>
                                            <small class='font-weight-bold'>Pessoa Física</small>
                                        </label>
                                </div>
                            </div>
                            <div class='row box-pj'>
                                <div class='col-md-3'>
                                    <div class='form-group'>
                                        <label for='cnpj'><small class='font-weight-bold'>CPNJ</small><span class='text-danger'>*</span></label>
                                        <input id='cnpj' class='form-control form-control-sm' type='text' placeholder=''>
                                    </div>
                                    <div class='form-group'>
                                        <label for='ie-indicator'><small class='font-weight-bold'>Indicador de Inscrição Estadual</small><span class='text-danger'>*</span></label>
                                        <select id='ie-indicator' name='ie_indicator' class='form-control form-control-sm'>
                                            <option value=''>Selecione</option>
                                            <option value='contribuinte'>Contribuinte</option>
                                            <option value='contribuinte_isento'>Contribuinte Isento</option>
                                            <option value='nao_contribuinte'>Não Contribuinte</option>
                                        </select>
                                    </div>
                                    <div class='form-group'>
                                        <label for='retreat'><small class='font-weight-bold'>Recolhimento</small><span class='text-danger'>*</span></label>
                                        <select id='retreat' name='retreat' class='form-control form-control-sm'>
                                            <option value=''>Selecione</option>
                                            <option value='1'>A Recolher pelo Prestador</option>
                                            <option value='2'>Retido pelo Tomador</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='form-group'>
                                        <label for='razao'><small class='font-weight-bold'>Razão Social</small><span class='text-danger'>*</span></label>
                                        <input id='razao' name='nameprovider' class='form-control form-control-sm' type='text' placeholder=''>
                                    </div>
                                    <div class='form-group'>
                                        <label for='ie-code'><small class='font-weight-bold'>Inscrição Estadual</small></label>
                                        <input id='ie-code' name='ie_code' class='form-control form-control-sm' type='text'>
                                    </div>
                                    <div class='form-group col-md-6'>
                                        <label for='retreat'><small class='font-weight-bold'>Ativo</small><span class='text-danger'>*</span></label>
                                        <select id='retreat' name='provider_active' class='form-control form-control-sm'>
                                            <option value=''>Selecione</option>
                                            <option value='0'>Não</option>
                                            <option value='1'>Sim</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class='form-group'>
                                        <label for='name-fantasy'><small class='font-weight-bold'>Nome Fantasia</small><span class='text-danger'>*</span></label>
                                        <input id='name-fantasy' name='alias_fantasy' class='form-control form-control-sm' type='text' placeholder=''>
                                    </div>
                                    <div class='form-group'>
                                        <label for='cnpj_state'><small class='font-weight-bold'>Situação CNPJ</small></label>
                                        <input id='cnpj_state' name='cnpj_state' class='form-control form-control-sm' type='text' readonly>
                                    </div>
                                </div>
                            </div>

                            <div class='row box-pf box-disabled'>
                                <div class='col-md-3'>
                                    <div class='form-group'>
                                        <label for='cpf'><small class='font-weight-bold'>CPF</small><span class='text-danger'>*</span></label>
                                        <input id='cpf' name='cnpjcpf' class='form-control form-control-sm' type='text' placeholder='' disabled>
                                    </div>
                                    <div class='form-group'>
                                        <label for='rg'><small class='font-weight-bold'>RG</small><span class='text-danger'>*</span></label>
                                        <input id='rg' name='rg' class='form-control form-control-sm' type='text' placeholder='' disabled>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='form-group'>
                                        <label for='name'><small class='font-weight-bold'>Nome</small><span class='text-danger'>*</span></label>
                                        <input id='name' name='nameprovider' class='form-control form-control-sm' type='text' placeholder='' disabled>
                                    </div>
                                    <div class='form-group col-md-6'>
                                        <label for='providerpf_active'><small class='font-weight-bold'>Ativo</small><span class='text-danger'>*</span></label>
                                        <select id='providerpf_active' name='provider_active' class='form-control form-control-sm' disabled>
                                            <option value=''>Selecione</option>
                                            <option value='0'>Não</option>
                                            <option value='1'>Sim</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class='form-group'>
                                        <label for='name-fantasy'><small class='font-weight-bold'>Apelido</small></label>
                                        <input id='name-fantasy' name='alias_fantasy' class='form-control form-control-sm' type='text' placeholder='' disabled>
                                    </div>
                                </div>
                            </div>          
                    </div>
                </div>

                <div class='card card-default'>
                    <div class='card-header'>
                        <h3 class='card-title'>Contato Principal</h3>
                        <div class='card-tools'>
                            <button type='button' class='btn btn-tool' data-card-widget='collapse'>
                                <i class='fas fa-minus'></i>
                            </button>
                        </div>
                    </div>
                    <div class='card-body' style='display: block;'>
                        <div class='row'>
                            <div class='col-md-6' id="box-tel-principal">
                                <div class='row item-tel-principal'>
                                    <div class='col-md-6'>
                                    
                                            <label><small class='font-weight-bold'>Telefone</small><span class='text-danger'>*</span></label>
                                            <input type='text' class='form-control form-control-sm' name='contact_principal[0][tel][0][number]'>
                                    </div>
                                    <div class='col-md-6'>
                                            <label ><small class='font-weight-bold'>Tipo</small><span class='text-danger'>*</span></label>
                                            <select  class='form-control form-control-sm' name='contact_principal[0][tel][0][type]'>
                                                <option value=''>Selecione</option>
                                                <option value='residencial'>Residencial</option>
                                                <option value='comercial'>Comercial</option>
                                                <option value='celular'>Celular</option>
                                            </select>
                                    </div>
                                    <div class="col-md-6">
                                        <a href='javascript:void(0)' onclick='addInputTelContact("item-tel-principal","contact_principal","box-tel-principal",0)' class='btn btn-secondary btn-sm mt-2'> 
                                            <small class='font-weight-bold'>
                                                Adicionar
                                            </small>                    
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-6' id="box-email-principal">
                                <div class='row item-email-principal'>
                                    <div class='col-md-6'>
                                    
                                            <label ><small class='font-weight-bold'>Email</small><span class='text-danger'>*</span></label>
                                            <input type='text' class='form-control form-control-sm' name='contact_principal[0][email][0][address]'>
                                    </div>
                                    <div class='col-md-6'>
                                            <label for='email-type-0'><small class='font-weight-bold'>Tipo</small><span class='text-danger'>*</span></label>
                                            <select  id='email-type-0' class='form-control form-control-sm' name='contact_principal[0][email][0][type]'>
                                                <option value=''>Selecione</option>
                                                <option value='residencial'>Residencial</option>
                                                <option value='comercial'>Comercial</option>
                                                <option value='outro'>Outro</option>
                                            </select>
                                    </div>
                                    <div class="col-md-6">
                                        <a href='javascript:void(0)' onclick='addInputEmailContact("item-email-principal","contact_principal","box-email-principal",0)' class='btn btn-secondary btn-sm mt-2'>
                                            <small class='font-weight-bold'>
                                                Adicionar
                                            </small>                    
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                </div>
                
                <div class='row p-2 d-flex justify-content-end'>
                    <a href='javascript:void(0)' onclick='addExtraContact()' class='btn btn-success btn-sm'> 
                        <small class='font-weight-bold'>
                            Adicionar
                        </small>                    
                    </a>
                </div>

                <div class='card card-default'>

                    <div class='card-header '>
                        <h3 class='card-title mr-2'>Contatos Adicionais</h3>
                        <div class='card-tools'>
                            <button type='button' class='btn btn-tool' data-card-widget='collapse'>
                                <i class='fas fa-minus'></i>
                            </button>
                        </div>
                    </div>
                    <div class='card-body card_adicional' style='display: block;'>
                        Não há contatos adicionais
                    </div>
                </div>

                <div class='card card-default'>
                    <div class='card-header '>
                        <h3 class='card-title mr-2'>Dados de Endereço</h3>
                        <div class='card-tools'>
                            <button type='button' class='btn btn-tool' data-card-widget='collapse'>
                                <i class='fas fa-minus'></i>
                            </button>
                        </div>
                    </div>
                    <div class='card-body' style='display: block;'>
                            <div class='row'>
                                <div class='col-md-3'>
                                    <div class='form-group'>

                                        <label for='zipcode '><small class='font-weight-bold'>CEP</small><span class='text-danger'>*</span></label>
                                        <input type='text' class='form-control form-control-sm' id='zipcode' name='zipcode'>
                                        
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class='form-group'>
                                        <label for='street'><small class='font-weight-bold'>Logradouro</small><span class='text-danger'>*</span></label>
                                        <input type='text' class='form-control form-control-sm' id='street' name='street'>
                                    </div>
                                </div>
                        
                                <div class='col-md-3'>
                                    <div class='form-group'>
                                        <label for='number_street'><small class='font-weight-bold'>Número</small><span class='text-danger'>*</span></label>
                                        <input type='text' class='form-control form-control-sm' id='number_street' name='number_street'>
                                    
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class='form-group'>
                                        <label for='complement'><small class='font-weight-bold'>Complemento</small></label>
                                        <input type='text' class='form-control form-control-sm' id='complement' name='complement'>
                                    </div>
                                </div>
                            </div>          
                            <div class='row'>
                                <div class='col-md-3'>
                                    <div class='form-group'>
                                        <label for='district'><small class='font-weight-bold'>Bairro</small><span class='text-danger'>*</span></label>
                                        <input type='text' class='form-control form-control-sm' id='district' name='district'>
                                        
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class='form-group'>
                                        <label for='reference'><small class='font-weight-bold'>Ponto de Referência</small></label>
                                        <input type='text' class='form-control form-control-sm' id='reference' name='reference'>
                                    </div>
                                </div>
                        
                                <div class='col-md-3'>
                                    <div class='form-group'>
                                        <label for='uf'><small class='font-weight-bold'>UF</small><span class='text-danger'>*</span></label>
                                        <select class='form-control select2 form-control-sm' style='width: 100%;' id='uf' name='uf'>
                                            <option value=''>Selecione</option>
                                            <option value=''>a</option>
                                            <option value=''>b</option>
                                            <option value=''>c</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class='form-group'>
                                        <label for='city'><small class='font-weight-bold'>Cidade</small><span class='text-danger'>*</span></label>
                                        <select class='form-control select2 form-control-sm' style='width: 100%;' id='city' name='city'>
                                            <option value=''>Selecione</option>
                                            <option value=''>a</option>
                                            <option value=''>b</option>
                                            <option value=''>c</option>
                                        </select>
                                    </div>
                                </div>
                            </div>     
                            <div class='row'>
                                <div class='col-md-3'>
                                    <div class='form-group'>
                                        <label for='email-type-0'><small class='font-weight-bold'>Condomínio</small><span class='text-danger'>*</span></label>
                                        <select class='form-control ' style='width: 100%;' name='condominium'>
                                            <option value=''>Selecione</option>
                                            <option value='0'>Não</option>
                                            <option value='1'>Sim</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </div>     
                </div>
                <div class='card card-default'>
                    <div class='card-header '>
                        <h3 class='card-title mr-2'>Observação</h3>
                        <div class='card-tools'>
                            <button type='button' class='btn btn-tool' data-card-widget='collapse'>
                                <i class='fas fa-minus'></i>
                            </button>
                        </div>
                    </div>
                    <div class='card-body' style='display: block;'>
                        <textarea id='editor' name='observation'></textarea>
                    </div>
                </div>
                <div class='d-flex justify-content-end'>
                    <button type='submit' class='btn btn-success btn-lg'>Cadastrar</button>
                </div>
        </form>
    </section>
@stop
