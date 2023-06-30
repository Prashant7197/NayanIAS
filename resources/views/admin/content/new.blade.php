@extends('adminlayout')
@section('bodycontent')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Contents/</span> Add new Content</h4>

        <!-- Basic Layout -->
        <div class="row">

            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">New Content as Video</h5>

                        <!-- <small class="text-muted float-end">Merged input group</small> -->
                    </div>
                    <div class="card-body">
                        <form method="post" action="/admin/content" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <div class="input-group">
                                    <label class="input-group-text" for="inputGroupSelect01">Subject</label>
                                    <select name="subject_id" class="form-select" required id="inputGroupSelect01">

                                        <option disabled selected>Choose...</option>
                                        @foreach ($subjects as $item)
                                            <option value="{{ $item->subject_id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Content Name</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                    <input type="text" required class="form-control" name="name"
                                        id="basic-icon-default-fullname" placeholder="SSC" aria-label="SSC"
                                        aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Content link</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                    <input type="text" required class="form-control" name="contentlink"
                                        id="basic-icon-default-fullname" placeholder="SSC" aria-label="SSC"
                                        aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-message">Description</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-message2" class="input-group-text"><i
                                            class="bx bx-comment"></i></span>
                                    <textarea id="basic-icon-default-message" name="description" required class="form-control"
                                        placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?"
                                        aria-describedby="basic-icon-default-message2"></textarea>
                                </div>
                            </div>
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" name="status" type="checkbox" id="flexSwitchCheckChecked"
                                    checked="">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Content Active</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">New Content as document</h5>

                        <!-- <small class="text-muted float-end">Merged input group</small> -->
                    </div>
                    <div class="card-body">
                        <form method="post" action="/admin/content" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <div class="input-group">
                                    <label class="input-group-text" for="inputGroupSelect01">Subject</label>
                                    <select name="subject_id" class="form-select" required id="inputGroupSelect01">

                                        <option disabled selected>Choose...</option>
                                        @foreach ($subjects as $item)
                                            <option value="{{ $item->subject_id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Content Name</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                    <input type="text" required class="form-control" name="name"
                                        id="basic-icon-default-fullname" placeholder="SSC" aria-label="SSC"
                                        aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">document</label>
                                <input class="form-control" name="document" required type="file" id="formFile">
                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-message">Description</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-message2" class="input-group-text"><i
                                            class="bx bx-comment"></i></span>
                                    <textarea id="basic-icon-default-message" name="description" required class="form-control"
                                        placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?"
                                        aria-describedby="basic-icon-default-message2"></textarea>
                                </div>
                            </div>
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" name="status" type="checkbox"
                                    id="flexSwitchCheckChecked" checked="">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Content Active</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@stop
