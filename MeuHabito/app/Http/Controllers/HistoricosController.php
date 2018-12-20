<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Historico;
use App\Http\Requests\HistoricoRequest;

class HistoricosController extends Controller {
    
	public function index() {
		$historicos = Historico::all();
		return view('historicos.index', ['historicos' => $historicos]);
	}

	public function create() {
    	return view('historicos.create');
    }

    public function store(HistoricoRequest $request) {
    	$novoHistorico = $request->all();
    	Historico::create($novoHistorico);

    	return redirect()->route('historicos');
    }

    public function destroy($id){
    	Historico::find($id)->delete();
    	return redirect()->route('historicos');
    }

    public function edit($id){
    	$historico = Historico::find($id);
    	return view('historicos.edit', compact('historico'));
    }

    public function update(HistoricoRequest $request, $id) {
    	$historico = Historico::find($id)->update($request->all());
    	return redirect()->route('historicos');
    }

}
