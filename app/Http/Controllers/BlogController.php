<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        
        $posts = [
            [
                "titulo" => "Desenvolvendo Sistemas Web",
                "data" => "31 de outubro de 2016",
                "autor" => "Priscila",
                "imagem" => "images/4.jpg",
                "descricao" => "Itaque earum rerum hic tenetur a sapiente delectus,
                        ut aut reiciendis voluptatibus maiores alias consequatur aut
                        perferendis doloribus asperiores repellat.Et harum quidem rerum
                        facilis est et expedita distinctio. Nam libero tempore, cum
                        soluta nobis est eligendi optio cumque nihil impedit quo minus
                        id quod maxime placeat facere possimus, omnis voluptas assumenda
                        est, omnis dolor repellendus. Temporibus autem quibusdam et
                        aut officiis debitis."
            ],
            [
                "titulo" => "Desenvolvendo Aplicativos",
                "data" => "31 de outubro de 2016",
                "autor" => "Priscila",
                "imagem" => "images/5.jpg",
                "descricao" => "Itaque earum rerum hic tenetur a sapiente delectus,
                        ut aut reiciendis voluptatibus maiores alias consequatur aut
                        perferendis doloribus asperiores repellat.Et harum quidem rerum
                        facilis est et expedita distinctio. Nam libero tempore, cum
                        soluta nobis est eligendi optio cumque nihil impedit quo minus
                        id quod maxime placeat facere possimus, omnis voluptas assumenda
                        est, omnis dolor repellendus. Temporibus autem quibusdam et
                        aut officiis debitis."
            ]
        ];
        
        return view('blog.index', compact('posts'));
    }
}
