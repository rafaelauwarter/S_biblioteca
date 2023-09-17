<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livros;


class LivrosController extends Controller
{
    public function index(){
        // recuperar toda tabela do banco
        $livro = new Livros;
        $livros = $livro->all();
        // dd($livros);
        
        return view ('biblioteca/livros/index', [
            'livros' => $livros,
            
        ]);
        
    }
    
    public function create(){
        return view('biblioteca/livros/create');
    }

    public function store(Request $request){

        $data = $request->all();
        $data['status'] = 'a';

        Livros::create($data);

        return redirect()->route('livros.index');
    }

    public function show($id){

        // Livros::find($id)
        // Livros::where('id', $id)->first();
        // Livros::find('id', '!=', $id)->first();
        if (!$livro = Livros::find($id)){
            return back();
        }

        return view ('biblioteca/livros/show', compact('livro'));
    }

    public function edit($id){
        if (!$livro = Livros::find($id)){
            return back();
        }

        // dd($livro);

        return view('biblioteca/livros/edit', compact('livro'));
    }

    public function update(Request $request, $id){
        if (!$livro = Livros::find($id)){
            return back();
        }

        $livro->update($request->all());

        return redirect()->route('livros.index');
    }

    public function delete($id){
        if (!$livro = Livros::find($id)){
            return back();
        }

        $livro->delete();
        return redirect()->route('livros.index');

    }
}
