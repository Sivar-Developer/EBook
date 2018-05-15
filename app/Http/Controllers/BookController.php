<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image'))
        {
            $file=request()->file('image');
            //$ext=$file->guessClientExtension();
            $name=uniqid().'.'.$file->guessClientExtension();
            $file->move('cover', $name);
            $path=public_path().'/cover/'.$name;
        } else {
            $name='unavailable.png';
            $path='cover/'.$name;
        }

        if ($request->hasFile('pdf'))
        {
            $file=request()->file('pdf');
            //$ext=$file->guessClientExtension();
            $pdf=uniqid().'.'.$file->guessClientExtension();
            $file->move('pdf', $pdf);
            $path_pdf=public_path().'/pdf/'.$pdf;
        } else {
            $pdf=NULL;
        }

        $this->validate(request(), [
            'catagory_id'=>'required',
            'title'=>'required|unique:books,title',
            'author'=>'required',
            'publish'=>'required'
        ]);

        $book= Book::create(array_merge([
            'catagory_id'=>request('catagory_id'),
            'title'=>request('title'),
            'author'=>request('author'),
            'publish'=>request('publish'),
            'description'=>request('description'),
            'cover'=>"{$name}",
            'pdf'=>"{$pdf}"
        ]));

        return redirect()->back()->with('msg','Book added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('singlebook', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
