<?php

namespace App\Http\Controllers;

use App\Bordero;
use App\User;
use App\Forms\BorderoForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Kris\LaravelFormBuilder\FormBuilder;

/**
 * Class BorderoController
 * @package App\Http\Controllers
 */
class BorderoController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {


        $borderos = Bordero::whereHas('dprojeto', function ($query) {
            $user = auth()->user();
            $query->where('usu_gestor', '=', $user->usu_id);
            $query->orWhere('usu_coord', '=', $user->usu_id);
        })->get();


//       Para buscar todos os Borderos descomente a proxima linha
        //$borderos = Bordero::all();
//            ->orderBy('bor_dataope', 'desc')
//            ->paginate(9);

        return view('admin.bordero.index', compact("borderos"));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(BorderoForm::class, [
            'method' => 'POST',
            'url' => route('bordero.store')
        ]);

        return view('admin.bordero.create', compact('form'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        try {
            Bordero::create($request->all());

            return redirect()
                ->route('bordero.index')
                ->with('alert-success', 'Bordero cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('alert-danger', 'Bordero não cadastrado!');
        }
    }


    /**
     * @param FormBuilder $formBuilder
     * @param Bordero $bordero
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(FormBuilder $formBuilder, Bordero $bordero)
    {
        if (!$this->authorize('update', $bordero)) {
            return response([], 403);
        }
        //DB::statement('SELECT tri_fbordero()', []);
        $form = $formBuilder->create(BorderoForm::class, [
            'method' => 'PUT',
            'url' => route('bordero.update', $bordero->getKey()),
            'model' => $bordero
        ]);

        return view('admin.bordero.edit', compact('form', 'bordero'));
    }

    /**
     * @param Bordero $request
     * @param Bordero $bordero
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Bordero $bordero)
    {
        if (!$this->authorize('update', $bordero)) {
            return response([], 403);
        }

        try {
            $bordero->update($request->all());

            return redirect()->back()->with('alert-success', 'Bordero Atualizado com Sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('Erro !');
        }

//        try {
//            $bordero->update($request->all());
//
//            return redirect()->route('bordero.index')->with('alert-success', 'Bordero Atualizado com Sucesso!');
//        } catch (\Exception $e) {
//            return redirect()->back()->with('Erro !');
//        }
    }


    public function show($id)
    {
//        $bordero = Bordero::find($id);
//        return view('admin.bordero.show')->with('bordero', $bordero);
    }

    /**
     * @param Bordero $bordero
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Bordero $bordero)
    {
        if (!$this->authorize('delete', $bordero)) {
            return response([], 403);
        }
        try {
            $bordero->delete();

            return response()->json($bordero->toArray());
        } catch (\Exception $e) {
            return redirect()->back()->with('Erro !');
        }
    }
}
