@extends('layouts.admin', [
  'page_header' => "Top Students / {$topic->title}",
  'dash' => '',
  'quiz' => '',
  'users' => '',
  'questions' => '',
  'top_re' => '',
  'all_re' => 'active',
  'sett' => ''
])

@section('content')
  <div class="content-block box">
    <div class="box-body table-responsive">
      <table id="topTable" class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Student Name</th>
            <th>Mobile No.</th>            
            <th>Quiz</th>
            <th>Right Questions</th>
            <th>Total Questions</th>
          </tr>
        </thead>
        <tbody>
          @if ($users)
            @foreach ($users as $key => $user)
              <tr>
                <td>
                  {{$key+1}}
                </td>
                <td>{{$user->name}}</td>
                <td>{{$user->mobile}}</td>               
                <td>{{$topic->title}}</td>
                <td>
                  {{$results[$key]['rightQ']}}
                </td>
                <td>
                {{$results[$key]['totalQ']}}
                </td>
               
              </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </div>
  </div>
@endsection
