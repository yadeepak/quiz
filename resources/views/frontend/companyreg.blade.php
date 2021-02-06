@extends('layouts.app')

@section('top_head_files')
<link href="{{asset('assets/plugins/fileuploads/css/dropify.css')}}" rel="stylesheet" />


@endsection

@section('top_bar')

@include('topbar')

@endsection


@section('content')


<div class="container my-5">
    <div class="card">
        <div class="card-body">
            <h1 class="my-5 py-5 text-center">Company Registration</h1>
            @if($errors->any())
            <h4 class="bg-danger text-white p-3">{{$errors->first()}}</h4>
            @endif
            @if (Session::has('added'))
            <div class="alert alert-success sessionmodal">
                {{session('added')}}
            </div>
            @endif
            <form action="{{route('compstore')}}" method="post" enctype="multipart/form-data">
                {{@csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Company Name:</label>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Company Website:</label>
                            <div class="form-group{{ $errors->has('company_website') ? ' has-error' : '' }}">
                                {!! Form::text('company_website', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                <small class="text-danger">{{ $errors->first('company_website') }}</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Company Mobile
                                Number:</label>
                            <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                {!! Form::text('mobile', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                <small class="text-danger">{{ $errors->first('mobile') }}</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Email ID:</label>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                            </div>
                        </div>

                        <div class="form-group password">
                            <label class="form-control-label">Password:</label>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                {!! Form::password( 'password', ['class' => 'form-control', 'required' => 'required']) !!}

                                {!! Form::hidden('company_type', null, ['class' => 'form-control']) !!}
                                <small class="text-danger">{{ $errors->first('password') }}</small>
                            </div>
                        </div>


                    </div>


                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Address:</label>
                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                {!! Form::textarea('address', null, ['class' => 'form-control', 'rows' => '7']) !!}
                                <small class="text-danger">{{ $errors->first('address') }}</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">City:</label>
                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                {!! Form::text('city', null, ['class' => 'form-control ']) !!}
                                <small class="text-danger">{{ $errors->first('city') }}</small>
                            </div>
                        </div>
                        <div class="form-group file">
                            <label for="recipient-name" class="form-control-label">Add Image To Company:</label>
                            <div class="form-group{{ $errors->has('company_img') ? ' has-error' : '' }}">
                                {!! Form::file('company_img',['class' => 'dropify','data-height'=>'100']) !!}
                                <small class="text-danger">{{ $errors->first('company_img') }}</small>
                            </div>
                            <small>Please Choose Only .JPG, .JPEG and .PNG</small>
                        </div>
                    </div>

                    {!! Form::submit("Register", ['class' => 'btn btn-primary']) !!}

                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="{{asset('assets/js/formelements.js')}}"></script>

<script src="{{asset('assets/plugins/fileuploads/js/dropify.js')}}"></script>

@endsection