<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::select('subjects.*','courses.course_name')->leftJoin('courses', 'subjects.course_id', '=', 'courses.course_id')->get();
      
        return view('admin.subject.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course = Course::all();
        return view('admin.Subject.new', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subject = new Subject();
        $subject->course_id = $request->course_id;
        $subject->name = $request->name;
        $subject->description = $request->description;
        if (isset($request->status)) {
            if ($request->status == "on") {
                $subject->status = true;
            } else {
                $subject->status = false;
            }
        } else {
            $subject->status = false;
        }
        $imageName = rand(1000, 9999) . time() . '.' . $request->image->extension();

        $request->image->move('images/subject', $imageName);
        $subject->image = $imageName;
        $subject->save();
        return redirect('/admin/subject')->with('msg', "Subject Added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        
        $course = Course::all();
        return view('admin.subject.edit', compact('subject','course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        $subject->course_id = $request->course_id;
        $subject->name = $request->name;
        $subject->description = $request->description;
        if (isset($request->status)) {
            if ($request->status == "on") {
                $subject->status = true;
            } else {
                $subject->status = false;
            }
        } else {

            $subject->status = false;
        }
        if (isset($request->image)) {
            unlink('image/subject/' . $subject->image);
            $imageName = rand(1000, 9999) . time() . '.' . $request->image->extension();

            $request->image->move('images/subject', $imageName);
            $subject->image = $imageName;
        }
        $subject->update();
        return redirect()->route('subject.index')->with('msg', "Subject Updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('subject.index')->with('msg', "Subject Deleted Successfully");
    }
}
