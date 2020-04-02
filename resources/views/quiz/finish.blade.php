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
   .countstyle{
    padding:10px;
    border:1px solid;
    text-decoration:none;
    margin-left:5px;
    line-height:3.6;
    cursor: pointer;
   }
   .active{
    background: #424242;
    color: #fff;
   }
   .btn-outline-success{
    width: 200px;
    border-radius: 3px;
    background: none;
    border: 1px solid;
   }
   .btn-outline-success:hover{
color: #fff;
background: #424242;
}  

#gree {

background-color: #7CB342;    
}

#re {

    background-color: #e53935;
}

#warn {

    background-color : #F4511E;
}

.cent {

    text-align: center;
  font-size: 27px;

}
h3.cent{
  font-size: 65px;
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
        <div class="container-fluid">
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
                            
                  <li><a href="#" >{{$user['name']}}</a></li>
                  <li><a href="#" >{{$user['email']}}</a></li>
                  <li><a href="#" >{{$user['mobile']}}</a></li>
                         
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
    
      
<h1 style="padding:30px 0px;" class="text-center">Your Test Submitted Succesfully.</h1>
<div class="row">
    <div class="col-md-6">
<div class="card text-white bg-primary mb-3" style="padding: 40px;background: #007ad5;">
  <div class="card-header cent">Total Questions</div>
  <div class="card-body">
    <h3 class="card-title cent"> {{$data['total']}}</h3>
  </div>
</div>
</div>
<div class="col-md-6">
<div class="card text-white mb-3" id="gree" style="padding: 40px;">
  <div class="card-header cent" class="tex"><font color="white">Right Questions</font></div>
  <div class="card-body">
    <h3 class="card-title cent"><font color="white">{{$data['rightQ']}}</font></h3>
  </div>
</div>
</div>

 
  <div class="col-md-6">
<div class="card text-white mb-3" id="re" style="padding: 40px;">
  <div class="card-header cent"><font color="white">Wrong Questions</font></div>
  <div class="card-body">
    <h3 class="card-title cent" ><font color="white">{{$data['wrongQ']}}</font></h3>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card text-white mb-3" id="warn" style="padding: 40px;">
  <div class="card-header cent"><font color="white">UnAttempted Questions</font></div>
  <div class="card-body">
    <h3 class="card-title cent"><font color="white"> {{$data['unAttemptedCount']}}</font></h3>
</div>
</div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  
});

</script>

@endsection

@section('scripts')
@endsection