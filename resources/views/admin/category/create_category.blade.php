@extends('admin/main/layout')
@section('content')


<div class="container-fluid">

                    <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Category</h1>
        <p class="mb-4">This page for create Category.</p>
                                                                
                @if(\Session::has('messenger'))

                <div class="alert alert-success" role="alert">

                {{\Session::get('messenger')}}
                </div>
                @endif

                 @if(empty($category))    
                <form class="was-validated" method="POST" action="{{route('admin_save_category')}}">
                    @endif
                 @if(!empty($category))    
                <form class="was-validated" method="POST" action="{{url('admin/save_as_category/'.$category->id)}}">
                    @endif

                <div class="mb-3">
                    @csrf
                    <label for="Category">Name of Category</label> 
                    <input type="text" id="Category" class="form-control" aria-describedby="Name of Article" required placeholder="Name of Category" name="name" value="{{  ($category->name) ?? old('name') }}">
                    <div class="invalid-feedback">
                    Please enter a message in the textarea.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description">Description</label> 
                    <input type="text" id="description" class="form-control" aria-describedby="Name of description" required placeholder="Description of category" name="description" value="{{  ($category->description) ?? old('description') }}">
                    <div class="invalid-feedback">
                    Please enter a message in the textarea.
                    </div>
                </div>
                <div class="form-group">
                <button class="btn btn-primary" type="submit">@if(empty($category))   Create Category @else Update Category @endif</button>
                </div>

                </form>

</div>

@endsection
