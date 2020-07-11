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
                    <img src="{{asset('assets/new images/logo.png')}}" alt="">
                </div>
                <div class="d-flex align-items-center">
                    <a href="#" class="px-5 ">{{@$user['name']}}</a>
                    <a href="#" class="px-5">{{@$user['email']}}</a>
                    <a href="#" class="px-5">{{@$user['mobile']}}</a>
                </div>
            </div>
        </header>
            <div class="container link-form" style="position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);">

                <div class="row justify-content-center">
                    <div class="col-xl-12 " >
                        <div class="card m-b-20">
                        <div class="p-4 text-center border">
                                <h2 class="text-center">Your Test Submitted Successfully
                                </h2>

                            </div>
 <?php if($data['round'] == 1 ){ ?>
                           
                            <div class="card-body p-4">
                                <div class="row justify-content-between">
                                    <div class="col-12 p-5 mb-3 text-center text-white bg-info">
                                        <h3>Result- {{$data['pass']?'Pass':'Fail'}}</h3>
                                        <h1 class="display-2">{{$data['percentage']}}%</h1>
                                    </div>
                                    <div class="col-md-3 p-5  text-center text-white bg-primary">
                                        <h3>Total <br> Questions</h3>
                                        <h1 class="display-3">{{$data['total']}}</h1>
                                    </div>
                                    <div class="col-md-3 p-5  text-center text-white bg-success">
                                        <h3>Right <br> Questions</h3>
                                        <h1 class="display-3">{{$data['rightQ']}}</h1>
                                    </div>
                                    <div class="col-md-3 p-5  text-center text-white bg-danger">
                                        <h3>Wrong <br> Questionss</h3>
                                        <h1 class="display-3">{{$data['wrongQ']}}</h1>
                                    </div>
                                    <div class="col-md-3 p-5  text-center text-white bg-orange">
                                        <h3>UnAttempted Questions</h3>
                                        <h1 class="display-3">{{$data['unAttemptedCount']}}</h1>
                                    </div>
                                </div>

                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection