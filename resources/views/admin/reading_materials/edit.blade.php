@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h3 class="fs-2 text-success">Edit Reading Materials
                    <a href="{{ url('admin/reading-materials/') }}" class="btn btn-outline-danger btn-sm float-end">Back</a>
                    {{-- Revert announcement --}}
                </h3>
            </div>
            <div class="card-body bg-gray">
                <form action="{{ url('admin/reading-materials/'.$reading_file->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="border border-primary p-5">
                        <div class="row mb-4">
                            <h2 class="text-danger">* Required</h2>
                            <div class="col-md-6 mb-3 ">
                                <div class="form-outline">
                                    <label class="fs-3 form-label">File Topic</label>
                                    <input type="text" name="material_filename" class="form-control" value="{{$reading_file->material_filename}}"/>
                                    @error('material_filename')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mt-5">
                                <input type="file" name="reading_material" id="">
                                @error('reading_material')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-success float-end"> <span
                                class="font-weight-bold">Edit</span> </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
