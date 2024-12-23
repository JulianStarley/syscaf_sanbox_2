@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- Content body: main page content --}}

@section('content_body')
<h2>Visão geral do estoque</h2>
<hr>
@section('plugins.datatables', true)

<div id="datatable01" name="table_data">
    @section('plugins.DatatablesPlugin', true)
    @php
    function formatNumber($number){
        return number_format($number, 0, ',', '.');
    }
    //cabeçalho ID, nome, função e botões de ação, sem exportar e comprimento fixo

    $heads = [
    'Medicamento',
    ['label' => 'Código', 'no-export' => true, 'width' => 3],
    ['label' =>'Lote', 'no-export' => true],
    ['label' => 'Saldo atual', 'no-export' => true],
    ['label' => 'Nível de estoque', 'no-export' => true],
    ['label' => 'Localização', 'no-export' => true],
    ['label' => 'Ações', 'no-export' => true , 'width' => 1],

    ];

    //botão editar
    $btnEdit = '
    <button type="button" class="btn btn-sm btn-default text-primary mx-1 shadow" title="Ajustar">
        <i class="fa fa-lg fa-fw fa-pen"></i>
    </button>
    ';
    //botão lixeira
    $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
        <i class="fa fa-lg fa-fw fa-trash"></i>
    </button>';
    //botão lápis
    $btnDetails = '
    <button type="button" class="btn btn-sm btn-default text-teal mx-1 shadow" data-toggle="modal"
        data-target="#modalProfile" title="Details">
        <i class="fa fa-lg fa-fw fa-eye"></i>
    </button>
    ';
    $pbDinamic= '<div class="progress">
        <div class="progress-bar progress-bar-animated" role="progressbar" aria-valuenow="0"
            aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
    </div>';

    //array de preenchimento da tabela

    $config = [
    'data' => [
    ['Med A', 'A001','LX001', formatNumber(15000),$pbDinamic, 'UNIDADE A', '<div class="d-flex"
        style="justify-content: center; padding: 0;">'. $btnEdit . $btnDetails . '</div>'],
    ['Med B', 'A002','LX004', formatNumber(50000),$pbDinamic, 'UNIDADE B', '<div class="d-flex"
        style="justify-content: center; padding: 0;">'. $btnEdit . $btnDetails . '</div>'],
    ['Med C', 'A003','LX005', formatNumber(22500),$pbDinamic, 'UNIDADE C', '<div class="d-flex"
        style="justify-content: center; padding: 0;">'. $btnEdit . $btnDetails . '</div>'],
    ['Med D', 'A004','LX001', formatNumber(23000),$pbDinamic, 'UNIDADE D', '<div class="d-flex"
        style="justify-content: center; padding: 0;">'. $btnEdit . $btnDetails . '</div>'],
    ['Med E', 'A005','LX004', formatNumber(75000),$pbDinamic, 'UNIDADE D', '<div class="d-flex"
        style="justify-content: center; padding: 0;">'. $btnEdit . $btnDetails . '</div>'],
    ['Med F', 'A006', 'LX002', formatNumber(32000),$pbDinamic, 'UNIDADE E', '<div class="d-flex"
        style="justify-content: center; padding: 0;">'. $btnEdit . $btnDetails . '</div>'],
    ['Med G', 'A007','LX004', formatNumber(35421),$pbDinamic, 'UNIDADE E', '<div class="d-flex"
        style="justify-content: center; padding: 0;">'. $btnEdit . $btnDetails . '</div>'],
    ['Med H', 'A014','LX002', formatNumber(45632),$pbDinamic, 'UNIDADE C', '<div class="d-flex"
        style="justify-content: center; padding: 0;">'. $btnEdit . $btnDetails . '</div>'],
    ['Med I', 'A008','LX003', formatNumber(85120),$pbDinamic, 'UNIDADE B', '<div class="d-flex"
        style="justify-content: center; padding: 0;">'. $btnEdit . $btnDetails . '</div>'],
    ['Med J', 'A009','LX002', formatNumber(120000),$pbDinamic, 'UNIDADE E', '<div class="d-flex"
        style="justify-content: center; padding: 0;">'. $btnEdit . $btnDetails . '</div>'],
    ['Med K', 'A010','LX003', formatNumber(250000),$pbDinamic, 'UNIDADE A', '<div class="d-flex"
        style="justify-content: center; padding: 0;">'. $btnEdit . $btnDetails . '</div>'],
    ['Med L', 'A011','LX001', formatNumber(320000),$pbDinamic, 'UNIDADE B', '<div class="d-flex"
        style="justify-content: center; padding: 0;">'. $btnEdit . $btnDetails . '</div>'],
    ['Med M', 'A012','LX003', formatNumber(456123),$pbDinamic, 'UNIDADE C', '<div class="d-flex"
        style="justify-content: center; padding: 0;">'. $btnEdit . $btnDetails . '</div>'],
    ['Med N', 'A013','LX001', formatNumber(74123),$pbDinamic, 'UNIDADE B', '<div class="d-flex"
        style="justify-content: center; padding: 0;">'. $btnEdit . $btnDetails . '</div>'],
            ],
'order' => [[1, 'asc']],
'columns' => [null, null, null, ['orderable' => true]],
];
$config['paging'] = true;
$config["lengthMenu"] = [ 10, 50, 100, 500];


@endphp
<x-adminlte.tool.datatable id="table1" :heads="$heads" hoverable stripped >
    @foreach($config['data'] as $row)
    <tr>
        @foreach($row as $cell)
        <td>{!! $cell !!}</td>
        @endforeach
    </tr>

    @endforeach
</x-adminlte.tool.datatable>

@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}
{{--
<link rel="stylesheet" href="/css/admin_custom.css"> --}}
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
@endpush

{{-- Push extra scripts --}}

@push('js')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script>
    $(document).ready(function() {
        let progressBar = $('.progress-bar'); // Get the progress bar element

        let inc = (val) => {
        let v = parseInt(progressBar.attr('aria-valuenow')) + val; // Get current value
        return v > 100 ? 0 : v;
        };

        setInterval(() => {
        let newValue = inc(10);
        progressBar.attr('aria-valuenow', newValue); // Set new value
        progressBar.css('width', newValue + '%'); // Update the width visually
        progressBar.text(newValue + '%'); // Optionally update the text within the progress bar
        }, 2000);
        });
</script>
@endpush
