
@extends('main_layout.layout')
@section('content')
  <div class="wrap-group" >
                          @if (isset($category))
                          <h2>Category {{$category->name}}</h2>
                          <h5>There are  {{$articles->total()}} articles in {{$category->name}} topic </h5>
                          @else
                          <h2>Search <i class="fas fa-search"></i></h2>
                          <h5>There are {{$articles->total()}} sesult for " {{$request }} "</h5>
                           @endif

  </div>


{{-- @if ( isset($category))
{{$category->name}}
@endif

 --}}

@if ($articles->total() ==0)
<div class="wrap-group">
    <p>No posts yet</p>
</div>
@else 

@foreach ($articles as $article)
    
<div class="wrap-group article flex-column"  data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
    <a href="{{url('blog/article/'.$article->slug)}}"><img src="{{url($article->avatar)}}" alt=""></a>
    <h5 class="text-center title-article">
         <a href="{{url('blog/article/'.$article->slug)}}">{{$article->name}}</a>
    </h5>
    <div class="text-center"> <span> {{date('d-m-Y', strtotime($article->created_at))}} by {{$article->user->name}}</span></div>
    <div class="content-group">
        <p>{{$article->description}}</p>
            <div class="flex-between">
                <a class="category" href="{{url('blog/category/'.$article->category->slug)}}">{{$article->category->name}}</a> <a href="{{url('blog/article/'.$article->slug)}}" class="button">Read more</a>
            </div>
            
        </div>
    </div>
    @endforeach
<div class="links">

        {{ $articles->links()}}
</div>

@endif

 

@endsection