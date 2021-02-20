@extends('layouts.admin', [
'page_header' => 'Dashboard',
'dash' => 'active',
'quiz' => '',
'users' => '',
'questions' => '',
'top_re' => '',
'all_re' => '',
'sett' => ''
])

@section('content')
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 ">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h3 class="card-title">Students</h3>
                <div class="card-options">
                    @if(Auth::user()->role === 'A')
                    <a class="btn btn-sm btn-primary" href="{{url('/admin/users')}}">View</a>
                    @endif
                </div>
            </div>
            <div class="card-body ">
                <h5 class="">Total Students</h5>
                <h2 class="text-dark  mt-0 ">{{$user}}</h2>
                <div class="progress progress-sm mt-0 mb-2">
                    <div class="progress-bar bg-primary w-75" role="progressbar"></div>
                </div>
                <div class=""><i class="fa fa-caret-up text-green"></i>10% increases</div>
            </div>
        </div>
    </div>
    <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h3 class="card-title">Questions</h3>

                <div class="card-options">
                    @if(Auth::user()->role === 'A')
                    <a class="btn btn-sm btn-secondary" href="{{url('/admin/questions')}}">View</a>
                    @endif
                </div>
            </div>
            <div class="card-body ">
                <h5 class="">Total Questions</h5>
                <h2 class="text-dark  mt-0 ">{{$question}}</h2>
                <div class="progress progress-sm mt-0 mb-2">
                    <div class="progress-bar bg-secondary w-45" role="progressbar"></div>
                </div>
                <div class=""><i class="fa fa-caret-down text-danger"></i>12% decrease</div>
            </div>
        </div>
    </div>
    <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h3 class="card-title">Quiz</h3>
                <div class="card-options"> <a class="btn btn-sm btn-warning" href="{{url('/admin/topics')}}">View</a>
                </div>
            </div>
            <div class="card-body ">
                <h5 class="">Total Quiz</h5>
                <h2 class="text-dark  mt-0 ">{{$quiz}}</h2>
                <div class="progress progress-sm mt-0 mb-2">
                    <div class="progress-bar bg-warning w-50" role="progressbar"></div>
                </div>
                <div class=""><i class="fa fa-caret-down text-danger"></i>5% decrease</div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 ">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h3 class="card-title">Placements</h3>
                <div class="card-options"> <a class="btn btn-sm btn-success" href="#">View</a>
                </div>
            </div>
            <div class="card-body ">
                <h5 class="">Total Placements</h5>
                <h2 class="text-dark  mt-0  ">5,759</h2>
                <div class="progress progress-sm mt-0 mb-2">
                    <div class="progress-bar bg-success w-25" role="progressbar"></div>
                </div>
                <div class=""><i class="fa fa-caret-up text-success"></i>15% increase</div>
            </div>
        </div>
    </div>
</div>
@if(Auth::user()->role === 'A')
<div class="row">
    <div class="col-12">
        <div class="card rounded">
            <div class="card-header bg-primary text-center br-tr-7 br-tl-7">
                <h3 class="card-title text-white">Latest Companies</h3>
                <div class=" card-options ">
                    <a href=" #" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>

                </div>
            </div>
            <div class="card-body">
                <ul class="row">
                    @if ($user_latest)
                    @foreach ($user_latest as $user)
                    <li class="col-4 col-md-3  p-3">
                        <b class="d-block">{{$user->name}}</b>
                        <a href="" class="small text-gray">{{$user->created_at->diffForHumans()}}</a>
                    </li>
                    @endforeach
                    @endif

                </ul>
            </div>
            <div class="card-footer ">
                <a href="{{url('admin/company')}}">View all companies</a>
            </div>
        </div>
    </div>
