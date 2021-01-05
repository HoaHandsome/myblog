{{$article->name}}
<img src="{{$article->avatar}}" alt="">
{!!$article->content !!}
{{$article->user->name}}
{{$article->category->name}}

@foreach ($articles_relate as $article_relate)
<img src="{{$article_relate->avatar}}" alt="">
    {{$article_relate->name}}
    {{$article_relate->description}}
@endforeach


<div id="fb-root">

    <div class="fb-comments" data-href="{{URL::current()}}" data-width="100%" data-numposts="5"></div>
</div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0&appId=3498740183544077&autoLogAppEvents=1" nonce="0F72nUoB"></script>

