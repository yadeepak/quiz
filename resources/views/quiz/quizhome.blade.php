@extends('layouts.app')

@section('head')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
<script>
    window.Laravel = <?php echo json_encode([
                            'csrfToken' => csrf_token(),
                        ]); ?>
</script>
<style>
   .login-main-text{
       color:#fff;
       text-align: center;
       margin-top: 50%;
    margin-left: 50%;
    transform: translate(-50%,-50%);
   }
   .main{
       background: #fff;
       padding: 69px;
      
   }

    </style>
@endsection

@section('top_bar')
<nav class="navbar navbar-default navbar-static-top">
    <!-- <div class="logo-main-block">
      <div class="container">
        @if ($setting)
          <a href="{{ url('/') }}" title="{{$setting->welcome_txt}}">
            <img src="{{asset('/images/logo/'. $setting->logo)}}" class="img-responsive" alt="{{$setting->welcome_txt}}">
          </a>
        @endif
      </div>
    </div> -->
    <div class="nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="navbar-header">
                        <!-- Branding Image -->
                        @if($setting)
                        <a class="tt" title="DcodeTech" href="{{url('/')}}">
                            <h4 class="heading">DcodeTech</h4>
                        </a>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            
                  <li><a href="#" >{{$data['name']}}</a></li>
                  <li><a href="#" >{{$data['email']}}</a></li>
                  <li><a href="#" >{{$data['mobile']}}</a></li>
                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
@endsection

@section('content')
<div class="container">
    <div class="row card">
        <div class="col-md-6">
        <div class="sidenav">
         <div class="login-main-text">
            <h2>Welcome</h2>
            <h2>Start a Test</h2>
            <p>Note : read the notes right side of screen</p>
            <form action="{{route('quizstart')}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" value={{$tokenid}} name="tokenid"/>
                    <input type="hidden" value="{{$data['email']}}" name="student_email"/>
                    <input type="submit" class="btn btn-wave btn-lg w-25" value="Proceed" style="width: 286px;"/>
                </form>
         </div>
      </div>

        </div>
        <div class="col-md-6">
        <div class="main">
            <div class="login-form">
                <h1>Topic Covered</h1>
                <ul>
             @if($desc)
                @foreach($desc as $description)
                <li>{{$description}}</li>
                @endforeach
             @endif
             </ul>
            </div>
            <div class="login-form">
                <h1>Please Note *</h1>
               <ul>
                   <li>Make sure to finish test before closing browser</li>
                   <li>Don't Refresh the Page between the test</li>
                   <li>Don't Press back key of the browser</li>
                   <li>if you refresh the browser your test will be submitted</li>
               </ul>
            </div>
      </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
@endsection