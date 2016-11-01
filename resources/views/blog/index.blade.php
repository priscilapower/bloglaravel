@extends('template')

@section('title')
    Blog - Início
@stop

@section('content')
    <div class="header-bottom">
        <div class="clearfix"> </div>
        <!-- blog -->
        <div class="blog">
            <div class="blog-left">
                @foreach($posts as $post)
                    <div class="blog-left-grid">
                        <div class="blog-left-grid-left">
                            <h3><a href="#">{{$post['titulo']}}</a></h3>
                            <p>by <span>{{$post['autor']}}</span> | {{$post['data']}}</p>
                        </div>
                        <div class="clearfix"> </div>
                        <a href="#"><img src="{{$post['imagem']}}" alt=" " class="img-responsive" /></a>
                        <p class="para">{{$post['descricao']}}</p>
                        <div class="rd-mre">
                            <a href="" class="hvr-bounce-to-bottom quod">Leia mais</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //blog -->
    </div>
@stop