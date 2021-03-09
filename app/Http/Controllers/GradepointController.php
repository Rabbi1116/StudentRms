<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Gradepoint;
use Illuminate\Http\Request;

class GradepointController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    $student = DB::table('subjects')
      ->join('students', 'students.user_id', '=', 'subjects.student_id')
      ->select(DB::raw('name,user_id,student_id'))
      ->groupBy('student_id')
      ->get();

    $subject = DB::table('subjects')
      ->join('topics', 'topics.id', '=', 'subjects.subject_id')
      ->get();

    // dd($subject);
    // die();

    return view('admin/student/grading', ['student' => $student, 'subject' => $subject]);
  }

  public function indexOne()
  {

   return view('admin/student/selectstudentclass');

  }

  public function subject_check(Request $request)

  {

    // dd($request->get('studentId'));

    if ($request->get('studentId')) {

      $studentId = $request->get('studentId');

      $data['subject_id'] = DB::table("subjects")

        ->join('topics', 'topics.id', '=', 'subjects.subject_id')

        ->where('student_id', $studentId)

        ->get();

      if (!empty($data['subject_id'])) :

        return view('admin/student/viewsubjectid', ['subject_id' => $data['subject_id']]);

      else :
        echo '<option>No student id Create</option>';
      endif;
    }
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
  public function store(Request $request)
  {
    // dd($request->marks);
    // die();

    $students_id = $request->student_id;

    $subjects_id = $request->subjeci_id;

    $marks_number = $request->marks;

    $grade = "";
    $point ="";


    for ($i = 0; $i < count($subjects_id); $i++) {
      if ($marks_number[$i] < 33) {

        $grade = "F";
        $point =00;

      } elseif ($marks_number[$i] >= 33 && $marks_number[$i] < 40) {

        $grade = "D";
        $point =1.00;

      } elseif ($marks_number[$i] >= 40 && $marks_number[$i] < 50) {

        $grade = "C";
        $point =2.00;
      } elseif ($marks_number[$i] >= 50 && $marks_number[$i] < 60) {
        $grade = "B";
        $point =3.00;
      } elseif ($marks_number[$i] >= 60 && $marks_number[$i] < 70) {
        $grade = "A-";
        $point =3.50;
      } elseif ($marks_number[$i] >= 70 && $marks_number[$i] < 80) {
        $grade = "A";
        $point =4.00;
      } elseif ($marks_number[$i] >= 80 && $marks_number[$i] <= 100) {

        $grade = "A+";
        $point =5.00;

      }

      $arraydata = [
        'student_id' => $students_id,
        'subject_id' => $subjects_id[$i],
        'marks' => $marks_number[$i],
        'grade' =>  $grade,
        'grade_point'=>$point
      ];
      DB::table('gradepoints')->insert($arraydata);
    }
    return redirect()->back();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Gradepoint  $gradepoint
   * @return \Illuminate\Http\Response
   */

  public function show(Request $req)
  {
    // dd($req->class);


    $studentnameshow = DB::table('gradepoints')
    ->join('students','students.user_id','=','gradepoints.student_id')
    ->where('class',$req->class)
    ->select(DB::raw('name,student_id,subject_id,sum(marks) as number,sum(grade_point) as pointes'))
    ->groupBy('student_id')
    ->get();

    $studentresultshow = DB::table('gradepoints')
    ->join('topics','topics.id','=','gradepoints.subject_id')
    // ->select('gradepoints.*,topics.*,sum(marks) as pointe')
    ->get();

    // dd($studentresultshow);
      
    return view('admin/student/studentresult',['stname'=>$studentnameshow,'result'=>$studentresultshow]);
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Gradepoint  $gradepoint
   * @return \Illuminate\Http\Response
   */
  public function edit(Gradepoint $gradepoint)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Gradepoint  $gradepoint
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Gradepoint $gradepoint)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Gradepoint  $gradepoint
   * @return \Illuminate\Http\Response
   */
  public function destroy(Gradepoint $gradepoint)
  {
    //
  }
}
