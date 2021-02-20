@extends('layouts.quizapp',[
  'bodyClass'=>'construction-image'
  ])
@section('content')
<div class="page custom-pages" style="min-height: auto;">
		<div class="z-index-10">
			<header class="link-registration">
				<div class="bg-white d-flex justify-content-center">
					<div>
						<img src="{{asset('assets/new images/jobping1.png')}}" alt="">
					</div>
				</div>
			</header>
			<div class="container mt-5 link-form">
				<div class="row ">
					<div class="col-xl-6 col-md-12 col-md-12 d-block mx-auto">
						<div class="card mb-xl-0">
							<div class="py-4">
								<h2 class="text-center ">Welcome To {{$round===2?'Next Round':'DcodeTech'}}</h2>
							</div>
							<div class="card-body">

              {!! Form::open(['method' => 'POST', 'action' => 'FrntendQuizController@registerSubmit']) !!}
          {{csrf_field()}}
          <input type="hidden" value={{$tokenid}} name="tokenid" />
          <input type="hidden" value={{$round}} name="round" />
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
            @if($round===1)
										<div class="form-group col-md-6">
											<div class="form-group">
												<label class="form-label" for="exampleInputEmail1">Full
													Name</label>
												<input type="text" class="form-control" id="name1"
													placeholder="First Name" name="name" value="{{ old('name')}}" required>
											</div>
										</div>
										<div class="form-group col-md-6">
											<div class="form-group">
												<label class="form-label" for="exampleInputEmail1">DOB</label>
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<i class="fa fa-calendar tx-16 lh-0 op-6"></i>
														</div>
													</div><input class="form-control fc-datepicker"
														placeholder="MM/DD/YYYY" type="text" name="dob" value="{{ old('dob')}}" required>
												</div>
											</div>
										</div>
										<div class="form-group col-md-6">
											<label for="inputEmail4" class="col-form-label">Email</label>
											<input type="email" class="form-control" id="inputEmail5"
												placeholder="Email" name="email" value="{{ old('email')}}" required>
										</div>
										<div class="form-group col-md-6">
											<label class="col-form-label">Gender</label>

											<div class="d-flex">
												<label class="custom-control custom-radio mr-2">
													<input type="radio" class="custom-control-input"
														name="gender" value="male" {{ (old("gender") == 'male') ? "checked" : '' }}>
													<span class="custom-control-label">Male</span>
												</label>
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input"
														name="gender" value="female" {{ (old("gender") == 'female') ? "checked" : '' }}>
													<span class="custom-control-label">Female</span>
												</label>
											</div>


										</div>
										<div class="form-group col-12">
											<label class="form-label">Mobile</label>
											<input type="tel" class="form-control" placeholder="Mobile" name="mobile" required value="{{ old('mobile')}}" max="10" maxlength="10">
										</div>
										<div class="form-group col-12">
											<label class="form-label">Address</label>
											<textarea class="form-control" rows="2" placeholder="Address" name="address" required>{{ old('address') }}</textarea>
										</div>
										<div class="form-group col-12">
											<label class="form-label">College</label>
											<input type="text" class="form-control" placeholder="College" name="college" required value="{{ old('college')}}">
										</div>
										<div class="form-group col-12">
											<label class="form-label">Experience</label>
											<select class="form-control select2 custom-select px-0" name="experience">
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
										<div class="form-group col-12">
											<label class="form-label">Appearing For</label>
											<select class="form-control select2 custom-select px-0" name="appearing">
                      <option value="0" {{ (old("appearing") == '0') ? "selected" : '' }}>Select Appearing For</option>
              <option value="1" {{ (old("appearing") == '1') ? "selected" : '' }}>junior software Devloper</option>
              <option value="2" {{ (old("appearing") == '2') ? "selected" : '' }}>Associate Software Devloper</option>
              <option value="3" {{ (old("appearing") == '3') ? "selected" : '' }}>Senior Software Devloper</option>
         </select>
										</div>
							
                    @endif
                    @if($round===2)
          <div class="form-group col-12" style="padding: 20px 0">
											<label class="form-label">Mobile</label>
											<input type="email" class="form-control" placeholder="Enter your email id" name="email" required value="{{ old('email')}}">
										</div>
          @endif
          <div class="form-group col-12">
                      {!! Form::submit("submit", ['class' => 'btn btn-primary w-100']) !!}

                    </div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
  </div>
  
@endsection