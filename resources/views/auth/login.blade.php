<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!--[if IE]>
    <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
    <![endif]-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Jobping</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('../assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css')}}" rel="stylesheet" />

  <script>
    window.Laravel =  <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
  </script>
  <style>
   .card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    border-radius: 3px;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #eaeef9;
    box-shadow: 0 0 40px 0 rgba(234, 238, 249, .5);
}
.card-header {
    background: 0 0;
    padding: .5rem 1.5rem;
    display: -ms-flexbox;
    display: flex;
    min-height: 3.5rem;
    -ms-flex-align: center;
    align-items: center;
}
    .construction-image {
    background: url({{asset('assets/images/photos/construction.jpg')}});
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
}
.construction-image:before {
    position: fixed;
    content: '';
    width: 100%;
    height: 100%;
    display: block;
    z-index: 0;
    left: 0;
    right: 0;
    background: linear-gradient(-225deg, rgba(72, 1, 255, .9) 0, rgba(121, 24, 242, .9) 48%, rgba(172, 50, 228, .9) 100%);
}
    </style>
</head>
<body class="construction-image">
    <div id="app"  style="position: relative">
    <div class="page">
    <div class="container">
      @if (Session::has('error'))
        <div class="alert alert-danger sessionmodal">
          {{session('error')}}
        </div>
      @endif
        <div class="row">
        <div class="col-xl-4 col-md-6 col-sm-12 d-block mx-auto">
        <div class="card mb-0">
              <div class="card-header">
                <h3 class="card-title">
                  <img src="../assets/new images/jobping1.png" class="d-inline-block mx-5 px-5" alt="" />
                </h3>
              </div>
              <div class="card-body">
        <form class="form login-form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label class="form-label text-dark" style="font-size: 13px;">Email address</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required style="height: 36px;" autofocus>
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label class="form-label text-dark" style="font-size: 13px;">Password</label>
            <input id="password" type="password" class="form-control" name="password" placeholder="Enter Password" required style="height: 36px;">
            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group">
            <div class="checkbox remember-me">
              <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                 </label><span style="font-size: 13px;"> Remember Me</span>
               
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Login
            </button>
         <!--   <p class="messege text-center">Not registered? <a href="{{url('/register')}}" title="Create An Account">Create an account</a></p>   -->
          </div>
          <div class="form-group text-center">
            <!-- <a href="{{url('/password/reset')}}" title="Forgot Password">Forgot Password?</a> -->
          </div>
        </form>
      </div>
    </div>
  </div> 
        </div>
    </div>
  </div>  
    </div> 

  <script src="{{ asset('js/app.js') }}"></script>

  <script>
    $(function () {
      $( document ).ready(function() {
         $('.sessionmodal').addClass("active");
         setTimeout(function() {
             $('.sessionmodal').removeClass("active");
        }, 4500);
      });
    });
  </script>
</body>
</html>

