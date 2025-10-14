<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filmes')->insert(
            ['nome'=>"Shrek 2", 'lancamento'=>"2004", 'classificação'=>"Livre", 'descricao'=>"Shrek e Fiona acabaram de voltar da lua de mel e vivem felizes em sua casa no pântano. O casal recebe um convite dos pais da princesa, que querem conhecer o novo genro, para um jantar no castelo. Eles ficaram sabendo que Fiona havia se casado com o seu verdadeiro amor, mas o que eles ainda não sabem é que este amor é um ogro mal-educado de mais de 300 quilos, que conta com um burro falante como melhor amigo.", 'duracao'=>"1h 30m", 'poster'=>"", 'capa'=>"", 'nacionalidade_ID'=>3, 'diretor_ID'=>1, 'produtora_ID'=>1],
        );
    }
}
