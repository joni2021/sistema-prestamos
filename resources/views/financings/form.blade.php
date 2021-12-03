@extends('layouts.app')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        @if(isset($model))
                            <h4>Editar financiamiento</h4>
                        @else
                            <h4>Nuevo Financiamiento</h4>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">Financiamientos
                        </li>
                        <li class="breadcrumb-item text-black-50"><b>Nuevo financiamiento</b>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

    <div class="page-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="wizard">
                                    <section>

                                        @if(isset($model))
                                            {{ Form::model($model,['route' => ['financings.update',$model->id],'method' => 'put','class' => 'validateForm']) }}
                                        @else
                                            {{ Form::open(['route' => 'financings.store','method' => 'post','class' => 'validateForm']) }}
                                        @endif
                                        <div class="form-group row">
                                            <div class="col-md-6 col-lg-6">
                                                <label class="block" for="due">Cuota</label>
                                                {{ Form::number('due',null,['class' => 'required form-control','id' => 'due']) }}
                                                <div class="invalid-feedback d-block"></div>
                                            </div>

                                            <div class="col-md-6 col-lg-6">
                                                <label class="block" for="porcent">Porcentaje</label>
                                                {{ Form::number('porcent',null,['class' => 'required form-control','id' => 'porcent']) }}
                                                <div class="invalid-feedback d-block"></div>
                                            </div>


                                        </div>


                                        <button type="submit" class="btn btn-primary">Crear</button>
                                        {{ Form::close() }}

                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <!--Forms - Wizard js-->
    <script src="bower_components/jquery-validation/js/jquery.validate.js"></script>
    <!-- Validation js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script type="text/javascript" src="assets/pages/form-validation/validate.js"></script>
    <!-- Custom js -->

    <!-- Select 2 js -->
    <script type="text/javascript" src="bower_components/select2/js/select2.full.min.js"></script>

    <script type="text/javascript" src="js/validations/financings.js"></script>

@endsection