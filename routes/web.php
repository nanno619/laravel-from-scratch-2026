<?php

use App\Models\Idea;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // 1. Generic databse query
    // $ideas = DB::table('ideas')->get();

    // dd($ideas);
    // return $ideas[0]->description; // This will convert to JSON. [0] -> means we get the first item

    // 2. Eloquent
    $ideas = Idea::query()
        ->when(request('state'), function ($query, $state){
            $query->where('state', $state);
        })
        ->get();

    // return $ideas;

    return view('ideas', [
        'ideas' => $ideas
    ]);
});

Route::post('/ideas', function () {
    // dd(request()->all());

    $idea = request('idea');

    Idea::create([
        'description' => $idea,
        'state' => 'pending',
    ]);

    return redirect('/');
});

Route::get('/delete-ideas', function () {
    session()->forget('ideas');

    return redirect('/');
});

Route::view('/about', 'about');

Route::view('/contact', 'contact');
