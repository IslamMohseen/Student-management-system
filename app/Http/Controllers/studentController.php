<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\course;
use App\Models\branch;
class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = course::all();
        $branchs = branch::all();
        return view('front/student_register',compact(['courses','branchs']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $student = new student;
        $student->firstname = $request->fname;
        $student->lastname = $request->lname;
        $student->degree = $request->degree;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->course_id  = $request->course_id;
        $student->branch_id = $request->branch_id;
        $student->image = $request->file('image')->getClientOriginalName();
        $student->save();
        $request->image->move(public_path('postimg'),$student->image);
        return redirect('studentdetails');
    }
    
    public function show()
    {
        $students = student::select('*')->paginate(4);
        return view('front/studentdetails',compact('students'));
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = student::find($id);
        return view('front/studentedit',compact('students'));
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
        $student = student::find($id);
        $student->firstname = $request->fname;
        $student->lastname = $request->lname;
        $student->degree = $request->degree;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->save();
        return redirect('studentdetails');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $student = student::findOrFail($id);
    //     $student->delete();
    //     return redirect('studentdetails');
    // }

    public function destroy($id)
    {
        $student =student::where('id',$id)->first();

        if ($student != null) {
            $student->delete();
            return redirect('studentdetails');
        }
    }

    public function courses(Request $request){
        $id = $request->id;
        $data['courses'] = Course::where('branch_id',$id)->get();
        echo json_encode($data);
    }
}
