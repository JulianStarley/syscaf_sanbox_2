</form>
@extends('layouts.app')

{{-- Customize layout sections --}}
@push('head')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endpush
@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- Content body: main page content --}}

@section('content_body')
<div class="container">
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Cadastro de Usuário</h3>
    </div>
    <div class="card-body">
        <h2>Dados Básicos</h2>
        <hr>
        <form>
        <div class="form-group">
            <label for="fullName">Nome completo</label>
            <input class="form-control" type="text" placeholder="Nome completo sem abreviações" id="fullName" name="fullName">
            <label for="socialName">Nome Social</label>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Nome completo sem abreviações" id="socialName" name="socialName">
            <div class="form-group">
                <input class="form-check-input ml-1" type="checkbox" id="checkSocialName" name="checkSocialName">
                <div>
                    <label for="checkSocialName" class="ml-4">Utilizar nome social</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input class="form-control" type="number" placeholder="Utilizar apenas números sem pontos (.) ou hifen (-)" id="userPhone" name="userPhone">
            <div class="form-group">
                <input class="form-check-input ml-1" type="checkbox" id="checkEmergency" name="checkEmergency">
                <div>
                    <label for="checkEmergency" class="ml-4">Contato de emergencia</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="usercpf">CPF</label>
            <input class="form-control" type="text" placeholder="use apenas números, sem pontos (.) ou hifen (-)" id="usercpf" name="usercpf">
        </div>
            <div class="form-group">
                <label>Nacionalidade</label>
                <select class="form-control" id="nacionality" name="nacionality">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                </select>
            </div>
            <div class="form-group">
                <label>Naturalidade</label>
                <select class="form-control" id="naturalness" name="naturalness">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                </select>
            </div>
        <h2>Dados Adicionais</h2>
        <hr>
            <div class="form-group">
                <label>Gênero</label>
                <select class="form-control" id="gender" name="gender">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                </select>
            </div>
            <div class="form-group">
                <label>Estado Cívil</label>
                <select class="form-control" id="maritage" name="maritage">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                    <!-- /.card-body -->
                </select>
            </div>
            <div class="form-group">
                <label for="fullAddress">Endereço completo</label>
                <input class="form-control" type="text" placeholder="Endereço completo do usuário" id="fullAddress" name="fullAddress">
            </div>
            <div class="form-group">
                <label>Observações</label>
                <textarea class="form-control" rows="3" placeholder="Insira alguma observação adicional ou importante"></textarea>
            </div>
        <h2>Tipo de Usuário</h2>
        <hr>
            <div class="form-group">
                <label>Tipo de Usuário</label>
                <select class="form-control" id="userType" name="userType">
                    <option>Funcionário</option>
                    <option>Médico</option>
                    <option>Farmacêutico</option>
                    <option>Paciente</option>
                </select>
            </div>
                <div class="form-group">
                    <label for="userFunction">Descrever função</label>
                    <input class="form-control" type="text" placeholder="complete com sua função atual" id="userFunction" name="userFunction">
                </div>
                <div class="form-group">
                    <label for="userDoc">CRM</label>
                    <input class="form-control" type="text" placeholder="complete com seu crm ativo e principal" id="userDoc" name="userDoc">
                </div>
            <div class="input-group">
                <label>Especialidades</label>
                <select id="meuSelect" multiple="multiple" class="form-control" style="width: 300px;">
                    <option value="1">Opção 1</option>
                    <option value="2">Opção 2</option>
                    <option value="3">Opção 3</option>
                    <option value="4">Opção 4</option>
                    <option value="5">Opção 5</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="userSUS">Cartão SUS</label>
                <input class="form-control" type="number" placeholder="complete com sua função atual" id="userSUS" name="userSUS">
            </div>
    </div>
<!-- /.card -->
</div>
<!-- /.container -->
</div>
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

{{--
<link rel="stylesheet" href="/css/admin_custom.css"> --}}
{{-- CSS select2 --}}

@endpush

{{-- Push extra scripts --}}

@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    // Initialize Select2 on the select element
    $('#meuSelect').select2({
        placeholder: 'Selecione uma ou mais especialidades',
        allowClear: true,
        width: '100%',
        
    });
});
</script>
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@endpush
