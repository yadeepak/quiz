@extends('layouts.app')

@section('head')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
</title><link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />

<script>
    window.Laravel = <?php echo json_encode([
                            'csrfToken' => csrf_token(),
                        ]); ?>
</script>

<style type="text/css">
        .auto-style1 {
            max-width: 38em;
            padding: 1em 3em 2em 3em;
            margin: 0em auto;
            background-color: #fff;
            border-radius: 4.2px;
            box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
            text-align: left;
        }
        .auto-style3 {
            text-align: center;
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
                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
@endsection

@section('content')
<div class="container-fluid">
   
{!! Form::open(['method' => 'POST', 'action' => 'FrntendQuizController@registerSubmit']) !!}
{{csrf_field()}}
<input type="hidden" value={{$tokenid}} name="tokenid" />
        <div class="auto-style1">
            <div class="row">
                <h3 style=" color:slategrey;align-content:center " class="auto-style3">Welcome To DcodeTech</h3>
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<div class="form-row">

<div class="form-group col-md-6">
      <label for="name">Full Name</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" value="{{ old('name')}}" >
    </div>


    <div class="form-group col-md-6">
      <label for="dob">DOB</label>
      <input type="date" name="dob" class="form-control" id="dob" placeholder="DOB" value="{{ old('dob')}}" />
    </div>


    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{ old('email')}}" />
    </div>

    <div class="form-group col-md-6">
      <label for="dob">Gender</label><br>
      <label class="radio-inline"><input type="radio" name="gender" value="male" {{ (old("gender") == 'male') ? "checked" : '' }} />Male</label>
<label class="radio-inline"><input type="radio" name="gender" value="female" {{ (old("gender") == 'female') ? "checked" : '' }} />Female</label>    </div>  
</div>
    
    
  </div>

  <div class="form-group">
    <label for="mobile">Mobile</label>
    <input type="number" name="mobile" class="form-control" required id="mobile" placeholder="Mobile" value="{{ old('mobile')}}"  />
  </div>

  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St" value="{{ old('address') }}" />
  </div>


  
    <div class="form-group">
      <label for="college">College</label>
      <input type="text" name="college" placeholder="College" class="form-control" id="inputZip" value="{{ old('college')}}" />
    </div>
  


  
   
    <div class="form-group">
      <label for="experience">experience:</label>
      <select name="experience" id="" class="form-control">
                     <option value="0" {{ (old("experience") == '0') ? "selected" : '' }}>Select Experience</option>
                      <option value="1" {{ (old("experience") == '1') ? "selected" : '' }}>Fresher</option>
                      <option value="2" {{ (old("experience") == '2') ? "selected" : '' }}>1 yr</option>
                      <option value="3" {{ (old("experience") == '3') ? "selected" : '' }}>2 yr</option>
                      <option value="4" {{ (old("experience") == '4') ? "selected" : '' }}>3 yr</option>
                      <option value="5" {{ (old("experience") == '5') ? "selected" : '' }}>4 yr</option>
                      <option value="6" {{ (old("experience") == '6') ? "selected" : '' }}>5 yr</option>
                      <option value="7" {{ (old("experience") == '7') ? "selected" : '' }}>&gt; 6 yr</option>
      </select>
    </div>  

    <div class="form-group">
      <label for="appearing">Appearing For:</label>
      <select name="appearing" id="" class="form-control" value="{{ old('appearing')}}">
      <option value="0" {{ (old("appearing") == '0') ? "selected" : '' }}>Select Appearing For</option>
       <option value="1" {{ (old("appearing") == '1') ? "selected" : '' }}>junior software Devloper</option>
      <option value="2" {{ (old("appearing") == '2') ? "selected" : '' }}>Associate Software Devloper</option>
       <option value="3" {{ (old("appearing") == '3') ? "selected" : '' }}>Senior Software Devloper</option>
      </select>
    </div>  

  

  
        
            
             {!! Form::submit("submit", ['class' => 'btn btn-wave btn-block ']) !!}          
               <br />
                <br />
              </div>
              {!! Form::close() !!}
            </div>
   


@endsection

@section('scripts')



<script>

function mydate1()
{
    var now = new Date();
    var selectedDate = new Date($(this).val());

    alert(selectedDate);

    if (selectedDate > now) {
        $(this).val(dateControler.currentDate)
    } else {
        dateControler.currentDate = $(this).val();
    }

}


</script>
<script type="text/javascript">

function wOpener(url, name)
{
if(screen.width>=800)
{
        var iwidth=(screen.width);
}
if(screen.width>=600)
{
        var iheight=(screen.height)
}

var param="width=" + iwidth +",height="+iheight+",left=1,top=1,status=yes,resizable=yes,scrollbars=yes,menubar=no";
myWindow=window.open(url,name,param);

myWindow.focus();

}

</script>


@endsection