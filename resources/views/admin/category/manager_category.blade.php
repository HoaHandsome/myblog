@extends('admin/main/layout')
@section('content')

<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Category</h1>
                    <p class="mb-4">This is all Category.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">All Category</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                        @foreach ($categories as $category)
                                        <tr>
                                            <th>{{$category->name}}</th>
                                            <th>{{$category->description}}</th>
                                            <th>{{$category->created_at}}</th>
                                            <td><a href="{{url('admin/edit_category/'.$category->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit<a></td>
                                            <td><a  href="{{url('admin/delete_category/'.$category->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete<a></td>
                                        </tr>
                                       @endforeach
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>




@endsection