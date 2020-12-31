@extends('layouts.login_master')

@section('content')
    <div class="page-content login-cover">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Login card -->
                <form class="login-form " method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <h3>{{ Qs::getSystemTitle() }} </h3>

                                <img style="width: 100px" height="100px" src="{{ Qs::getSystemLogo() }}" alt="logo">
                                <h5 class="mb-0">{{__('msg.login_to_your_account')}}</h5>
                                <span class="d-block text-muted">{{__('msg.your_credentials')}}</span>
                            </div>

                                @if ($errors->any())
                                <div class="alert alert-danger alert-styled-left alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                                    <span class="font-weight-semibold">Oops!</span> {{ implode('<br>', $errors->all()) }}
                                </div>
                                @endif


                            <div class="form-group ">
                                <input type="text" class="form-control" name="identity" value="{{ old('identity') }}" placeholder="Login ID or Email">
                            </div>

                            <div class="form-group ">
                                <input required name="password" type="password" class="form-control" placeholder="{{ __('Password') }}">

                            </div>

                            <div class="form-group d-flex align-items-center">
                                <div class="form-check mb-0">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="remember" class="form-input-styled" {{ old('remember') ? 'checked' : '' }} data-fouc>
                                        {{__('msg.remember')}}
                                    </label>
                                </div>

                                <a href="{{ route('password.request') }}" class="ml-auto">{{__('msg.forgot_password')}}</a>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">{{__('msg.signing')}} <i class="icon-circle-right2 ml-2"></i></button>
                            </div>

                           {{-- <div class="form-group">
                                <a href="#" class="btn btn-light btn-block"><i class="icon-home"></i> Back to Home</a>
                            </div>--}}


                        </div>
                    </div>
                </form>

            </div>


        </div>

    </div>
    @endsection
