<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\core\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title="Gestão de Categorias";
        $categories=Categoria::all();

        return view('admin.pages.categoria.index',[
            'page_title'=>$page_title,
            'categories'=>$categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'designacao' => ['required', 'min:3', 'string'],
        ],
            [
                'designacao.required' => 'O  Designação é  obrigatória!'
            ]
        );

        try{

            $categoryExists=Categoria::where('designacao',$request->designacao)->first();

            if($categoryExists)
            {
                return redirect()->back()->with('error','Categoria existente!');
            }

            $categoryToStore=Categoria::create([
                'designacao'=>$request->designacao,
            ]);

            return redirect()->back()->with('success','Categoria criada!');

        }catch(\Exception $ex)
        {
            Log::debug('1. CategoriaController->store() : ' . $ex->getMessage());

            return redirect()
                ->route('')
                ->with('error', 'Alguma coisa correu mal ao tentar  registar a Categoria!');
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
