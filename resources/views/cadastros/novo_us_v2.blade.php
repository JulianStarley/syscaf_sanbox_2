</form>
@extends('layouts.app')

{{-- Customize layout sections --}}
@push('head')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
        <form>
        <div class="form-group">
            <label for="fullName">Nome completo</label>
            <input class="form-control" type="text" placeholder="Nome completo sem abreviações" id="fullName" name="fullName">
        </div>
        <div class="form-group">
            <label for="socialName">Nome Social</label>
            <input class="form-control" type="text" placeholder="Nome completo sem abreviações" id="socialName" name="socialName" disabled>
            <div class="form-group">
                <input class="form-check-input ml-1" type="checkbox" id="checkSocialName" name="checkSocialName">
                <div>
                    <label for="checkSocialName" class="ml-4">Utilizar nome social</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="userPhone">Telefones</label>
            <input class="form-control" type="number" placeholder="Utilizar apenas números sem pontos (.) ou hifen (-)" id="userPhone" name="userPhone">
            <div class="form-group">
                <input class="form-check-input ml-1" type="checkbox" id="checkEmergency" name="checkEmergency">
                <div>
                    <label for="checkEmergency" class="ml-4">Contato de emergencia</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="userCpf">CPF</label>
            <input class="form-control" type="text" placeholder="use apenas números, sem pontos (.) ou hifen (-)" id="usercpf" name="userCpf">
        </div>
            <div class="form-group">
                <label>Nacionalidade</label>
                <select class="form-control" id="nacionality" name="nacionality">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                </select>
            </div>
            <div class="form-group">
                <label>Naturalidade</label>
                <select class="form-control" id="naturalness" name="naturalness">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                </select>
            </div>
        <h2>Dados Adicionais</h2>
        <hr>
            <div class="form-group">
                <label>Gênero</label>
                <select class="form-control" id="gender" name="gender">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                </select>
            </div>
            <div class="form-group">
                <label>Estado Cívil</label>
                <select class="form-control" id="maritage" name="maritage">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                    <!-- /.card-body -->
                </select>
            </div>
            <div class="form-group">
                <label for="fullAddress">Endereço completo</label>
                <input class="form-control" type="text" placeholder="Endereço completo do usuário" id="fullAddress" name="fullAddress">
            </div>
            <div class="form-group">
                <label>Observações</label>
                <textarea class="form-control" rows="3" placeholder="Insira alguma observação adicional ou importante"></textarea>
            </div>
        <h2>Tipo de Usuário</h2>
        <hr>
<div class="accordion" id="accordionFunction">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                <strong>Funcionário</strong>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
            data-bs-parent="#accordionFunction">
            <div class="accordion-body">
                <div class="form-group">
                    <label for="userFunction">Descrever função</label>
                    <input class="form-control" type="text" placeholder="complete com sua função atual" id="userFunction"
                        name="userFunction">
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <strong>Médico</strong>
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionFunction">
            <div class="accordion-body">
                <div class="form-group">
                    <label for="userDoc">CRM</label>
                    <input class="form-control" type="text" placeholder="complete com seu crm ativo e principal" id="userDoc" name="userDoc">
                </div>
                <div class="input-group">
                    <label for="meuSelect">Especialidades</label>
                    <select id="meuSelect" name="meuSelect" multiple="true" class="form-control select2 select2-hidden-accessible" multiple="[]" style="width: 100%;" tabindex="-1" aria-hidden="true">
                        <option value="1">Opção 1</option>
                        <option value="2">Opção 2</option>
                        <option value="3">Opção 3</option>
                        <option value="4">Opção 4</option>
                        <option value="5">Opção 5</option>
                    </select>
                <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="8" style="width: 100%;">
                    <span class="selection">
                        <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                            <ul class="select2-selection__rendered">
                                <li class="select2-search select2-search--inline">
                                    <input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Select an option" style="width: 489.5px;">
                                </li>
                            </ul>
                        </span>
                    </span>
                    <span class="dropdown-wrapper" aria-hidden="true">
                    </span>
                </span>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <strong>Farmacêutico</strong>
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionFunction">
            <div class="accordion-body">
                <div class="form-group mt-2">
                    <label for="userCRF">CRF</label>
                    <input class="form-control" type="text" placeholder="CRF atual" id="userCRF" name="userCRF">
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <strong>Paciente</strong>
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFunction">
            <div class="accordion-body">
                <div class="form-group mt-2">
 <label for="userSUS">Cartão SUS</label>
                    <input class="form-control" type="number" placeholder="complete com seu cartão SUS" id="userSUS" name="userSUS">
                </div>
            </div>
        </div>
    </div>
</div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
<!-- /.card -->
</div>

<!-- /.container -->
</div>
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

{{--
<link rel="stylesheet" href="/css/admin_custom.css"> --}}
{{-- CSS select2 --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .disabled-item {
        background-color: #f0f0f0; /* Cor cinza */

    }
    .active-item button {
        background-color: #007bff; /* Cor azul */
        color: white; /* Texto branco */
    }
</style>
@endpush

{{-- Push extra scripts --}}

@push('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {

    //Initialize Select2 Elements
    $('.meuSelect').select2({
    theme: 'bootstrap4',
    closeOnSelect: false,
    placeholder: 'Selecione um item',
    multiple: true,
    data: [
        {id: 1, text: 'Item 1'},
        {id: 2, text: 'Item 2'},
        {id: 3, text: 'Item 3'},
        {id: 4, text: 'Item 4'},
        {id: 5, text: 'Item 5'},
    ],
    })

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
<script>
$(document).ready(function() {
    $('.accordion-button').click(function() {
        // Desabilitar todos os itens
        $('.accordion-item').each(function() {
            $(this).find('input, select').prop('disabled', true).addClass('disabled-item');
        });

        // Habilitar o item clicado
        var target = $(this).data('bs-target');
        $(target).find('input, select').prop('disabled', false).removeClass('disabled-item').addClass('active-item');

        // Remover a classe ativa de todos os botões
        $('.accordion-button').removeClass('active-item');
        // Adicionar a classe ativa ao botão clicado
        $(this).addClass('active-item');
    });
});
</script>
<script>
$(document).ready(function() {
    $('.accordion-button').click(function() {
        // Desabilitar todos os itens
        $('.accordion-item').each(function() {
            $(this).find('input, select').prop('disabled', true).addClass('disabled-item');
        });

        // Habilitar o item clicado
        var target = $(this).data('bs-target');
        $(target).find('input, select').prop('disabled', false).removeClass('disabled-item').addClass('active-item');

        // Remover a classe ativa de todos os botões
        $('.accordion-button').removeClass('active-item');
        // Adicionar a classe ativa ao botão clicado
        $(this).addClass('active-item');
    });
});
</script>
@endpush
