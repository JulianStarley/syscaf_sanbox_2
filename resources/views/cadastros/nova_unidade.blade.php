@extends('layouts.app')

{{-- Customize layout sections --}}
@push('head')

@endpush

@section('subtitle', 'Nova Unidade')
@section('content_header_title', 'Nova Unidade')
@section('content_header_subtitle', 'Nova Unidade')

@section('content_body')
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cadastrar nova unidade</h3>
        </div>
        <form id=novaUnidade>
            <div class="card-body">
                <div class="form-group">
                    <x-adminlte-input name="iUnity" label="Unidade" placeholder="Insira o nome completo da unidade"
                        fgroup-class="col-md-6" />
                </div>
                <div class="form-group">
                    <x-adminlte-input name="iModule" label="Módulo" placeholder="Preencha o campo"
                        fgroup-class="col-md-6" />
                </div>
                <div class="form-group">
                    <x-adminlte-select name="optionsTest2" label="Selecione o tipo de unidade" fgroup-class="col-md-6">
                        <x-adminlte-options :options="['UBS', 'CERPAT', 'UPA', 'SAMU', 'OUTRA OPÇÃO']"
                            placeholder="Tipo Unidade" />
                    </x-adminlte-select>

                    <div class="form-group">
                        <x-adminlte-input name="iNumPop" label="População Adstrita" placeholder="Preencha o cmapo"
                            fgroup-class="col-md-6" type="number" igroup-size="md" min="1" max="999999" />
                    </div>
                    <div class="form-group">
                        <x-adminlte-input name="iNumDist" label="Distância CAF"
                            placeholder="insira o valor corresponte ou aproximado" type="number" igroup-size="md"
                            min="1" max="999999" fgroup-class="col-md-6">
                        </x-adminlte-input>
                    </div>
                <h3>Selecionar equipe da unidade</h3>
                <hr>
                <div id="datatable01" name="table_data">
                    @section('plugins.DatatablesPlugin', true)
                    @php
                    //cabeçalho ID, nome, função e botões de ação, sem exportar e comprimento fixo

                        $heads = [
                                    ['label' => "Selecionar" , 'no-export' => true, 'width' => 5],
                                    'Nome',
                                    ['label' => 'Função', 'width' => 20],
                                    'Telefone',
                                    ['label' => 'Ações', 'no-export' => true, 'width' => 3],
                                ];
                            //configuração checkboxes
                            $clnSelect = '<input type="checkbox" class="row-select" />';
                            //botão editar
                            $btnEdit = '
                            <button type="button" class="btn btn-sm btn-default text-primary mx-1 shadow" title="Edit">
                            <i class="fa fa-lg fa-fw fa-pen"></i>
                            </button>
                                ';
                            //botão lixeira
                            $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                            <i class="fa fa-lg fa-fw fa-trash"></i>
                            </button>';
                            //botão lápis
                            $btnDetails = '
                                <button type="button" class="btn btn-sm btn-default text-teal mx-1 shadow" data-toggle="modal" data-target="#modalProfile" title="Details">
                                <i class="fa fa-lg fa-fw fa-eye"></i>
                                </button>
                            ';

            //array de preenchimento da tabela

            $config = [
                'data' => [
                            [$clnSelect, 'John Bender', 'Administrador','+02 (123) 123456789','<div class="d-flex">'.'<nobr>'.$btnEdit.'<div class="ml-auto">'.$btnDetails.'</nobr>'.'</div></div>'],
                            [$clnSelect, 'Sophia Clemens', 'Médico','+99 (987) 987654321', '<div class="d-flex">'.'<nobr>'.$btnEdit.'<div class="ml-auto">'.$btnDetails.'</nobr>'.'</div></div>'],
                            [$clnSelect, 'Peter Sousa', 'Farmacêutico','+69 (555) 12367345243', '<div class="d-flex">'.'<nobr>'.$btnEdit.'<div class="ml-auto">'.$btnDetails.'</nobr>'.'</div></div>'],
                            [$clnSelect, 'Peter Sousa', 'Paciente','+69 (555) 12367345243', '<div class="d-flex">'.'<nobr>'.$btnEdit.'<div class="ml-auto">'.$btnDetails.'</nobr>'.'</div></div>'],
                            [$clnSelect, 'Peter Sousa', 'Farmacêutico','+69 (555) 12367345243', '<div class="d-flex">'.'<nobr>'.$btnEdit.'<div class="ml-auto">'.$btnDetails.'</nobr>'.'</div></div>'],
                            [$clnSelect, 'Peter Sousa', 'Paciente', '+69 (555) 12367345243', '<div class="d-flex">'.'<nobr>'.$btnEdit.'<div class="ml-auto">'.$btnDetails.'</nobr>'.'</div></div>'],
                            [$clnSelect, 'Peter Sousa', 'Médico','+69 (555) 12367345243', '<div class="d-flex">'.'<nobr>'.$btnEdit.'<div class="ml-auto">'.$btnDetails.'</nobr>'.'</div></div>'],
                            [$clnSelect, 'Peter Sousa', 'Administrador','+69 (555) 12367345243', '<div class="d-flex">'.'<nobr>'.$btnEdit.'<div class="ml-auto">'.$btnDetails.'</nobr>'.'</div></div>'],
                            [$clnSelect, 'Peter Sousa', 'Médico','+69 (555) 12367345243', '<div class="d-flex">'.'<nobr>'.$btnEdit.'<div class="ml-auto">'.$btnDetails.'</nobr>'.'</div></div>'],
                            [$clnSelect, 'Peter Sousa', 'Paciente','+69 (555) 12367345243', '<div class="d-flex">'.'<nobr>'.$btnEdit.'<div class="ml-auto">'.$btnDetails.'</nobr>'.'</div></div>'],
                            [$clnSelect, 'Peter Sousa', 'Farmacêutico','+69 (555) 12367345243', '<div class="d-flex">'.'<nobr>'.$btnEdit.'<div class="ml-auto">'.$btnDetails.'</nobr>'.'</div></div>'],
                            [$clnSelect, 'Peter Sousa', 'Médico','+69 (555) 12367345243', '<div class="d-flex">'.'<nobr>'.$btnEdit.'<div class="ml-auto">'.$btnDetails.'</nobr>'.'</div></div>'],
                            [$clnSelect, 'Peter Sousa', 'Paciente','+69 (555) 12367345243', '<div class="d-flex">'.'<nobr>'.$btnEdit.'<div class="ml-auto">'.$btnDetails.'</nobr>'.'</div></div>'],
                            [$clnSelect, 'Peter Sousa', 'Administrador','+69 (555) 12367345243', '<div class="d-flex">'.'<nobr>'.$btnEdit.'<div class="ml-auto">'.$btnDetails.'</nobr>'.'</div></div>'],
                        ],
                            'order' => [[1, 'asc']],
                            'columns' => [null, null, null, ['orderable' => false]],
                        ];
                        $config['paging'] = true;
                        $config["lengthMenu"] = [ 10, 50, 100, 500];

                    @endphp
            <x-adminlte.tool.datatable id="table1" :heads="$heads" hoverable stripped bordered>
                @foreach($config['data'] as $row)
                <tr>
                    @foreach($row as $cell)
                        <td>{!! $cell !!}</td>
                    @endforeach
                </tr>

                @endforeach
            </x-adminlte.tool.datatable>

            </div>

            <div class="text-right mt-3">
                <x-adminlte.form.button type="submit" label="Enviar" theme="primary" class="btn-lg">
                </x-adminlte.form.button>
            </div>
        </form>
        <div id="modalPerfil">
            {{-- Custom --}}
            <x-adminlte.tool.modal id="modalProfile" title="Perfil" size="lg" theme="success" icon="fas fa-solid fa-user" v-centered
                static-backdrop>
                <div style="height:800px;">
                    {{-- Layout Classic / Theme --}}
                    <x-adminlte.widget.profile-widget name="John Bender" desc="Administrador" theme="teal" img="https://picsum.photos/id/1/100"
                        layout-type="classic">
                        <x-adminlte.widget.profile-row-item icon="fas fa-fw fa-user-friends" title="Nome completo" text="John Bender" badge="pill-teal" />
                        <x-adminlte.widget.profile-row-item icon="fas fa-fw fa-user-friends fa-flip-horizontal" title="Nome social" text="N/A" badge="pill-lightblue" />
                        <x-adminlte.widget.profile-row-item icon="fas fa-fw fa-sticky-note" title="CPF" text="123.456.789-10" badge="pill-navy" />
                        <x-adminlte.widget.profile-row-item icon="fas fa-fw fa-sticky-note" title="Nacionalidade" text="Brasileiro" badge="pill-navy" />
                        <x-adminlte.widget.profile-row-item icon="fas fa-fw fa-sticky-note" title="Naturalidade" text="xique-xique" badge="pill-navy" />
                        <x-adminlte.widget.profile-row-item icon="fas fa-fw fa-sticky-note" title="Genero" text="prefiro não informar" badge="pill-navy" />
                        <x-adminlte.widget.profile-row-item icon="fas fa-fw fa-sticky-note" title="Telefone" text="(7X) 1234-4567" badge="pill-navy" />
                        <x-adminlte.widget.profile-row-item icon="fas fa-fw fa-sticky-note" title="Endereço" text="Rua ABC" badge="pill-navy" />
                        <x-adminlte.widget.profile-row-item icon="fas fa-fw fa-sticky-note" title="Observações" text="N/A" badge="pill-navy" />
                        <x-adminlte.widget.profile-row-item icon="fas fa-fw fa-sticky-note" title="Se medico" text="CRM" badge="pill-navy" />
                        <x-adminlte.widget.profile-row-item icon="fas fa-fw fa-sticky-note" title="Se medico" text="Escpecialidades" badge="pill-navy" />
                        <x-adminlte.widget.profile-row-item icon="fas fa-fw fa-sticky-note" title="Se Paciente (cartao SUS)" text="123.456.789-10" badge="pill-navy" />
                        <x-adminlte.widget.profile-row-item icon="fas fa-fw fa-sticky-note" title="Se farmaceutico (CRF)" text="123.456.789-10" badge="pill-navy" />
                        <x-adminlte.widget.profile-row-item icon="fas fa-fw fa-sticky-note" title="Se funcionario" text="Função" badge="pill-navy" />
                        <x-adminlte.widget.profile-row-item icon="fas fa-fw fa-sticky-note" title="Permissões" text="permissão A, B, C, ..." badge="pill-navy" />
                    </x-adminlte.widget.profile-widget>
                </div>
                <x-slot name="footerSlot">
                    <x-adminlte.form.button class="mr-auto" theme="success" label="Accept" />
                    <x-adminlte.form.button theme="danger" label="Dismiss" data-dismiss="modal" />
                </x-slot>
            </x-adminlte.tool.modal>
        </div>
    </div>
</div>
@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
<style>
.selected {
    background-color: #d1e7dd; /* Cor de fundo para a linha selecionada */
}
</style>
@endpush


@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
   <script>
    $(document).ready(function() {
    var table = $('#table1').DataTable();

    // Gerenciar a seleção de checkboxes nas linhas
    $('#table1 tbody').on('change', '.row-select', function() {
        $(this).closest('tr').toggleClass('selected', this.checked);
        filterSelectedRows();
    });

    // Função para filtrar as linhas com base na seleção
    function filterSelectedRows() {
        var selectedRows = [];
        $('#table1 tbody .row-select:checked').each(function() {
            var row = $(this).closest('tr');
            selectedRows.push(row.index());
        });

        // Redefinir a pesquisa
        table.search('');

        // Mostrar apenas as linhas selecionadas
        table.rows().every(function() {
            var rowIndex = this.index();
            if (selectedRows.includes(rowIndex)) {
                $(this.node()).show();
            } else {
                $(this.node()).hide();
            }
        });
    }
});
</script>
@endpush
@endsection




