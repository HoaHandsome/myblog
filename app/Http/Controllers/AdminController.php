<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use App\User;
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
        $count_article = Article::all()->count();
        $count_category = Category::all()->count();
        $count_user = User::all()->count();
        $articles = Article::orderBy('created_at','desc')->paginate(7);
        return view('admin/main/dashboard')
        ->with('count_article',$count_article)
        ->with('count_category',$count_category)
        ->with('count_user',$count_user)
        ->with('articles',$articles);
        
    }
    
    /* article */

    public function view_article($slug)
    {
        $article = Article::where('slug',$slug)->first();
        
        return view('admin/article/view_article')->with('article',$article);
        
    }
    public function manager_article()
    {
        $articles = Article::paginate(10);
        
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
    
    public function edit_article($slug)
    {
        $categories = Category::all();
        $article = Article::where('slug',$slug)->first();
        return view('admin/article/create_article')->with('categories',$categories)->with('article',$article);
    }
    
    public function save_as_article(Request $request , $id)
    {
        $new_article = Article::findOrFail($id);
        $new_article -> fill($request->all());
        $new_article->slug = Str::slug($request->name ,'-');
        $new_article->save();
        return redirect()->route('admin_edit_article' ,['slug'=> $new_article->slug])->with('messenger','Chỉnh sửa thành công')->with('article',$new_article);
        
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
        $category->slug = Str::slug($request->name ,'-');
        $category ->save();
        return redirect()->route('admin_create_category')->with('messenger','Lưu thành công');
    }
    
    public function edit_category($slug)
    {
        $category = Category::where('slug',$slug)->first();
        return view('admin/category/create_category')->with('category',$category);
    }
    
    public function save_as_category(Request $request , $slug)
    {
       $new_category = Category::where('slug',$slug)->first();
        $new_category->slug = Str::slug($request->name ,'-');
       $new_category -> fill($request->all());
       $new_category->save();
       return redirect()->route('admin_edit_category' ,['id'=> $new_category->id])->with('messenger','Chỉnh sửa thành công')->with('category',$new_category);
    
    }
     public function delete_category($id)
    {
        Category::destroy($id);
        return redirect()->route('admin_manager_category')->with('messenger','Xóa thành công');
    }
    /* user */

    public function show_user()
    {
        $users = User::paginate(10);
        return view('admin/user/show_user')->with('users',$users);
   
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
