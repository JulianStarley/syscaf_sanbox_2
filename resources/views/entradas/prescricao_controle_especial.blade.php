@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Controle especial ')
@section('content_header_title', 'Prescrições')
@section('content_header_subtitle', 'Controle especial')

{{-- Content body: main page content --}}

@section('content_body')
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Controle Especial</h3>
        </div>
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group" id="seleciona_medico">
                    <label>Nome do Médico Prescritor</label>
                    <select class="form-control">
                        <option>Medico 1 + CRM</option>
                        <option>Medico 2 + CRM</option>
                        <option>Medico 3 + CRM</option>
                        <option>Medico 4 + CRM</option>
                        <option>Medico 5 + CRM</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="UF_med">UF</label>
                    <input type="text" class="form-control" id="UF_med" placeholder="Inserir UF">
                </div>
                <div class="form-group">
                    <label for="end_med">Endereço completo</label>
                    <input type="text" class="form-control" id="end_med" placeholder="Inserir UF">
                </div>
                <div class="form-group">
                    <label for="cidade_med">Cidade</label>
                    <input type="text" class="form-control" id="cidade_med" placeholder="Inserir UF">
                </div>
                <div class="form-group">
                    <label for="tel_med">Telefone</label>
                    <input type="text" class="form-control" id="tel_med" placeholder="Inserir UF">
                </div>
                <div class="form-group" id="seleciona_paciente">
                    <label>Nome do Paciente</label>
                    <select class="form-control">
                        <option>Paciente 1</option>
                        <option>Paciente 2</option>
                        <option>Paciente 3</option>
                        <option>Paciente 4</option>
                        <option>Paciente 5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="end_paciente">Endereço paciente</label>
                    <input type="text" class="form-control" id="end_paciente" placeholder="Inserir UF">
                </div>
                <div class="form-group">
                    <label for="emissao">Data Prescrição</label>
                    <input type="date" class="form-control" id="emissao" placeholder="dia atual default!">
                </div>
                <div class="form-group">
                    <label>Prescrição</label>
                    <textarea class="form-control" rows="5" placeholder="Descrição em detalhes"></textarea>
                </div>
                <!-- identificação do comprador-->
                <div class="form-group">
                    <div class="form-group">
                        <label for="nome_comprador">Nome completo comprador</label>
                        <input type="text" class="form-control" id="nome_comprador" placeholder="Inserir Nome completo comprador ou recebedor">
                    </div>
                    <div class="form-group">
                        <label for="rg_comprador">RG comprador</label>
                        <input type="text" class="form-control" id="rg_comprador" placeholder="Inserir RG recebedor">
                    </div>
                    <div class="form-group">
                        <label for="ssp_comprador">Orgão emissor</label>
                        <input type="text" class="form-control" id="ssp_comprador" placeholder="Inserir ssp recebedor">
                    </div>
                    <div class="form-group">
                        <label for="end_comprador">Endereço completo comprador</label>
                        <input type="text" class="form-control" id="rg_comprador" placeholder="Inserir endereço recebedor">
                    </div>
                    <div class="form-group">
                        <label for="cidade_comprador">Cidade comprador</label>
                        <input type="text" class="form-control" id="cidade_comprador" placeholder="Inserir cidade recebedor">
                    </div>
                    <div class="form-group">
                        <label for="telefone_comprador">telefone comprador</label>
                        <input type="text" class="form-control" id="telefone_comprador" placeholder="Inserir telefone recebedor">
                    </div>
                </div>
                <!--fim identificação comprador-->
                <!--inicio identificação farmaceutico-->
                <div class="form-group">
                    <div class="form-group">
                        <label for="nome_farma">Nome farmaceutico</label>
                        <input type="text" class="form-control" id="nome_farma" placeholder="Inserir nome completo farmaceutico">
                    </div>
                    <div class="form-group">
                        <label for="crf_farma">CRF</label>
                        <input type="text" class="form-control" id="crf_farma" placeholder="Inserir crf">
                    </div>
                    <div class="form-group">
                        <label for="local_farma">Nome farmacia ou unidade</label>
                        <input type="text" class="form-control" id="local_farma" placeholder="Inserir local da dispensação">
                    </div>
                    <div class="form-group">
                        <label for="end_farma">Endereço unidade</label>
                        <input type="text" class="form-control" id="end_farma" placeholder="Inserir endereço farmacia">
                    </div>
                    <div class="form-group">
                        <label for="cidade_farma">Cidade farmacia</label>
                        <input type="text" class="form-control" id="cidade_farma" placeholder="Inserir cidade dispensa">
                    </div>
                    <div class="form-group">
                        <label for="uf_farma">UF farmacia</label>
                        <input type="text" class="form-control" id="uf_farma" placeholder="Inserir uf farmacia">
                    </div>
                    <div class="form-group">
                        <label for="cnpj_farma">cnpj</label>
                        <input type="text" class="form-control" id="cnpj_farma" placeholder="Inserir cnpj farmacia">
                    </div>
                    <div class="form-group">
                        <label for="telefone_farma">Telefone farmacia</label>
                        <input type="text" class="form-control" id="telefone_farma" placeholder="Inserir telefone farmacia">
                    </div>
                </div>
                <!--fim identificação farmaceutico-->
                <!--inicio dispensação-->
                <div class="form-group">
                    <div class="form-group" id="seleciona_administracao">
                        <label>Nome medicamento</label>
                        <select class="form-control">
                            <option>Med1 + concentracao + forma farmaceutica </option>
                            <option>Med2 + concentracao + forma farmaceutica</option>
                            <option>Med3 + concentracao + forma farmaceutica</option>
                            <option>Med4 + concentracao + forma farmaceutica</option>
                            <option>Med5 + concentracao + forma farmaceutica</option>
                            <option>Med6 + concentracao + forma farmaceutica</option>
                            <option>Med7 + concentracao + forma farmaceutica</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lote_med">Lote medicamento</label>
                        <input type="text" class="form-control" id="lote_med" placeholder="Inserir numero lote">
                    </div>
                    <div class="form-group">
                        <label for="caixas_med">Quantidade em caixas</label>
                        <input type="number" class="form-control" id="caixas_med" placeholder="Inserir caixas dispensadas">
                    </div>
                    <div class="form-group">
                        <label for="registro_med">Registro receituario</label>
                        <input type="number" class="form-control" id="registro_med" placeholder="Inserir registro receituario (se medicamento manipulado)">
                    </div>
                </div>
                <!--fim dispensação-->
                <!--inicio intercambio dispensação-->
                <div class="form_group">
                    <div class="row">
                        <p> o medicamento -
                           <select class="form-control">
                            <option>Med1 + concentracao + forma farmaceutica </option>
                            <option>Med2 + concentracao + forma farmaceutica</option>
                            <option>Med3 + concentracao + forma farmaceutica</option>
                            <option>Med4 + concentracao + forma farmaceutica</option>
                            <option>Med5 + concentracao + forma farmaceutica</option>
                            <option>Med6 + concentracao + forma farmaceutica</option>
                            <option>Med7 + concentracao + forma farmaceutica</option>
                        </select>
                        </p>
                        <p> foi substituido pelo Genérico -
                            <select class="form-control">
                                <option>Med1 + concentracao + forma farmaceutica </option>
                                <option>Med2 + concentracao + forma farmaceutica</option>
                                <option>Med3 + concentracao + forma farmaceutica</option>
                                <option>Med4 + concentracao + forma farmaceutica</option>
                                <option>Med5 + concentracao + forma farmaceutica</option>
                                <option>Med6 + concentracao + forma farmaceutica</option>
                                <option>Med7 + concentracao + forma farmaceutica</option>
                            </select>
                        </p>
                        <p> de acordo com a lei 9787/99.</p>
                    </div>
                </div>
                <!--fim intercambio dispensação-->
            </div>
        </form>
    </div>
</div>
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}
{{--
<link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@endpush
