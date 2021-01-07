@foreach ($categories as $category)
    <a href="{{url('blog/category/'.$category->slug)}}">{{$category->name}}</a>
    {{count($category->article)}}
@endforeach