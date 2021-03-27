<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        return view('inscription');
    }

    public function index()
    {
        request()->validate([
            'First_name' => ['required', 'string', 'max:255'],
            'Last_name' => ['required', 'string', 'max:255'],
            'CIN' => ['required', 'string', 'max:10'],
            'CNE' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'datetimepicker1' => ['required'],
            'telephone' => ['required', 'digits:10'],
            'photo' => ['required'],
        ]);
        $student = new \App\student;
        $student->First_name=request('First_name');
        $student->Last_name=request('Last_name');
        $student->CIN=request('CIN');
        $student->CNE=request('CNE');
        $student->exampleFormControlSelect2=request('exampleFormControlSelect2');
        $student->email=request('email');
        $student->datetimepicker1=request('datetimepicker1');
        $student->telephone=request('telephone');
        $student->exampleFormControlSelect1=request('exampleFormControlSelect1');
        $student->exampleFormControlSelect3=request('exampleFormControlSelect3');
        $student->photo=request('photo');
        $student->save();
        
        
        $date = request('datetimepicker1');
        $phone = request('telephone');
        $level = request('exampleFormControlSelect3');
        $photo = request('photo');
        return view('inscription',[
            'date'=>$date,
            'phone'=>$phone,
            'level'=>$level,
            'photo'=>$photo,
        ]);
        return view('showInfo');
    }
   
}
