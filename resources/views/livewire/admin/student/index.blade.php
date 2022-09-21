    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="">

        <div wire:ignore.self class="modal fade" id="deleteDataModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">

            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Drop Student</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form wire:submit.prevent="destroyAnnouncement">

                        <div class="modal-body">
                            <h6>Are you sure you want to delete this data?</h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12">

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            <div class="card-header">
                <h3 class="fs-2 text-primary">Students 
                    <span>
                        <i class="mdi mdi-message-alert menu-icon"></i>
                    </span>
                    <a href="{{ url('admin/announcement/create') }}"
                        class="btn btn-outline-primary btn-sm float-end my-2">Enroll Student</a>
                </h3>
            </div>
            <div class="card-body shadow p-3 mb-5 bg-body rounded mt-3">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Email</th>
                            <th>Birthdate</th>
                            <th>Gender</th>
                            <th>Contact Number</th>
                            <th>Year Graduated</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Student as $student)
                            <tr>
                                <td>{{ $student->student_id }}</td>
                                <td class="letter-spaced">{{ $student->first_name }}</td>
                                <td class="letter-spaced">{{ $student->middle_name }}</td>
                                <td class="letter-spaced">{{ $student->last_name }}</td>
                                <td class="letter-spaced">{{ $student->gender }}</td>
                                <td class="letter-spaced">{{ $student->contact_no }}</td>
                                <td class="">
                                    <a href="{{ url('admin/student/' . $student->student_id . '/edit') }}"
                                        class="btn btn-outline-success my-2">Update</a>
                                    <a href="#" wire:click="delete({{ $student->student_id }})"
                                        class="btn btn-outline-danger my-2" data-bs-toggle="modal"
                                        data-bs-target="#deleteDataModal">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $announcements->links() }}
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            window.addEventListener('close-modal', event => {
                $('#deleteDataModal').modal('hide');
            });
        </script>
    @endpush
