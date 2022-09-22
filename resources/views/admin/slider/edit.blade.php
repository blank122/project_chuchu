@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h3 class="fs-2 text-success">Topnotchers Slide
                    <a href="{{ url('admin/slider/') }}" class="btn btn-outline-danger btn-sm float-end">Back</a>
                    {{-- Revert announcement --}}
                </h3>
            </div>
            <div class="card-body bg-gray">
                <form action="{{ url('admin/slider'). }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="border border-primary p-5">
                        <div class="row mb-4">
                            <h2 class="text-danger">* Required</h2>
                            <div class="col-md-6 mb-3 ">
                                <div class="form-outline">
                                    <label class="fs-3 form-label">Full Name</label>
                                    <input type="text" name="name" class="form-control" />
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <div class="form-outline">
                                    <label class="fs-3 form-label">Rank</label>
                                    <input type="number" name="rank" class="form-control" />
                                    @error('rank')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mt-5">
                                <label class="fs-3 form-label">Topnotchers Image </label>
                                <input type="file" name="image" class="form-control">
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary float-end"> <span
                                class="font-weight-bold">Submit</span> </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
