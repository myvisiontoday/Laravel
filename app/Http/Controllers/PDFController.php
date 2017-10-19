<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use PDF;
use App\employee;

class PDFController extends Controller
{
    //
    public function getPDF(){
        $employees=employee::all();
        $pdf=PDF::loadView('employee', ['employees'=>$employees]);
        return $pdf->download('employee.pdf');
    }
}
