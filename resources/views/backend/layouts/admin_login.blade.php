@extends('backend.layouts.layout')
@section('content')
<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="white_box mb_30">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">

                            <div class="modal-content cs_modal">
                                <div class="modal-header theme_bg_1 justify-content-center">
                                    <h5 class="modal-title text_white">Login</h5>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('login.admin') }}" method="POST">
                                        @csrf
                                        <div >
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Enter your email" name="email">
                                                @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        <br>
                                                @enderror
                                        </div>
                                        <div >
                                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Password" name="password">
                                                @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        <br>
                                                @enderror
                                        </div>
                                        <button type="submit"  class="btn_1 full_width text-center"> Sign in</button>
                                        <p>Need an account?
                                             <a href="{{ route('admin.register') }}">Sign Up</a>
                                        </p>
                                        {{-- <div class="text-center">
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#forgot_password" data-bs-dismiss="modal"
                                                class="pass_forget_btn">Forget Password?</a>
                                        </div> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection