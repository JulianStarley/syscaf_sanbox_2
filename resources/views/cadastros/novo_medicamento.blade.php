@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Novo Medicamento')
@section('content_header_title', 'Novo Medicamento')
@section('content_header_subtitle', 'Novo Medicamentox')

{{-- Content body: main page content --}}

@section('content_body')
    <div class="col-md-6">
        <x-adminlte.widget.card title="Novo Medicamento" header-class="bg-primary">
            <form>
                    <div class="form-group">
                        <x-adminlte.form.input name="iLabel" id="medName" label="Nome medicamento" placeholder="Adicione nome completo do Medicamento" disable-feedback />
                    </div>
                    <div class="form-group">
                        <x-adminlte.form.input name="iLabel" id="codMed" label="Código do medicamento" placeholder="atribua um código ao Medicamento" disable-feedback />
                    </div>
                    <!-- Select multiple-->
                    <div class="form-group">
                        <x-adminlte.form.select name="selBasic" label="Forma farmacêutica">
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
                        </x-adminlte.form.select>
                    </div>
                    <div class="form-group">
                        <x-adminlte.form.input name="iLabel" id="concentracaoMed" label="Concentração" placeholder="Indique a concentração do item" disable-feedback />
                    </div>
                    <div class="form-group">
                        <x-adminlte-select name="selBasic" id="tarjaCor" label="Selecione a cor da tarja">
                            <option>Sem tarja</option>
                            <option>Vermelha</option>
                            <option>Vermelha sob restrição</option>
                            <option>Preta</option>
                        </x-adminlte.form.select>
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
        </x-adminlte.widget.card>
    </div>

 <div class="form-group">
    {{-- Minimal with a title / no body --}}
    <x-adminlte-card title="A card without body" />

    {{-- Minimal without header / body only --}}
    <x-adminlte-card theme="lime" theme-mode="outline">
        A card without header...
    </x-adminlte-card>

    {{-- Disabled --}}
    <x-adminlte-card title="Disabled Card" theme="teal" disabled>
        A disabled card with teal theme...
    </x-adminlte-card>

    {{-- Themes --}}
    <x-adminlte-card title="Dark Card" theme="dark" icon="fas fa-lg fa-moon">
        A dark theme card...
    </x-adminlte-card>
    <x-adminlte-card title="Lightblue Card" theme="lightblue" theme-mode="outline" icon="fas fa-lg fa-envelope"
        header-class="text-uppercase rounded-bottom border-info" removable>
        A removable card with outline lightblue theme...
    </x-adminlte-card>
    <x-adminlte-card title="Purple Card" theme="purple" icon="fas fa-lg fa-fan" removable collapsible>
        A removable and collapsible card with purple theme...
    </x-adminlte-card>
    <x-adminlte-card title="Success Card" theme="success" theme-mode="full" icon="fas fa-lg fa-thumbs-up"
        collapsible="collapsed">
        A collapsible card with full success theme and collapsed...
    </x-adminlte-card>
    <x-adminlte-card title="Info Card" theme="info" icon="fas fa-lg fa-bell" collapsible removable maximizable>
        An info theme card with all the tool buttons...
    </x-adminlte-card>

    {{-- Complex / Extra tool / Footer --}}
    <x-adminlte-card title="Form Card" theme="maroon" theme-mode="outline" class="elevation-3" body-class="bg-maroon"
        header-class="bg-light" footer-class="bg-maroon border-top rounded border-light" icon="fas fa-lg fa-bell"
        collapsible removable maximizable>
        <x-slot name="toolsSlot">
            <select class="custom-select w-auto form-control-border bg-light">
                <option>Skin 1</option>
                <option>Skin 2</option>
                <option>Skin 3</option>
            </select>
        </x-slot>
        <x-adminlte-input name="User" placeholder="Username" />
        <x-adminlte-input name="Pass" type="password" placeholder="Password" />
        <x-slot name="footerSlot">
            <x-adminlte-button class="d-flex ml-auto" theme="light" label="submit" icon="fas fa-sign-in" />
        </x-slot>
    </x-adminlte-card>
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
        margin-left: 10px;
        /* Espaçamento entre o switch e o texto */
        font-weight: bold;
        /* Deixar o texto em negrito */
        color: red;
        /* Cor padrão para o texto */
        transition: color 0.3s ease-in-out;
        /* Transição suave para a cor */
    }

    .toggle-ball {
        position: absolute;
        top: 50%;
        left: 5%;
        /* Posição inicial da bolinha */
        width: 32px;
        /* Largura da bolinha */
        height: 32px;
        /* Altura da bolinha */
        background-color: white;
        /* Cor da bolinha */
        border-radius: 50%;
        /* Faz a bolinha ser redonda */
        transition: left 0.3s ease-in-out;
        /* Transição suave ao mover */
        transform: translateY(-50%);
        /* Centraliza verticalmente */
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

    .form-check-input:checked+.form-check-label .toggle-text {
        color: #2ecc71;
        /* Cor do texto quando ativado */
    }

    .form-check-input:checked+.form-check-label .toggle-switch {
        background-color: #2ecc71;
    }

    .form-check-input:checked+.form-check-label .toggle-switch .toggle-ball {
        left: 54px;
        /* Posição da bolinha quando ativada */
    }

    .form-check-input:checked+.form-check-label .toggle-switch #switch-icon {
        opacity: 0;
    }

    .form-check-input:checked+.form-check-label .toggle-switch #switch-icon-checked {
        opacity: 1;
    }

    .form-check-input {
        margin-left: 0.75rem;
    }
</style>
@endpush

{{-- Push extra scripts --}}

@push('js')
<script>
   $(document).ready(function() {
$('.js-example-basic-multiple').select2();
});
</script>
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
