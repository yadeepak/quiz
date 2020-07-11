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
<div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example2" class="hover table-bordered border-top-0 border-bottom-0">
                                          
        <thead>
          <tr>
            <th>#</th>
            <th>Student Name</th>
            <th>Mobile No.</th>            
            <th>Quiz</th>
            <?php if($topic->round == 1){ ?><th>Right Questions</th> <?php }else {} ?>
            <th>Total Questions</th>
            <?php if($topic->round == 1){ ?><th>Percentage</th><?php }else { ?> <th>File Download</th> <?php } ?>
            <th>Result</th>
            <?php if($topic->round == 2){ ?><th>Action</th> <?php }else {} ?>
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
                
                <?php if($topic->round == 1){ ?>
                <td>
                  {{$results[$key]['rightQ']}}
                </td>
                <?php }else {} ?>
                
                <td>
                {{$results[$key]['totalQ']}}
                </td>
                
                <?php if($topic->round == 1){ ?>
                <td>
                {{$results[$key]['percentage']??0}}%
                </td>
                <?php }else { ?>
                <td> <a href="{{ route('downloadtxt', $results[$key]['filename']) }}"> {{$results[$key]['filename']}} </a> </td>
                <?php } ?>
                
                <td>
                
                <?php if($results[$key]['passed'] === 1){
                  echo 'Pass';
                }else if($results[$key]['passed'] === 0){
                  echo 'Fail';
                }else{
                  echo 'Not Declared';
                }
                ?>

              

                {{--$results[$key]['passed']?'Pass':$results[$key]['passed']===NULL?'Not Declared':'Fail'--}}
                </td>

                <?php if($topic->round == 2){ ?>
                <td>
                    <select name="passfail" id="passfail" class="form-control">
                      <option>Select</option>
                      <option value=1 data-id="{{$results[$key]['id']}}">Pass</option>
                      <option value=0 data-id="{{$results[$key]['id']}}">Fail</option>
                    </select>
                    {{csrf_field()}}
                </td>
                <?php }else {} ?>
               
              </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </div>
  </div>
                            </div>
                        </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
  $(document).ready(function(){
    $(document).on("change","#passfail",function(){
    var token = $("input[name=_token]").val();
    var value = this.value;
    var id = $(this).find(':selected').attr('data-id');
    $.ajax({
     url: '{{route('ajaxchange')}}',
     type: 'POST',
     data: { id:id,value:value,_token:token },
     success: function(response){
        console.log(response);
        location.reload();
     }
    });
  });
});


</script>
@endsection


