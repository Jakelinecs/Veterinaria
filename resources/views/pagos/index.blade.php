@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Pagos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        @can('crear-pago')
                            <a class="btn btn-warning" href="{{ route('pagos.create') }}"> Nuevo </a>
                        @endcan


                            <table id="data-table" class = "table table-striped mt-2">
                                <thead >
                                    <th>ID</th>
                                    <th>Categoría</th>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Precio Venta</th>
                                    <th>Stock</th>
                                    <th>Descripción</th>
                                    <th>Estado</th>
                                    <th> Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($pagos as $pago)
                                    <tr>
                                        <td>{{ $pago->id }}</td>
                                        <td>{{ $pago->codigo }}</td>
                                        <td>{{ $pago->nombre }}</td>
                                        <td>{{ $pago->precio_venta }}</td>
                                        <td>{{ $pago->stock }}</td>
                                        <td>{{ $pago->descripcion }}</td>
                                        <td>{{ $pago->estado }}</td>
                                        <td>
                                        @can('editar-pago')
                                            <a class = "btn btn-info" href="{{ route('pagos.edit',$pago->id) }}"> Editar </a>
                                        @endcan

                                        @can('borrar-pago')
                                            {!! Form::open(['method' => 'DELETE','route' => ['pagos.destroy', $pago->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('borrar', ['class'=>'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        @endcan

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $pagos->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

