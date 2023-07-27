<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;


use App\Models\Pago;
use App\Models\Servicio;
use Illuminate\Http\Request;

class PagoController extends Controller
{

    function _construct(){
        $this->middleware('permission:ver-pago|crear-pago|editar-pago|borrar-pago', ['only'=>['index']]);
        $this->middleware('permission:crear-pago', ['only'=>['create','store']]);
        $this->middleware('permission:editar-pago', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-pago', ['only'=>['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pagos = Pago::paginate(10);

        return view('pagos.index', compact('pagos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $servicios = Servicio::all();

        return view('pagos.crear', compact('servicios'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'idservicio' => 'required',
            'nombre' => 'required',
            'numero_referencia' => 'nullable',
            'monto' => 'required',
            'descripcion' => 'nullable',
            'metodo_pago' => 'required',
        ]);




        $subcadenas = explode(" ", $request->idservicio);


        $venta = Pago::create([
            'idservicio' => $subcadenas[0],
            'nombre' => $request->nombre,
            'numero_referencia' => $request->numero_referencia,
            'monto' => $request->monto,
            'descripcion' => $request->descripcion,
            'metodo_pago' => $request->metodo_pago,
            'fecha' => now(),
            'estado_pago' => 'Cancelado',

        ]);

        return redirect()->route('pagos.index')->with('success', 'Pago agregado exitosamente');

    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function show(Pago $pago)
    {
        //



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function edit(Pago $pago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pago $pago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pago = Pago::findOrFail($id);
        $pago->estado_pago = 'Anulado';
        $pago->save();

        return redirect()->route('pagos.index');
    }
}
