<?php

namespace App\Http\Controllers;

use App\Snippet;
use App\Language;

class SnippetsController extends Controller
{
    public function index()
    {
        $snippets = Snippet::with('user', 'language')->latest()->get();
        // logger($snippets);
        return $snippets;

    	// return view('snippets.index', compact('snippets'));
    }

    public function create(Snippet $snippet)
    {
        $languages = Language::orderBy('language')->get();

    	return view('snippets.create', compact('snippet', 'languages'));	
    }

    public function store()
    {
        $this->validate(request(), 
            [
                'title' => 'required',
                'body' => 'required'
            ]
            );

    	Snippet::create(
            array_add(
                request()->only('title', 'body', 'forked_id', 'language_id'),
                'user_id', \Auth::user()->id
                )
            );

        return redirect()->home();
    }

    public function show(Snippet $snippet)
    {
        // return Snippet::with('user', 'language')->find($snippet->id);
        return Snippet::with('user', 'language')->whereId($snippet->id)->get();
    	// return view('snippets.show', compact('snippet'));
    }
}
