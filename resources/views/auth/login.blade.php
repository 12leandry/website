<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Login Cover | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('dash/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dash/assets/css/authentication/form-1.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('dash/assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dash/assets/css/forms/switches.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dash/assets/css/elements/alert.css')}}">
</head>
<body class="form">
    

    <div class="form-container">
        <div class="form-form ">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content ">
                        <a href="#" class="logo d-flex align-items-center">
                            <!-- Uncomment the line below if you also wish to use an image logo -->
                             <img src="{{asset('assets')}}/img/testlogo.svg"style="width: 100%; height: 100%; align-item: center;" alt="">
                            {{-- <h1>UpConstruction<span>.</span></h1> --}}
                          </a>
                        <h1 class="">Log In to <a href="index.html"><span class="brand-name">Dashboard</span></a></h1>
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger mb-4" role="alert">
                                    {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> ... </svg></button> --}}
                                        <strong>{{ $error }} </strong> 
                                    {{-- </button> --}}
                                </div> 
                            @endforeach 
                        @endif
                        <form method="POST" action="{{ route('login') }}" class="text-left">
                            @csrf
                            <div class="form">
                                
                                <div id="email-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input id="email" name="email" type="text" class="form-control" placeholder="Email">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper toggle-pass">
                                        <p class="d-inline-block">Show Password</p>
                                        <label class="switch s-primary">
                                            <input type="checkbox" id="toggle-password" class="d-none">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Log In</button>
                                    </div>
                                    
                                </div>

                                <div class="field-wrapper text-center keep-logged-in">
                                    <div class="n-chk new-checkbox checkbox-outline-primary">
                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                          <input type="checkbox" class="new-control-input">
                                          <span class="new-control-indicator"></span>Keep me logged in
                                        </label>
                                    </div>
                                </div>

                                <div class="field-wrapper">
                                    <a href="{{ route('password.request') }}" class="forgot-pass-link">Forgot Password?</a>
                                </div>

                            </div>
                        </form>                        
                        <div class="footer-legal text-center position-relative">
                            <div class="container">
                              <div class="copyright">
                                &copy; Copyright <strong><span style="color: blue">TestSarl</span></strong>. All Rights Reserved
                              </div>
                              <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                Designed by <a target="_blanc" href="https://zonite.org/" style="color: blue">Zonite Sarl</a>
                              </div>
                            </div>
                          </div>
                    </div>                    
                </div>
            </div>
        </div>
    
    </div>

    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('dash/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('dash/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('dash/bootstrap/js/bootstrap.min.js')}}"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('dash/assets/js/authentication/form-1.js')}}"></script>

</body>
</html>