<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostMain extends Controller{
    public function index(){
        $post = new Post([
            'cupo' => 50,
            'lugar' => 'xela',
            'imagen' => 'https://via.placeholder.com/150',
            'fechaInicio' => '2023-12-06 08:00:00',
            'fechaFin' => '2023-12-07 17:00:00',
            'horaInicio' => '08:00:00',
            'horaFin' => '17:00:00'
            ]);


        return view('publicacion.publicacionMainView', compact('post'));
    }
}
