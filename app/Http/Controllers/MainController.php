<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function view_home()
  {
        $articles = Article::orderBy('created_at','desc')->paginate(2);
      return view('main_layout/home')->with('articles',$articles);
  }
  public function view_about()
  {
        $articles = Article::orderBy('created_at','desc')->paginate(2);
      return view('main_layout/about')->with('articles',$articles);
  }
  public function view_experience()
  {
        $articles = Article::orderBy('created_at','desc')->paginate(2);
      return view('main_layout/experience')->with('articles',$articles);
  }
  public function view_blog()
  {
        $articles = Article::orderBy('created_at','desc')->paginate(2);
      return view('main_layout/blog')->with('articles',$articles);
  }
  public function view_contact()
  {
        $articles = Article::orderBy('created_at','desc')->paginate(2);
      return view('main_layout/contact')->with('articles',$articles);
  }
}
