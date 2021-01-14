
@extends('main_layout.layout')
@section('content')

{{-- {{$article->name}}
<img src="{{$article->avatar}}" alt="">
{!!$article->content !!}
{{$article->user->name}}
<a href="{{url('blog/category/'.$article->category->slug)}}">{{$article->category->name}}</a>


@foreach ($articles_relate as $article_relate)
<img src="{{$article_relate->avatar}}" alt="">
    <a href="{{url('blog/article/'.$article_relate->slug)}}"> {{$article_relate->name}}</a>  
    {{$article_relate->description}}
@endforeach --}}
 <!-- article -->

<div class="wrap-group article flex-column">
    <img src="{{url($article->avatar)}}" alt="">
    <h5 class="text-center title-article">
        {{$article->name}}
    </h5>
    <div class="text-center"> <span>{{date('d-m-Y', strtotime($article->created_at))}} by {{$article->user->name}}</span></div>
    <div class="content-group">
        <p>{!!$article->content !!}</p>
        <div >
            <a class="category" href="{{url('blog/category/'.$article->category->slug)}}">{{$article->category->name}}</a>
        </div>
        <!-- article relate -->
        <div class="box-relate">
            <h3>Articles relate</h3>
            <div class="flex-between">

            @foreach ($articles_relate as $article_relate)
                <div class="box-article">
                     <a href="{{url('blog/article/'.$article_relate->slug)}}">  <img src="{{$article_relate->avatar}}" alt=""></a>
                    <h4><a class="title-article-relate" href="{{url('blog/article/'.$article_relate->slug)}}">{{$article_relate->name}}</a></h4>
                </div>      
            @endforeach
            </div>
        </div>
        <!-- box comment -->
        <div class="box-relate">
            <h3>comment</h3>
            
            <div id="fb-root">
            
                <div class="fb-comments" data-href="{{URL::current()}}" data-width="100%" data-numposts="5"></div>
            </div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0&appId=3498740183544077&autoLogAppEvents=1" nonce="0F72nUoB"></script>
          
        </div>


    </div>
</div>



@endsection