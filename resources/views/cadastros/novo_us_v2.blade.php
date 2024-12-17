
@extends('layouts.app')

{{-- Customize layout sections --}}
@push('head')

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">


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
        <form id="novoUsuario">
            <div class="form-group">
                <x-adminlte-input name="iLabel" id="fullName" label="Nome completo" placeholder="nome completo sem abreviações" disable-feedback/>
            </div>
        <div class="form-group">
            <x-adminlte-input name="iLabel" id="socialName" label="Nome social completo" placeholder="nome completo sem abreviações" disable-feedback disabled />
            <div class="form-group">
                <input class="form-check-input ml-1" type="checkbox" id="checkSocialName" name="checkSocialName">
                <div>
                    <label for="checkSocialName" class="ml-4">Utilizar nome social</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <x-adminlte-input name='iNum' id="phone" label="Telefone" placeholder="Insira seu(s) telefone(s) sem pontos (.) ou hifens (-)"/>
            <div class="form-group">
                <input class="form-check-input ml-1" type="checkbox" id="checkEmergency" name="checkEmergency">
                <div>
                    <label for="checkEmergency" class="ml-4">Contato de emergencia</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <x-adminlte-input name="iLabel" id="CPF" label="Número do CPF" aria-placeholder="Insira os números sem pontos (.), espaços ou hifens(-)"/>
        </div>
            <div class="form-group">
                <x-adminlte-select name="selNacionalidade" id="selNacionalidade" label="Nacionalidade">
                    <x-adminlte-options :options="['option 1', 'option 2','option 3', 'option 4', 'option 5']" empty-option="Selecione uma opção..." />
                </x-adminlte-select>
            </div>
            <div class="form-group">
                <x-adminlte-select name="selNaturalidade" id="selNaturalidade" label="Naturalidade">
                    <x-adminlte-options :options="['option 1', 'option 2','option 3', 'option 4', 'option 5']"
                        empty-option="Selecione uma opção..." />
                </x-adminlte-select>
            </div>
        <h2>Dados Adicionais</h2>
        <hr>
            <div class="form-group">
                <x-adminlte-select name="selBasic01" label="Gênero">
                    <x-adminlte-options :options="['option 1', 'option 2','option 3', 'option 4', 'option 5']"
                        empty-option="Selecione uma opção..." />
                </x-adminlte-select>
            </div>
            <div class="form-group">
                <x-adminlte-select name="selBasic02" label="Estado civil">
                    <x-adminlte-options :options="['option 1', 'option 2','option 3', 'option 4', 'option 5']"
                        empty-option="Selecione uma opção..." />
                </x-adminlte-select>
            </div>
            <div class="form-group">
                <x-adminlte-input name="iLabel" id="fullAddress" label="Endereço completo" placeholder="Endereço completo" disable-feedback />
            </div>
            <div class="form-group">
                <x-adminlte.form.textarea name="taBasic" placeholder="Inserir informações adicionais em detalhes" label="Observações"/>
            </div>
        <h2>Tipo de Usuário</h2>
        <hr>
    <!--fim form-control-->

    <div class="form-group">
            <!-- radio -->
                {{-- Modal funcionario --}}
                <x-adminlte.tool.modal id="modalFunc" title="Funcionário" size="md" theme="primary" icon="fas fa-bell" v-centered
                    static-backdrop scrollable>
                    <div style="height:800px;">
                        <div class="form-group">
                            <x-adminlte.form.input name="iLabel" id="funcao" label="Função atual" placeholder="Insira a funçao atual"
                                disable-feedback />
                        </div>
                    </div>
                    <x-slot name="footerSlot">
                        <x-adminlte.form.button class="mr-auto" theme="success" label="Confirmar" />
                        <x-adminlte.form.button theme="danger" label="Cancelar" data-dismiss="modal" />
                    </x-slot>
                </x-adminlte.tool.modal>
                {{-- fim modal funcionario --}}
                <div class="form-group">
                    {{-- Modal Médico --}}
                    <x-adminlte.tool.modal id="modalMed" title="Médico" size="md" theme="primary" icon="fas fa-bell" v-centered
                        static-backdrop scrollable>
                        <div style="height:800px;">
                            <div class="form-group">
                                <x-adminlte.form.input name="iLabel" id="CRM" label="CRM" placeholder="Insira o CRM atual" disable-feedback />
                            </div>
                            <div class="form-group">
                                @section('plugins.Select2', true)
                                @php
                                $config = [
                                "placeholder" => "Select multiple options...",
                                "allowClear" => true,
                                "closeOnSelect" => false,
                                ];
                                @endphp
                                <x-adminlte.form.select2 id="sel2Category" name="sel2Category[]" label="Especialidades" :config="$config" multiple>
                                    <option>Sports</option>
                                    <option>News</option>
                                    <option>Games</option>
                                    <option>Science</option>
                                    <option>Maths</option>
                                </x-adminlte.form.select2>
                            </div>
                        </div>
                        <x-slot name="footerSlot">
                            <x-adminlte.form.button class="mr-auto" theme="success" label="Confirmar" />
                            <x-adminlte.form.button theme="danger" label="Cancelar" data-dismiss="modal" />
                        </x-slot>
                    </x-adminlte.tool.modal>
                    {{--fim modal médico --}}
                {{-- Modal farmaceutico --}}
                <x-adminlte.tool.modal id="modalFarma" title="Farmacêutico" size="md" theme="primary" icon="fas fa-bell" v-centered
                    static-backdrop scrollable>
                    <div style="height:800px;">
                        <div class="form-group">
                            <x-adminlte.form.input name="iLabel" id="iFarma" label="Número do CRF" placeholder="Insira o CRF atual"
                                disable-feedback />
                        </div>
                    </div>
                    <x-slot name="footerSlot">
                        <x-adminlte.form.button class="mr-auto" theme="success" label="Confirmar" />
                        <x-adminlte.form.button theme="danger" label="Cancelar" data-dismiss="modal" />
                    </x-slot>
                </x-adminlte.tool.modal>
                {{--fim modal farmaceutico --}}
                {{--Modal Paciente --}}
                <x-adminlte.tool.modal id="modalPac" title="Paciente" size="md" theme="primary" icon="fas fa-bell" v-centered
                    static-backdrop scrollable>
                    <div style="height:800px;">
                        <div class="form-group">
                            <x-adminlte.form.input name="iLabel" id="cardSUS" label="Número cartão SUS" placeholder="Insira o número do cartão SUS" disable-feedback/>
                        </div>
                    </div>
                    <x-slot name="footerSlot">
                        <x-adminlte.form.button class="mr-auto" theme="success" label="Confirmar" />
                        <x-adminlte.form.button theme="danger" label="Cancelar" data-dismiss="modal" />
                    </x-slot>
                </x-adminlte.tool.modal>
                {{--fim modal Paciente --}}

            </div>
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="radioFunc" name="radioChoice" data-target="#modalFunc" data-toggle="modal">
                        <label class="form-check-label" for="radioFunc">Funcionário</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="radioMed" name="radioChoice" data-target="#modalMed" data-toggle="modal">
                        <label class="form-check-label" for="radioMed">Médico</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="radioFarma" name="radioChoice" data-target="#modalFarma" data-toggle="modal">
                        <label class="form-check-label" for="radioFarma">Farmacêutico</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="radioPac" name="radioChoice" data-target="#modalPac" data-toggle="modal">
                        <label class="form-check-label" for="radioPac">Paciente</label>
                    </div>
                </div>
    </div>
    <!--fim row-->
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
    </form>
    </div>
