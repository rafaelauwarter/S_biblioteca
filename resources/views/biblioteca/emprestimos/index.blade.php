@extends('biblioteca.template.app')

@section('content')
<h1>Listagem de Emprestimos</h1>

<form>   
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table id="example" class="display w-full text-sm text-left text-gray-500 dark:text-gray-400" style="width:100%">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Codigo
                </th>
                <th scope="col" class="px-6 py-3">
                    Cod Livro
                </th>
                <th scope="col" class="px-6 py-3">
                    Nome Livro
                </th>
                <th scope="col" class="px-6 py-3">
                    Cod Leitor
                </th>
                <th scope="col" class="px-6 py-3">
                    Nome Leitor
                </th>
                <th scope="col" class="px-6 py-3">
                    Data de Saida
                </th>
                <th scope="col" class="px-6 py-3">
                    Data de retorno
                </th>
                <th scope="col" class="px-6 py-3">
                    Observaçoes
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
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
            @foreach($emprestimos as $emprestimo)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $emprestimo->id }}
                </th>
                <td class="px-6 py-4">
                    {{ $emprestimo->id_livro }}
                </td>
                <td class="px-6 py-4">
                    {{ $emprestimo->nome_livro }}
                </td>
                <td class="px-6 py-4">
                    {{ $emprestimo->id_leitor }}
                </td>
                <td class="px-6 py-4">
                    {{ $emprestimo->nome_leitor }}
                </td>
                <td class="px-6 py-4">
                    {{ $emprestimo->data_saida }}
                </td>
                <td class="px-6 py-4">
                    {{ $emprestimo->data_retorno }}
                </td>
                
                <td class="px-6 py-4">
                    {{ $emprestimo->observacao }}
                </td>
                <td class="px-6 py-4">
                    <?php
                    if ($emprestimo->status == '1'){
                        echo "emprestado";
                    }else{
                        echo "devolvido";
                    }
                    ?>

                </td>
                
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('emprestimos.update', $emprestimo->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Devolver</a>
    
                <!-- </td>
                <td class="px-6 py-4 text-right"> -->
                    <!-- <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Deletar</a> -->
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</form>

@endsection