<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Session;
use \App\Nota;
use \App\Aluno;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  Nota::orderBy('id')->get()->toArray();
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
         $this->validate($request, array(
            'displina_id' => 'required|max:128',
            'aluno_id' => 'required|max:128',

            'prova_1' => 'required|max:32',
            'prova_2' => 'required|max:32',
            'prova_3' => 'required|max:32',
            'prova_4' => 'required|max:32',
            'prova_rec' => 'required|max:32',
            'media_final' => 'required|max:32',
            ));

            $notas = new Nota;

            $notas->disciplina_id= $request->disciplina_id;
            $notas->aluno_id= $request->aluno_id;
            $notas->prova_1= $request->prova_1;
            $notas->prova_2= $request->prova_2;
            $notas->prova_3= $request->prova_3;
            $notas->prova_4= $request->prova_4;

            $notas->prova_rec= $request->prova_rec;
            $notas->media_final= $request->media_final;

            $notas->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return $notas = Nota::findOrFail($id);
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
        $notas = Nota::findOrFail($id);

        $dados = $request->all();

        $notas->update($dados);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notas = Nota::findOrFail($id);
        $notas-> delete();

    }
}
