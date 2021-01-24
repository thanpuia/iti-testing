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

        //The below 2 line is good for text
        if($request["type"]=="excel"){
         $rows = Excel::toArray(new StudentsImport, $request->file('file')); 
        return response()->json(["rows"=>$rows]);

        }else if ($request["type"]=="image"){
            $file = $request->file('file');
            // $path = public_path() . '/uploads/images/store/';
             //$file->move($path, $file->getClientOriginalName());
             //return response()->json(compact('path'));
            $byte = file_get_contents($file);
             $image = base64_encode($byte);
      
     
            //$data = base64_decode($byte);
            // $im = imagecreatefromstring($data);
             return $image;       
        }
        
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
