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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Bordero $bordero, TarifaBancaria $rate, Request $request)
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
     * @param Bordero $bordero
     * @param TarifaBancariaPorBordero $rate
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Bordero $bordero, TarifaBancariaPorBordero $rate)
    {
        return view('admin.bordero._tarifa-edit', [
            'rate' => $rate,
            'bordero' => $bordero,
        ]);
    }

    /**
     * @param Request $request
     * @param Bordero $bordero
     * @param TarifaBancariaPorBordero $rate
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Bordero $bordero, TarifaBancariaPorBordero $rate)
    {
        $value = $request->get('amount');

        try {
            $rate->update([
                'tab_valor' => $value,
            ]);

            return response()->json($rate->toArray());
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bordero $bordero, TarifaBancariaPorBordero $rate)
    {
        try {
            $rate->delete();

            return response()->json($rate->toArray());
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
