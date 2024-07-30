<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\SubjectGrade;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['students'] = Student::all();
        return view('students.index', $data);

        // return Student::all();
        // return Student::where('province', 'Arkansas')->get();

        // return Student::where('province', 'Arizona')
        //  ->Where('lname', 'Anderson')
        //  ->get();
        
        // return Student::where('province', 'Arizona')
        //  ->orWhere('province', 'Vermont')
        //  ->orWhere('fname', 'Amiya')
        //  ->get();

        // return Student::where('province', 'like', '%t%' )->get();

        // return Student::orderBy('fname')->get();
        
        // return Student::orderBy('fname', 'desc')->get();

        // return Student::limit(7)->get();
        
        // return Student::whereIn('Id', [1,3,5,7,9,11,13,15,17,19,21,23,25,27,29])->get();

        // return Student::where('province', 'Vermont')->first();
        
        // return Student::with('grade')->get();

        // return student::with(['grade' => function($query)
        // {
        //     return $query->where('grade', '>=', 90);
        // }])->get();

        // return Student::whereHas('grade', function($query)
        // {
        //     return $query->where('grade', '>=', 90);
        // })->with('grade')->get();


    }

    public function create()
    {
        // $student = new Student();
        // $student-> fname            = $request['fname'];
        // $student-> lname            = $request['lname'];
        // $student-> email            = $request['email'];
        // $student-> phone            = $request['phone'];
        // $student-> address          = $request['address'];
        // $student-> city             = $request['city'];
        // $student-> province         = $request['province'];
        // $student-> zip              = $request['zip'];
        // $student-> birthday         = $request['birthday'];
        // $student->save();

        return view('students.create');
    }    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student-> fname            = $request['fname'];
        $student-> lname            = $request['lname'];
        $student-> email            = $request['email'];
        $student-> phone            = $request['phone'];
        $student-> address          = $request['address'];
        $student-> city             = $request['city'];
        $student-> province         = $request['province'];
        $student-> zip              = $request['zip'];
        $student-> birthday         = $request['birthday'];
        $student->save();

        return redirect()->to('student');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // return Student::find($id);

        //$student = Student::find($id);
        //return $student->fname . ' ' .  $student->lname;

        // $student = Student::find($id);
        // return $student->fullname;

        // $data['student'] = Student::find($id);
        // return view('student.edit', $data);

        return student::with(['grades' => function($query)
        {
            return $query->where('grade', '>=', 90);
        }])->get();
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['student'] = Student::find($id);
        return view('students.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $student-> fname            = $request['fname'];
        $student-> lname            = $request['lname'];
        $student-> email            = $request['email'];
        $student-> phone            = $request['phone'];
        $student-> address          = $request['address'];
        $student-> city             = $request['city'];
        $student-> province         = $request['province'];
        $student-> zip              = $request['zip'];
        $student-> birthday         = $request['birthday'];
        $student->save();

        //return redirect()->back;
        return redirect()->to('student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->to('student');
    }
}
