<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $request->validate(
            [
                'name' => 'required',
                'surname' => 'required',
                'age' => 'required|numeric|min:18',
                'address' => 'required|max:15'
            ],
            [
                'name.required' => 'The name is required',
                'surname.required' => 'The surname is required',
                'age.required' => 'The age is required',

                'address.required' => 'The name is required',
            ]
        );
 
        Student::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'age' => $request->age,
            'address' => $request->address,
        ]);
        
        return redirect('student')->with('flash_message', 'Student Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('student', $student);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        if(!$student){
            abort(404);
        }
        return view('students.edit')->with('student', $student);
        
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
        $student = Student::find($id);
        $data = $request->all();
        $student->update($data);
        return redirect('student')->with('flash_message', 'student Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'student Deleted');


    }
    public function search(Request $request){
        $search_text = $request->search_name;
        $students = Student::where('name', 'LIKE', '%' . $search_text . '%')->get();
        return view('students.index')->with('students', $students);
        
    }
}
