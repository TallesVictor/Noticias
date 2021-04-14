<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiasSeeder extends Seeder
{

    static $noticias  = array (
        array("Teste teste","img/img1.png","ARTIGO", "Opsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess", "José Silva"),
        array("Consectetur","img/img2.png","ESPORTE","Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess", "José Silva"),
        array("Ullamco laboris","img/img3.png","TECNOLOGIA","Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess", "José Silva"),
        array("Titulo teste","img/img4.png","ESPORTE","Ion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat", "José Silva"),
        array("Título TESTE","img/img5.png","EDUCACAO","Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam", "José Silva"),
        array("Sed do eiusmod","img/img6.png","EDUCACAO","Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess", "José Silva"),
        array("Labore et","img/img7.png","SAUDE","Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess", "José Silva"),
      );


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$noticias as $chave => $valor) {
            DB::table('noticias')->insert([
                'titulo' => $valor[0],
                'img' => $valor[1],
                'categoria' => $valor[2],
                'texto' =>$valor[3],
                'autor' => $valor[4],
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ]);
        }


    }
}
