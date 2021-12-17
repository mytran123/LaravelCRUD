<?php

namespace App\Http\Controllers;

use App\Repositories\NoteRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    protected $noteRepository;

    public function __construct(NoteRepository $noteRepository)
    {
        $this->noteRepository = $noteRepository;
    }

    public function index()
    {
//        $notes = DB::table('notes')->get();
        $notes = $this->noteRepository->getAll();
        return view('note.list', compact('notes'));
    }

    public function showFormCreate()
    {
        return view('note.create');
    }

    public function create(Request $request)
    {
        $this->noteRepository->create($request);
        return redirect()->route('notes.index');
    }

    public function showDetail($id)
    {
        $note = $this->noteRepository->getById($id);
        return view('note.detail', compact("note"));
    }

    public function showUpdate($id)
    {
        $note = DB::table('notes')
            ->where('id','=', $id)
            ->get()->first();
        return view('note.update', compact("note"));
    }

    public function update(Request $request, $id)
    {
        $data = $request->only('name','category','description');
        DB::table('notes')->where('id', '=', $id)->update($data);
        return redirect()->route('notes.index');
    }

    public function destroy($id)
    {
        DB::table('notes')->where('id', $id)->delete();
        return redirect()->route('notes.index');
    }
}
