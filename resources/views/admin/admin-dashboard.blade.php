@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="me-md-3 me-xl-5">
                        @if (session('message'))
                            <h2>{{ session('message') }}, {{ Auth::user()->name }}</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="card mx-2" style="width: 18rem;">
            <img src="{{asset('images/stud.jpg')}}" class="card-img-top img-fluid mt-2">
            <div class="card-body">
                <h5 class="card-title">Enrolled Students</h5>
                <p class="card-text">View All Students</p>
                <a href="{{ url('admin/students/index') }}" class="btn btn-primary">View</a>
            </div>
        </div>
        <div class="card mx-2" style="width: 18rem;">
            <img src="{{asset('images/stud.jpg')}}" class="card-img-top img-fluid mt-2">
            <div class="card-body">
                <h5 class="card-title">Approve Student</h5>
                <p class="card-text">Approval for Student Enrollment</p>
                <a href="{{ url('admin/user-approval') }}" class="btn btn-primary">View</a>
            </div>
        </div>
        <div class="card mx-2" style="width: 18rem;">
            <i class="fa-solid fa-book "></i>
            <div class="card-body">
                <h5 class="card-title">Reading Materials</h5>
                <p class="card-text">View All Reading Materials</p>
                <a href="{{ url('admin/reading-materials/') }}" class="btn btn-primary">View</a>
            </div>
        </div>
        <div class="card mx-2" style="width: 18rem;">
            <img src="{{ url('uploads/announcementImages/1663344136.jpg') }}"
                class="card-img-top img-fluid mt-2 border border-danger" alt="students">
            <div class="card-body">
                <h5 class="card-title">Announcements</h5>
                <p class="card-text">View All Announcements</p>
                <a href="{{ url('admin/announcement/') }}" class="btn btn-primary">View</a>
            </div>
        </div>
        <div class="card mx-2" style="width: 18rem;">
            <img src="{{ url('uploads/announcementImages/1663344136.jpg') }}"
                class="card-img-top img-fluid mt-2 border border-danger" alt="students">
            <div class="card-body">
                <h5 class="card-title">Topnotchers</h5>
                <p class="card-text">View All Topnotchers</p>
                <a href="{{url('admin/slider')}}" class="btn btn-primary">View</a>
            </div>
        </div>
    </div>
    
@endsection
