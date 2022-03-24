@extends('templates.template')

@section('content')

<h1 class="text-center">@if(isset($book)) Editar @else Incluir @endif</h1> <hr>

    <div class="col-8 m-auto">

        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif

        @if(isset($book))
            <form name="formEdit" id="formEdit" method="post" action="{{url("books/$book->id")}}">
                @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
        @endif
            @csrf
            <input class="form-control" type="text" name="title" id="title" placeholder="Título:" value="{{$book->title ?? ''}}"><br>
            <input class="form-control" type="text" name="author" id="author" placeholder="Autor:" value="{{$book->author ?? ''}}"><br>
            <input class="form-control" type="text" name="synopsis" id="synopsis" placeholder="Sinopse" value="{{$book->synopsis ?? ''}}"><br>
            <select class="form-control" name="cover" id="cover" value="{{$book->cover ?? ''}}">
                <option value="">tipo de capa</option>
                <option value="capa dura">capa dura</option>
                <option value="capa cartonada">capa cartonada</option>
            </select><br>
            <input class="form-control" type="text" name="ISBN" id="ISBN" placeholder="ISBN" value="{{$book->ISBN ?? ''}}"><br>
            <input class="form-control" type="text" name="price" id="price" placeholder="Preço:" value="{{$book->price ?? ''}}"><br>
            <input class="btn btn-primary" type="submit" value="@if(isset($book)) Editar @else Cadastrar @endif">
        </form>

   </div>

@endsection
