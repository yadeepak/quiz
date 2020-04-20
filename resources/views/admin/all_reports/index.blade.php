@extends('layouts.admin', [
  'page_header' => 'Students Report By Topic Wise',
  'dash' => '',
  'quiz' => '',
  'users' => '',
  'questions' => '',
  'top_re' => '',
  'all_re' => 'active',
  'sett' => ''
])

@section('content')
  <div class="row">
    @if ($topics)
      @foreach ($topics as $key => $topic)
        <div class="col-md-4">
          <div class="quiz-card">
            <h3 class="quiz-name">{{$topic->title}}</h3>
            <p title="{{$topic->description}}">
              {{str_limit($topic->description, 120)}}
            </p>
            <div class="row">
              <div class="col-xs-6 pad-0">
                <ul class="topic-detail">
                  <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                  <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                  <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                  <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
                  <li>Created By <i class="fa fa-long-arrow-right"></i></li>
                  <li>Total students <i class="fa fa-long-arrow-right"></i></li>
                  <li>Total students Passed <i class="fa fa-long-arrow-right"></i></li>
                  <li>Round <i class="fa fa-long-arrow-right"></i></li>
                </ul>
              </div>
              <div class="col-xs-6">
                <ul class="topic-detail right">
                  <li>{{$topic->per_q_mark}}</li>
                  <li>
                    @php
                        $qu_count = 0;
                    @endphp
                    @foreach($questions as $question)
                      @if($question->topic_id == $topic->id)
                        @php 
                          $qu_count++;
                        @endphp
                      @endif
                    @endforeach
                    {{$topic->per_q_mark*$qu_count}}
                  </li>
                  <li>
                    {{$qu_count}}
                  </li>
                  <li>
                    {{$topic->timer}} minutes
                  </li>
                  <li>
                    {{$topic->creator}}
                  </li>
                  <li>
                    {{$students[$key]??0}}
                  </li>
                  <li>
                    {{$passedStudents[$key]??0}}
                  </li>
                  <li>
                    {{$topic->round}}
                  </li>
                </ul>
              </div>
            </div>
            @if(Auth::user()->role === 'A')
            <a href="{{route('all_reports.show', $topic->id)}}" class="btn btn-wave">Show Report</a>
        @endif
          </div>
        </div>
      @endforeach
    @endif
  </div>
@endsection
