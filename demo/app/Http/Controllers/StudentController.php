<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  
    public function index()
    {
        $student = Student::latest()->paginate(5);
      return view ('students.index',compact('student'))
      ->with('i',(request()->input('page',1)-1)*5);
    }

    
    public function create()
    {
        return view('students.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'studentname'=>'required',
            'course'=>'required',
            'fee'=>'required',
        ]);
        student::create($request->all());
        return redirect()->route('students.index')
        ->with('success', 'students created successfully');  
    }

    
    public function show(Student $student)
    {
       
        return view('students.show',compact('students'));
    }

    
    public function edit(Student $student)
    {
        
        return view('students.show',compact('students'));
    }

  
    public function update(Request $request, Student $student)
    {
        $request=validated([

        ]);

        $student->update($request->all);
        
        return redirect('')->route('students.index', 'student Updated!')
        ->with('success', 'students created successfully');   
    }

   
    public function destroy(Student $student)
    {
        $student->delete();
        
        return redirect('')->route('students.index', 'student Updated!')
        ->with('success', 'students deleted successfully');  
    }
}