<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
 public function index(){
    $selectAll=Book::all();
    return response()->json($selectAll);
 }
 public function show($id){
    $select=Book::find($id);
    return response()->json($select);
 }
 public function store(Request $request){
  $book=Book::create($request->all());
  return response()->json($book);
 }
 public function update(Request $request,$id){
 $book=Book::find($id);
 $book->update($request->all());
 return response()->json($book);
 }
 public function destroy($id){
    $books=Book::find($id);
    $books->delete();
    echo 'deleted success';

 }
}
