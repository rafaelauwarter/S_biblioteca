<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date("Y-m-d H:i:s");
        DB::table('leitor')->insert([
            ['nome' => 'Leitor teste', 'telefone' => '15999999999', 'endereco' => 'Rua dos bobos, n 0', 'turma' => '1 x', 'observacao' => 'aluno revoltado']
        ]);
    }
}
