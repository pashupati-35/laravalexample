<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Students;
use Illuminate\Http\Request;

use App\Models\Borrows;



class BorrowsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     //   $borrow = Borrows::all();
      //  return view('borrows.index', compact('borrow'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = Students::all();
        $book = Books::all();
        return view('backend.borrows.create',compact('student', 'book'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request='all');
        $request->validate([
            'student_id' => 'required',
            'book_id' => 'required',
            'taken_date' => 'required|date',
            'brought_date' => 'required|date',
        ]);
        $borrow = new Borrows([
            'student_id' => $request->input('student_id'),
            'book_id' => $request->input('book_id'),
            'taken_date' => $request->input('taken_date'),
            'brought_date' => $request->input('brought_date'),
        ]);
        $borrow=Borrows::create($request->all());
        dd($borrow);
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
