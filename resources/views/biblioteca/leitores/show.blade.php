@extends('biblioteca.template.app')

@section('content')

    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Deletar o leitor {{ $leitor->nome }}</h1>

    <div class="mb-6">
            <div>
                <label for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Codigo</label>
                <input type="text" name="id" value="{{ $leitor->id }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            <div>
                <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                <input type="text" name="nome" value="{{ $leitor->nome }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            <div>
                <label for="telefone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefone</label>
                <input type="text" name="telefone" value="{{ $leitor->telefone }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>
                <label for="endereco" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Endereço</label>
                <input type="text" name="endereco" value="{{ $leitor->endereco }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            <div>
                <label for="turma" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Turma</label>
                <input type="text" name="turma" value="{{ $leitor->turma }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            
            <div>
                <label for="observacoes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                <textarea name="observacao" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >{{ $leitor->observacao }}</textarea>
            </div>
    </div>

    <form action="{{ route('leitores.delete', $leitor->id) }}" method="POST">
        @csrf
        @method('delete')
        <!-- <button type="submit">Deletar</button> -->
        <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Deletar</button>
    </form>
@endsection