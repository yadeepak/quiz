@extends('layouts.admin', [
  'page_header' => 'Company',
  'dash' => '',
  'company'=>'active',
  'quiz' => '',
  'users' => '',
  'questions' => '',
  'top_re' => '',
  'all_re' => '',
  'sett' => ''
])

@section('content')
  <div class="margin-bottom">
    <button type="button" class="btn btn-wave" data-toggle="modal" data-target="#createModal">Add Company</button>
  </div>
  <!-- Create Modal -->
  <div id="createModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Company</h4>
        </div>
        {!! Form::open(['method' => 'POST', 'action' => 'CompanyController@store', 'files' => true]) !!}
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  {!! Form::label('name', 'Company Name') !!}
                  <span class="required">*</span>
                  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Company Name', 'required' => 'required']) !!}
                  <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>
                <div class="form-group{{ $errors->has('company_website') ? ' has-error' : '' }}">
                  {!! Form::label('company_website', 'Company Website') !!}
                  <span class="required">*</span>
                  {!! Form::text('company_website', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Company Website', 'required' => 'required']) !!}
                  <small class="text-danger">{{ $errors->first('company_website') }}</small>
                </div>
                <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                  {!! Form::label('mobile', 'Company Mobile Number') !!}
                  <span class="required">*</span>
                  {!! Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Company Mobile Number', 'required' => 'required']) !!}
                  <small class="text-danger">{{ $errors->first('mobile') }}</small>
                </div>
                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                  {!! Form::label('city', 'City') !!}
                  {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Please Enter City']) !!}
                  <small class="text-danger">{{ $errors->first('city') }}</small>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  {!! Form::label('email', 'Email ID') !!}
                  {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Email ID']) !!}
                  <small class="text-danger">{{ $errors->first('email') }}</small>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  {!! Form::label('password', 'Password') !!}
                  {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Password']) !!}
                  <small class="text-danger">{{ $errors->first('password') }}</small>
                </div>

              <!--  <label for="married_status">Quiz Price:</label>
                {{-- <select name="married_status" id="ms" class="form-control">
                  <option value="no">Free</option>
                  <option value="yes">Paid</option>
                </select> --}}

                <input type="checkbox" class="quizfp toggle-input" name="quiz_price" id="toggle">
                <label for="toggle"></label>
               
                <div style="display: none;" id="doabox">
                   <br>
                  <label for="dob">Choose Quiz Price: </label>
                  <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                <input value="" name="amount" id="doa" type="text" class="form-control"  placeholder="Please Enter Quiz Price">
                 <small class="text-danger">{{ $errors->first('amount') }}</small>
                 </div>
                </div>
                <br>  






              <div class="form-group {{ $errors->has('show_ans') ? ' has-error' : '' }}">
                  <label for="">Enable Show Answer: </label>
                 <input type="checkbox" class="toggle-input" name="show_ans" id="toggle2">
                 <label for="toggle2"></label>
                <br>
              </div>  -->
                
              </div>
              <div class="col-md-6">
                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                  {!! Form::label('address', 'Address') !!}
                  {!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Address', 'rows' => '8']) !!}
                  <small class="text-danger">{{ $errors->first('address') }}</small>
                </div>
                <div class="form-group{{ $errors->has('company_img') ? ' has-error' : '' }}">
                        {!! Form::label('company_img', 'Add Image To Company') !!}
                        {!! Form::file('company_img') !!}
                        <small class="text-danger">{{ $errors->first('company_img') }}</small>
                         <p class="help">Please Choose Only .JPG, .JPEG and .PNG</p>
                      </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="btn-group pull-right">
              {!! Form::reset("Reset", ['class' => 'btn btn-default']) !!}
              {!! Form::submit("Add", ['class' => 'btn btn-wave']) !!}
            </div>
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  <div class="box">
    <div class="box-body table-responsive">
      <table id="search" class="table table-hover table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Company Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Email ID</th>
            <th>Website</th>
            <th>Logo</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @if ($company)
            @php($i = 1)
            @foreach ($company as $comp)
              <tr>
                <td>
                  {{$i}}
                  @php($i++)
                </td>
                <td>{{$comp->name}}</td>
                <td title="{{$comp->address}}">{{str_limit($comp->address, 50)}}</td>
                <td>{{$comp->city}}</td>
                <td>{{$comp->email}}</td>
                <td>{{$comp->company_website}}</td>
                <td><img src="{{asset('/images/company/'.$comp->company_img)}}" width="100px" height="100px" class="img-responsive" alt="image"></td>
                <td>
                  <!-- Edit Button -->
                  <a type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#{{$comp->id}}EditModal"><i class="fa fa-edit"></i> Edit</a>
                  <!-- Delete Button -->
                  <a type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#{{$comp->id}}deleteModal"><i class="fa fa-close"></i> Delete</a>
                  <div id="{{$comp->id}}deleteModal" class="delete-modal modal fade" role="dialog">
                    <!-- Delete Modal -->
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <div class="delete-icon"></div>
                        </div>
                        <div class="modal-body text-center">
                          <h4 class="modal-heading">Are You Sure ?</h4>
                          <p>Do you really want to delete these records? This process cannot be undone.</p>
                        </div>
                        <div class="modal-footer">
                          {!! Form::open(['method' => 'DELETE', 'action' => ['CompanyController@destroy', $comp->id]]) !!}
                            {!! Form::reset("No", ['class' => 'btn btn-gray', 'data-dismiss' => 'modal']) !!}
                            {!! Form::submit("Yes", ['class' => 'btn btn-danger']) !!}
                          {!! Form::close() !!}
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <!-- edit model -->
              <div id="{{$comp->id}}EditModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Edit Company</h4>
                    </div>
                    {!! Form::model($comp, ['method' => 'PATCH', 'action' => ['CompanyController@update', $comp->id], 'files' => true]) !!}
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              {!! Form::label('name', 'Company Name') !!}
                              <span class="required">*</span>
                              {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Company Name', 'required' => 'required']) !!}
                              <small class="text-danger">{{ $errors->first('name') }}</small>
                            </div>
                            <div class="form-group{{ $errors->has('company_website') ? ' has-error' : '' }}">
                              {!! Form::label('company_website', 'Company Website') !!}
                              <span class="required">*</span>
                              {!! Form::text('company_website', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Company Website', 'required' => 'required']) !!}
                              <small class="text-danger">{{ $errors->first('company_website') }}</small>
                            </div>
                            <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                              {!! Form::label('mobile', 'Company Mobile Number') !!}
                              <span class="required">*</span>
                              {!! Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Company Mobile Number', 'required' => 'required']) !!}
                              <small class="text-danger">{{ $errors->first('mobile') }}</small>
                            </div>
                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                              {!! Form::label('city', 'City') !!}
                              {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Please Enter City']) !!}
                              <small class="text-danger">{{ $errors->first('city') }}</small>
                            </div>

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                              {!! Form::label('email', 'Email ID') !!}
                              {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Email ID']) !!}
                              <small class="text-danger">{{ $errors->first('email') }}</small>
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

                            

                             
                       <!--    <label for="">Enable Show Answer: </label>
                           <input {{ $comp->show_ans ==1 ? "checked" : "" }} type="checkbox" class="toggle-input" name="show_ans" id="toggle{{ $comp->id }}">
                           <label for="toggle{{ $comp->id }}"></label>   -->
                          
                        <!--   <label for="">Quiz Price:</label>
                           <input onchange="showprice('{{ $comp->id }}')" {{ $comp->amount !=NULL  ? "checked" : ""}} type="checkbox" class="toggle-input " name="pricechk" id="toggle2{{ $comp->id }}">
                           <label for="toggle2{{ $comp->id }}"></label>
                       
                          <div style="{{ $comp->amount == NULL ? "display: none" : "" }}" id="doabox2{{ $comp->id }}">
                           
                          <label for="doba">Choose Quiz Price: </label>
                          <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                           <input value="{{ $comp->amount }}" name="amount" id="doa" type="text" class="form-control"  placeholder="Please Enter Quiz Price">
                           <small class="text-danger">{{ $errors->first('amount') }}</small>
                          </div>
                        </div>-->
               
                             
                            </div>   

                          <div class="col-md-6">
                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                              {!! Form::label('address', 'Company Address') !!}
                              {!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Company Address']) !!}
                              <small class="text-danger">{{ $errors->first('description') }}</small>
                            </div>

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
                        </div>

                        
                
                      <div class="modal-footer">
                        <div class="btn-group pull-right">
                          {!! Form::submit("Update", ['class' => 'btn btn-wave']) !!}
                        </div>
                      </div>
                    {!! Form::close() !!}
                  </div>
                </div>
              </div>
            @endforeach
          @endif
        </tbody>
      </table>
    </div>
  </div>
@endsection
@section('scripts')
<script type="text/javascript">
  
 
  $(function() {
    $('#fb_check').change(function() {
      $('#fb').val(+ $(this).prop('checked'))
    })
  })

 
                  
                    $(document).ready(function(){
                      $('#pass').css("display","none");
                        $('#ch1').change(function(){
                          $('#pass').css("display","block");
                        });

                        $('#ch2').change(function(){
                          $('#pass').css("display","none");
                        });

                        $('#chimg').css("display","none");
                        $('#chimg1').change(function(){
                          $('#chimg').css("display","block");
                        });

                        $('#chimg2').change(function(){
                          $('#chimg').css("display","none");
                        }); 

                        $('.quizfp').change(function(){

                          if ($('.quizfp').is(':checked')){
                              $('#doabox').show('fast');
                          }else{
                              $('#doabox').hide('fast');
                          }

                         
                        });

                    });
                                

                               
  $('#priceCheck').change(function(){
    alert('hi');
  });

  function showprice(id)
  {
    if ($('#toggle2'+id).is(':checked')){
      $('#doabox2'+id).show('fast');
    }else{

      $('#doabox2'+id).hide('fast');
    }
  }
                                   

  

</script>



@endsection

