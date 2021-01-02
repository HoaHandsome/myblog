<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use Auth;
use Illuminate\Support\Str;


class AdminController extends Controller
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
    public function show($id)
    {
        //
    }
   /* show dashboard */


    public function show_dashboard()
    {
        return view('admin/main/dashboard');
   
    }

   /* article */

    public function manager_article()
    {
        $articles = Article::all();

        return view('admin/article/manager_article')->with('articles',$articles);
   
    }
    public function create_article()
    {
        $categories = Category::all();
        return view('admin/article/create_article')->with('categories',$categories);
        
    }
    public function save_article(Request $request)
    {
        $article = new Article();
        $article ->fill($request->all());
        $article->slug = Str::slug($request->name ,'-');
        $article->user_id = Auth::user()->id;
        
        $article ->save();
        return redirect()->route('admin_create_article')->with('messenger','Lưu thành công');

        
    }
    public function delete_article($id)
    {
        Article::destroy($id);
        return redirect()->route('admin_manager_article');
    }

    public function edit_article($id)
    {
      $categories = Category::all();
      $article = Article::findOrFail($id);
      return view('admin/article/create_article')->with('categories',$categories)->with('article',$article);
    }

    public function save_as_article(Request $request , $id)
    {
       $new_article = Article::findOrFail($id);
       $new_article->slug = Str::slug($request->name ,'-');
       $new_article -> fill($request->all());
       $new_article->save();
       return redirect()->route('admin_edit_article' ,['id'=> $new_article->id])->with('messenger','Chỉnh sửa thành công')->with('article',$new_article);
    
    }
    
    /* category */
    public function manager_category()
    {
        $categories = Category::all();
        return view('admin/category/manager_category')->with('categories',$categories);
   
    }
    public function create_category()
    {
        return view('admin/category/create_category');
    }
    public function save_category(Request $request)
    {
        $category = new Category();
        $category ->fill($request->all());
        $category ->save();
        return redirect()->route('admin_create_category')->with('messenger','Lưu thành công');
    }

    /* user */

    public function show_user()
    {
        return view('admin/user/show_user');
   
    }
    
    
    /* comments */
    
        public function show_comment()
        {
            return view('admin/user/show_comment');
       
        }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        
    }
}
