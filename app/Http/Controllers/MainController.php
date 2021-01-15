<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function view_home()
  {
        $articles_recent = Article::orderBy('created_at','desc')->paginate(2);
      return view('main_layout/home')->with('articles_recent',$articles_recent);
  }
  public function view_about()
  {
        $articles_recent = Article::orderBy('created_at','desc')->paginate(2);
      return view('main_layout/about')->with('articles_recent',$articles_recent);
  }
  public function view_experience()
  {
        $articles_recent = Article::orderBy('created_at','desc')->paginate(2);
      return view('main_layout/experience')->with('articles_recent',$articles_recent);
  }
  public function view_blog()
  {
        $articles = Article::paginate(10);
        $articles_recent = Article::orderBy('created_at','desc')->paginate(2);
      return view('main_layout/blog')->with('articles_recent',$articles_recent)->with('articles',$articles);
  }
  public function view_contact()
  {
        $articles_recent = Article::orderBy('created_at','desc')->paginate(2);
      return view('main_layout/contact')->with('articles_recent',$articles_recent);
  }
  public function login_admin()
  {
        $articles_recent = Article::orderBy('created_at','desc')->paginate(2);
      return view('auth/login-admin')->with('articles_recent',$articles_recent);
  }
}
