@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="card-header">
                <h3 class="fs-2 text-success">
                    Edit Announcement
                    <a href="{{ url('admin/announcement/') }}" class="btn btn-outline-danger btn-sm float-end my-2">Back</a>
                    <span>                
                        <i class="mdi mdi-message-alert menu-icon"></i>
                    </span>
                    {{-- Revert announcement --}}
                </h3>

            </div>
            <div class="card-body bg-gray">
                <form action="{{ url('admin/announcement/'.$announcement->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="border border-primary p-5">
                        <h2 class="text-danger">* Required</h2>

                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 ">
                                <div class="form-outline">
                                    <label class="fs-3 form-label" >Announcement Topic <span class="text-danger">*</span></label>
                                    <input type="text" name="announcement_topic" class="form-control  " value="{{ $announcement->announcement_topic }}" />
                                    @error('announcement_topic') <small class="text-danger">{{$message}}</small>@enderror
                                </div>
                            </div>
                        </div>
                        <!-- Text input -->
                        <div class="col-md-12 mb-3 ">
                            <label class="fs-3 form-label" >Announcement Content <span class="text-danger">*</span></label>
                            <textarea name="announcement_content" class="form-control " rows="20">{{ $announcement->announcement_content }}</textarea>
                            @error('announcement_content') <small class="text-danger">{{$message}}</small>@enderror

                        </div>
                        <div class="col-md-4 mb-3  ">
                            <div class="row">
                                <label class="form-label" >Announcement Image</label>
                                <div class="col-md-4 mb-3">
                                    <img src=" {{ asset('uploads/announcementImages/'.$announcement->image) }} " class="mt-2" width="150px" height="150px">
                                </div>
                            </div>
                            <input type="file" name="image" class="form-control" /> 
                            @error('image') <small class="text-danger">{{$message}}</small>@enderror
                      
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-success"> <span class="font-weight-bold">Submit</span> </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection