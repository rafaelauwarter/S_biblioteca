@extends('biblioteca.template.app')

@section('content')
    
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Edição de livros</h1>

    <form action="{{ route('livros.update', $livro->id) }}" method="POST">
        <!-- <input type="hidden" value="{{ csrf_token() }}" name="token"> -->
        @csrf()
        @method('PUT')
        <div class="mb-6">
            <div>
                <label for="nome_livro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Livro</label>
                <input type="text" name="titulo" value="{{ $livro->titulo }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            <div>
                <label for="autor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Autor</label>
                <input type="text" name="autor" value="{{ $livro->autor }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>
                <label for="editora" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Editora</label>
                <input type="text" name="editora" value="{{ $livro->editora }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            <div>
                <label for="codigo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Codigo</label>
                <input type="text" name="codigo" value="{{ $livro->codigo }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            <div>
                <label for="quantidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantidade</label>
                <input type="text" name="quantidade" value="{{ $livro->quantidade }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
            </div>
            <div>
                <label for="categoria" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoria</label>
                <input type="text" name="categoria" value="{{ $livro->categoria }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
            </div>
            <div>
                <label for="cor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cor</label>
                <input type="text" name="cor" value="{{ $livro->cor }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
            </div>
            <div>
                <label for="local" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Local</label>
                <input type="text" name="local" value="{{ $livro->local }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
            </div>
            <div>
                <label for="observacoes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observações</label>
                <textarea name="observacao" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >{{ $livro->observacao }}</textarea>
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar</button>

        </div>  
    </form>
@endsection