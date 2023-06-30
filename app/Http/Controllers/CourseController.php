<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.course.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new Course();
        $course->course_name = $request->name;
        
        $course->course_name = $request->name;
        $course->description = $request->description;
        if (isset($request->status)) {
            if ($request->status == "on") {
                $course->status = true;
            } else {
                $course->status = false;
            }
        } else {
            $course->status = false;
        }
        $imageName = rand(1000, 9999) . time() . '.' . $request->image->extension();

        $request->image->move('images/course', $imageName);
        $course->image = $imageName;
        $course->save();
        return redirect('/admin/course')->with('msg', "Course Added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('admin.course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        // return $request;
        $course->course_name = $request->name;
        $course->description = $request->description;
        if (isset($request->status)) {
            if ($request->status == "on") {
                $course->status = true;
            } else {
                $course->status = false;
            }
        }else{
            
            $course->status = false;
        }
        if (isset($request->image)) {
            unlink('/image/course/' . $course->image);
            $imageName = rand(1000, 9999) . time() . '.' . $request->image->extension();

            $request->image->move('images/course', $imageName);
            $course->image = $imageName;
        }
        $course->update();
        return redirect()->route('course.index')->with('msg', "Course Updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();       
         return redirect()->route('course.index')->with('msg', "Course Deleted Successfully");


    }
}
