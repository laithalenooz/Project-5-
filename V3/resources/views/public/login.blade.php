@extends('layout.publicmain')

@section('content')
<!-- Login Area Start Here -->
<section class="login-page-wrap padding-top-80 padding-bottom-50">
    <div class="container">
        <div class="row gutters-60">
            <div class="col-lg-8">
                <div class="login-box-layout1">
                    <div class="section-heading heading-dark">
                        <h2 class="item-heading">LOGIN FORM</h2>
                    </div>
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            @error('email')
                            <div class="text-danger col-md-6" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                            @error('password')
                            <div class="text-danger col-md-6" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                            <div class="col-md-6">
                                <label class="mb-3">Email Address</label>
                                <input class="main-input-box" type="text" placeholder="" name="email" />
                            </div>
                            <div class="col-md-6">
                                <label class="mb-3">Password</label>
                                <input class="main-input-box" type="password" placeholder="" name="password" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox1" type="checkbox" name="remember">
                                    <label for="checkbox1">Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <div class="btn-area">
                            <button class="btn-fill btn-primary" type="submit">Login<i
                                    class="flaticon-next"></i></button>
                            <button class="btn-fill btn-dark" value="Login">Create an Account<i
                                    class="flaticon-next"></i></button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
                <div class="widget">
                    <div class="section-heading heading-dark">
                        <h3 class="item-heading">ABOUT ME</h3>
                    </div>
                    <div class="widget-about">
                        <figure class="author-figure"><img src="img/figure/about.jpg" alt="about"></figure>
                        <figure class="author-signature"><img src="img/figure/signature.png" alt="about"></figure>
                        <p>Fusce mauris auctor ollicituder teary iner hendrerit risusey aeenean rauctor pibus
                            doloer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login Area End Here -->
@endsection
