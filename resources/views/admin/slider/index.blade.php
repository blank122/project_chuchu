@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="card-header shadow p-3 mb-5 bg-body rounded mt-3">
                <h3 class="text-primary m-auto">Topnotchers
                    <a href="{{ url('admin/slider/create') }}" class="btn btn-primary btn-sm float-end">Add Topnotchers</a>
                    {{-- Revert products --}}
                </h3>
            </div>
            <div class="card-body shadow p-3 mb-5 bg-body rounded mt-3">
                <table class="table table-bordered table-striped ">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Rank</th>
                            <th>Image</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sliders as $items)
                            <tr>                                 
                                <td>{{ $items->name }}</td>
                                <td>{{ $items->rank }}</td>
                                <td>
                                    <img src="{{ asset('uploads/slider/' . $items->image) }}"
                                    style="width: 100px; height:100px;">
                                </td>  
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">No Data has found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{-- Card Body End --}}
        </div>
    </div>
@endsection
