@extends('layouts.app')

{{-- Customize layout sections --}}
@push('head')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="dist/jquery.bootstrap-duallistbox.min.js"></script>
<link rel="stylesheet" type="text/css" href="../src/bootstrap-duallistbox.css">
@endpush

@section('subtitle', 'Nova Unidade')
@section('content_header_title', 'Nova Unidade')
@section('content_header_subtitle', 'Nova Unidade')

@section('content_body')
<h2> Cadastrar Nova Unidade</h2>
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Nova Unidade</h3>
        </div>
        <form>
            <div class="card-body">
                <div class="form-group">
                    <x-adminlte-input name="iLabel" label="Unidade" placeholder="Insira o nome completo da unidade"
                        fgroup-class="col-md-6" />
                </div>
                <div class="form-group">
                    <x-adminlte-input name="iLabel" label="Módulo" placeholder="Preencha o campo"
                        fgroup-class="col-md-6" />
                </div>
                <div class="form-group">
                    <x-adminlte-select name="optionsTest2" label="Selecione o tipo de unidade" fgroup-class="col-md-6">
                        <x-adminlte-options :options="['UBS', 'CERPAT', 'UPA', 'SAMU', 'OUTRA OPÇÃO']"
                            placeholder="Tipo Unidade" />
                    </x-adminlte-select>

                    <div class="form-group">
                        <x-adminlte-input name="iNum" label="População Adstrita" placeholder="Preencha o cmapo"
                            fgroup-class="col-md-6" type="number" igroup-size="md" min="1" max="999999" />
                    </div>
                    <div class="form-group">
                        <x-adminlte-input name="iNum" label="Distância CAF"
                            placeholder="insira o valor corresponte ou aproximado" type="number" igroup-size="md"
                            min="1" max="999999" fgroup-class="col-md-6">
                        </x-adminlte-input>
                    </div>
                    <div class="form-group col-md-12" id="duallist_box_unidades">
                        <label for="duallist_box_unidades">Selecionar Equipe da Unidade</label>
                        <div class="row">
                            <div class="box1 col-md-6">
                                <label for="bootstrap-duallistbox-nonselected-list_duallistbox_demo2">A selecionar</label>
                                <span class="info-container"> <span class="info">Mostrar(formula contar)</span> <button
                                        type="button" class="btn clear1 pull-right btn-default btn-xs">Mostrar todos (caso Ocultado)</button>
                                </span>
                                <input class="filter form-control" type="text" placeholder="Filtrar">
                                <div class="btn-group buttons mb-3 mt-3">
                                    <button type="button" class="btn moveall btn-default" title="Mover todos">
                                        <i class="fa-solid fa-forward-fast">Mover Todos</i>
                                    </button>
                                    <button type="button" class="btn move btn-default" title="Mover selecionados">
                                       <i class="fa-solid fa-play">Mover Selecionados</i>
                                    </button>
                                </div>
                                <select multiple="multiple" id="bootstrap-duallistbox-nonselected-list_duallistbox_demo2" class="form-control" name="duallistbox_demo2_helper1" style="height: 194px;">
                                    <option value="option1">Nome - Função A 1</option>
                                    <option value="option2">Nome - Função A 2</option>
                                    <option value="option3" selected="selected">Nome - Função A 3</option>
                                    <option value="option4">Nome - Função A 4</option>
                                    <option value="option5">Nome - Função A 5</option>
                                    <option value="option6" selected="selected">Nome - Função A 6</option>
                                    <option value="option7">Nome - Função A 7</option>
                                    <option value="option8">Nome - Função B 8</option>
                                    <option value="option9">Nome - Função B 9</option>
                                    <option value="option0">Nome - Função B 10</option>
                                    <option value="option0">Nome - Função B 11</option>
                                    <option value="option0">Nome - Função B 12</option>
                                    <option value="option0">Nome - Função B 13</option>
                                    <option value="option0">Nome - Função B 14</option>
                                    <option value="option0">Nome - Função B 15</option>
                                    <option value="option0">Nome - Função C 16</option>
                                    <option value="option0">Nome - Função C 17</option>
                                    <option value="option0">Nome - Função C 18</option>
                                    <option value="option0">Nome - Função C 19</option>
                                    <option value="option0">Nome - Função C 20</option>
                                </select>
                            </div>
                            <div class="box2 col-md-6">
                                <label for="bootstrap-duallistbox-selected-list_duallistbox_demo2">Selecionados</label>
                                <span class="info-container">
                                    <span class="info">lista vazia (contagem)</span>
                                    <button type="button" class="btn clear2 pull-right btn-default btn-xs">Mostrar todos</button>
                                </span>
                                <input class="filter form-control" type="text" placeholder="Filtro">
                                <div class="btn-group buttons mb-3 mt-3">
                                    <button type="button" class="btn remove btn-default" title="Remover selecionados">
                                        <i class="fa-solid fa-square-caret-left">Remover</i>
                                    </button>
                                    <button type="button" class="btn removeall btn-default" title="Remover todos">
                                        <i class="fa-solid fa-backward-fast">Remover todos</i>
                                    </button>
                                </div>
                                <select multiple="multiple" id="bootstrap-duallistbox-selected-list_duallistbox_demo2" class="form-control" name="duallistbox_demo2_helper2" style="height: 194px;"></select>
                            </div>
                        </div>
                    </div>
        </form>
    </div>
</div>
@endsection

{{-- Scripts --}}
@section('scripts')

<script>
    $(document).ready(function() {
        $("#bootstrap-duallistbox-nonselected-list_duallistbox_demo2").bootstrapDualListbox({
            filterTextClear: 'Mostrar todos',
            filterPlaceholder: 'Filtro',
            moveSelectLabel: 'Mover Selecionados',
            moveAllLabel: 'Mover todos',
            removeSelectedLabel: 'Remover Selecionados',
            removeAllLabel: 'Remover todos',
            moveOnSelect: true,
            moveOnDoubleClick: true,
            preserveSelectionMove: 'moved',
            selectedListLabel: 'Selecionados',
            nonSelectedListLabel: 'Não Selecionados',
            selectorMinimalHeight: 250,
            showFilterInputs: true,
            nonSelectedFilter: true,
            selectedFilter: true,
        });
    });
</script>

@push('js')


@endsection
