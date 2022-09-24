@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="card-header">
                <h3 class="fs-2 text-success">
                    Add Announcement
                    <a href="{{ url('admin/announcement/') }}" class="btn btn-outline-danger btn-sm float-end my-2">Back</a>
                    <span>                
                        <i class="mdi mdi-message-alert menu-icon"></i>
                    </span>
                    {{-- Revert announcement --}}
                </h3>

            </div>
            <div class="card-body bg-gray ">
                <form action="{{ url('admin/announcement') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="border border-primary p-5">
                        <h2 class="text-danger">* Required</h2>
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 ">
                                <div class="form-outline">
                                    <label class="fs-3 form-label">Announcement Topic <span class="text-danger">*</span></label>
                                    <input type="text" name="announcement_topic" class="form-control  " />
                                    @error('announcement_topic') <small class="text-danger">{{$message}}</small>@enderror
                                </div>
                            </div>
                        </div>
                        <!-- Text input -->
                        <div class="col-md-12 mb-3 ">
                            <label class="fs-3 form-label">Announcement Content <span class="text-danger">*</span></label>
                            <textarea name="announcement_content" class="form-control " rows="20"></textarea>
                            @error('announcement_content') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3  ">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" /> 
                            @error('image') <small class="text-danger">{{$message}}</small>@enderror
                      
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-success"> Upload </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection