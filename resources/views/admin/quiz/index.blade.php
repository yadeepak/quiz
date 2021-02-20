@extends('layouts.admin', [
'page_header' => 'Quiz',
'dash' => '',
'quiz' => 'active',
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
        <h5 class="modal-title" id="example-Modal3">Add Quiz</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['method' => 'POST', 'action' => 'TopicController@store']) !!}
      <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                {!! Form::label('title', 'Quiz Title',['class'=>'form-control-label']) !!}
                <span class="required">*</span>
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Quiz Title', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('title') }}</small>
              </div>
              <div class="form-group{{ $errors->has('per_q_mark') ? ' has-error' : '' }}">
                {!! Form::label('per_q_mark', 'Per Question Mark') !!}
                <span class="required">*</span>
                {!! Form::number('per_q_mark', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Per Question Mark', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('per_q_mark') }}</small>
              </div>
              <div class="form-group{{ $errors->has('timer') ? ' has-error' : '' }}">
                {!! Form::label('timer', 'Quiz Time (in minutes)') !!}
                {!! Form::number('timer', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Quiz Total Time (In Minutes)']) !!}
                <small class="text-danger">{{ $errors->first('timer') }}</small>
              </div>

              <div class="form-group{{ $errors->has('round') ? ' has-error' : '' }}">
                {!! Form::label('round', 'Select Round') !!}
                {!! Form::select('round', array('1'=>'Aptitude Test', '2'=>'Program Test'),1, ['class' => 'form-control','placeholder'=>'']) !!}
              </div>

            </div>
            <div class="col-md-6">
              <div class="form-group{{ $errors->has('minpercentage') ? ' has-error' : '' }}">
                {!! Form::label('minpercentage', 'Minimum Passing Percentage ') !!}
                {!! Form::number('minpercentage', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Min. Passing Percentage']) !!}
                <small class="text-danger">{{ $errors->first('minpercentage') }}</small>
            </div>

            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
              {!! Form::label('description', 'topics covered in this quiz') !!}
              {!! Form::textarea('description', null, ['class' => 'form-control border-gray', 'placeholder' => 'javascript , html , mathematic, etc.', 'rows' => '8']) !!}
              <small class="text-danger">{{ $errors->first('description') }}</small>
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
          Add Quiz
        </button>
      </div>
      <!-- <div class="card-header ">
        <div class="btn-group my-1">
          <button class="btn btn-info" type="button">Print</button>
          <button class="btn btn-info" type="button">Excel</button>
          <button class="btn btn-info" type="button">Csv</button>
data-target
        </div>

      </div> -->
      <div class="card-body">
        <div class="table-responsive">
          <table id="example2" class="hover table-bordered border-top-0 border-bottom-0">
            <thead>
              <tr>
                <th>#</th>
                <th>Quiz Title</th>
                <th>Topics Covered</th>
                <th>Per Question Mark</th>
                <th>Time</th>
                <th>Minimum Percentage</th>
                <th>Created By </th>
                <th>Round</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @if ($topics)
              @php($i = 1)
              @foreach ($topics as $topic)
              <tr>
                <td>
                  {{$i}}
                  @php($i++)
                </td>
                <td>{{$topic->title}}</td>
                <td title="{{$topic->description}}">{{str_limit($topic->description, 50)}}</td>
                <td>{{$topic->per_q_mark}}</td>
                <td>{{$topic->timer}} mins</td>
                <td>{{$topic->minpercentage}} %</td>
                <td>{{$topic->creator}}</td>
                <td>{{$topic->round==1?'Aptitude Test':'Program Test'}}</td>
                <td>
                  <!-- Edit Button -->
                  <a type="button" class="btn btn-info btn-sm mt-2" tabindex="1" data-toggle="modal" data-target="#exampleModal{{$topic->id}}"><i class="fa fa-edit"></i> Edit</a>
                  <!-- Delete Button -->
                  <a type="button" class="btn btn-red btn-sm mt-2" tabindex="1" data-toggle="modal" data-target="#deleteModal{{$topic->id}}"><i class="fa fa-close"></i> Delete</a>
                  <div id="deleteModal{{$topic->id}}" class="delete-modal modal fade" role="dialog">
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
                          {!! Form::open(['method' => 'DELETE', 'action' => ['TopicController@destroy', $topic->id]]) !!}
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
              <div class="modal fade" id="exampleModal{{$topic->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    {!! Form::model($topic, ['method' => 'PATCH', 'action' => ['TopicController@update', $topic->id]]) !!}
                    <div class="modal-header">
                      <h5 class="modal-title" id="example-Modal3">Edit Quiz</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            {!! Form::label('title', 'Quiz Title',['class'=>'form-control-label']) !!}
                            <span class="required">*</span>
                            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Quiz Title', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                          </div>
                          <div class="form-group{{ $errors->has('per_q_mark') ? ' has-error' : '' }}">
                            {!! Form::label('per_q_mark', 'Per Question Mark',['class'=>'form-control-label']) !!}
                            <span class="required">*</span>
                            {!! Form::number('per_q_mark', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Per Question Mark', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('per_q_mark') }}</small>
                          </div>
                          <div class="form-group{{ $errors->has('timer') ? ' has-error' : '' }}">
                            {!! Form::label('timer', 'Quiz Time (in minutes)',['class'=>'form-control-label']) !!}
                            {!! Form::number('timer', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Quiz Total Time (In Minutes)']) !!}
                            <small class="text-danger">{{ $errors->first('timer') }}</small>
                          </div>

                          <div class="form-group{{ $errors->has('round') ? ' has-error' : '' }}">
                            {!! Form::label('round', 'Select Round',['class'=>'form-control-label']) !!}
                            {!! Form::select('round', array('1'=>'Aptitude Test', '2'=>'Program Test'),null, ['class' => 'form-control','placeholder'=>'']) !!}
                          </div>
                        </div>

                        <div class="col-md-6">

                          <div class="form-group{{ $errors->has('minpercentage') ? ' has-error' : '' }}">
                            {!! Form::label('minpercentage', 'Minimum Passing Percentage ',['class'=>'form-control-label']) !!}
                            {!! Form::number('minpercentage', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Min. Passing Percentage']) !!}
                            <small class="text-danger">{{ $errors->first('minpercentage') }}</small>
                          </div>


                          <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            {!! Form::label('description', 'topics covered in this quiz',['class'=>'form-control-label']) !!}
                            {!! Form::textarea('description', null, ['class' => 'form-control border-gray', 'placeholder' => 'javascript , html , mathematic, etc.' ,'rows' => '10']) !!}
                            <small class="text-danger">{{ $errors->first('description') }}</small>
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
                <th>Quiz Title</th>
                <th>Topics Covered</th>
                <th>Per Question Mark</th>
                <th>Time</th>
                <th>Minimum Percentage</th>
                <th>Created By </th>
                <th>Round</th>
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
      $('#fb').val(+$(this).prop('checked'))
    })
  })



  $(document).ready(function() {

    $('.quizfp').change(function() {

      if ($('.quizfp').is(':checked')) {
        $('#doabox').show('fast');
      } else {
        $('#doabox').hide('fast');
      }


    });

  });



  $('#priceCheck').change(function() {
    alert('hi');
  });

  function showprice(id) {
    if ($('#toggle2' + id).is(':checked')) {
      $('#doabox2' + id).show('fast');
    } else {

      $('#doabox2' + id).hide('fast');
    }
  }
</script>



@endsection