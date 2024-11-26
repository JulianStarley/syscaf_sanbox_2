@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Novo Medicamento')
@section('content_header_title', 'Novo Medicamento')
@section('content_header_subtitle', 'Novo Medicamentox')

{{-- Content body: main page content --}}

@section('content_body')
<h2> Cadastrar Novo Medicamento</h2>
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Novo Medicamento</h3>
            </div>
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nome1">Nome medicamento</label>
                        <input type="text" class="form-control" id="nome1" placeholder="Adicione nome completo do Medicamento">
                    </div>
                    <div class="form-group">
                        <label for="cod1">Código do medicamento</label>
                        <input type="text" class="form-control" id="cod1" placeholder="atribua um código ao medicamento">
                    </div>
                    <!-- Select multiple-->
                    <div class="form-group">
                        <label>Forma Farmacêutica</label>
                        <select class="form-control">
                            <option>Adesivos</option>
                            <option>Aerossol</option>
                            <option>Cápsula</option>
                            <option>Comprimido</option>
                            <option>Comprimidos sublinguais</option>
                            <option>Comprimido vaginal</option>
                            <option>Cremes</option>
                            <option>Creme vaginal</option>
                            <option>Drágea</option>
                            <option>Enema</option>
                            <option>Gel</option>
                            <option>Gotas</option>
                            <option>Gota nasal</option>
                            <option>Gota otológica</option>
                            <option>Loção</option>
                            <option>Óvulos</option>
                            <option>Pastilha</option>
                            <option>Pomadas</option>
                            <option>Pomada auricular</option>
                            <option>Pomada vaginal</option>
                            <option>Pós para reconstituição</option>
                            <option>Solução oral</option>
                            <option>Solução tópica</option>
                            <option>Solução inalante</option>
                            <option>Spray</option>
                            <option>Supositórios</option>
                            <option>Suspensões</option>
                            <option>Xarope</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="con1">Concentração</label>
                        <input type="text" class="form-control" id="con1" placeholder="Indique a concentração do item">
                    </div>
                    <div class="form-group">
                        <label>Cor da Tarja</label>
                        <select class="form-control">
                            <option>Sem tarja</option>
                            <option>Vermelha</option>
                            <option>Vermelha sob restrição</option>
                            <option>Preta</option>
                            <option>Cor X E</option>
                        </select>
                    </div>
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                        <input type="checkbox" class="custom-control-input" id="customSwitch3">
                        <label class="custom-control-label" for="customSwitch3">Bloqueado / Ativo</label>
                    </div>

                <div class="form-group">
                    <label>Observações</label>
                    <textarea class="form-control" rows="3" placeholder="Adicione as observações necessárias"></textarea>
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
