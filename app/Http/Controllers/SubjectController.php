<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Student;
use App\Models\Topic;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $userID = Auth()->user()->id;
        // dd($userID);
        $subjectID = $req->subject;
        // dd($subjectID);
        for ($i = 0; $i < count($subjectID); $i++) {
            $data = [
                'student_id' => $userID,
                'subject_id' => $subjectID[$i]
            ];
            DB::table('subjects')->insert($data);
        }
        return redirect()->back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
        $summary = DB::table('subjects')
        ->join('topics', 'topics.id', '=', 'subjects.subject_id')
        ->join('students', 'subjects.student_id', '=', 'students.user_id')
        ->select(DB::raw('name, title,student_id'))
        ->groupBy('student_id')
        ->get();

        $showsubject=DB::table('subjects')
        ->join('topics','subjects.subject_id','=','topics.id')
       
        ->get();
       
        //    dd($showsubject);
        //     die();

        return view('admin/student/selectedsubject', ['test' => $summary,'subjects'=>$showsubject]);
       
       
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
