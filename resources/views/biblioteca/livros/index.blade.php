@extends('biblioteca.template.app')

@section('content')

<h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Listagem de Livros</h1>


<form>   
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table id="example" class="display w-full text-sm text-left text-gray-500 dark:text-gray-400" style="width:100%">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Codigo
                </th>
                <th scope="col" class="px-6 py-3">
                    Titulo
                </th>
                <th scope="col" class="px-6 py-3">
                    Autor
                </th>
                <th scope="col" class="px-6 py-3">
                    Editora
                </th>
                <th scope="col" class="px-6 py-3">
                    Quantidade
                </th>
                <th scope="col" class="px-6 py-3">
                    Categoria
                </th>
                <th scope="col" class="px-6 py-3">
                    Cor
                </th>
                <th scope="col" class="px-6 py-3">
                    Local
                </th>
                <th scope="col" class="px-6 py-3">
                    Observaçoes
                </th>
                <th scope="col" class="px-6 py-3">
                    
                    <!-- <span class="sr-only">Editar</span> -->
                </th>
                <!-- <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Deletar</span>
                </th> -->
            </tr>
        </thead>
        <tbody>
            @foreach($livros as $livro)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $livro->codigo }}
                </th>
                <td class="px-6 py-4">
                    {{ $livro->titulo }}
                </td>
                <td class="px-6 py-4">
                    {{ $livro->autor }}
                </td>
                <td class="px-6 py-4">
                    {{ $livro->editora }}
                </td>
                <td class="px-6 py-4">
                    {{ $livro->quantidade }}
                </td>
                <td class="px-6 py-4">
                    {{ $livro->categoria }}
                </td>
                <td class="px-6 py-4">
                    {{ $livro->cor }}
                </td>
                <td class="px-6 py-4">
                    {{ $livro->local }}
                </td>
                <td class="px-6 py-4">
                    {{ $livro->observacao }}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('livros.edit', $livro->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                    <a href="{{ route('emprestimos.create', $livro->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Emprestar</a>
                <!-- </td>
                <td class="px-6 py-4 text-right"> -->
                    <a href="{{ route('livros.show', $livro->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Deletar</a>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</form>

@endsection