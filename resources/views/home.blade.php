@extends('layouts.app')

@section('head')
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <script>
    window.Laravel =  <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
  </script>
@endsection

@section('top_bar')
  <nav class="navbar navbar-default navbar-static-top">
    <div class="nav-bar">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="navbar-header">
              <!-- Branding Image -->
              @if($setting)
                <!-- <a class="tt" title="DcodeTech" href="{{url('/')}}"><h4 class="heading">DcodeTech</h4></a> -->
                <img src="{{asset('/images/logo/logosmall.png')}}" alt="logo" />
                
              @endif
            </div>
          </div>
          <div class="col-md-6">
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">

            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
@endsection

@section('content')
<div class="container">
  @if ($auth)
    <div class="quiz-main-block">
      <div class="row">

      </div>
    </div>
  @endif
  @if (!$auth)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="home-main-block">
              @if ($setting)
            <!--    <h1 class="main-block-heading text-center">{{$setting->welcome_txt}}</h1> -->
              @endif
            <!--      <blockquote>
                Please <a href="{{ route('login') }}">Login</a> To Start Quiz >>>  
                </blockquote>-->
            </div>
        </div>
    </div>
  @endif
</div>


@endsection

@section('scripts')

<script>
   $( document ).ready(function() {
       $('.sessionmodal').addClass("active");
       setTimeout(function() {
           $('.sessionmodal').removeClass("active");
      }, 4500);
    });
</script>


 @if($setting->right_setting == 1)
  <script type="text/javascript" language="javascript">
   // Right click disable
    $(function() {
    $(this).bind("contextmenu", function(inspect) {
    inspect.preventDefault();
    });
    });
      // End Right click disable
  </script>
@endif

@if($setting->element_setting == 1)
<script type="text/javascript" language="javascript">
//all controller is disable
      $(function() {
      var isCtrl = false;
      document.onkeyup=function(e){
      if(e.which == 17) isCtrl=false;
}

      document.onkeydown=function(e){
       if(e.which == 17) isCtrl=true;
      if(e.which == 85 && isCtrl == true) {
     return false;
    }
 };
      $(document).keydown(function (event) {
       if (event.keyCode == 123) { // Prevent F12
       return false;
  }
      else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I
     return false;
   }
 });
});
     // end all controller is disable
 </script>


@endif
@endsection
