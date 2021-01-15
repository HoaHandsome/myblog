<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_article($slug)
    {
        $articles_recent = Article::orderBy('created_at','desc')->paginate(2);
        $article = Article::where('slug',$slug)->first();
        $articles_relate = Article::whereNotIn('slug',[$article->slug])->where('category_id', $article->category_id)->orderBy('created_at','desc')->paginate(10);
        return view('blog\article')->with('article',$article)->with('articles_relate',$articles_relate)->with('articles_recent',$articles_recent);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search_article(Request $request)
    {
        
        $articles_recent = Article::orderBy('created_at','desc')->paginate(2);
      $articles = Article::where('name','like', '%'.$request->content.'%')->orWhere('content','like','%'.$request->content.'%')->orderBy('created_at','desc')->paginate(10);
      return view('blog\search_article')->with('articles',$articles)->with('articles_recent',$articles_recent)->with('request',$request->content);

    }
    public function category_article($slug)
    {
        $articles_recent = Article::orderBy('created_at','desc')->paginate(2);
      $category = Category::whereSlug($slug)->first();
      $articles = Article::where('category_id',$category->id)->orderBy('created_at','desc')->paginate(10);
      return view('blog\search_article')->with('articles',$articles)->with('category',$category)->with('articles_recent',$articles_recent);

    }
    public function show_category()
    {
        $articles_recent = Article::orderBy('created_at','desc')->paginate(2);
      $categories = Category::all();
      return view('blog/view_category')->with('categories',$categories)->with('articles_recent',$articles_recent);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
