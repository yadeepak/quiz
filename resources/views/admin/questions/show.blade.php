@extends('layouts.admin', [
'page_header' => "Questions / {$topic->title} ",
'dash' => '',
'quiz' => '',
'users' => '',
'questions' => 'active',
'top_re' => '',
'all_re' => '',
'sett' => ''
])

@section('content')
<!-- Create Modal -->
<div class="modal fade" id="addQuestion" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="example-Modal3">Add Questions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
      {!! Form::open(['method' => 'POST', 'action' => 'QuestionsController@store', 'files' => true]) !!}

                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                            {!! Form::hidden('topic_id', $topic->id) !!}
                    <div class="form-group{{ $errors->has('question') ? ' has-error' : '' }}">
                      {!! Form::label('question', 'Question') !!}
                      <span class="required">*</span>
                      {!! Form::textarea('question', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Question', 'rows'=>'8', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('question') }}</small>
                    </div>
                    @if($topic->round == '1')

                    <div class="form-group{{ $errors->has('answer') ? ' has-error' : '' }}">
                      {!! Form::label('answer', 'Correct Answer') !!}
                      <span class="required">*</span>
                      {!! Form::select('answer', array('A'=>'A', 'B'=>'B', 'C'=>'C', 'D'=>'D'),null, ['class' => 'form-control select2', 'required' => 'required', 'placeholder'=>'']) !!}
                      <small class="text-danger">{{ $errors->first('answer') }}</small>
                    </div>
                    @endif
                            </div>
                            @if($topic->round == '1')
                  <div class="col-md-6">
                    <div class="form-group{{ $errors->has('a') ? ' has-error' : '' }}">
                      {!! Form::label('a', 'A - Option') !!}
                      <span class="required">*</span>
                      {!! Form::text('a', null, ['class' => 'form-control', 'placeholder' => 'Please Enter A Option', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('a') }}</small>
                    </div>
                    <div class="form-group{{ $errors->has('b') ? ' has-error' : '' }}">
                      {!! Form::label('b', 'B - Option') !!}
                      <span class="required">*</span>
                      {!! Form::text('b', null, ['class' => 'form-control', 'placeholder' => 'Please Enter B Option', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('b') }}</small>
                    </div>
                    <div class="form-group{{ $errors->has('c') ? ' has-error' : '' }}">
                      {!! Form::label('c', 'C - Option') !!}
                      <span class="required">*</span>
                      {!! Form::text('c', null, ['class' => 'form-control', 'placeholder' => 'Please Enter C Option', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('c') }}</small>
                    </div>
                    <div class="form-group{{ $errors->has('d') ? ' has-error' : '' }}">
                      {!! Form::label('d', 'D - Option') !!}
                      <span class="required">*</span>
                      {!! Form::text('d', null, ['class' => 'form-control', 'placeholder' => 'Please Enter D Option', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('d') }}</small>
                    </div>
                  </div>
                  @endif
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                            <div class="form-group{{ $errors->has('code_snippet') ? ' has-error' : '' }}">
                      {!! Form::label('code_snippet', 'Code Snippets') !!}
                      {!! Form::textarea('code_snippet', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Code Snippets', 'rows' => '5']) !!}
                      <small class="text-danger">{{ $errors->first('code_snippet') }}</small>
                    </div>

                            </div>
                            <div class="col-6">
                               
                                <div class="form-group{{ $errors->has('question_img') ? ' has-error' : '' }}">
                            {!! Form::label('question_img', 'Add Image In Question') !!}
                            {!! Form::file('question_img',['class'=>"dropify",'data-height'=>"145"]) !!}
                            <small class="text-danger">{{ $errors->first('question_img') }}</small>
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

<!-- Import Questions Modal -->
<!-- <div id="importQuestions" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Import Questions (Excel File With Exact Header of DataBase Field)</h4>
      </div>
      {!! Form::open(['method' => 'POST', 'action' => 'QuestionsController@importExcelToDB', 'files' => true]) !!}
      <div class="modal-body">
        {!! Form::hidden('topic_id', $topic->id) !!}
        <div class="form-group{{ $errors->has('question_file') ? ' has-error' : '' }}">
          {!! Form::label('question_file', 'Import Question Via Excel File', ['class' => 'col-sm-3 control-label']) !!}
          <span class="required">*</span>
          <div class="col-sm-9">
            {!! Form::file('question_file', ['required' => 'required']) !!}
            <p class="help-block">Only Excel File (.CSV and .XLS)</p>
            <small class="text-danger">{{ $errors->first('question_file') }}</small>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="btn-group pull-right">
          {!! Form::reset("Reset", ['class' => 'btn btn-default']) !!}
          {!! Form::submit("Import", ['class' => 'btn btn-wave']) !!}
        </div>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div> -->

<div class="row">
  <div class="col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <button type="button" class="btn btn-info  mt-2" data-toggle="modal" data-target="#addQuestion">
          <i class="fa fa-plus"></i>
          Add Question
        </button>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="example2" class="hover table-bordered border-top-0 border-bottom-0">
            <thead>
              <tr>
                <th>#</th>
                <th>Questions</th>
                @if($topic->round== '1')
                <th>A - Option</th>
                <th>B - Option</th>
                <th>C - Option</th>
                <th>D - Option</th>
                <th>Correct Answer</th>
                @endif
                <th>Code Snippet</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            @if ($questions)
        @foreach ($questions as $key => $question)
        @php
        $answer = strtolower($question->answer);
        @endphp
        <tr>
          <td>
            {{$key+1}}
          </td>
          <td>{{$question->question}}</td>
          @if($topic->round== '1')
          <td>{{$question->a}}</td>
          <td>{{$question->b}}</td>
          <td>{{$question->c}}</td>
          <td>{{$question->d}}</td>
          <td>{{$question->$answer}}</td>
          @endif
          <td>
            <pre>
            {{{$question->code_snippet}}}
            </pre>
          </td>

          <td>
            <!-- Edit Button -->
            <a type="button" class="btn btn-info btn-sm mt-2" tabindex="1" data-toggle="modal" data-target="#EditModal{{$question->id}}"><i class="fa fa-edit"></i> Edit</a>
            <!-- Delete Button -->
            <a type="button" class="btn btn-red btn-sm mt-2" tabindex="1" data-toggle="modal" data-target="#deleteModal{{$question->id}}"><i class="fa fa-close"></i> Delete</a>
            <div id="deleteModal{{$question->id}}" class="delete-modal modal fade" role="dialog">
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
                    {!! Form::open(['method' => 'DELETE', 'action' => ['QuestionsController@destroy', $question->id]]) !!}
                    {!! Form::reset("No", ['class' => 'btn btn-gray', 'data-dismiss' => 'modal']) !!}
                    {!! Form::submit("Yes", ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
            <!-- Start modal -->
    <div class="modal fade" id="EditModal{{$question->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="example-Modal3">Edit Question</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              {!! Form::model($question, ['method' => 'PATCH', 'action' => ['QuestionsController@update', $question->id], 'files' => true]) !!}
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                            {!! Form::hidden('topic_id', $topic->id) !!}
                    <div class="form-group{{ $errors->has('question') ? ' has-error' : '' }}">
                      {!! Form::label('question', 'Question') !!}
                      <span class="required">*</span>
                      {!! Form::textarea('question', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Question', 'rows'=>'8', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('question') }}</small>
                    </div>
                    @if($topic->round == '1')

                    <div class="form-group{{ $errors->has('answer') ? ' has-error' : '' }}">
                      {!! Form::label('answer', 'Correct Answer') !!}
                      <span class="required">*</span>
                      {!! Form::select('answer', array('A'=>'A', 'B'=>'B', 'C'=>'C', 'D'=>'D'),null, ['class' => 'form-control select2', 'required' => 'required', 'placeholder'=>'']) !!}
                      <small class="text-danger">{{ $errors->first('answer') }}</small>
                    </div>
                    @endif
                            </div>
                            @if($topic->round == '1')
                  <div class="col-md-6">
                    <div class="form-group{{ $errors->has('a') ? ' has-error' : '' }}">
                      {!! Form::label('a', 'A - Option') !!}
                      <span class="required">*</span>
                      {!! Form::text('a', null, ['class' => 'form-control', 'placeholder' => 'Please Enter A Option', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('a') }}</small>
                    </div>
                    <div class="form-group{{ $errors->has('b') ? ' has-error' : '' }}">
                      {!! Form::label('b', 'B - Option') !!}
                      <span class="required">*</span>
                      {!! Form::text('b', null, ['class' => 'form-control', 'placeholder' => 'Please Enter B Option', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('b') }}</small>
                    </div>
                    <div class="form-group{{ $errors->has('c') ? ' has-error' : '' }}">
                      {!! Form::label('c', 'C - Option') !!}
                      <span class="required">*</span>
                      {!! Form::text('c', null, ['class' => 'form-control', 'placeholder' => 'Please Enter C Option', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('c') }}</small>
                    </div>
                    <div class="form-group{{ $errors->has('d') ? ' has-error' : '' }}">
                      {!! Form::label('d', 'D - Option') !!}
                      <span class="required">*</span>
                      {!! Form::text('d', null, ['class' => 'form-control', 'placeholder' => 'Please Enter D Option', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('d') }}</small>
                    </div>
                  </div>
                  @endif
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                            <div class="form-group{{ $errors->has('code_snippet') ? ' has-error' : '' }}">
                      {!! Form::label('code_snippet', 'Code Snippets') !!}
                      {!! Form::textarea('code_snippet', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Code Snippets', 'rows' => '5']) !!}
                      <small class="text-danger">{{ $errors->first('code_snippet') }}</small>
                    </div>

                            </div>
                            <div class="col-6">
                               
                                <div class="form-group{{ $errors->has('question_img') ? ' has-error' : '' }}">
                            {!! Form::label('question_img', 'Add Image In Question') !!}
                            {!! Form::file('question_img',['class'=>"dropify",'data-height'=>"145"]) !!}
                            <small class="text-danger">{{ $errors->first('question_img') }}</small>
                            <p class="help">Please Choose Only .JPG, .JPEG and .PNG</p>
                          </div>
                                @if($question->question_img)
                                 <img src="{{asset('images/questions/').'/'.$question->question_img}}" class="img-responsive " />
                                @endif
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
                <th>Questions</th>
                <th>A-Option</th>
                <th>B-Option</th>
                <th>C-Option</th>
                <th>D-Option</th>
                <th>Created Answer </th>
                <th>Code Snippet</th>
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