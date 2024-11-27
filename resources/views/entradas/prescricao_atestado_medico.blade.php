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
            <h3 class="card-title">Atestado Médico</h3>
        </div>
        <!-- form start -->
        <form>
                <!--inicio identificar paciente-->
                <div class="card-body">
                    <div class="form-group" id="seleciona_paciente1">
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
                    <label for="atestado">Dias afastamento</label>
                    <input type="text" class="form-control" id="atestado" placeholder="Quantidade em dias">
                </div>
                <div class="form-group">
                    <label>Observações</label>
                    <textarea class="form-control" rows="5" placeholder="Descrição de um relatório médico"></textarea>
                </div>
            </div>
        </div>
                <!--fim identificar paciente-->
        <div class=" card card-primary">
            <div class="card-header">
                <h3 class="card-title">Dados médico emitente</h3>
            </div>
            <div class="card-body">
                <!--inicio dados medico emitente-->
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
                    <label for="UF_med1">UF</label>
                    <input type="text" class="form-control" id="UF_med" placeholder="Inserir UF">
                </div>
                <div class="form-group">
                    <label for="end_med">Endereço</label>
                    <input type="text" class="form-control" id="end_med" placeholder="Endereço do médico">
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" id="cidade" placeholder="cidade puxado do banco">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" placeholder="telefone puxado do banco">
                </div>
                <div class="form-group">
                    <label for="emissao">Data Emissão</label>
                    <input type="date" class="form-control" id="emissao" placeholder="dia atual default!">
                </div>
                <!--fim dados medico emitente-->
                <div class="form-group">
                    <label>Assintaura Médico</label>
                    <textarea class="form-control" rows="2" placeholder="campo de assinatura eletronica"></textarea>
                </div>
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
