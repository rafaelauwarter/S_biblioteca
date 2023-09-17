<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\leitor;

class LeitorController extends Controller
{
    public function index(){

        $leitor = new leitor;
        $leitores = $leitor->all();

        return view ('biblioteca/leitores/index', [
            'leitores' => $leitores
        ]);

    }

    public function create(){
        return view('biblioteca/leitores/create');
    }

    public function store(Request $request){
        $data = $request->all();

        leitor::create($data);

        return redirect()->route('leitores.index');
    }

    public function show($id){
        if (!$leitor = leitor::find($id)){
            return back();
        }
        
        return view ('biblioteca/leitores/show', compact ('leitor'));
    }

    public function delete($id){
        if (!$leitor = leitor::find($id)){
            return back();
        }

        $leitor->delete();
        return redirect()->route('leitores.index');
    }

    public function edit($id){
        if (!$leitor = leitor::find($id)){
            return back();
        }

        return view ('biblioteca/leitores/edit', compact('leitor'));
    }

    public function update(Request $request, $id){
        if (!$leitor = leitor::find($id)){
            return back();
        }

        $leitor->update($request->all());

        return redirect()->route('leitores.index');
    }
}
