@extends('blog/header-footer')

@section('title')
 <!-- Webpage Title -->
 <title>AGIL'S Blog - Home</title>
@endsection


@section('navigation')
<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{('/')}}">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{('/all-post')}}">All Blog</a>
</li>
@endsection

@section('content')
<!-- Header -->
<header id="header" class="header">
    <img class="decoration-star" src="{{asset('images/decoration-star.svg')}}" alt="alternative">
    <img class="decoration-star-2" src="{{asset('images/decoration-star.svg')}}" alt="alternative">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xl-5">
                <div class="text-container">
                    <h1 class="h1-large">Beautifying office spaces</h1>
                    <p class="p-large">Is education residence conveying and sore. Suppose shyness say ten behaved morning had. Any propose assist compliment occasional too reasonably</p>
                    <a class="btn-solid-lg" href="#introduction">More details</a>
                    <a class="btn-outline-lg" href="#contact">Contact us</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-5 col-xl-7">
                <div class="image-container">
                    <img class="img-fluid" src="{{asset('images/header.png')}}" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of header -->
<!-- end of header -->


<!-- Projects -->
<div id="projects" class="cards-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">Semua Postingan</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                @foreach($posts as $post)
                <!-- Card -->
                <div class="card">
                    <img class="img-fluid" src="images/{{$post->image}}" alt="alternative">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->excerpt}}
                        <form action="/single-post">
                        @csrf
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <button class="btn btn-info" type="submit">...Read More</button>
                        </form>
                    </p>
                    </div>
                </div>
                <!-- end of card --
                @endforeach


            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-2 -->
<!-- end of projects -->

@endsection('content')



