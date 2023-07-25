@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Clinica Veterinaria C&B</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">



                                <h1>Dashboard de Ventas</h1>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <canvas id="graficoVentas"></canvas>
                                    </div>

                                    <div class="col-md-6">
                                        <canvas id="ventasPorservicio"></canvas>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
        // Obtener los datos para los gráficos desde el controlador
        var ventasPorCategoriaData = {!! json_encode($ventasPorServicioData) !!};
        const evolucionVentas = {!! json_encode($evolucionVentasData) !!};

        <?php
        // Aquí deberías tener la variable $ventasPorServicioData con los datos del gráfico
        $labels = json_encode($ventasPorServicioData['servicios']);
        $values = json_encode($ventasPorServicioData['ventas']);
        ?>


        // Configurar y renderizar el gráfico de ventas por categoría
        var ventasPorCategoriaCtx = document.getElementById('ventasPorservicio').getContext('2d');
        var ventasPorCategoriaChart =new Chart(ventasPorCategoriaCtx, {
            type: 'pie',
            data: {
                labels: <?php echo $labels; ?>,
                datasets: [{
                    data: <?php echo $values; ?>,
                    backgroundColor: [
                        // Puedes personalizar los colores de las porciones del gráfico aquí
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        // ...
                    ],
                }]
            },
            options: {
                // Puedes configurar opciones adicionales para el gráfico aquí
            }
        });

         // Crear el contexto del gráfico
         const ctx = document.getElementById('graficoVentas').getContext('2d');

        // Crear el gráfico de línea
        const graficoVentas = new Chart(ctx, {
            type: 'line',
            data: {
                labels: evolucionVentas.labels,
                datasets: [{
                    label: 'Evolución de Ventas',
                    data: evolucionVentas.values,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Fecha'
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Ventas'
                        }
                    }
                }
            }
        });



    </script>
@endsection


