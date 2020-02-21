<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Login Page - {{ config('app.name') }}</title>

    <!-- vendor css -->
    <link href="{{ asset('backend/') }}/lib/%40fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('backend/') }}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('backend/') }}/css/bracket.css">
</head>

<body>

    <div class="d-flex align-items-center justify-content-center ht-100v">
        <video id="headVideo" class="pos-absolute a-0 wd-100p ht-100p object-fit-cover" autoplay muted loop>
            <source src="{{asset('videos/video4.mp4')}}" type="video/mp4">
            <source src="{{asset('videos/video1.ogv')}}" type="video/ogg">
            <source src="{{asset('videos/video1.webm')}}" type="video/webm">
        </video><!-- /video -->
        <div class="overlay-body bg-black-7 d-flex align-items-center justify-content-center">
            <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bg-black-6">
                <div class="signin-logo tx-center tx-18 tx-bold tx-white"><span class="tx-normal">[</span> Jakarta
                    Process <span class="tx-info">Automation</span> <span class="tx-normal">]</span></div>
                <div class="tx-white-5 tx-center mg-b-60">Warehouse System Information</div>
                    @if(session()->has('validate'))
                    <span class="text-danger" role="alert">
                        <strong>{{ session()->get('validate') }}</strong>
                    </span>
                    
                    @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} fc-outline-dark" name="email" value="{{ old('email') }}" placeholder="Enter your Email" required autofocus >

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        {{-- <input type="text" class="form-control fc-outline-dark" placeholder="Enter your username"> --}}
                    </div><!-- form-group -->
                    <div class="form-group">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}  fc-outline-dark" name="password" placeholder="Enter your password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        {{-- <input type="password" class="form-control fc-outline-dark" placeholder="Enter your password"> --}}
                        <a href="#" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
                    </div><!-- form-group -->

                    <div class="form-group row">
                            <div class="col-md-6  ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    <button type="submit" class="btn btn-info btn-block">Sign In</button>

                    {{-- <div class="mg-t-60 tx-center">Not yet a member? <a href="#" class="tx-info">Sign Up</a></div> --}}
                </form>

            </div><!-- login-wrapper -->
        </div><!-- overlay-body -->
    </div><!-- d-flex -->

    <script src="{{ asset('backend/') }}/lib/jquery/jquery.min.js"></script>
    <script src="{{ asset('backend/') }}/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="{{ asset('backend/') }}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        $(function () {
            'use strict';

            // Check if video can play, and play it
            var video = document.getElementById('headVideo');
            video.addEventListener('canplay', function () {
                video.play();
            });

        });

    </script>

</body>

</html>
