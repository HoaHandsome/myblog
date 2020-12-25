@extends('admin/main/layout')
@section('content')


<div class="container-fluid">

                    <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Article</h1>
        <p class="mb-4">This page for create article.</p>
                                                                
                <form class="was-validated" method="GET" action="{{}}">
                <div class="mb-3">
                    <label for="nameArticle">Name of Article</label> 
                    <input type="text" name="name" id="nameArticle" class="form-control" aria-describedby="Name of Article" required placeholder="Name of article">
                    <div class="invalid-feedback">
                    Please enter a message in the textarea.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description">Description</label> 
                    <input type="text" name="description" id="description" class="form-control" aria-describedby="Name of description" required placeholder="Description of article">
                    <div class="invalid-feedback">
                    Please enter a message in the textarea.
                    </div>
                </div>


                <div class="mb-3">
                    <label for="validationTextarea">Textarea</label>
                    <textarea class="form-control is-invalid" name="content" id="validationTextarea" placeholder="Required textarea" required></textarea>
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
                 <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                    <i class="fa fa-picture-o"></i> Choose
                    </a>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="avatar"  name="filepath">
                </div>
                <img id="holder" style="margin-top:15px;max-height:100px;">

                
                  
                <div class="form-group">
                <button class="btn btn-primary" type="submit">Create Article</button>
                </div>
                

                </form>

</div>

<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
 <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
CKEDITOR.replace('validationTextarea', options);
 $('#lfm').filemanager('image');
</script>



@endsection
