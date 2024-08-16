<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Spec;
use Illuminate\Http\Request;

class UserController extends Controller
{



    public function getdocs(){
        $docs = User::where('role','doc')->take(3)->get();
        return view('pre-doc.home',compact('docs'));
    }


    #USER

    #USER DOCTORS SEARCH
    public function search(request $request){
        $search = $request->search;
        $doctors = User::where('role', 'doc')->where('name', 'LIKE', "%{$search}%")->get();
        $specs = Spec::all();
        
        return view('pre-doc.userdashb.doctors', compact('doctors','specs'));

    }
    
    #USER DOCTORS FILTER
    public function filterdoc($id){
    $doctors = User::where('specialization_id', $id)->get();
    $specs = Spec::all();

    return view('pre-doc.userdashb.doctors', compact('doctors','specs'));
}
    #USER GET DOCTORS DETAILS
    public function GetDocInfo($id){
    $doc = User::find($id);
    return view('pre-doc.userdashb.book',compact('doc'));
    }
    
    #USER GET DOCTORS LIST
    public function showDoctors4usr()
    {
        $doctors = User::where('role', 'doc')->with('docSpec')->get();
        $specs = Spec::all();
        return view('pre-doc.userdashb.doctors', compact('doctors','specs'));
    }






    #GET EDIT PROFILE PAGE FOR ADMIN OR USER
    public function edit(){
        $user = Auth::user();
        if($user->role == 'user'){return view('pre-doc.userdashb.editprofile',compact('user'));}
        if($user->role == 'admin'){return view('pre-doc.admindash.editprofile',compact('user'));}
        if($user->role == 'doc'){return view('pre-doc.docdash.editprofile',compact('user'));}

        

    }
    public function update(request $request){
        $user = Auth::user();

        // Update user information
        $user->name = $request->input('user_name');
        $user->gov = $request->input('user_gov');
        $user->birth = $request->input('user_birth');
        $user->sex = $request->input('user_s');
        $user->email = $request->input('user_email');
        $user->phone = $request->input('user_phone');
        // Update password if provided
        if ($request->filled('user_pass')) {
            $user->password = Hash::make($request->input('user_pass'));
        }
    
        // Save the updated user
        $user->save();
        return redirect('/user/editprofile')->with('success','تم تحديث بياناتك بنجاح.');

    }
################################################################

    public function GetDocInfo4doc($id){
        $doc = User::find($id);
        return view('pre-doc.docdash.book',compact('doc'));
        }



    #START ADMIN

    #ADMIN INSERT USERS
    
    public function insert(request $request){
        $user = new User;
        $user->name = $request->user_name;
        $user->gov = $request->user_gov;
        $user->birth = $request->user_birth;
        $user->sex = $request->user_s;
        $user->email = $request->user_email;
        $user->password = $request->user_pass;
        $user->save();
        return redirect('/user/add')->with('success','تمت إضافة المستخدم بنجاح');

    }

    #ADMIN SHOW USERS
    public function show(){
        $users = User::all();
        $count = $users->count();

        return view('pre-doc.admindash.users',compact('users','count'));
    }
    
    #ADMIN GET DOCTOR SPECS
    public function adddoc(){
        $specs = Spec::all();
        return view('pre-doc.admindash.adddoc',compact('specs'));
    }
        
    #ADMIN ADD DOCTOR
    public function insertdoc(request $request){
        $doc = new User();
        $doc->usr_img = file_get_contents($request->file('user_img')->getPathname());
        $doc->name = 'د/'.$request->user_name;
        $doc->gov = $request->user_gov;
        $doc->birth = $request->user_birth;
        $doc->sex = $request->user_s;
        $doc->email = $request->user_email;
        $doc->password = $request->user_pass;
        $doc->phone = $request->user_phone;
        $doc->specialization_id =$request->spec;
        $doc->session_price = $request->price;
        $doc->role = 'doc';
        $doc->save();

        return redirect('/doc/add')->with('success', 'تمت إضافة الدكتور بنجاح');


    }
    
    #ADMIN SHOW DOCTORS
    public function showDoctors4admin()
    {
        $users = User::where('role', 'doc')->with('docSpec')->get();;
        $count = $users->count();
    
        return view('pre-doc.admindash.docs', compact('users','count'));
    }

    #ADMIN SHOW ADMINS
    public function admins(){
        $users = User::where('role', 'admin')->get();
        $count = $users->count();
        return view('pre-doc.admindash.admins', compact('users','count'));

    }

    public function insertadmin(request $request){
        $admin = new User();
        $admin->name = $request->user_name;
        $admin->gov = $request->user_gov;
        $admin->birth = $request->user_birth;
        $admin->sex = $request->user_s;
        $admin->email = $request->user_email;
        $admin->password = $request->user_pass;
        $admin->phone = $request->user_phone;
        $admin->role = 'admin';
        $admin->save();

        return redirect('/add/admin')->with('success', 'تمت إضافة المشرف بنجاح');


    }
    #ADMIN UPDATE USERS
    public function adminupdate(request $request,$id){
        $user = User::find($id);

        // Update user information
        $user->name = $request->input('user_name');
        $user->gov = $request->input('user_gov');
        $user->birth = $request->input('user_birth');
        $user->sex = $request->input('user_s');
        $user->email = $request->input('user_email');
        $user->phone = $request->input('user_phone');
        // Update password if provided
        if ($request->filled('user_pass')) {
            $user->password = Hash::make($request->input('user_pass'));
        }
    
        // Save the updated user
        $user->save();
        return redirect("/edituser/$user->id")->with('success','تم تحديث بياناتك بنجاح.');

    }

    public function adminedit($id){
        $user = User::find($id);
        return view('pre-doc.admindash.edituser',compact('user'));

    }

    #END ADMIN UPDATE


    #ADMIN DELETE ANY USER
    public function destroy($id){
        $user=User::find($id);
        $user->delete();
        return back()->with('success','تم حذف المستخدم بنجاح');
    }
    #END ADMIN
}
