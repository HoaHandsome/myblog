@extends('admin/main/layout')
@section('content')


<div class="container-fluid">

                    <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Article</h1>
        <p class="mb-4">This page for create article.</p>
                                                                
                <form class="was-validated">
                <div class="mb-3">
                    <label for="nameArticle">Name of Article</label> 
                    <input type="text" id="nameArticle" class="form-control" aria-describedby="Name of Article" required placeholder="Name of article">
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


                <div class="mb-3">
                    <label for="validationTextarea">Textarea</label>
                    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required textarea" required></textarea>
                </div>



                <div class="form-group">
                     <label for="category">Select Category</label>
                    <select class="custom-select" id="category" required>
                    <option value="">Open this select category</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                </div>

                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>

                <div class="form-group">
                <button class="btn btn-primary" type="submit">Create Article</button>
                </div>

                </form>

</div>

@endsection
