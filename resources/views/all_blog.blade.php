@extends('blog/header-footer')

@section('title')
 <!-- Webpage Title -->
 <title>Upskill- All Blog</title>
@endsection


@section('navigation')
<li class="nav-item">
    <a class="nav-link" aria-current="page" href="{{('/')}}">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link active" href="{{('/all-post')}}">All Blog</a>
</li>
@endsection

@section('content')

    <!-- Projects -->
    <div id="projects" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">All Blogs Are Below</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
            @foreach($posts as $post)
                <!-- Card -->
                <div class="card">
                    <img class="img-fluid" src="/images/{{$post->image}}" alt="alternative">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->excerpt}}
                        <form action="/single-post">
                        @csrf
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <button class="btn btn-info" type="submit">...Read More</button>
                        </form>
                    </div>
                </div>
                <!-- end of card -->
            @endforeach


                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of projects -->
@endsection('content')



