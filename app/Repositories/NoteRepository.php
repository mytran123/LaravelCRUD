<?php

namespace App\Repositories;

use App\Repositories\Impl\NoteRepositoryInterface;
use Illuminate\Support\Facades\DB;

class NoteRepository extends BaseRepository implements NoteRepositoryInterface
{
    protected $table = "notes";

    public function create($data)
    {
        // TODO: Implement create() method.
        DB::table($this->table)->insert([
            'name' => $data->name,
            'category' => $data->category,
            'description' => $data->description
        ]);
    }
}
