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
                <td> <a> {{$results[$key]['filename']}} </a> </td>
                <?php } ?>
                
                <td>
                {{$results[$key]['passed']?'Pass':$results[$key]['passed']===NULL?'Not Declared':'Fail'}}
                </td>

                <?php if($topic->round == 2){ ?>
                <td>
                    <select name="passfail" id="passfail" class="form-control">
                      <option>Select</option>
                      <option value=1>Pass</option>
                      <option value=0>Fail</option>
                    </select>
                </td>
                <?php }else {} ?>
               
              </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>

$(document).ready(function(){
  $('#passfail').on('change', function() {
    var value = this.value;
    alert(dataid);
    // $.ajax({
    //  url: '/postajax',
    //  type: 'POST',
    //  data: { id:deleteid },
    //  success: function(response){
    //     console.log('working');
    //  }
    // });
  });
});

</script>
@endsection


