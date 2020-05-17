@extends('layouts.app')

@section('head')
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
  <!-- Admin Theme style -->
  <link rel="stylesheet" href="{{asset('css/AdminLTE.css')}}">
  <link rel="stylesheet" href="{{asset('css/skin-black.css')}}">
   <link rel="stylesheet" href="{{asset('css/fontawesome-iconpicker.min.css')}}">
  <!-- Select 2 -->
  <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
  <!-- DataTable -->
  <link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">

  <script>
    window.Laravel =  <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
  </script>
  <style>
  

  @import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  padding-top: 24px;
  width: 100%;
  position: relative;
  display: flex;
}

.searchdiv {

height : 80px;
background-color : #488CDF;

}

.searchTerm {
  width: 100%;
  border: 3px solid #00B4CC;
  border-right: none;
  padding: 5px;
  height: 36px;
  
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 80%;
  height: 60%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
 


  </style>
@endsection

@section('top_bar')

<nav class="navbar navbar-default navbar-fixed-top" style="background-image: linear-gradient(#6F81E5, #3591DC);" >
    <div class="container" style="height:65px;">
        <div class="navbar-header">
            <a class="navbar-brand navbar-link smooth-scroll" href="#"><img src="{{asset('/images/logo/logosmall.png')}}" width="80" height="40px"></a>
            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
            <ul class="nav navbar-nav navbar-right">
               <li class="dropdown"><a data-toggle="dropdown" aria-expanded="true" href="#" class="dropdown-toggle"><span style="color:white">Company</span> <span class="caret"></span></a>
                    <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="/sites">Registration</a></li>
                        <li role="presentation"><a href="/forms">Login</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a data-toggle="dropdown" aria-expanded="true" href="#" class="dropdown-toggle"><span style="color:white">Internship </span><span class="caret"></span></a>
                    <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="/sites">Registration</a></li>
                        <li role="presentation"><a href="/forms">Login</a></li>
                    </ul>
                </li>
                <li role="presentation"><a href="#features" class="smooth-scroll"><span style="color:white">Internship Job </span></a></li>
               
                <li role="presentation"><a href="#"><span style="color:white">Job</a></span></li>
            </ul>
        </div>
    </div>
</nav>

@endsection

@section('content')
<div class="container">


<div class="wrap">
  <div class="searchdiv">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>

   <br>
   <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-3">
            <div class="small-box" style="background-color:white">
              <div class="inner">
                <h3 style="color:black">43</h3>
                <p style="color:black">Total Students</p>
              </div>
              <div class="icon">
                <i class="fa fa-user fa-fw"></i>
              </div>
              <a href="{{url('/admin/users')}}" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="small-box" style="background-color:white">
              <div class="inner">
                <h3 style="color:black">4</h3>
                <p style="color:black">Total Questions</p>
              </div>
              <div class="icon">
                <i class="fa fa-briefcase fa-fw"></i>
              </div>
              <a href="{{url('/admin/questions')}}" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="small-box" style="background-color:white">
              <div class="inner">
                <h3 style="color:black">4</h3>
                <p style="color:black">Total Questions</p>
              </div>
              <div class="icon">
                <i class="fa fa-question  fa-fw"></i>
              </div>
              <a href="{{url('/admin/questions')}}" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <div class="col-md-3">
            <div class="small-box" style="background-color:white">
              <div class="inner">
                <h3 style="color:black">3</h3>
                <p style="color:black">Total Quiz</p>
              </div>
              <div class="icon">
                <i class="fa fa-cog fa-fw"></i>
              </div>
              <a href="{{url('/admin/topics')}}" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
         
          <div class="col-md-12">
            <div class="small-box" style="background-color:white">
              <div class="inner">
                <h3 style="text-align:center; color:black">3</h3>
                <p style="text-align:center; color:black">All Intership's</p>
              </div>
              <div class="icon">
                <i class="fa fa-book fa-fw"></i>
              </div>
              <a href="{{url('/admin/topics')}}" class="small-box-footer">
                View All Intership <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>  



</div>


             
        
        </div>
      </div>
</div>



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
