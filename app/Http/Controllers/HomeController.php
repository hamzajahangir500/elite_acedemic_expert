<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Author;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Get all Blogs
     * @param None 
     * @return View
     */
    public function blogs()
    {
        $blogs = Article::query();
        $featured_blogs = (clone $blogs)->where('status', 1)->get();
        $popular_blogs = (clone $blogs)->where('total_clicks', '>', 0)->orderBy('total_clicks', 'desc')->take(5)->get();
        $blogs = $blogs->where('status', 0)->orderBy('id', 'desc')->paginate(3); // 3 items per page
        return view('home.blogs.index', compact('blogs', 'featured_blogs', 'popular_blogs'));
    }

    /**
     * Get Blog Detail
     * @param slug 
     * @return View
     */
    public function blog($slug)
    {
        $blog = Article::where('slug', $slug)->firstOrFail();

        // Increment the total_clicks value
        $blog->total_clicks = $blog->total_clicks + 1;
        // Save the updated value back to the database
        $blog->save();
        
        $popular_blogs = Article::query()
        ->where('total_clicks', '>', 0)->orderBy('total_clicks', 'desc')->take(6)->get();
        return view('home.blogs.detail', compact('blog', 'popular_blogs'));
    }

    /**
     * Get Blogs by Tag
     * @param tag,themeId
     * @return View
     */
    public function getBlogsByTag($tag, $theme_id = null) {
        $blogs = Article::query()->orderBy('created_at','desc');
        
        if($theme_id != null){
            $blogs = $blogs->where([
                'tag'=> $tag,
                'theme_id'=> $theme_id
            ])->paginate(5);
            return view('home.blogs.blog_by_tag_theme', compact('blogs', 'tag', 'theme_id'));
        } else {
            $featured_blogs = (clone $blogs)->where([
                'tag'=> $tag,
                'status' => 1
            ])->get();
            $blogs = $blogs->where('tag', $tag)->paginate(5);
            return view('home.blogs.blog_by_tag', compact('featured_blogs', 'blogs', 'tag'));
        }
    }

    /**
     * Searhed Blogs
     * @param $request 
     * @return View
     */
    public function searchBlogs(Request $request) {
        $searchString = $request->input('value');
        $blogs = Article::query()
        ->where('title', 'like', '%'.$searchString. '%')
        ->Orwhere('title', 'like', '%'.$searchString. '%')
        ->orderBy('created_at','desc')
        ->paginate(5);
        return view('home.blogs.search', compact('blogs', 'searchString'));
    }

    /**
     * Get Blogs By Author
     * @param id 
     * @return View
     */
    public function getBlogsByAuthor($id) {
        $author = Author::find($id);
        $blogs = Article::where('author_id', $id)->with('author')->paginate(5);
        $searchString = 1; // to hide the popular articles section
        return view('home.authors.index', compact('blogs', 'author', 'searchString'));
    }
}
