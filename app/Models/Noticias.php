<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Noticias extends Model
{
    use HasFactory;

    protected  $table = "noticias";

    protected  $fillable = ["id", "titulo", "img", "texto", "categoria", "autor", "created_at", "updated_at"];

    public function create(Request $request)
    {
        $request->validate([

            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'autor' => 'required|string',
            'texto'      => 'required|string',
            'categoria'     => 'required|string',
            'titulo'      => 'required|string',

        ]);

        $imageName = time() . '.' . $request->img->extension();
        $request->img->move(public_path('img'), $imageName);

        $noticia = new Noticias($request->all());
        $noticia->img =  "img/$imageName";
        $noticia->created_at =  date('Y-m-d H:m:s');
        $noticia->updated_at = date('Y-m-d H:m:s');
        $noticia->save();
        
    }
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
            if ($noticias) {
                return $noticias;
            } else {
                $noticias = DB::select("select * from noticias where texto like '%$busca%'");
                return $noticias;
            }
        }
    }
}
