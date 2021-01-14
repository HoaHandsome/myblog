@extends('main_layout/layout')
@section('content')
                       <div class="wrap-group">
                        <h2>blog</h2>
                        <h5>This is my blog where i can wire about my life</h5>
                    </div>
                    <!-- article -->


                    @foreach ($articles as $article)
                        
                    <div class="wrap-group article flex-column" >
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
                        <div class="links wrap-group">

                            {{ $articles->links()}}
                        </div>
@endsection