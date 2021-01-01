@extends('layout.publicmain')
@section('content')


<!-- Inne Page Banner Area Start Here -->
<section class="inner-page-banner bg-common" data-bg-image="img/figure/inner-page-banner1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>Error Page</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>404 Page</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inne Page Banner Area End Here -->
<!-- Error Page Area Start Here -->
<section class="error-page-wrap padding-top-80 padding-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="error-content-box">
                    <div class="error-figure-wrap">
                        <img src="{{asset('public/img/figure/404.png')}}" alt="404" class="img-fluid">
                        <div class="error-center-figure">
                            <img src="{{asset('public/img/figure/404-middle.png')}}" alt="404" class="img-fluid">
                        </div>
                    </div>
                    <h2 class="item-title">Sorry! Page Was Not Found</h2>
                    <p class="item-details">The page you are looking is not available or has been removed.
                        Try going to Home Page by using the button below.</p>
                    <a href="index.html" class="item-btn">GO TO HOME PAGE</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Error Page Area End Here -->
@endsection
