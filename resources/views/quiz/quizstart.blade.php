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
    margin-top: 10px;
    color: #29B6F6;
    font-size: 20px;
}

div.radio-holder {
  padding: 5px;
  
}

input[type="radio"] {
 display:none;
}
input[type="radio"]:checked+label {
  border-bottom: 2px solid #222222;
  color: red;
  font-size: 18px;
  padding-bottom: 0px;
  
}

label {

    cursor:pointer;

}

.pad {

margin-top : 10px;

} 




  </style>
@endsection

@section('top_bar')
<nav class="navbar navbar-default navbar-static-top">
    <div class="nav-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="navbar-header">
                        <!-- Branding Image -->
                        @if($setting)
                        <a class="tt" title="DcodeTech" href="{{url('/')}}">
                        <img src="{{asset('/images/logo/logosmall.png')}}" alt="logo" />
                        </a>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                  <li class="textcolor"><a href="#" ><span style="color:red"><span id="min" style="font-size:19px"></span><span id="sec" style="font-size:17px"> </span></span></a></li>
                  <li class="textcolor"><a href="#" ><span style="color:blue">{{$user['name']}}</span></a></li>
                  <li class="textcolor"><a href="#" ><span style="color:blue">{{$user['email']}}</span></a></li>
                  <li class="textcolor"><a href="#" ><span style="color:blue">{{$user['mobile']}}</span></a></li>
                         
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
        <input type="hidden" class="custom-control-input" id="timer" name="timer" value="{{$topics['timer']}}">
            <div class="">
            
                <?php for($i=0;$i<count($questions);$i++) { ?>
                    <a class="countstyle active{{$i}}" id="<?php echo $i; ?>no" onClick="showDiv(<?php echo $i; ?>);" ><?php echo $i+1; ?></a>
                <?php
                    if ( (($i+1) % 5) == 0)
                    {
                        echo "<br>";
                    }
                
                } ?>
            
            </div>

        </div>


        <?php // var_dump($questions); exit(); ?>

        <div class="col-md-9">
        <div class="main" id="ques">
        
            <form action="{{route('submitTest')}}" method="post" id="form">
            {{csrf_field()}}      
            <?php for($i=0;$i<count($questions);$i++){ ?>
                <div class="quesdiv globalques qustion{{$i}}" style="display: none">
                <h4 class="quesno"><b>Question No . </b></h4><br>
                <h1 class="mainque"><b>{{$i+1}} :- {{$questions[$i]->question}}</b></h1>
                @if($round==1)

                <div class="custom-control custom-radio radio-holder">
                <input type="radio" class="custom-control-input" id="a" name="optradio{{$i}}" value="a">
                
                <label class="custom-control-label pad" for="a"><i class="fa fa-check"></i> {{$questions[$i]->a}}</label>

                </div>
                    
                <div class="custom-control custom-radio radio-holder">
                <input type="radio" class="custom-control-input" id="b" name="optradio{{$i}}" value="b">
                <label class="custom-control-label pad" for="b"><i class="fa fa-check"></i> {{$questions[$i]->b}}</label>
                </div>
                
                <div class="custom-control custom-radio radio-holder">
                <input type="radio" class="custom-control-input" id="c" name="optradio{{$i}}" value="c">
                <label class="custom-control-label pad" for="c"><i class="fa fa-check"></i> {{$questions[$i]->c}}</label>
                </div>
                
                <div class="custom-control custom-radio radio-holder">
                <input type="radio" class="custom-control-input" id="d" name="optradio{{$i}}" value="d">
                <label class="custom-control-label pad" for="d"><i class="fa fa-check"></i> {{$questions[$i]->d}}</label>
                </div>
                @elseif($round==2)
                <textarea class="form-control" rows="8" name="code{{$i}}"></textarea>
                @endif
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


   
  $("label").click(function(e){
    e.preventDefault();
    $check = $(this).prev();
    if($check.prop('checked'))
      $check.prop( "checked", false );
    else 
      $check.prop( "checked", true );
      
    //console.log($check.prop("checked"));
  });





})
function showDiv(id){
    $('.countstyle').removeClass('active');
    $('.globalques').hide();
    $('.active'+id).addClass('active');
    $('.qustion'+id).fadeIn();

}

 

// document.onkeydown = function() {            
//     switch (event.keyCode) { 
//         case 116 : //F5 button
//             event.returnValue = false;
//             event.keyCode = 0;
//             alert('If you refresh the page your data will be submitted.');
//             return false; 
//         case 82 : //R button
//             if (event.ctrlKey) { 
//                 event.returnValue = false; 
//                 event.keyCode = 0;  
//             alert('If you refresh the page your data will be submitted.');
//                 return false; 
//             } 
//             case 123 : //f12 button
//                 event.returnValue = false; 
//                 event.keyCode = 0;  
//                 return false; 
            
//     }
// }


  
// window.onload = function() {
//     document.addEventListener("contextmenu", function(e){
//       e.preventDefault();
//     }, false);
//     document.addEventListener("keydown", function(e) {
//     //document.onkeydown = function(e) {
//       // "I" key
//       if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
//         disabledEvent(e);
//       }
//       // "J" key
//       if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
//         disabledEvent(e);
//       }
//       // "S" key + macOS
//       if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
//         disabledEvent(e);
//       }
//       // "U" key
//       if (e.ctrlKey && e.keyCode == 85) {
//         disabledEvent(e);
//       }
//       // "F12" key
//       if (event.keyCode == 123) {
//         disabledEvent(e);
//       }
//     }, false);
//     function disabledEvent(e){
//       if (e.stopPropagation){
//         e.stopPropagation();
//       } else if (window.event){
//         window.event.cancelBubble = true;
//       }
//       e.preventDefault();
//       return false;
//     }
//   };

var counter = {};
window.addEventListener("load", function(){
var timing = document.getElementById("timer").value;
counter.end = timing * 60;

counter.min = document.getElementById("min");
counter.sec = document.getElementById("sec");

if(counter.end > 0) {

counter.ticker = setInterval(function() {

counter.end--;


if(counter.end <= 300) {


setInterval(blinker, 1000);



}




if(counter.end <= 0) {

clearInterval(counter.ticker);
counter.end = 0;
submitform(); 
}

var secs = counter.end;
var mins = Math.floor(secs/ 60);
secs -= mins * 60;

counter.min.innerHTML = mins + " Min. ";
counter.sec.innerHTML = secs + " Sec. ";

}, 1000);
}
}
);

function submitform(){

document.getElementById("form").submit();
}



function blinker() {

$('#min').fadeOut(500);
$('#min').fadeIn(500);

$('#sec').fadeOut(500);
$('#sec').fadeIn(500);
}




</script>

@endsection