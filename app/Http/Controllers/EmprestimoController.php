<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\emprestimo;
use App\Models\Livros;
use App\Models\leitor;

class EmprestimoController extends Controller
{
    public function index(){
        $emprestimo = new emprestimo;
        $emprestimos = $emprestimo->all();

        return view ('biblioteca/emprestimos/index', [
            'emprestimos' => $emprestimos,
        ]);
    }

    public function create($id_livro){
        if (!$livro = Livros::find($id_livro)){
            return back();
        }

        $leitor = new leitor;
        $leitores = $leitor->all();

        return view('biblioteca/emprestimos/create', compact ('livro'),[
            'leitores' => $leitores,
        ]);
    }

    public function store(Request $request){
        $data = $request->all();
        
        if (!$nome_leitor = leitor::find($data['id_leitor'])){
            return back();
        }else{
            $data['nome_leitor'] = $nome_leitor->nome;
        }
        //dd($data);
        

        emprestimo::create($data);

        return redirect()->route('emprestimos.index');
    }

    public function update($id){
        if (!$emprestimo = emprestimo::find($id)){
            return back();
        }
        $emprestimo->update([
            'status'=> 0
        ]);

        // dd($emprestimo);

        return redirect()->route('emprestimos.index');
    }

    public function show($id){

        // Livros::find($id)
        // Livros::where('id', $id)->first();
        // Livros::find('id', '!=', $id)->first();
        if (!$emprestimo = emprestimo::find($id)){
            return back();
        }

        // dd($emprestimo);

        return redirect()->route('emprestimos.index');
    }
}
