<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $themes = Theme::get();
        return view('admin.pages.themes.index', compact('themes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->id) {
            // Update existing theme
            $theme = Theme::findOrFail($request->id);
            session()->flash('success', __('Theme updated successfully'));
        } else {
            // Create a new theme
            $theme = new Theme();
            session()->flash('success', __('Theme created successfully'));
        }

        // Update or set theme attributes
        $theme->name = $request->name;
        $theme->save();

        // Retrieve all themes for the view
        $themes = Theme::all();

        // Return the view with themes
        return view('admin.pages.themes.index', compact('themes'));
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
    public function edit(string $id)
    {
        $theme = Theme::where('id', $id)->first();
        $themes = Theme::get();
        return view('admin.pages.themes.index', compact('theme', 'themes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
