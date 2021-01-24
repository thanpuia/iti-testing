<?php

namespace App\Imports;

use App\Student;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\FromCollection;
 use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements ToModel, WithHeadingRow
{

    public function model(array $row)
    {
        return new Student([
            'name'  => $row['name'],
            'others' => $row['others'],
               
            ]);
    }

    // public function collection()
    // {   
    //     return Student::all();
    // }
   
}