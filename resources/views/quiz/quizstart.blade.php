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

.questions {

background-color: #B2EBF2;

}

.quesno {

    color: #03A9F4; 
}
.mainque {

    color: #29B6F6;
    font-size: 16px;
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
<div class="container questions">
<br>
    <div class="row">
        <div class="col-md-3" style="border-right:1px solid;">
        
            <div class="">
            
                <?php for($i=0;$i<count($questions);$i++){ ?>
                    <a class="countstyle active{{$i}}" style="" id="<?php echo $i; ?>no" onClick="showDiv(<?php echo $i; ?>);" ><?php echo $i+1; ?></a>
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
        
            <form action="{{route('submitTest')}}" method="post" >
            {{csrf_field()}}
            <?php for($i=0;$i<count($questions);$i++){ ?>
                <div class="quesdiv globalques qustion{{$i}}" style="display: none">
                <h4 class="quesno"><b>Question No .{{$i+1}} </b></h4><br>
                <p class="mainque"><b>{{$questions[$i]->question}}</b></p>
                <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" name="optradio{{$i}}" value="a">
                <label class="custom-control-label" for="defaultChecked2">{{$questions[$i]->a}}</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" name="optradio{{$i}}" value="b">
                <label class="custom-control-label" for="defaultChecked2">{{$questions[$i]->b}}</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" name="optradio{{$i}}" value="c">
                <label class="custom-control-label" for="defaultChecked2">{{$questions[$i]->c}}</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" name="optradio{{$i}}" value="d">
                <label class="custom-control-label" for="defaultChecked2">{{$questions[$i]->d}}</label>
                </div>
                </div>
            <?php } ?>
            <br>
            <button type="submit" class="btn btn-primary btn-lg pull-center submitForm" style="width: 200px;">Submit</button>
            
            <br></br><br>
            </form>
           
        </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('.globalques').hide();
    $('.qustion0').show();
    $('.active0').addClass('active');

    $('.submitForm')
})
function showDiv(id){
    $('.countstyle').removeClass('active');
    $('.globalques').hide();
    $('.active'+id).addClass('active');
    $('.qustion'+id).fadeIn();


    
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
<script>

document.onkeydown = function() {   
        console.log(event);
         
    switch (event.keyCode) { 
        case 116 : //F5 button
            event.returnValue = false;
            event.keyCode = 0;
            alert('If you refresh the page your data will be submitted.');
            return false; 
        case 82 : //R button
            if (event.ctrlKey) { 
                event.returnValue = false; 
                event.keyCode = 0;  
            alert('If you refresh the page your data will be submitted.');
                return false; 
            } 
            case 123 : //f12 button
                event.returnValue = false; 
                event.keyCode = 0;  
                return false; 
            
    }
}


  
window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
    //document.onkeydown = function(e) {
      // "I" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      // "J" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
      // "S" key + macOS
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      // "U" key
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      // "F12" key
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };

    </script>
@endsection