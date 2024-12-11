@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Novo Lote')
@section('content_header_title', 'Novo Lote')
@section('content_header_subtitle', 'Cadastrar novo lote')

{{-- Content body: main page content --}}

@section('content_body')
<h2> Cadastrar Novo Lote</h2>
    <div class="col-md-6">
        <x-adminlte.widget.card title="Novo Lote" header-class="bg-primary">
            <form>
                    <div class="form-group">
                        <x-adminlte.form.select name="selBasic" label="Escolha o medicamento">
                            <option>Med A </option>
                            <option>Med B</option>
                            <option>Med C</option>
                            <option>Med D</option>
                            <option>Med E</option>
                        </x-adminlte.form.select>
                    </div>
                    <div class="form-group">
                        <x-adminlte.form.input name="iNumber" type="number" id="qtdLote" label="Quantidade" placeholder="Insira a quantidade de Medicamentos dentro do lote" disable-feedback />
                    </div>
                    <div class="form-group">
                        <x-adminlte.form.input name="iNumber" type="number" id="qtdFatorEmbalagem" label="Fator de embalagem" placeholder="Insira a quantidade do item, exemplo: blister com 10 unidades, fator de embalagem = 10!" disable-feedback />
                    </div>
                    <div class="form-group">
                    @section('plugins.TempusDominusBs4', true)
                        @php
                            $config = [
                                'format' => 'DD-MM-YYYY',
                            ];
                        @endphp
                        <x-adminlte-input-date name="idSizeMd" label="Fabricação" igroup-size="md" :config="$config" placeholder="Insira a data de fabricação">
                            <x-slot name="appendSlot">
                                <div class="input-group-text bg-blue">
                                    <i class="fas fa-calendar-day"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                    </div>
                    <div class="form-group">
                    @section('plugins.TempusDominusBs4', true)
                        @php
                            $config = [
                            'format' => 'DD-MM-YYYY',
                            ];
                        @endphp
                        <x-adminlte-input-date name="idSizeSm" label="Vencimento" igroup-size="md" :config="$config" placeholder="Insira a data de vencimento">
                            <x-slot name="appendSlot">
                                <div class="input-group-text bg-blue">
                                    <i class="fas fa-calendar-day"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                    </div>

                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                        <input type="checkbox" class="custom-control-input" id="customSwitch3">
                        <label class="custom-control-label" for="customSwitch3"><p>Bloqueado / Ativo</p></label>
                    </div>
                <div class="form-group">
                    <x-adminlte.form.textarea name="taBasic" placeholder="Inserir informações adicionais em detalhes" label="Observações" />
                </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </x-adminlte-widget.card>
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
