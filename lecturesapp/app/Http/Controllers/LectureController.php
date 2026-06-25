<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use Illuminate\Http\Request;

// Datenbank zurücksetzen für Tests
// php artisan migrate:refresh --seed

class LectureController extends Controller
{
    public function index()
    {
        return view('lectures.index', [
            'lectures' => Lecture::all()
        ]);
    }

    public function create()
    {
        return view('lectures.create');
    }

    public function store(Request $request, Lecture $lecture) {
        $lecture = $lecture->create($request->all() + ['done' => false]);

        return redirect()->route('lectures.show', ['lecture' => $lecture]);
    }

    public function show(Lecture $lecture)
    {
        return view('lectures.show', ['lecture' => $lecture]);
    }

    public function edit(Lecture $lecture)
    {
        return view('lectures.edit', ['lecture' => $lecture]);
    }

    public function update(Request $request, Lecture $lecture) {
        $lecture->update($request->all() + ['done' => false]);

        return redirect()->route('lectures.show', ['lecture' => $lecture]);
    }

    public function destroy(Lecture $lecture)
    {
        $lecture->delete();

        return redirect()->route('lectures.index');
    }
}
