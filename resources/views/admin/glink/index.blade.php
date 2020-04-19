@extends('layouts.admin', [
  'page_header' => 'Generate Link',
  'dash' => '',
  'quiz' => '',
  'users' => '',
  'questions' => '',
  'top_re' => '',
  'all_re' => '',
  'sett' => ''
])

@section('content')
  <div class="margin-bottom">
    <button type="button" class="btn btn-wave" data-toggle="modal" data-target="#createModal">Generate Link</button>
  </div>
  <!-- Create Modal -->
  <div id="createModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Quiz</h4>
        </div>
        {!! Form::open(['method' => 'POST', 'action' => 'GlinkController@store']) !!}
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group{{ $errors->has('topic_id') ? ' has-error' : '' }}">
                  {!! Form::label('topic_id', 'Select Quiz') !!}
                  <span class="required">*</span>
                  {!! Form::select('topic_id', $topics, null, ['class' => 'form-control']) !!}
                  <small class="text-danger">{{ $errors->first('topic_id') }}</small>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                  {!! Form::label('endtime', 'Minute') !!}
                  <span class="required">*</span>
                  {!! Form::text('endtime', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Minute', 'required' => 'required']) !!}
                  <small class="text-danger">{{ $errors->first('endtime') }}</small>
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
            <th>Quiz Title</th>
            <th>Link</th>
            <th>End Time</th>
            <th>Expire</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @if ($glinks)
            @php($i = 1)
            @foreach ($glinks as $glink)
              <tr>
                <td>
                  {{$i}}
                  @php($i++)
                </td>
                <td>{{$glink->title}}</td>
                <td>{{url('mcq-quiz')}}/{{$glink->token}}</td>
                <td>{{$glink->endtime}} mins</td>
                <td>{{$glink->expired==1?'Expired':'Not Expired'}} </td>
                <td>
                  <!-- Edit Button -->
                  <!-- <a type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#{{$glink->id}}EditModal"><i class="fa fa-edit"></i> Edit</a> -->
                  <!-- Delete Button -->
                  <a type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#{{$glink->id}}deleteModal"><i class="fa fa-close"></i> Delete</a>
                  <div id="{{$glink->id}}deleteModal" class="delete-modal modal fade" role="dialog">
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
                          {!! Form::open(['method' => 'DELETE', 'action' => ['GlinkController@destroy', $glink->id]]) !!}
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
              <div id="{{$glink->id}}EditModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Edit Quiz</h4>
                    </div>
                    {!! Form::model($glink, ['method' => 'PATCH', 'action' => ['GlinkController@update', $glink->id]]) !!}
                      <div class="modal-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group{{ $errors->has('topic_id') ? ' has-error' : '' }}">
                            {!! Form::label('topic_id', 'Select Quiz') !!}
                            <span class="required">*</span>
                            {!! Form::select('topic_id', $topics, null, ['class' => 'form-control']) !!}
                            <small class="text-danger">{{ $errors->first('topic_id') }}</small>
                          </div>
                        </div>
                      </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                              {!! Form::label('endtime', 'Minute') !!}
                              <span class="required">*</span>
                              {!! Form::text('endtime', null, ['class' => 'form-control', 'placeholder' => 'Please Enter minute', 'required' => 'required']) !!}
                              <small class="text-danger">{{ $errors->first('endtime') }}</small>
                            </div>
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
                              

  

</script>



@endsection

