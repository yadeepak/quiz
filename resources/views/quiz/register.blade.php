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
            text-align: right;
        }
        .auto-style3 {
            text-align: center;
        }
		
		*,
*:before,
*:after {
  box-sizing: border-box;
}
body {
  padding: 1em;
  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 15px;
  color: #b9b9b9;
  background-color: #e3e3e3;
}
h4 {
  color: #7ed321;
}
input,
input[type="radio"] + label,
input[type="checkbox"] + label:before,
select option,
select {
  width: 100%;
  padding: 1em;
  line-height: 1.4;
  background-color: #f9f9f9;
  border: 1px solid #e5e5e5;
  border-radius: 3px;
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
input:focus {
  outline: 0;
  border-color: #64ac15;
}
input:focus + .input-icon i {
  color: #7ed321;
}
input:focus + .input-icon:after {
  border-right-color: #7ed321;
}
input[type="radio"] {
  display: none;
}
input[type="radio"] + label,
select {
  display: inline-block;
  width: 50%;
  text-align: center;
  float: left;
  border-radius: 0;
}
input[type="radio"] + label:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
input[type="radio"] + label:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
input[type="radio"] + label i {
  padding-right: 0.4em;
}
input[type="radio"]:checked + label,
input:checked + label:before,
select:focus,
select:active {
  background-color: #7ed321;
  color: #fff;
  border-color: #64ac15;
}
input[type="checkbox"] {
  display: none;
}
input[type="checkbox"] + label {
  position: relative;
  display: block;
  padding-left: 1.6em;
}
input[type="checkbox"] + label:before {
  position: absolute;
  top: 0.2em;
  left: 0;
  display: block;
  width: 1em;
  height: 1em;
  padding: 0;
  content: "";
}
input[type="checkbox"] + label:after {
  position: absolute;
  top: 0.45em;
  left: 0.2em;
  font-size: 0.8em;
  color: #fff;
  opacity: 0;
  font-family: FontAwesome;
  content: "\f00c";
}
input:checked + label:after {
  opacity: 1;
}
select {
  height: 3.4em;
  line-height: 2;
}
select:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
select:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
select:focus,
select:active {
  outline: 0;
}
select option {
  background-color: #7ed321;
  color: #fff;
}
.input-group {
  margin-bottom: 1em;
  zoom: 1;
}
.input-group:before,
.input-group:after {
  content: "";
  display: table;
}
.input-group:after {
  clear: both;
}
.input-group-icon {
  position: relative;
}
.input-group-icon input {
  padding-left: 4.4em;
  width:160%;
}
#dob {

margin-left: 15px;

}
.input-group-icon .input-icon {
  position: absolute;
  top: 0;
  left: 0;
  width: 3.4em;
  height: 3.4em;
  line-height: 3.4em;
  text-align: center;
  pointer-events: none;
}
.input-group-icon .input-icon:after {
  position: absolute;
  top: 0.6em;
  bottom: 0.6em;
  left: 3.4em;
  display: block;
  border-right: 1px solid #e5e5e5;
  content: "";
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.input-group-icon .input-icon i {
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}




.col-half {
  padding-right: 10px;
  float: left;
  width: 50%;
}
.col-half:last-of-type {
  padding-right: 0;
}
.col-third {
  padding-right: 10px;
  float: left;
  width: 33.33333333%;
}
.col-third:last-of-type {
  padding-right: 0;
}
@media only screen and (max-width: 540px) {
  .col-half {
    width: 100%;
    padding-right: 0;
  }
}
		
		button,hr,input{overflow:visible}audio,canvas,progress,video{display:inline-block}progress,sub,sup{vertical-align:baseline}html{font-family:sans-serif;line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0} menu,article,aside,details,footer,header,nav,section{display:block}h1{font-size:2em;margin:.67em 0}figcaption,figure,main{display:block}figure{margin:1em 40px}hr{box-sizing:content-box;height:0}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}a{background-color:transparent;-webkit-text-decoration-skip:objects}a:active,a:hover{outline-width:0}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}dfn{font-style:italic}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}audio:not([controls]){display:none;height:0}img{border-style:none}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0}button,input{}button,select{text-transform:none}[type=submit], [type=reset],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{}textarea{overflow:auto}[type=checkbox],[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}[hidden],template{display:none}/*# sourceMappingURL=normalize.min.css.map */
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
                <div class="input-group input-group-icon">
               
                    <input name="name" type="text" id="txtName" placeholder="Full Name" required="" autocomplete="off" />
                    <div class="input-icon"><i class="fa fa-user"></i></div>
                </div>

  <div class="row">
        <div class="col-half">
             <div class="input-group input-group-icon">
                  <input name="dob" type="date" id="Dob" data-date-inline-picker="false" data-date-open-on-focus="true" style="height:3.4em" required="" autocomplete="off" min="1975-01-01" max="2001-12-31" />   
                      <div class="input-icon"><i class="fa fa-calendar"></i></div>
                 </div>
               </div>


        <div class="col-half">        
        <div class="input-group">
            <span required="" autocomplete="off"><input id="rbtnMale" type="radio" name="gender" value="rbtnMale" /><label for="rbtnMale">Male</label></span>
            <span required="" autocomplete="off"><input id="rbtnFemale" type="radio" name="gender" value="rbtnFemale" /><label for="rbtnFemale">Female</label></span>    
        </div>
      </div>
        </div>        
              
                <div class="input-group input-group-icon">
                   <input name="email" id="txtEmail" placeholder="Email Id" title="abc@domain.com" validate="required:true" required="" autocomplete="off" type="email" pattern="\w+([-+.&#39;]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*" />
                   <div class="input-icon"><i class="fa fa-envelope"></i></div>
                </div>

                <div class="input-group input-group-icon">    
                <input name="mobile" type="text" id="txtMobnumber" placeholder="Mobile Number" required="" autocomplete="off" title="1234567890" pattern="[0-9]{10}" />
                <div class="input-icon"><i class="fa fa-mobile"></i></div>
                </div>

                <div class="input-group input-group-icon">
                   <input name="address" type="text" id="txtAddress" placeholder="Address" required="" autocomplete="off" />
                    <div class="input-icon"><i class="fa fa-building"></i></div>
                </div>

                 <div class="input-group input-group-icon">
                 <input name="college" type="text" id="txtCollegename" placeholder="College Name / Company" />
                      <div class="input-icon"><i class="fa fa-building"></i></div>
                     </div>
                    </div>
              
                 <div class="row">
                <div class="col-half">
                        <div class="input-group">
                    <b>Experience</b>
                </div>
                    </div>
                 <div class="col-half">
                        <b>Appearing For:</b>
                    </div>
              </div>
                
                  <div class="row">
                   <div class="col-half">
                    <select name="experience" id="drpExperience" style="width:100%;">
                      <option value="0">Select Experience</option>
                      <option value="1">Fresher</option>
                      <option value="2">1 yr</option>
                      <option value="3">2 yr</option>
                      <option value="4">3 yr</option>
                      <option value="5">4 yr</option>
                      <option value="6">5 yr</option>
                      <option value="7">&gt; 6 yr</option>
                    </select>
                        
                    </div>                 
                     <div class="col-half">
                        <select name="appearing" id="drpAppear" style="width:100%;">
                        <option value="0">Select Appearing For</option>
                        <option value="1">junior software Devloper</option>
                        <option value="2">Associate Software Devloper</option>
                        <option value="3">Senior Software Devloper</option>
                      </select>
                       </div>
                </div>
             <br />
             {!! Form::submit("submit", ['class' => 'btn btn-wave']) !!}          
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