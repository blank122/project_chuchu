<?php

namespace App\Http\Livewire\Admin\ReadingMaterials;

use App\Models\ReadingMaterials;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $file_id;

    public function deleteFile($file_id)
    {
        $this->file_id = $file_id;
    }

    public function destroyFile()
    {
       $reading_file = ReadingMaterials::find($this->file_id); //will search the id of categories from the database
       $path = 'uploads/files/'.$reading_file->reading_material;
       if(File::exists($path)){
        File::delete($path);
       } 
       $reading_file->delete();
       session()->flash('message', 'Record has been deleted');
       $this->dispatchBrowserEvent('close-modal');
    }



    public function render()
    {
        $readingFile = ReadingMaterials::orderBy('id', 'DESC')->paginate(3);//get the data coming from the announcement model and paginate it
        return view('livewire.admin.reading-materials.index', ['readingFile' => $readingFile]);
    }
}
