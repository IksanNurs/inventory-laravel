@extends('blog/header-footer')

@section('title')
    <!-- Webpage Title -->
    <title>Article Details</title>
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
    <!-- Header -->
    <header class="ex-header bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Article Details</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

<!-- Basic -->
<div class="ex-basic-1 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {{-- <img class="img-fluid mt-5 mb-3" src="images/{{$supplierss->code}}" alt="alternative"> --}}
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of basic -->



<!-- Basic -->
<div class="ex-basic-1 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <h2 class="mb-3">{{$suppliers->supp_name}}</h2>
                <p class="mb-4">{{$suppliers->supp_address}}</p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of basic -->




@endsection