<!-- /.card -->
</div>

<!-- /.container -->
</div>
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}
<style>
.form-check {
    border: 1px solid #ccc; /* Cor da borda */
    border-radius: 5px; /* Bordas arredondadas */
    padding: 20px 60px 20px 60px; /* Espaçamento interno */
    margin-bottom: 10px; /* Espaçamento entre os grupos */
    transition: border-color 0.3s; /* Transição suave para a cor da borda */
}

.form-check:hover {
    border-color: #007bff; /* Cor da borda ao passar o mouse */
}
</style>
<!-- Bootstrap CSS -->


@endpush

{{-- Push extra scripts --}}

@push('js')
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<!-- Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<!-- Bootstrap 5.3 js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script>
$(document).ready(function() {
    // Inicializa os elementos do Select2
    $('select.select2').select2({
        theme: 'bootstrap4',
    });

    // Evento para habilitar/desabilitar o campo Nome Social
    $('#checkSocialName').change(function() {
        if ($(this).is(':checked')) {
            $('#socialName').prop('disabled', false); // Habilita o campo
        } else {
            $('#socialName').val(''); // Limpa o campo
            $('#socialName').prop('disabled', true); // Desabilita o campo
        }
    });

    // Evento para desabilitar outros radio buttons
    $('input[type="radio"]').change(function() {
        $('input[type="radio"]').not(this).prop('disabled', true); // Desabilita outros radio buttons
    });

    // Evento para habilitar todos os radio buttons quando o modal é fechado
    $('.modal').on('hidden.bs.modal', function () {
        $('input[type="radio"]').prop('disabled', false); // Habilita todos os radio buttons
    });
});
</script>

