<?php

namespace App\Http\Livewire\User\Announcement;

use Livewire\Component;
use App\Models\Announcement;

class Index extends Component
{
    public function render()
    {
        $announcements = Announcement::orderBy('id', 'DESC')->paginate(5);//get the data coming from the announcement model and paginate it
        return view('livewire.user.announcement.index', ['announcements' => $announcements]);
    }
}
