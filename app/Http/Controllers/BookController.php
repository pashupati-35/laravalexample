<?php
namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Authors;
use App\Models\Books;
use App\Models\Type;
use App\Models\Types;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$book = Books::all();
        //return view('books.index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $author = Authors::all();
        $type = Types::all();
        return view('backend.books.create',compact('author', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'pageCount' => 'required|integer',
            'point' => 'required|integer',
            'author_id' => 'required|exists:authors,author_id',
            'type_id' => 'required|exists:types,type_id',
        ]);
        $book = new Books([
            'name' => $request->input('name'),
            'pageCount' => $request->input('pageCount'),
            'point' => $request->input('point'),
            'author_id' => $request->input('author_id'),
            'type_id' => $request->input('type_id'),
        ]);

        //dd($request='all');
        $book=Books::create($request->all());
        dd($book);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
