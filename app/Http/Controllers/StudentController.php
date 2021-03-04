<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\subject;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth as FacadesAuth;

class StudentController extends Controller
{

   
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.student.registration');
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
        // dd($request);
        $userInfo = new User;
        $userInfo->email = $request->email;
        $userInfo->name = $request->name;
        $userInfo->type = "student";
        $userInfo->password= Hash::make($request->password);
        $userInfo->save();
        $insertID= $userInfo->id;

        $dbstudent = new Student;
        $dbstudent->name = $request->name;
        $dbstudent->user_id = $insertID;
        $dbstudent->class = $request->class;
        $dbstudent->phone = $request->phone;
        $dbstudent->contact = $request->contact;
        $dbstudent->gender = $request->gender;
        $dbstudent->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $studentList= student::all();
        return view('admin/student/studentlist',['student'=>$studentList]);

        return redirect()->back();

    }
    
    public function Profileedit()
    {

        $userID=Auth()->user()->id;
        $profile=Student::where('user_id',$userID)->first();
        return view('admin/student/profileedit',['profile'=>$profile]);

    }

    public function studentProfile()
    {

      $userProfileId=Auth::user()->id;
      $userAuth=Student::where('user_id',$userProfileId)->first();
      return view('admin/student/profile',['userAuth'=>$userAuth]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $user)
    {
        

        $profileUpdate= student::find($user->id);
        $profileUpdate->name = $user->name;
        $profileUpdate->fatherName = $user->fatherName;
        $profileUpdate->motherName = $user->motherName;
        $profileUpdate->class = $user->class;
        $profileUpdate->phone = $user->phone;
        $profileUpdate->contact = $user->contact;
        $profileUpdate->gender = $user->gender;

        if ($user->image):
            $fileName = time() . '_' . $user->file('image')->getClientOriginalName();
            $filePath = $user->file('image')->storeAs('uploads', $fileName, 'public');
            $profileUpdate->image = '/storage/' . $filePath;
        else:
            $profileUpdate->image = '';
        endif;
        $profileUpdate->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

    function check(Request $request)
    {
        if ($request->get('email')) {
            $email = $request->get('email');
            $data = DB::table("users")
                ->where('email', $email)
                ->count();
               // dd($data);
            if ($data > 0) {
                echo 'not_unique';
            } else {
                echo 'unique';
            }
        }
    }
    function phnchk(Request $request)
    {
      
        if ($request->get('phone')) {
          
            $phone = $request->get('phone');
            $data = DB::table("students")
                ->where('phone', $phone)
                ->count();
             //  dd($data);
            if ($data > 0) {
                echo 'not_unique';
            } else {
                echo 'unique';
            }
        }
    }

    public function status($id)
    {
        
       return  Student::find($id);
        // if($status->status=false){
        //    $status->status=true;
        //    $status->save();
        // }else{
        //     $status->status=false;
        //    $status->save();
        // };
        return redirect()->back();
    }

}