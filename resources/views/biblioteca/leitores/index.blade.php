@extends('biblioteca.template.app')

@section('content')
<h1>Listagem de Leitores</h1>

<form>   
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table id="example" class="display w-full text-sm text-left text-gray-500 dark:text-gray-400" style="width:100%">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Codigo
                </th>
                <th scope="col" class="px-6 py-3">
                    Nome
                </th>
                <th scope="col" class="px-6 py-3">
                    Telefone
                </th>
                <th scope="col" class="px-6 py-3">
                    Endereço
                </th>
                <th scope="col" class="px-6 py-3">
                    Turma
                </th>
                <th scope="col" class="px-6 py-3">
                    Observaçoes
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Editar</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Deletar</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($leitores as $leitor)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $leitor->id }}
                </th>
                <td class="px-6 py-4">
                    {{ $leitor->nome }}
                </td>
                <td class="px-6 py-4">
                    {{ $leitor->telefone }}
                </td>
                <td class="px-6 py-4">
                    {{ $leitor->endereco }}
                </td>
                <td class="px-6 py-4">
                    {{ $leitor->turma }}
                </td>
                <td class="px-6 py-4">
                    {{ $leitor->observacao }}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('leitores.edit', $leitor->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('leitores.show', $leitor->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Deletar</a>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</form>

@endsection