<?php

use App\User;
use App\Company;
use App\Topic;
use App\Answer;
use App\copyrighttext;
use App\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use App\Charts\UserChart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', 'home');


Route::resource('results/', 'ResultController');

Auth::routes();

/*google login route*/
// Route::get('login/o_auth/facebook  ', 'Auth\LoginController@redirectToProvider');
// Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');



/*Social Login*/
Route::get('login/{service}', 'Auth\LoginController@redirectToProvider')->name('sociallogin');
Route::get('login/{service}/callback', 'Auth\LoginController@handleProviderCallback');


/*facebook login route*/

// Route::get('login/google', 'Auth\LoginController@redirectToProvider');
// Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/faqs',function(){
  return view('faq');
})->name('faq.get');

Route::get('/home', function(){
  if(Auth::user()){
  $role = Auth::user()->role;
  if($role === 'C'|| $role === 'A'){
  return redirect('/admin');
  }
}
  return view('home');
});

Route::get('/redirect', function () {
    $query = http_build_query([
        'client_id' => '1',
        'redirect_uri' => 'http://example.com/callback',
        'response_type' => 'token', 
        'scope' => '',
    ]);

    return redirect('http://your-app.com/oauth/authorize?'.$query);
});

Route::post('compstore','CompanyController@store')->name('compstore');
Route::post('internstore','InternCompanyController@store')->name('internstore');
Route::group(['middleware'=> 'isadmin'], function(){

  Route::delete('delete/sheet/quiz/{id}','TopicController@deleteperquizsheet')->name('del.per.quiz.sheet');

  Route::get('/admin', function(){
    $currentYear = date("Y");
    $months = array_fill(1, 12, 0);
    $topicWiseStudent=[];
    $role = Auth::user()->role;
    $question =0;
    if($role === 'C'){
    $quizs = Topic::where('created_by',Auth::id())->get();
    $user_latest = '';
    }else{
    $userGrouped= DB::select("select count(id) as count,DATE_FORMAT(created_at,'%c') as month  from users where 
    DATE_FORMAT(created_at,'%Y')='$currentYear' AND role='U' GROUP BY   DATE_FORMAT(created_at,'%m') ORDER BY DATE_FORMAT(created_at,'%m') ASC" );
    $question = Question::count();
    $quizs = Topic::get();
    $user_latest = User::where('role',  'C')->orderBy('created_at', 'desc')->get();
    }
    $quiz = $quizs->count();
    $linkIds = [];
    foreach($quizs as $key=>$quize){
      $name = Str::substr($quize['title'], 0,8).'...';
      $topicWiseStudent[$name]=0;
       $quize->load(['generatedLink.student' => function ($q) use (&$topicWiseStudent,&$name) {
        $topicWiseStudent[$name]= $q->count();
        }]);
        if($role === 'C'){
      $question +=$quize->question->count();
        $id= $quize['id'];
      $linkId = DB::table("generatelinks")->where('topic_id', $id)->get()->pluck('id')->toArray();
      $values = implode(',',$linkId);
      array_push($linkIds,$values);
        }
        }
        if($role === 'C'){
          $linkIdsStr=implode(',',$linkIds);
          $userGrouped= DB::select("select count(id) as count,DATE_FORMAT(created_at,'%c') as month  from users where 
          DATE_FORMAT(created_at,'%Y')='$currentYear' AND role='U' AND linkId IN('$linkIdsStr')  GROUP BY   DATE_FORMAT(created_at,'%m') ORDER BY DATE_FORMAT(created_at,'%m') ASC" );
        }
        if($userGrouped){
           array_filter($userGrouped,function($value)use(&$months){
             $months[$value->month] = $value->count;
          });
        }
      $user = array_sum(array_values($topicWiseStudent));
    $options = [
      'responsive' => true,
      'legend' => ['display' => true],
      'tooltips' => ['enabled'=>true],
      'scales' => [
          'yAxes'=> [[
                      'display'=>true,
                      'ticks'=> ['beginAtZero'=> true],
                      'gridLines'=> ['display'=> false],
                    ]],
          'xAxes'=> [[
                      'categoryPercentage'=> 0.8,
                      'barPercentage' => 1,
                      'ticks' => ['beginAtZero' => true],
                      'gridLines' => ['display' => false],
                    ]],
      ],
    ];
    $monthNames = array(1 => 'Jan.', 2 => 'Feb.', 3 => 'Mar.', 4 => 'Apr.', 5 => 'May', 6 => 'Jun.', 7 => 'Jul.', 8 => 'Aug.', 9 => 'Sep.', 10 => 'Oct.', 11 => 'Nov.', 12 => 'Dec.');
    $chart = new UserChart;
    $lb= $chart->labels(array_values($monthNames));
    $ds = $chart->dataset('Students count', 'line', array_values($months));
    $ds->backgroundColor('#1650e2');
    $chart->title('No. of Student appeared monthly in '.$currentYear,20, '#666',  true);
    $ds->color('#1650e2');
    $chart->options($options);

    $chart2 = new UserChart;
     $chart2->labels(array_keys($topicWiseStudent));
    $ds2 = $chart2->dataset('Students count', 'bar', array_values($topicWiseStudent));
    $ds2->backgroundColor('#1650e2');
     $chart2->title('No. of Student appeared for quiz ',20, '#666',  true);
    $ds2->color('#1650e2');
    $chart2->options($options);
    return view('admin.dashboard', compact('user', 'question', 'quiz', 'user_latest','chart','chart2'));

  });
  

  Route::delete('reset/response/{topicid}/{userid}','AllReportController@delete');

  Route::resource('/admin/all_reports', 'AllReportController');
  Route::resource('/admin/top_report', 'TopReportController');
  Route::resource('/admin/topics', 'TopicController');
  Route::resource('/admin/glink', 'GlinkController');
  Route::resource('/admin/questions', 'QuestionsController');
  Route::post('/admin/questions/import_questions', 'QuestionsController@importExcelToDB')->name('import_questions');
  Route::resource('/admin/answers', 'AnswersController');
  Route::resource('/admin/settings', 'SettingController');
  Route::resource('/admin/company', 'CompanyController');
  Route::resource('/admin/interncompany', 'InternCompanyController');


  Route::post('/admin/users/destroy', 'DestroyAllController@AllUsersDestroy');
  Route::post('/admin/answers/destroy', 'DestroyAllController@AllAnswersDestroy');

});




Route::resource('/admin/users', 'UsersController');
Route::get('/admin/profile', function(){
  if (Auth::check()) {
    return view('admin.users.profile');
  } else {
    return redirect('/');
  }
});
Route::get('/admin/my_reports', 'MyReportsController@index')->name('my_report');
Route::get('/admin/my_reports/{my_reports}', 'MyReportsController@show')->name('my_report_show');

Route::get('/admin/downloadtxt/{filename}', 'AllReportController@downloadtxt')->name('downloadtxt');
Route::post('/admin/ajaxchange', 'AllReportController@ajaxchangevalue')->name('ajaxchange');





Route::get('start_quiz/{id}', function($id){
  $topic = Topic::findOrFail($id);
  $answers = Answer::where('topic_id','=',$topic->topic_id)->first();
  return view('main_quiz', compact('topic','answers'));
})->name('start_quiz');

 Route::get('mcq-quiz/{token}','FrntendQuizController@index')->name('mcq_home');
 Route::post('mcq-quiz/home','FrntendQuizController@registerSubmit')->name('register');
 Route::post('mcq-proceed', 'FrntendQuizController@proceed')->name('quizstart');
 Route::post('mcq-quiz/submit', 'FrntendQuizController@submitTest')->name('submitTest');



Route::resource('start_quiz/{id}/quiz', 'MainQuizController');

Route::get('start_quiz/{id}/finish', function($id){
  $auth = Auth::user();
  $topic = Topic::findOrFail($id);
  $questions = Question::where('topic_id', $id)->get();
  $count_questions = $questions->count();
  $answers = Answer::where('user_id',$auth->id)
              ->where('topic_id',$id)->get(); 

  if($count_questions != $answers->count()){
    foreach($questions as $que){ 
      $a = false;   
      foreach($answers as $ans){ 
        if($que->id == $ans->question_id){ 
          $a = true;
        }
      }
      if($a == false){  
        Answer::create([
          'topic_id' => $id,
          'user_id' => $auth->id,
          'question_id' => $que->id,
          'user_answer' => 0,
          'answer' => $que->answer,
        ]);
      }
    }
  }

  $ans= Answer::all();
  $q= Question::all();
  
  return view('finish', compact('ans','q','topic', 'answers', 'count_questions'));
});

Route::get('/internship/reg','InternCompanyController@internreg')->name('intershipreg');
Route::get('/company/reg','InternCompanyController@companyreg')->name('companyreg');

Route::get('/admin/pages','PagesController@index')->name('pages.index');

Route::get('/admin/pages/add','PagesController@add')->name('pages.add');

Route::post('/admin/pages/add','PagesController@store')->name('pages.store');

Route::get('pages/{slug}','PagesController@show')->name('page.show');


Route::get('/admin/pages/edit/{id}','PagesController@edit')->name('pages.edit');

Route::put('/admin/pages/edit/{id}','PagesController@update')->name('pages.update');

Route::delete('/delete/pages/{id}','PagesController@destroy')->name('pages.delete'); 




Route::get('admin/moresettings/faq/','FAQController@index')->name('faq.index');
Route::get('admin/moresettings/faq/add','FAQController@create')->name('faq.add');
Route::post('/admin/moresettings/faq/insert','FAQController@store')->name('faq.store');
Route::get('/admin/moresettings/faq/edit/{id}','FAQController@edit')->name('faq.edit');
Route::put('/admin/moresettings/faq/edit/{id}','FAQController@update')->name('faq.update');
Route::delete('/faq/delete/{id}','FAQController@destroy')->name('faq.delete');




Route::get('admin/moresettings/copyright','CopyrighttextController@index')->name('copyright.index');

Route::put('admin/moresettings/copyright/{id}','CopyrighttextController@update')->name('copyright.update');



Route::get('admin/moresettings/socialicons/','SocialController@index')->name('socialicons.index');
Route::post('/admin/moresettings/socialicons/insert','SocialController@store')->name('social.store');
 Route::put('/admin/moresettings/socialicons/active/{id}','SocialController@active')->name('social.active');
 Route::put('/admin/moresettings/socialicons/deactive/{id}','SocialController@deactive')->name('social.deactive');
 Route::delete('/admin/moresettings/socialicons/delete/{id}','SocialController@destroy')->name('social.delete');
//env.
 Route::get('/admin/mail-settings','Configcontroller@getset')->name('mail.getset');
 Route::post('admin/mail-settings', 'Configcontroller@changeMailEnvKeys')->name('mail.update');

   Route::get('/admin/custom-style-settings', 'CustomStyleController@addStyle')->name('customstyle');
    Route::post('/admin/custom-style-settings/addcss','CustomStyleController@storeCSS')->name('css.store');
    Route::post('/admin/custom-style-settings/addjs','CustomStyleController@storeJS')->name('js.store');
//payment getway
 Route::get('/admin/mail','ApiController@setApiView')->name('api.setApiView');
  Route::post('/admin/mail','ApiController@changeEnvKeys')->name('api.update');

  Route::get('admin/sociallogin/','ApiController@facebook')->name('set.facebook');

  Route::post('admin/facebook','ApiController@updateFacebookKey')->name('key.facebook');

  Route::post('admin/google','ApiController@updateGoogleKey')->name('key.google');

  Route::post('admin/gitlab','ApiController@updategitlabKey')->name('key.gitlab');

  
  Route::delete('admin/ans/{id}','Anscontroller@destroy')->name('ans.del');

  Route::get('/admin/payment', 'PaymentController@index')->name('admin.payment');
// route for processing payment







   Route::post('payment/paypal_post', 'PaypalController@paypal_post')->name('paypal_post');
  // Handle status
  Route::get('payment/paypal_success', 'PaypalController@paypal_success')->name('paypal_success');
  Route::get('payment/paypal_cancel', 'PaypalController@paypal_cancel')->name('paypal_cancel');





  Route::get('/foo', function () {
    $exitCode = Artisan::call('delete:files');

    //
});