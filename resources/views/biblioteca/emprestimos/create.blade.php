@extends('biblioteca.template.app')

@section('content')
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Cadastro de Emprestimos</h1>

    <form action="{{ route('emprestimos.store', $livro->id) }}" method="POST">
    @csrf()
        <div class="mb-6">
            <div>
                <label for="id_livro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Codigo Livro</label>
                <input type="text" name="id_livro" value="{{ $livro->id }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly required>
            </div>
            <div>
                <label for="nome_livro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Codigo Livro</label>
                <input type="text" name="nome_livro" value="{{ $livro->titulo }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly required>
            </div>
            <div>
                <label for="leitor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Codigo Leitor</label>
                <select name="id_leitor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($leitores as $row)
                        <option value="{{ $row->id }}">{{ $row->id }} - {{ $row->nome }}</option>
                        <!-- <input type="hidden" name="nome_leitor" value="{{ $row->nome }}"> -->
                    @endforeach
                </select>
            </div>
            <div>
                <label for="data_saida" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data de saida</label>
                <input type="date" name="data_saida" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            <div>
                <label for="data_devolucao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data de devolução</label>
                <input type="date" name="data_retorno" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            <div>
                <label for="observacoes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                <textarea name="observacao" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" ></textarea>
            </div>
            <div>
                <input type="hidden" name="status" value="1">
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar</button>

        </div>  
    </form>
@endsection