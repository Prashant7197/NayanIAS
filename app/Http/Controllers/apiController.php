<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Course;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class apiController extends Controller
{
    public function login($mobile)
    {
        $otp =  rand(100000, 999999);

        if (Student::where('mobile', $mobile)->count() > 0) {
            $student = Student::where('mobile', $mobile)->first();
            $student->otp = $otp;
            $student->update();
            return ['status' => true, 'Registration' => false, 'Login' => true];
        } else {
            $student = new Student();
            $student->otp = $otp;
            $student->status = 1;
            $student->number = $mobile;
            $student->save();
            return ['status' => true, 'Registration' => true, 'Login' => false];
        }
    }
    public function logincheck(Request $request)
    {
        $token =  md5($request->mobile . rand(100000, 999999));
        if (Student::where('mobile', $request->mobile)->where('otp', $request->otp)->count() > 0) {
            $student = Student::where('mobile', $request->mobile)->first();
            $student->token = $token;
            $student->update();
            return ['status' => true, 'token' => $token];
        } else {
            if (Student::where('mobile', $request->mobile)->count() > 0) {

                return ['status' => false, 'msg' => 'OTP is wrong'];
            } else {
                return ['status' => false, 'msg' => 'mobile is not registered'];
            }
        }
    }
    public function isvalide(Request $request)
    {
        if (Student::where('token', $request->token)->count() > 0) {

            return ['status' => true];
        } else {
            return ['status' => false];
        }
    }
    public function getcourse()
    {
        $courses = Course::where('status', 1)->get();
        return $courses;
    }
    public function getsubject($course_id)
    {
        $subject = Subject::where('course_id', $course_id)->where('status', 1)->get();
        return $subject;
    }
    public function getcontent($subject_id)
    {
        $content = Content::where('subject_id', $subject_id)->where('status', 1)->get();
        return $content;
    }
    public function mynotification()
    {
        return ['mynotification' => 'mn'];
    }
    public function mycourse()
    {
        return ['mycourse' => 'mc'];
    }
    public function search()
    {
        return ['search' => 'f'];
    }
}
