
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/> 
    <meta property='og:image' content='{{url('storage/photos/2/logo.png')}}' />
    <meta property="og:image:width" content="250" />
    <meta property="og:image:height" content="250" />
    <meta id="metaDescription" name="description" content="I'm Hoa. I'm IT Helpdesk and Web Developer." />
    <meta property="og:description" content="I'm Hoa. I'm IT Helpdesk and Web Developer." />
    <meta property="og:type" content="article" /> 
    <meta content='index, follow' name='robots'/>
    <meta http-equiv="REFRESH" content="1800" />
    <meta property="og:image:type" content="image/png" /> 
    <link rel="icon" type="image/x-icon" href="{{url('storage/photos/2/logo.png')}}">


    <script src="https://kit.fontawesome.com/66e5d31267.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('/css/style.css')}}">
    <link rel="stylesheet" href="{{url('./css/base.css')}}">
    <link rel="stylesheet" href="{{url('./css/responsive.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Le Van Hoa</title>
</head>
<body>
<!-- mask -->
<div id="mask"  onclick="closeMenu()"></div>
    <!-- base  -->
    <div id="wrap-modal">
        <div class="flex-between" id="group-picture">

                <img  alt="" src=""  id="modal-content">
<!--                 <i id="left" class="fas fa-angle-left"></i>
                <i id="right" class="fas fa-angle-right"></i> -->
        </div>
        <i class="fas fa-times"></i>
    </div>
<!-- scroll to top -->
<div id="scroll-to-top">
    <div>
        <a href="#top"><i class="fas fa-angle-up"></i></a>

    </div>
</div>
<!--  -->

<!-- header -->
<header>
    <div class="container flex-between">
        <h1><a href="{{url(route('home'))}}">V.Hòa</a></h1>
        <i class="fas fa-bars" onclick="openMenu()" id="bars"></i>
        <nav id="nav-bar">
            <div id="mask-menu" onclick="closeMenu()"></div>
            <ul id="menu">                              
                    <li><a href="{{url(route('home'))}}">Home</a></li>
                    <li><a href="{{url(route('about'))}}">About me</a></li>
                    <li><a href="{{url(route('experience'))}}">Experience</a></li>
                    <li><a href="{{url(route('blog'))}}">Blog</a></li>
                    <li><a href="{{url(route('contact'))}}">Contact</a></li>
                <div id="menu-sidebar">

                    <!-- card -->
                    <div class="card flex-column">
                        <div class="picture-group">
                            <img  alt=""
                                src="{{url('storage/photos/2/me.jpg')}}"
                                alt="">
                        </div>
                        <h2 class="text-center">Le Van Hoa (John)</h2>
                        <p class="text-center">IT-Web Design</p>
                        <ul>
                            <li><a href="https://www.facebook.com/lehoa.strong/"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="mailto:lehoa.strong@gmail.com"><i class="fas fa-envelope"></i></a></li>
                            <li><a href="tel:0986238723"><i class="fas fa-phone-alt"></i></a></li>
                            <li><a href="https://github.com/HoaHandsome"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div>

                    <!-- search -->
                    <div class="recent-post">
                        <h3 class="text-center"><a href="#">SEARCH</a></h3>
                        <form method="get" onsubmit="handle" action="{{url(route('search_article'))}}">
                            @csrf
                            <input type="text" placeholder="Search" name="content" value="{{old('content')}}">
                            <button type="submit"> <i class="fas fa-search"></i></button>
                        </form>
                    </div>

                    <!-- recent post -->
                    <div class="recent-post">
                        <h3 class="text-center"> <a href="{{url(route('blog'))}}">RECENT POST</a> </h3>
                        <div class="list-articles">
                                                        
                            @foreach ($articles_recent as $article)
                            <!-- article -->
                            <div class="item-article flex-column">
                                <div class="flex  flex-between">
                                    <div class="pic-article">
                                        <a href="{{url('blog/article/'.$article->slug)}}">
                                            <img src="{{url($article->avatar)}}" alt="">
                                           </a>  
                                       
                                        
                                    </div>
                                    <h4> <a href="{{url('blog/article/'.$article->slug)}}"> {{$article->name}}</a>  </h4>
                                </div>
                                <div class="flex category">
                                    <a href="{{url('blog/category/'.$article->category->slug)}}">{{$article->category->name}}</a>
                                    <p>{{date('d-m-Y', strtotime($article->created_at))}}</p>
                                    
                                </div>
                            </div>
                            @endforeach
                            <div class="flex-center">
                                <b>  <a href="{{url(route('blog'))}}" class="text-center">VIEW MORE</a> </b>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </ul>
        </nav>
    </div>
