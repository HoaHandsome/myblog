@extends('main_layout.layout')
@section('content')

  <div class="wrap-group" >
                          <h2>Category </h2>
                          <h5>All Category</h5>


  </div>
  <div class="wrap-group article flex-column"  data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
  @foreach ($categories as $category)
  <h2>
      <a href="{{url('blog/category/'.$category->slug)}}">{{$category->name}}  </a>

      {{count($category->article)}} articles
  </h2>
   @endforeach
</div>


@endsection