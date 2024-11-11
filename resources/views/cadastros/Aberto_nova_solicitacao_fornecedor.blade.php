@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Nova solicitação fornecedor')
@section('content_header_title', 'Nova solicitação compra')
@section('content_header_subtitle', 'Cadastrar nova requisição compra')

{{-- Content body: main page content --}}

@section('content_body')
<h2> Cadastrar Nova Requisição Fornecedor</h2>
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Novo solicitação</h3>
            </div>
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputSol1">Número da solicitação</label>
                        <input type="number" class="form-control" id="inputSol1" placeholder="(gerado automaticamente, identificador de transação)" disabled>
                    </div>
                    <div class="form-group">
                        <label>Escolha o fornecedor</label>
                        <select class="form-control">
                            <option>Med A </option>
                            <option>Med B</option>
                            <option>Med C</option>
                            <option>Med D</option>
                            <option>Med E</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Escolha o farmacêutico responsável</label>
                        <select class="form-control">
                            <option>Med A </option>
                            <option>Med B</option>
                            <option>Med C</option>
                            <option>Med D</option>
                            <option>Med E</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Escolha o medicamento</label>
                        <select class="form-control">
                            <option>Med A </option>
                            <option>Med B</option>
                            <option>Med C</option>
                            <option>Med D</option>
                            <option>Med E</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputfactor2">Fator de Embalagem</label>
                        <input type="number" class="form-control" id="inputfactor2" placeholder="(preenchido automaticamento ao escolher o medicamento)">
                    </div>
                    <div class="form-group">
                        <label for="inputqtd2">Quantidade solicitada</label>
                        <input type="number" class="form-control" id="inputqtd2" placeholder="Insira quantidade desejada">
                    </div>
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                        <input type="checkbox" class="custom-control-input" id="customSwitch3">
                        <label class="custom-control-label" for="customSwitch3">Bloqueado / Ativo</label>
                    </div>
                <div class="form-group">
                    <label>Observações</label>
                    <textarea class="form-control" rows="3" placeholder="Adicione as observações necessárias, obrigatório caso bloqueado"></textarea>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Solicitar</button>
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

</script>
@endpush
