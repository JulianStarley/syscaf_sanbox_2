@extends('layouts.app')

{{-- Customize layout sections --}}
@push('head')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
@endpush

@section('subtitle', 'Nova Unidade')
@section('content_header_title', 'Nova Unidade')
@section('content_header_subtitle', 'Nova Unidade')

{{-- Content body: main page content --}}

@push('css')
<script src="dist/jquery.bootstrap-duallistbox.min.js"></script>
<link rel="stylesheet" type="text/css" href="../src/bootstrap-duallistbox.css">
@endpush
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
                    <x-adminlte-input name="iLabel" label="Unidade" placeholder="Insira o nome completo da unidade" fgroup-class="col-md-6"/>
                </div>
                <div class="form-group">
                    <x-adminlte-input name="iLabel" label="Módulo" placeholder="Preencha o campo" fgroup-class="col-md-6"/>
                </div>
                <div class="form-group">
                    <x-adminlte-select name="optionsTest2" label="Selecione o tipo de unidade" fgroup-class="col-md-6">
                        <x-adminlte-options :options="['UBS', 'CERPAT', 'UPA', 'SAMU', 'OUTRA OPÇÃO']" placeholder="Tipo Unidade"/>
                    </x-adminlte-select>

                <div class="form-group">
                    <x-adminlte-input name="iNum" label="População Adstrita" placeholder="Preencha o cmapo" fgroup-class="col-md-6"
                         type="number" igroup-size="md" min="1" max="999999" />
                </div>
                <div class="form-group">
                    <x-adminlte-input name="iNum" label="Distância CAF" placeholder="insira o valor corresponte ou aproximado" type="number"
                        igroup-size="md" min="1" max="999999" fgroup-class="col-md-6">
                    </x-adminlte-input>
                </div>
                <div class="form-group">

        <div class="bootstrap-duallistbox-container row moveonselect moveondoubleclick">
            <div class="box1 col-md-6">
                <label for="bootstrap-duallistbox-nonselected-list_duallistbox_demo1[]"
                    style="display: none;"></label>
                    <span class="info-container">
                        <span class="info">Showing all 10</span>
                            <button type="button" class="btn btn-sm clear1" style="float:right!important;">show all</button>
                    </span>
                <input class="form-control filter" type="text" placeholder="Filter">
                <div class="btn-group buttons"> <button type="button" class="btn moveall btn-outline-secondary"
                        title="Move all">&gt;&gt;</button> </div> <select multiple="multiple"
                    id="bootstrap-duallistbox-nonselected-list_duallistbox_demo1[]" name="duallistbox_demo1[]_helper1"
                    style="height: 222px;">
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                    <option value="option3" selected="selected">Option 3</option>
                    <option value="option4">Option 4</option>
                    <option value="option5">Option 5</option>
                    <option value="option6" selected="selected">Option 6</option>
                    <option value="option7">Option 7</option>
                    <option value="option8">Option 8</option>
                    <option value="option9">Option 9</option>
                    <option value="option0">Option 10</option>
                </select>
            </div>
            <div class="box2 col-md-6">
                <label for="bootstrap-duallistbox-selected-list_duallistbox_demo1[]"
                    style="display: none;">
                </label>
                    <span class="info-container">
                        <span class="info">Empty list</span>
                            <button type="button" class="btn btn-sm clear2" style="float:right!important;">show all</button>
                    </span>
                <input class="form-control filter" type="text" placeholder="Filter">
                <div class="btn-group buttons"> <button type="button" class="btn removeall btn-outline-secondary"
                        title="Remove all">&lt;&lt;</button>
                </div>
                <select multiple="multiple"
                    id="bootstrap-duallistbox-selected-list_duallistbox_demo1[]" name="duallistbox_demo1[]_helper2"
                    style="height: 222px;">
                </select>
            </div>
        </div>
        <select multiple="multiple" size="10" name="duallistbox_demo1[]" title="duallistbox_demo1[]"
            style="display: none;">
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3" selected="selected">Option 3</option>
            <option value="option4">Option 4</option>
            <option value="option5">Option 5</option>
            <option value="option6" selected="selected">Option 6</option>
            <option value="option7">Option 7</option>
            <option value="option8">Option 8</option>
            <option value="option9">Option 9</option>
            <option value="option0">Option 10</option>
        </select>
        <br>
        <button type="submit" class="btn btn-default btn-block">Submit data</button>
        </form>
    </div>
</div>
@endsection

{{-- Scripts --}}
@section('scripts')

<script>
    var demo1 = $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox();

    $("#element").bootstrapDualListbox({
        filterTextClear:'show all',
        filterPlaceholder: 'Filter',
        moveSelectLabel: 'Move Selected',
        moveAllLabel: 'Move All',
        removeSelectedLabel: 'Remove Selected',
        removeAllLabel:'Remove All',
        moveOnSelect: true;
        moveOnDoubleClick: true,
        preserveSelectionMove: 'moved',
        selectedListLabel: 'Selected';
        nonSelectedListLabel: 'Unselected',
        selectorMinimalHeight: 100,
        showFilterInputs:  true,
        nonSelectedFilter: true,
        selectedFilter:true,

    });


</script>

@push('js')


@endsection
