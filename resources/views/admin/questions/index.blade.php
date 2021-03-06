@extends('layouts.admin', [
  'page_header' => 'Questions By Topic Wise',
  'dash' => '',
  'quiz' => '',
  'users' => '',
  'questions' => 'active',
  'top_re' => '',
  'all_re' => '',
  'sett' => ''
])

@section('content')
<div class="row">
@if ($topics)
      @foreach ($topics as $key => $topic)
                        <div class="col-xl-4 col-lg-6 ">
                            <div class="card">
                                <div class="card-status bg-blue br-tr-7 br-tl-7"></div>
                                <div class="card-header d-block">
                                    <h3 class="card-title">{{$topic->title}}</h3>
                                    <small >
              {{str_limit($topic->description, 120)}}
            </small>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group border-0">
                                        <li class="list-group-item">
                                            Per Question Mark
                                            <span class="badgetext badge badge-default badge-pill">{{$topic->per_q_mark}}</span>
                                        </li>
                                        <li class="list-group-item">
                                            Total Marks
                                            <span class=" badgetext badge badge-default badge-pill">@php
                        $qu_count = 0;
                    @endphp
                    @foreach($questions as $question)
                      @if($question->topic_id == $topic->id)
                        @php 
                          $qu_count++;
                        @endphp
                      @endif
                    @endforeach
                    {{$topic->per_q_mark*$qu_count}}</span>
                                        </li>
                                        <li class="list-group-item">
                                            Total Questions
                                            <span class=" badgetext badge badge-default badge-pill"> {{$qu_count}}</span>
                                        </li>
                                        <li class="list-group-item">
                                            Total Time
                                            <span class=" badgetext badge badge-default badge-pill">{{$topic->timer}}
                                                Minutes</span>
                                        </li>
                                        <li class="list-group-item">
                                            Round
                                            <span class=" badgetext badge badge-default badge-pill">{{$topic->round==1?'Aptitude Test':'Program Test'}}</span>
                                        </li>

                                    </ul>
                                    <a href="{{route('questions.show', $topic->id)}}" class="btn btn-info mt-3"> Add Questions</a>

                                </div>
                            </div>
                        </div>
                        @endforeach
    @endif
                    </div>

        

@endsection
