<?php

namespace App\Http\Livewire\User\ReadingMaterials;

use App\Models\ReadingMaterials;
use Livewire\Component;
use Livewire\WithPagination;


class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $readingFile = ReadingMaterials::orderBy('id', 'DESC')->paginate(5);//get the data coming from the announcement model and paginate it
        return view('livewire.user.reading-materials.index', ['readingFile' => $readingFile]);
    }
}
