<?php

use App\Models\Idea;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

// Index
Route::get('/ideas', function () {
    // 1. Generic databse query
    // $ideas = DB::table('ideas')->get();

    // dd($ideas);
    // return $ideas[0]->description; // This will convert to JSON. [0] -> means we get the first item

    // 2. Eloquent
    $ideas = Idea::all();

    // return $ideas;

    return view('ideas.index', [
        'ideas' => $ideas
    ]);
});

// Show
// Route Model Binding -
Route::get('/ideas/{idea}', function (Idea $idea) {
    return view('ideas.show', [
        'idea' => $idea
    ]);
});

// Edit
// Route Model Binding -
Route::get('/ideas/{idea}/edit', function (Idea $idea) {
    return view('ideas.edit', [
        'idea' => $idea
    ]);
});

// Update
// Route Model Binding -
Route::patch('/ideas/{idea}', function (Idea $idea) {

    $idea->update([
        'description' => request('description'),
    ]);

    return redirect("/ideas/{$idea->id}");
});

// Store
Route::post('/ideas', function () {
    // dd(request()->all());

    $idea = request('description');

    Idea::create([
        'description' => $idea,
        'state' => 'pending',
    ]);

    return redirect('/ideas');
});

// Destroy
Route::delete('/ideas/{idea}', function (Idea $idea) {

    $idea->delete();

    return redirect('/ideas');
});


Route::view('/about', 'about');

Route::view('/contact', 'contact');
