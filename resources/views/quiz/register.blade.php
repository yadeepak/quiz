@extends('layouts.app')

@section('head')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
<script>
    window.Laravel = <?php echo json_encode([
                            'csrfToken' => csrf_token(),
                        ]); ?>
</script>
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
        <div class="col-md-8 col-md-offset-2">
            <div class="home-main-block">
                <form action="{{route('register')}}" method="post">
                    {{ csrf_field() }}
                    <input type="text" value={{$tokenid}} name="tokenid"/>

                    <div class="form-group{{ $errors->has('student_name') ? ' has-error' : '' }}">
                    {!! Form::label('student_name', 'Student Name') !!}
                    <span class="required">*</span>
                    {!! Form::text('student_name', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter Your Name']) !!}
                    <small class="text-danger">{{ $errors->first('student_name') }}</small>
                  </div>

                  <div class="form-group{{ $errors->has('mob_number') ? ' has-error' : '' }}">
                    {!! Form::label('mob_number', 'Mobile Number') !!}
                    <span class="required">*</span>
                    {!! Form::text('mob_number', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter Your Mobile']) !!}
                    <small class="text-danger">{{ $errors->first('mob_number') }}</small>
                  </div>

                  <div class="form-group{{ $errors->has('email_id') ? ' has-error' : '' }}">
                    {!! Form::label('email_id', 'Email Id') !!}
                    <span class="required">*</span>
                    {!! Form::text('email_id', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter Your Email']) !!}
                    <small class="text-danger">{{ $errors->first('email_id') }}</small>
                  </div>

                  <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                    {!! Form::label('city', 'City') !!}
                    <span class="required">*</span>
                    {!! Form::text('city', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter Your City']) !!}
                    <small class="text-danger">{{ $errors->first('city') }}</small>
                  </div>

                  <div class="form-group{{ $errors->has('stream') ? ' has-error' : '' }}">
                    {!! Form::label('stream', 'Stream') !!}
                    <span class="required">*</span>
                    {!! Form::text('stream', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter Your Stream']) !!}
                    <small class="text-danger">{{ $errors->first('stream') }}</small>
                  </div>

                    <input type="submit" class="btn btn-wave" value="submit" />
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
@endsection