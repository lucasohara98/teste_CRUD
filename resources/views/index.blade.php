@extends('templates.template')

@section('content')
   <h1 class="text-center"> Livraria</h1>
  
   <!--criando uma div com o botao "incluir"-->
   <div class="text-center mb-3">
   <a href="{{url('books/create')}}">   <!--chamando o "helper url create"-->
              <button class="btn btn-success">Incluir</button>
          </a> 
   </div>
   
  <div class= "col-10 m-auto">
  @csrf
   <table class="table table-hover table-dark text-center">
  <thead>
   <!--inserindo os nomes das colunas na view-->
  <tr>
      <th scope="col">Codigo do Livro</th>
      <th scope="col">Título</th>
      <th scope="col">Autor</th>
      <th scope="col">Sinopse</th>
      <th scope="col">Tipo de Capa</th>
      <th scope="col">ISBN</th>
      <th scope="col">Valor R$:</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>

<!-- mostrando na view o livros registrados no BD -->
   @foreach($book as $books) 
   <tr>
      <th scope="row">{{$books->id}}</th>
      <td>{{$books->title}}</td>
      <td>{{$books->author}}</td> 
      <td>{{$books->synopsis}}</td>
      <td>{{$books->cover}}</td>
      <td>{{$books->ISBN}}</td>
      <td>{{$books->price}}</td>
      <!-- criando botoes "editar" e "excluir" com o bootstrap-->
      <td>
       
          <a href="{{url("books/$books->id/edit")}}">
          <button class="btn btn-primary mb-2">Editar</button>
          </a>

          <form action="/books/{{ $books->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"> Deletar </button>
          </form>
        
        
      </td>
      
    </tr>
   @endforeach


   </div>
@endsection