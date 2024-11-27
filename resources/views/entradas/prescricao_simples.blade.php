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
            <!--inicio identificao paciente-->
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
                <!--fim identificao paciente-->
                <div class="form-group">
                    <label>Prescrição</label>
                    <textarea class="form-control" rows="8" placeholder="Descreva o tratamento em detalhes"></textarea>
                </div>
                <!--inicio identificao medico-->
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
