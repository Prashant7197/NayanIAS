<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $courses = Course::all();
        // $subjects = Subject::all();
        $contents = Content::all();
        return view('admin.content.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all();
        $subjects = Subject::all();
        return view('admin.content.new', compact('courses', 'subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $content = new Content();
        $content->subject_id = $request->subject_id;
        if (isset($request->contentlink)) {
            $content->type = 0;
            $content->link = $request->contentlink;
        } else {
            $content->type = 1;
            if (isset($request->document)) {
                $imageName = rand(1000, 9999) . time() . '.' . $request->document->extension();

                $request->document->move('images/content', $imageName);
                $content->link = 'images/content/' . $imageName;
            }
        }
        $content->name = $request->name;
        $content->description = $request->description;

        if (isset($request->status)) {
            if ($request->status == "on") {
                $content->status = true;
            } else {
                $content->status = false;
            }
        } else {

            $content->status = false;
        }

        $content->save();
        
        $courses = Course::all();
        $subjects = Subject::all();
        $contents = Content::all();
        return view('admin.content.index', compact('courses', 'subjects', 'contents'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $content)
    {
        $courses = Course::all();
        $subjects = Subject::all();
        return view('admin.content.edit', compact('courses', 'subjects', 'content'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Content $content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)
    {
        //
    }
}
