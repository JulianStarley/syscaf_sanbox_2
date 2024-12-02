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
                    {{-- foto perfil --}}
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{ asset('../../dist/img/perfilteste.png') }}"
                                alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">Nome{{-- $user->name --}}</h3>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Email</b> <span class="float-right">{{-- $user->email --}}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Data Nascimento</b> <span class="float-right">{{-- $user->birth_date --}}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Telefone</b> <span class="float-right">{{-- $user->phone --}}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Pais</b> <span class="float-right">{{-- $user->country --}}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Cidade</b> <span class="float-right">{{-- $user->city --}}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Gênero</b> <span class="float-right">{{-- $user->gender --}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Informações Usuário</h3>
                </div>
                <div class="card-body">
                    <div class="card-body box-profile">
                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Status</b> <span class="float-right">{{-- $user->status --}}</span>
                        </li>
                        <li class="list-group-item">
                            <b>Usuário</b> <span class="float-right">{{-- $user->username --}}</span>
                        </li>
                        <li class="list-group-item">
                            <b>Tipo usuário</b> <span class="float-right">{{-- $user->type --}}</span>
                        </li>
                        <li class="list-group-item">
                            <b>Registrado desde</b> <span class="float-right">{{-- $user->created_at --}}</span>
                        </li>
                        <li class="list-group-item">
                            <b>Registrado por</b> <span class="float-right">{{-- $user->created_by --}}</span>
                        </li>
                        <li class="list-group-item">
                            <b>Último acesso</b> <span class="float-right">{{-- $user->last_login --}}</span>
                        </li>
                    </ul>
                    </div>
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
