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
]);



@section('content')

<!-- Create Modal -->
<div class="modal fade" id="addCompany" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="example-Modal3">Add Company</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
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
           
            <div id="pass" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              {!! Form::label('password', 'Password') !!}
              <span class="required">*</span>
              <input class="form-control" type="password" value="" placeholder="Enter new password" name="password">
              <small class="text-danger">{{ $errors->first('password') }}</small>
            </div>
          </div>


          <div class="col-md-6">

            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
              {!! Form::label('address', 'Company Address') !!}
              {!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Company Address']) !!}
              <small class="text-danger">{{ $errors->first('description') }}</small>
            </div>

            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
              {!! Form::label('email', 'Email ID') !!}
              {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Email ID']) !!}
              <small class="text-danger">{{ $errors->first('email') }}</small>
            </div>
            <div id="chimg" class="form-group{{ $errors->has('company_img') ? ' has-error' : '' }} file">
              {!! Form::label('company_img', 'Update Logo of Company') !!}
              {!! Form::file('company_img',['class'=>"dropify" ,'data-height'=>"100"]) !!}
              <small class="text-danger">{{ $errors->first('company_img') }}</small>
              <p class="help">Please Choose Only .JPG, .JPEG and .PNG</p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <button type="button" class="btn btn-info  mt-2" data-toggle="modal" data-target="#addCompany">
          <i class="fa fa-plus"></i>
          Add Company
        </button>
      </div>

    <div class="card-body">
      <div class="table-responsive">
        <table id="example2" class="hover table-bordered border-top-0 border-bottom-0">
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
              <td >{{str_limit($comp->address, 50)}}</td>
              <td>{{$comp->city}}</td>
              <td>{{$comp->email}}</td>
              <td>{{$comp->company_website}}</td>
              <td><img src="{{asset('/images/company/'.$comp->company_img)}}" width="100px" height="100px" class="img-responsive" alt="image"></td>
              <td>
                <!-- Edit Button -->
                <a type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#EditModal{{$comp->id}}"><i class="fa fa-edit"></i> Edit</a>
                <!-- Delete Button -->
                <a type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteModal{{$comp->id}}"><i class="fa fa-close"></i> Delete</a>
                <div id="deleteModal{{$comp->id}}" class="delete-modal modal fade" role="dialog">
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
            <div class="modal fade" id="EditModal{{$comp->id}}" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="example-Modal3">Update Company</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
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



                        <label for="">Change Password: </label>

                        <input type="radio" value="1" name="changepass" id="ch1">&nbsp;Yes
                        <input type="radio" value="0" name="changepass" checked id="ch2">&nbsp;No
                        <br>
                        <div class="pass" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          {!! Form::label('password', 'Password') !!}
                          <span class="required">*</span>

                          <input class="form-control" type="password" value="" placeholder="Enter new password" name="password">
                          <small class="text-danger">{{ $errors->first('password') }}</small>
                        </div>
                      </div>


                      <div class="col-md-6">

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                          {!! Form::label('address', 'Company Address') !!}
                          {!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Company Address']) !!}
                          <small class="text-danger">{{ $errors->first('description') }}</small>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                          {!! Form::label('email', 'Email ID') !!}
                          {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Email ID']) !!}
                          <small class="text-danger">{{ $errors->first('email') }}</small>
                        </div>

                        <label for="">Change Image: </label>

                        <input type="radio" value="1" name="changeimg" id="chimg1">&nbsp;Yes
                        <input type="radio" value="0" name="changeimg" checked id="chimg2">&nbsp;No
                        <br>
                        <div class="chimg" class="form-group{{ $errors->has('company_img') ? ' has-error' : '' }} file">
                          {!! Form::label('company_img', 'Update Image To Company') !!}
                          {!! Form::file('company_img',['class'=>"dropify" ,'data-height'=>"100"]) !!}
                          <small class="text-danger">{{ $errors->first('company_img') }}</small>
                          <p class="help">Please Choose Only .JPG, .JPEG and .PNG</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            @endforeach
            @endif
          </tbody>
          <tfoot>
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
          </tfoot>
        </table>

      </div>
    </div>
  </div>
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
                      $('.pass').css("display","none");
                        $('#ch1').change(function(){
                          $(this).siblings('div.pass').css("display","block");
                        });

                        $('#ch2').change(function(){
                          $(this).siblings('div.pass').css("display","none");
                        });

                        $('.chimg').hide();
                        $('#chimg1').change(function(){
                          $(this).siblings('div.chimg').css("display","block");
                        });

                        $('#chimg2').change(function(){
                          $(this).siblings('div.chimg').css("display","none");
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

