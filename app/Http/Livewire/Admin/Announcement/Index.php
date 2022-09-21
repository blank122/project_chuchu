<?php

namespace App\Http\Livewire\Admin\Announcement;

use Livewire\Component;
use App\Models\Announcement;
use Livewire\WithPagination;
use Illuminate\Support\Facades\File;



class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $announcement_id;

    public function deleteAnnouncement($announcement_id)
    {
        $this->announcement_id = $announcement_id;
    }

    public function destroyAnnouncement()
    {
       $announcement = Announcement::find($this->announcement_id); //will search the id of categories from the database
       $path = 'uploads/announcementImages/'.$announcement->image;
       if(File::exists($path)){
        File::delete($path);
       } 
       $announcement->delete();
       session()->flash('message', 'Announcement Deleted');
       $this->dispatchBrowserEvent('close-modal');
    }


    public function render()
    {
        $announcements = Announcement::orderBy('id', 'DESC')->paginate(3);//get the data coming from the announcement model and paginate it
        return view('livewire.admin.announcement.index', ['announcements' => $announcements]);
    }
}
