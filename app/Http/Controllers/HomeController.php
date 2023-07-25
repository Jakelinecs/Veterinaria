<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Servicio;
use App\Models\TipoServicio;
use App\Models\DetalleServicio;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            $ventasporServicio = TipoServicio::select('tipo_servicios.servicio', \DB::raw('COUNT(detalle_servicios.id) as total_ventas'))
            ->leftJoin('detalle_servicios', 'tipo_servicios.id', '=', 'detalle_servicios.nro_servicio')
            ->where('detalle_servicios.tipo_servicio', '=', 'Control')
            ->groupBy('tipo_servicios.servicio') // Agregar esta línea
            ->orderBy('total_ventas', 'desc')
            ->get();

        $labels = [];
        $values = [];
        foreach ($ventasporServicio as $venta) {
            $labels[] = $venta->servicio;
            $values[] = $venta->total_ventas;
        }

        $atencion = DetalleServicio::select('detalle_servicios.tipo_servicio', \DB::raw('COUNT(detalle_servicios.id) as total_ventas'))
            ->where('detalle_servicios.tipo_servicio', '=', 'Atencion Clinica')
            ->groupBy('detalle_servicios.tipo_servicio')
            ->orderBy('total_ventas', 'desc')
            ->first(); // Usar first() en lugar de get()

        if ($atencion) {
            $labels[] = $atencion->tipo_servicio;
            $values[] = $atencion->total_ventas;
        }

        $ventasPorServicioData = [
            'servicios' => $labels,
            'ventas' => $values,
        ];

        // Obtener datos de evolucion de las ventas
        $evolucionVentas = Servicio::select('fecha', 'total')
        ->orderBy('fecha')
        ->get();

        // Preparar los datos para el gráfico
        $labels = [];
        $values = [];

        foreach ($evolucionVentas as $venta) {
            $fecha = Carbon::parse($venta->fecha); // Convertir a objeto Carbon
            $labels[] = $fecha->format('Y-m-d');
            $values[] = $venta->total;
        }

        $evolucionVentasData = [
            'labels' => $labels,
            'values' => $values,
        ];

        return view('home', compact('ventasPorServicioData', 'evolucionVentasData'));
    }
}
