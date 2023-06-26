@extends('layouts.login_master')
@section('content')
    <div class="page-content login-cover">
        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Login card -->
                <form class="" method="post" action="{{ route('login') }}">
                    @csrf              
                    <div>
                        <div class="card-body">
                            <div class="m-5 text-center">
                                <h1 class="text-white">Login to Your Account</h1>        
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
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
    @endsection
