<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
    
        $data = Student::get();
        
          

        return view('home', compact('data'));
   } 

//    public function AddStudent(){
    
//     $data = Student::get();
        
          
 
//     return view("Add-Student",  compact('data'));


//     }

    public function saveStudent(Request $request){

        $request->validate([

            'name' => 'required|max:15',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:students',
            'image' => 'required|image|max:2048',
        ]);
 

     
$name = $request->name;
$phone= $request->phone;
$address = $request->address;
$email = $request->email;
$imageName = time().'.'.$request->image->extension();

$request->image->move(public_path('images'), $imageName);

 $stu = new Student();
$stu->name =  $name;
$stu->phone = $phone;
$stu->address = $address;
$stu->email = $email;
$stu->image = $imageName;
 
$stu->save();



return redirect()->back()->with('success', 'New Student Added !');
// return redirect('/student-list')->with('success', 'New Student Added !');
    
} 



public function editStudent($id){

    $data = Student::where('id', '=', $id)->first();
    return view('edit-student', compact('data'));
}




public function updateStudent(Request $request){

    $request->validate([

     
        'name' => 'required|max:15',
        'phone' => 'required',
        'address' => 'required', 
        'image' => 'image|max:2048',

    ]);


 $id = $request->id;
$name = $request->name;
$phone= $request->phone;
$address = $request->address;

 
Student::where('id', '=', $id)->update([ 
    'name'=>$name,
    'phone'=>$phone,
   'address'=>$address,
     
    
   ]);

   if($request->image !=''){


    $imageName = time().'.'.$request->image->extension();

    $request->image->move(public_path('images'), $imageName);
    

 
    Student::where('id', '=', $id)->update([ 
        
        
        'image'=>$imageName
        
       ]);

   }
 


return redirect()->back()->with('success', 'Updated Succesfully !');

 

} 





public function DeleteStudent($id){

 Student::where('id', '=', $id)->delete();
 return redirect()->back()->with('success', 'Student Deleted!');


}


public function View($id){
    
    $profile = Student::where('id', '=', $id)->first();

    return view('view', compact('profile'));
} 

}



 