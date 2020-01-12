<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests\StudentRequest;
use App\Student;
class StudentController extends Controller
{
    public function create()
    {
    	return view('create');
    }

    public function StoreData(StudentRequest $req)
    {
        $user = new Student;
        $user->first_name = $req->firstname;
        $user->last_name = $req->lastname;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->skill = $req->data;
        $user->save();

        $notification = array(
        'message' => 'Data inserted successfully!',
        'alert-type' => 'success'
       );

        return redirect('/')->with($notification);
    }

    public function index()
    {
       $students = Student::paginate(5);
       return view('welcome',compact('students'));
    
    }

    public function EditData($id)
    {
       $students = Student::find($id);
       return view('edit',compact('students'));
    }

    public function UpdateData(StudentRequest $req,$id)
    {
        $students = Student::find($id);
        $students->first_name = $req->firstname;
        $students->last_name = $req->lastname;
        $students->email = $req->email;
        $students->phone = $req->phone;
        $students->skill = $req->data;
        $students->save();

         $notification = array(
            'message' => 'Data updated successfully!',
            'alert-type' => 'success'
       );
         return redirect('/')->with($notification);
    }


    public function DeleteData($id)
    {
       $student_delete = DB::table('students')->where('id',$id)->delete();
       
         $notification = array(
            'message' => 'Data Deleted successfully!',
            'alert-type' => 'success'
       );
         return redirect('/')->with($notification);
    }

    public function ShowData($id)
    {
        $students = Student::find($id);
        return view('show',compact('students'));
    }
}
