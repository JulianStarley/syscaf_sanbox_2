@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Perfil Usuário')
@section('content_header_title', 'Perfis')
@section('content_header_subtitle', 'Perfil')

{{-- Content body: main page content --}}

@section('content_body')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Perfil Usuário</h3>
                </div>
                <div class="card-body">
                    <p>Foto<span></span></p>
                    <p>Email<span></span></p>
                    <p>Nome<span></span></p>
                    <p>Sobrenome<span></span></p>
                    <p>Data Nascimento<span></span></p>
                    <p>Telefone<span></span></p>
                    <p>Pais<span></span></p>
                    <p>Cidade<span></span></p>
                    <p>Gênero<span></span></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Informações Usuário</h3>
                </div>
                <div class="card-body">
                    <p>Status <span></span></p>
                    <p>Usuário<span></span></p>
                    <p>Tipo usuário<span></span></p>
                    <p>Registrado desde<span></span></p>
                    <p>Registrado por<span></span></p>
                    <p>Último acesso<span></span></p>
                </div>
            </div>
        </div>

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
