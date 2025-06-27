<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('theme')->get();

        return view('admin.pages.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.pages.articles.create');
    }

    public function store(Request $request)
    {
        $article = new Article();
        $article->theme_id = $request->theme_id;
        $article->title = $request->title;
        $article->author_id = $request->author_id;
        $article->slug = \Str::slug($request->title);
        $article->content = $request->content;
        if ($request->hasFile('image')) {
            $article->image = fileUpload($request->file('image'), 'articles');
        }
        $article->meta_title = $request->meta_title;
        $article->tag = $request->tag;
        $article->meta_description = $request->meta_description;
        $article->focus_keyphrase = $request->focus_keyphrase;
        $article->schema = $request->schema;
        $article->save();
        
        return redirect()->route('admin.articles.index')->with('success', __('Article created successfully'));
    }

    public function edit(Article $article)
    {
        return view('admin.pages.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $data = $request->except(['_token']);
        $article->slug = \Str::slug($request->title);
        if ($request->hasFile('image')) {
            $data['image'] = fileUpload($request->file('image'), 'articles');
        } else {
            $data = $request->except(['image']);
        }

        $article->fill($data);
        $article->save();
        return redirect()->route('admin.articles.index')->with('success', __('Article updated successfully'));
    }

    public function destroy(Article $article)
    {
        $user = \Auth::user();
        if($user->can('delete-category'))
        {
            $article->delete();

            return redirect()->route('admin.articles.index')->with('success', __('Article deleted successfully'));
        }
        else
        {
            return view('403');
        }
    }
}