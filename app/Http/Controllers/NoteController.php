<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    public function index()
    {
        $notes = DB::table('notes')->get();
        return view('note.list', compact('notes'));
    }

    public function showFormCreate()
    {
        return view('note.create');
    }

    public function create(Request $request)
    {
        DB::table('notes')->insert([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description
        ]);
        return redirect()->route('notes.index');
    }

    public function showDetail($id)
    {
        $note = DB::table('notes')->where('id','=', $id)->get()->first();
        return view('note.detail', compact("note"));
    }

    public function update($request, $id)
    {
        $data = $request->only('name','category','description');
        $note = DB::table('notes')->where('id', '=', $id)->update($data);
        return view('note.update', compact("note"));
    }

    public function destroy($id)
    {
        DB::table('notes')->where('id', $id)->delete();
        return redirect()->route('notes.index');
    }
}
