<?php

namespace App\Http\Controllers;

//class LuuCodeNoteController
//{
//    public function index()
//    {
//        $notes = DB::table('notes')->get();
//        return view('note.list', compact('notes'));
//    }
//
//    public function showFormCreate()
//    {
//        return view('note.create');
//    }
//
//    public function create(Request $request)
//    {
//        DB::table('notes')->insert([
//            'name' => $request->name,
//            'category' => $request->category,
//            'description' => $request->description
//        ]);
//        return redirect()->route('notes.index');
//    }
//
//    public function showDetail($id)
//    {
//        $note = DB::table('notes')->where('id','=', $id)->get()->first();
//        return view('note.detail', compact("note"));
//    }
//
//    public function showUpdate($id)
//    {
//        $note = DB::table('notes')
//            ->where('id','=', $id)
//            ->get()->first();
//        return view('note.update', compact("note"));
//    }
//
//    public function update(Request $request, $id)
//    {
//        $data = $request->only('name','category','description');
//        DB::table('notes')->where('id', '=', $id)->update($data);
//        return redirect()->route('notes.index');
//    }
//
//    public function destroy($id)
//    {
//        DB::table('notes')->where('id', $id)->delete();
//        return redirect()->route('notes.index');
//    }
//}
