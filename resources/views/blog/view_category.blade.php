@foreach ($categories as $category)
    <a href="{{url('blog/category/'.$category->id)}}">{{$category->name}}</a>
    {{count($category->article)}}
@endforeach