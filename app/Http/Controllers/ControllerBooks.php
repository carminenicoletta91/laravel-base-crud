<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Book;
class ControllerBooks extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = "Book";
        $values = Book::all();

        return view('page.bookIndex',compact('values','type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $type ="form-book";
      return view('page.bookCreate',compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request ->validate([
        "title" => "required",
        "description" =>"required",
        "author" =>"required"

      ]);

      $values = Book::create($validatedData);

      return redirect('/');
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
        $type = "form-book";
        $values = Book::findorFail($id);
        return view('page.bookEdit',compact('values','type'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request -> validate([
          "title" => "required",
          "description" =>"required",
          "author" => "required"
        ]);

        Book::whereId($id) ->update($validatedData);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $values =Book::findorFail($id);
        $values ->delete();
        return redirect('/');
    }
}