</div>
@endif
<div class="row">
    <div class=" col-md-12">
        <div class="card">

            <div class="card-body">
                <div class="chartsh">
                    {!! $chart->container() !!}

                </div>
            </div>
        </div>
    </div>
    <div class=" col-md-12">
        <div class="card">

            <div class="card-body">
                <div class="chartsh">
                    {!! $chart2->container() !!}

                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="row">
                        <div class="col-xl-8 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Annual Revenue Comparission</h3>
                                </div>
                                <div class="card-body">
                                    <div class="chart-wrapper">
                                        <canvas id="sales-status" class="chart-dropshadow h-280"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Task</h3>
                                </div>
                                <div class="card-body">
                                    <div class="activity">
                                        <img src="../assets/images/users/male/24.jpg" alt="" class="img-activity">
                                        <div class="time-activity">
                                            <div class="item-activity">
                                                <p class="mb-0"><b>Adam Berry</b> Add a new projects <b> AngularJS
                                                        Template</b></p>
                                                <small class="text-muted ">30 mins ago</small>
                                            </div>
                                        </div>
                                        <img src="../assets/images/users/female/10.jpg" alt="" class="img-activity">
                                        <div class="time-activity">
                                            <div class="item-activity">
                                                <p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML
                                                        Template</b></p>
                                                <small class="text-muted ">1 days ago</small>
                                            </div>
                                        </div>
                                        <img src="../assets/images/users/male/4.jpg" alt="" class="img-activity">
                                        <div class="time-activity">
                                            <div class="item-activity">
                                                <p class="mb-0"><b>John Payne</b> Add a new projects <b>Free PSD
                                                        Template</b></p>
                                                <small class="text-muted ">3 days ago</small>
                                            </div>
                                        </div>
                                        <img src="../assets/images/users/female/8.jpg" alt="" class="img-activity">
                                        <div class="time-activity mb-0">
                                            <div class="item-activity mb-0">
                                                <p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI
                                                        Template</b></p>
                                                <small class="text-muted ">5 days ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

<!-- <div class="row">
                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Employees Satisfaction</h3>
                                </div>
                                <div class="card-body">
                                    <div class="chats-wrap">
                                        <div class="chat-details p-2">
                                            <h6 class="mb-0">
                                                <span class="font-weight-normal">Good</span>
                                                <span class="float-right p-1">78%</span>
                                            </h6>
                                            <div class="progress progress-sm mt-3">
                                                <div
                                                    class="progress-bar progress-bar-striped progress-bar-animated bg-success w-35">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-details p-2">
                                            <h6 class="mb-0">
                                                <span class="font-weight-normal">Satisfied</span>
                                                <span class="float-right p-1">82%</span>
                                            </h6>
                                            <div class="progress progress-sm mt-3">
                                                <div
                                                    class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-75">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-details p-2">
                                            <h6 class="mb-0">
                                                <span class="font-weight-normal">Excellent</span>
                                                <span class="float-right p-1">89%</span>
                                            </h6>
                                            <div class="progress progress-sm mt-3">
                                                <div
                                                    class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-65">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-details p-2">
                                            <h6 class="mb-0">
                                                <span class="font-weight-normal">Average</span>
                                                <span class="float-right p-1">40%</span>
                                            </h6>
                                            <div class="progress progress-sm mt-3">
                                                <div
                                                    class="progress-bar progress-bar-striped progress-bar-animated bg-warning w-80">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-details p-2">
                                            <h6 class="mb-0">
                                                <span class="font-weight-normal">Unsatisfied</span>
                                                <span class="float-right p-1">20%</span>
                                            </h6>
                                            <div class="progress progress-sm mt-3">
                                                <div
                                                    class="progress-bar progress-bar-striped progress-bar-animated bg-info w-80">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Interviewing Team</div>
                                </div>
                                <div class="card-body">
                                    <div class="ibox teams mb-30 bg-boxshadow">
                                        <div class="ibox-content teams">
                                            <div class="avatar-list avatar-list-stacked">
                                                <span class="avatar brround cover-image cover-image"
                                                    data-image-src="../assets/images/users/female/12.jpg"></span>
                                                <span class="avatar brround cover-image cover-image"
                                                    data-image-src="../assets/images/users/female/21.jpg"></span>
                                                <span class="avatar brround cover-image cover-image"
                                                    data-image-src="../assets/images/users/female/29.jpg"></span>
                                                <span class="avatar brround cover-image cover-image"
                                                    data-image-src="../assets/images/users/female/2.jpg"></span>
                                                <span class="avatar brround cover-image cover-image"
                                                    data-image-src="../assets/images/users/male/34.jpg"></span>
                                                <span class="avatar brround cover-image cover-image">+8</span>
                                            </div>
                                            <div class="teams-board-details mt-3">
                                                <h4 class="font-weight-semibold">About Interviewing Team</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam velit
                                                    quisquam veniam
                                                    excepturi. Contrary to popular belief, Lorem Ipsum is not simply
                                                    random text classical
                                                    Latin </p>
                                            </div>
                                            <span class="font-weight-semibold">Status of current JobSeekers:</span>
                                            <div class="progress-details-teams mt-2 mb-4">
                                                <div class="stat-percent mb-2">58%</div>
                                                <div class="progress progress-sm ">
                                                    <div class="progress-bar bg-primary w-50" role="progressbar"></div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-4">
                                                    <div class="teams-rank text-muted">Companies</div>
                                                    <span>24</span>
                                                </div>
                                                <div class="col-4">
                                                    <div class="teams-rank text-muted">RANKING</div>
                                                    <span>3rd</span>
                                                </div>
                                                <div class="col-4">
                                                    <div class="teams-rank text-muted">Placed Candidates</div>
                                                    <span>36,25,854</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

