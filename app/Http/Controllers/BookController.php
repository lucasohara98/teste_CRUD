<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBook;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    private $objBook;
    public function __construct()
    {
      $this->objBook= new ModelBook();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $book=$this->objBook->all();
      return view('index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $include=$this->objBook->create([
        'title'=>$request->title,
        'author'=>$request->author,
        'synopsis'=>$request->synopsis,
        'cover'=>$request->cover,
        'ISBN'=>$request->ISBN,
        'price'=>$request->price

        ]);
        if($include){
            return redirect('books');
        }
        /**esse if serve para que apos a inclusao ele retorne para pagina books*/
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book=$this->objBook->find($id);
        return view('create',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        $this->objBook->where(['id'=>$id])->update([
            'title'=>$request->title,
            'author'=>$request->author,
            'synopsis'=>$request->synopsis,
            'cover'=>$request->cover,
            'ISBN'=>$request->ISBN,
            'price'=>$request->price
        ]);
        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->objBook::FindOrFail($id)->delete();
      return redirect('/books')->with('msg', 'Livro excluido com sucesso!');
    }
}
