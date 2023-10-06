<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animais')->insert([
            'nome' => 'Carlinha',
            'porte' => 'pequeno',
            'idade' => '1',
            'detalhes' => 'Inteligente',
            'descricao' => 'querida',
            'imagem' => 'imagens/carlinha.jpg',
            ]);

            DB::table('animais')->insert([
                'nome' => 'Carlinha',
                'porte' => 'pequeno',
                'idade' => '1',
                'detalhes' => 'Inteligente',
                'descricao' => 'querida',
                'imagem' => 'imagens/carlinha.jpg',
                ]);


                DB::table('animais')->insert([
                    'nome' => 'Carlinha',
                    'porte' => 'pequeno',
                    'idade' => '1',
                    'detalhes' => 'Inteligente',
                    'descricao' => 'querida',
                    'imagem' => 'imagens/carlinha.jpg',
                    ]);
           
    }
}
