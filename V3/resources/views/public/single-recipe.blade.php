@extends('layout.publicmain')

@section('content')
<section class="inner-page-banner bg-common" data-bg-image="img/figure/inner-page-banner1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Single Recipe</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Recipe Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
             <!-- Single Recipe Main Banner Area Start Here -->
             <div class="container">
             <div class="row">
                 <div class="col-md-2"></div>
             <div class="col-md-8">
 <img src='{{asset("storage/postImages/$post->image")}}'  alt="Banner" style="max-height: 400px; max-width: 600px;" class="mx-auto d-block">
    </div>
        
        </div>
             </div>
        <!-- Single Recipe Main Banner Area End Here -->
        <!-- Single Recipe Without Sidebar Area Start Here -->
        <section class="single-recipe-wrap-layout2 padding-bottom-80">
            <div class="container">
                <div class="single-recipe-layout2">
                    <div class="ctg-name">{{$post->category->cat_name}}</div>
                    <h2 class="item-title">{{$post->title}}</h2>
                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-5">
                        <ul class="entry-meta">
                            <li class="single-meta"><a href="#"><i class="far fa-calendar-alt"></i>Nov 14,
                                    2018</a></li>
                            <li class="single-meta"><a href="#"><i class="fas fa-user"></i>by <span>{{$post->user->firstName}}</span></a></li>
                            <li class="single-meta">
                                <ul class="item-rating">
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-fill"><i class="fas fa-star"></i></li>
                                    <li class="star-empty"><i class="fas fa-star"></i></li>
                                    <li><span>9<span> / 10</span></span> </li>
                                </ul>
                            </li>
                            <li class="single-meta"><a href="#"><i class="fas fa-heart"></i><span>02</span>
                                    Likes</a></li>
                        </ul>
                      
                    </div>
                    <div class="item-feature">
                        <ul>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media">
                                        <div class="feature-icon">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">PREP TIME</div>
                                            <div class="feature-sub-title">{{$post->preparation_time}} Mins</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media">
                                        <div class="feature-icon">
                                            <i class="fas fa-utensils"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">COOK TIME</div>
                                            <div class="feature-sub-title">{{$post->cooking_time}} Mins</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media">
                                        <div class="feature-icon">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">SERVING</div>
                                            <div class="feature-sub-title">{{$post->serving_people}} People</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media">
                                        <div class="feature-icon">
                                            <i class="far fa-eye"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">VIEWS</div>
                                            <div class="feature-sub-title">3,450</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <p class="item-description">{{$post->description}}</p>
            
                    <div class="related-recipe">
                        <h4 class="heading-title">User Posts</h4>
                        <div class="rc-carousel nav-control-layout3" data-loop="true" data-items="5" data-margin="40"
                            data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false"
                            data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                            data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true"
                            data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false"
                            data-r-medium="2" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3"
                            data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="3"
                            data-r-extra-large-nav="true" data-r-extra-large-dots="false">

                            @foreach($usersposts as $posts)
                            <div class="shop-box-layout1" >
                                <div class="mask-item bg--light" >
                                    <div class="item-figure">
                                        <img src='{{asset("storage/postImages/$posts->image")}}' alt="Product" style="height: 250px;">
                                    </div>
                                   
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title"><a href="single-shop.html">{{$posts->category->cat_name}}</a></h3>
                                    <div class="item-price"><span class="currency"></span>{{$posts->title}}</div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                  
                </div>
            </div>
        </section>
        <!-- Single Recipe Without Sidebar Area End Here -->
        <!-- Instagram Start Here -->
        <section class="instagram-feed-wrap">
            <div class="instagram-feed-title"><a href="#"><i class="fab fa-instagram"></i>Follow On Instagram</a></div>
            <ul class="instagram-feed-figure">
                <li>
                    <a href="single-recipe1.html"><img src="{{asset('public/img/social-figure/social-figure1.jpg')}}" alt="Social"></a>
                </li>
                <li>
                    <a href="single-recipe1.html"><img src="{{asset('public/img/social-figure/social-figure2.jpg')}}" alt="Social"></a>
                </li>
                <li>
                    <a href="single-recipe1.html"><img src="{{asset('public/img/social-figure/social-figure3.jpg')}}" alt="Social"></a>
                </li>
                <li>
                    <a href="single-recipe1.html"><img src="{{asset('public/img/social-figure/social-figure4.jpg')}}" alt="Social"></a>
                </li>
                <li>
                    <a href="single-recipe1.html"><img src="{{asset('public/img/social-figure/social-figure5.jpg')}}" alt="Social"></a>
                </li>
                <li>
                    <a href="single-recipe1.html"><img src="{{asset('public/img/social-figure/social-figure6.jpg')}}" alt="Social"></a>
                </li>
                <li>
                    <a href="single-recipe1.html"><img src="{{asset('public/img/social-figure/social-figure7.jpg')}}" alt="Social"></a>
                </li>
                <li>
                    <a href="single-recipe1.html"><img src="{{asset('public/img/social-figure/social-figure8.jpg')}}" alt="Social"></a>
                </li>
            </ul>
        </section>
        <!-- Instagram End Here -->

@endsection