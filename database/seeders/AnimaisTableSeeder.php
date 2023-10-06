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
            'tipo' => 'gato',
            'porte' => 'medio',
            'idade' => '3',
            'descricao' => 'meio reinenta mas querida',
            'imagem' => 'imagens/carlinha.jpg',
            ]);

            DB::table('animais')->insert([
                'nome' => 'Joana',
                'tipo' => 'gato',
                'porte' => 'pequeno',
                'idade' => '1',
                'descricao' => 'um amor de gato uma fofura',
                'imagem' => 'imagens/joana.jpg',
                ]);


                DB::table('animais')->insert([
                    'nome' => 'Jorge',
                    'tipo' => 'cachorro',
                    'porte' => 'grande',
                    'idade' => '3',
                    'descricao' => 'um amor de cachorro apesar de ser grande',
                    'imagem' => 'imagens/jorge.jpg',
                    ]);
           
    }
}
