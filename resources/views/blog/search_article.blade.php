

@if ( isset($category))
{{$category->name}}
@endif



@if ($articles->count() ==0)
    <p>Không có bài viết nào</p>
@endif

@foreach ($articles as $article)
 <a href="{{url('blog/article/'.$article->slug)}}"> {{$article->name}}</a>  
@endforeach
{{$articles->links()}}