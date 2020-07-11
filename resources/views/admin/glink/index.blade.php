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
<!-- Create Modal -->
<div class="modal fade" id="addQuiz" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="example-Modal3">Add Link</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['method' => 'POST', 'action' => 'GlinkController@store']) !!}
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group{{ $errors->has('topic_id') ? ' has-error' : '' }}">
                {!! Form::label('topic_id', 'Select Quiz') !!}
                <span class="required">*</span>
                {!! Form::select('topic_id', $topics, null, ['class' => 'form-control']) !!}
                <small class="text-danger">{{ $errors->first('topic_id') }}</small>
              </div>
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
        <button type="button" class="btn btn-info  mt-2" data-toggle="modal" data-target="#addQuiz">
          <i class="fa fa-plus"></i>
          Generate Link
        </button>
      </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="example2" class="hover table-bordered border-top-0 border-bottom-0">
          <thead>
            <tr>
              <th>#</th>
              <th>Quiz Title</th>
              <th>Link</th>
              <th>End Time </th>
              <th>Expire</th>
              <th>Action</th>
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
                <a type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteModal{{$glink->id}}"><i class="fa fa-close"></i> Delete</a>
                <div id="deleteModal{{$glink->id}}" class="delete-modal modal fade" role="dialog">
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
            @endforeach
            @endif
          </tbody>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Quiz Title</th>
              <th>Link</th>
              <th>End Time </th>
              <th>Expire</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>

      </div>
    </div>
  </div>
    </div>
</div>



@endsection