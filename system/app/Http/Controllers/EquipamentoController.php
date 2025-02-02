<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipamento;

class EquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $equipamentos = Equipamento::all();
        return view('equipamentos.index', compact('equipamentos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('equipamentos.register');
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
            'name' => 'required|string|max:255',
            'amount' => 'required|integer|min:1',
        ]);

        Equipamento::create($request->all());
        return redirect()->route('equipamentos.index')->with('success', 'Equipamento Cadastrado com Sucesso!');
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
        $equipamento = Equipamento::findOrFail($id);
        return view('equipamentos.edit', compact('equipamento'));
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
        $request->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|integer|min:1',
        ]);

        $equipamento = Equipamento::findOrFail($id);
        $equipamento->update($request->all());

        return redirect()->route('equipamentos.index')->with('success', 'Equipamento Atualizado com Sucesso!');

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
        $equipamento = Equipamento::findOrFail($id);
        $equipamento->delete();

        return redirect()->route('equipamentos.index')->with('success', 'Equipamento deletado com sucesso!');
}
}