<!-- <div class="row">
                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Todo List</h3>
                                    <div class="card-options">
                                        <a class="btn btn-sm btn-primary " href="#"><i class="fa fa-plus"></i> Add
                                            Task</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-controls-stacked checklist-task">
                                        <label class="custom-control custom-checkbox mb-3 checklist-desc">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1"
                                                value="option1" checked="">
                                            <span class="custom-control-label">vero eos et accusamus et iusto odio
                                                dignissimos
                                                ducimus</span>
                                            <div class="check-data d-flex mt-1">
                                                <span class="text-muted">Completed 2h ago</span>
                                                <div class="check-icon ml-auto">
                                                    <span class="text-muted" data-toggle="tooltip" data-placement="top"
                                                        data-original-title="Edit"><i
                                                            class="fa fa-pencil-square-o "></i> </span>
                                                    <span class="text-muted" data-toggle="tooltip" data-placement="top"
                                                        data-original-title="Delete"><i
                                                            class="fa fa-trash-o"></i></span>
                                                </div>
                                            </div>
                                        </label>
                                        <label class="custom-control custom-checkbox mb-3 checklist-desc">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2"
                                                value="option2">
                                            <span class="custom-control-label"> et iusto odio dignissimos ducimus</span>
                                            <div class="check-data d-flex mt-1">
                                                <span class="text-muted">Completed 8h ago</span>
                                                <div class="check-icon ml-auto">
                                                    <span class="text-muted" data-toggle="tooltip" data-placement="top"
                                                        data-original-title="Edit"><i
                                                            class="fa fa-pencil-square-o "></i> </span>
                                                    <span class="text-muted" data-toggle="tooltip" data-placement="top"
                                                        data-original-title="Delete"><i
                                                            class="fa fa-trash-o"></i></span>
                                                </div>
                                            </div>
                                        </label>
                                        <label class="custom-control custom-checkbox mb-3 checklist-desc">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox3"
                                                value="option3" checked="">
                                            <span class="custom-control-label"> eos accusamus iusto odio dignissimos
                                            </span>
                                            <div class="check-data d-flex mt-1">
                                                <span class="text-muted">Completed 4h ago</span>
                                                <div class="check-icon ml-auto">
                                                    <span class="text-muted" data-toggle="tooltip" data-placement="top"
                                                        data-original-title="Edit"><i
                                                            class="fa fa-pencil-square-o "></i> </span>
                                                    <span class="text-muted" data-toggle="tooltip" data-placement="top"
                                                        data-original-title="Delete"><i
                                                            class="fa fa-trash-o"></i></span>
                                                </div>
                                            </div>
                                        </label>
                                        <label class="custom-control custom-checkbox checklist-desc">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox4"
                                                value="option4">
                                            <span class="custom-control-label">vet accusamus et iusto odio dignissimos
                                            </span>
                                            <div class="check-data d-flex mt-1">
                                                <span class="text-muted">Completed 5h ago</span>
                                                <div class="check-icon ml-auto">
                                                    <span class="text-muted" data-toggle="tooltip" data-placement="top"
                                                        data-original-title="Edit"><i
                                                            class="fa fa-pencil-square-o "></i> </span>
                                                    <span class="text-muted" data-toggle="tooltip" data-placement="top"
                                                        data-original-title="Delete"><i
                                                            class="fa fa-trash-o"></i></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="item">
                                <div class="card">
                                    <div class="arrow-ribbon bg-info">Full time</div>
                                    <div class="item-card7-img">
                                        <div class="item-card7-imgs">
                                            <a href="jobs.html"></a>
                                            <img src="../assets/images/products/products/h4.jpg" alt="img"
                                                class="cover-image">
                                        </div>
                                        <div class="item-card7-overlaytext">
                                            <a href="jobs.html" class="text-white"> Jobs</a>
                                            <h4 class="font-weight-semibold mb-0">$786</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <a href="jobs.html" class="text-dark">
                                                <h4 class="font-weight-semibold">Customer Care Jobs</h4>
                                            </a>
                                        </div>
                                        <div class="item-card7-text">
                                            <ul class="icon-card mb-0">
                                                <li class=""><a href="#" class="icons"><i
                                                            class="si si-location-pin text-muted mr-1"></i>
                                                        Los Angles</a></li>
                                                <li><a href="#" class="icons"><i
                                                            class="si si-event text-muted mr-1"></i> 5 hours ago</a>
                                                </li>
                                                <li class="mb-0"><a href="#" class="icons"><i
                                                            class="si si-user text-muted mr-1"></i> Sally
                                                        Peake</a></li>
                                                <li class="mb-0"><a href="#" class="icons"><i
                                                            class="si si-phone text-muted mr-1"></i>
                                                        5-67987608</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="item">
                                <div class="card">
                                    <div class="ribbon ribbon-top-left text-danger"><span
                                            class="bg-danger">featured</span></div>
                                    <div class="item-card7-img">
                                        <div class="item-card7-imgs">
                                            <a href="jobs.html"></a>
                                            <img src="../assets/images/products/products/j3.jpg" alt="img"
                                                class="cover-image">
                                        </div>
                                        <div class="item-card7-overlaytext">
                                            <a href="jobs.html" class="text-white"> Jobs</a>
                                            <h4 class="font-weight-semibold mb-0">$854</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <a href="jobs.html" class="text-dark">
                                                <h4 class="font-weight-semibold">Delivery Boys Jobs</h4>
                                            </a>
                                        </div>
                                        <div class="item-card7-text">
                                            <ul class="icon-card mb-0">
                                                <li class=""><a href="#" class="icons"><i
                                                            class="si si-location-pin text-muted mr-1"></i>
                                                        Los Angles</a></li>
                                                <li><a href="#" class="icons"><i
                                                            class="si si-event text-muted mr-1"></i> 5 hours ago</a>
                                                </li>
                                                <li class="mb-0"><a href="#" class="icons"><i
                                                            class="si si-user text-muted mr-1"></i> Sally
                                                        Peake</a></li>
                                                <li class="mb-0"><a href="#" class="icons"><i
                                                            class="si si-phone text-muted mr-1"></i>
                                                        5-67987608</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
@endsection
@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

{!! $chart->script() !!}
{!! $chart2->script() !!}
@endsection