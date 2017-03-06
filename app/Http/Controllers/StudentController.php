<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
	protected $student;
	public function __construct(Student $student){
		$this->student=$student;

	}

    public function index() {
    	return view('Add_Students');
    }
    public function view() {
    	return view('CRUD_ASSIGN', [
    			'students'=>$this->student->all()
    		]);
    }
    public function edit($id) {
    	return view('Update', [
    			'student'=>$this->student->find($id)
    		]);
    }
    public function update(Request $request) {
    	$update=$this->student->find($request->id);
    	$update->First_Name=$request->First_Name;
    	$update->Middle_Name=$request->Middle_Name;
    	$update->Last_Name=$request->Last_Name;
    	$update->Course=$request->Course;
    	$update->Contact=$request->Contact;
    	$update->Guardian_Name=$request->Guardian_Name;
    	if($update->save()){
    		return view('Success');
    	}

    	return '!ok';
    }

    public function delete($id) {
    	$delete=$this->student->find($id);
    	$delete->delete();
    	return view('Success');
    }

    public function add(Request $request) {

    	$this->student->fill($request->all());
    	if($this->student->save()){
    		return view('Success');
    	}
    	
    	return 'unsuccessful';

    }
}
