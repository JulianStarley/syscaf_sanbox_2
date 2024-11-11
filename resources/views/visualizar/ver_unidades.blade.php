@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- Content body: main page content --}}

@section('content_body')
<div class="card-body">
    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="dt-buttons btn-group flex-wrap">
                    <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button">
                        <span>Copy</span>
                    </button>
                    <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button">
                        <span>CSV</span>
                    </button>
                    <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button">
                        <span>Excel</span>
                    </button>
                    <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button">
                        <span>Print</span>
                    </button>
                    <div class="btn-group">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="columnVisibilityDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Mostrar/Ocultar colunas
                        </button>
                        <div class="dropdown-menu" aria-labelledby="columnVisibilityDropdown">
                            <a class="dropdown-item column-toggle" href="#" data-column="0">Rendering engine</a>
                            <a class="dropdown-item column-toggle" href="#" data-column="1">Browser</a>
                            <a class="dropdown-item column-toggle" href="#" data-column="2">Platform(s)</a>
                            <a class="dropdown-item column-toggle" href="#" data-column="3">Engine version</a>
                            <a class="dropdown-item column-toggle" href="#" data-column="4">CSS grade</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 text-right">
                <div id="example1_filter" class="dataTables_filter">
                    <label>Pesquisar:</label>
                        <input type="search" class="form-control form-control-md d-inline-block" placeholder="Digite o que procura" aria-controls="example1" style="width: auto; display: inline-block; margin-left: 5px;" >
                </div>
            </div>
        </div>
    <div style="margin-top: 24px;">
        <div class="row">
            <div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                    <thead>
                        <tr>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Rendering engine
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                Browser
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                Platform(s)
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                                Engine version
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                CSS grade
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                            <td>Firefox 1.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.7</td>
                            <td>A</td>
                        </tr>
                        <tr class="even">
                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                            <td>Firefox 1.5</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.8</td>
                            <td>A</td>
                        </tr>
                        <tr class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                            <td>Firefox 2.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.8</td>
                            <td>A</td>
                        </tr>
                        <tr class="even">
                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                            <td>Firefox 3.0</td>
                            <td>Win 2k+ / OSX.3+</td>
                            <td>1.9</td>
                            <td>A</td>
                        </tr>
                        <tr class="odd">
                            <td class="sorting_1 dtr-control">Gecko</td>
                            <td>Camino 1.0</td>
                            <td>OSX.2+</td>
                            <td>1.8</td>
                            <td>A</td>
                        </tr>
                        <tr class="even">
                            <td class="sorting_1 dtr-control">Gecko</td>
                            <td>Camino 1.5</td>
                            <td>OSX.3+</td>
                            <td>1.8</td>
                            <td>A</td>
                        </tr>
                        <tr class="odd">
                            <td class="sorting_1 dtr-control">Gecko</td>
                            <td>Netscape 7.2</td>
                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                            <td>1.7</td>
                            <td>A</td>
                        </tr>
                        <tr class="even">
                            <td class="sorting_1 dtr-control">Gecko</td>
                            <td>Netscape Browser 8</td>
                            <td>Win 98SE+</td>
                            <td>1.7</td>
                            <td>A</td>
                        </tr>
                        <tr class="odd">
                            <td class="sorting_1 dtr-control">Gecko</td>
                            <td>Netscape Navigator 9</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.8</td>
                            <td>A</td>
                        </tr>
                        <tr class="even">
                            <td class="sorting_1 dtr-control">Gecko</td>
                            <td>Mozilla 1.0</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td>1</td>
                            <td>A</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">Rendering engine</th>
                            <th rowspan="1" colspan="1">Browser</th>
                            <th rowspan="1" colspan="1">Platform(s)</th>
                            <th rowspan="1" colspan="1">Engine version</th>
                            <th rowspan="1" colspan="1">CSS grade</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-between aling-itens-center col-md-5">
                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57
                    entries</div>
            </div>
            <div class="col-sm-12 col-md-7 text-right">
                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                    <ul class="pagination justify-content-end">
                        <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#"
                                aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                        </li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="example1"
                                data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2"
                                tabindex="0" class="page-link">2</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3"
                                tabindex="0" class="page-link">3</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4"
                                tabindex="0" class="page-link">4</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5"
                                tabindex="0" class="page-link">5</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6"
                                tabindex="0" class="page-link">6</a></li>
                        <li class="paginate_button page-item next" id="example1_next"><a href="#"
                                aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
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
    console.log("Hi, I'm using the Laravel-AdminLTE package!");

    $(document).ready(function() {
        var table = $('#example1').DataTable();

        // Inicializa todas as colunas como visíveis
        for (var i = 0; i < 5; i++) {
            table.column(i).visible(true);
            updateColumnToggleState(i, true);
        }

        // Evento de clique para alternar a visibilidade da coluna
        $('.column-toggle').on('click', function() {
            var columnIndex = $(this).data('column');
            var column = table.column(columnIndex);
            var isVisible = column.visible();

            // Alterna a visibilidade
            column.visible(!isVisible);
            updateColumnToggleState(columnIndex, !isVisible);
        });

        // Função para atualizar o estado da opção no dropdown
        function updateColumnToggleState(columnIndex, isVisible) {
            var toggleItem = $('.column-toggle[data-column="' + columnIndex + '"]');
            if (isVisible) {
                toggleItem.addClass('bg-primary text-white'); // Azul para selecionado
            } else {
                toggleItem.removeClass('bg-primary text-white'); // Cinza para não selecionado
            }
        }
    });
</script>
@endpush
