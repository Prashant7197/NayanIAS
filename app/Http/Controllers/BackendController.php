<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Feedback;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function home()
    {   $feedback = Feedback::all();
        return view('home', compact('feedback'));
    }
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request['username'],
            'password' => $request['password'],
        ];

        // $user = new User();
        // $user->name     = "admin";
        // $user->email    = $request['username'];
        // $user->password = Hash::make($request['password']);

        // $user->save();

        if (Auth::attempt($credentials)) {
            return redirect()->route('admindashboard');
        }else{
            return back();
        }
    }
    public function Logout()
    {
        
        Auth::logout();

        return redirect('/login');
    }

    public function registernow(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->number = $request->number;
        $student->status = $request->status;
        $student->update();
        return back()->with('model','');
    }
    public function senquery(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject =  $request->subject;
        $contact->massage = $request->massage;
        $contact->status = 1;
        $contact->save();
        return  back()->with('model','');
    }







    public function enquery()
    {
        $enquery = Contact::all();
        return view('admin.enquery',compact('enquery'));
    }
}
