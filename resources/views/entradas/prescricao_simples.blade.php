@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Prescrição simples')
@section('content_header_title', 'Prescrições')
@section('content_header_subtitle', 'Prescrição Simples')

{{-- Content body: main page content --}}

@section('content_body')
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Prescrição Simples</h3>
        </div>
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group" id="seleciona_paciente">
                    <label>Escolha o tipo de prescrição</label>
                    <select class="form-control">
                        <option>Relatório Médico</option>
                        <option>Receituário simples</option>
                        <option>Receituário controle especial</option>
                        <option>Receituário antimicrobiano</option>
                        <option>Atestado médico</option>
                    </select>
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
                    <label for="CNES">CNES</label>
                    <input type="text" class="form-control" id="CNES" placeholder="CNES puxado do banco">
                </div>
                <div class="form-group">
                    <label for="emissao">Data Prescrição</label>
                    <input type="date" class="form-control" id="emissao" placeholder="dia atual default!">
                </div>
                <div class="form-group" id="seleciona_administracao">
                    <label>Via de Administração</label>
                    <select class="form-control">
                        <option>Via Oral</option>
                        <option>Via Tópica</option>
                        <option>Via Endovenosa</option>
                        <option>Via Intramuscular</option>
                        <option>Via Subcutânea</option>
                        <option>Via Intratecal</option>
                        <option>Via Inalatória</option>
                    </select>
                </div>
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
                    <label>Posologia e orientações de uso</label>
                    <textarea class="form-control" rows="3" placeholder="Descreva o tratamento em detalhes"></textarea>
                </div>
                <div class="form-group" display="none">
                    <label>Relatório Médico</label>
                    <textarea class="form-control" rows="5" placeholder="Descrição de um relatório médico"></textarea>
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