</header>


    <!-- main -->
    <section id="main">
        <div class="container flex">
            <!-- left content -->
            <div id="left-content">
                <!-- card -->
                <div class="card-group flex-column">
                    <div class="card">
                        <div class="picture-group">
                          <img  alt=""
                                src="{{url('storage/photos/2/me.jpg')}}"
                                alt="">
                        </div>
                        <h2 class="text-center">Le Van Hoa (John)</h2>
                        <p class="text-center">IT-Web Design</p>
                        <ul>
                            <li><a href="https://www.facebook.com/lehoa.strong/"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="mailto:lehoa.strong@gmail.com"><i class="fas fa-envelope"></i></a></li>
                            <li><a href="tel:0986238723"><i class="fas fa-phone-alt"></i></a></li>
                            <li><a href="https://github.com/HoaHandsome"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div>
                    <div class="download_cv">
                        
                        <a href="{{url('download')}}"  class="button">DOWNLOAD CV</a>
                    </div>
                </div>
                <!-- Recent post -->



                <div class="card-group flex-column recent-post" >
                    <h3 class="text-center"><a href="{{url(route('blog'))}}">RECENT POST</a> </h3>
                    <div class="list-articles">
                        @foreach ($articles_recent as $article)
                        <!-- article -->

                        <div class="item-article flex-column">
                            <div class="flex  flex-between">
                                <div class="pic-article">
                                      <a href="{{url('blog/article/'.$article->slug)}}">
                                            <img src="{{url($article->avatar)}}" alt="">
                                           </a> 
                                        </div>
                                        <div>

                                            <h4> <a href="{{url('blog/article/'.$article->slug)}}"> {{$article->name}}</a>  </h4>
                                            <p class="description">{{$article->description}}</p>
                                        </div>
                            </div>
                            <div class="flex category" >
                                <a href="{{url('blog/category/'.$article->category->slug)}}">{{$article->category->name}}</a>
                                    <p>{{date('d-m-Y', strtotime($article->created_at))}}</p>

                            </div>
                        </div>
                        @endforeach
                        <!-- article -->

                            <div class="recent-post" id="search_left">
                            <h3 class="text-center">SEARCH</h3>
                            <form method="get" onsubmit="handle" action="{{url(route('search_article'))}}">
                                @csrf
                                <input type="text" placeholder="Search" name="content" value="{{old('content')}}">
                                <button type="submit"> <i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    
                </div>
                <!-- Recent post -->
                <div class="card-group flex-column recent-post" id="fb">
                    <h3 class="text-center"><a href="https://www.facebook.com/lehoa.strong/">FACEBOOK</a></h3>

                </div>
            </div>

            <!-- right content -->
            <div id="right-content">
                <!-- item -->
                <div class="wrap-content">
                    <!-- content --- -->
                          @yield('content')


                    <div class="wrap-group text-center" id="reserved">
                        Van Hoa @ All Rights Reserved 2021
                    </div>
                </div>


                <!-- right -->
            </div>
            <nav>
                <ul>
                    <li class="flex-center">
                        <a href="{{url(route('home'))}}"><img  alt=""
                                src="{{url('storage/photos/2/me.jpg')}}"
                                alt=""></a>
                         <p>Home</p>
                   </li>
                   <li class="flex-center">
                       <a href="{{url(route('about'))}}"><i class="far fa-user"></i></a>
                       <p>About_me</p>
                    </li>
                   <li class="flex-center">
                       <a href="{{url(route('experience'))}}"><i class="far fa-bookmark"></i></a>
                       <p>Experience</p>
                    </li>
                    <li class="flex-center">
                        <a href="{{url(route('blog'))}}"><i class="fas fa-blog"></i></a>
                        <p>Blog</p>
                    </li>
                    <li class="flex-center">
                        <a href="{{url(route('contact'))}}"><i class="far fa-envelope"></i></a>
                        <p>Contac</p>
                    </li>
                </ul>
            </nav>
        </div>


    </section>
</body>
<script src="{{url('./js/script.js')}}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</html>