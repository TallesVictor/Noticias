<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Noticias extends Model
{
    use HasFactory;

    protected  $table = "noticias";

    protected  $fillable = ["id", "titulo", "img", "texto", "categoria", "autor", "created_at", "updated_at"];

    public function index()
    {
         return Noticias::all();
    }

    public function show(int $id)
    {
        return Noticias::where('id', $id)->get();
    }

    public function search(String $busca)
    {
        $busca = strtolower(preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($busca))));
        $noticias = DB::select("select * from noticias where titulo like '%$busca%'");
        if ($noticias) {
            return $noticias;
        } else {
            $noticias = DB::select("select * from noticias where categoria like '%$busca%'");
            return $noticias;
        }
        $noticias = DB::select("select * from noticias where texto like '%$busca%'");
        return $noticias;
    }
}
