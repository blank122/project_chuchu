{{-- Nothing in the world is as soft and yielding as water. --}}


<div class="card-header">
    <h3 class="fs-2 text-primary">Announcement
        <span>
            <i class="mdi mdi-message-alert menu-icon"></i>
        </span>
    </h3>
</div>

@forelse ($announcements as $item)
    <div class="container d-flex flex-wrap">
        <div class="card my-5 card mb-3" style="width: 50vh; height:50vh;">
            <img src="{{ asset('uploads/announcementImages/' . $item->image) }}" class="card-img-top h-50"
                alt="Announcement Image">
            <div class="card-body">
                <h5 class="card-title">{{ $item->announcement_topic }}</h5>
                <p class="card-text text-justify">{{ $item->announcement_content }}</p>
            </div>
        </div>
    </div>
@empty
    <div class="card-header">
        <h3 class="fs-2 text-danger">No Data has been found
            <span>
                <i class="mdi mdi-message-alert menu-icon"></i>
            </span>
        </h3>
    </div>
@endforelse
