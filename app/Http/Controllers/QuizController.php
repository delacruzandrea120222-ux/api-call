<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        return Quiz::all();
    }

    public function store(Request $request)
    {
        return Quiz::create($request->all());
    }

    public function show(string $id)
    {
        return Quiz::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz->update($request->all());

        return $quiz;
    }

    public function destroy(string $id)
    {
        Quiz::destroy($id);

        return response()->json([
            'message' => 'Deleted successfully'
        ]);
    }
}
