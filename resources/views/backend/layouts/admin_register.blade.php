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
                                    <h5 class="modal-title text_white">Register</h5>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div >
                                            {{-- <label class="col-form-label" for="">Your Name</label> --}}
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" name="name">
                                            @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    <br>
                                            @enderror
                                        </div>
                                        <div >
                                            <input type="number" class="form-control @error('number') is-invalid @enderror"
                                                placeholder="Enter your number" name="number">
                                                @error('number')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        <br>
                                                @enderror
                                        </div>
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
                                        {{-- <div >
                                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                                placeholder="Confirm password" name="password_confirmation">
                                                @error('password_confirmation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        <br>
                                                @enderror
                                        </div> --}}
                                        <button type="submit"  class="btn_1 full_width text-center"> Sign Up</button>
                                        <p>Already have an account? 
                                            <a  href="{{ route('admin.login') }}">Sign in</a>
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