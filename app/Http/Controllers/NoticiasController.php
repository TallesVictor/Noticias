<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = new Noticias();
        $noticias = $noticias->index();
        if (count($noticias)>0) {
            return $noticias;
        } else {
            return response('Nenhuma Notícia encontrado', 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $noticias = new Noticias();
        $noticias = $noticias->create($request);
        return $noticias;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $noticias = new Noticias();
        $noticias = $noticias->show($id);
        if (count($noticias)>0) {
            return $noticias;
        } else {
            return response('Nenhuma Notícia encontrado', 500);
        }
    }

    public function search(String $titulo)
    {
        $noticias = new Noticias();
        $noticias = $noticias->search($titulo);
        if (count($noticias)>0) {
            return $noticias;
        } else {
            return response('Nenhuma Notícia encontrado', 500);
        }
    }
}
