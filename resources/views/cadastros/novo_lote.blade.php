@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'Novo Lote')
@section('content_header_title', 'Novo Lote')
@section('content_header_subtitle', 'Cadastrar novo lote')

{{-- Content body: main page content --}}

@section('content_body')
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
                   <div class="form-switch form-switch-lg">
                    <input class="form-check-input" type="checkbox" id="customSwitch3">
                    <label class="form-check-label" for="customSwitch3">
                        <div class="toggle-switch">
                            <div class="toggle-ball"></div> <!-- Adicionando a bolinha -->
                            <i class="fas fa-times" id="switch-icon"></i>
                            <i class="fas fa-check" id="switch-icon-checked"></i>
                        </div>
                        <span class="toggle-text" id="toggle-text">Bloqueado</span>
                    </label>
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
<style>
.toggle-switch {
    position: relative;
    width: 90px;
    height: 40px;
    background-color: #dc3545;
    border-radius: 20px;
    transition: background-color 0.3s ease-in-out;
}

.toggle-text {
    margin-left: 10px; /* Espaçamento entre o switch e o texto */
    font-weight: bold; /* Deixar o texto em negrito */
    color: red; /* Cor padrão para o texto */
    transition: color 0.3s ease-in-out; /* Transição suave para a cor */
}

.toggle-ball {
    position: absolute;
    top: 50%;
    left: 5%; /* Posição inicial da bolinha */
    width: 32px; /* Largura da bolinha */
    height: 32px; /* Altura da bolinha */
    background-color: white; /* Cor da bolinha */
    border-radius: 50%; /* Faz a bolinha ser redonda */
    transition: left 0.3s ease-in-out; /* Transição suave ao mover */
    transform: translateY(-50%); /* Centraliza verticalmente */
}

.toggle-switch i {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 25px;
    transition: opacity 0.3s ease-in-out;
}

#switch-icon {
    left: 12px;
    color: #8b0a1a;
}

#switch-icon-checked {
    right: 6px;
    color: #05863b;
    opacity: 0;
}

.form-check-input:checked + .form-check-label .toggle-text {
    color: #2ecc71; /* Cor do texto quando ativado */
}

.form-check-input:checked + .form-check-label .toggle-switch {
    background-color: #2ecc71;
}

.form-check-input:checked + .form-check-label .toggle-switch .toggle-ball {
left: 54px; /* Posição da bolinha quando ativada */
}

.form-check-input:checked + .form-check-label .toggle-switch #switch-icon {
    opacity: 0;
}

.form-check-input:checked + .form-check-label .toggle-switch #switch-icon-checked {
    opacity: 1;
}
.form-check-input {
    margin-left:0.75rem;
}
</style>
@endpush

{{-- Push extra scripts --}}

@push('js')
<script>
$(document).ready(function() {
    $('#customSwitch3').on('change', function() {
        if ($(this).is(':checked')) {
            $('#switch-icon').animate({ opacity: 0 }, 200);
            $('#switch-icon-checked').animate({ opacity: 1 }, 200);
            $('#toggle-text').text('Liberado'); // Muda o texto para "Liberado"
        } else {
            $('#switch-icon').animate({ opacity: 1 }, 200);
            $('#switch-icon-checked').animate({ opacity: 0 }, 200);
            $('#toggle-text').text('Bloqueado'); // Muda o texto para "Bloqueado"
        }
    });
});
</script>
@endpush
