@extends('layouts.app')

@section('head')
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
  <script>
    window.Laravel =  <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
  </script>

@endsection


@section('content')

    <div class="container">
        <div class="row regmainrow">
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="leftdesign">
                    <div class="leftdesigntext">
                        <span class="leftspan1">Let's Get</span><br>
                        <span class="leftspan2">Started</span><br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                    </div>    
                </div>
            </div>
            
            <div class="col-md-6 rightdstyle">
                <div class="rightdesign">    
                    <h3>REGISTER YOUR INTERN COMPANY</h3>
                    {!! Form::open(['method' => 'POST', 'action' => 'InternCompanyController@store', 'files' => true]) !!}
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                {!! Form::text('name', null, ['class' => 'form-control1', 'placeholder' => 'Company Name *', 'required' => 'required']) !!}
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                {!! Form::text('mobile', null, ['class' => 'form-control1', 'placeholder' => 'Company Mobile Number *', 'required' => 'required']) !!}
                                <small class="text-danger">{{ $errors->first('mobile') }}</small>
                                </div>
                            </div>

                            <br><br>

                            <div class="col-md-12">
                                <div class="form-group{{ $errors->has('company_website') ? ' has-error' : '' }}">
                                {!! Form::text('company_website', null, ['class' => 'form-control1', 'placeholder' => 'Company Website *', 'required' => 'required']) !!}
                                <small class="text-danger">{{ $errors->first('company_website') }}</small>
                                </div>
                            </div>

                            <br><br>

                            <div class="col-md-12">
                                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                {!! Form::text('city', null, ['class' => 'form-control1', 'placeholder' => 'City']) !!}
                                <small class="text-danger">{{ $errors->first('city') }}</small>
                                </div>
                            </div>

                            <br><br>

                            <div class="col-md-12">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                {!! Form::text('email', null, ['class' => 'form-control1', 'placeholder' => 'Email ID']) !!}
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                                </div>
                            </div>

                            <br><br>
                            
                            <div class="col-md-12">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                {!! Form::text('password', null, ['class' => 'form-control1', 'placeholder' => 'Password']) !!}
                                {!! Form::hidden('company_type', null, ['class' => 'form-control']) !!}
                                <small class="text-danger">{{ $errors->first('password') }}</small>
                                </div>
                            </div>

                            <br><br>

                            <div class="col-md-12">
                                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                {!! Form::textarea('address', null, ['class' => 'form-control1', 'placeholder' => 'Address', 'rows' => '4']) !!}
                                <small class="text-danger">{{ $errors->first('address') }}</small>
                                </div>
                            </div>

                            <br><br>

                            <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('company_img') ? ' has-error' : '' }}">
                                    {!! Form::file('company_img') !!}
                                    <small class="text-danger">{{ $errors->first('company_img') }}</small>
                                    <p class="help">Please Choose Only .JPG, .JPEG and .PNG</p>
                                    </div>
                            </div>

                            <br><br>

                        </div>
                        </div>
                    </div>
                        <div class="submitregbtn ">
                        {!! Form::reset("Reset", ['class' => 'gradient-buttonreg gradient-button-1']) !!}
                        {!! Form::submit("Add", ['class' => 'gradient-buttonreg gradient-button-1']) !!}
                        </div>
                    {!! Form::close() !!}

                    <a href="#" class="alreadyacc">Have an Account</a>

                </div> 
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

@endsection

@section('scripts')


<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('frontend/js/popper.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('frontend/js/aos.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('frontend/js/scrollax.min.js')}}"></script>
  <script src="{{asset('frontend/js/main.js')}}"></script>

@endsection
