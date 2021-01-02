@extends('admin/main/layout')
@section('content')

<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Article</h1>
                    <p class="mb-4">This is all articles.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">All article</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Category</th>
                                            <th>Auth</th>
                                            <th>View</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($articles as $article)
                                        <tr>
                                            <th>{{$article->name}}</th>
                                            <th>{{$article->created_at}}</th>
                                            <th>{{$article->category->name}}</th>
                                            <th>{{$article->user->name}}</th>
                                            <td><a href="#" class="btn btn-primary"><i class="far fa-eye"></i> View<a></td>
                                            <td><a href="{{url('admin/edit_article/'.$article->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit<a></td>
                                            <td><a  href="{{url('admin/delete_article/'.$article->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete<a></td>
                                            
                                        </tr>
                                       
                                                            </tbody>
                                            @endforeach
                                                        </table>
                                                        {{$articles->links()}}
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        
                                        
                                        
                                        @endsection