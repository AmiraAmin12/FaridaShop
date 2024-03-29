@extends('website.layout')

@section('content')
<!-- register_section - start
			================================================== -->
<section class="register_section sec_ptb_140 parallaxie clearfix" data-background="assets/images/backgrounds/bg_23.jpg">
    <div class="container">
        <div class="reg_form_wrap signup_form" data-background="assets/images/reg_bg_02.png">


            <form action="{{url('register')}}" method="POST">
                @csrf
                <div class="reg_form">
                    <h2 class="form_title text-uppercase">Register</h2>
                    <div class="form_item">
                        <input type="text" name="name" placeholder="First Name"
                            class="@error('name') is-invalid @enderror">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form_item">
                        <input type="email" name="email" placeholder="Email"
                            class="@error('email') is-invalid @enderror">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form_item">
                        <input type="tel" name="phone" placeholder="phone" class="@error('phone') is-invalid @enderror">

                    </div>
                    <div class="form_item">
                        <input type="password" name="password" placeholder="Password"
                            class="@error('password') is-invalid @enderror">
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form_item">
                        <input type="password" name="password_confirmation" placeholder="Confirm Password"
                            class="@error('password_confirmation') is-invalid @enderror">
                        @error('password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="checkbox_item mb_30">
                        <label for="agree_checkbox"><input id="agree_checkbox" type="checkbox"> I agree to the Terms of
                            User</label>
                    </div>
                    <button type="submit" class="custom_btn bg_default_red text-uppercase mb_50">Create Account</button>

                    <div class="create_account text-center">
                        <a class="create_account_btn text-uppercase" href="{{url('login')}}">Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- register_section - end
			================================================== -->
@endsection