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
    body{
        background-color: #ffffff;
    }
    .rowMain{
        border: 1px solid #d4d4d4;
    }
   .countstyle{
    color: #fff;
   }
   .parentCount{
    width: 29px;
    color: #fff;
    text-decoration: none;
    display: inline-block;
    padding: 3px;
    line-height: 21px;
    border-radius: 50%;
    border: 1px solid;
    text-align: center;
    margin-bottom: 24px;
    margin-left: 15px;
    cursor: pointer;
   }
   .parentBlock{
    min-height: 317px;
    max-height: 317px;
    overflow: auto;
   }
   .active{
    background: #424242;
    color: #fff!important;
   }
   .active > a{
    color: #fff!important;
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

#ques{
    margin-left: 10em;
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
    color: #0dbd2c;
    font-size: 18px;
    padding-bottom: 0px;
  
}

label {

    cursor:pointer;

}

.pad {

margin-top : 10px;

} 
.quesOverview{
    color: #fff; 
    padding-left:10px;
}
.dflex {
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid #e2e2e2;
}
.attemptedColor{
    background: #009e00;
}
.attempted{
    background: #009e00;
    line-height: 0px;
    margin-bottom: -9px;
    padding: 13px;

}
.unattempted{
    line-height: 0px;
    margin-bottom: -9px;
    padding: 13px;
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
<div class="container-fluid questions">
<br>
    <div class="row rowMain">
       

        <div class="col-md-9" >
        <div class="main" id="ques">
        
            <form action="{{route('submitTest')}}" method="post" id="form">
            {{csrf_field()}}      
            <?php for($i=0;$i<count($questions);$i++){ ?>
                <div class="quesdiv globalques qustion{{$i}}" style="display: none">
               <div class="dflex"> <h4 class="quesno"><b>Question No . {{$i+1}}</b></h4>
                <h4 class="quesno pull-right"><b>Single Choice Question</b></h4>
               </div>
                <h1 class="mainque"><b> {{$questions[$i]->question}}</b></h1>
                @if($round==1)

                <div class="custom-control custom-radio radio-holder optionsClick" data-id={{$i}}>
                <input type="radio" class="custom-control-input" id="a" name="optradio{{$i}}" value="a">
                
                <label class="custom-control-label pad" for="a"><i class="fa fa-check"></i> {{$questions[$i]->a}}</label>

                </div>
                    
                <div class="custom-control custom-radio radio-holder optionsClick" data-id={{$i}}>
                <input type="radio" class="custom-control-input" id="b" name="optradio{{$i}}" value="b">
                <label class="custom-control-label pad" for="b"><i class="fa fa-check"></i> {{$questions[$i]->b}}</label>
                </div>
                
                <div class="custom-control custom-radio radio-holder optionsClick" data-id={{$i}}>
                <input type="radio" class="custom-control-input" id="c" name="optradio{{$i}}" value="c">
                <label class="custom-control-label pad" for="c"><i class="fa fa-check"></i> {{$questions[$i]->c}}</label>
                </div>
                
                <div class="custom-control custom-radio radio-holder optionsClick" data-id={{$i+1}}>
                <input type="radio" class="custom-control-input" id="d" name="optradio{{$i}}" value="d">
                <label class="custom-control-label pad" for="d"><i class="fa fa-check"></i> {{$questions[$i]->d}}</label>
                </div>
                @elseif($round==2)
                <textarea class="form-control" rows="8" name="code{{$i}}"></textarea>
                @endif
                </div>
            <?php } ?>
            <br>
            <button type="submit" class="btn btn-primary  pull-center submitForm" style="width: 200px;">Submit</button>
            
            <br></br><br>
            </form>
           
        </div>
        </div>
        <div class="col-md-3" style="background: #009fe2;padding-bottom: 24px;">
        <input type="hidden" class="custom-control-input" id="timer" name="timer" value="{{$topics['timer']}}">
        <h4 class="quesOverview"><b>Question Overview </b></h4><br>
         
        <div class="parentBlock">
            
                <?php for($i=0;$i<30;$i++) { ?>
                   <span class="parentCount active{{$i}} " onClick="showDiv(<?php echo $i; ?>);"> <a class="countstyle" id="<?php echo $i; ?>no"  ><?php echo $i+1; ?></a>
                   </span> <?php
                    if ( (($i+1) % 5) == 0)
                    {
                        echo "<br>";
                    }
                
                } ?>
            
            </div>
            <span class="parentCount attempted"></span> <span class="countstyle">Attempted</span>
            <span class="parentCount unattempted"></span> <span class="countstyle">Unattempted</span>
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

  $('.optionsClick').click(function(){
    const id = $(this).data('id');
    $('.active'+id).addClass('attemptedColor');
});

$('.submitForm').click(function(e){
    e.preventDefault();
    const check = confirm("Are you sure you want to submit the exam , click ok to confirm");
if(check){
    $('#form').submit();
}
})



})
function showDiv(id){
    $('.parentCount').removeClass('active');
    $('.globalques').hide();
    $('.active'+id).addClass('active');
    $('.qustion'+id).fadeIn();

}


 

document.onkeydown = function() {            
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