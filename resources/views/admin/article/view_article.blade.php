@extends('admin/main/layout')
@section('content')
{{$article->name}}
{!!$article->content!!}
{{$article->user->name}}
{{date('d-m-Y', strtotime($article->created_at))}}
<a href="{{url('admin/edit_article/'.$article->slug)}}">Edit</a>

@endsection