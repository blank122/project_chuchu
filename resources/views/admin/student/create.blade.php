@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="card-header">
                <h3 class="fs-2 text-success">
                    Enroll Student
                    <a href="{{ url('admin/student/') }}" class="btn btn-outline-danger btn-sm float-end my-2">Back</a>
                    <span>
                        <i class="mdi mdi-message-alert menu-icon"></i>
                    </span>
                    {{-- Revert announcement --}}
                </h3>

            </div>
            <div class="card-body bg-gray ">
                <form action="{{ url('admin/student') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="border border-primary p-5">
                        <h2 class="text-danger">* Required</h2>

                        <div class="row mb-4">
                            <div class="col-md-4 mb-3 ">
                                <div class="form-outline">
                                    <label class="fs-3 form-label">First Name<span class="text-danger">*</span></label>
                                    <input type="text" name="first_name" class="form-control  " />
                                    @error('first_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 ">
                                <div class="form-outline">
                                    <label class="fs-3 form-label">Middle Name<span class="text-danger">*</span></label>
                                    <input type="text" name="middle_name" class="form-control  " />
                                    @error('middle_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 ">
                                <div class="form-outline">
                                    <label class="fs-3 form-label">Last Name<span class="text-danger">*</span></label>
                                    <input type="text" name="first_name" class="form-control  " />
                                    @error('last_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 ">
                                <div class="form-outline">
                                    <label class="fs-3 form-label">Email Address<span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control  " />
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <div class="form-outline">
                                    <label class="fs-3 form-label">Date of Birth<span class="text-danger">*</span></label>
                                    <input type="date" name="birthdate" class="form-control  " />
                                    @error('birthdate')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- Text input -->
                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                            <h6 class="mb-0 me-4">Gender: </h6>
                            <div>
                                <input type="radio" name="inlineRadioOptions" id="femaleGender" value="option1" />
                                <label class="form-check-label">Female</label>
                            </div>
                            <div>
                                <input type="radio" class="m-2" name="inlineRadioOptions" id="maleGender"
                                    value="option1" />
                                <label class="form-check-label m-0">Male</label>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 ">
                                <div class="form-outline">
                                    <label class="fs-3 form-label">Contact Number<span class="text-danger">*</span></label>
                                    <input type="text" name="contact_no" class="form-control  " />
                                    @error('contact_no')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <div class="form-outline">
                                    <label class="fs-3 form-label">Year Graduate<span class="text-danger">*</span></label>
                                    <input type="text" name="year" class="form-control" placeholder="YYYY-YYYY"/>
                                    @error('year')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-success"> Enroll </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
