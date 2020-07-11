
@extends('layouts.admin', [
  'page_header' => 'Your Profile',
  'dash' => '',
  'quiz' => '',
  'users' => '',
  'questions' => '',
  'top_re' => '',
  'all_re' => '',
  'sett' => ''
])
@section('content')
  @if ($auth)
  <div class="row">
  <div class="col-md-12 col-lg-12">
    <div class="card">
    <div class="card-body">
          {!! Form::model($auth, ['method' => 'PATCH', 'action' => ['UsersController@update', $auth->id], 'files' => true ]) !!}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  {!! Form::label('name', 'Name') !!}
                  <span class="required"></span>
                  {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter Your Name']) !!}
                  <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  {!! Form::label('email', 'Email address') !!}
                  <span class="required">*</span>
                  {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'eg: info@example.com', 'required' => 'required']) !!}
                  <small class="text-danger">{{ $errors->first('email') }}</small>
                </div>

                <div class="form-group{{ $errors->has('company_website') ? ' has-error' : '' }}">
                  {!! Form::label('company', 'Company Website') !!}
                  {!! Form::text('company_website', null, ['class' => 'form-control', 'placeholder' => 'eg: +91-123-456-7890']) !!}
                  <small class="text-danger">{{ $errors->first('company_website') }}</small>
                </div>
                <label for="">Change Password: </label>
                              
                              <input type="radio" value="1" name="changepass" id="ch1">&nbsp;Yes
                              <input type="radio" value="0" name="changepass" checked id="ch2">&nbsp;No
                              <br>
                             <div id="pass" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                               {!! Form::label('password', 'Password') !!}
                               <span class="required">*</span>
                              
                               <input class="form-control" type="password" value="" placeholder="Enter new password" name="password">
                               <small class="text-danger">{{ $errors->first('password') }}</small>
                             </div>
              </div>
              <div class="col-md-6 margin-bottom">
                <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                  {!! Form::label('mobile', 'Mobile No.') !!}
                  {!! Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => 'eg: +91-123-456-7890']) !!}
                  <small class="text-danger">{{ $errors->first('mobile') }}</small>
                </div>
                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                  {!! Form::label('city', 'Enter City') !!}
                  {!! Form::text('city', null, ['class' => 'form-control', 'placeholder'=>'Enter Your City']) !!}
                  <small class="text-danger">{{ $errors->first('city') }}</small>
                </div>
                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                  {!! Form::label('address', 'Address') !!}
                  {!! Form::textarea('address', null, ['class' => 'form-control', 'rows'=>'5', 'placeholder' => 'Enter Your Address']) !!}
                  <small class="text-danger">{{ $errors->first('address') }}</small>
                </div>
              </div>

              <div class="container company_img">
             
                              
              <label for="">Change Image: </label>
                              
                              <input type="radio" value="1" name="changeimg" id="chimg1">&nbsp;Yes
                              <input type="radio" value="0" name="changeimg" checked id="chimg2">&nbsp;No
                              <br>
                            <div id="chimg" class="form-group{{ $errors->has('company_img') ? ' has-error' : '' }}">
                               {!! Form::label('company_img', 'Update Image To Company') !!}
                               {!! Form::file('company_img') !!}
                              <small class="text-danger">{{ $errors->first('company_img') }}</small>
                              <p class="help">Please Choose Only .JPG, .JPEG and .PNG</p>
                            </div>
                  </div>

              <div class="col-md-offset-3 col-md-6">
                {!! Form::submit('Update', ['class' => 'btn btn-primary  mt-2']) !!}
              </div>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
      </div>
      </div>

    @endif
@endsection
@section('scripts')
<script type="text/javascript">
  
  $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

$(document).ready(function(){


  $('#chimg').css("display","none");
                        $('#chimg1').change(function(){
                          $('#chimg').css("display","block");
                        });

                        $('#chimg2').change(function(){
                          $('#chimg').css("display","none");
                        }); 

                        $('#pass').css("display","none");
                        $('#ch1').change(function(){
                          $('#pass').css("display","block");
                        });

                        $('#ch2').change(function(){
                          $('#pass').css("display","none");
                        });

});


</script>

@endsection
