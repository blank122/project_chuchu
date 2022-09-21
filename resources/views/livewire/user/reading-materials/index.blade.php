{{-- Because she competes with no one, no one can compete with her. --}}
{{-- Nothing in the world is as soft and yielding as water. --}}
<div class="row">

    <div class="card-header">
        <h3 class="fs-2 text-primary">Reading Materials
            <span>
                <i class="mdi mdi-message-alert menu-icon"></i>
            </span>
        </h3>
    </div>


    <div class="card-body shadow p-3 mb-5 bg-body rounded mt-3">
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr>

                    <th>File Topic</th>
                    <th>File</th>
                    <th>Uploaded At</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($readingFile as $readingFile)
                    <tr>

                        <td class="letter-spaced">{{ $readingFile->material_filename }}</td>
                        <td class="letter-spaced">{{ $readingFile->reading_material }}</td>
                        <td class="letter-spaced">{{ $readingFile->created_at }}</td>
                        <td class="">
                            <a href="{{ url('user/documents/' . $readingFile->id . '/view') }}"
                                class="btn btn-outline-success my-2">View File</a>
                        </td>
                    </tr>

            </tbody>
        </table>
        <div>
        @empty
            <div class="card-header">
                <h3 class="fs-2 text-danger">No Data has been found
                    <span>
                        <i class="mdi mdi-message-alert menu-icon"></i>
                    </span>
                </h3>
            </div>
            @endforelse

        </div>
    </div>
</div>
