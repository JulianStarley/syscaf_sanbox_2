@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- Content body: main page content --}}

@section('content_body')
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Nova Prescrição</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group" id="seleciona_paciente">
                    <label>Nome do Paciente</label>
                    <select class="form-control">
                        <option>Paciente 1</option>
                        <option>Paciente 2</option>
                        <option>Paciente 3</option>
                        <option>Paciente 4</option>
                        <option>Paciente 5</option>
                    </select>
                </div>
                <div class="form-group" id="seleciona_medico">
                    <label>Nome do Médico Prescritor</label>
                    <select class="form-control">
                        <option>Medico 1</option>
                        <option>Medico 2</option>
                        <option>Medico 3</option>
                        <option>Medico 4</option>
                        <option>Medico 5</option>
                    </select>
                </div>
                <div class="form-group" id="seleciona_administracao">
                    <label>Nome do Paciente</label>
                    <select class="form-control">
                        <option>Via 1</option>
                        <option>Via 2</option>
                        <option>Via 3</option>
                        <option>Via 4</option>
                        <option>Via 5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Concentração</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Forma Farmaceutica</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Posologia e orientações de uso</label>
                    <textarea class="form-control" rows="3" placeholder="Insira as informçãoes em detalhes"></textarea>
                </div>
            </div>
        </form>
    </div>
    <!-- /.card -->

    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Different Styles</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <h4>Input</h4>
            <div class="form-group">
                <label for="exampleInputBorder">Bottom Border only <code>.form-control-border</code></label>
                <input type="text" class="form-control form-control-border" id="exampleInputBorder"
                    placeholder=".form-control-border">
            </div>
            <div class="form-group">
                <label for="exampleInputBorderWidth2">Bottom Border only 2px Border
                    <code>.form-control-border.border-width-2</code></label>
                <input type="text" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2"
                    placeholder=".form-control-border.border-width-2">
            </div>
            <div class="form-group">
                <label for="exampleInputRounded0">Flat <code>.rounded-0</code></label>
                <input type="text" class="form-control rounded-0" id="exampleInputRounded0" placeholder=".rounded-0">
            </div>
            <h4>Custom Select</h4>
            <div class="form-group">
                <label for="exampleSelectBorder">Bottom Border only <code>.form-control-border</code></label>
                <select class="custom-select form-control-border" id="exampleSelectBorder">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleSelectBorderWidth2">Bottom Border only
                    <code>.form-control-border.border-width-2</code></label>
                <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleSelectRounded0">Flat <code>.rounded-0</code></label>
                <select class="custom-select rounded-0" id="exampleSelectRounded0">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                </select>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <!-- Input addon -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Input Addon</h3>
        </div>
        <div class="card-body">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" placeholder="Username">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
            </div>

            <h4>With icons</h4>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Email">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-check"></i></span>
                </div>
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-dollar-sign"></i>
                    </span>
                </div>
                <input type="text" class="form-control">
                <div class="input-group-append">
                    <div class="input-group-text"><i class="fas fa-ambulance"></i></div>
                </div>
            </div>

            <h5 class="mt-4 mb-2">With checkbox and radio inputs</h5>

            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <input type="checkbox">
                            </span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><input type="radio"></span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->

            <h5 class="mt-4 mb-2">With buttons</h5>

            <p>Large: <code>.input-group.input-group-lg</code></p>

            <div class="input-group input-group-lg mb-3">
                <div class="input-group-prepend">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                        Action
                    </button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="#">Action</a></li>
                        <li class="dropdown-item"><a href="#">Another action</a></li>
                        <li class="dropdown-item"><a href="#">Something else here</a></li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><a href="#">Separated link</a></li>
                    </ul>
                </div>
                <!-- /btn-group -->
                <input type="text" class="form-control">
            </div>
            <!-- /input-group -->

            <p>Normal</p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <button type="button" class="btn btn-danger">Action</button>
                </div>
                <!-- /btn-group -->
                <input type="text" class="form-control">
            </div>
            <!-- /input-group -->

            <p>Small <code>.input-group.input-group-sm</code></p>
            <div class="input-group input-group-sm">
                <input type="text" class="form-control">
                <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat">Go!</button>
                </span>
            </div>
            <!-- /input-group -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <!-- Horizontal Form -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Horizontal Form</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                            <label class="form-check-label" for="exampleCheck2">Remember me</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Sign in</button>
                <button type="submit" class="btn btn-default float-right">Cancel</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card -->

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
</script>
@endpush
