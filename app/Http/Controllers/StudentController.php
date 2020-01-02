<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;    //model name
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentLists=Student::get();
        return view('student-lists')->with('studentList',$studentLists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student-admissionForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>$request->password,
            'status'=>1
        ]);
        
        /*
            ^#Model::app>Student.php 

            # model bhitra class ma fillable field define garne
                protected $fillable=['name','email','phone','status','contact','username','password']; 
            #controller bhitra::
                use App\controllerName;
                lekhnu parxa namespace bhanda tala
        */

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=Student::find($id);
        return view('student-update')->with('sinfo',$student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
