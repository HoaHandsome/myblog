<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function show_article()
    {
        return view('admin/article/view_article');
   
    }
    public function create_article()
    {
        return view('admin/article/create_article');
        
    }
    
    /* category */
    public function show_category()
    {
        return view('admin/category/view_category');
   
    }
    public function create_category()
    {
        return view('admin/category/create_category');
   
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
