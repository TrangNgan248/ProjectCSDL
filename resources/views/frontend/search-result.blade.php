@extends('frontend.layouts.master')

@section('title')
<title>Result</title>
@endsection
@section('content')
<section class="section wb" >
    <div class="container">
        <div class="search-result-header"><b>Kết quả tìm kiếm cho: "Chia sẻ kinh nghiệm học" : </b></div>
        <div class="row">
            @foreach ($search as $searchResult)
            <div class="col-lg-4 col-md-6">
                <div class="content-post-container">
                    <div class="post-author--wrapper" style="margin: 0.5rem 0.5rem">
                        <img class="post-author" src="{{asset('cloapedia/images/gau-icon.png')}}" alt="">
                        <div class="post-author--infor">
                            <a class="post-author--name" href="" style="color: #000000;"><b>Username</b></a>
                            <br><span class="post-author--posting-time">{{$searchResult->created_at}}</span>
                        </div>
                        <span class="post-category"><b>{{$searchResult->cat_name}}</b></span>
                    </div>
                    <div class="content-post-content">

                        <h3 class="content-post-header" style="font-size: 18px; margin: 10px 0px">{{$searchResult->blog_heading}}</h3>
                                <p style="margin: 0px">{{$searchResult->blog_content}}</p>

                        <h3 class="content-post-header" style="font-size: 18px; margin: 10px 0px">{{$category->blog_heading}}</h3>
                                <p style="margin: 0px">{{$category->blog_content}}</p>

                    </div>
                    <div class="content-post-image--container">
                    <img src="upload/Ezreal_20.jpg" alt="" class="content--post-image" style="width:100%;">
                    </div>
                    <div class="content-post-likes-cmt">
                         <span class="blog-likes"><i class="fa fa-heart-o" aria-hidden="true"> 100</i></span>
                         <span class="blog-likes"><i class="fa fa-comment-o" aria-hidden="true"> 17</i></span>
                         <div class="content-like-cmt-bar container-fluid">
                             <div class="row">
                                 <div class="button-container col-6">
                                     <button id="like-button" class=""><i class="fa fa-heart-o" aria-hidden="true"></i> Like</button>
                                 </div>
                                 <div class="button-container col-6">
                                     <button id="cmt-button" class=""><i class="fa fa-comment-o" aria-hidden="true"></i> Comment</button>
                                 </div>
                             </div>
                       </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="dmtop">Scroll to Top</div>
</section>
@endsection
