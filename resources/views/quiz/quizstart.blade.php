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

   .countstyle{
    padding:10px;
    border:1px solid;
    text-decoration:none;
    margin-left:5px;
    line-height:3.6;
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
    <div class="row">
        <div class="col-md-3" style="border-right:1px solid;">
        
            <div class="">
            
                <?php for($i=0;$i<count($questions);$i++){ ?>
                    <a class="countstyle" style="" id="<?php echo $i; ?>no" onClick="showDiv(<?php echo $i; ?>);" ><?php echo $i+1; ?></a>
                <?php
                    if ( (($i+1) % 5) == 0)
                    {
                        echo "<br>";
                    }
                
                } ?>
            
            </div>

        </div>

        <div class="col-md-9">
        <div class="main" id="ques">
            <?php for($i=0;$i<count($questions);$i++){ ?>
                <div class="quesdiv globalques qustion{{$i}}">
                <h4>Question No {{$i+1}} </h4><br>
                <p>{{$questions[$i]->question}}</p>
                <div class="radio">
                    <label><input type="radio" name="optradio{{$i}}">{{$questions[$i]->a}}</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio{{$i}}">{{$questions[$i]->b}}</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio{{$i}}">{{$questions[$i]->c}}</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio{{$i}}">{{$questions[$i]->d}}</label>
                </div>
                </div>
            <?php } ?>
        </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    alert(0);
    $('.globalques').hide();
    $('.qustion0').show();
})
function showDiv(id){
    $('.globalques').hide();
    $('.qustion'+id).show();


    
    // var questionArray = <?php echo json_encode($questions); ?>;
    // var html = '';
    // for(var i=0;i<questionArray.length;i++){
    //     if(i==id){
    //         html += '<h4>Question No '+(i+1)+'</h4><br>'
    //         +'<p>'+questionArray[i].question+'</p>' 
    //         +'<div class="radio">'
    //         +'<label><input type="radio" name="optradio">'+questionArray[i].a+'</label>'
    //         +'</div>'
    //         +'<div class="radio">'
    //         +'<label><input type="radio" name="optradio">'+questionArray[i].b+'</label>'
    //         +'</div>'
    //         +'<div class="radio">'
    //         +'<label><input type="radio" name="optradio">'+questionArray[i].c+'</label>'
    //         +'</div>'
    //         +'<div class="radio">'
    //         +'<label><input type="radio" name="optradio">'+questionArray[i].d+'</label>'
    //         +'</div>' ;

    //         $('#ques').html(html);
    //     }
    //     console.log(questionArray[i].question); 
    // }

    
}

</script>

@endsection

@section('scripts')
@endsection