<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <title>{{ __('Login') }} - {{ config('app.name', 'Laravel') }}</title>
  <!--[if lt IE 10]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/waves.min.css') }}" type="text/css" media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/feather.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/icofont.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"><link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">

</head>
<body themebg-pattern="theme1" >

  <div class="theme-loader">
    <div class="loader-track">
      <div class="preloader-wrapper">
        <div class="spinner-layer spinner-blue">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="gap-patch">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
        <div class="spinner-layer spinner-red">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="gap-patch">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
        <div class="spinner-layer spinner-yellow">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="gap-patch">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
        <div class="spinner-layer spinner-green">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="gap-patch">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

<section class="login-block">
  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">

        <form class="md-float-material form-material"  method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="text-center">
            <img src="imagens/Guardian_Logo.png" width="10%" alt="logo.png">
          </div>
          <div class="auth-box card">
            <div class="card-block">
              <div class="row m-b-20">
                <div class="col-md-12">
                  <h3 class="text-center txt-primary">Login</h3>
                </div>
              </div>
              <p class="text-muted text-center p-b-5">Entre com seu login e senha</p>
              <div class="form-group form-primary">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <span class="form-bar"></span>
                <label class="float-label">{{ __('E-Mail') }}</label>
                @error('email')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
              </div>
              <div class="form-group form-primary">
                <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                <span class="form-bar"></span>
                <label class="float-label">{{ __('Senha') }}</label>
                @error('password')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
              </div>
              <div class="row m-t-25 text-left">
                <div class="col-12">
                  <div class="checkbox-fade fade-in-primary">
                    <label>
                      <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                      <span class="text-inverse">{{ __('Remember Me') }}</span>
                    </label>
                  </div>
                  <!-- div class="forgot-phone text-right float-right">
                    <a href="auth-reset-password.html" class="text-right f-w-600"> Forgot Password?</a>
                  </div -->
                </div>
              </div>
              <div class="row m-t-30">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">{{ __('Login') }}</button>
                </div>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
      </div>
 </div>
</section>


  <!--[if lt IE 10]>
  <div class="ie-warning">
      <h1>Warning!!</h1>
      <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
      <div class="iew-container">
          <ul class="iew-download">
              <li>
                  <a href="http://www.google.com/chrome/">
                      <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                      <div>Chrome</div>
                  </a>
              </li>
              <li>
                  <a href="https://www.mozilla.org/en-US/firefox/new/">
                      <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                      <div>Firefox</div>
                  </a>
              </li>
              <li>
                  <a href="http://www.opera.com">
                      <img src="../files/assets/images/browser/opera.png" alt="Opera">
                      <div>Opera</div>
                  </a>
              </li>
              <li>
                  <a href="https://www.apple.com/safari/">
                      <img src="../files/assets/images/browser/safari.png" alt="Safari">
                      <div>Safari</div>
                  </a>
              </li>
              <li>
                  <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                      <img src="../files/assets/images/browser/ie.png" alt="">
                      <div>IE (9 & above)</div>
                  </a>
              </li>
          </ul>
      </div>
      <p>Sorry for the inconvenience!</p>
  </div>
  <![endif]-->


  <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
  <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
  <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
  <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

  <script src="{{ asset('js/waves.min.js') }}" type="4878d7dfa7bc22a8dfa99416-text/javascript"></script>

  <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('js/jquery.slimscroll.js') }}"></script>

  <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('js/modernizr.js') }}"></script>
  <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('js/css-scrollbars.js') }}"></script>
  <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('js/common-pages.js') }}"></script>


  <script src="{{ asset('js/rocket-loader.min.js') }}" data-cf-settings="4878d7dfa7bc22a8dfa99416-|49" defer=""></script></body>


</html>
