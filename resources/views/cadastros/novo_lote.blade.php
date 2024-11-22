@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Novo Lote')
@section('content_header_title', 'Novo Lote')
@section('content_header_subtitle', 'Cadastrar novo lote')

{{-- Content body: main page content --}}

@section('content_body')
<h2> Cadastrar Novo Lote</h2>
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Novo Lote</h3>
            </div>
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputLote1">Número do Lote</label>
                        <input type="text" class="form-control" id="inputLote1" placeholder="insira o lote do Medicamento">
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
                        <label for="inputqtd1">Quantidade</label>
                        <input type="number" class="form-control" id="inputqtd1" placeholder="insira o lote do Medicamento">
                    </div>
                    <div class="form-group">
                        <label for="inputfactor1">Fator de Embalagem</label>
                        <input type="number" class="form-control" id="inputfactor1" placeholder="Inserir apenas números">
                    </div>
                    <div class="form-group">
                        <label for="inputfab1">Fabricação</label>
                        <input type="date" class="form-control" id="inputfab1" placeholder="insira a validade no formato DD/MM/AAAA">
                    </div>
                    <div class="form-group">
                        <label for="inputval1">Validade</label>
                        <input type="date" class="form-control" id="inputval1" placeholder="insira a validade no formato DD/MM/AAAA">
                    </div>

                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                        <input type="checkbox" class="custom-control-input" id="customSwitch3">
                        <label class="custom-control-label" for="customSwitch3"><p>Bloqueado / Ativo</p></label>
                    </div>
                <div class="form-group">
                    <label>Observações</label>
                    <textarea class="form-control" rows="3" placeholder="Adicione as observações necessárias, obrigatório caso bloqueado"></textarea>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
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
   $(document).ready(function() {
$('.js-example-basic-multiple').select2();
});
</script>
@endpush
