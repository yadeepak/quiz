@extends('layouts.quizapp',[
'bodyClass'=>'construction-image'
])
@section('heads')
<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('assets/color-skins/color-skins/color10.css')}}" />
@endsection
@section('content')
<div class="page custom-pages" style="min-height: auto;">
    <div class=" z-index-10">
        <header class="link-registration bg-white">
            <div class=" container d-flex justify-content-between">
                <div>
                    <img src="{{asset('assets/new images/jobping1.png')}}" alt="">
                </div>
                <div class="d-flex align-items-center">
                    <a href="#" class="text-danger"><span><span id="min" style="font-size:19px"></span><span id="sec" style="font-size:17px"> </span></span></a></li>
                    <a href="#" class="px-5 ">{{@$user['name']}}</a>
                    <a href="#" class="px-5">{{@$user['email']}}</a>
                    <a href="#" class="px-5">{{@$user['mobile']}}</a>
                </div>
            </div>
        </header>
        <div class="container link-form mt-5 pt-5">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card m-b-20">
                        <div class="card-header">
                            <div class="card-title"> {{$topics['title']}}</div>

                        </div>
                        <div class="card-body">
                            <form action="{{route('submitTest')}}" method="post" id="form">
                                {{csrf_field()}}
                                <input type="hidden" class="custom-control-input" id="timer" name="timer" value="{{$topics['timer']}}">
                                <div id="progressbarwizard" class="border pt-0 mb-3">
                                    <div style=" flex: 1;display: flex;overflow: auto;">
                                        <ul class="nav nav-tabs nav-justified" style="flex-wrap:initial">
                                            <?php for ($i = 0; $i < count($questions); $i++) { ?>
                                                <li class="nav-item" style="width: 170px;"><a href="#account-{{$i}}" data-toggle="tab" class="nav-link font-bold"> <span>Question {{$i+1}}</span></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="tab-content  card-body my-3">
                                        <div id="bar" class=" mb-5 br-0 progress progress-striped progress-bar-success-alt" style="height:2px">
                                            <div class="bar progress-bar progress-bar-success"></div>
                                        </div>
                                        <?php for ($i = 0; $i < count($questions); $i++) { ?>
                                            <div class="tab-pane p-t-10 fade my-5 p-3" id="account-{{$i}}">
                                                <h3 class="pb-4">{{$questions[$i]->question}}</h3>
                                                @if($questions[$i]->code_snippet)
                                                <pre>
                                                {{{$questions[$i]->code_snippet}}}
                                                </pre>
                                                @endif
                                                @if($questions[$i]->question_img)
                                                <img src="{{asset('images/questions/').'/'.$questions[$i]->question_img}}" class="img-fluid" />
                                                @endif
                                                @if($round==1)

                                                <label class="custom-control custom-radio mt-3" id="try">
                                                    <input type="radio" class="custom-control-input" name="optradio{{$i}}" value="a">
                                                    <span class="custom-control-label">{{$questions[$i]->a}}</span>
                                                </label>
                                                <label class="custom-control custom-radio mt-3">
                                                    <input type="radio" class="custom-control-input" name="optradio{{$i}}" value="b">
                                                    <span class="custom-control-label">{{$questions[$i]->b}}</span>
                                                </label>
                                                <label class="custom-control custom-radio mt-3">
                                                    <input type="radio" class="custom-control-input" name="optradio{{$i}}" value="c">
                                                    <span class="custom-control-label">{{$questions[$i]->c}}</span>
                                                </label>
                                                <label class="custom-control custom-radio mt-3">
                                                    <input type="radio" class="custom-control-input" name="optradio{{$i}}" value="d">
                                                    <span class="custom-control-label">{{$questions[$i]->d}}</span>
                                                </label>
                                                @elseif($round==2)
                                                <textarea class="form-control" rows="8" name="code{{$i}}"></textarea>
                                                @endif

                                            </div>
                                        <?php } ?>
                                        <ul class="list-inline mb-0 wizard mb-0">
                                            <li class="previous list-inline-item first ds"><a href="#">First</a>
                                            </li>
                                            <li class="previous list-inline-item"><a href="#" class="btn btn-info  mb-2 mb-sm-0 waves-effect waves-light">Previous</a>
                                            </li>
                                            <li class="next last list-inline-item ds"><a href="#">Last</a></li>
                                            <li class="next list-inline-item float-right"><a href="#" class="btn btn-info mb-0  waves-effect waves-light">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="border p-3">
                                    <h4>Done With The Test?</h4>
                                    <p>Click the button below to submit</p>
                                    <button type="submit" class="btn btn-success submitForm">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $('.submitForm').click(function(e) {
            e.preventDefault();
            const check = confirm("Are you sure you want to submit the exam , click ok to confirm");
            if (check) {
                $('#form').submit();
            }
        })



    })

    document.onkeydown = function() {            
        switch (event.keyCode) { 
            case 116 : //F5 button
                event.returnValue = false;
                event.keyCode = 0;
                alert('If you refresh the page your data will be su5bmitted.');
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
    window.addEventListener("load", function() {
        var timing = document.getElementById("timer").value;
        counter.end = timing * 60;

        counter.min = document.getElementById("min");
        counter.sec = document.getElementById("sec");

        if (counter.end > 0) {

            counter.ticker = setInterval(function() {

                counter.end--;


                if (counter.end <= 300) {


                    setInterval(blinker, 1000);



                }




                if (counter.end <= 0) {

                    clearInterval(counter.ticker);
                    counter.end = 0;
                    submitform();
                }

                var secs = counter.end;
                var mins = Math.floor(secs / 60);
                secs -= mins * 60;

                counter.min.innerHTML = mins + " Min. ";
                counter.sec.innerHTML = secs + " Sec. ";

            }, 1000);
        }
    });

    function submitform() {

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
@section('scripts')
<script src="{{asset('assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/wizard.js')}}"></script>
@endsection