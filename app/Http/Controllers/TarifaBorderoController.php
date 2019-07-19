<?php

namespace App\Http\Controllers;

use App\Bordero;
use App\TarifaBancaria;
use App\TarifaBancariaPorBordero;
use Illuminate\Http\Request;

class TarifaBorderoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Bordero $bordero)
    {
        /**
        $tarifas = TarifaBancariaPorBordero::with(['dtarifa', 'fbordero'])
            ->orderBy('bor_id', 'desc')
            ->get();**/

        $tarifas = $bordero->fbortarifas()->with(['dtarifa'])->get();

        return view('admin.bordero._tarifas', compact("tarifas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Bordero $bordero, TarifaBancaria $rate, Request $request)
    {
        $value = $request->get('amount');

        try {
            $tarifa = $bordero->fbortarifas()->create([
                'tab_valor' => $value,
                'tar_id' => $rate->getKey()
            ]);

            return response()->json($tarifa->toArray());
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
