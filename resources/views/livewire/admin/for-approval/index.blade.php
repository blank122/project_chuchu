    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="">
        <div class="col-md-12">

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            <div class="card-header">
                <h3 class="fs-2 text-primary">Approve Students
                    <span>
                        <i class="mdi mdi-message-alert menu-icon"></i>
                    </span>
                </h3>
            </div>
            <div class="card-body shadow p-3 mb-5 bg-body rounded mt-3">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Student Email</th>
                            <th>Registered at</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td class="letter-spaced">{{ $user->name }}</td>
                                <td class="letter-spaced">{{ $user->email }}</td>
                                <td class="letter-spaced">{{$user->created_at}}</td>
                                <td>
                                    @if ($user->role_as == 0)
                                        Student
                                    @else
                                        Admin
                                    @endif
                                </td>
                                <td>
                                    @if ($user->status == 0)
                                        Not Verified Student
                                    @else
                                        Verified 
                                    @endif
                                </td>
                                <td class="">
                                    <a href="{{url('admin/status/' . $user->id ) }}"
                                        class="btn btn-outline-success my-2">
                                        @if ($user->status == 1)
                                            Deactivate User
                                        @else
                                            Activate User
                                        @endif
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
