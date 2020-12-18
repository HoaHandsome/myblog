@extends('admin/main/layout')
@section('content')


<div class="container-fluid">

                    <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Category</h1>
        <p class="mb-4">This page for create Category.</p>
                                                                
                <form class="was-validated">
                <div class="mb-3">
                    <label for="Category">Name of Category</label> 
                    <input type="text" id="Category" class="form-control" aria-describedby="Name of Article" required placeholder="Name of article">
                    <div class="invalid-feedback">
                    Please enter a message in the textarea.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description">Description</label> 
                    <input type="text" id="description" class="form-control" aria-describedby="Name of description" required placeholder="Description of article">
                    <div class="invalid-feedback">
                    Please enter a message in the textarea.
                    </div>
                </div>
                <div class="form-group">
                <button class="btn btn-primary" type="submit">Create Article</button>
                </div>

                </form>

</div>

@endsection
