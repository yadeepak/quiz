@extends('layouts.quizapp',[
'bodyClass'=>'construction-image'
])
@section('content')
<div class="page custom-pages" style="min-height: auto;">
    <div class=" z-index-10">
        <header class="link-registration bg-white">
            <div class=" container d-flex justify-content-between">
                <div>
                    <img src="../assets/new images/logo.png" alt="">
                </div>
                <div class="d-flex align-items-center">
                    <a href="#" class="px-5 ">{{$data['name']}}</a>
                    <a href="#" class="px-5">{{$data['email']}}</a>
                    <a href="#" class="px-5">{{$data['mobile']}}</a>
                </div>
            </div>
        </header>
        <div class="container mt-5">
            <div class="row ">
                <div class="col-xl-8 col-md-12 col-md-12 d-block mx-auto" style="    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);">
                    <div class="card mb-xl-0">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 p-5  text-center row justify-content-center">
                                    <div class="mt-5">
                                        <h2>Welcome<br> {{$data['name']}}<br>
                                            Start a Test</h2>
                                        <small>Please read the notes right side of screen</small>
                                        <form action="{{route('quizstart')}}" method="post" class="onsubmit">
                                            {{ csrf_field() }}
                                            <input type="hidden" value={{$tokenid}} name="tokenid" />
                                            <input type="hidden" value="{{$data['email']}}" name="student_email" />
                                            <input type="submit" class="btn btn-primary rounded d-block mt-3 w-100" value="Proceed"  />
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6 bg-primary text-white p-5">
                                    <h2>Topics Covered</h2>
                                    <ul style="list-style-type: disc;" class="px-5">
                                        @if($desc)
                                        @foreach($desc as $description)
                                        <li>{{$description}}</li>
                                        @endforeach
                                        @else
                                        <li>random questions</li>
                                        @endif
                                    </ul>
                                    <h2 class="mt-5">Please Note</h2>
                                    <ul style="list-style-type: disc;" class="px-5">
                                        <li>Make sure to finish test before closing browser
                                        </li>
                                        <li>Don't Refresh the Page between the test</li>
                                        <li>Don't Press back key of the browser</li>
                                        <li>if you refresh the browser your test will be submitted</li>
                                    </ul>
                                </div>
                            </div>

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
    $('.onsubmit').submit(function(e) {
        e.preventDefault();
        let data = $(this).serialize();
        $.ajax({
            url: "{{route('quizstart')}}",
            type: 'post',
            data: data,
            success: function(data) {
                if (data.allowed) {
                    var windowFeatures = "menubar=no,location=no,resizable=no,scrollbars=no,status=no";
                    window.open("{{route('mcq_home',$tokenid)}}", "Start Test", windowFeatures);
                }

            }

        });
    });
</script>
@endsection