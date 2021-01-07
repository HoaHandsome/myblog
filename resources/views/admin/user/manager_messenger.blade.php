@extends('admin/main/layout')
@section('content')

<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Messenger</h1>
                    <p class="mb-4">All messenger to me.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">All Messenger</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th>Mail</th>
                                            <th>Phone</th>
                                            <th>Messenger</th>
                                            <th>Date</th>
                                            <th>delete</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                        @foreach ($messengers as $messenger)
                                            
                                        <tr>
                                            <td>{{$messenger->name}}</td>
                                            <td>{{$messenger->mail}}</td>                            
                                            <td>{{$messenger->phone}}</td>                            
                                            <td>{{$messenger->messenger}}</td>                            
                                            <td>{{date('d-m-Y', strtotime($messenger->created_at))}}</td>                            
                                            <td><a href="{{url('admin/delete_messenger/'.$messenger->id)}}"><i class="fas fa-trash-alt"></i> Delete<a></td>
                                            </tr>
                                            @endforeach  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>




@endsection