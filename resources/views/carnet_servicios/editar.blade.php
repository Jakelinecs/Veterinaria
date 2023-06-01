@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Carnet De Servico</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>!Revise los campos!</strong>
                                    @foreach ($errors->all() as $error)
                                        <span class="badge badge-danger">{{$error}}</span>
                                    @endforeach
                                    <button type= "button" class="close" data-dismiss="alert" aria-label="close">
                                        <span aria-hidden="true">$times;</span>
                                    </button>    
                                </div>
                            @endif

                            {!! Form::model($paciente, ['method' => 'PUT', 'enctype'=>'multipart/form-data','route' => ['pacientes.update', $paciente->id]]) !!}
                            <div class="row">




                            <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <label class='form-control'>{{ $paciente->nombre }}</label>
                                    </div>
                                </div>
    
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label for="raza">Raza</label>
                                        <label class='form-control'>{{ $paciente->raza }}</label>
                                    </div>
                                </div>
    
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label for="sexo">sexo</label>
                                        <label class='form-control'>{{ $paciente->sexo }}</label>
                                    </div>
                                </div>
    
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="f_nacimiento">F Nacimiento</label>
                                        <label class='form-control'>{{ $paciente->f_nacimiento }}</label>
                                    </div>
                                </div>
    
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="especie">Especie</label>
                                        <label class='form-control'>{{ $paciente->especie }}</label>
                                    </div>
                                </div>
    
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="color">color</label>
                                        <label class='form-control'>{{ $paciente->color }}</label>
                                    </div>
                                </div>
    
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="f_nacimiento">Propietario</label>
                                        @foreach ($propietarios as   $propietari)
                                            @if ($propietari->id ==   $paciente->propietario)
                                                <label class='form-control'>{{ $propietari->nombre.' '.$propietari->app_apm }}</label>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>




                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="f_nacimiento">Control de Vacunas</label>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <button type="submit" class="btn btn-primary">Nuevo</button>
                                        </div>
    
                                        <table id="data-table" class = "table table-striped mt-2">
                                            <thead >
                                                <th> Fecha</th>
                                                <th> Vacuna</th>
                                                <th> Prox. Vacuna</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        
                                                    </td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td>
                                                        
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="f_nacimiento">Vacunas Antirabicas</label>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <button type="submit" class="btn btn-primary">Nuevo</button>
                                        </div>
    
                                        <table id="data-table" class = "table table-striped mt-2">
                                            <thead >
                                                <th> Fecha</th>
                                                <th> Vacuna</th>
                                                <th> Prox. Vacuna</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        
                                                    </td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td>
                                                        
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>




                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="f_nacimiento">Desparacitacion</label>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <button type="submit" class="btn btn-primary">Nuevo</button>
                                        </div>
    
                                        <table id="data-table" class = "table table-striped mt-2">
                                            <thead >
                                                <th> Fecha</th>
                                                <th> Vacuna</th>
                                                <th> Prox. Vacuna</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        
                                                    </td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td>
                                                        
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="f_nacimiento">Control Reproductivo</label>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <button type="submit" class="btn btn-primary">Nuevo</button>
                                        </div>
    
                                        <table id="data-table" class = "table table-striped mt-2">
                                            <thead >
                                                <th> Fecha</th>
                                                <th> Vacuna</th>
                                                <th> Prox. Vacuna</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        
                                                    </td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td>
                                                        
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="f_nacimiento">Atencion Clinica</label>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button type="submit" class="btn btn-primary">Nuevo</button>
                                        </div>
    
                                        <table id="data-table" class = "table table-striped mt-2">
                                            <thead >
                                                <th> Fecha</th>
                                                <th> Vacuna</th>
                                                <th> Prox. Vacuna</th>
                                                <th> Actividad </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        
                                                    </td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td>
                                                        
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                             </div>

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    function previewImage(event) {
        var input = event.target;
        var reader = new FileReader();

        reader.onload = function(){
            var preview = document.getElementById('imagen-preview');
            preview.src = reader.result;
            preview.style.display = 'block';
        };

        reader.readAsDataURL(input.files[0]);
    }
</script>
    @endsection

