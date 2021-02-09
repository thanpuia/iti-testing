<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Student;
use App\Imports\StudentsImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class StudentController extends Controller
{
   
    public function index()
    {
        return view('student.upload');
    }

   
    public function create()
    {
       
    }

 
    public function store(Request $request)
    {

        //The below 2 line is good for text
        if($request["type"]=="excel"){
         $rows = Excel::toArray(new StudentsImport, $request->file('file')); 
        return response()->json(["rows"=>$rows]);

        }else if ($request["type"]=="image"){
            $file = $request->file('file');
           $byte = file_get_contents($file);
             $image = base64_encode($byte);
      
             return $image;       

        
            //    $file = $request->file('file');
            //  $data = file_get_contents($file);
            // $array = array(); 
            // foreach(str_split($data) as $char){ 
            //     array_push($array, ord($char)); 
            // }
            // var_dump(implode(' ', $array));
            // error_log(implode(' ', $array));
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

    public function apitest(){

         //testing 
        $client = new Client();
        //  $response=$client->request ('GET','https://api.chucknorris.io/jokes/random', [     //correct
        //     'form_params' => [
        //       'api_key' => 'b53366c91585c976e6173e69f6916b',   // incorrect for safety  
        //      //  'api_key' => 'b53366c91585c976e6173e69f6916b2d', //correct api
        //         'number' => $mPhones,
        //         'message' => $message,
        //         'template_id' => '1007860893566335888'
        //     ]
        // ]);
        //$response=$client->request ('GET','https://api.chucknorris.io/jokes/random');
        $response = Http::get('https://www.balldontlie.io/api/v1/players');
        $value = json_decode($response);
        $value = $value->data;
       // dd($jsonArr);
       // $value =$jsonArr->first_name;
        return view('api',compact('value'));
    }

 
    
}
