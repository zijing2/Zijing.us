<?php
use App\Models\Project;
use App\Models\ProjectGroup;

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

Route::get('/', function () {
    //return view('welcome');
	$project_group = ProjectGroup::all()->toArray();
	$data = ['cur'=>"index", 'project_group'=>$project_group];
    return view('index',$data);

});

Route::get('/contact', function () {
	$data = ['cur'=>"contact"];
    return view('contact', $data);
});

Route::get('/labs', function () {
	$project_group = ProjectGroup::all()->toArray();
        $data = ['cur'=>"labs", 'project_group'=>$project_group];
	
    return view('labs',$data);
});

Route::get('/labs/{project_group?}', function ($project_group=null) {
	$project = Project::where('project_group','=',$project_group)->get();
	$group = ProjectGroup::where('name','=',$project_group)->first()->toArray();
        $data = ['cur'=>"labs", 'project'=>$project, 'g'=>$group];
	return view('labs.project_desc',$data);
});

Route::get('/labs/project/{id?}', function ($id=null) {
        $project = Project::find($id)->toArray();
	$exec_res = array();
	if(!empty($project['command'])){
		$command = $project['command'];
        	exec($command, $exec_res, $code);
	}
	$related_project = Project::all()->take(4);
        $data = ['cur'=>"labs", 'project'=>$project, 'exec'=>$exec_res, 'rp'=>$related_project];
        return view('labs.project_detail',$data);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
