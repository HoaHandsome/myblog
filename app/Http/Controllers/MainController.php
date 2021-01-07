<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
  public function view_home()
  {
      return view('main_layout/home');
  }
  public function view_about()
  {
      return view('main_layout/about');
  }
  public function view_experience()
  {
      return view('main_layout/experience');
  }
  public function view_blog()
  {
      return view('main_layout/blog');
  }
  public function view_contact()
  {
      return view('main_layout/contact');
  }
}
