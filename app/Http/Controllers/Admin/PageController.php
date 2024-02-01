<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\movie;

class PageController extends Controller
{
    //All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.

    public function index( ){
        $movies = movie::all();
        return view('admin.movie.index',['movie'=>$movies]);

    }

}
