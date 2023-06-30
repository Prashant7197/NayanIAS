@extends('adminlayout')
@section('bodycontent')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Courses/</span> Edit Course</h4>

    <!-- Basic Layout -->
    <div class="row">

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit Course</h5>
                 
                    <!-- <small class="text-muted float-end">Merged input group</small> -->
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('course.update',$course->course_id)}}" method="POST" enctype="multipart/form-data">
                        @csrf @method('PUT') 
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Course Name</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                <input type="text" required class="form-control" value="{{$course->course_name}}" name="name" id="basic-icon-default-fullname" placeholder="{{$course->cours_name}}" aria-label="{{$course->cours_name}}" aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Profile Image</label>
                            <img for="formfile" src="/images/course/{{$course->image}}" class="" style="height: 100px;" />
                            <input class="form-control" name="image"  type="file" id="formFile">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-message">Description</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                                <textarea id="basic-icon-default-message" name="description" required class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2">{{$course->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" name="status" type="checkbox" id="flexSwitchCheckChecked" @if($course->status== true)checked @endif>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Course Active</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->
@stop