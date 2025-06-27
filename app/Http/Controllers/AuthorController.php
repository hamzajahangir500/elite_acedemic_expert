<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Http\Requests\AuthorRequest;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::withCount('articles')->get();
        return view('admin.pages.author.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.author.store_author');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorRequest $request)
    {
        // Validate the incoming request
        $validated = $request->validated();

        // Create a new Author instance
        $author = new Author();
        $author->name = $validated['name'];
        $author->description = $validated['description'];
        $author->image = null;

        if ($request->hasFile('image')) {
            $author->image = fileUpload($request->file('image'), 'authors');
        }

        // Save the author to the database
        $author->save();

        // Return a success response
        return redirect()->route('admin.authors.index')->with('success', 'Author created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $author = Author::find($id);
        return view('admin.pages.author.update_author', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AuthorRequest $request, $id)
    {
        $validated = $request->validated();
        $author = Author::find($id);
        $author->name = $validated['name'];
        $author->description = $validated['description'];
        if ($request->hasFile('image')) {
            $author->image = fileUpload($request->file('image'), 'authors');
        }  
        $author->save();
        return redirect()->route('admin.authors.index')->with('success', __('Article updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
