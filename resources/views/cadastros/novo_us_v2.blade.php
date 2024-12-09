</form>
@extends('layouts.app')

{{-- Customize layout sections --}}
@push('head')
<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
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
        <form id="novoUsuario">
            <div class="form-group">
                <x-adminlte-input name="iLabel" id="fullName" label="Nome completo" placeholder="nome completo sem abreviações" disable-feedback/>
            </div>
        <div class="form-group">
            <x-adminlte-input name="iLabel" id="socialName" label="Nome social completo" placeholder="nome completo sem abreviações" disable-feedback />
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
                <x-adminlte-select name="selBasic" label="Nacionalidade">
                    <x-adminlte-options :options="['option 1', 'option 2','option 3', 'option 4', 'option 5']" empty-option="Selecione uma opção..." />
                </x-adminlte-select>
            </div>
            <div class="form-group">
                <x-adminlte-select name="selBasic" label="Naturalidade">
                    <x-adminlte-options :options="['option 1', 'option 2','option 3', 'option 4', 'option 5']"
                        empty-option="Selecione uma opção..." />
                </x-adminlte-select>
            </div>
        <h2>Dados Adicionais</h2>
        <hr>
            <div class="form-group">
                <x-adminlte-select name="selBasic" label="Gênero">
                    <x-adminlte-options :options="['option 1', 'option 2','option 3', 'option 4', 'option 5']"
                        empty-option="Selecione uma opção..." />
                </x-adminlte-select>
            </div>
            <div class="form-group">
                <x-adminlte-select name="selBasic" label="Estado civil">
                    <x-adminlte-options :options="['option 1', 'option 2','option 3', 'option 4', 'option 5']"
                        empty-option="Selecione uma opção..." />
                </x-adminlte-select>
            </div>
            <div class="form-group">
                <x-adminlte-input name="iLabel" id="fullAddress" label="Endereço completo" placeholder="Endereço completo" disable-feedback />
            </div>
            <div class="form-group">
                <x-adminlte-textarea name="taBasic" placeholder="Inserir informações adicionais em detalhes" label="Observações"/>
            </div>
        <h2>Tipo de Usuário</h2>
        <hr>
        </form>
<!-- Accordion -->
<div class="accordion row" id="accordionExample">
    <div class="accordion-item col-md-3">
        <h2 class="accordion-header">
            <button class="accordion-button btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="width: 100%">
                <h3>Funcionário</h3>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
               <div class="form-group">
                    <x-adminlte-input name="iLabel" id="funcao" label="Função atual" placeholder="Insira a funçao atual" disable-feedback />
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item col-md-3">
        <h2 class="accordion-header">
            <button class="accordion-button btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="width: 100%">
                <h3>Médico</h3>
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="form-group">
                    <div class="form-group">
                        <x-adminlte-input name="iLabel" id="CRM" label="CRM" placeholder="Insira o CRM atual" disable-feedback />
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
                        <x-adminlte-select2 id="sel2Category" name="sel2Category[]" label="Especialidades" :config="$config" multiple>
                            <option>Sports</option>
                            <option>News</option>
                            <option>Games</option>
                            <option>Science</option>
                            <option>Maths</option>
                        </x-adminlte-select2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item col-md-3">
        <h2 class="accordion-header">
            <button class="accordion-button btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="width: 100%">
                <h3>Farmacêutico</h3>
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                    <div class="form-group">
                        <x-adminlte-input name="iLabel" id="CRF" label="CRF" placeholder="Insira o CRF atual" disable-feedback />
                    </div>
            </div>
        </div>
    </div>
    <div class="accordion-item col-md-3">
        <h2 class="accordion-header">
            <button class="accordion-button btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="width: 100%">
                <h3>Paciente</h3>
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="form-group">
                    <x-adminlte-input name="iLabel" id="nroSus" label="Número do cartão do SUS" placeholder="Insira o número do seu cartão SUS" disable-feedback />
                </div>
            </div>
        </div>
    </div>
</div>
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
    button {
        border-radius: 2.25em;
    }
</style>
{{--
<link rel="stylesheet" href="/css/admin_custom.css"> --}}
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

@endpush

{{-- Push extra scripts --}}

@push('js')
<!-- jQuery -->
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
    //Initialize Select2 Elements
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
});
</script>

