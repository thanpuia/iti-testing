<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Student;
use App\Imports\StudentsImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class StudentController extends Controller
{
   
    public function index()
    {
        return view('student.upload');
    }

   
    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {

        // $rows = Excel::toArray(new StudentsImport, $request->file('file')); 
        // return response()->json(["rows"=>$rows]);

        $file = $request->file('file');
       // $path = public_path() . '/uploads/images/store/';
        //$file->move($path, $file->getClientOriginalName());
        //return response()->json(compact('path'));
       $byte = file_get_contents($file,true);
        return $byte;

    }

 
    public function show(Student $student)
    {
        //
    }
 
    public function edit(Student $student)
    {
        //
    }

    
    public function update(Request $request, Student $student)
    {
        //
    }

  
    public function destroy(Student $student)
    {
        //
    }

 
    
}
