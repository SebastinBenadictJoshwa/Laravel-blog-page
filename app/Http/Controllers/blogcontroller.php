<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class blogcontroller extends Controller
{
    public function signup(Request $request) {
        $validateData=$request->validate(
            [
                'name'=>['required'],
                'email'=>['required'],
                'password'=>['required'],
            ]
            );
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        if (Auth::attempt($request->only('email','password'))) {
            return redirect('loginpage');
        }
    }
    public function login(Request $request) {
        $email=$request->email;
        $validateData=$request->validate(
            [
                'email'=>['required'],
                'password'=>['required'],
            ]
            );
            if (Auth::attempt($request->only('email','password'))) {
                $blog=DB::table('users')->where('email', $email)->first();
                return view('blog', compact('blog'));
            }
            else {
                return back()->with('message','invalid email or password');
            }
    }
    
    public function editor() {
        $id=Auth::id();
        $idd=DB::table('users')->where('id',$id)->first();
        return view('edit',compact('idd'));
    }

    public function edit(Request $request) {
        $validateData=$request->validate ([
            'blog'=>['required'],
        ]);
        $user=user::find($request->id);
        $userimage=$request->file('image');
        if(!$userimage){
            return back()->with('message','image required !!');
        }
        $name=date('Y-md-d').time().".".$userimage->extension();
        $destination_path=public_path('/images');
        $userimage->move($destination_path,$name);
        $user->image_url="images/".$name;
        $user->blog=$request->blog;
        $user->save();

        $blog=$user;
        return view('blog', compact('blog'));
}
    public function readblog() {
        $user=user::paginate(1);
        return view('blog.read',compact('user'));
    }

    public function delete($id) {
        $user=user::find($id);
        $user->delete();
        return redirect('deleted');
    }

    public function deleted(){
        return view('blog.delete');
    }
    public function forgot(Request $request){
        $validatedata=$request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $user1=DB::table('users')->where('email',$request->email)->first();
        if(is_null($user1)){
            return back()->with('message','User not found !!!');
        }
        $user=user::find($user1->id);
        $password=Hash::make($request->password);
        $user->password=$password;
        $user->save();

        return redirect('loginpage');
    }
}
